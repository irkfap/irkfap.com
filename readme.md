
Community Website
-----------------

→ [irkfap.com](https://irkfap.com)


### [GitHub Actions setup for App Engine](https://github.com/GoogleCloudPlatform/github-actions/tree/master/setup-gcloud)

1. Add Service Account in [Cloud Console → IAM & Admin → Service Accounts](https://console.cloud.google.com/iam-admin/serviceaccounts) and assign it the following Roles:
    
    - [App Engine Deployer](https://cloud.google.com/appengine/docs/standard/python/roles#separation_of_deployment_and_traffic_routing_duties)
    - App Engine Service Admin (to switch traffic to the new version)
    - Cloud Build Service Account (gcloud app deploy requires this)
    - Storage Object Viewer
    - Storage Object Creator (to upload new files)
      
    Create json key and base64-encode it:
    
    ```bash
    base64 ~/Downloads/xxx.json
    # or
    openssl base64 -in ~/Downloads/xxx.json | tr -d '\n'
    ```

2. Enable [App Engine Admin API](https://console.developers.google.com/apis/api/appengine.googleapis.com/overview) for your project.

3. Add project secrets in GitHub repo Settings → Secrets:

    `GCLOUD_PROJECT_ID` — GCP Project ID

    `GCP_SA_EMAIL` — Service Account Email
    
    `GOOGLE_APPLICATION_CREDENTIALS` — base64-encoded Service Account key
    
    `CONFIG_YAML` — base64-encoded app config (see `config.default.yaml`)
    
    You can get the latest config values directly from [@sibli](https://t.me/sibli).

4. Customize Workflow as needed in `.github/workflows/main.yml`


### Deployment instructions (OUTDATED)

* Create `config.yaml` from `config.default.yaml`. You can get the latest config values directly from [@sibli](https://t.me/sibli) (along with deployment access rights)

* Install [Google Cloud SDK](https://cloud.google.com/sdk/docs/) (runtime for Standard environment)

* [**OPTIONAL**] Deploy test environment to check changes before production:

		gcloud app deploy app.yaml --project irkfap-com -v test --no-promote --quiet

	You can access test environment here: [https://test-dot-irkfap-com.appspot.com/](https://test-dot-irkfap-com.appspot.com/)

* Deploy to production:

		gcloud app deploy app.yaml --project irkfap-com -v prod-1 --quiet
		gcloud app deploy back.yaml --project irkfap-com -v back-1 --no-promote --quiet

This will deploy 2 versions (prod-1 and back-1) of the `default` service,
 `prod-1` will be auto-scaled,
 `back-1` will have basic scaling configuration.

Traffic split between versions should be configured [here](https://console.cloud.google.com/appengine/versions?project=irkfap-com) like this: 
 75% for `prod-1` and 25% for `back-1`


### Get logs from production

	gcloud app logs read --logs=request_log --level warning --project irkfap-com -v prod-1

See also: [gcloud app logs read](https://cloud.google.com/sdk/gcloud/reference/app/logs/read)

NB: Logs can be viewed in [Cloud Console](https://console.cloud.google.com/errors?time=P30D&order=COUNT_DESC&resolution=OPEN&resolution=ACKNOWLEDGED&project=irkfap-com)


### Run development environment locally

	dev_appserver.py app.yaml
