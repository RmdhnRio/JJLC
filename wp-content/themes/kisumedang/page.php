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
                <p><?php the_post(); the_content(); ?></p>
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