<?php 
get_header(); 

$pods = pods('sekolah',get_the_ID());
$deskripsi = $pods->field('deskripsi');
$alamat = $pods->field('alamat');
$jenis = $pods->field('jenis_sekolah');
$maps = $pods->field('maps');
$email = $pods->field('email');
$kontak = $pods->field('contact');
$jabatan = $pods->field('jabatan');


the_post(); 
?>

<section class="banner-sekolah" style=" background: url(<?php echo get_the_post_thumbnail_url();?>); background-size: cover;">
    <div class="banner-caption">
       <div class="container banner-caption">
          <h1><?php the_title(); ?></h1>
       </div>
       	<?php if($deskripsi) : ?>
          <div class="opacity-bar"><?php echo $deskripsi ?></div>
      <?php endif;?>
</section>

<section class="section-single">
	<div class="container">
		<div class="row">
			<div class="col-lg-9 col-sm-12 sekolah">
				<div class="row">
					<div class="col-lg-12">
						<!--<div class="box-sekolah">-->
						<div class="panel panel-warning">
							<div class="panel-heading">Informasi</div>
							<table class="table table-hover">
								<tr>
									<td width="5%"><span class="glyphicon glyphicon-home" aria-hidden="true"></span></td>
									<td class="table-text" width="15%">Alamat</td>
									<td class="table-text" width="80%"><?php echo $alamat; ?></td>
								</tr>
								<tr>
									<td width="5%"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></td>
									<td class="table-text" width="15%">Jenis Sekolah</td>
									<td class="table-text" width="80%"><?php echo $jenis; ?></td>
								</tr>
								<tr>
									<td width="5%"><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span></td>
									<td class="table-text" width="15%">Maps</td>
									<td class="table-text" width="80%"><a href="<?php echo $maps ?>">Link Maps</a></td>
								</tr>
								<tr>
									<td width="5%"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></td>
									<td class="table-text" width="15%">Email</td>
									<td class="table-text" width="80%"><?php echo $email; ?></td>
								</tr>
								<tr>
									<td width="5%"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></td>
									<td width="15%">Kontak</td>
									<td class="table-text" width="80%"><?php echo $kontak; ?>&nbsp;&nbsp; (<?php echo $jabatan ?>)</td>
								</tr>
							</table>
						</div>
						<!--</div>-->
					</div>
					<?php if($galeri) : ?>
					<div class="col-lg-12">
						<!--<div class="box-sekolah">-->
							<h3>Galeri</h3>
								<div class="divider-xs" style="width: 30px; height: 5px; background:#ffd52d; margin-bottom: 10px; "></div>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
							consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
							cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
							proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
						<!--</div>-->
					</div>
				<?php endif; ?>
				</div>
			</div>
			<?php get_sidebar(); ?>
		</div>
	</div>
</section>


<?php get_footer(); ?>