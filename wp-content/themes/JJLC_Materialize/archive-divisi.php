<?php 

/*
Template name : Artikel
*/

$pods = pods('divisi',get_the_ID());
$paged = 1;
$perpage = 4;

get_header(); 
//the_post();
?>

<section class="page-title">
    <div class="row">
      <div class="container">
        <h4>Divisi</h4>
        <div class="divider-left"></div>
      </div>
    </div>
</section>

<section class="archive">
  <div class="container">
    <div class="row">
      <h3 class="header center">Divisi JJLC</h3>
        <?php

          $args = array( 'post_type' => 'divisi', 'order' => 'ASC', 'posts_per_page' => $perpage, 'paged' => $paged );
          $wp_query = new WP_Query($args);

          while ( have_posts() ) : the_post();
        ?>
      <div class="col s12 m3">
        <div class="archive card" style="margin-top: 40px">
          <?php if ( has_post_thumbnail() ) { ?>
          <div class="card-image">
            <img class="center-block overcard" src="<?php echo get_the_post_thumbnail_url() ;?>">
          </div>
          <?php } else { ?>
            <div class="card-image">
              <img src="<?=get_template_directory_uri();?>/assets/img/bg.jpg">
            </div>
          <?php } ?>
          <div class="card-content">
            <span class="card-title truncate"><?php the_title();?></span>
          </div>
          <div class="card-action">
            <a class="waves-effect waves-light btn red" href="<?php echo get_the_permalink(); ?>">More...</a>
          </div>
        </div>
      </div>
      <?php endwhile;?>
    </div>
  </div>
</section>


<?php get_footer(); ?>