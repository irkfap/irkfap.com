#!/usr/bin/env bash

# Check each URL from list of URLs
# Prints out if HEAD request were successful or not
#
# Usage:
#   ./check_urls.sh /path/to/url_list.txt
# or:
#   cat /path/to/url_list.txt | ./check_urls.sh

set -euo pipefail

# Fancy colors
blu="\e[94m"   # Light Blue
red="\e[1;91m" # Bold Red
clr="\e[0m"    # Reset
function printok() {
  printf "✅ ${blu}%s${clr}\n" "$*"
}
function printerr() {
  printf "❌ ${red}%s${clr}\n" "$*"
}

#BASEDIR="$( cd "$(dirname "$0")" || true ; pwd -P )"
#URLS="${BASEDIR}/gen_honeypot_urls.txt"

while read -r URL
do
  RES=$(curl --head --silent --location --output /dev/null --write-out "%{http_code}" "${URL}")
  if [ "$RES" = "200" ]; then
      printok "$RES" "$URL"
  else
      printerr "$RES" "$URL"
  fi
done < <(grep -v "^$" "${1:-/dev/stdin}")
#done < <(grep -v "^$" "${URLS}")
