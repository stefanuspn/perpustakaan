<?php
require_once 'module/haltransaksi.php';

$tuju_hari    = mktime(0,0,0,date("n"),date("j")+7,date("Y"));
$kembali    = date("d-m-Y", $tuju_hari);
?>
   
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
      
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>
<br>
    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
     
      <!-- /.row -->
      <!-- Main row -->
      
  <div class="panel-group">
    <div class="panel panel-primary">
      <div class="panel-heading">
        <h4 class="panel-title">
         Data Transaksi
        </h4>
      </div>
        
        <div class="panel-body">
          <a href="#" class="btn btn-primary" data-target="#ModalTambahTransaksi" data-toggle="modal"><i class="fa fa-plus"></i>&nbsp;Tambah Transaksi</a>
           <a href="#" class="btn btn-success" onclick="ExportExcel()"><i class="fa fa-print"></i>&nbsp;Export To Excel</a>
            <a href="#" class="btn btn-default" onclick="ExportPdf()"><i class="fa fa-print"></i>&nbsp;Export To PDF</a><br><br>
         <div id="view"><?php require_once 'datatransaksi.php';?></div>
      </div>
      
    </div>
  </div>
  
      <!-- /.row (main row) -->

      <!-- Modal Tambah Anggota-->
      <div class="modal fade ui-draggable" id="ModalTambahTransaksi" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
               <div class="modal-header" style="background-color: #9853FF; color: white;">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title" id="myModalLabel">Form Tambah Transaksi</h4>
               </div>
               <div class="modal-body">
                  <form  class="form-horizontal" method="POST" id="form-save"  enctype="multipart/form-data">
                     <div class="form-group">
                        <label class="col-lg-2 control-label">No Transaksi</label>
                        <div class="col-sm-10">
                          <div class="input-group">
                            <div class="input-group-addon"><i class="glyphicon glyphicon-book"></i></div>
                            <input type="text" style="width: 500px;" class="form-control" name="NoTrans" value="<?php echo date('Y');?><?php echo create_random();?>" readonly />
                        </div>
                        
                     </div>
                     </div>
                     <div class="form-group">
                        <label class="col-lg-2 control-label">Nama Anggota</label>
                        <div class="col-sm-10">
                          <div class="input-group">
                         <select name="nama" class="form-control span8 tip" id="pilihanggota" style="width: 550px;">
                       <option value=""></option>
                        <?php

                        $sql = "SELECT * FROM anggota  ORDER BY nama";  
                        $query = mysqli_query($mysqli,$sql);


                        while ($row = mysqli_fetch_array($query)){
                         ?>
                            <option value="<?php echo $row['nama'] ?>"><?php echo $row['id_anggota']?> - <?php echo $row['nama'] ?></option>
                            <?php
                        }
                        ?>
                        </select>
                          
                        </div>
                        </div>
                     </div>
                      <div class="form-group">
                        <label class="col-lg-2 control-label">Judul Buku</label>
                        <div class="col-sm-10">
                          <div class="input-group">
                            <select name="judulbuku" class="form-control span8 tip" id="pilihbuku" style="width: 550px;">
                              <option value=""></option>
                                   <?php

                              $sql = "SELECT * FROM buku  ORDER BY judul";  
                              $query = mysqli_query($mysqli,$sql);


                              while ($row = mysqli_fetch_array($query)){
                               ?>
                                  <option value="<?php echo $row['judul'] ?>"><?php echo $row['isbn']?> - <?php echo $row['judul'] ?></option>
                                  <?php
                              }
                              ?>
                        </select>
                        </div>
                        
                     </div>
                     </div>
                     <div class="form-group">
                        <label class="col-lg-2 control-label">Jumlah Pinjam</label>
                        <div class="col-sm-10">
                          <div class="input-group">
                            <div class="input-group-addon"><i class="glyphicon glyphicon-book"></i></div>
                            <input type="number" style="width: 500px;" class="form-control" name="jumlah_pinjam" required placeholder="Masukkan Jumlah Pinjam" />
                        </div>
                        
                     </div>
                     </div>
                     <div class="form-group">
                        <label class="col-lg-2 control-label">Tanggal Pinjam</label>
                        <div class="col-sm-10">
                          <div class="input-group">
                            <div class="input-group-addon"><i class="glyphicon glyphicon-book"></i></div>
                            <input type="text" style="width: 500px;" class="form-control" name="tgl_pinjam" value="<?php echo date("d-m-Y");?>" readonly  />
                        </div>
                        
                     </div>
                     </div>
                     <div class="form-group">
                        <label class="col-lg-2 control-label">Tanggal Kembali</label>
                        <div class="col-sm-10">
                          <div class="input-group">
                            <div class="input-group-addon"><i class="glyphicon glyphicon-book"></i></div>
                            <input type="text" style="width: 500px;" class="form-control" name="tgl_kembali" value="<?php echo $kembali;?>" readonly  />
                        </div>
                        
                     </div>
                     </div>
                    
                     <div class="modal-footer">
                        <button class="btn btn-success" name="daftar" id="btn-simpan" type="submit">Save</button>
                        <button class="btn btn-default" data-dismiss="modal" aria-hidden="true">Keluar</button>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
      <script type="text/javascript">
       $(document).ready(function() {
          $("#pilihanggota").select2({
            dropdownParent: $("#ModalTambahTransaksi"),
             placeholder: "Please Select"
          });
          $("#pilihbuku").select2({
            dropdownParent: $("#ModalTambahTransaksi"),
            placeholder: "Please Select"
          });
      });
      </script>
      <!--Akhir Tambah Modal Anggota-->
      
      <!-- Awal Edit Anggota-->
            
      <div class="modal fade ui-draggable" id="ModalEditTransaksi" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
               <div class="modal-header" style="background-color: #9853FF; color: white;">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title" id="myModalLabel">Edit Transaksi</h4>
               </div>
               <div class="modal-body">
                  <form  class="form-horizontal" method="POST" id="form-edit"  enctype="multipart/form-data">
                     <div class="form-group">
                        <label class="col-lg-2 control-label">Id Transaksi</label>
                        <div class="col-sm-10">
                          <div class="input-group">
                            <div class="input-group-addon"><i class="glyphicon glyphicon-book"></i></div>
                            <input type="text" style="width: 500px;" class="form-control" name="id_transaksi" id="id_transaksi" readonly />
                        </div>
                        
                     </div>
                     </div>
                     <div class="form-group">
                        <label class="col-lg-2 control-label">No Transaksi</label>
                        <div class="col-sm-10">
                          <div class="input-group">
                            <div class="input-group-addon"><i class="glyphicon glyphicon-book"></i></div>
                            <input type="text" style="width: 500px;" class="form-control" name="NoTrans" id="NoTrans" readonly />
                        </div>
                        
                     </div>
                     </div>
                    <div class="form-group">
                        <label class="col-lg-2 control-label">Nama Anggota</label>
                        <div class="col-sm-10">
                          <div class="input-group">
                         <select name="nama" class="form-control span8 tip anggota" id="pilihanggota" style="width: 550px;">
                       <option value=""></option>
                        <?php

                        $sql = "SELECT * FROM anggota  ORDER BY nama";  
                        $query = mysqli_query($mysqli,$sql);


                        while ($row = mysqli_fetch_array($query)){
                         ?>
                            <option value="<?php echo $row['nama'] ?>"><?php echo $row['id_anggota']?> - <?php echo $row['nama'] ?></option>
                            <?php
                        }
                        ?>
                        </select>
                          
                        </div>
                        </div>
                     </div>
                      <div class="form-group">
                        <label class="col-lg-2 control-label">Judul Buku</label>
                        <div class="col-sm-10">
                          <div class="input-group">
                            <select name="judulbuku" class="form-control span8 tip buku" id="pilihbuku" style="width: 550px;">
                              <option value=""></option>
                                   <?php

                              $sql = "SELECT * FROM buku  ORDER BY judul";  
                              $query = mysqli_query($mysqli,$sql);


                              while ($row = mysqli_fetch_array($query)){
                               ?>
                                  <option value="<?php echo $row['judul'] ?>"><?php echo $row['isbn']?> - <?php echo $row['judul'] ?></option>
                                  <?php
                              }
                              ?>
                        </select>
                        </div>
                        
                     </div>
                     </div>
                     <div class="form-group">
                        <label class="col-lg-2 control-label">Jumlah Pinjam</label>
                        <div class="col-sm-10">
                          <div class="input-group">
                            <div class="input-group-addon"><i class="glyphicon glyphicon-book"></i></div>
                            <input type="number" style="width: 500px;" class="form-control" name="jumlah_pinjam" required placeholder="Masukkan Jumlah Pinjam" id="jumlah_pinjam" />            
                        </div>
                     </div>
                     </div>
                      <div class="checkbox">
                              <label><input type="checkbox" name="pusing" id="pusing" value="true">Centang Jika Ingin Menambah Buku Yang Dipinjam</label>
                            </div>
                     <div class="form-group">
                        <label class="col-lg-2 control-label">Tanggal Pinjam</label>
                        <div class="col-sm-10">
                          <div class="input-group">
                            <div class="input-group-addon"><i class="glyphicon glyphicon-book"></i></div>
                            <input type="text" style="width: 500px;" class="form-control" name="tgl_pinjam" value="<?php echo date("d-m-Y");?>" id="tgl_pinjam" readonly />
                        </div>
                        
                     </div>
                     </div>
                     <div class="form-group">
                        <label class="col-lg-2 control-label">Tanggal Kembali</label>
                        <div class="col-sm-10">
                          <div class="input-group">
                            <div class="input-group-addon"><i class="glyphicon glyphicon-book"></i></div>
                            <input type="text" style="width: 500px;" class="form-control" name="tgl_kembali" id="tgl_kembali" value="<?php echo $kembali;?>" readonly  />
                        </div>
                        
                     </div>
                     </div>
                    
                     <div class="modal-footer">
                        <button class="btn btn-success" name="daftar" id="btn-simpan" type="submit">Save</button>
                        <button class="btn btn-default" data-dismiss="modal" aria-hidden="true">Keluar</button>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
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

<?= $my->SkripTransaksiJs();?>

    </script>
    
</body>
</html>
    
   