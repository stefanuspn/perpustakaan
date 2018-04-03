<?php
/*
 * @Author Stefanus Prasetyo Nugroho <stefanusnugroho585@gmail.com>
 * @Version 1.0
 * @MyFramework
 http://munazar-aceh.blogspot.co.id/2015/07/cara-manipulasi-url-website-menggunakan.html
 */

session_start();
define('_URL_','http://localhost/newperpus/');
define('__URL_JS__', _URL_.'assets/js/');
define('__URL_CSS__', _URL_ . 'assets/css/');
define('__URL_FA__', _URL_ .'assets/fa/css/');
define('__URL_SWEET__', _URL_ .'assets/dist/');
define('__URL_IMAGES__', _URL_ .'assets/images/');
define('__URL_ION__',_URL_.'assets/Ionicons/css/');
define('__URL_SKIN__',_URL_.'assets/css/skins/');
define('__URL_TinyMCE__',_URL_ .'assets/tinymce/');

require_once "../template/templateadmin.php";
require_once "../model/mf_model.php";
require_once "../func/function.php";
require_once '../model/database.php';


$my = new TemplateAdmin();
$function = new function_Web();

 $connect = Database::getInstance();


class CSRFToken
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





/* Contoh Perulangan Tanpa while,For,Forech
$x= 0;
a:
$x = $x+1;
print $x. PHP_EOL;
if($x<10) goto a;
*/


