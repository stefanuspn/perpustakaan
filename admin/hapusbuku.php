<?php
require_once '../config/config.php';
?>


<?php

if(isset($_GET['id_buku'])) {

if($db->DeleteBuku($_GET['id_buku'])) {
 header("Location:buku");
}
else {
  echo "gagal";
}
}