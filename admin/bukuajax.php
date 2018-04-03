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
	$judul       = $_POST['judul'];
  $pengarang   = $_POST['pengarang'];
  $penerbit   = $_POST['penerbit'];
  $tahun_terbit = $_POST['tahun_terbit'];
  $isbn        = $_POST['isbn'];
  $jumlahbuku  = $_POST['jumlahbuku'];
  $lokasi      = $_POST['lokasi'];
  $tgl_input = date(' Y-m-d');

  $ekstensi_diperbolehkan = array('png','jpg','jpeg','gif');
  $fotobuku = $_FILES['file']['name'];
  $x = explode('.', $fotobuku);
  $ekstensi = strtolower(end($x));
  $ukuran = $_FILES['file']['size'];
  $file_tmp = $_FILES['file']['tmp_name'];  
 
 if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
    if($ukuran < 1044070){ move_uploaded_file($file_tmp, '../assets/images/'.$fotobuku);

 //memasukkan database
  if($db->regist_buku($judul,$pengarang,$penerbit, $tahun_terbit,$isbn,$fotobuku,$jumlahbuku,$lokasi,$tgl_input)) {

   include 'databuku.php';

}else {

  echo"<script language='javascript'>
      alert('gagal');
      document.location='dataartikeladmin.html';
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
  	$id_buku = $_GET['id_buku'];	
   $query = mysqli_query($mysqli, "SELECT * FROM buku WHERE id_buku='$id_buku'");
   $data = mysqli_fetch_array($query);	
   echo json_encode($data);
}


else if($_GET['action'] == "delete"){
   mysqli_query($mysqli, "DELETE FROM buku WHERE id_buku='$_GET[id_buku]'");	
}



else if ($_GET['action'] == "update") {
	 $id_buku     = $_POST['id_buku'];
  $judul       = $_POST['judul'];
  $pengarang   = $_POST['pengarang'];
  $penerbit   = $_POST['penerbit'];
  $tahun_terbit = $_POST['tahun_terbit'];
  $isbn        = $_POST['isbn'];
  $jumlahbuku  = $_POST['jumlahbuku'];
  $lokasi      = $_POST['lokasi'];
  $tgl_input = date(' Y-m-d');

  $ekstensi_diperbolehkan = array('png','jpg','jpeg','gif');
  $fotobuku = $_FILES['file']['name'];
  $x = explode('.', $fotobuku);
  $ekstensi = strtolower(end($x));
  $ukuran = $_FILES['file']['size'];
  $file_tmp = $_FILES['file']['tmp_name'];  
  
 
 if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
    if($ukuran < 1044070){ 
    move_uploaded_file($file_tmp, '../assets/images/'.$fotobuku);
              
       foreach($db->ShowBuku() as $data){

         $foto=$data['fotobuku'];
        $tmpfile = "../assets/images/$foto";
      }

    $query = unlink($tmpfile);
    $query = $db->update_buku($id_buku,$judul,$pengarang,$penerbit, $tahun_terbit,$isbn,$fotobuku,$jumlahbuku,$lokasi,$tgl_input);
 //memasukkan database
  if($query) {

 include 'databuku.php';

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