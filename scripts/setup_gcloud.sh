#!/usr/bin/env bash

# Usage: scripts/setup_gcloud.sh [PROJECT_ID]

set -euo pipefail

BASEDIR="$(
  cd "$(dirname "$0")" || true
  pwd -P
)"

GOOGLE_CLOUD_PROJECT=${1:-$(gcloud config list --format 'value(core.project)')}

ROLE_ID=appengine_deployer_gh_actions
SERVICE_ACCOUNT=github-actions-deployment

SERVICE_ACCOUNT_EMAIL=${SERVICE_ACCOUNT}@${GOOGLE_CLOUD_PROJECT}.iam.gserviceaccount.com

bld='\033[1m'
clr='\033[0m'

if gcloud iam roles describe "${ROLE_ID}" --project="${GOOGLE_CLOUD_PROJECT}" >/dev/null 2>&1; then
  echo -e "✓ Found Role $bld${ROLE_ID}$clr in Project $bld${GOOGLE_CLOUD_PROJECT}$clr"
else
  echo -e "… Creating Role $bld${ROLE_ID}$clr in Project $bld${GOOGLE_CLOUD_PROJECT}$clr"
  gcloud iam roles create "${ROLE_ID}" --file="$BASEDIR/appengine_deployer_role.yml" --project="${GOOGLE_CLOUD_PROJECT}"
fi

if gcloud iam service-accounts describe "${SERVICE_ACCOUNT_EMAIL}" --project="${GOOGLE_CLOUD_PROJECT}" >/dev/null 2>&1; then
  echo -e "✓ Found Service Account $bld${SERVICE_ACCOUNT_EMAIL}$clr"
else
  echo -e "… Creating Service Account $bld${SERVICE_ACCOUNT_EMAIL}$clr"
  gcloud iam service-accounts create "${SERVICE_ACCOUNT}" --display-name="${SERVICE_ACCOUNT}" --description="Account to deploy via GitHub Actions" --project="${GOOGLE_CLOUD_PROJECT}"
fi

EXISTING_ROLE_BINDING=$(gcloud projects get-iam-policy "${GOOGLE_CLOUD_PROJECT}" --flatten="bindings[].members" --format="value(bindings.role)" --filter="bindings.role:roles/${ROLE_ID} AND bindings.members:serviceAccount:${SERVICE_ACCOUNT_EMAIL}")
if [ "${EXISTING_ROLE_BINDING}" = "projects/${GOOGLE_CLOUD_PROJECT}/roles/${ROLE_ID}" ]; then
  echo -e "✓ Found IAM policy binding for $bld${SERVICE_ACCOUNT}$clr with Role $bld${ROLE_ID}$clr"
else
  echo -e "… Creating IAM policy binding for $bld${SERVICE_ACCOUNT}$clr and Role $bld${ROLE_ID}$clr"
  gcloud projects add-iam-policy-binding "${GOOGLE_CLOUD_PROJECT}" --member="serviceAccount:${SERVICE_ACCOUNT_EMAIL}" --role="projects/${GOOGLE_CLOUD_PROJECT}/roles/${ROLE_ID}" --condition=None
fi

echo -e "… Creating new private key for $bld${SERVICE_ACCOUNT}$clr"

TMP_OUTPUT_FILE="$(mktemp)"
gcloud iam service-accounts keys create "${TMP_OUTPUT_FILE}" --iam-account "${SERVICE_ACCOUNT_EMAIL}"

printf "\n${bld}GCLOUD_PROJECT_ID${clr}: %s\n" "${GOOGLE_CLOUD_PROJECT}"
printf "\n${bld}GCP_SA_EMAIL${clr}: %s\n" "${SERVICE_ACCOUNT_EMAIL}"
printf "\n${bld}GOOGLE_APPLICATION_CREDENTIALS${clr} (copy all lines):\n\n%s\n\n" "$(base64 "${TMP_OUTPUT_FILE}")"
rm "${TMP_OUTPUT_FILE}"
