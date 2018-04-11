<?php

class TemplateAdmin 
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
			$path="jquery-3.2.1.min.js";

			return '<script src="'.__URL_JS__.''.$path.'"></script>';

		}

		function JqueryMin()
		{
			$path="jquery.min.js";

			return '<script src="'.__URL_JS__.''.$path.'"></script>';
		}

		public function Sweet()
		{
			$path ="sweetalert.min.js";

			return '<script src="'.__URL_SWEET__.''.$path.'"></script>';
		}
		function Core()
		{
			$path ="core.js";
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
			$path="app.js";
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
		function JqueryUi()
		{
			$path ="jquery-ui.min.js";
			return '<script src="'.__URL_JS__.''.$path.'"></script>';
		}

		function Widget()
		{
			return"<script>$.widget.bridge('uibutton', $.ui.button);</script>";
		}

		function RaphaelJs()
		{
			$path = "raphael.min.js";
			return '<script src="'.__URL_JS__.''.$path.'"></script>';
		}

		function MorrisJs()
		{
			$path = "morris.min.js";
			return '<script src="'.__URL_JS__.''.$path.'"></script>';
		}
		function ParticlesJs()
		{
			$path ="particles.js";
			return '<script src="'.__URL_JS__.''.$path.'"></script>';
		}

		function SparkLine()
		{
			$path = "jquery.sparkline.min.js";
			return '<script src="'.__URL_JS__.''.$path.'"></script>';
		}

		function Jvector1()
		{
			$path ="jquery-jvectormap-1.2.2.min.js";
			return '<script src="'.__URL_JS__.''.$path.'"></script>';
		}

		function Jvector2()
		{
			$path ="jquery-jvectormap-world-mill-en.js";
			return '<script src="'.__URL_JS__.''.$path.'"></script>';
		}
		function Knob()
		{
			$path ="jquery.knob.min.js";
			return '<script src="'.__URL_JS__.''.$path.'"></script>';
		}
		function Moment()
		{
			$path ="moment.min.js";
			return '<script src="'.__URL_JS__.''.$path.'"></script>';
		}

		function DateRangePickerJs()
		{
			$path ="daterangepicker.js";
			return '<script src="'.__URL_JS__.''.$path.'"></script>';
		}

		function BootstrapDatepickerJs()
		{
			$path ="bootstrap-datepicker.min.js";
			return '<script src="'.__URL_JS__.''.$path.'"></script>';

		}

		function Bootstrap3Wysihtml5Js()
		{
			$path ="bootstrap3-wysihtml5.all.min.js";
			return '<script src="'.__URL_JS__.''.$path.'"></script>';
		}

		function SlimScrool()
		{
			$path ="jquery.slimscrool.min.js";
			return '<script src="'.__URL_JS__.''.$path.'"></script>';
		}

		function FastClick()
		{
			$path ="fastclick.js";
			return '<script src="'.__URL_JS__.''.$path.'"></script>';
		}

		function AdminLteJs()
		{
			$path ="adminlte.min.js";
			return '<script src="'.__URL_JS__.''.$path.'"></script>';
		}

		function Dashboard()
		{
			$path ="dashboard.js";
			return '<script src="'.__URL_JS__.''.$path.'"></script>';
		}

		function Wow()
		{
			return '<script type="text/javascript">new WOW().init();</script>';
		}

		function DataTable()
		{
			$path ="jquery.dataTables.min.js";
			return '<script src="'.__URL_JS__.''.$path.'"></script>';
		}

		function DataTableBootstrap()
		{
			$path ="dataTables.bootstrap.min.js";
			return '<script src="'.__URL_JS__.''.$path.'"></script>';
		}

		function DataTableResponsiveJs()
		{
			$path ="dataTables.responsive.min.js";
			return '<script src="'.__URL_JS__.''.$path.'"></script>';
		}

		function dataTablesButtonJs()
		{
			$path = "dataTables.buttons.min.js";
			return '<script src="'.__URL_JS__.''.$path.'"></script>';
		}

		function dataTablesFixedHeaderJs()
		{
			$path = "dataTables.fixedHeader.min.js";
			return '<script src="'.__URL_JS__.''.$path.'"></script>';
		}

		function jsZip()
		{
			$path = "jszip.min.js";
			return '<script src="'.__URL_JS__.''.$path.'"></script>';
		}

		function PdfMakeJs()
		{
			$path = "pdfmake.min.js";
			return '<script src="'.__URL_JS__.''.$path.'"></script>';
		}

		function vfs_fontsJs()
		{
			$path="vfs_fonts.js";
			return '<script src="'.__URL_JS__.''.$path.'"></script>';
		}

		function buttonshtmlJs()
		{
			$path="buttons.html5.min.js";
			return '<script src="'.__URL_JS__.''.$path.'"></script>';
		}

		function ButtonPrintJs()
		{
			$path = "buttons.print.min.js";
			return '<script src="'.__URL_JS__.''.$path.'"></script>';
		}
		function TinyMceJs()
		{
			$path ="tinymce.min.js";
			return '<script src="'.__URL_TinyMCE__.''.$path.'"></script>';
		}
		function PrismJs()
		{
			$path ="prism.js";
			return '<script src="'.__URL_JS__.''.$path.'"></script>';
		}
		
		function Select2Js()
		{
			$path = "select2.min.js";
			return '<script src="'.__URL_JS__.''.$path.'"></script>';
		}

		function chartjs()
		{
			$path ="chart.js";
			return '<script src="'.__URL_JS__.''.$path.'"></script>';
		}

		function SkripBukuJs()
		{
			$path ="skripbuku.js";
			return '<script src="'.__URL_JS__.''.$path.'"></script>';
		}

		function SkripAnggotaJs()
		{
			$path = "skripanggota.js";
			return '<script src="'.__URL_JS__.''.$path.'"></script>';
		}

		function SkripTransaksiJs()
		{
			$path = "skriptransaksi.js";
			return '<script src="'.__URL_JS__.''.$path.'"></script>';
		}
		// css

		function jqueryUiCss()

		{
			$path ="jqueryui.css";
			return '<link href="'.__URL_CSS__.''.$path.'" rel="stylesheet">';
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

		function Skin()
		{
			$path ="_all-skins.min.css";
			return '<link href="'.__URL_SKIN__.''.$path.'" rel="stylesheet">';
		}

		function Morris()
		{
			$path ="morris.css";
			return '<link href="'.__URL_CSS__.''.$path.'" rel="stylesheet">';
		}

		function VectorCss()
		{
			$path ="jquery-jvectormap.css";
			return '<link href="'.__URL_CSS__.''.$path.'" rel="stylesheet">';
		}

		function BootstrapDatepickerCSS()
		{
			$path ="bootstrap-datepicker.min.css";
			return '<link href="'.__URL_CSS__.''.$path.'" rel="stylesheet">';
		}

		function DateRangePickerCss()
		{
			$path = "daterangepicker.css";
			return '<link href="'.__URL_CSS__.''.$path.'" rel="stylesheet">';
		}

		function Bootstrap3Wysihtml5()
		{
			$path = "bootstrap3-wysihtml5.min.css";
			return '<link href="'.__URL_CSS__.''.$path.'" rel="stylesheet">';
		}

		function ToastrCss()
		{
			$path="toastr.css";
			return '<link href="'.__URL_CSS__.''.$path.'" rel="stylesheet">';

		}
		function SweetCss()
		{
			$path="sweetalert.min.css";
			return '<link href="'.__URL_SWEET__.''.$path.'" rel="stylesheet">';
		}

		function Animate()
		{
			$path ="animate.css";
			return '<link href="'.__URL_CSS__.''.$path.'" rel="stylesheet">';

		}

		function DatatableBootstrapCss()
		{
			$path ="dataTables.bootstrap.min.css";
			return '<link href="'.__URL_CSS__.''.$path.'" rel="stylesheet">';
		}

		function DataTableResponsive()
		{
			$path ="dataTables.responsive.css";
			return '<link href="'.__URL_CSS__.''.$path.'" rel="stylesheet">';
		}
		
		function Style()
		{
			$path="style.min.css";
			return '<link href="'.__URL_CSS__.''.$path.'" rel="stylesheet">';

		}

		function Ionicon()
		{
			$path ="ionicons.min.css";
			return '<link href="'.__URL_ION__.''.$path.'" rel="stylesheet">';
		}

		function PrismCss()
		{
			$path ="prism.css";
			return '<link href="'.__URL_CSS__.''.$path.'" rel="stylesheet">';
		}

		function Select2Css(){
			$path ="select2.min.css";
			return '<link href="'.__URL_CSS__.''.$path.'" rel="stylesheet">';
		}

		function BalooThambi()
		{
			return ' <link href="https://fonts.googleapis.com/css?family=Montserrat|Baloo+Thambi" rel="stylesheet" media="screen">';
		}


		function _FullCss()
		{
			echo $this->BootstrapCss();
			echo $this->jqueryUiCss();
			echo $this->FontAwesome();
			echo $this->Ionicon();
			echo $this->AdminLte();
			echo $this->Skin();
			echo $this->DatatableBootstrapCss();
			echo $this->DataTableResponsive();
			echo $this->ToastrCss();
			echo $this->SweetCss();
			echo $this->Animate();
			echo $this->BalooThambi();
			echo $this->Select2Css();
		}

		 function _FullJs()
		 {
		 	echo $this->Jquery();
		 	
		 	echo $this->BootstrapJs();
		 	echo $this->JqueryUi();
		 	
		 	echo $this->SlimScrool();
		 	echo $this->FastClick();
		 	echo $this->AdminLteJs();
		 	echo $this->Dashboard();
		 	echo $this->Widget();
		 	echo $this->DataTable();
		 	echo $this->DataTableBootstrap();
		 	echo $this->DataTableResponsiveJs();
		 	echo $this->Stefanus();
		 	echo $this->Sweet();
		 	echo $this->ResponsiveJs();
		 	echo $this->NiceScrool();
		 	echo $this->App();
		 
		 }

		

}

//Tag
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
	$my= new TemplateAdmin();
	$my->_FullCss();
}

function _ImportJs()
{
	$my= new TemplateAdmin();
	$my->_FullJs();
}



function CreateInput($type,$class, $name,$placeholder)
{
	echo'<input style="width: 250px;" type="'.$type.'" class="'.$class.'" id="'.$name.'" name="'.$name.'" placeholder="'.$placeholder.'">';
}

function Textbox($type,$class, $name,$placeholder,$attr)
{
	echo'<input style="width: 250px;" type="'.$type.'" class="'.$class.'" id="'.$name.'" name="'.$name.'" placeholder="'.$placeholder.'" '.$attr.'>';
}


//Fungsi untuk membuat judul konten
function create_title($icon, $title){
   echo '<h3 class="title"><i class="glyphicon glyphicon-'.$icon.'"></i> '.$title.'</h3>';
}

//Fungsi untuk membuat tombol pada bagian atas tabel
function create_button($color, $icon, $text, $class = "", $action=""){
   echo '<a class="btn btn-'.$color.' '.$class.' btn-top pull-right" onclick="'.$action.'"><i class="glyphicon glyphicon-'.$icon.'"></i> '.$text.'</a>';
}

//Fungsi untuk membuat tabel
function create_table($header){
   echo'<hr/><div class="table-responsive">
   <table class="table table-striped" width="100%">
   <thead><tr>
   <th style="width: 10px">No</th>';

foreach($header as $h){
   echo '<th>'.$h.'</th>';
}			
	
   echo '</tr></thead>
   <tbody></tbody>
   <tfooter><tr>
   <th style="width: 10px">No</th>';
	
foreach($header as $h){
  echo '<th>'.$h.'</th>';
}			
	
   echo'</tr></tfooter>
   </table>
   </div><br/>';
}


//Fungsi untuk membuat tombol aksi pada tabel
function create_action($id, $edit=true, $delete=true){
   $view = "";
   if($edit) $view .= ' <a class="btn btn-primary btn-edit" onclick="form_edit('.$id.')"><i class="glyphicon glyphicon-pencil"></i></a>';
   if($delete)	$view .= ' <a class="btn btn-danger btn-delete" onclick="delete_data('.$id.')"><i class="glyphicon glyphicon-trash"></i></a>';
   return $view;
}
//Fungsi untuk membuka modal dan form
function open_form($modal_id, $action){
   echo '<div class="modal fade" id="'.$modal_id.'" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-lg">
      <div class="modal-content">
				  
<form class="form-horizontal" method="post" enctype="multipart/form-data"  onsubmit="'.$action.'">
   <div class="modal-header" style="background-color: #9853FF; color: white;">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"> &times; </span> </button>
      <h3 class="modal-title"></h3>
   </div>
				
   <div class="modal-body">
      <input type="hidden" name="id" id="id">';
}

//Fungsi untuk membuat kotak input
function create_textbox($label, $name, $type="text", $width='5', $class="", $attr=""){
   echo'<div class="form-group">
   <label for="'.$name.'" class="col-sm-2 control-label"> '.$label.'</label>
   <div class="col-sm-'.$width.'">
      <input type="'.$type.'" class="form-control '.$class.'" id="'.$name.'" name="'.$name.'" '.$attr.'>
   </div> </div>';
}

//Fungsi untuk membuat textarea
function create_textarea($label, $name, $class='', $attr=''){
   echo'<div class="form-group">
   <label for="'.$name.'" class="col-sm-2 control-label"> '.$label.'</label>
   <div class="col-sm-10">
     <textarea class="form-control '.$class.'" id="'.$name.'" rows="8" name="'.$name.'" '.$attr.'></textarea>
   </div> </div>';
}


//Fungsi untuk membuat combobox / select box
function create_combobox($label, $name, $list, $width='5', $class="", $attr=""){
   echo'<div class="form-group">
   <label for="'.$name.'" class="col-sm-2 control-label"> '.$label.'</label>
   <div class="col-sm-'.$width.'">
      <select class="form-control '.$class.'" name="'.$name.'" id="'.$name.'" '.$attr.'>
         <option value="">- Pilih -</option>';

foreach($list as $ls){
   echo '<option value='.$ls[0].'>'.$ls[1].'</option>';
}
	
   echo '</select>
   </div> </div>';
}


//Fungsi untuk membuat checkbox
function create_checkbox($label, $name, $list){
   echo '<div class="form-group" id="'.$name.'">
   <label class="col-sm-2 control-label">'.$label.'</label>
   <div class="col-sm-10">';

foreach($list as $ls){
   echo' <input type="checkbox" name="'.$name.'[]" value="'.$ls[0].'" style="margin-left: 30px"> '.$ls[1];
}
	
   echo '</div></div>';
}

//Fungsi untuk menutup form dan modal
function close_form($icon="floppy-disk", $button="Simpan"){
   echo'</div>
   <div class="modal-footer">
   <button type="submit" class="btn btn-primary btn-save">
   <i class="glyphicon glyphicon-'.$icon.'"></i> '.$button.' 
   </button>
   <button type="button" class="btn btn-warning" data-dismiss="modal">
   <i class="glyphicon glyphicon-remove-sign"></i> Close
   </button>
   </div>
		
   </form></div></div></div>';
}

?>

