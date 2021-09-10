<?php get_header(); 

$pods = pods('kelompok_angkatan',get_the_ID());
$deskripsi = $pods->field('deskripsi');
$ketua = $pods->field('ketua_kelompok');
$relawan = $pods->field('daftar_relawan');
$relawan_id = $relawan['ID'];
$resources = $pods->field('resources');
$sekolah = $pods->field('sekolah');
$sekolah_id = $sekolah['ID'];

$tahun_angkatan = wp_get_post_terms(get_the_ID(), 'tahun_angkatan');
$tahun_sekarang = date('Y');

$gallery = get_post_meta( $post->ID, 'galeri' );
$video = $pods->field('video');
$ebook = $pods->field('ebook');
$ebook_cover = $pods->field('ebook_cover');

$term_list = wp_get_post_terms(get_the_ID(), 'jenis_angkatan');
$jenis_angkatan = $term_list[0]->slug;

?>

<!--Keterangan sekolah-->
<?php
$alamat_s = get_post_meta($sekolah_id, 'alamat', true);
$jenis_s = get_post_meta($sekolah_id, 'jenis', true);
$maps_s = get_post_meta($sekolah_id, 'maps', true);
$email_s = get_post_meta($sekolah_id, 'email', true);
$contact_s = get_post_meta($sekolah_id, 'kontak', true);
$jabatan_s = get_post_meta($sekolah_id, 'jabatan', true);
?>

<section class="banner-kelompok" style=" background: url(<?php echo get_the_post_thumbnail_url();?>); background-size: contain;">
    <div class="banner-caption">
       <div class="container banner-caption">
          <h1><?php the_title(); ?></h1>
       </div>
          <div class="opacity-bar"><h4>Tahun Angkatan <?php echo $tahun_angkatan[0]->name; ?></h4></div>
</section>

<?php /*if ($tahun_angkatan[0]->name != $tahun_sekarang) : */
      if($jenis_angkatan == 'past') : ?>

<section class="section-single">
	<div class="container">
		<div class="row">
			<div class="col-lg-12" style="padding: none;">
				<h3>Galeri</h3>
					<div class="divider-xs" style="width: 30px; height: 5px; background:#ffd52d; margin-bottom: 10px; "></div>
				<div class="row">
					<?php         
					foreach ( $gallery as $gal ) { ?>
					<div class="col-lg-4 col-sm-6 gallery-list-past">
						<div class="thumbnail gallery">
						<?php     
							echo pods_image( $gal, 'original' );
						?>
						</div>
					</div>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="section-single">
	<div class="container">
		<div class="row">
			<?php if($video) : ?>
			<div class="col-lg-6 col-md-6 col-sm-12">
					<div class="video">
						<h3>Video</h3>
							<div class="divider-xs" style="width: 30px; height: 5px; background:#ffd52d; margin-bottom: 10px; "></div>
							<p><?php echo $video; ?></p>
					</div>
			</div>
			<?php endif; ?><!--Endif Video-->

			<?php if($ebook) : ?>
			<div class="col-lg-6 col-md-6 col-sm-12">
					<div class="ebook">
						<h3>Ebook</h3>
							<div class="divider-xs" style="width: 30px; height: 5px; background:#ffd52d; margin-bottom: 10px; "></div>
						<!-- Book 1 -->
						<div class="ebook">
					        <ul>
					          <li>
					            <figure class='book'>        
					              <!-- Front -->        
					              <ul class='hardcover_front'>
					                <li>
					                  <img src="<?php echo $ebook_cover['guid']; ?>" alt="" width="100%" height="100%">
					                  <span class="ribbon bestseller">KI</span>
					                </li>
					                <li></li>
					              </ul>        
					              <!-- Pages -->        
					              <ul class='page'>
					                <li></li>
					                <li>
					                  <a class="btn-book" href="<?php echo $ebook['guid']; ?>">Download</a>
					                </li>
					                <li></li>
					                <li></li>
					                <li></li>
					              </ul>        
					              <!-- Back -->        
					              <ul class='hardcover_back'>
					                <li></li>
					                <li></li>
					              </ul>
					              <ul class='book_spine'>
					                <li></li>
					                <li></li>
					              </ul>
					            </figure>
					          </li> 
					        </ul>
					    </div>
					</div>
				</div>
			<?php endif; ?><!--Endif Ebook-->
		</div>
	</div>
</section>

<?php endif; ?><!--Endif For Past type-->

<section class="section-single">
	<div class="container">
		<div class=row>
			<div class="col-lg-7 col-sm-12">
			<?php if($sekolah_id) : ?>
				<div class="sekolah_detail">
					<h3>Informasi Sekolah</h3><!-- Sekolah Section -->
					<div class="divider-xs" style="width: 30px; height: 5px; background:#ffd52d; margin-bottom: 10px"></div>
						<div class="panel panel-default panel_s">
						  <div class="panel-heading">Keterangan Sekolah</div>
							<table class="table table-hover">
								<tr>
									<td width="5%"><span class="glyphicon glyphicon-bullhorn" aria-hidden="true"></span></td>
									<td class="table-text" width="20%">Sekolah</td>
									<td>:</td>
									<td class="table-text" width="75%"><?php echo $sekolah['post_title'];?></td>
								</tr>
								<tr>
									<td width="5%"><span class="glyphicon glyphicon-home" aria-hidden="true"></span></td>
									<td class="table-text" width="20%">Alamat</td>
									<td>:</td>
									<td class="table-text" width="75%"><?php echo $alamat_s; ?></td>
								</tr>
								<tr>
									<td width="5%"><span class="glyphicon glyphicon-check" aria-hidden="true"></span></td>
									<td class="table-text" width="20%">Jenis Sekolah</td>
									<td>:</td>
									<td class="table-text" width="75%"><?php echo $jenis_s; ?></td>
								</tr>
								<tr>
									<td width="5%"><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span></td>
									<td class="table-text" width="20%">Maps</td>
									<td>:</td>
									<td class="table-text" width="75%"><a href="<?php echo $maps_s ?>">Link Maps</a></td>
								</tr>
								<tr>
									<td width="5%"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></td>
									<td class="table-text" width="20%">Email</td>
									<td>:</td>
									<td class="table-text" width="75%"><?php echo $email_s; ?></td>
								</tr>
								<tr>
									<td width="5%"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></td>
									<td width="20%">Kontak</td>
									<td>:</td>
									<td class="table-text" width="75%"><?php echo $kontak_s; ?>&nbsp;&nbsp; (<?php echo $jabatan_s ?>)</td>
								</tr>
							</table>
						</div>
				</div>
			<?php endif; ?>
			</div>
		</div>
	</div>
</section>


<section class="section-single">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-sm-12">
			<?php if ($relawan_id) : ?>
				<div class="relawan">
					<h3>Daftar Relawan</h3><!-- Daftar Relawan Section -->
					<div class="divider-xs" style="width: 30px; height: 5px; background:#ffd52d; margin-bottom: 10px"></div>
					<?php if($ketua) : ?>
						<p class="field_ketua"><span class="glyphicon glyphicon-grain" aria-hidden="true"></span> &nbsp;Ketua Kelompok : <?php echo $ketua ?></p>
					<?php endif; ?>
					<p><?php 
						$post = get_post($relawan_id);
							echo $post->post_content;  ?>
					</p>
				</div>
			<?php endif; ?>

			<br><br>

			<?php if($resources) : ?>
				<div class="resources">
					<h3>Resources<br>
					<small>Beberapa kebutuhan untuk kelompok</small></h3>
					<div class="divider-xs" style="width: 30px; height: 5px; background:#ffd52d; margin-bottom: 10px"></div>
					<p><?php echo $resources; ?></p>
				</div>
			<?php endif; ?>
			
			</div>
		</div>
	</div>
</section>


<?php /*if($tahun_angkatan[0]->name == $tahun_sekarang) : */
      if($jenis_angkatan == 'aktif') : 
 		if($gallery) { ?>

<section class="section-single-gallery">
	<div class="container">
		<div class="row">
			<div class="col-lg-12" style="padding: none;">
				<h3>Galeri</h3>
					<div class="divider-xs" style="width: 30px; height: 5px; background:#ffd52d; margin-bottom: 10px; "></div>
				<div class="row">
					<?php         
					foreach ( $gallery as $gal ) { ?>
					<div class="col-lg-4 col-sm-6 gallery-list">
						<div class="thumbnail gallery">
						<?php     
							echo pods_image( $gal, 'original' );
						?>
						</div>
					</div>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
</section>
<?php } ?>

<section class="section-single">
	<div class="container">
		<div class="row">
			<?php if($video) : ?>
			<div class="col-lg-6 col-md-6 col-sm-12">
					<div class="video">
						<h3>Video</h3>
							<div class="divider-xs" style="width: 30px; height: 5px; background:#ffd52d; margin-bottom: 10px; "></div>
							<p><?php echo $video; ?></p>
					</div>
			</div>
			<?php endif; ?><!--Endif Video-->

			<?php if($ebook) : ?>
			<div class="col-lg-6 col-md-6 col-sm-12">
					<div class="ebook">
						<h3>Ebook</h3>
							<div class="divider-xs" style="width: 30px; height: 5px; background:#ffd52d; margin-bottom: 10px; "></div>
						<!-- Book 1 -->
						<div class="ebook">
					        <ul>
					          <li>
					            <figure class='book'>        
					              <!-- Front -->        
					              <ul class='hardcover_front'>
					                <li>
					                  <img src="<?php echo $ebook_cover['guid']; ?>" alt="" width="100%" height="100%">
					                  <span class="ribbon bestseller">KI</span>
					                </li>
					                <li></li>
					              </ul>        
					              <!-- Pages -->        
					              <ul class='page'>
					                <li></li>
					                <li>
					                  <a class="btn-book" href="<?php echo $ebook['guid']; ?>">Download</a>
					                </li>
					                <li></li>
					                <li></li>
					                <li></li>
					              </ul>        
					              <!-- Back -->        
					              <ul class='hardcover_back'>
					                <li></li>
					                <li></li>
					              </ul>
					              <ul class='book_spine'>
					                <li></li>
					                <li></li>
					              </ul>
					            </figure>
					          </li> 
					        </ul>
					    </div>
					</div>
				</div>
			<?php endif; ?><!--Endif Ebook-->
		</div>
	</div>
</section>
<?php endif; ?><!--Endif For Current type-->


<?php get_footer(); ?>