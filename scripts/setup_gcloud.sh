#!/usr/bin/env bash

# Usage: scripts/setup_gcloud.sh [PROJECT_ID]

set -euo pipefail

BASEDIR="$( cd "$(dirname "$0")" || true ; pwd -P )"

GOOGLE_CLOUD_PROJECT=${1:-$(gcloud config list --format 'value(core.project)')}

gcloud iam roles create appengine_deployer_gh_actions --file="$BASEDIR/appengine_deployer_role.yml" --project="${GOOGLE_CLOUD_PROJECT}"
gcloud iam service-accounts create github-actions-deployment --display-name "github-actions-deployment" --project="${GOOGLE_CLOUD_PROJECT}"
gcloud projects add-iam-policy-binding "${GOOGLE_CLOUD_PROJECT}" --member="serviceAccount:github-actions-deployment@${GOOGLE_CLOUD_PROJECT}.iam.gserviceaccount.com" --role="projects/${GOOGLE_CLOUD_PROJECT}/roles/appengine_deployer_gh_actions" --condition=None

TMP_OUTPUT_FILE="$(mktemp)"

gcloud iam service-accounts keys create "${TMP_OUTPUT_FILE}" --iam-account "github-actions-deployment@${GOOGLE_CLOUD_PROJECT}.iam.gserviceaccount.com"

printf "\nGCLOUD_PROJECT_ID: %s\n" "${GOOGLE_CLOUD_PROJECT}"
printf "\nGCP_SA_EMAIL: %s\n" "github-actions-deployment@${GOOGLE_CLOUD_PROJECT}.iam.gserviceaccount.com"
printf "\nGOOGLE_APPLICATION_CREDENTIALS (copy all lines):\n\n%s\n\n" "$(base64 "${TMP_OUTPUT_FILE}")"
