<div class="row">
              <div class="col-md-6">

                  <table class="table table-striped table-hover ">
                      <tbody>
                        <?php
                        
                        foreach($db->AdminSession($username) as $data){
                         ?>
                          <tr>
                              <th>Nama Lengkap</th>
                              <th>:</th>
                              <td><?= $data['nama']?></td>
                          </tr>
                          <tr>
                              <th>Username</th>
                              <th>:</th>
                              <td><?= $data['username'];?></td>
                          </tr>
                          <tr>
                              <th>Email</th>
                              <th>:</th>
                              <td><?= $data['email'];?></td>
                          </tr>
                          <tr>
                              <th>No. HP</th>
                              <th>:</th>
                              <td><?= $data['nohp'];?></td>
                          </tr>
                          <tr>
                              <th>Waktu Daftar</th>
                              <th>:</th>
                              <td>
                              <?= 
                              date('d F Y',strtotime($data['date_register']));
                               ?></td>
                          </tr>
                          
                      </tbody>
                  </table>
                   <br>
                   <a href='#' data-toggle="modal" data-placement='top' title='Ubah' style='margin-right:5px' class='btn btn-success btn-sm open_modal' data-target="#ModalEdit" >
        <i class='glyphicon glyphicon-edit'></i>
      </a>
              </div>
               
              <div class="col-md-6">
                   <table class="table table-striped table-hover ">
                      <tbody>
                          <tr>
                              <td><img src="<?php echo __URL_IMAGES__;?><?= $data['foto_admin'];?>" class="img-circle" alt="User Image" style="width: 300px; height: 150px;"></td>
                          </tr>
                          <?php };?>
                      </tbody>
                  </table>
               </div>