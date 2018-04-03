<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
if(!file_exists("../model/mf_db.php")){
    header("Location:./welcome.html");
}else{
    require_once '../config/config.php';
}
ob_start();

//Mengatur batas login


//Mengecek status login
if(empty($_COOKIE['admin_id']) || empty($_COOKIE['username']) || empty($_COOKIE['nama'])){
  header("Location:logout");
}
else{
  $admin_id = $_COOKIE['admin_id'];
  $username =$_COOKIE['username'];
}
  
?>


<?= _OpenHtml();?>
<?=_OpenHead();?>
   <?=$my->Title("Perpustakaan");?>
    <?= _OpenMeta();?>
    
    <!-- Icon -->
    <?= $my->Icon();?>

    <!--CSS-->
    <?= _ImportCss();?>
    <style type="text/css">
      #myChart{
        width: 50%;
      }
    </style>
    <!--JS-->
   <?= $my->JqueryMin();?>
    <?= $my->Sweet();?>
    <?= $my->BootstrapJs();?>
    <?= $my->BootstrapValidator();?>
    <?= $my->JqueryUi();?>
    <?= $my->AdminLteJs();?>
    <?= $my->Widget();?>
    <?= $my->App();?>
    <?= $my->Stefanus();?>
    <?= $my->ResponsiveJs();?>
    <?= $my->NiceScrool();?>
    <?= $my->Core();?>
    <?= $my->DataTable();?>
    <?= $my->DataTableBootstrap();?>
    <?= $my->DataTableResponsiveJs();?>
    <?= $my->chartjs();?>
<?=_CloseHead();?>
   
 <body class="hold-transition skin-red sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>LT</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Admin</b>LTE</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          
          <!-- Notifications: style can be found in dropdown.less -->
         
          <!-- Tasks: style can be found in dropdown.less -->
          
          <!-- User Account: style can be found in dropdown.less -->
         <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              
              <span class="hidden-xs"><?php echo $username;?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                 <?php
                                              
                foreach($db->AdminSession($username) as $data){
                  ?>
                <img src="<?php echo __URL_IMAGES__;?><?= $data['foto_admin'];?>" class="img-circle" alt="User Image">
                <p>
                 <?php echo $username;?>
                
                  <small>Member since  <?= date('d F Y',strtotime($data['date_register']));?></small><?php };?>
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="#">Followers</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Sales</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Friends</a>
                  </div>
                </div>
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a class="btn btn-default btn-flat klik_menu" id="logout" onclick="LoadExit();">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo __URL_IMAGES__.'/admin.png';?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $username;?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li id="active">
          <a class="klik_menu" id="beranda" href="home.html" style="cursor: pointer;">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
          
        </li>

        <li id="treeview">
          <a href="profil" style="cursor: pointer;">
            <i class="fa fa-user"></i> <span>Profil</span>
            
          </a>
        </li>
        <li>
          <a href="anggota" style="cursor: pointer;">
            <i class="fa fa-th"></i> <span>Data Anggota</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-green">new</small>
            </span>
          </a>
        </li>
        <li id="treeview">
          <a class="klik_menu" id="user" href="buku" style="cursor: pointer;">
            <i class="fa fa-pie-chart"></i>
            <span>Data Buku</span>
           
          </a>
          
        </li>
        <li id="treeview">
          <a class="klik_menu" id="user" href="pengguna" style="cursor: pointer;">
            <i class="fa fa-pie-chart"></i>
            <span>Data Pengguna </span>
           
          </a>
          
        </li>
        <li id ="treeview">
           <a class="klik_menu" id="kategori" href="Transaksi" style="cursor: pointer;">
            <i class="fa fa-laptop"></i>
            <span>Data Transaksi</span>
          </a>
         
        </li>
          
         <li class="treeview">
          <a href="#">
            <i class="fa fa-folder"></i> <span>Laporan Pengunjung</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="Pengunjungharian"><i class="fa fa-circle-o text-yellow"></i> Laporan Harian </a></li>
            <li><a href="PengunjungBulanan"><i class="fa fa-circle-o text-yellow"></i> Laporan Bulanan</a></li>
            <li><a href="PengunjungTahunan"><i class="fa fa-circle-o text-yellow"></i> Laporan Tahunan</a></li>
            
          </ul>
        </li>
        
        <li class="treeview">
          <a href="#">
            <i class="fa fa-folder"></i> <span>Laporan Peminjaman</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="PeminjamanHarian"><i class="fa fa-circle-o text-yellow"></i> Laporan Harian </a></li>
            <li><a href="PeminjamanBulanan"><i class="fa fa-circle-o text-yellow"></i> Laporan Bulanan</a></li>
            <li><a href="PeminjamanTahunan"><i class="fa fa-circle-o text-yellow"></i> Laporan Tahunan</a></li>
            
          </ul>
        </li>
        <li class="treeview">
          <a href="GantiPassword">
            <i class="fa fa-share"></i> <span>Ganti Password</span>
          </a>
          
        </li>
        <li><a href="Tentang"><i class="fa fa-book"></i> <span>Tentang Web</span></a></li>
        <li><a href="Logout"><i class="fa fa-book"></i> <span>Logout</span></a></li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
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
        
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3><?= $db->jumlah_anggota();?></h3>

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
              <h3><?= $db->jumlah_buku();?></h3>

              <p>Jumlah Buku Yang Tersedia</p>
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
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>10</h3>

              <p>Pengunjung Hari Ini</p>
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
              <h3><?= $db->jumlah_transaksi();?></h3>

              <p>Jumlah Transaksi Peminjaman</p>
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
        <!-- Laporan Buku-->

          <!-- About-->
    <section class="stefanus" id="stef-about">
        <div class="container">
            

            <div class="row  wow bounceInLeft animated" style="visibility: visible; animation-name: bounceInLeft;">
                <div class="col-md-8">
                        <!--earning graph start-->
                        <section class="panel">
                            <header class="panel-heading">
                                GRAFIK PEMINJAMAN BUKU
                            </header>
                            <div class="panel-body">
                                <canvas id="linechart" width="723" height="365" style="width: 723px; height: 365px;"></canvas>
                            </div>
                            <script type="text/javascript">
                       var ctx = document.getElementById("linechart");
            var myChart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: [<?php foreach($db->jmltransaksi()  as $data){ echo '"' . $data['bulan'] . '",';}?>],
                    datasets: [{
                            label: '# of Votes',
                            data: [<?php foreach($db->jmltransaksi() as $data){ echo '"' . $data['jumlah'] . '",';}?>],
                            backgroundColor: [
                                'rgba(255, 99, 132, 0.2)',
                                'rgba(54, 162, 235, 0.2)',
                                'rgba(255, 206, 86, 0.2)',
                                'rgba(75, 192, 192, 0.2)',
                                'rgba(153, 102, 255, 0.2)',
                                'rgba(255, 159, 64, 0.2)',
                                'rgba(255, 99, 132, 0.2)',
                                'rgba(54, 162, 235, 0.2)',
                                'rgba(255, 206, 86, 0.2)',
                                'rgba(75, 192, 192, 0.2)',
                                'rgba(153, 102, 255, 0.2)',
                                'rgba(255, 159, 64, 0.2)'
                            ],
                            borderColor: [
                                'rgba(255,99,132,1)',
                                'rgba(54, 162, 235, 1)',
                                'rgba(255, 206, 86, 1)',
                                'rgba(75, 192, 192, 1)',
                                'rgba(153, 102, 255, 1)',
                                'rgba(255, 159, 64, 1)',
                                'rgba(255, 99, 132, 0.2)',
                                'rgba(54, 162, 235, 0.2)',
                                'rgba(255, 206, 86, 0.2)',
                                'rgba(75, 192, 192, 0.2)',
                                'rgba(153, 102, 255, 0.2)',
                                'rgba(255, 159, 64, 0.2)'
                            ],
                            borderWidth: 1
                        }]
                },
                options: {
                    scales: {
                        yAxes: [{
                                ticks: {
                                    beginAtZero: true
                                }
                            }]
                    }
                }
            });
                      </script>
                        </section>
                        <!--earning graph end-->
                </div>
                <div class="col-lg-4">

                        <!--chat start-->
                        <section class="panel">
                            <header class="panel-heading">
                                Pemberitahuan
                            </header>
                            <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 400px;">
                                <div class="panel-body" id="noti-box" style="overflow: hidden; width: auto; height: 400px;">
                                    <div class="alert alert-block alert-danger">
                                        <button data-dismiss="alert" class="close close-sm" type="button">
                                                            <i class="fa fa-times"></i>
                                                        </button>
                                        <strong>alvian</strong>, Telah terdaftar menjadi anggota perpustakaan.
                                    </div>

                                    <div class="alert alert-success">
                                        <button data-dismiss="alert" class="close close-sm" type="button">
                                                            <i class="fa fa-times"></i>
                                                        </button>
                                        <strong>123</strong>, Telah ditambahkan menjadi admin PerPusWeb yang baru.
                                    </div>

                                    <div class="alert alert-info">
                                        <button data-dismiss="alert" class="close close-sm" type="button">
                                                            <i class="fa fa-times"></i>
                                                        </button>
                                        <strong>Membangun Aplikasi Nilai Dengan PHP</strong>, Buku bacaan baru yang ada di PerPusWeb.
                                    </div>


                                    <div class="alert alert-warning">
                                        <button data-dismiss="alert" class="close close-sm" type="button">
                                                            <i class="fa fa-times"></i>
                                                        </button>
                                        <strong>alvian </strong> Pengunjung baru di PerPusWeb.
                                    </div>
                                </div>
                                <div class="slimScrollBar" style="background: rgb(0, 0, 0); width: 5px; position: absolute; top: 0px; opacity: 0.4; display: none; border-radius: 5px; z-index: 99; right: 1px; height: 400px;"></div>
                                <div class="slimScrollRail" style="width: 5px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 5px; background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 1px;"></div>
                            </div>
                        </section>
                    </div>
                </div>
        </div>
    </section>

    <!--Akhir About-->
      <!-- Detail Admin Login-->
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
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.0
    </div>
    <strong>Copyright &copy; 2014-2016 <a href="https://adminlte.io">Almsaeed Studio</a>.</strong> All rights
    reserved.
  </footer>

  
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->
<script>
function LoadExit(){
        swal({
  title: 'Loading',
  text: 'Please Wait...',
  timer: 5000,
  onOpen: () => {
    swal.showLoading()
  }
}).then((result) => {
  if (result.dismiss === 'timer') {
    swal('Selamat!', 'Anda Berhasil Keluar!.', 'success'); setTimeout(function(){location.href='logout'} , 1000);
  }
})
    }
</script>
</body>
</html>