favtweets
==========

Yii extension for display favorite tweets in a beautiful CSS3 interface. It will use Twitter’s v1.1 OAuth API and the Codebird library.


Requirements
============

Tested with Yii 1.1.14

Twitter API keys -
 
  1. Twitter consumer key
  2. Twitter consumer secret
  3. Twitter access token
  4. Twitter token secret


Installation
============

- Download the latest release package
- Unpack it in /protected/extensions/ folder


Usage
=====

Paste the code into your main.php page or also you can use this code as per your requirement on any page.

~~~
$this->widget('application.extensions.favtweets.favtweets', array(
		'show_tweet'=>'2', //show nos. of tweets
	        'show_border'=>'true',  //show box border: true, false
                'tweets' => array(
			'twitter_consumer_key'=>'Your consumer key here',
			'twitter_consumer_secret'=>'Your consumer secret here',
			'twitter_access_token'=>'Your access token here',
			'twitter_token_secret'=>'Your access token secret',
		  )
  ));
~~~



Yii Extension
=============

http://www.yiiframework.com/extension/favorite-tweets/




Twitter API Keys
================

All requests to the twitter API have to be signed with API keys. The only way to obtain them is to create an application from Twitter’s developers’ site. Follow these steps:

- Go to https://dev.twitter.com and login with your twitter username and password.
- Click the “Create new application” button on the top-right.
- Fill in the required fields and click “Create”. After the app is created, it will have a read-only access, which is perfectly fine in our case.
- On the application page, click the “Create my access token”. This will allow the app to read data from your account as if it was you (read only). This is required by some of the API endpoints.

This will give you access tokens, client secrets and other keys.

for more help follow this link & steps - http://www.74by2.com/2014/06/easily-get-twitter-api-key-api-secret-access-token-access-secret-pictures/



Usual parameters to be adjusted
===============================

- tweets: Show numbers of tweets (show_tweet: 2)
- border: Show box border (show_border: **true**, false)
- cache: tweets cache file create in /assets/ folder, Use the cache if it exists and is less than one hour old. If your tweets not update please remove file - tweets.cache from assets folder.

