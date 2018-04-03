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

$filename ="laporan Data Buku.(".date('d-m-Y').").xls";

header("content-disposition: attachment; filename='$filename'");
header("content-type: application/vdn.ms-exel");

?>

<h2>Laporan Data Buku</h2>
        <table id="lookup" class=" display responsive no-wrap table table-hover data-table table-striped tablesorter" width="100%" >
                        <thead  align="center">
                              <tr>
                                  <th class="text-center" style="border: 1px solid black;" >No</th>
                                  <th class="text-center" style="border: 1px solid black;" >Judul</th>
                                  <th class="text-center" style="border: 1px solid black;" >Pengarang</th>
                                 <th class="text-center" style="border: 1px solid black;" >Tahun Terbit </th>
                                  <th class="text-center" style="border: 1px solid black;" >Penerbit</th>
                                  <th class="text-center" style="border: 1px solid black;" >Jumlah</th>
                                 <th class="text-center" style="border: 1px solid black;" >Lokasi</th>
                                 
                                                               
                              </tr>
                        </thead>
                       <tbody >
                        <?php
                         $no=1;
                        foreach($db->ShowBuku() as $data){
                         
                          ?>
                         <tr align='center'>
		                    <td style='border: 1px solid black;'> <?= $no;?> </td>
		                     <td style='border: 1px solid black;'> <?= $data['judul']?> </td>
		                    <td style='border: 1px solid black;'> <?= $data['pengarang']?> </td>
		                     <td style='border: 1px solid black;'> <?= $data['tahun_terbit']?></td>
		                    <td style='border: 1px solid black;'><?= $data['penerbit'];?></td>
		                     <td style='border: 1px solid black;'><?= $data['jumlahbuku'];?></td>
		                      <td style='border: 1px solid black;'><?= $data['lokasi'];?></td>
			                    
			                  </tr>
			                  <?php $no++; }  ?>
			                       </tbody>
                    </table>