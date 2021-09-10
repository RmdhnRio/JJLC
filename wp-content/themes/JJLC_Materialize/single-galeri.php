<?php 
get_header();

$pods 			= pods('galeri',get_the_ID());
$deskripsi		= $pods->field('deskripsi');
$publisher		= $pods->field('publisher');
$tgl_publish	= $pods->field('tgl_publish');

$photo			= get_post_meta( $post->ID, 'photo' ); 
?>

  <section class="page-title">
    <div class="row">
      <div class="container">
        <h4><?php the_title(); ?></h4>
        <div class="divider-left"></div>
      </div>
    </div>
  </section>

  <section class="gallery-single">
    <div class="container">
      <div class="row">
        <div class="col s12 m3 l3">
          <div class="box z-depth-3">
            <div class="card-title">
              <table>
                <tbody>
                  <tr>
                      <th>Judul Album</th>
                      <th>:</th>
                      <th><?=the_title();?></th>
                  </tr>
                  <tr>
                      <th>Tanggal Publish</th>
                      <th>:</th>
                      <th><?=$tgl_publish;?></th>
                  </tr>
                  <tr>
                      <th>Publisher</th>
                      <th>:</th>
                      <th><?=$publisher;?></th>
                  </tr>
                  <tr>
                      <th>Deskripsi</th>
                      <th>:</th>
                      <th><?=$deskripsi;?></th>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <div class="col s12 m9 l9">
          <div class="box z-depth-3">
          <br>
          <div id="grid" class="grid">
            <div class="grid-sizer"></div>
            <?php foreach ( $photo as $pho) { ?>
            <div class="grid-item">
              <img class="materialboxed" src="<?=pods_image_url($pho, 'original') ?>" width="100%">
            </div>
            <?php } ?>
          </div>
        </div>
      </div>
    </div>
  </section>


<?php get_footer(); ?>
