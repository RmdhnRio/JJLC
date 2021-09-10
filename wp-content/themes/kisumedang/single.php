<?php
get_header();
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
                <img src="<?php echo get_the_post_thumbnail_url(); ?>" style="width: 100%; height: auto;">
                <p><?php the_post(); the_content(); ?></p>
            
                <?php comments_template(); ?> 
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