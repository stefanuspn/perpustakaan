 <table id="lookup" class=" display responsive no-wrap table table-hover data-table table-striped tablesorter" width="100%" >
                        <thead  align="center">
                              <tr>
                                  <th class="text-center" style="border: 1px solid black;" >No</th>
                                  <th class="text-center" style="border: 1px solid black;" >Foto</th>
                                  <th class="text-center" style="border: 1px solid black;" >Judul</th>
                                  <th class="text-center" style="border: 1px solid black;" >Pengarang</th>
                                 <th class="text-center" style="border: 1px solid black;" >Tahun Terbit </th>
                                  <th class="text-center" style="border: 1px solid black;" >Penerbit</th>
                                  <th class="text-center" style="border: 1px solid black;" >Jumlah</th>
                                 <th class="text-center" style="border: 1px solid black;" >Lokasi</th>
                                 <th class="text-center" style="border: 1px solid black;">Aksi</th>
                                                               
                              </tr>
                        </thead>
                       <tbody >
                        <?php
                         $no=1;
                        foreach($db->ShowBuku() as $data){
                         
                          ?>
                         <tr align='center'>
		                    <td style='border: 1px solid black;'> <?= $no;?> </td>
		                     <td style='border: 1px solid black;'><img src="<?php echo __URL_IMAGES__;?><?= $data['fotobuku'];?>" class="img-circle" alt="User Image" style="width: 100px; height: 100px;"></td>
		                     <td style='border: 1px solid black;'> <?= $data['judul']?> </td>
		                    <td style='border: 1px solid black;'> <?= $data['pengarang']?> </td>
		                     <td style='border: 1px solid black;'> <?= $data['tahun_terbit']?></td>
		                    <td style='border: 1px solid black;'><?= $data['penerbit'];?></td>
		                     <td style='border: 1px solid black;'><?= $data['jumlahbuku'];?></td>
		                      <td style='border: 1px solid black;'><?= $data['lokasi'];?></td>
			                    <td style='border: 1px solid black;'>
			                         <a href='#' data-toggle="modal" data-placement='top' title='Ubah' style='margin-right:5px' class='btn btn-success btn-sm open_modal_excel'  onclick="form_edit(<?=$data['id_buku'];?>)">
			                              <i class='glyphicon glyphicon-edit'></i>
			                            </a>
			                    <a href='#' data-toggle="modal" data-placement='top' title='Ubah' style='margin-right:5px' class='btn btn-success btn-sm open_modal_pdf'  onclick="delete_data(<?=$data['id_buku'];?>)">
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