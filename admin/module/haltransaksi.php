<?php
if(!file_exists("../model/mf_db.php")){
    header("Location:./welcome.html");
}else{
    require_once '../config/config.php';
}
ob_start();

//Mengatur batas login


//Mengecek status login
if(empty($_COOKIE['admin_id']) or empty($_COOKIE['username']) or empty($_COOKIE['nama'])){
   header("Location:login"); 
}
else{
  $admin_id = $_COOKIE['admin_id'];
  $username =$_COOKIE['username'];
}
  function create_random()
{
    $data = '1234567890';
    $baris = 10;
    $string = '';
    for($i = 0; $i < $baris; $i++) {

        $pos = rand(0, strlen($data)-1);
        $string .= $data{$pos};
    }
    
    return $string;
}

$mysqli = mysqli_connect("localhost","root","","perpus");
?>


<?= _OpenHtml();?>
<?=_OpenHead();?>
   <?=$my->Title("Perpustakaan");?>
    <?= _OpenMeta();?>
    
    <!-- Icon -->
    <?= $my->Icon();?>

    <!--CSS-->
    <?= _ImportCss();?>

    <!--JS-->
   <?= $my->JqueryMin();?>
   <?= $my->JqueryUi();?>
    <?= $my->Sweet();?>
    <?= $my->BootstrapJs();?>
    <?= $my->BootstrapValidator();?>
    <?= $my->JqueryUi();?>
    <?= $my->AdminLteJs();?>
    <?= $my->Widget();?>
    <?= $my->App();?>
    <?= $my->Stefanus();?>
    <?= $my->ResponsiveJs();?>
    <?= $my->NiceScrool();?>
    <?= $my->Core();?>
    <?= $my->DataTable();?>
    <?= $my->DataTableBootstrap();?>
    <?= $my->DataTableResponsiveJs();?>
    <?= $my->TinyMceJs();?>
    <?= $my->Select2Js();?>
    
<?=_CloseHead();?>