<?php
if(!file_exists("../model/mf_db.php")){
    header("Location:./welcome.html");
}else{
    require_once '../config/config.php';
}
if(empty($_COOKIE['admin_id']) or empty($_COOKIE['username']) or empty($_COOKIE['nama'])){
  echo"<script language='javascript'>
      alert('Waktu Habis Gan');
      document.location='login.html';
  </script>"; 
}
else{
  $admin_id = $_COOKIE['admin_id'];
  $username =$_COOKIE['username'];
}
date_default_timezone_Set("Asia/Jakarta");



  $admin_id = $_POST['admin_id'];
  $email    = $_POST['email'];
  $nama     = $_POST['nama'];
  $username = $_POST['username'];
  $nohp     = $_POST['nohp'];

  $ekstensi_diperbolehkan = array('png','jpg','jpeg','gif');
  $foto_admin = $_FILES['file']['name'];
  $x = explode('.', $foto_admin);
  $ekstensi = strtolower(end($x));
  $ukuran = $_FILES['file']['size'];
  $file_tmp = $_FILES['file']['tmp_name'];  
  
 
 if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
    if($ukuran < 1044070){ 
    move_uploaded_file($file_tmp, '../assets/images/'.$foto_admin);
              
    foreach($db->AdminSession($username) as $data){

         $foto=$data['foto_admin'];
        $tmpfile = "../assets/images/$foto";
      }

    $query = unlink($tmpfile);
    $query = $db->UpdateProfilAdmin($admin_id, $nama, $email, $username,$nohp,$foto_admin);
 //memasukkan database
  if($query) {

   include 'profilpage.php';

}else {

  echo"<script language='javascript'>
      alert('gagal');
      document.location='login.html';
  </script>"; 
  }

 
}else{
          echo 'UKURAN FILE TERLALU BESAR';
        }
      }else{
        echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN';
      }

?>
