  <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5 col-lg-9 mx-auto">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-10 mx-auto">
            <div class="p-5">
              <div class="text-center">
                <img src="<?=base_url();?>assets/img/logo.png" class="img-fluid col-4 col-sm-3  mx-auto">
                <h1 class="h4 text-gray-900 mb-4">Daftar untuk Menjadi Anggota</h1>
              </div>
              <form class="user" method="POST" action="<?=base_url();?>Auth/register">
                <div class="form-group">
                  <input type="text" name="username" value="<?= set_value('username');?>" class="form-control form-control-user" placeholder="Username" required>
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="password" name="password" class="form-control form-control-user" placeholder="Password">
                    <?= form_error('password', '<small class="text-danger pl-3>"', '</small>');?>
                  </div>
                  <div class="col-sm-6">
                    <input type="password" name="re_password" class="form-control form-control-user" placeholder="Ulangi Password">
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" name="nama_depan" value="<?= set_value('nama_depan');?>" class="form-control form-control-user" placeholder="Nama Depan" required>
                  </div>
                  <div class="col-sm-6">
                    <input type="text" name="nama_belakang" value="<?= set_value('nama_belakang');?>" class="form-control form-control-user" placeholder="Nama Belakang" required>
                  </div>
                </div>
                <div class="form-group">
                  <input type="email" name="email" value="<?= set_value('email');?>" class="form-control form-control-user" placeholder="Email Address" required>
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input name="tgl_lahir" value="<?= set_value('tgl_lahir');?>" class="form-control form-control-user" id="tgl_lahir" placeholder="Tanggal Lahir" required>
                  </div>
                  <div class="col-sm-6">
                    <input type="text" name="tempat_lahir" value="<?= set_value('tempat_lahir');?>" class="form-control form-control-user" placeholder="Tempat Lahir" required>
                  </div>
                </div>
                <div class="form-group">
                  <input type="text" name="nickname" value="<?= set_value('nickname');?>" class="form-control form-control-user" placeholder="Nickname atau Nama Wibu">
                </div>
                <div class="form-group">
                  <small>Jenis Kelamin</small>
                  <select class="form-control" value="<?= set_value('gender');?>" name="gender" required>
                    <option value="laki-laki">Laki - Laki</option>
                    <option value="perempuan">Perempuan</option>
                  </select>
                </div>
                <div class="form-group">
                  <small>Fakultas</small>
                  <select class="form-control" value="<?= set_value('fakultas');?>" name="fakultas" required>
                    <option value="Fakultas Teknik">Fakultas Teknik</option>
                    <option value="Fakultas Bahasa dan Seni">Fakultas Bahasa dan Seni</option>
                    <option value="Fakultas Ekonomi">Fakultas Ekonomi</option>
                    <option value="Fakultas Ilmu Pendidikan">Fakultas Ilmu Pendidikan</option>
                    <option value="Fakultas Ilmu Sosial">Fakultas Ilmu Sosial</option>
                    <option value="Fakultas Matematika dan IPA">Fakultas Matematika dan IPA</option>
                    <option value="Fakultas Ilmu Olahraga">Fakultas Ilmu Olahraga</option>
                    <option value="Pascasarjana">Pascasarjana</option>
                  </select>
                </div>
                <div class="form-group">
                  <input type="text" name="prodi" value="<?= set_value('prodi');?>" class="form-control form-control-user" placeholder="Program Pendidikan">
                </div>
                <div class="form-group">
                  <input type="number" name="angkatan" value="<?= set_value('angkatan');?>" class="form-control form-control-user" placeholder="Tahun Angkatan" required>
                </div>
                <div class="form-group">
                  <input type="text" name="no_hp" value="<?= set_value('no_hp');?>" class="form-control form-control-user" placeholder="Nomor Handphone" required>
                  <small>Contoh : 0821XXXXX</small>
                </div>
                <div class="form-group">
                  <small>Pilih Divisi</small>
                  <select class="form-control" name="divisi" value="<?= set_value('divisi');?>" required>
                    <option value="Budaya">Budaya</option>
                    <option value="Animanga">Animanga</option>
                    <option value="Cosplay">Cosplay</option>
                    <option value="Games">Games</option>
                  </select>
                </div>
                <div class="form-group">
                  <small>Status Kemahasiswaan</small>
                  <select class="form-control" name="role" value="<?= set_value('role');?>">
                    <option value="Mahasiswa">Mahasiswa</option>
                    <option value="Alumni">Alumni</option>
                  </select>
                </div>
                <div class="form-group">
                  <textarea name="alamat" value="<?= set_value('alamat');?>" class="form-control" placeholder="Alamat rumah" required></textarea>
                </div>
                  <div class="form-group">
                  <textarea name="alasan" value="<?= set_value('alasan');?>" class="form-control" placeholder="Alasan Mendaftar"></textarea>
                </div>
                <div class="form-group">
                  <label>Syarat &amp; Ketentuan <span class="text-danger">*</span></label>
                  <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="customControlAutosizing" required>
                    <label class="custom-control-label" for="customControlAutosizing">Saya Setuju dengan <a href="#" data-toggle="modal" data-target="#syaratModal">Syarat</a> dan Ketentuan</label>
                  </div>                 
                </div>
                <button type="submit" class="btn btn-primary btn-user btn-block">
                  Daftar Sekarang
                </button>
              </form>
              <hr>
              <div class="text-center">
                <a class="small" href="<?=base_url();?>Auth/">Sudah Memiliki Akun? Login Disini!</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>