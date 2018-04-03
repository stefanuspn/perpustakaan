<?php
if(!file_exists("../model/mf_db.php")){
    header("Location:./welcome.html");
}else{
    require_once '../config/config.php';
}
ob_start();

//Mengatur batas login
//Mengecek status login
if(empty($_COOKIE['username']) or empty($_COOKIE['nama'])){
   header('location: login.php');
}
else{
  $username=$_COOKIE['username'];
}
  
?>
<section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3><?= $db->jumlah_admin();?></h3>

              <p>Jumlah Admin</p>
            </div>
            <div class="icon">
              <i class="ion ion-person"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3><?= $db->jumlah_user();?></h3>

              <p>User Yang Terdaftar</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-stalker"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3><?= $db->jumlah_post();?></h3>

              <p>Jumlah Artikel</p>
            </div>
            <div class="icon">
              <i class="ion ion-document-text"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3><?= $db->jumlah_kategori();?></h3>

              <p>Jumlah Kategori Artikel</p>
            </div>
            <div class="icon">
              <i class="ion ion-document-text"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
      <!-- /.row -->
      <!-- Main row -->
      <h2>Collapsible Panel</h2>
  <p>Click on the collapsible panel to open and close it.</p>
  <div class="panel-group">
    <div class="panel panel-primary">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" href="#collapse1">User Info</a>
        </h4>
      </div>
      <div id="collapse1" class="panel-collapse collapse">
        <div class="panel-body">
          <div class="row">
                                    <div class="col-md-6">

                                        <table class="table">
                                            <tbody>
                                              <?php
                                              
                                              foreach($db->AdminSession($username) as $data){
                                               ?>
                                                <tr>
                                                    <th>Nama Lengkap</th>
                                                    <th>:</th>
                                                    <td><?= $data['nama']?></td>
                                                </tr>
                                                <tr>
                                                    <th>Username</th>
                                                    <th>:</th>
                                                    <td><?= $data['username'];?></td>
                                                </tr>
                                                <tr>
                                                    <th>Email</th>
                                                    <th>:</th>
                                                    <td><?= $data['email'];?></td>
                                                </tr>
                                                <tr>
                                                    <th>No. HP</th>
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
                                                <?php };?>
                                            </tbody>
                                        </table>

                                    </div>
                                    <div class="col-md-6">


                                        <table class="table">
                                            <tbody>
                                                <tr>
                                                    <th>Last Login</th>
                                                    <th>:</th>
                                                    <td><?php $date = date("d - m - Y  H:i:s:A"); echo $date;?></td>
                                                </tr>
                                                <tr>
                                                    <th>IP Address</th>
                                                    <th>:</th>
                                                    <td><?= $function->get_client_ip_env();?></td>
                                                </tr>
                                                <tr>
                                                    <th>Server</th>
                                                    <th>:</th>
                                                    <td><?php echo $_SERVER['SERVER_NAME'];?></td>
                                                </tr>
                                                <tr>
                                                    <th>Browser</th>
                                                    <th>:</th>
                                                    <td><?= $function->getting_browser();?></td>
                                                </tr>
                                                <tr>
                                                    <th>Os</th>
                                                    <th>:</th>
                                                    <td><?=$function->get_os();?></td>
                                                </tr>
                                            </tbody>
                                        </table>

              </div>
          
        </div>
      </div>
      </div>
    </div>
  </div>
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->