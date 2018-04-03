<?php
$mysqli = mysqli_connect("localhost","root","","perpus");

  $username  = strip_tags(mysqli_real_escape_string($mysqli,$_POST['user']));
  $userpass = strip_tags(mysqli_real_escape_string($mysqli,$_POST['pass']));
  
 $cekuser = mysqli_query($mysqli, "SELECT admin_id, username, password, nama FROM admin WHERE username = '$username'");



list($admin_id,$username, $password, $nama) = mysqli_fetch_array($cekuser);
 
        //jika data ditemukan dalam database, maka akan melakukan validasi dengan password_verify
        if (mysqli_num_rows($cekuser) > 0 ){
          if( password_verify($userpass, $password) ) {
 
            /*
            validasi login dengan password_verify
            $userpass -----> diambil dari password yang diinputkan user lewat form login
            $password -----> diambil dari password dalam database
            */
            
 
                //buat session baru
                session_start();

                setcookie('admin_id',$admin_id,time()+3600);
                setcookie('username',$username,time()+3600);
                setcookie('password',$password,time()+3600);
                setcookie('nama',$nama,time()+3600);
               
  
                //jika login berhasil, user akan diarahkan ke halaman admin
                echo "ok";
            } else {
                echo 'gagal';
            }
          }else{
            echo "gagal gan";
          }
        
    
 
?>
