<?php
require 'module/halanggota.php';?>
   
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
         Data Anggota
        </h4>
      </div>
        
        <div class="panel-body">
          <a href="#" class="btn btn-primary" data-target="#ModalTambahAnggota" data-toggle="modal"><i class="fa fa-plus"></i>&nbsp;Tambah Anggota</a>
           <a href="#" class="btn btn-success" onclick="ExportExcel()"><i class="fa fa-print"></i>&nbsp;Export To Excel</a>
            <a href="#" class="btn btn-default" onclick="ExportPdf()"><i class="fa fa-print"></i>&nbsp;Export To PDF</a><br><br>
         <div id="view"><?php require_once 'dataanggota.php';?></div>
      </div>
      
    </div>
  </div>
  
      <!-- /.row (main row) -->

      <!-- Modal Tambah Anggota-->
      <div class="modal fade ui-draggable" id="ModalTambahAnggota" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
               <div class="modal-header" style="background-color: #9853FF; color: white;">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title" id="myModalLabel">Form Tambah Anggota</h4>
               </div>
               <div class="modal-body">
                  <form  class="form-horizontal" method="POST" id="form-save"  enctype="multipart/form-data">
                     <div class="form-group">
                        <label class="col-lg-2 control-label">ID Anggota</label>
                        <div class="col-sm-10">
                          <div class="input-group">
                            <div class="input-group-addon"><i class="glyphicon glyphicon-book"></i></div>
                            <input type="text" style="width: 500px;" class="form-control" name="id_anggota" value="<?php echo create_random();?>" readonly />
                        </div>
                        
                     </div>
                     </div>
                     <div class="form-group">
                        <label class="col-lg-2 control-label">Nama Lengkap</label>
                        <div class="col-sm-10">
                          <div class="input-group">
                            <div class="input-group-addon"><i class="glyphicon glyphicon-user"></i></div>
                            <input type="text" style="width: 500px;" class="form-control" name="nama" placeholder="Masukkan Nama Anggota" />
                        </div>
                        
                     </div>
                     </div>
                      <div class="form-group">
                        <label class="col-lg-2 control-label">Tempat Lahir</label>
                        <div class="col-sm-10">
                          <div class="input-group">
                            <div class="input-group-addon"><i class="glyphicon glyphicon-home"></i></div>
                            <input type="text" style="width: 500px;" class="form-control" name="tempatlahir" placeholder="Masukkan Tempat Lahir" />
                        </div>
                        
                     </div>
                     </div>
                     <div class="form-group">
                        <label class="col-lg-2 control-label">Tanggal Lahir</label>
                        <div class="col-sm-10">
                          <div class="input-group">
                            <div class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></div>
                            <input type="text" style="width: 500px;" id="datepicker" name="tanggal_lahir" required />
                        </div>
                        
                     </div>
                     </div>
                     <div class="form-group">
                        <label class="col-lg-2 control-label">Alamat</label>
                        <div class="col-sm-10">
                          <div class="input-group">
                            <div class="input-group-addon"><i class="glyphicon glyphicon-book"></i></div>
                            <textarea class="form-control " rows="5" name="alamat" style="width: 500px;"></textarea>
                        </div>
                        
                     </div>
                     </div>
                     <div class="form-group">
                        <label class="col-lg-2 control-label">Jenis Kelamin</label>
                        <div class="col-sm-10">

                          <div class="input-group">
                           <select name="jk" class="form-control span8 tip" id="status" style="width: 550px;">
                            <option value=0 >- Pilih Jenis Kelamin -</option>
                            <option value="Pria">Pria</option>
                            <option value="Wanita">Wanita</option>
                          </select>
                          
                        </div>
                        </div>
                     </div>

                     <div class="form-group">
                        <label class="col-lg-2 control-label">No Hp</label>
                        <div class="col-sm-10">
                          <div class="input-group">
                            <div class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></div>
                            <input type="number" style="width: 500px;" class="form-control" name="nohp" required />
                        </div>
                        
                     </div>
                     </div>
                     <div class="form-group">
                        <label class="col-lg-2 control-label">Upload Foto </label>
                        <div class="col-sm-10">
                          <div class="input-group">
                            <div class="input-group-addon"><i class="glyphicon glyphicon-camera"></i></div>
                            <input type="file" style="width: 500px;" class="form-control" name="file" onchange="tampilkanPreview(this,'preview')" id="file" />
                        </div>
                        <img id="preview" src="" alt="" width="320px"/>
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
      <!--Akhir Tambah Modal Anggota-->
      
      <!-- Awal Edit Anggota-->
            
      <div class="modal fade ui-draggable" id="ModalEditAnggota" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
               <div class="modal-header" style="background-color: #9853FF; color: white;">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title" id="myModalLabel">Form Tambah Anggota</h4>
               </div>
               <div class="modal-body">
                  <form  class="form-horizontal" method="POST" id="form-edit"  enctype="multipart/form-data">
                     <div class="form-group">
                        <label class="col-lg-2 control-label">Uid</label>
                        <div class="col-sm-10">
                          <div class="input-group">
                            <div class="input-group-addon"><i class="glyphicon glyphicon-book"></i></div>
                            <input type="text" style="width: 500px;" class="form-control" name="uid" id="uid" readonly />
                        </div>
                        
                     </div>
                     </div>
                     <div class="form-group">
                        <label class="col-lg-2 control-label">ID Anggota</label>
                        <div class="col-sm-10">
                          <div class="input-group">
                            <div class="input-group-addon"><i class="glyphicon glyphicon-book"></i></div>
                            <input type="text" style="width: 500px;" class="form-control" name="id_anggota" id="id_anggota" readonly />
                        </div>
                        
                     </div>
                     </div>
                     <div class="form-group">
                        <label class="col-lg-2 control-label">Nama Lengkap</label>
                        <div class="col-sm-10">
                          <div class="input-group">
                            <div class="input-group-addon"><i class="glyphicon glyphicon-user"></i></div>
                            <input type="text" style="width: 500px;" class="form-control" name="nama" id="nama" placeholder="Masukkan Nama Anggota" />
                        </div>
                        
                     </div>
                     </div>
                      <div class="form-group">
                        <label class="col-lg-2 control-label">Tempat Lahir</label>
                        <div class="col-sm-10">
                          <div class="input-group">
                            <div class="input-group-addon"><i class="glyphicon glyphicon-home"></i></div>
                            <input type="text" style="width: 500px;" class="form-control" name="tempatlahir" id="tempatlahir" placeholder="Masukkan Tempat Lahir" />
                        </div>
                        
                     </div>
                     </div>
                     <div class="form-group">
                        <label class="col-lg-2 control-label">Tanggal Lahir</label>
                        <div class="col-sm-10">
                          <div class="input-group">
                            <div class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></div>
                            <input type="date" style="width: 500px;" id="datepicker" name="tanggal_lahir" id="tanggal_lahir" required />
                        </div>
                        
                     </div>
                     </div>
                     <div class="form-group">
                        <label class="col-lg-2 control-label">Alamat</label>
                        <div class="col-sm-10">
                          <div class="input-group">
                            <div class="input-group-addon"><i class="glyphicon glyphicon-book"></i></div>
                            <textarea class="form-control " rows="5" name="alamat" id="alamat" style="width: 500px;"></textarea>
                        </div>
                        
                     </div>
                     </div>
                     <div class="form-group">
                        <label class="col-lg-2 control-label">Jenis Kelamin</label>
                        <div class="col-sm-10">

                          <div class="input-group">
                           <select name="jk" class="form-control span8 tip" id="jk" style="width: 550px;">
                            <option value=0 >- Pilih Jenis Kelamin -</option>
                            <option value="Pria">Pria</option>
                            <option value="Wanita">Wanita</option>
                          </select>
                          
                        </div>
                        </div>
                     </div>

                     <div class="form-group">
                        <label class="col-lg-2 control-label">No Hp</label>
                        <div class="col-sm-10">
                          <div class="input-group">
                            <div class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></div>
                            <input type="number" style="width: 500px;" class="form-control" name="nohp" id="no" required />
                        </div>
                        
                     </div>
                     </div>
                     <div class="form-group">
                        <label class="col-lg-2 control-label">Upload Foto </label>
                        <div class="col-sm-10">
                          <div class="input-group">
                            <div class="input-group-addon"><i class="glyphicon glyphicon-camera"></i></div>
                            <input type="file" style="width: 500px;" class="form-control" name="file" onchange="tampilkanPreview(this,'preview')" id="file" />
                        </div>
                        <img id="preview" src="" alt="" width="320px"/>
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

<?= $my->SkripAnggotaJs();?>
 <script type="text/javascript">
      $( function() {
          $( "#datepicker" ).datepicker();

  } );
    </script>
    <!--Awal Detail Anggota-->

        <div id="Edit" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
            <div class="modal-content">
               <div class="modal-header" style="background-color: #9853FF; color: white;">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title" id="myModalLabel">Form Artikel</h4>
               </div>
               <div class="modal-body" id="body"></div>
      </div>
      <script type="text/javascript">
        $(document).ready(function (){
             $(".open_modal").click(function (e){
                 var m = $(this).attr("id");
                 $.ajax({
                     url: "detailanggota",
                     type: "GET",
                     data : {uid: m,},
                     success: function (ajaxData){
                        
                         $("#Edit").modal('show',{backdrop: 'true'});
                        
                          $("#body").html(ajaxData);
                     }
                 });
             });
         });
      </script>
       <!--Akhir Detail Anggota-->
</body>
</html>
    
   