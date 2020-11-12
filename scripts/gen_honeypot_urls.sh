#!/usr/bin/env bash

# Exit script when command fails
set -o errexit
# Exit when script tries to use undeclared variable
set -o nounset

BASEDIR="$(
  cd "$(dirname "$0")" || true
  pwd -P
)"

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
openbsd
openmandriva
opensuse
slackware
ubuntu
ubuntu-cdimage
ubuntu-releases
END_OS_LIST
)

DISTROS=("$OS_LIST")

MIN_SIZE=629145600 # 600 MB

for os in ${DISTROS[*]}; do

  echo Getting list of large files from "$URL_PREFIX/$os/" ...
  rsync -rv --include="*/" --include="*.iso" --include="*.tar.xz" --include="*.tar.gz" --exclude="*" \
        --min-size="$MIN_SIZE" --dry-run --list-only "rsync://mirror.yandex.ru/${os}" . 2>/dev/null \
        | grep '\-rw\-r\-\-r\-\-' \
        | awk -v min_size="$MIN_SIZE" '$2 > min_size { print }' \
        | awk -v prefix="$URL_PREFIX/${os}/" '{ print prefix$5 }' \
        > "$TMP_OUTPUT_DIR/${os}.txt"

  count=$(wc -l "$TMP_OUTPUT_DIR/${os}.txt" | awk '{print $1}' 2>/dev/null || echo 0)
  printf "Saved links:\t%s\t%s\n" "${count}" "$TMP_OUTPUT_DIR/${os}.txt"

  cp "$TMP_OUTPUT_DIR/${os}.txt" "$BASEDIR/tmp1/${os}.txt"
done
