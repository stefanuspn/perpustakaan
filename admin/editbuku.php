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
      document.location='login';
  </script>"; 
}
else{
  $admin_id = $_COOKIE['admin_id'];
  $username =$_COOKIE['username'];
}

    if(isset($_GET['id_buku'])){

    
     foreach($db->editBuku($_GET['id_buku']) as $data){
?>

<form  class="form-horizontal" method="POST" id="form-save" action="updatebuku" enctype="multipart/form-data">
                     <div class="form-group">
                        <label class="col-lg-2 control-label">ID</label>
                        <div class="col-sm-10">
                          <div class="input-group">
                            <div class="input-group-addon"><i class="glyphicon glyphicon-book"></i></div>
                            <input type="text" style="width: 500px;" class="form-control" name="id_buku" value="<?=$data['id_buku'];?>" readonly />
                        </div>
                        
                     </div>
                     </div>

                     <div class="form-group">
                        <label class="col-lg-2 control-label">Judul Buku</label>
                        <div class="col-sm-10">
                          <div class="input-group">
                            <div class="input-group-addon"><i class="glyphicon glyphicon-book"></i></div>
                            <input type="text" style="width: 500px;" class="form-control" name="judul" value="<?=$data['judul'];?>" />
                        </div>
                        
                     </div>
                     </div>
                     <div class="form-group">
                        <label class="col-lg-2 control-label">Pengarang</label>
                        <div class="col-sm-10">
                          <div class="input-group">
                            <div class="input-group-addon"><i class="glyphicon glyphicon-user"></i></div>
                            <input type="text" style="width: 500px;" class="form-control" name="pengarang" value="<?=$data['pengarang'];?>" />
                        </div>
                        
                     </div>
                     </div>
                      <div class="form-group">
                        <label class="col-lg-2 control-label">Penerbit</label>
                        <div class="col-sm-10">
                          <div class="input-group">
                            <div class="input-group-addon"><i class="glyphicon glyphicon-user"></i></div>
                            <input type="text" style="width: 500px;" class="form-control" name="penerbit" placeholder="Masukkan Nama Penerbit" value="<?=$data['penerbit'];?>" />
                        </div>
                        
                     </div>
                     </div>
                     <div class="form-group">
                        <label class="col-lg-2 control-label">Tahun Terbit</label>
                        <div class="col-sm-10">
                          <div class="input-group">
                            <div class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></div>
                            <input type="date" style="width: 500px;" class="form-control" name="tahun_terbit" value="<?=$data[
                                'tahun_terbit'];?>" required />
                        </div>
                        
                     </div>
                     </div>
                     <div class="form-group">
                        <label class="col-lg-2 control-label">No ISBN</label>
                        <div class="col-sm-10">
                          <div class="input-group">
                            <div class="input-group-addon"><i class="glyphicon glyphicon-book"></i></div>
                            <input type="text" style="width: 500px;" class="form-control" name="isbn" value ="<?=$data['isbn'];?>" required />
                        </div>
                        
                     </div>
                     </div>
                     <div class="form-group">
                        <label class="col-lg-2 control-label">Upload Foto Buku</label>
                        <div class="col-sm-10">
                          <div class="input-group">
                            <div class="input-group-addon"><i class="glyphicon glyphicon-camera"></i></div>
                            <input type="file" style="width: 500px;" class="form-control" name="file" onchange="tampilkanPreview(this,'preview')" id="file" />
                        </div>
                        <img id="preview" src="" alt="" width="320px"/>
                     </div>
                     </div>
                     <div class="form-group">
                        <label class="col-lg-2 control-label">Jumlah Buku</label>
                        <div class="col-sm-10">
                          <div class="input-group">
                            <div class="input-group-addon"><i class="glyphicon glyphicon-book"></i></div>
                            <input type="number" style="width: 500px;" class="form-control" name="jumlahbuku" value="<?=$data['jumlahbuku'];?>" required />
                        </div>
                        
                     </div>
                     </div>
                     <br>
                    <div class="form-group">
                        <label class="col-lg-2 control-label">Lokasi Buku</label>
                        <div class="col-sm-10">
                          <div class="input-group">
                            <div class="input-group-addon"><i class="glyphicon glyphicon-book"></i></div>
                            <input type="text" style="width: 500px;" class="form-control" name="lokasi" value="<?=$data['lokasi'];?>" required />
                        </div>
                        
                     </div>
                     </div>
                     <div class="modal-footer">
                        <button class="btn btn-success" name="daftar" id="btn-simpan" type="submit">Save</button>
                        <button class="btn btn-default" data-dismiss="modal" aria-hidden="true">Keluar</button>
                     </div>
                  </form>
               
<?php }};?>
