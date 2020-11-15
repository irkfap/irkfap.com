#!/usr/bin/env bash

set -euo pipefail

# For a set of provided URLs, measure average response time for each one.
# https://gist.github.com/siberex/9adb939b1c7872404672697ee7985188

NUM_REQUESTS=100

URLS=()
while IFS='' read -r line; do URLS+=("$line"); done < <(cat << END_OS_LIST
be.ololo.li
ch.ololo.li
de.ololo.li
uk.ololo.li
us.ololo.li
hk.ololo.li
jp.ololo.li
kr.ololo.li
END_OS_LIST
)

for url in ${URLS[*]}; do
  url=$(echo | awk -v url="$url" 'BEGIN {OFS=""} {if (url ~ /^https?:\/\//) print url; else print "https://", url}')
  #echo "Measuring response time for $url"

  req_time_sum=0
  for (( i=1; i<=NUM_REQUESTS; i++ )); do
    # Measure either %{time_starttransfer} or %{time_total}
    req_time=$(curl -s -o /dev/null -w "%{time_total}" "$url" | sed 's/,/\./')
    #echo "$req_time"
    req_time_sum=$(awk "BEGIN{ print $req_time_sum + $req_time }")
  done

  req_avg_time=$(awk "BEGIN{ print $req_time_sum / $NUM_REQUESTS }")

  printf "%s\t%s\n" "$url" "$req_avg_time"
done
