<?php
class Token
{
	public function generate_token(){
		$_SESSION['token']  = md5(date("dmY h:i:s").rand(10000,90000));
		return $_SESSION['token'];
	}
	public function show_tokenHTML(){
		echo '<input type="hidden" name="token" value="'.$this->generate_token().'"></input>';
	}
	public function validateToken($token){
		if($token != $_SESSION['token']){
			return false;
		}else{
			return true;
		}
	}
}