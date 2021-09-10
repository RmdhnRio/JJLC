<?php 
get_header();


$pods = pods('angkatan',get_the_ID());
$deskripsi = $pods->field('deskripsi');
$relawan = $pods->field('daftar_relawan');
$relawan_id = $relawan['ID'];
$resources = $pods->field('resources');

/*$images = get_post_meta( $post->ID, 'resources' );*/

$perpage = 5;
$paged = 1;

$term_list = wp_get_post_terms(get_the_ID(), 'tahun_angkatan');
$taxo = $term_list[0]->slug;


the_post();
?>


<section class="banner-angkatan" style=" background: url(<?php echo get_the_post_thumbnail_url();?>); background-size: cover;">
    <div class="banner-caption">
       <div class="container banner-caption">
          <h1><?php the_title(); ?></h1>
       </div>
          <div class="opacity-bar"><?php echo $deskripsi; ?></div>
</section>

<!--<section class="section-single-banner">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 banner">
          <img src="<?php /* echo get_the_post_thumbnail_url();?>" class="img-responsive">
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 banner">
        	<div class="row">
	        	<div class="col-lg-9 banner-text">
	        		<br>
	        		<br>
			        <h2 class="title-page"><?php the_title(); ?></h2>
			            <div class="divider-lg divider-lg-left"></div>
			        <h4><?php echo $deskripsi; */?></h4>
			    </div>
	        </div>
        </div>
    </div>
</section>-->

<section class="section-single">
	<div class="container">
		<div class="row">
			<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
				<div class="kelompok-angkatan">
					<h3>Kelompok Angkatan</h3>
					<div class="divider-xs" style="width: 30px; height: 5px; background:#ffd52d; margin-bottom: 10px"></div>
					<div class="information-content">
						<?php
								$args = array( 'post_type' => 'kelompok_angkatan', 'tax_query' => array(array(
									'taxonomy'=>'tahun_angkatan',
									'field'=>'slug',
									'terms'=>$taxo
									)
								), 'posts_per_page' => $perpage, 'paged' => $paged );

								    $wp_query = new WP_Query($args);
								    while ( have_posts() ) : the_post();
							?>
						<ul><li><a href="<?php echo get_the_permalink(); ?>"><?php the_title(); ?></a></li></ul>
						<?php endwhile; ?>
					</div>
				</div>
				<br><br>
				<!--<div class="agenda">
					<h3>Agenda</h3>
					<div class="divider-xs" style="width: 30px; height: 5px; background:#ffd52d; margin-bottom: 10px"></div>
					<div class="information-content">
						<?php/*
							$args = array( 'post_type' => 'event', 'tax_query' => array(array(
								'taxonomy'=>'tahun_angkatan',
								'field'=>'slug',
								'terms'=>$taxo
								)
							), 'posts_per_page' => $perpage, 'paged' => $paged );

							    $wp_query = new WP_Query($args);
							    while ( have_posts() ) : the_post();
						*/?>
						<ul><li><a href="<?php/* echo get_the_permalink(); ?>"><?php the_title(); */?></a></li></ul>
						<?php/* endwhile; */?>
					</div>
				</div>-->


			<?php if ($relawan_id) : ?>
				<div class="relawan">
					<h3>Daftar Relawan</h3><!-- Daftar Relawan Section -->
					<div class="divider-xs" style="width: 30px; height: 5px; background:#ffd52d; margin-bottom: 10px"></div>
					<p><?php 
						$post = get_post($relawan_id);
						echo $post->post_content;  ?></p>
				</div>
			<?php endif; ?>

				<br><br>

			<?php if($resources) : ?>
				<div class="resources">
					<h3>Resources</h3>
					<div class="divider-xs" style="width: 30px; height: 5px; background:#ffd52d; margin-bottom: 10px"></div>
					<p><?php echo $resources; ?></p>
				</div>
			<?php endif; ?>
			
			</div>
		<?php get_sidebar(); ?>
		</div>
	</div>
</section>

<!--<?php/* if($images) { ?>
<section class="section-single-resources">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h3>Resources</h3>
					<div class="divider-xs" style="width: 30px; height: 5px; background:#ffd52d; margin-bottom: 10px"></div>
				<div class="row">
					<?php         
					foreach ( $images as $image ) { ?>
					<div class="col-lg-4 col-sm-6 resources">
						<div class="thumbnail angkatan-resources">
						<?php     
					          echo pods_image( $image, 'original' );
					    ?>
					    </div>
				    </div>
				    <?php } ?>
				</div>
			</div>
		</div>
	</div>
</section>
<?php } */?> -->




<?php
get_footer();
?>