#!/usr/bin/env bash

# Retrieves list of files larger than 600 MB from linux distros mirror
# Saves maximum 10 random links for each distro in the output.txt file
# Usage:
#   gen_honeypot_urls.sh
# or:
#   gen_honeypot_urls.sh /path/to/out.txt

# Exit script when command fails
set -o errexit
# Exit when script tries to use undeclared variable
set -o nounset

BASEDIR="$(
  cd "$(dirname "$0")" || true
  pwd -P
)"

OUTPUT_FILE=${1:-"$BASEDIR/output.txt"}

# Truncate out file
echo "" > "$OUTPUT_FILE"

TMP_OUTPUT_DIR="$(mktemp -d)"

function cleanup() {
  rm -rf "$TMP_OUTPUT_DIR"
}
trap cleanup SIGINT
trap cleanup ERR

URL_PREFIX="https://mirror.yandex.ru"

OS_LIST=$(cat << END_OS_LIST
altlinux
archlinux
centos
debian
fedora
freebsd
gentoo-distfiles
linuxmint
openmandriva
opensuse
slackware
ubuntu
END_OS_LIST
)

DISTROS=("$OS_LIST")

MIN_SIZE=629145600 # 600 MB

for os in ${DISTROS[*]}
do
  echo "Getting list of large files from $URL_PREFIX/$os/ ..."
  # Description:
  # 1. rsync will gather list of *.iso, *.tar.xz and *.tar.gz files from linux distros mirror.
  # 2. grep '\-rw\-r\-\-r\-\-' is needed to filter out directories and keep only files.
  # 3. awk '$2 > min_size { print }' is needed to filter produced list of files by minimal size
  #    because rsync `--min-size` seems to have no effect with `--dry-run` and `--list-only`.
  #    Note this filter will not work on some systems where rsync outputs size with separators
  #       (like 123'456'789 instead of 123456789).
  #    In that case output will contain small files too.
  # 4. awk '{ print prefix$5 }' converts file path to prefixed URL.
  rsync -rv --include="*/" --include="*.iso" --include="*.tar.xz" --include="*.tar.gz" --exclude="*" \
        --min-size="$MIN_SIZE" --dry-run --list-only "rsync://mirror.yandex.ru/${os}" . 2>/dev/null \
        | grep '\-rw\-r\-\-r\-\-' \
        | awk -v min_size="$MIN_SIZE" '$2 > min_size { print }' \
        | awk -v prefix="$URL_PREFIX/${os}/" '{ print prefix$5 }' \
        > "$TMP_OUTPUT_DIR/${os}.txt"

  count=$(wc -l "$TMP_OUTPUT_DIR/${os}.txt" | awk '{print $1}' 2>/dev/null || echo 0)
  printf "Saved links:\t%s\t%s\n" "${count}" "$TMP_OUTPUT_DIR/${os}.txt"

  # Get random 10 lines from each produced list and append them to the out file
  sort -R "$TMP_OUTPUT_DIR/${os}.txt" | head -n 10 | grep -v "^$" >> "$OUTPUT_FILE"
done

echo Saved "$OUTPUT_FILE"
echo Checking URLs availability...

# Check produced URL list
"$BASEDIR/check_urls.sh" "$OUTPUT_FILE"

cleanup
