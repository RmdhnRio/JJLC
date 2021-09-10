          



        <!-- Begin Page Content -->

        <div class="container-fluid">

              <div class="row">

                <div class="col-lg-7">

                  <?= $this->session->flashdata('message'); ?>

                </div>

              </div>



          <!-- Page Heading -->

          <h1 class="h3 mb-2 text-gray-800">Daftar Anggota</h1>

          <p class="mb-4">Daftar anggota JJLC yang sudah terdaftar dan terverifikasi sebagai anggota JJLC</p>



          <!-- DataTales Example -->

          <div class="card shadow mb-4">

            <div class="card-header py-3">

              <h6 class="m-0 font-weight-bold text-primary">Daftar Anggota</h6>

            </div>

            <div class="card-body">

              <div class="table-responsive">

                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

                  <thead>

                    <tr>

                      <th>ID</th>

                      <th>Nama Depan</th>

                      <th>Nama Belakang</th>

                      <th>Nama Wibu</th>

                      <th>Gender</th>

                      <th>Angkatan</th>

                      <th>Tanggal Lahir</th>

                      <th>Nomor HP</th>

                      <!-- <th>Status</th> -->

                      <th>Action</th>

                    </tr>

                  </thead>

                  <tfoot>

                    <tr>

                      <th>ID</th>

                      <th>Nama Depan</th>

                      <th>Nama Belakang</th>

                      <th>Nama Wibu</th>

                      <th>Gender</th>

                      <th>Angkatan</th>

                      <th>Tanggal Lahir</th>

                      <th>Nomor HP</th>

                      <!-- <th>Status</th> -->

                      <th>Action</th>

                    </tr>

                  </tfoot>

                  <tbody>

                    <?php foreach ($anggota as $field) : ?>

                    <tr>

                      <td><?=$field['id'];?></td>

                      <td><?=$field['nama_depan'];?></td>

                      <td><?=$field['nama_belakang'];?></td>

                      <td><?=$field['nickname'];?></td>

                      <td><?=$field['gender'];?></td>

                      <td><?=$field['angkatan'];?></td>

                      <td><?=$field['tgl_lahir'];?></td>

                      <td><?=$field['no_hp'];?></td>

                      <!-- <td><?=$field['status'];?></td> -->

                      <td>

                        <div class="row">

                          <div class="col-sm-12">

                            <div class="btn-group">

                              <button class="btn btn-danger btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                                Pilihan

                              </button>

                              <div class="dropdown-menu">

                                <a class="dropdown-item" href="<?=base_url();?>Admin/detailanggota/<?=$field['id'];?>"><i class="fas fa-clipboard-list"></i> &nbsp;Detail Akun</a>

                                <?php if ($role['role'] == 'admin') { ?>

                                <a class="dropdown-item" href="<?=base_url();?>Admin/editAnggota/<?=$field['id'];?>"><i class="fas fa-edit"></i> Edit Akun</a>

                                <a class="dropdown-item deleteAnggota" href="#" data-toggle="modal" data-target="#deleteModal" data-id="<?=$field['id'];?>" data-nickname="<?=$field['nickname'];?>"><i class="fas fa-trash"></i> &nbsp;Hapus Akun</a>

                                <?php } ?>

                              </div>

                            </div>

                          </div>

                        </div>

                      </td>

                    </tr>

                  <?php endforeach; ?>

                  </tbody>

                </table>

              </div>

            </div>

          </div>



        </div>

        <!-- /.container-fluid -->



      </div>