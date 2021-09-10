<?php
get_header();


$pods = pods('event',get_the_ID());
$tanggalMulai = $pods->field('tanggal_mulai');
$tanggalSelesai = $pods->field('tanggal_selesai');
$jamMulai = $pods->field('jam_mulai');
$jamSelesai = $pods->field('jam_selesai');

$date_start = date_create($tanggalMulai);
$date_end = date_create($tanggalSelesai);

the_post(); 
?>


<section class="section-single-title">
    <div class="container">
        <div class="row">
            <div class="col-lg-12" >
                <h3 class="title-page"><?php the_title(); ?></h3>
                <div class="divider-lg divider-lg-left"></div>
            </div>
        </div>
    </div>
</section>

<section class="section-single">
	<div class="container">
		<div class="row">
			<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 post-thumbnail">
						<a href="#">
						    <img style="width: 200px; height: 200px;" src="<?php echo get_the_post_thumbnail_url() ;?>">
						</a>
						<!--<h5>Tanggal</h5>
						<p>
							<small><b><?php/* echo date_format($date_start,"d/m/Y"); ?> sampai <?php echo date_format($date_end,"d/m/Y"); ?></b></small>
						</p>
						<h5>Waktu</h5>
						<p>
							<small><b><?php echo $jamMulai; ?> - <?php echo $jamSelesai; */?></b></small>
						</p>-->
					</div>
					<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 post-info">
						<h4>Informasi Event</h4>
						<div class="divider-xs" style="width: 30px; height: 5px; background:#ffd52d; margin-bottom: 10px"></div>
						<div class="row">
					   		<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5  date-time">
						   		<h5 class="date-time">Date :
						   		<small class="date-time"><b><?php echo date_format($date_start,"d F Y"); ?> - <?php echo date_format($date_end,"d F Y"); ?></b></small>
						   		</h5>
					   		</div>
					   		<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 date-time">
								<h5 class="date-time">Time :
								<small class="date-time"><b><?php echo $jamMulai; ?> - <?php echo $jamSelesai; ?> WIB</b></small>
								</h5>
							</div>
						</div>
				   		<p><?php the_content(); ?></p>
							
					</div>
				</div>
			</div>
			<?php echo get_sidebar(); ?>
		</div>
	</div>
</section>





<?php 
get_footer();
?>

