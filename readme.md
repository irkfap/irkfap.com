
Community Website
-----------------

→ [irkfap.com](https://irkfap.com)


### [GitHub Actions setup for App Engine](https://github.com/GoogleCloudPlatform/github-actions/tree/master/setup-gcloud)

1. Enable [App Engine Admin API](https://console.developers.google.com/apis/api/appengine.googleapis.com/overview) for your project.

2. Launch `.github/setup_gcloud.sh [PROJECT_ID]` script or do a manual setup for gcloud:
 
    Add Service Account in [Cloud Console → IAM & Admin → Service Accounts](https://console.cloud.google.com/iam-admin/serviceaccounts) and assign it the following Roles:

    - [App Engine Deployer](https://cloud.google.com/appengine/docs/standard/python/roles#separation_of_deployment_and_traffic_routing_duties)
    - App Engine Service Admin (to switch traffic to the new version)
    - Cloud Build Service Account (gcloud app deploy requires this)
    - Storage Object Viewer
    - Storage Object Creator (to upload new files)
    - Service Account User (to run operations as a service account)

    Create json key and base64-encode it:

    ```bash
    base64 ~/Downloads/xxx.json
    # or
    openssl base64 -in ~/Downloads/xxx.json | tr -d '\n'
    ```

3. Add project secrets in GitHub repo Settings → Secrets:

    `GCLOUD_PROJECT_ID` — GCP Project ID

    `GCP_SA_EMAIL` — Service Account Email

    `GOOGLE_APPLICATION_CREDENTIALS` — base64-encoded Service Account key

    `CONFIG_YAML` — base64-encoded app config (see `config.default.yaml`)

    You can get the latest config values directly from [@sibli](https://t.me/sibli).

4. Customize Workflow as needed in `.github/workflows/main.yml`
