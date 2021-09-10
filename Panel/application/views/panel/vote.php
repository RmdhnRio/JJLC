		

	<!-- Begin Page Content -->
    <div class="container-fluid">
      <!-- Outer Row -->
      <div class="row justify-content-center">

        <div class="col-12">
	        <div class="container">
	           <div class="row">
	           	<div class="col-12">
	           		<br>
	           	  <h1 class="text-center text-white"><?= $vote[0]['judul_vote'];?><br><small><?= $vote[0]['deskripsi'];?></small></h1>
	           	  <!-- <div class="divider-left mx-lg-12 hide-on-small"></div> -->
	           	  <br>
	           	</div>
	           	<?php foreach ($vote as $choice): ?>
	           		
	          	 <div class="<?php if($choice['jml_vote'] != '2'){ echo "col-lg-4 col-md-4"; } else { echo "col-lg-6 col-md-6"; }?> col-sm-12">
	          		<div class="card border-0 shadow-sm choices-card">
					  <img src="<?php if($choice['foto'] != ''){ echo base_url('assets/img/votes/').$choice['foto'];} else { echo base_url('assets/img/avatar/default.png');}?>" class="card-img-top" alt="...">
					  <div class="card-body">
					    <h4 class="card-title"><?=$choice['nama_pilihan'];?></h4>
					    <div class="divider-left"></div><br>
					    <h5>Caption : <small class="card-text"><?=$choice['quote'];?></small></h5>
					    
					    <a class="btn btn-pink btn-block shadow-sm my-2" href="#">Pilih</a>
					  </div>
					</div>
	          	 </div>
	             <?php endforeach ?>
	           </div>
	           <a href="<?=base_url();?>Vote"><- Kembali ke halaman sebelumnya</a>
	        </div>

        </div>
      </div>
   </div>