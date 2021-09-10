  <?php 
  /* Variabel untuk option value */

  $anggota    = $anggota[0];
  $gender     = $anggota['gender'];
  $fakultas   = $anggota['fakultas'];
  $divisi     = $anggota['divisi'];
  $status     = $anggota['role'];
  ?>
  <div class="container-fluid">

    <h1 class="h3 mb-4 text-gray-800">Edit Anggota</h1>

    <div class="row">
      <div class="col-lg-7">
        <?= $this->session->flashdata('message'); ?>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-7">

        <?=form_open_multipart('Admin/updateProfile');?>
          <div class="form-group row">
            <label for="nama_depan" class="col-sm-3 col-form-label">Nama</label>
            <div class="col-sm-4">
              <input type="hidden" name="id" value="<?=$anggota['id'];?>" class="form-control" placeholder="Id">
              <input type="text" name="nama_depan" value="<?=$anggota['nama_depan'];?>" class="form-control" placeholder="Nama Depan" required>
            </div>
            <div class="col-sm-5">
              <input type="text" name="nama_belakang" value="<?=$anggota['nama_belakang'];?>" class="form-control" placeholder="Nama Belakang" required>
            </div>
          </div>
          <div class="form-group row">
            <label for="avatar" class="col-sm-3 col-form-label">Profile Picture</label>
            <div class="col-sm-9">
              <div class="row">
                <div class="col-sm-3">
                  <img src="<?php if($anggota['avatar'] != ''){ echo base_url('assets/img/avatar/').$anggota['avatar'];} else { echo base_url('assets/img/avatar/default.png');}?>" class="img-thumbnail">
                  <input type="hidden" name="old_avatar" value="<?=$anggota['avatar'];?>" class="form-control">
                </div>
                <div class="col-sm-9">
                  <div class="custom-file">
                    <input type="file" class="custom-file-input" id="avatar" name="avatar">
                    <label class="custom-file-label" for="avatar">Pilih File</label>
                    <small class="text-warning"> ( ! ) Format avatar yang diperbolehkan yaitu jpg/png/gif serta ukuran gambar tidak boleh lebih dari 1MB!</small>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="form-group row">
            <label for="email" class="col-sm-3 col-form-label">Email</label>
            <div class="col-sm-9">
              <input type="email" name="email" value="<?=$anggota['email'];?>" class="form-control" placeholder="Email Address" required>
            </div>
          </div>
          <div class="form-group row">
            <label for="tgl_lahir" class="col-sm-3 col-form-label">Tempat Tanggal Lahir</label>
            <div class="col-sm-4">
              <input name="tgl_lahir" value="<?=$anggota['tgl_lahir'];?>" class="form-control" id="tgl_lahir" placeholder="Tanggal Lahir" required>
            </div>
            <div class="col-sm-5">
              <input type="text" name="tempat_lahir" value="<?=$anggota['tempat_lahir'];?>" class="form-control" placeholder="Tempat Lahir" required>
            </div>
          </div>
          <div class="form-group row">
            <label for="nickname" class="col-sm-3 col-form-label">Nickname</label>
            <div class="col-sm-9">
              <input type="text" name="nickname" value="<?=$anggota['nickname'];?>" class="form-control" placeholder="Nickname atau Nama Wibu">
            </div>
          </div>
          <div class="form-group row">
            <label for="gender" class="col-sm-3 col-form-label">Jenis Kelamin</label>
            <div class="col-sm-9">
              <select class="form-control" value="<?=$anggota['gender'];?>" name="gender" required>
                <option value="laki-laki">Laki - Laki</option>
                <option value="perempuan">Perempuan</option>
              </select>
            </div>
          </div>
          <div class="form-group row">
            <label for="fakultas" class="col-sm-3 col-form-label">Jenis Kelamin</label>
            <div class="col-sm-9">
              <select class="form-control" value="<?=$anggota['fakultas'];?>" name="fakultas" required>
                <option>Pilih Fakultas</option>
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
          </div>
          <div class="form-group row">
            <label for="prodi" class="col-sm-3 col-form-label">Prodi</label>
            <div class="col-sm-9">
              <input type="text" name="prodi" value="<?=$anggota['prodi'];?>" class="form-control" placeholder="Program Pendidikan">
            </div>
          </div>
          <div class="form-group row">
            <label for="angkatan" class="col-sm-3 col-form-label">Angkatan</label>
            <div class="col-sm-9">
              <input type="number" name="angkatan" value="<?=$anggota['angkatan'];?>" class="form-control" placeholder="Tahun Angkatan" required>
            </div>
          </div>
          <div class="form-group row">
            <label for="no_hp" class="col-sm-3 col-form-label">Nomor Handphone</label>
            <div class="col-sm-9">
              <input type="text" name="no_hp" value="<?=$anggota['no_hp'];?>" class="form-control" placeholder="Nomor Handphone" required>
              <small>Contoh : 0821XXXXX</small>
            </div>
          </div>
          <div class="form-group row">
            <label for="divisi" class="col-sm-3 col-form-label">Divisi</label>
            <div class="col-sm-9">
              <select class="form-control" name="divisi" value="<?=$anggota['divisi'];?>" required>
                <option value="Budaya">Budaya</option>
                <option value="Animanga">Animanga</option>
                <option value="Cosplay">Cosplay</option>
                <option value="Games">Games</option>
              </select>
            </div>
          </div>
          <div class="form-group row">
            <label for="role" class="col-sm-3 col-form-label">Status Kemahasiswaan</label>
            <div class="col-sm-9">
              <select class="form-control" name="role" value="<?=$anggota['role'];?>">
                <option value="Mahasiswa">Mahasiswa</option>
                <option value="Alumni">Alumni</option>
              </select>
            </div>
          </div>
          <div class="form-group row">
            <label for="alamat" class="col-sm-3 col-form-label">Alamat</label>
            <div class="col-sm-9">
              <textarea name="alamat" class="form-control" placeholder="Alamat rumah" required><?=$anggota['alamat'];?></textarea>
            </div>
          </div>
          <div class="form-group row">
            <label for="alasan" class="col-sm-3 col-form-label">Alasan</label>
            <div class="col-sm-9">
              <textarea name="alasan" class="form-control" placeholder="Alasan Mendaftar"><?=$anggota['alasan'];?></textarea>
            </div>
          </div>
          <button type="submit" class="btn btn-primary btn-user btn-block">
            Update
          </button>
        </form>
        <hr>
        <div class="text-center">
          <a class="small" href="<?=base_url();?>Admin">Kembali ke halaman Admin</a>
        </div>
        <br>
      </div>
    </div>
  </div>