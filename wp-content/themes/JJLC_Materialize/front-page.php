<?php get_header(); 
  $pods = pods('artikel',get_the_ID());
  $paged = 1;
  $perpage = 3;
?>

  <!--Slider Section -->
  <section class="slider">
    <div class="slider">
      <ul class="slides">
        <li class="slider-gradient">
          <img class="slider-img" src="<?= get_template_directory_uri(); ?>/assets/img/slide/1.jpg">
          <div class="caption left-align">
            <h2>#1 JJLC MeetUp</h2>
            <h4 class="light white-text text-lighten-3">Keseruan pertama kami di JJLC</h4>
          </div>
        </li>
        <li class="slider-gradient">
          <img class="slider-img" src="<?= get_template_directory_uri(); ?>/assets/img/slide/2.jpg"> 
          <div class="caption right-align">
            <h2>Makrab JJLC</h2>
            <h4 class="light white-text text-lighten-3">Malam yang menyatukan semuanya</h4>
          </div>
        </li>
        <li class="slider-gradient">
          <img class="slider-img" src="<?= get_template_directory_uri(); ?>/assets/img/slide/3.jpg"> 
          <div class="caption right-align">
            <h2>Pelepasan Lampion</h2>
            <h4 class="light white-text text-lighten-3">Hangatnya lampion menjadi semangat di hari esok</h4>
          </div>
        </li>
        <li class="slider-gradient">
          <img class="slider-img" src="<?= get_template_directory_uri(); ?>/assets/img/slide/4.jpg"> 
          <div class="caption left-align">
            <h2>Pelepasan Lampion</h2>
            <h4 class="light white-text text-lighten-3">Admin tolong ubah teks ini, hanya contoh</h4>
          </div>
        </li>
        <li class="slider-gradient">
          <img class="slider-img" src="<?= get_template_directory_uri(); ?>/assets/img/slide/5.jpg"> 
          <div class="caption right-align">
            <h2>Makrab JJLC</h2>
            <h4 class="light white-text text-lighten-3">Keseruan kami yang sampai saat ini belum lupa</h4>
          </div>
        </li>
      </ul>
    </div>
  </section>

  <!-- Banner Section -->
  <section class="banner">
    <div class="banner-section">
      <div class="container">
        <div class="row">
          <div class="col xl4 l4 m2 s2 hide-on-small-only">
            <div class="jejee">
              <img src="<?= get_template_directory_uri(); ?>/assets/img/jejee.png">
            </div>
          </div>
          <div class="col xl4 l4 m12 s12">
            <div class="card">
              <div class="card-image">
                <img src="<?= get_template_directory_uri(); ?>/assets/img/logojjlc.png">
                <span class="card-title"></span>
              </div>
              <div class="card-content">
                <p>Selamat datang di website komunitas jejepangan UNJ, kami adalah Komunitas pencinta budaya Jepang yang sering beraktivitas di lingkungan Universitas Negeri Jakarta.

                Bagi kamu yang memiliki minat terhadap Manga, Anime, Cosplay dan hal - hal yang berbau Jepang, silahkan bergabung dengan kami.</p>
              </div>
              <div class="card-action">
                <a href="#">Lihat lebih lengkap</a>
              </div>
            </div>
          </div>
          <div class="col xl4 l4 m2 s2 hide-on-small-only">
            <div class="elsii">
              <img src="<?= get_template_directory_uri(); ?>/assets/img/elsii.png">
            </div>
          </div>
      </div>
    </div>
  </section>

  <section class="archive">
    <div class="row">
      <div class="container">
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
      </div>
    </div>
  </section>

  <div class="section no-pad-bot" id="index-banner">
    <div class="container">
      <br><br>
      <h1 class="header center black-text">Colaborate with Us!</h1>
      <div class="row center">
        <h5 class="header col s12 light">Kami sebuah komunitas budaya Jepang yang sering beraktivitas di lingkungan Universitas Negeri Jakarta</h5>
      </div>
      <div class="row center">
        <a href="<?=site_url("/kontak");?>" id="download-button" class="btn-large waves-effect waves-light pink-gradient">Know more!</a>
      </div>
      <br><br>

    </div>
  </div>



  <div class="container">
    <div class="section">

      <!--   Icon Section   -->
      <div class="row">
        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center light-dark"><i class="material-icons">flash_on</i></h2>
            <h5 class="center">Speeds up development</h5>

            <p class="light">We did most of the heavy lifting for you to provide a default stylings that incorporate our custom components. Additionally, we refined animations and transitions to provide a smoother experience for developers.</p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center light-dark"><i class="material-icons">group</i></h2>
            <h5 class="center">User Experience Focused</h5>

            <p class="light">By utilizing elements and principles of Material Design, we were able to create a framework that incorporates components and animations that provide more feedback to users. Additionally, a single underlying responsive system across all platforms allow for a more unified user experience.</p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center light-dark"><i class="material-icons">settings</i></h2>
            <h5 class="center">Easy to work with</h5>

            <p class="light">We have provided detailed documentation as well as specific code examples to help new users get started. We are also always open to feedback and can answer any questions a user may have about Materialize.</p>
          </div>
        </div>
      </div>

    </div>
    <br><br>
  </div>

<?php get_footer(); ?>