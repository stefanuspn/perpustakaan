<style>
        .tabel {
            border-collapse:collapse;
        }
        .tabel th{
            padding: 8px 5px;
            background-color:#cccccc;
        }
        .tabel td{
            padding: 8px 5px;
            
        }
   </style>

<?php
if(!file_exists("../model/mf_db.php")){
    header("Location:./welcome.html");
}else{
    require_once '../config/config.php';
    
}

$filename ="laporan Data Anggota.(".date('d-m-Y').").xls";

header("content-disposition: attachment; filename='$filename'");
header("content-type: application/vdn.ms-exel");

?>

<h2>Laporan Data Anggota</h2>
        <table id="lookup" class=" display responsive no-wrap table table-hover data-table table-striped tablesorter" width="100%" >
                        <thead  align="center">
                              <tr>
                                 <th class="text-center" style="border: 1px solid black;" >No</th>
                                  <th class="text-center" style="border: 1px solid black;" >Id Anggota</th>
                                  <th class="text-center" style="border: 1px solid black;" >Nama</th>
                                 <th class="text-center" style="border: 1px solid black;" >Jenis Kelamin </th>
                                  <th class="text-center" style="border: 1px solid black;" >Tempat,Tanggal Lahir</th>
                                  <th class="text-center" style="border: 1px solid black;" >Alamat</th>
                                 <th class="text-center" style="border: 1px solid black;" >No Hp</th>
                                 <th class="text-center" style="border: 1px solid black;" >Waktu Daftar</th>                              
                              </tr>
                        </thead>
                       <tbody >
                        <?php
                        $no=1;
                        foreach($db->ShowAnggota() as $data){
                         
                          ?>
                         <tr align='center'>
    		                    <td style='border: 1px solid black;'> <?= $no;?> </td>
    		                     <td style='border: 1px solid black;'> <?= $data['id_anggota']?> </td>
    		                    <td style='border: 1px solid black;'> <?= $data['nama']?> </td>
    		                     <td style='border: 1px solid black;'> <?= $data['jk']?></td>
    		                    <td style='border: 1px solid black;'><?= $data['tempatlahir'];?>, <?= 
                              date('d F Y',strtotime($data['tanggal_lahir']));
                               ?></td>
    		                     <td style='border: 1px solid black;'><?= $data['alamat'];?></td>
    		                      <td style='border: 1px solid black;'><?= $data['nohp'];?></td>
			                         <td style='border: 1px solid black;'><?= $data['date_register'];?></td>
			                  </tr>
			                  <?php $no++; }  ?>
			                       </tbody>
                    </table>