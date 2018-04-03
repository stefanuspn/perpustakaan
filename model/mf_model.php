<?php
require_once "mf_db.php";

/**
* 
*/
class MF_Model extends MyFrameworkDb
{
	private $query;
  
	
	function __construct() 
	{
        $this->mysqli = new mysqli (MF_Model::DBHOST, MF_Model::DBUSER, MF_Model::DBPASS, MF_Model::DBName);


	}
	/*function SQL*/

  /* function Login 
  function cek_data_admin($username,$password) {

  $username = mysqli_real_escape_string($this->mysqli,$username);
  $password = mysqli_real_escape_string($this->mysqli,$password);

  $sql  = "SELECT * FROM admin WHERE  email = '$username'  or username ='$username'"; 
  $result = $this->mysqli->query($sql);
  $hash   = mysqli_fetch_assoc($result)['password'];

  if(password_verify($password,$hash) ) {

    return true;

  }else {
    return false;
  }

}


function login_check($username) {
  
  $username    = mysqli_real_escape_string($this->mysqli,$username);
  
  $sql = "SELECT * from admin where email ='$username' or username ='$username' ";

  if($result = $this->mysqli->query($sql) ) {
    if( $result->num_rows != 0 ) 

      return true;

    }else {
    return false;
  }
}
*/
//membuat proses daftar
function register_admin($nama, $email, $username,$nohp, $password,$foto_admin){

  //mencegah sql injection

  $email    = mysqli_real_escape_string($this->mysqli,$email);
  $nama     = mysqli_real_escape_string($this->mysqli,$nama);
  $username = mysqli_real_escape_string($this->mysqli,$username);
  $nohp     = mysqli_real_escape_string($this->mysqli,$nohp);
  $password = mysqli_real_escape_string($this->mysqli,$password);
  $foto_admin = mysqli_real_escape_string($this->mysqli,$_FILES['file']['name']);

  //enkripsi password
  $password = password_hash($password, PASSWORD_DEFAULT);
  $query = "insert into admin(nama,email,username,nohp,password,date_register,foto_admin) values('$nama','$email','$username','$nohp','$password','".date("Y-m-d")."','$foto_admin')";

  $sql = $this->mysqli->query($query);

  if($sql) {
    return true;
  }else {
    return false;
  }
}


//mengecek ketersediaan email,no hp ,dan password 

function register_cek($email, $nohp) {


  $email    = mysqli_real_escape_string($this->mysqli,$email);
  $nohp     = mysqli_real_escape_string($this->mysqli,$nohp);
  
  $query = "SELECT * from admin where email ='$email' and nohp = '$nohp' ";

  

  if($link = $this->mysqli->query($query)) {
    if($link->num_rows == 0 ) 

      return true;
    else 
      return false;
  }
}
	 /*Function to save data to database*/


   	/*function update files*/

   function UpdateProfilAdmin($admin_id, $nama, $email, $username,$nohp,$foto_admin)
   {	
  
  $admin_id = mysqli_real_escape_string($this->mysqli,$admin_id); 	
  $nama     = mysqli_real_escape_string($this->mysqli,$nama);
  $email     = mysqli_real_escape_string($this->mysqli,$email);
  $username = mysqli_real_escape_string($this->mysqli,$username);
  $nohp     = mysqli_real_escape_string($this->mysqli,$nohp);
  
  $foto_admin = mysqli_real_escape_string($this->mysqli,$_FILES['file']['name']);

  //enkripsi password
  
  
		$sql = "UPDATE admin SET nama='$nama', email='$email', username='$username', nohp='$nohp', foto_admin='$foto_admin' WHERE admin_id='$admin_id'";

		$query = $this->mysqli->query($sql);

		if($query){

		return true;

		}

		else{
		
		return false;
	    }
  }	

    /*function delete data*/
    function DeleteAdmin($admin_id)
    {
    	if(isset($_GET['hal']) == 'hapus'){

        $admin_id = $_GET['admin_id'];

        $sql = "DELETE FROM admin WHERE admin_id='$admin_id'";

        $sql2 = "SELECT * FROM admin where admin_id='$admin_id'";

        $cek = $this->mysqli->query($sql2);

        $dt=mysqli_fetch_array($cek);
        $foto=$dt['foto_admin'];
        $tmpfile = "../assets/images/$foto";
        if($cek->num_rows == 0){

          echo '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Data tidak ditemukan.</div>';

        }else{
          $delete = $this->mysqli->query($sql);
          $delete = unlink($tmpfile);
          if($delete){

          return true;

          }else{
            return false;
          }
        }
      }   	
    }

    function jumlah_anggota () 
    {
        $sql    = "SELECT * from anggota";

        $query  = $this->mysqli->query($sql);

        $jumlah = $query->num_rows;

        echo $jumlah;
    }

    function jumlah_buku () 
    {
        $sql    = "SELECT * from buku";

        $query  = $this->mysqli->query($sql);

        $jumlah = $query->num_rows;

        echo $jumlah;
    }

    function jumlah_admin () 
    {
        $sql    = "SELECT * from admin";

        $query  = $this->mysqli->query($sql);

        $jumlah = $query->num_rows;

        echo $jumlah;
    }

    function jumlah_kategori () 
    {
        $sql    = "SELECT * from category";

        $query  = $this->mysqli->query($sql);

        $jumlah = $query->num_rows;

        echo $jumlah;
    }

    function AdminSession($username) 
  {
  
      $sql   = "SELECT * FROM admin where username ='$username' ";
        $query = $this->mysqli->query($sql);
        while($data = $query->fetch_assoc()) {
            $result[]=$data;
          
   }
        return $result;
 }

 function EditProfil($admin_id) 
   {

      

      $sql   = "SELECT * FROM admin where admin_id ='$admin_id' ";
      $query = $this->mysqli->query($sql);

      return $query;
   }

   function showAdmin() 
  {
  
      $sql   = "SELECT * FROM admin order by admin_id desc";
        $query = $this->mysqli->query($sql);
        while($data = $query->fetch_assoc()) {
            $result[]=$data;
          
   }
        return $result;
 }
   
function regist_category($category_name){

  //mencegah sql injection

  $category_name    = mysqli_real_escape_string($this->mysqli,$category_name);
 

  //enkripsi password
 
  $query = "insert into category(category_name) values('$category_name')";

  $sql = $this->mysqli->query($query);

  if($sql) {
    return true;
  }else {
    return false;
  }
}


//mengecek ketersediaan email,no hp ,dan password 

function category_cek($category_name) {


  $category_name    = mysqli_real_escape_string($this->mysqli,$category_name);
  
  $query = "SELECT * from category where category_name ='$category_name' ";

  

  if($link = $this->mysqli->query($query)) {
    if($link->num_rows == 0 ) 

      return true;
    else 
      return false;
  }
}

   function showCat() 
  {
  
      $sql   = "SELECT * FROM category order by post_cat desc";
        $query = $this->mysqli->query($sql);
        $result = array();
        while($data = $query->fetch_assoc()) {
            $result[]=$data;
          
   }

        return $result;
 }
  function DeleteKategori($post_cat)
    {
      if(isset($_GET['hal']) == 'hapus'){

        $post_cat = $_GET['post_cat'];

        $sql = "DELETE FROM category WHERE post_cat='$post_cat'";

        $sql2 = "SELECT * FROM category where post_cat='$post_cat'";

        $cek = $this->mysqli->query($sql2);

       
        if($cek->num_rows == 0){

          echo '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Data tidak ditemukan.</div>';

        }else{
          $delete = $this->mysqli->query($sql);
          
          if($delete){

          return true;

          }else{
            return false;
          }
        }
      }     
    }

    function EditKat($post_cat) 
   {

      

      $sql   = "SELECT * FROM category where post_cat ='$post_cat' ";
      $query = $this->mysqli->query($sql);

      return $query;
   }

    function UpdateKat($post_cat, $category_name)
   {  
  
  $post_cat = mysqli_real_escape_string($this->mysqli,$post_cat);   
  $category_name     = mysqli_real_escape_string($this->mysqli,$category_name);
 

    $sql = "UPDATE category SET category_name='$category_name' WHERE post_cat='$post_cat'";

    $query = $this->mysqli->query($sql);

    if($query){

    return true;

    }

    else{
    
    return false;
      }
  } 

 
function regist_buku($judul,$pengarang,$penerbit, $tahun_terbit,$isbn,$fotobuku,$jumlahbuku,$lokasi,$tgl_input){

  //mencegah sql injection
  $judul         = mysqli_real_escape_string($this->mysqli,$judul);
 
  $pengarang     = mysqli_real_escape_string($this->mysqli,$pengarang);
  $penerbit      = mysqli_real_escape_string($this->mysqli,$penerbit);
  $tahun_terbit  = mysqli_real_escape_string($this->mysqli,$tahun_terbit);
  $isbn          = mysqli_real_escape_string($this->mysqli,$isbn);
  $fotobuku      = mysqli_real_escape_string($this->mysqli,$_FILES['file']['name']);
  $jumlahbuku    = mysqli_real_escape_string($this->mysqli,$jumlahbuku);
  $lokasi        = mysqli_real_escape_string($this->mysqli,$lokasi);

  //enkripsi password
  $query = "insert into buku(judul,pengarang,penerbit,tahun_terbit,isbn,fotobuku,jumlahbuku,lokasi,tgl_input) 
            values('$judul','$pengarang','$penerbit','$tahun_terbit','$isbn','$fotobuku','$jumlahbuku','$lokasi','".date("Y-m-d")."')";

  $sql = $this->mysqli->query($query);

  if($sql) {
    return true;
  }else {
    return false;
  }
}

function ShowBuku() 
  {  /* 
    create view artikel as

    SELECT post_id,nama as author,category_name,judul,foto,post_konten,post_date,status from admin,category,post where post.post_cat = category.post_cat and post.admin_id = admin.admin_id order by post_id desc*/
  
      $sql   = "SELECT * FROM buku where id_buku";

        $query = $this->mysqli->query($sql);
        $result = array();
        while($data = $query->fetch_assoc()) {
            $result[]=$data;
           json_encode($data);
   }

        return $result;
 }

 function editBuku($id_buku)
 {
      $sql   = "SELECT * FROM buku where id_buku='$id_buku'";

        $query = $this->mysqli->query($sql);
        $result = array();
        while($data = $query->fetch_assoc()) {
            $result[]=$data;
            json_encode($data);
 }
 return $result;
}

function editArtikelAjax()
 {
      $sql   = "SELECT * FROM artikel where post_id";

        $query = $this->mysqli->query($sql);
        $result = array();
        while($data = $query->fetch_assoc()) {
            $result[]=$data;
            json_encode($data);
 }
 return $result;
}

function update_buku($id_buku,$judul,$pengarang,$penerbit, $tahun_terbit,$isbn,$fotobuku,$jumlahbuku,$lokasi,$tgl_input)
   {  
  
    //mencegah sql injection
    $id_buku    = mysqli_real_escape_string($this->mysqli,$id_buku);
  $judul         = mysqli_real_escape_string($this->mysqli,$judul);
  $pengarang     = mysqli_real_escape_string($this->mysqli,$pengarang);
  $penerbit      = mysqli_real_escape_string($this->mysqli,$penerbit);
  $tahun_terbit  = mysqli_real_escape_string($this->mysqli,$tahun_terbit);
  $isbn          = mysqli_real_escape_string($this->mysqli,$isbn);
  $fotobuku      = mysqli_real_escape_string($this->mysqli,$_FILES['file']['name']);
  $jumlahbuku    = mysqli_real_escape_string($this->mysqli,$jumlahbuku);
  $lokasi        = mysqli_real_escape_string($this->mysqli,$lokasi);

  //enkripsi password
  
  
    $sql = "UPDATE buku SET judul='$judul', pengarang='$pengarang',penerbit ='$penerbit', tahun_terbit='$tahun_terbit', isbn='$isbn', fotobuku='$fotobuku', jumlahbuku='$jumlahbuku', lokasi='$lokasi' WHERE id_buku='$id_buku'";

    $query = $this->mysqli->query($sql);

    if($query){

    return true;

    }

    else{
    
    return false;
      }
  } 

  

// anggota
    function regist_anggota($id_anggota,$nama,$tempatlahir, $tanggal_lahir,$alamat,$jk,$nohp,$foto_user,$date_register){

  //mencegah sql injection
        $id_anggota    = mysqli_real_escape_string($this->mysqli,$id_anggota);
       
        $nama          = mysqli_real_escape_string($this->mysqli,$nama);
        $tempatlahir      = mysqli_real_escape_string($this->mysqli,$tempatlahir);
        $tanggal_lahir  = mysqli_real_escape_string($this->mysqli,$tanggal_lahir);
        $alamat          = mysqli_real_escape_string($this->mysqli,$alamat);
        $jk            = mysqli_real_escape_string($this->mysqli,$jk);
        $nohp          = mysqli_real_escape_string($this->mysqli,$nohp);
        $foto_user      = mysqli_real_escape_string($this->mysqli,$_FILES['file']['name']);
     

  //enkripsi password
  $query = "insert into anggota(id_anggota,nama,tempatlahir,tanggal_lahir,alamat,jk,nohp,foto_user,date_register) 
            values('$id_anggota','$nama','$tempatlahir','$tanggal_lahir','$alamat','$jk','$nohp','$foto_user','".date("Y-m-d")."')";

  $sql = $this->mysqli->query($query);

  if($sql) {
    return true;
  }else {
    return false;
  }
}

function ShowAnggota() 
  {  /* 
    create view artikel as

    SELECT post_id,nama as author,category_name,judul,foto,post_konten,post_date,status from admin,category,post where post.post_cat = category.post_cat and post.admin_id = admin.admin_id order by post_id desc*/
  
      $sql   = "SELECT * FROM anggota where uid";

        $query = $this->mysqli->query($sql);
        $result = array();
        while($data = $query->fetch_assoc()) {
            $result[]=$data;
           json_encode($data);
   }

        return $result;
 }


 function JumlahAnggota() 
  {  /* 
    create view artikel as

    SELECT post_id,nama as author,category_name,judul,foto,post_konten,post_date,status from admin,category,post where post.post_cat = category.post_cat and post.admin_id = admin.admin_id order by post_id desc*/
  
      $sql   = "SELECT * from jumlahanggota";

        $query = $this->mysqli->query($sql);
        $result = array();
        while($data = $query->fetch_assoc()) {
            $result[]=$data;
           json_encode($data);
   }

        return $result;
 }

 
  function DetailAnggota($uid)
 {
      $sql   = "SELECT * FROM anggota where uid='$uid'";

        $query = $this->mysqli->query($sql);
        $result = array();
        while($data = $query->fetch_assoc()) {
            $result[]=$data;
            json_encode($data);
 }
 return $result;
}

function update_anggota($uid,$id_anggota,$nama,$tempatlahir, $tanggal_lahir,$alamat,$jk,$nohp,$foto_user)
   {  
  
    //mencegah sql injection
    $uid    = mysqli_real_escape_string($this->mysqli,$uid);
   $id_anggota    = mysqli_real_escape_string($this->mysqli,$id_anggota);
       
        $nama          = mysqli_real_escape_string($this->mysqli,$nama);
        $tempatlahir      = mysqli_real_escape_string($this->mysqli,$tempatlahir);
        $tanggal_lahir  = mysqli_real_escape_string($this->mysqli,$tanggal_lahir);
        $alamat          = mysqli_real_escape_string($this->mysqli,$alamat);
        $jk            = mysqli_real_escape_string($this->mysqli,$jk);
        $nohp          = mysqli_real_escape_string($this->mysqli,$nohp);
        $foto_user      = mysqli_real_escape_string($this->mysqli,$_FILES['file']['name']);

  //enkripsi password
  
  
    $sql = "UPDATE anggota SET id_anggota='$id_anggota', nama='$nama',tempatlahir ='$tempatlahir', tanggal_lahir='$tanggal_lahir', alamat='$alamat', foto_user='$foto_user' WHERE uid='$uid'";

    $query = $this->mysqli->query($sql);

    if($query){

    return true;

    }

    else{
    
    return false;
      }
  }
function pilihbuku() {

  
  $sql = "SELECT * FROM buku  ORDER BY judul";  
  $query = $this->mysqli->query($sql);


  while ($row1 = mysqli_fetch_array($query)){
    echo "<option value=$row1[judul]>$row1[isbn] - $row1[judul]</option>";
  }
                          
}

  function regist_transaksi($NoTrans, $nama,$judulbuku,$jumlah_pinjam,$tgl_pinjam,$tgl_kembali,$bulan,$tahun,$status){

  //mencegah sql injection
        $NoTrans    = mysqli_real_escape_string($this->mysqli,$NoTrans);
        $nama          = mysqli_real_escape_string($this->mysqli,$nama);
        $judulbuku      = mysqli_real_escape_string($this->mysqli,$judulbuku);
        $jumlah_pinjam  = mysqli_real_escape_string($this->mysqli,$jumlah_pinjam);
        $tgl_pinjam     = mysqli_real_escape_string($this->mysqli,$tgl_pinjam);
        $tgl_kembali    = mysqli_real_escape_string($this->mysqli,$tgl_kembali);
        $bulan          = mysqli_real_escape_string($this->mysqli,$bulan);
        $tahun          = mysqli_real_escape_string($this->mysqli,$tahun);
        $status          = mysqli_real_escape_string($this->mysqli,$status);

  //enkripsi password
  $query = "insert into transaksi(NoTrans,nama,judulbuku,jumlah_pinjam,tgl_pinjam,tgl_kembali,bulan,tahun,status) 
            values('$NoTrans','$nama','$judulbuku','$jumlah_pinjam','$tgl_pinjam','$tgl_kembali','$bulan','$tahun','$status')";

  $sql = $this->mysqli->query($query);

  if($sql) {
    return true;
  }else {
    return false;
  }
}
function ShowTransBuku($judul) 
  {  /* 
    create view artikel as

    SELECT post_id,nama as author,category_name,judul,foto,post_konten,post_date,status from admin,category,post where post.post_cat = category.post_cat and post.admin_id = admin.admin_id order by post_id desc*/
      
      $judul = mysqli_real_escape_string($this->mysqli,$judul);

      $sql   = "SELECT * FROM buku where judul='$judul'";

        $query = $this->mysqli->query($sql);
        $result = array();
        while($data = $query->fetch_assoc()) {
            $result[]=$data;
           json_encode($data);
   }

        return $result;
 }

 function ShowTransaksi() 
  {  /* 
    create view artikel as

    SELECT post_id,nama as author,category_name,judul,foto,post_konten,post_date,status from admin,category,post where post.post_cat = category.post_cat and post.admin_id = admin.admin_id order by post_id desc*/

      $sql   = "SELECT * FROM transaksi where status='pinjam'";

        $query = $this->mysqli->query($sql);
        $result = array();
        while($data = $query->fetch_assoc()) {
            $result[]=$data;
           json_encode($data);
   }

        return $result;
 }

function update_transaksibuku($id_buku,$jumlahpinjam)
   {  
  
    //mencegah sql injection
    $id_buku    = mysqli_real_escape_string($this->mysqli,$id_buku);
    $jumlahpinjam  = mysqli_real_escape_string($this->mysqli,$jumlahpinjam);
  
    $sql = "UPDATE buku SET jumlahbuku= (jumlah_buku-$jumlahpinjam) WHERE id_buku='$id_buku'";

    $query = $this->mysqli->query($sql);

    if($query){

    return true;

    }

    else{
    
    return false;
      }
  }

  function jumlah_transaksi () 
    {
        $sql    = "SELECT * from transaksi where status='pinjam'";

        $query  = $this->mysqli->query($sql);

        $jumlah = $query->num_rows;

        echo $jumlah;
    }

    function jmltransaksi() 
  {  /* 
    create view artikel as

    SELECT post_id,nama as author,category_name,judul,foto,post_konten,post_date,status from admin,category,post where post.post_cat = category.post_cat and post.admin_id = admin.admin_id order by post_id desc*/
  
      $sql   = "SELECT bulan ,count(bulan) as jumlah from transaksi group by bulan";

        $query = $this->mysqli->query($sql);
        $result = array();
        while($data = $query->fetch_assoc()) {
            $result[]=$data;
           json_encode($data);
   }

        return $result;
 }  
}

$db = new MF_Model() ;