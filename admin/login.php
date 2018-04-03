<?php
if(!file_exists("../model/mf_db.php")){
    header("Location:./welcome.html");
}else{
    require_once '../config/config.php';
}

date_default_timezone_Set("Asia/Jakarta");
if(isset($_COOKIE['admin_id']) || isset($_COOKIE['username']) || isset($_COOKIE['nama'])) {
   header("Location:index.html");
}else{ 
   
 
  }
// Mengambil waktu awal proses
$mtime = microtime();
$mtime = explode (" ", $mtime);
$mtime = $mtime[1] + $mtime[0];
$tstart = $mtime;

$CSRFToken = new CSRFToken;
?>

<?= _OpenHtml();?>
<?=_OpenHead();?>
   <?=$my->Title("Login Perpustakaan");?>
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
    <?= $my->App();?>
    <?= $my->Stefanus();?>
    <?= $my->WowJs();?>
    <?= $my->ResponsiveJs();?>
    <?= $my->NiceScrool();?>
    <?= $my->Wow();?>
    <script type="text/javascript">
$(function(){
   $('.alert').hide();
   $('.login-form').submit(function(){
      $('.alert').hide();
      if($('input[name=user]').val() == ""){
         $('.alert').fadeIn().html('Kotak input <b>Username</b> masih kosong!');
      }else if($('input[name=pass]').val() == ""){
         $('.alert').fadeIn().html('Kotak input <b>Password</b> masih kosong!');
      }else{
         $.ajax({
            type : "POST",
            url : "ceklogin.php",
            data : $(this).serialize(),
            success : function(data){
               if(data == "ok") {
                swal({
  title: 'Loading',
  text: 'Please Wait...',
  timer: 5000,
  onOpen: () => {
    swal.showLoading()
  }
}).then((result) => {
  if (result.dismiss === 'timer') {
   swal('Selamat!', 'Anda Berhasil Login!.', 'success'); setTimeout(function(){location.href='index'} , 1000);
  }
})
               }else {
               $('.alert').fadeIn().html(data);
               }  
            }
         });
      }
      return false;
   });
});
function tampilkanPreview(gambar,idpreview){
//                membuat objek gambar
                var gb = gambar.files;
                
//                loop untuk merender gambar
                for (var i = 0; i < gb.length; i++){
//                    bikin variabel
                    var gbPreview = gb[i];
                    var imageType = /image.*/;
                    var preview=document.getElementById(idpreview);            
                    var reader = new FileReader();
                    
                    if (gbPreview.type.match(imageType)) {
//                        jika tipe data sesuai
                        preview.file = gbPreview;
                        reader.onload = (function(element) { 
                            return function(e) { 
                                element.src = e.target.result; 
                            }; 
                        })(preview);
 
    //                    membaca data URL gambar
                        reader.readAsDataURL(gbPreview);
                    }else{
//                        jika tipe data tidak sesuai
                        alert("Type file tidak sesuai. Khusus image.");
                    }
                   
                }    
            }

</script>

<?=_CloseHead();?>
   

<body class="hold-transition login-page" style="background-image: url('http://devsteam.com/wp-content/uploads/2013/03/slide1-bg.png'); background-size: cover;">
    <div class="login-box">
        <div class="login-logo animated rollIn" style="color:black;">
            <b><?= $my->Title("KodingPedia");?></b>
        </div>
        <!-- /.login-logo -->
        <div class="alert alert-danger" role="alert"> </div>

      <div class="panel panel-primary animated bounceInLeft" style="">  
         <div class="panel-heading"><b><p class="login-box-msg">Login Form</p></b></div>
          <div class="panel-body">
           <div class="login-box-body">
           <form class="login-form"  >   
   <div class="input-group">
      <div class="input-group-addon"><i class="glyphicon glyphicon-user"></i></div>
      <?php CreateInput("text","form-control","user","Masukkan Username Atau Email");?>
   </div><br/>
  
   <div class="input-group">
      <div class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></div>
      <?php CreateInput("password","form-control","pass","Masukkan Password Anda");?>
   </div><br/>
  <?php echo $CSRFToken->show_tokenHTML(); // show token with html & name is token ?>
   <button name="login" class="btn btn-primary pull-right login-button" > 
      <i class="glyphicon glyphicon-log-in"></i> Login Admin
   </button><br/>
</form>
<br>
<a href="#" data-target="#registerform" data-toggle="modal"><i class="fa fa-users"></i> Register new User</a>

        </div>
      </div> 
      </div> 
        <!-- /.login-box-body -->
    </div>
    <!-- Register-->
      <div class="modal fade" id="registerform" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
         <div class="modal-dialog">
            <div class="modal-content">
               <div class="modal-header" style="background-color: #9853FF; color: white;">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title" id="myModalLabel">Register Form</h4>
               </div>
               <div class="modal-body">
                  <form  class="form-horizontal" method="POST" id="form-save" enctype="multipart/form-data">
                     <div class="form-group">
                        <label class="col-lg-3 control-label">Nama Lengkap</label>
                        <div class="col-lg-5">
                          <div class="input-group">
                          <div class="input-group-addon"><i class="glyphicon glyphicon-user"></i></div>
                          <?php Textbox("text","form-control","nama","Masukkan Nama Lengkap","required");?>
                        </div>
                        </div>
                     </div>
                     <div class="form-group">
                        <label class="col-lg-3 control-label">Email</label>
                        <div class="col-lg-5">
                          <div class="input-group">
                          <div class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></div>
                          <?php Textbox("email","form-control","email","Masukkan Email Anda","required");?>
                        </div>
                        </div>
                     </div>
                     <div class="form-group">
                        <label class="col-lg-3 control-label">No Hp</label>
                        <div class="col-lg-5">
                          <div class="input-group">
                            <div class="input-group-addon"><i class="glyphicon glyphicon-phone"></i></div>
                            <?php Textbox("number","form-control","nohp","Masukkan No Hp Anda","required");?>
                          </div>
                        </div>
                      </div>
                     <div class="form-group">
                        <label class="col-lg-3 control-label">Username</label>
                        <div class="col-lg-5">
                          <div class="input-group">
                            <div class="input-group-addon"><i class="glyphicon glyphicon-user"></i></div>
                            <?php Textbox("text","form-control","username","Masukkan Username Anda","required");?>
                        </div>
                     </div>
                     </div>
                     <div class="form-group">
                        <label class="col-lg-3 control-label">Password</label>
                        <div class="col-lg-5">
                          <div class="input-group">
                            <div class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></div>
                            <?php Textbox("password","form-control","password","Masukkan Password Anda","required");?>
                        </div>
                     </div>
                     </div>
                     <div class="form-group">
                        <label class="col-lg-3 control-label">Foto</label>
                        <div class="col-lg-5">
                          <div class="input-group">
                            <div class="input-group-addon"><i class="glyphicon glyphicon-camera"></i></div>
                            <input type="file" accept="image/*" style="width: 250px;" class="form-control" name="file" onchange="tampilkanPreview(this,'preview')" />
                        </div>
                        <img id="preview" src="" alt="" width="320px"/>
                     </div>
                     </div>
                     <?php echo $CSRFToken->show_tokenHTML(); // show token with html & name is token ?>
                     <div class="modal-footer">
                        <button class="btn btn-success" name="daftar" type="submit">Daftar</button>
                        <button class="btn btn-default" data-dismiss="modal" aria-hidden="true">Keluar</button>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
    <!-- /.login-box -->
    <?php
    if(isset($_POST['daftar']) ) {

  $email    = $_POST['email'];
  $nama     = $_POST['nama'];
  $username = $_POST['username'];
  $password = $_POST['password'];
  $nohp     = $_POST['nohp'];
  $date     = date(' Y-m-d H:i:s');

  $ekstensi_diperbolehkan	= array('png','jpg','jpeg','gif');
  $foto_admin = $_FILES['file']['name'];
  $x = explode('.', $foto_admin);
  $ekstensi = strtolower(end($x));
  $ukuran	= $_FILES['file']['size'];
  $file_tmp = $_FILES['file']['tmp_name'];	
  $foto = __URL_IMAGES__;
 
 if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
		if($ukuran < 1044070){ move_uploaded_file($file_tmp, '../assets/images/'.$foto_admin);

 //memasukkan database
  if($db->register_cek($email, $nohp)) {
  if($db->register_admin($nama, $email, $username,$nohp, $password,$foto_admin) ) {

    echo"<script language='javascript'>
      alert('daftar berhasil');
      document.location='login';
  </script>"; 

}else {

  echo"<script language='javascript'>
      alert('gagal');
      document.location='login';
  </script>"; 
  }

 }else {
  echo"<script language='javascript'>
      alert('Mohon Maaf Data Sudah Tersedia.Harap Isi Ulang Data Anda');
      document.location='login';
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



 </body>
 </html>