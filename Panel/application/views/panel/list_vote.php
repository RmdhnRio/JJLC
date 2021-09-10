          



        <!-- Begin Page Content -->

        <div class="container-fluid">



          <!-- Page Heading -->

          <h1 class="h3 mb-2 text-gray-800">List Vote dan Polling</h1>

          <p class="mb-4">Daftar Vote dan Polling yang sudah dibuat</p>



          <!-- DataTales Example -->

          <div class="card shadow mb-4">

            <div class="card-header py-3">

              <h6 class="m-0 font-weight-bold text-primary">List Vote</h6>

            </div>

            <div class="card-body">

              <div class="table-responsive">

                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

                  <thead>

                    <tr>

                      <th>ID</th>

                      <th>Judul Vote</th>

                      <th>Deskripsi</th>

                      <th>Kategori</th>

                      <th>Jumlah Pilihan</th>

                      <th>Tanggal Mulai</th>

                      <th>Tanggal Selesai</th>

                      <th>Action</th>

                    </tr>

                  </thead>

                  <tfoot>

                    <tr>

                      <th>ID</th>

                      <th>Judul Vote</th>

                      <th>Deskripsi</th>

                      <th>Kategori</th>

                      <th>Jumlah Pilihan</th>

                      <th>Tanggal Mulai</th>

                      <th>Tanggal Selesai</th>

                      <th>Action</th>

                    </tr>

                  </tfoot>

                  <tbody>

                    <?php foreach ($vote as $field) : ?>

                    <tr>

                      <td><?=$field['id'];?></td>

                      <td><?=$field['judul_vote'];?></td>

                      <td><?=$field['deskripsi'];?></td>

                      <td><?=$field['kategori'];?></td>

                      <td><?=$field['jml_pilihan'];?></td>

                      <td><?=$field['tgl_mulai_vote'];?></td>

                      <td><?=$field['tgl_selesai_vote'];?></td>

                      <td>

                        <div class="row">

                          <div class="col-sm-12">

                            <div class="btn-group">

                              <button class="btn btn-danger btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                                Pilihan

                              </button>

                              <div class="dropdown-menu">

                                <a class="dropdown-item" href="<?=base_url();?>Vote/Voting/<?=$field['id'];?>"><i class="fas fa-clipboard-list"></i> &nbsp;Lihat Vote</a>

                                <?php if ($role['role'] == 'admin') { ?>

                                <a class="dropdown-item" href="<?=base_url();?>Vote/editVote/<?=$field['id'];?>"><i class="fas fa-edit"></i> Edit Vote</a>

                                <a class="dropdown-item" href="#"><i class="fas fa-trash"></i> &nbsp;Hapus Vote</a>

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