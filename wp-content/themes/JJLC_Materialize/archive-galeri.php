<?php
get_header();


$pods = pods('galeri',get_the_ID());
$perpage = 3;
$paged = 1; 
?>

<section class="page-title">
  <div class="row">
    <div class="container">
      <h4>Gallery</h4>
      <div class="divider-left"></div>
    </div>
  </div>
</section>

<br/>
<section class="gallery">
    <div class="row">
      <div class="container">
        <?php
          $args = array( 'post_type' => 'galeri', 'order' => 'ASC', 'posts_per_page' => $perpage, 'paged' => $paged );

          $wp_query = new WP_Query($args);
          while ( have_posts() ) : the_post();
        ?>
        <div class="col s12 m4">
          <div class="card darken-1 z-depth-3">
            <div class="card-content dark-text">
              <span class="card-title"><?php the_title(); ?></span><br>
              <?php if ( has_post_thumbnail() ) { ?>
              	<img src="<?php echo get_the_post_thumbnail_url() ;?>" width="100%">
         	  <?php } ?>
            </div>
            <div class="card-action">
              <a href="<?php echo get_the_permalink(); ?>">Buka Album</a>
            </div>
          </div>
        </div>
      <?php endwhile; ?>
      </div>
	</div>
</section>

<?php get_footer(); ?>