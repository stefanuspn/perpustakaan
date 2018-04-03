 <table id="lookup" class=" display responsive no-wrap table table-hover data-table table-striped tablesorter" width="100%" >
                        <thead  align="center">
                              <tr>
                                  <th class="text-center" style="border: 1px solid black;" >No</th>
                                  <th class="text-center" style="border: 1px solid black;" >Foto</th>
                                  <th class="text-center" style="border: 1px solid black;" >Id Anggota</th>
                                  <th class="text-center" style="border: 1px solid black;" >Nama</th>
                                 <th class="text-center" style="border: 1px solid black;" >Jenis Kelamin </th>
                                  <th class="text-center" style="border: 1px solid black;" >Tempat Lahir</th>
                                  <th class="text-center" style="border: 1px solid black;" >Alamat</th>
                                
                                 <th class="text-center" style="border: 1px solid black;">Aksi</th>
                                                               
                              </tr>
                        </thead>
                       <tbody >
                        <?php
                         $no=1;
                        foreach($db->ShowAnggota() as $data){
                         
                          ?>
                         <tr align='center'>
		                    <td style='border: 1px solid black;'> <?= $no;?> </td>
		                     <td style='border: 1px solid black;'><img src="<?php echo __URL_IMAGES__;?><?= $data['foto_user'];?>" class="img-circle" alt="User Image" style="width: 100px; height: 100px;"></td>
		                     <td style='border: 1px solid black;'> <?= $data['id_anggota']?> </td>
		                    <td style='border: 1px solid black;'><a href='#' data-toggle="modal" data-placement='top' title='Ubah' style='margin-right:5px' class='open_modal'  id="<?=$data['uid'];?>">
                                    <?= $data['nama']?>
                                  </a>  </td>
		                     <td style='border: 1px solid black;'> <?= $data['jk']?></td>
		                    <td style='border: 1px solid black;'><?= $data['tempatlahir'];?>, <?= 
                              date('d F Y',strtotime($data['tanggal_lahir']));
                               ?></td>
		                     <td style='border: 1px solid black;'><?= $data['alamat'];?></td>
			                    <td style='border: 1px solid black;'>
			                         <a href='#' data-toggle="modal" data-placement='top' title='Ubah' style='margin-right:5px' class='btn btn-success btn-sm' data-target="#ModalEditAnggota" onclick="form_edit(<?=$data['uid'];?>)">
			                              <i class='glyphicon glyphicon-edit'></i>
			                            </a>
			                    <a href='#' data-toggle="modal" data-placement='top' title='Ubah' style='margin-right:5px' class='btn btn-success btn-sm'  onclick="delete_data(<?=$data['uid'];?>)">
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