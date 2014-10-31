<?php

if($this->show_border === 'false')
    $border = 'none !important';
	

require_once(Yii::app()->basePath . '/extensions/favtweets/views/FavoriteTweetsList.php');
require_once(Yii::app()->basePath . '/extensions/favtweets/views/codebird/codebird.php');

// Enter the credentials of your app here:
$tweets = new FavoriteTweetsList(array(
    'twitter_consumer_key'		=> $rendered['twitter_consumer_key'],
    'twitter_consumer_secret'	=> $rendered['twitter_consumer_secret'],
    'twitter_access_token'		=> $rendered['twitter_access_token'],
    'twitter_token_secret'		=> $rendered['twitter_token_secret']
));

?>


<div id="favtweets" style="border:<?=$border?>">
	<?php $tweets->generate($this->show_tweet);?>
</div>
