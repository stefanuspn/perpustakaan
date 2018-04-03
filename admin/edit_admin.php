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
  echo"<script language='javascript'>
      alert('Waktu Habis Gan');
      document.location='login.html';
  </script>"; 
}
else{
  $admin_id = $_COOKIE['admin_id'];
  $username =$_COOKIE['username'];
}
    if(isset($_GET['admin_id'])){

    
     foreach($db->EditProfil($_GET['admin_id']) as $data){
?>

<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header" style="background-color: #9853FF; color: white;">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
            <h4 class="modal-title" id="myModalLabel">Edit File</h4>
        </div>
        <div class="modal-body">
            <form action="update_admin.html" class="form-horizontal" method="POST" id="form-save" enctype="multipart/form-data">
                     <div class="form-group">
                        <label class="col-lg-3 control-label">Admin Id</label>
                        <div class="col-lg-5">
                          <div class="input-group">
                          <div class="input-group-addon"><i class="glyphicon glyphicon-user"></i></div>
                            <input type="text" class="form-control" name="admin_id" value="<?= $data['admin_id'];?>" style="width: 250px;" readonly>
                        </div>
                        </div>
                     </div>
                     <div class="form-group">
                        <label class="col-lg-3 control-label">Nama Lengkap</label>
                        <div class="col-lg-5">
                          <div class="input-group">
                          <div class="input-group-addon"><i class="glyphicon glyphicon-user"></i></div>
                            <input type="text" class="form-control" name="nama" value="<?= $data['nama'];?>" style="width: 250px;" required>
                        </div>
                        </div>
                     </div>
                     <div class="form-group">
                        <label class="col-lg-3 control-label">Email</label>
                        <div class="col-lg-5">
                          <div class="input-group">
                          <div class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></div>
                          <input type="email" class="form-control" name="email" value="<?= $data['email'];?>" style="width: 250px;" required>
                        </div>
                        </div>
                     </div>
                     <div class="form-group">
                        <label class="col-lg-3 control-label">No Hp</label>
                        <div class="col-lg-5">
                          <div class="input-group">
                            <div class="input-group-addon"><i class="glyphicon glyphicon-phone"></i></div>
                            <input type="number" class="form-control" name="nohp" value="<?= $data['nohp'];?>" style="width: 250px;" required>
                          </div>
                        </div>
                      </div>
                     <div class="form-group">
                        <label class="col-lg-3 control-label">Username</label>
                        <div class="col-lg-5">
                          <div class="input-group">
                            <div class="input-group-addon"><i class="glyphicon glyphicon-user"></i></div>
                           <input type="text" class="form-control" name="username" value="<?= $data['username'];?>" style="width: 250px;" required>
                        </div>
                     </div>
                     </div>
                     
                     <div class="form-group">
                        <label class="col-lg-3 control-label">Foto</label>
                        <div class="col-lg-5">
                          <div class="input-group">
                            <div class="input-group-addon"><i class="glyphicon glyphicon-camera"></i></div>
                            <input type="File" class="form-control" name="file"  style="width: 250px;" >
                        </div>
                     </div>
                     </div>
                            <div class="modal-footer">
                                <button type="submit" name="ubah" class="btn btn-success">Rubah</button>
                                <button class="btn btn-default" data-dismiss="modal" aria-hidden="true">Keluar</button>
                            </div>
            </form>
            <?php
             }
         }


          
            ?>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function() {
                $('#form-edit')
                    .bootstrapValidator({
                        message: 'This value is not valid',
                        feedbackIcons: {
                            valid: 'glyphicon glyphicon-ok',
                            invalid: 'glyphicon glyphicon-remove',
                            validating: 'glyphicon glyphicon-refresh'
                        },
                        fields: {
                            nama: {
                                message: 'The username is not valid',
                                validators: {
                                    notEmpty: {
                                        message: 'Nama Barang tidak boleh kosong'
                                    },
                                    stringLength: {
                                        min: 5,
                                        max: 30,
                                        message: 'Panjang minimal 5 karakter dan panjang maksismu 30 karakter'
                                    }
                                }
                            }, 
                            jumlah: {
                                message: 'The username is not valid',
                                validators: {
                                    notEmpty: {
                                        message: 'Jumlah Barang tidak boleh kosong'
                                    },
                                    digits: {
                                        message: 'anda harus memasukkan angka'
                                    }
                                }
                            }
                        }
                    });
                });
</script>
