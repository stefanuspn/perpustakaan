<?php
require_once './config.php';

/**
* 
*/
class Template 
{
	
		
		private $icon = "title.png" ;

		private $css;
		private $meta;
		private $value;
		private $path_image;


		function Title($title)
		{
			 echo'<title>'.$title.'</title>';
		}

		function Icon()
		{
			echo'<link rel="shortcut icon" href="'.__URL_IMAGES__.$this->icon.'"/>';
		}

		 function Jquery()
		
		{
			$path="jquery.min.js";

			return '<script src="'.__URL_JS__.''.$path.'"></script>';

		}

		public function Sweet()
		{
			$path ="sweetalert.min.js";

			return '<script src="'.__URL_SWEET__.''.$path.'"></script>';
		}

		public function Vue()
		{
			$path ="vue.min.js";

			return '<script src="'.__URL_JS__.''.$path.'"></script>';
		}

		public function BootstrapJs()
		{
			$path ="bootstrap.min.js";
			return '<script src="'.__URL_JS__.''.$path.'"></script>';
		}

		public function BootstrapValidator()
		{
			$path ="bootstrapValidator.js";
			return '<script src="'.__URL_JS__.''.$path.'"></script>';
		}

		public function App()
		{
			$path="app.min.js";
			return '<script src="'.__URL_JS__.''.$path.'"></script>';
		}

		public function Stefanus()
		{
			$path="stefanus.min.js";
			return '<script src="'.__URL_JS__.''.$path.'"></script>';
		}
		public function StefAlert()
		{
			$path ="stefalert.js";
			return '<script src="'.__URL_JS__.''.$path.'"></script>';
		}

		public function WowJs()
		{
			$path="wow.min.js";
			return '<script src="'.__URL_JS__.''.$path.'"></script>';

		}

		public function ToastrJs()
		{
			$path ="toastr.min.js";
			return '<script src="'.__URL_JS__.''.$path.'"></script>';


		}

		public function ResponsiveJs()
		{
			$path ="responsive.min.js";
			return '<script src="'.__URL_JS__.''.$path.'"></script>';
		}

		public function NiceScrool()
		{
			$path ="jquery.nicescroll.js";
			return '<script src="'.__URL_JS__.''.$path.'"></script>';

		}

		function Wow()
		{
			return '<script type="text/javascript">new WOW().init();</script>';
		}

		 function BootstrapCss()
		{
			$path ="bootstrap.min.css";
			return '<link href="'.__URL_CSS__.''.$path.'" rel="stylesheet">';
		}

		function FontAwesome()
		{
			$path ="font-awesome.css";
			return '<link href="'.__URL_FA__.''.$path.'" rel="stylesheet">';
		}

		function AdminLte()
		{
			$path="AdminLTE.min.css";
			return '<link href="'.__URL_CSS__.''.$path.'" rel="stylesheet">';
		}

		function ToastrCss()
		{
			$path="toastr.css";
			return '<link href="'.__URL_CSS__.''.$path.'" rel="stylesheet">';

		}
		function SweetCss()
		{
			$path="sweetalert.css";
			return '<link href="'.__URL_SWEET__.''.$path.'" rel="stylesheet">';
		}

		function Animate()
		{
			$path ="animate.css";
			return '<link href="'.__URL_CSS__.''.$path.'" rel="stylesheet">';

		}

		function Style()
		{
			$path="style.min.css";
			return '<link href="'.__URL_CSS__.''.$path.'" rel="stylesheet">';

		}
		function W3Css()
		{
			$path ="w3.css";
			return '<link href="'.__URL_CSS__.''.$path.'" rel="stylesheet">';
		}
		function Raleway()
		{
			return'<link href="//fonts.googleapis.com/css?family=Raleway:400,600,700" rel="stylesheet" type="text/css">
              ';
		}

		function BalooThambi()
		{
			return ' <link href="https://fonts.googleapis.com/css?family=Montserrat|Baloo+Thambi" rel="stylesheet" media="screen">';
		}

		function _FullCss()
		{
			echo $this->BootstrapCss();
			echo $this->FontAwesome();
			echo $this->AdminLte();
			echo $this->ToastrCss();
			echo $this->SweetCss();
			echo $this->Animate();
			echo $this->Style();
			echo $this->W3Css();
			echo $this->Raleway();
			echo $this->BalooThambi();
		}

		 function _FullJs()
		 {
		 	echo $this->Jquery();
		 	echo $this->Sweet();
		 	echo $this->BootstrapJs();
		 	echo $this-> BootstrapValidator();
		 	echo $this->App();
		 	echo $this->Stefanus();
		 	echo $this->WowJs();
		 	echo $this->ToastrJs();
		 	echo $this->ResponsiveJs();
		 	echo $this->NiceScrool();
		 	echo $this->Wow();
		 }

		 function nav() 
		 {
		 	return ' <nav class="navbar-tube navbar-fixed-top navbar-default" style="background-color: #0d243c;border-color: #ffffff;  box-shadow: 1px 1px 5px solid white; ">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar" style="margin-top: 15px;border-color: white;">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar" style="background-color: #414242"></span>
                <span class="icon-bar" style="background-color: #414242"></span>
                <span class="icon-bar" style="background-color: #414242"></span>
            </button>
            <a class="tube-logo-navbar" href="https://www.rubypedia.com/">
                <img class="tube-logo" src="./RubyPedia.com - Belajar Pemrogramman Ruby Bahasa Indonesia_files/logo-v3.png" alt="">
            </a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-left" style="margin-top: 8px;color: white;font-size: 16px;font-weight: 500">
                <li><a href="" style="color: white ">Home</a></li>
                <li><a href="" style="color: white">Web Programming</a></li>
                <li><a href="" style="color: white">Desktop Programming</a></li>
                <li><a href="" style="color: white">Game Programming</a></li>
                <li><a href="" style="color: white">Mobile Programming</a></li>  
                <li><a href="" style="color: white">Jaringan Komputer</a></li>
                
                  
            </ul>
           
        </div>
    </div>
</nav>';
		 }

}
function _OpenHtml()
{
	echo'<!DOCTYPE HTML>';
}
function _OpenHead()
{
	echo '<head>';
}
function _OpenMeta()
{
	echo '<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="theme-color" content="#414242">
<meta name="mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-title" content="KodingPedia.com - Belajar Pemrogramman  Bahasa Indonesia">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="default">
<meta name="author" content="Stefanus Prasetyo Nugroho">
<meta name="robots" content="no-cache">
<meta name="description" content="kodingpedia.com adalah situs yang menyediakan tutorial pemrogramman dengan bahasa indonesia.">
<meta name="keywords" content="Koding, KodingPedia, Programmer, Web Developer, Software Engineer, Web Programmer, Linux, Linux User, Php, Java, Programmer, Web Developer, Software Engineer, Web Programmer, Linux, Jquery">
<meta property="og:url" content="https://www.kodingpedia.com/">
<meta property="og:site_name" content="Stefanus Prasetyo Nugroho">
<meta property="og:title" content="KodingPedia.com - Belajar Pemrogramman  Bahasa Indonesia">
<meta property="og:description" content="kodingpedia.com adalah situs yang menyediakan tutorial pemrogramman  dengan bahasa indonesia.">
<meta property="og:image" content="https://www.kodingpedia.com/assets/images/title.png">
<meta property="twitter:site" content="@stefanuspn">
<meta property="twitter:site:id" content="75438343">
<meta property="twitter:card" content="summary">
<meta property="twitter:title" content="KodingPedia.com - Belajar Pemrogramman  Bahasa Indonesia">
<meta property="twitter:description" content="kodingpedia.com adalah situs yang menyediakan tutorial pemrogramman  dengan bahasa indonesia.">
<meta property="twitter:image:src" content="https://www.kodingpedia.com/assets/images/title.png">';
}

function _CloseHead()
{
	echo '</head>';
}

function _openBody()
{
	echo '<body  data-spy="scroll" data-target=".navbar" data-offset="50" style="background-color: #f1f1f1; visibility: visible;">';
}

function _ImportCss()
{
	$my= new Template();
	$my->_FullCss();
}

function _ImportJs()
{
	$my= new Template();
	$my->_FullJs();
}

function CreateTextbox($type,$class, $name,$placeholder,$attr)
{
	echo'<input style="width: 250px;" type="'.$type.'" class="'.$class.'" id="'.$name.'" name="'.$name.'" placeholder="'.$placeholder.'" '.$attr.'>';
}



?>

