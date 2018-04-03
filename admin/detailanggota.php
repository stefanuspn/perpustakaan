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

    if(isset($_GET['uid'])){

    
     foreach($db->DetailAnggota($_GET['uid']) as $data){
?>

<div class="row">
              <div class="col-md-6">

                  <table class="table table-striped table-hover ">
                      <tbody>
                            
                           <tr>
                              <th>ID Anggota</th>
                              <th>:</th>
                              <td><?= $data['id_anggota']?></td>
                          </tr> 
                          <tr>
                              <th>Nama Lengkap</th>
                              <th>:</th>
                              <td><?= $data['nama']?></td>
                          </tr>
                          <tr>
                              <th>Tempat,Tanggal Lahir</th>
                              <th>:</th>
                              <td><?= $data['tempatlahir'];?>, <?= 
                              date('d F Y',strtotime($data['tanggal_lahir']));
                               ?></td>
                          </tr>
                          <tr>
                              <th>Alamat</th>
                              <th>:</th>
                              <td><?= $data['alamat'];?></td>
                          </tr>
                          <tr>
                              <th>Jenis Kelamin</th>
                              <th>:</th>
                              <td><?= $data['jk'];?></td>
                          </tr>
                           <tr>
                              <th>No Hp</th>
                              <th>:</th>
                              <td><?= $data['nohp'];?></td>
                          </tr>
                          <tr>
                              <th>Waktu Daftar</th>
                              <th>:</th>
                              <td>
                              <?= 
                              date('d F Y',strtotime($data['date_register']));
                               ?></td>
                          </tr>
                          
                      </tbody>
                  </table>
                   <br>
                   
              </div>
               
              <div class="col-md-6">
                   <table class="table table-striped table-hover ">
                      <tbody>
                          <tr>
                              <td><img src="<?php echo __URL_IMAGES__;?><?= $data['foto_user'];?>" class="img-circle" alt="User Image" style="width: 300px; height: 150px;"></td>
                          </tr>
                          <?php };?>
                      </tbody>
                  </table>
               </div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>


 <div class="modal-footer">
    <button class="btn btn-default" data-dismiss="modal" aria-hidden="true">Keluar</button>
 </div>
                
               
<?php };?>
