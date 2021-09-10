		<div class="container-fluid">



		  <!-- Page Heading -->

		  <br>

          <h1 class="h3 mb-2 text-gray-800">Edit Vote <i class="fas fa-vote-yea"></i></h1>

          <p class="mb-4">Cara gampang bikin vote!</p>



          <div class="row">

            <div class="col-lg-9">

              <?= $this->session->flashdata('message'); ?>

            </div>

          </div>



          <div class="row">

          	<div class="col-lg-9">

	          	<?=form_open_multipart('Vote/createvote');?>

				  <div class="form-group">

				    <label for="judul_vote">Judul vote</label>

				    <input type="text" class="form-control" name="judul_vote" id="judul_vote"  placeholder="Judul dari vote" required>

				  </div>

				  <div class="form-group">

				    <label for="deskripsi">Deskripsi</label>

				    <input type="text" class="form-control" name="deskripsi" id="deskripsi"  placeholder="Deskripsi singkat">

				  </div>

				  <div class="form-group">

				    <label for="kategori">Kategori</label>

				    <select class="form-control" name="kategori" id="kategori" required>

				      <option>Pilih Kategori</option>

				      <option value="Kaichou">Vote Kaichou</option>

				      <option value="Kazoku">Vote Kazoku</option>

				      <option value="Makrab">Vote Makrab</option>

				      <option value="Bukber">Vote Bukber</option>

				      <option value="Lain-lain">Lain-lain</option>

				    </select>

				  </div>

				  <div class="form-group">

				    <label for="jml_pilihan">Jumlah Pilihan</label>

				    <select class="form-control" name="jml_pilihan" id="jml_pilihan" required>

				      <option value="1">1</option>

				      <option value="2">2</option>

				      <option value="3" selected>3</option>

				      <option value="4">4</option>

				      <option value="5">5</option>

				      <option value="6">6</option>

				      <option value="7">7</option>

				    </select>

				  </div>

				  <div class="form-group row">

				  	<div class="col-lg-4">

				      <label for="pilihan">Pilihan 1</label>

				      <input type="text" class="form-control" name="pilihan1" id="pilihan1"  placeholder="Pilihan 1" required>

				    </div>

				    <div class="col-lg-5">

				      <label for="deskripsi">Deskripsi Pilihan 1</label>

				      <input type="text" class="form-control" name="deskripsi1" id="deskripsi1"  placeholder="Deskripsi Pilihan">

				    </div>

				  	<div class="col-lg-3">

				      <label for="pic">Foto Pilihan 1</label>

				      <div class="custom-file">

	                    <input type="file" class="custom-file-input" id="foto1" name="foto1">

	                    <label class="custom-file-label" for="avatar">Pilih File</label>

	                  </div>

				  	</div>

				  </div>

				  <div class="form-group row">

				  	<div class="col-lg-4">

				      <label for="pilihan">Pilihan 2</label>

				      <input type="text" class="form-control" name="pilihan2" id="pilihan2"  placeholder="Pilihan 2" required>

				    </div>

				    <div class="col-lg-5">

				      <label for="deskripsi">Deskripsi Pilihan 2</label>

				      <input type="text" class="form-control" name="deskripsi2" id="deskripsi2"  placeholder="Deskripsi Pilihan">

				    </div>

				  	<div class="col-lg-3">

				      <label for="pic">Foto Pilihan 2</label>

				      <div class="custom-file">

	                    <input type="file" class="custom-file-input" id="foto2" name="foto2">

	                    <label class="custom-file-label" for="avatar">Pilih File</label>

	                  </div>

				  	</div>

				  </div>

				  <div class="form-group row">

				  	<div class="col-lg-4">

				      <label for="pilihan">Pilihan 3</label>

				      <input type="text" class="form-control" name="pilihan3" id="pilihan3"  placeholder="Pilihan 3" required>

				    </div>

				    <div class="col-lg-5">

				      <label for="deskripsi">Deskripsi Pilihan 3</label>

				      <input type="text" class="form-control" name="deskripsi3" id="deskripsi3"  placeholder="Deskripsi Pilihan">

				    </div>

				  	<div class="col-lg-3">

				      <label for="pic">Foto Pilihan 3</label>

				      <div class="custom-file">

	                    <input type="file" class="custom-file-input" id="foto3" name="foto3">

	                    <label class="custom-file-label" for="avatar">Pilih File</label>

	                  </div>

				  	</div>

				  </div>

				  <div class="form-group row">

				  	<div class="col-lg-6">

					  <label for="tgl_mulai_vote">Tanggal Mulai Vote</label>

					  <input name="tgl_mulai_vote" class="form-control" id="tgl_mulai_vote" required>

					</div>

					<div class="col-lg-6">

					  <label for="tgl_selesai_vote">Tanggal Selesai Vote</label>

					  <input name="tgl_selesai_vote" class="form-control" id="tgl_selesai_vote">

					</div>

				  </div>

				  <button type="submit" class="btn btn-pink btn-block">Create</button>

				</form>

				<br><br>

	          </div>

	      </div>



		</div>