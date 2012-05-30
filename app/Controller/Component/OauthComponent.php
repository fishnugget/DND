<?php

App::import('Vendor','Oauth/twitteroauth');
class OauthComponent extends Component{
	
	function getConnectionWithAccessToken($oauth_token, $oauth_token_secret) {
	  
	}

	public function postToSelf($data){
		
	}
	
	public function getFromSelf($data = NULL){
		$connection = new TwitterOAuth('OoF0hgeUiU7m6lCy92UPzQ', 'T4iRdYITIAyi4iZeiTA8inInbix592NenlNhGfesD8', '580537222-lsPrDocLlDH8LIi80x6pwDxHLniJxN8iUFgXVcd2', 'B3QGVqJ8W4TMwhEo5duERVh50TqaWB7DOdJXNaxujG0');
	    $content = $connection->get("statuses/home_timeline");
		
		//debug($content);
		//exit();
		
	}
	
	public function test(){
		return "test";	
	}
	
	public function echo_test(){
		
	}
	
	public function getFromUser($data){
		
	}
	
	public function postToUser($data){
		
	}
}