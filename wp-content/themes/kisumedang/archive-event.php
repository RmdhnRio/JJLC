<?php
 
 global $wp_query;

?>
<section class="section-single-title">
    <div class="container">
        <div class="row">
            <div class="col-lg-12" >
                <h3 class="title-page">Events</h3>
                <div class="divider-lg divider-lg-left"></div>
            </div>
        </div>
    </div>
</section>



<?php
 get_header();

?>
<section class="section-single">
	<div class="container">
		<div class="row">
			<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 section-single-left">
			<?php
			$args = array( 'post_type' => 'event', 'posts_per_page' => $perpage, 'paged' => $paged );

			    $wp_query = new WP_Query($args);
			    while ( have_posts() ) : the_post();
			?>

			<!--<div class=" box-event">-->
			<div class="panel panel-default event-panel">
				<div class="blog-list event">                    
	                <div class="row">
	                <?php if ( has_post_thumbnail() ) { ?>
		  				<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 post-list-thumbnail" style="padding: 0px;">
							<a href="#">
							    <img src="<?php echo get_the_post_thumbnail_url() ;?>" width="95%">
							</a>
						</div>
					<?php } ?>
						<div class="col-lg-9 col-md-9 col-sm-8 col-xs-12 event-list">
							<h3><?php the_title(); ?></h3>
								<div class="divider-lg divider-lg-left"></div>
							<p style="font-family: Lato; margin-top: -20px;">posted on  <small><b><?php the_date('d F Y'); ?></b></small></p>
					   		<p><?php the_excerpt(); ?></p>
					   		<a href="<?php echo get_the_permalink(); ?>" class="btn btn-default">Selanjutnya</a>
						</div>
					</div>
				</div>
			</div>
			<!--</div>-->
				<?php endwhile; ?>
			</div>
			<?php  echo get_sidebar(); ?>
		</div>
	</div>
</section>



<?php 
get_footer(); 
?>