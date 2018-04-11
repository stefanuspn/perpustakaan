<?php
/*
 * @Author Stefanus Prasetyo Nugroho <stefanusnugroho585@gmail.com>
 * @Version 1.0
 http://munazar-aceh.blogspot.co.id/2015/07/cara-manipulasi-url-website-menggunakan.html
 */
session_start(); // memulai session

//$root = "http://".$_SERVER['HTTP_HOST'];
//$root .= str_replace(basename($_SERVER['SCRIPT_NAME']),"",$_SERVER['SCRIPT_NAME']);
$root ='http://localhost/newperpus2/';

define('_URL_',$root);
define('__URL_JS__', _URL_.'assets/js/');
define('__URL_CSS__', _URL_ . 'assets/css/');
define('__URL_FA__', _URL_ .'assets/fa/css/');
define('__URL_SWEET__', _URL_ .'assets/dist/');
define('__URL_IMAGES__', _URL_ .'assets/images/');
define('__URL_ION__',_URL_.'assets/Ionicons/css/');
define('__URL_SKIN__',_URL_.'assets/css/skins/');
define('__URL_TinyMCE__',_URL_ .'assets/tinymce/');

// memulai koneksi ke database
$server ="localhost";
$user   = "root";
$pw     = "";
$db1     = "perpus";

$link   = new mysqli($server,$user,$pw,$db1);

// Awal Memanggil Class PHP
spl_autoload_register(function($class){
  require_once '../classes/' .$class. '.php';
});

spl_autoload_register(function($class){
  require_once '../classes/excel_reader/' .$class. '.php';
});

spl_autoload_register(function($class){
  require_once '../classes/html2pdf/' .$class. '.php';
});



// Akhir Memanggil Class Php

$token = new Token();
$f  = new Function_Web();
$my = new TemplateAdmin();
$db = new Model() ;

function Form_Open($class,$method, $id)
{
	echo'  <form  class="'.$class.'" method="'.$method.'" id="'.$id.'"  enctype="multipart/form-data">';
}

/* Contoh Perulangan Tanpa while,For,Forech
$x= 0;
a:
$x = $x+1;
print $x. PHP_EOL;
if($x<10) goto a;
*/


?>
