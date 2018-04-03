<?php
if(!file_exists("../model/mf_db.php")){
    header("Location:./welcome.html");
}else{
    require_once '../config/config.php';
}
?>
<!DOCTYPE html>
<html>
  <head>
    <?= $my->JqueryMin();?>
    <?= $my->Sweet();?>
    <?= $my->SweetCss();?>
  </head>
</html>
<?php
	   setcookie('admin_id',$admin_id,time()-3600);
                setcookie('username',$username,time()-3600);
                setcookie('password',$password,time()-3600);
                setcookie('nama',$nama,time()-3600);
	
	header("Location:login");
?>

