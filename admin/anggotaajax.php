<?php
if(!file_exists("../model/mf_db.php")){
    header("Location:./welcome.html");
}else{
    require_once '../config/config.php';
    
}
ob_start();

//Mengatur batas login

$mysqli = mysqli_connect("localhost","root","","perpus");
//Mengecek status login
if(empty($_COOKIE['admin_id']) or empty($_COOKIE['username']) or empty($_COOKIE['nama'])){
   header("Location:logout"); 
}
else{
  $admin_id = $_COOKIE['admin_id'];
  $username =$_COOKIE['username'];
}
if($_GET['action'] == "insert"){
	$id_anggota       = $_POST['id_anggota'];
  $nama        = $_POST['nama'];
  $tempatlahir   = $_POST['tempatlahir'];
  $tanggal_lahir = $_POST['tanggal_lahir'];
  $alamat        = $_POST['alamat'];
  $jk            = $_POST['jk'];
  $nohp         = $_POST['nohp'];
  $date_register = date('Y-m-d');

  $ekstensi_diperbolehkan = array('png','jpg','jpeg','gif');
  $foto_user = $_FILES['file']['name'];
  $x = explode('.', $foto_user);
  $ekstensi = strtolower(end($x));
  $ukuran = $_FILES['file']['size'];
  $file_tmp = $_FILES['file']['tmp_name'];  
 
 if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
    if($ukuran < 1044070){ move_uploaded_file($file_tmp, '../assets/images/'.$foto_user);

 //memasukkan database
  if($db->regist_anggota($id_anggota,$nama,$tempatlahir,$tanggal_lahir,$alamat,$jk,$nohp,$foto_user,$date_register)) {

   include 'dataanggota.php';

}else {

  echo"<script language='javascript'>
      alert('gagal');
      document.location='dataanggota';
  </script>"; 
  }

}else{
          echo 'UKURAN FILE TERLALU BESAR';
        }
      }else{
        echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN';
      }
 
}
   
    
  if($_GET['action'] == "form_data"){
      $uid = $_GET['uid'];	
       $query = mysqli_query($mysqli, "SELECT * FROM anggota WHERE uid='$uid'");
       $data = mysqli_fetch_array($query);	
       echo json_encode($data);
}


else if($_GET['action'] == "delete"){
   mysqli_query($mysqli, "DELETE FROM anggota WHERE uid='$_GET[uid]'");	
}



else if ($_GET['action'] == "update") {
  $uid   = $_POST['uid'];
	$id_anggota       = $_POST['id_anggota'];
  $nama        = $_POST['nama'];
  $tempatlahir   = $_POST['tempatlahir'];
  $tanggal_lahir = $_POST['tanggal_lahir'];
  $alamat        = $_POST['alamat'];
  $jk            = $_POST['jk'];
  $nohp         = $_POST['nohp'];

  $ekstensi_diperbolehkan = array('png','jpg','jpeg','gif');
  $foto_user = $_FILES['file']['name'];
  $x = explode('.', $foto_user);
  $ekstensi = strtolower(end($x));
  $ukuran = $_FILES['file']['size'];
  $file_tmp = $_FILES['file']['tmp_name'];  
  
 
 if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
    if($ukuran < 1044070){ 
    move_uploaded_file($file_tmp, '../assets/images/'.$foto_user);
              
       foreach($db->ShowAnggota() as $data){

         $foto=$data['foto_user'];
        $tmpfile = "../assets/images/$foto";
      }

    $query = unlink($tmpfile);
    $query = $db->update_anggota($uid,$id_anggota,$nama,$tempatlahir, $tanggal_lahir,$alamat,$jk,$nohp,$foto_user);
 //memasukkan database
  if($query) {

 include 'dataanggota.php';

}else {

  echo"<script language='javascript'>
      alert('gagal');
      document.location='buku';
  </script>"; 
  }

 
}else{
          echo 'UKURAN FILE TERLALU BESAR';
        }
      }else{
        echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN';
      }
}

?>