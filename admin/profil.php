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
  
?>


<?= _OpenHtml();?>
<?=_OpenHead();?>
   <?=$my->Title("KodingPedia");?>
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
          <a href="profil.php" style="cursor: pointer;">
            <i class="fa fa-user"></i> <span>Profil</span>
            
          </a>
        </li>
        <li>
          <a href="pages/widgets.html" style="cursor: pointer;">
            <i class="fa fa-th"></i> <span>Artikel Pribadi</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-green">new</small>
            </span>
          </a>
        </li>
        <li id="treeview">
          <a class="klik_menu" id="user" href="user.html" style="cursor: pointer;">
            <i class="fa fa-pie-chart"></i>
            <span>Manajemen Artikel User</span>
           
          </a>
          
        </li>
        <li id ="treeview">
           <a class="klik_menu" id="kategori" href="kategori.html" style="cursor: pointer;">
            <i class="fa fa-laptop"></i>
            <span>Manajemen Kategori</span>
          </a>
         
        </li>
        <li id="treeview">
           <a class="klik_menu" id="dataadmin" href="dataadmin.html" style="cursor: pointer;">
            <i class="fa fa-edit"></i> 
            <span>Data Admin</span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i> <span>Data User</span>   
          </a>
          
        </li>
        
        <li class="treeview">
          <a href="#">
            <i class="fa fa-folder"></i> <span>Setting Web</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/examples/invoice.html"><i class="fa fa-circle-o text-yellow"></i> Menu </a></li>
            <li><a href="pages/examples/profile.html"><i class="fa fa-circle-o text-yellow"></i> Banner</a></li>
            <li><a href="pages/examples/login.html"><i class="fa fa-circle-o text-yellow"></i> Peraturan</a></li>
            <li><a href="pages/examples/register.html"><i class="fa fa-circle-o text-yellow"></i>Kontak</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-share"></i> <span>Ganti Password</span>
          </a>
          
        </li>
        <li><a href="https://adminlte.io/docs"><i class="fa fa-book"></i> <span>Logout</span></a></li>
       
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
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
          user
        </h4>
      </div>
        <div class="panel-body">
          <div id="view-profil"><?php include 'profilpage.php';?>
      </div>
      
    </div>
  </div>
      <!-- /.row (main row) -->

    </section>
  </div>
   <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.0
    </div>
    <strong>Copyright &copy; 2014-2016 <a href="https://adminlte.io">Almsaeed Studio</a>.</strong> All rights
    reserved.
  </footer>
    
    <!-- Modal Edit Profile-->
    <div id="ModalEdit" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

      <div class="modal-dialog" id="modalprofil">
    <div class="modal-content">
        <div class="modal-header" style="background-color: #9853FF; color: white;">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
            <h4 class="modal-title" id="myModalLabel">Edit File</h4>
        </div>
        <div class="modal-body">
            <form class="form-horizontal" method="POST" id="form-save" enctype="multipart/form-data">
                     <div class="form-group">
                        <label class="col-lg-3 control-label">Admin Id</label>
                        <div class="col-lg-5">
                          <div class="input-group">
                          <div class="input-group-addon"><i class="glyphicon glyphicon-user"></i></div>
                            <input type="text" class="form-control" name="admin_id" id="admin_id" value="<?= $data['admin_id'];?>" style="width: 250px;" readonly>
                        </div>
                        </div>
                     </div>
                     <div class="form-group">
                        <label class="col-lg-3 control-label">Nama Lengkap</label>
                        <div class="col-lg-5">
                          <div class="input-group">
                          <div class="input-group-addon"><i class="glyphicon glyphicon-user"></i></div>
                            <input type="text" class="form-control" name="nama" id="nama" value="<?= $data['nama'];?>" style="width: 250px;" required>
                        </div>
                        </div>
                     </div>
                     <div class="form-group">
                        <label class="col-lg-3 control-label">Email</label>
                        <div class="col-lg-5">
                          <div class="input-group">
                          <div class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></div>
                          <input type="email" class="form-control" name="email" id="email" value="<?= $data['email'];?>" style="width: 250px;" required>
                        </div>
                        </div>
                     </div>
                     <div class="form-group">
                        <label class="col-lg-3 control-label">No Hp</label>
                        <div class="col-lg-5">
                          <div class="input-group">
                            <div class="input-group-addon"><i class="glyphicon glyphicon-phone"></i></div>
                            <input type="number" class="form-control" name="nohp" id="nohp" value="<?= $data['nohp'];?>" style="width: 250px;" required>
                          </div>
                        </div>
                      </div>
                     <div class="form-group">
                        <label class="col-lg-3 control-label">Username</label>
                        <div class="col-lg-5">
                          <div class="input-group">
                            <div class="input-group-addon"><i class="glyphicon glyphicon-user"></i></div>
                           <input type="text" class="form-control" name="username" id="username" value="<?= $data['username'];?>" style="width: 250px;" readonly>
                        </div>
                     </div>
                     </div>
                     
                     <div class="form-group">
                        <label class="col-lg-3 control-label">Foto</label>
                        <div class="col-lg-5">
                          <div class="input-group">
                            <div class="input-group-addon"><i class="glyphicon glyphicon-camera"></i></div>
                            <input type="File" class="form-control" name="file" id="file" style="width: 250px;" >
                        </div>
                     </div>
                     </div>
                            <div class="modal-footer">
                                <button type="submit" name="ubah" class="btn btn-success">Rubah</button>
                                <button class="btn btn-default" data-dismiss="modal" aria-hidden="true">Keluar</button>
                            </div>
            </form>
        </div>
    </div>
</div>

      </div>
<script type="text/javascript">
        $(document).on("click", ".open_modal", function() {
    var admin_id = $("#ModalEdit").find("input[name='admin_id']").val();
    var nama = $("#ModalEdit").find("input[name='nama']").val();
    var username = $("#ModalEdit").find("input[name='username']").val();
    var email = $("#ModalEdit").find("input[name='email']").val();
    var nohp = $("ModalEdit").find("input[name='nohp']").val();
    var file = $("#ModalEdit").find("input[name='file']").val();
})

$(document).ready(function(e) {
    $("#form-save").on("submit", (function(e) {
        e.preventDefault();
        $.ajax({
            url: 'update_profil.php',
            type: 'POST',
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            success: function(msg) {
            swal({
              title: 'Loading',
              text: 'Please Wait...',
              timer: 5000,
              onOpen: () => {
                swal.showLoading()
              }
            }).then((result) => {
              if (result.dismiss === 'timer') {
               $("#ModalEdit").modal("hide");
                swal('Oops!', 'Update Berhasil!.', 'success'); setTimeout(1000);
                 $('#view-profil').html(msg);
              }
            })
            }
        });
    }));
})
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
              swal('Selamat!', 'Anda Berhasil Keluar!.', 'success'); setTimeout(function(){location.href='logout.html'} , 1000);
            }
          })
              }
      </script>
     
               
     