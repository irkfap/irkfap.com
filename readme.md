
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
		
### Get logs from production 
	
	gcloud app logs read --logs=request_log --level warning --project irkfap-com -v prod-1 
		
See also: [https://cloud.google.com/sdk/gcloud/reference/app/logs/read](gcloud app logs read)
				
### Run development environment locally

	dev_appserver.py app.yaml