 <?php
  
function terlambat($tgl_dateline, $tgl_kembali) {

$tgl_dateline_pcs = explode ("-", $tgl_dateline);
$tgl_dateline_pcs = $tgl_dateline_pcs[2]."-".$tgl_dateline_pcs[1]."-".$tgl_dateline_pcs[0];

$tgl_kembali_pcs = explode ("-", $tgl_kembali);
$tgl_kembali_pcs = $tgl_kembali_pcs[2]."-".$tgl_kembali_pcs[1]."-".$tgl_kembali_pcs[0];

$selisih = strtotime ($tgl_kembali_pcs) - strtotime ($tgl_dateline_pcs);

$selisih = $selisih / 86400;

if ($selisih>=1) {
  $hasil_tgl = floor($selisih);
}
else {
  $hasil_tgl = 0;
}
return $hasil_tgl;
}
$denda1=500;
 ?>

 <table id="lookup" class=" display responsive no-wrap table table-hover data-table table-striped tablesorter" width="100%" >
                        <thead  align="center">
                              <tr>
                                  <th class="text-center" style="border: 1px solid black;" >No</th>
                                  <th class="text-center" style="border: 1px solid black;" >No Transaksi</th>
                                  <th class="text-center" style="border: 1px solid black;" >Nama</th>
                                  <th class="text-center" style="border: 1px solid black;" >Judul Buku</th>
                                 <th class="text-center" style="border: 1px solid black;" >Jumlah Pinjam </th>
                                  <th class="text-center" style="border: 1px solid black;" >Tanggal Pinjam</th>
                                  <th class="text-center" style="border: 1px solid black;" >Tanggal Kembali</th>
                                     <th class="text-center" style="border: 1px solid black;" >Terlambat</th>
                                   <th class="text-center" style="border: 1px solid black;" >Status</th>
                                 <th class="text-center" style="border: 1px solid black;">Aksi</th>
                                                               
                              </tr>
                        </thead>
                       <tbody >
                        <?php
                         $no=1;
                        foreach($db->ShowTransaksi() as $data){
                          $tgl_pinjam = $data['tgl_pinjam'];
                         
                          ?>
                         <tr align='center'>
		                    <td style='border: 1px solid black;'> <?= $no;?> </td>
		                     <td style='border: 1px solid black;'><?= $data['NoTrans'];?></td>
		                     <td style='border: 1px solid black;'> <?= $data['nama']?> </td>
		                    <td style='border: 1px solid black;'><a href='#' data-toggle="modal" data-placement='top' title='Ubah' style='margin-right:5px' class='open_modal'  id="<?=$data['id_transaksi'];?>">
                                    <?= $data['judulbuku']?>
                                  </a>  </td>
		                     <td style='border: 1px solid black;'> <?= $data['jumlah_pinjam']?></td>
		                    <td style='border: 1px solid black;'><?= $data['tgl_pinjam'];?></td>
		                     <td style='border: 1px solid black;'><?= $data['tgl_kembali'];?></td>
                          <td style='border: 1px solid black;'>
                            <?php
                                $tgl_dateline=$data['tgl_kembali'];
                                $tgl_kembali=date('d-m-Y');
                                $lambat=terlambat($tgl_dateline, $tgl_kembali);
                                $denda=$lambat*$denda1;
                                if ($lambat>0) {
                                  echo "<font color='red'>$lambat hari<br>(Rp $denda)</font>";
                                }
                                else {
                                  echo $lambat." hari";
                                }
                          ?></td>
                         <td style='border: 1px solid black;'><?= $data['status'];?></td>
			                    <td style='border: 1px solid black;'>
			                         <a href='transaksiajax?action=kembali&id_transaksi=<?php echo $data['id_transaksi']; ?>&judul=<?php echo $data['judulbuku']; ?>' data-toggle="modal" data-placement='top' title='Kembalikan' style='margin-right:5px' class='btn btn-success btn-sm'>
			                              <i class='fa fa-minus'></i>
			                            </a>

                                  <a href='transaksiajax?action=perpanjang&id_transaksi=<?php echo $data['id_transaksi']; ?>&judul=<?php echo $data['judulbuku']; ?>&lambat=<?php echo $lambat;?>' data-toggle="modal" data-placement='top' title='perpanjang' style='margin-right:5px' class='btn btn-success btn-sm'>
                                    <i class='fa fa-plus'></i>
                                  </a>

                          <a href='transaksiajax?action=delete&id_transaksi=<?php echo $data['id_transaksi']; ?>&jumlah_pinjam=<?php echo $data['jumlah_pinjam']; ?>&judulbuku=<?php echo $data['judulbuku'];?>' data-toggle="modal" data-placement='top' title='Ubah' style='margin-right:5px' class='btn btn-success btn-sm'">
                                    <i class='fa fa-trash-o'></i>
                                  </a>
                        
			                     </td>
			                  </tr>
			                  <?php $no++; }  ?>
			                       </tbody>
                    </table>
                    <script type="text/javascript">
   $("#lookup").dataTable();
 </script>