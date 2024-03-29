<?php 

/*
Template name : Artikel
*/

$pods = pods('artikel',get_the_ID());
$paged = 1;
$perpage = 100;

get_header(); 
//the_post();
?>

<section class="page-title">
    <div class="row">
      <div class="container">
        <h4>Archive</h4>
        <div class="divider-left"></div>
      </div>
    </div>
</section>

<section class="archive">
  <div class="container">
    <div class="row">
      <h3 class="header center">Artikel Terbaru</h3>
        <?php

          $args = array( 'post_type' => 'artikel', 'order' => 'DSC', 'posts_per_page' => $perpage, 'paged' => $paged );
          $wp_query = new WP_Query($args);

          while ( have_posts() ) : the_post();
        ?>
      <div class="col s12 m4">
        <div class="archive card">
          <?php if ( has_post_thumbnail() ) { ?>
          <div class="card-image">
            <img src="<?php echo get_the_post_thumbnail_url() ;?>">
            <a class="btn-floating halfway-fab waves-effect waves-light red tambahkan" data-position="bottom" data-tooltip="Simpan Artikel"><i class="material-icons">add</i></a>
          </div>
          <?php } else { ?>
            <div class="card-image">
              <img src="<?=get_template_directory_uri();?>/assets/img/bg.jpg">
              <a class="btn-floating halfway-fab waves-effect waves-light red tambahkan" data-position="bottom" data-tooltip="Simpan Artikel"><i class="material-icons">add</i></a>
            </div>
          <?php } ?>
          <div class="card-content">
            <span class="card-title truncate"><?php the_title();?></span>
            <p class="truncate"><?php the_excerpt();?></p>
          </div>
          <div class="card-action">
            <a class="waves-effect waves-light btn red" href="<?php echo get_the_permalink(); ?>">More...</a>
          </div>
        </div>
      </div>
      <?php endwhile;?>
      <div class="col s12">
        <?php wp_link_pages( $args ); ?> 
<!--         <ul class="pagination center-align">
          <li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
          <li class="active"><a href="#!">1</a></li>
          <li class="waves-effect"><a href="#!">2</a></li>
          <li class="waves-effect"><a href="#!">3</a></li>
          <li class="waves-effect"><a href="#!">4</a></li>
          <li class="waves-effect"><a href="#!">5</a></li>
          <li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
        </ul> -->
      </div>
    </div>
  </div>
</section>


<?php get_footer(); ?>