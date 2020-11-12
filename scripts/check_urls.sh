#!/usr/bin/env bash

set -euo pipefail

CMD_NAME=${0##*/}

usage() {
  cat <<USAGE >&2
Check each URL from list of URLs.
Prints out if HEAD request were successful or not.

Usage:
    $CMD_NAME [--filter] /path/to/url_list.txt
    --filter  Optional. Filters out URLs which are returning 200 and prints them out.
              Otherwise will print out each URL along with HTTP code in fancy colors.
    --help    Prints this help

URL list could be provided through STDIN:
    cat /path/to/url_list.txt | $CMD_NAME [--filter]
USAGE
  exit 1
}

# Fancy colors
blu="\e[94m"   # Light Blue
red="\e[1;91m" # Bold Red
clr="\e[0m"    # Reset
function printok() {
  printf "✅ ${blu}%s${clr}\n" "$*"
}
function printerr() {
  printf "❌ ${red}%s${clr}\n" "$*" >&2
}

FILTER=0
URLS=

# Process arguments
while [[ $# -gt 0 ]]; do
  case "$1" in
  --filter)
    FILTER=1
    shift 1
    ;;
  --help)
    usage
    ;;
  *)
    URLS="$1"
    shift 1
    ;;
  esac
done

while read -r URL; do
  RES=$(curl --head --silent --location --output /dev/null --write-out "%{http_code}" "${URL}")
  if [ "$RES" = "200" ]; then
    [[ $FILTER -eq 0 ]] && printok "$RES" "$URL" || echo "${URL}"
  else
    [[ $FILTER -eq 0 ]] && printerr "$RES" "$URL"
  fi
done < <(grep "^http" "${URLS:-/dev/stdin}")
