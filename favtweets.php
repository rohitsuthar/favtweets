<?php
/**
 *favtweets.php
 *
 * @author Rohit Suthar <rohit.suthar@gmail.com>
 * @copyright 2014 Rohit Suthar
 * @package favtweets
 * @version 1.0
 * @Like Us on -  https://facebook.com/yiiexperts
 * @Follow Us on -  https://twitter.com/yiiexperts
 * @Mail -  yiiexpert@gmail.com
 * @For More Extension Visit -  www.yiiexpert.github.io
 */
 

//Big thanks to Toturial Zine

class favtweets extends CInputWidget
{
	
	/**
	 * @var int show number of tweets
	 */
	public $show_tweet='2';
	
	
	/**
	 * @var boolean show box border: true, false
	 */
	public $show_border='true';
	
	
	/**
	 * @var array available for favorite tweets box
	 */			
		  
	public $tweets = array(
			'twitter_consumer_key'=>'',   //Your consumer key here
			'twitter_consumer_secret'=>'', //Your consumer secret here
			'twitter_access_token'=>'', //Your access token here
			'twitter_token_secret'=>'', //Your access token secret
		  );
		  

	/**
	 * The extension initialisation
	 *
	 * @return nothing
	 */

	public function init()
	{	
		self::registerFiles();
		self::renderfavTweets();
	}
	
	
	
	/**
	 * Register assets file
	 *
	 * @return nothing
	 */
	 
	private function registerFiles()
	{
		$assets = dirname(__FILE__).'/assets';
		$baseUrl = Yii::app()->assetManager->publish($assets);

		if(is_dir($assets)){
			Yii::app()->clientScript->registerCssFile($baseUrl . '/css/tweets.css');
			Yii::app()->clientScript->registerScriptFile($baseUrl . '/js/jquery.splitlines.js');
			Yii::app()->clientScript->registerScriptFile($baseUrl . '/js/script.js');
		}else
			throw new Exception(Yii::t('socialLink - Error: Couldn\'t find assets folder to publish.'));
				
	}


	/**
	 * Render favorite tweets extension
	 *
	 * @return nothing
	 */

	 private function renderfavTweets(){
		 
		$rendered = array('twitter_consumer_key'=>$this->tweets['twitter_consumer_key'],
							'twitter_consumer_secret'=>$this->tweets['twitter_consumer_secret'],
							'twitter_access_token'=>$this->tweets['twitter_access_token'],
							'twitter_token_secret'=>$this->tweets['twitter_token_secret']
						);
		  
		echo $this->render('tweets', array('rendered'=>$rendered));
	}
}

?>
