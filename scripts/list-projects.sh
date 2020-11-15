# App Engine: List all projects along with their region and mapped domain

# Effectively:
# gcloud projects list --format 'value(PROJECT_ID)'
# gcloud app describe --project "$projectId" --format 'value(locationId)'
# gcloud app domain-mappings list --project "$projectId" --limit=1 --format 'value(ID)'

gcloud projects list --format 'value(PROJECT_ID)' | while read -r projectId; do
  domain=$(gcloud app domain-mappings list --project "$projectId" --limit=1 --format 'value(ID)' 2>/dev/null || '')
  region=$(gcloud app describe --project "$projectId" --format 'value(locationId)' 2>/dev/null || '')
  printf "%s\t%s\t%s\n" "$region" "$domain" "$projectId"
done
