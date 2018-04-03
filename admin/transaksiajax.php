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
  $NoTrans       = $_POST['NoTrans'];
  $judulbuku     = $_POST['judulbuku'];
  $judul         = $judulbuku;
 $nama           = $_POST['nama'];
  $jumlah_pinjam = $_POST['jumlah_pinjam'];
  $tgl_pinjam    = $_POST['tgl_pinjam'];
  $tgl_kembali   = $_POST['tgl_kembali'];
  $bulan         = date('m');
  $tahun         = date('Y');
  $status        = 'pinjam';

 foreach($db->ShowTransBuku($judul) as $data){

 
 if ($data['jumlahbuku']== 0) {
		echo "<script>alert('Stok bukunya telah habis, tidak bisa melakukan transaksi, tambahkan stok buku segera');</script>";	
	}
else {	
 //memasukkan database
  $query = $db->regist_transaksi($NoTrans, $nama,$judulbuku,$jumlah_pinjam,$tgl_pinjam,$tgl_kembali,$bulan,$tahun,$status);
	
 $query = mysqli_query($mysqli,"UPDATE buku SET jumlahbuku= (jumlahbuku-$jumlah_pinjam) WHERE judul='$judul'");	

 if($query) {

 include 'datatransaksi.php';

}else {

  echo"<script language='javascript'>
      alert('gagal');
      document.location='transaksi';
  </script>"; 
  }
}
}
}
   
    
  if($_GET['action'] == "form_data"){
      $id_transaksi = $_GET['id_transaksi'];	
       $query = mysqli_query($mysqli, "SELECT * FROM transaksi WHERE id_transaksi='$id_transaksi'");
       $data = mysqli_fetch_array($query);	
       echo json_encode($data);
}




else if($_GET['action'] == "kembali"){
$id_transaksi  = mysqli_real_escape_string($mysqli,$_GET['id_transaksi']);
$judul= mysqli_real_escape_string($mysqli,$_GET['judul']);
foreach($db->ShowTransaksi() as $data){
  $d = $data['jumlah_pinjam'];
}
mysqli_query($mysqli,"UPDATE transaksi SET status='kembali' WHERE id_transaksi='$id_transaksi'");
mysqli_query($mysqli,"UPDATE buku SET jumlahbuku=(jumlahbuku+$d) WHERE judul='$judul'");

header("Location:transaksi");
}

else if($_GET['action'] == "perpanjang"){

$id_transaksi  = mysqli_real_escape_string($mysqli,$_GET['id_transaksi']);
$judul= mysqli_real_escape_string($mysqli,$_GET['judul']);
$lambat = mysqli_real_escape_string($mysqli,$_GET['lambat']);
if($lambat > 7) {

  echo "<script>alert('Buku yang dipinjam tidak dapat diperpanjang, karena sudah terlambat lebih dari 7 hari. Kembalikan dahulu, kemudian pinjam kembali !');</script>";
  echo "<meta http-equiv='refresh' content='0; url=transaksi'>";
  
  } else {
  foreach($db->ShowTransaksi() as $data){
  $d = $data['jumlah_pinjam'];
  $tgl_kembali = $data['tgl_kembali'];
}
  $pecah      = explode("-",$tgl_kembali);
  $next_7_hari  = mktime(0,0,0,$pecah[1],$pecah[0]+7,$pecah[2]);
  $hari_next    = date("d-m-Y", $next_7_hari);
  mysqli_query($mysqli,"UPDATE transaksi SET tgl_kembali='$hari_next' WHERE id_transaksi='$id_transaksi'");
header("Location:transaksi");
}

}

else if($_GET['action'] == "delete"){
  $a = $_GET['jumlah_pinjam'];
  $judulbuku = $_GET['judulbuku'];
   mysqli_query($mysqli, "DELETE FROM transaksi WHERE id_transaksi='$_GET[id_transaksi]'");
   mysqli_query($mysqli,"UPDATE buku SET jumlahbuku=(jumlahbuku+$a) WHERE judul='$judulbuku'");

header("Location:transaksi"); 
}

?>