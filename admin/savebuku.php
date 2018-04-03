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
   header("Location:logout"); 
}
else{
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

?>     