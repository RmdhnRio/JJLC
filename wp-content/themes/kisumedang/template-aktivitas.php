<?php
/*
Template Name: Aktivitas
*/
get_header();

// if ( get_query_var('paged') ) {

// $paged = get_query_var('paged');

// } elseif ( get_query_var('page') ) {

// $paged = get_query_var('page');

// }

   $paged = 1;


$perpage = 5;
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
            <div class="col-lg-9 section-single-left">
<?php
$args = array( 'post_type' => 'post', 'posts_per_page' => $perpage, 'paged' => $paged );

    $wp_query = new WP_Query($args);
    while ( have_posts() ) : the_post();
?>
                <div class="blog-list">
                    <h3><a href="<?php echo get_the_permalink(); ?>"><?php the_title(); ?></a></h3>
                    <small><?php the_date('d F Y'); ?></small><br/>
                    <div class="row" >
                       <?php if ( has_post_thumbnail() ) { ?>
                        <div class="col-lg-6 cols">
                            <img src="<?php echo the_post_thumbnail_url('full'); ?>" width="95%" class="blog-list-img thumbnail"/>
                        </div>
                        <?php } ?>
                        <div class="col-lg-6 cols cols-left">
                            <p><?php the_excerpt(); ?></p>
                            <a href="<?php echo get_the_permalink(); ?>" class="btn btn-default">Selanjutnya</a>
                        </div>
                    </div><hr/>
                </div>
            <?php endwhile; ?>

            </div>
            <?php
                    echo get_sidebar();
                  ?>

        </div>
    </div>
</section>
<?php
get_footer();
?>