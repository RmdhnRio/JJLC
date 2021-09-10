<?php get_header(); ?> 

  <section class="page-title">
    <div class="row">
      <div class="container">
        <h4><?php the_title(); ?></h4>
        <div class="divider-left"></div>
      </div>
    </div>
  </section>

  <section class="article">
    <div class="row">
      <div class="container">
        <div class="col l9 m6 s12 ">
          <div class="card darken-1">
            <div class="card-content dark-text">
              <span class="card-title"><?php the_title(); ?></span>
              <p><?php the_post(); the_content(); ?></p>
              <br>

            </div>
            <div class="card-action">
              <a href=""><?php next_post_link(); ?></a>
            </div>
          </div>
        </div>
        <?php echo get_sidebar(); ?>
      </div>
    </div>
  </section>

<?php get_footer(); ?>