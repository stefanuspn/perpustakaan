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
   header("Location:logout.html"); 
}
else{
  $admin_id = $_COOKIE['admin_id'];
  $username =$_COOKIE['username'];
}
  
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
    <?= $my->PrismJs();?>
    
<?=_CloseHead();?>