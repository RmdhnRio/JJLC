          

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Profil <?=$user['nickname'];?></h1>
          <p class="mb-4">Data mengenai kamu lho.. <?=$user['nickname'];?></p>

          <div class="row">
            <div class="col-lg-8">
              <?= $this->session->flashdata('message'); ?>
            </div>
          </div>

          <!-- DataTales Example -->
          <div class="row">
            <div class="col-12 col-lg-8">
              <div class="card shadow mb-3">
                <div class="row no-gutters">
                  <div class="col-12 col-md-6 col-lg-4">
                    <img src="<?php if($user['avatar'] != ''){ echo base_url('assets/img/avatar/').$user['avatar'];} else{echo base_url('assets/img/avatar/default.png');}?>" class="card-img profile-pic" alt="default" style="border-radius: calc(.35rem - 1px) 0 0 calc(.35rem - 1px);">
                  </div>
                  <div class="col-12 col-md-6 col-lg-8">
                    <div class="card-header py-3 bg-gradient-blue-pink" style="border-radius: 0 calc(.35rem - 1px) 0 0;">
                      <h5 class="m-0 font-weight-bold text-white">Tentang</h5>
                    </div>
                    <div class="card-body">
                      <?php foreach ($anggota as $field) : ?>
                      <h5 class="card-title"><?=$field['nickname'];?> </h5>
                      <p class="card-text"><small class="text-muted">ID : <?=$field['id'];?></small></p>
                      <p class="card-text"><i class="far fa-address-card"></i> <?=$field['nama_depan'];?> <?=$field['nama_belakang'];?></p>
                      <p class="card-text"><i class="fas fa-birthday-cake"></i> <?=$field['tgl_lahir'];?></p>
                      <p class="card-text"><i class="fas fa-phone-square"></i> <?=$field['no_hp'];?></p>
                      <p class="card-text"><a href="<?= base_url();?>Admin/editProfile/<?=$field['id'];?>" class="btn btn-outline-pink btn-lg">Edit Profil</a></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 col-lg-4">
              <div class="card shadow mb-3" style="max-width: 540px;">
                <div class="card-header py-3 bg-gradient-blue-pink">
                  <h6 class="m-0 font-weight-bold text-white">Tentang</h6>
                </div>
                <div class="row no-gutters">
                  <div class="col-12">
                    <div class="card-body">
                      <table class="table table-borderless">
                        <tbody>
                          <tr>
                            <td>Jenis Kelamin</td>
                            <td>:</td>
                            <td><?php if($field['gender'] != ''){echo $field['gender'];} else { echo "-";}?></td>
                          </tr>
                          <tr>
                            <td>Angkatan</td>
                            <td>:</td>
                            <td><?php if($field['angkatan'] != ''){echo $field['angkatan'];} else { echo "-";}?></td>
                          </tr>
                          <tr>
                            <td>Status</td>
                            <td>:</td>
                            <td><?php if($field['status'] != ''){echo $field['status'];} else { echo "-";}?></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-12 col-lg-8">
              <div class="card shadow mb-3">
                <div class="card-header py-3 bg-gradient-blue-pink">
                  <h5 class="m-0 font-weight-bold text-white text-right">Informasi Pribadi</h5>
                </div>
                <div class="row no-gutters">
                  <div class="col-12">
                    <div class="card-body">
                      <table class="table ">
                        <tbody>
                          <tr>
                            <td>Email</td>
                            <td>:</td>
                            <td><?php if($field['email'] != ''){echo $field['email'];} else { echo "-";}?></td>
                          </tr>
                          <tr>
                            <td>Fakultas</td>
                            <td>:</td>
                            <td><?php if($field['fakultas'] != ''){echo $field['fakultas'];} else { echo "-";}?></td>
                          </tr>
                          <tr>
                            <td>Prodi</td>
                            <td>:</td>
                            <td><?php if($field['prodi'] != ''){echo $field['prodi'];} else { echo "-";}?></td>
                          </tr>
                          <tr>
                            <td>Angkatan</td>
                            <td>:</td>
                            <td><?php if($field['angkatan'] != ''){echo $field['angkatan'];} else { echo "-";}?></td>
                          </tr>
                          <tr>
                            <td>Tanggal Lahir</td>
                            <td>:</td>
                            <td><?php if($field['tgl_lahir'] != ''){echo $field['tgl_lahir'];} else { echo "-";}?></td>
                          </tr>
                          <tr>
                            <td>Tempat Lahir</td>
                            <td>:</td>
                            <td><?php if($field['tempat_lahir'] != ''){echo $field['tempat_lahir'];} else { echo "-";}?></td>
                          </tr>
                          <tr>
                            <td>Divisi</td>
                            <td>:</td>
                            <td><?php if($field['divisi'] != ''){echo $field['divisi'];} else { echo "-";}?></td>
                          </tr>
                          <tr>
                            <td>Status Kemahasiswaan</td>
                            <td>:</td>
                            <td><?php if($field['role'] != ''){echo $field['role'];} else { echo "-";}?></td>
                          </tr>
                          <tr>
                            <td>Alamat</td>
                            <td>:</td>
                            <td><?php if($field['alamat'] != ''){echo $field['alamat'];} else { echo "-";}?></td>
                          </tr>
                          <tr>
                            <td>Alasan Masuk</td>
                            <td>:</td>
                            <td><?php if($field['alasan'] != ''){echo $field['alasan'];} else { echo "-";}?></td>
                          </tr>
                        </tbody>
                      </table>
                      <?php endforeach; ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>


        </div>
        <!-- /.container-fluid -->

      </div>