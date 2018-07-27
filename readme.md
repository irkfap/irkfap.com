
Community Website
-----------------

→ [irkfap.com](https://irkfap.com)


### Deployment instructions

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
