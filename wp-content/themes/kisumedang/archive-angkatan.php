<?php 
 get_header();


$pods = pods('angkatan',get_the_ID());
$deskripsi = $pods->field('deskripsi');
$perpage = 8;
$paged = 1; 
?>

<section class="section-single-title">
    <div class="container">
        <div class="row">
            <div class="col-lg-12" >
                <h3 class="title-page">Angkatan</h3>
                <div class="divider-lg divider-lg-left"></div>
            </div>
        </div>
    </div>
</section>

<section class="section-single">
	<div class="container">
		<div class="row">
			<div class="col-lg-9 section-single-left">
				<div class="row">
					<?php
					$args = array( 'post_type' => 'angkatan', 'order' => 'ASC', 'posts_per_page' => $perpage, 'paged' => $paged );

					    $wp_query = new WP_Query($args);
					    while ( have_posts() ) : the_post();
					?>
				<div class="col-sm-6 col-md-3 angkatan-list" style="padding: 5px;">
				  	<!--<div class="box-angkatan">-->
				  	<div class="panel panel-default panel-angkatan">
				  		<div class="thumbnail angkatan-list">
				  		<?php if ( has_post_thumbnail() ) { ?>
				  		   <a href="<?php echo get_the_permalink(); ?>">
							<img src="<?php echo get_the_post_thumbnail_url() ;?>"></a>
					<?php } ?>
					    <div class="caption">
					    <a href="<?php echo get_the_permalink(); ?>">
					      <h3><?php the_title(); ?></h3></a>
					       <div class="divider-lg divider-lg-left"></div>
					      <p><?php echo $deskripsi ?></p>
					    </div>
				   	 	</div><!-- End of thumbnail-->
				   	 </div>
				  	<!--</div>-->
			  </div>
			  <?php endwhile; ?>
			</div>
			</div>
			<?php  echo get_sidebar(); ?>
		</div>
	</div>
</section>







<?php 
get_footer(); 
?>