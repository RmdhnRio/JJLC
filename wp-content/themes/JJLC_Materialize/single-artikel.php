<?php get_header(); ?> 

  <section class="article-title" style="background: url(<?php echo get_the_post_thumbnail_url();?>); background-size: cover; background-position:center;">
    <div class="row">
      <div class="container banner-caption">
        <blockquote>
          <h1 class="white-text"><?php the_title(); ?></h1>
        </blockquote>
      </div>
    </div>
  </section>
  <br>

  <section class="article">
    <div class="container">
      <div class="row">
        <div class="col l9 m6 s12 ">
          <div class="card darken-1">
            <div class="card-content dark-text">
              <span class="card-title"><?php the_title(); ?></span>
              <p><?php the_post(); the_content(); ?></p>
              <br>

            </div>
            <div class="card-action">
              <a href="#">Artikel Sebelumnya</a>
              <a href="#">Artikel Selanjutnya</a>
            </div>
          </div>
          <div class="row">
            <div class="col s12">
              <div class="card darken-1">
                <div class="card-content dark-text">
                  <?php         
                    if ( comments_open() || get_comments_number() ) :
                      comments_template();

                    endif;
                  ?>
                </div>
              </div>
            </div>
          </div>
        </div>
        <?php echo get_sidebar(); ?>
      </div>
    </div>
  </section>

<?php get_footer(); ?>