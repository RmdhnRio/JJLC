<?php
$settings = pods('landing');
$sidebar_banner_title = $settings->display( 'sidebar_banner_title' );
$sidebar_banner = $settings->display( 'sidebar_banner' );
$all_activity_label = $settings->display( 'all_activity_label' );
$all_activity_slug = $settings->display( 'all_activity_slug' );
$activity_title_lable = $settings->display( 'activity_title_lable' );

?>
 <?php 
   
	$uri = $_SERVER[REQUEST_URI];
	$uri = str_replace("/","",$uri);
?>

            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 section-single-right">
                <!--<div class="box-sidebar">-->
             <?php if($all_activity_slug!=$uri): ?>

                <h4><?=$activity_title_lable?></h4>
                <div class="divider-xs"></div>
    <?php
         $args = array(
            'post_type' => 'post',
            'posts_per_page' => 3,
            'orderby'=>'post_date',
            'orderby'=>'DESC'
         );

         $wp_query = new WP_Query($args);
          while($wp_query->have_posts()) : the_post();
   				
     if(get_the_post_thumbnail_url()): ?>
                        <div class="row">
                            <div class="col-md-4 col-xs-12">
                                <img src="<?php echo the_post_thumbnail_url('full'); ?>" width="100%"/>
                            </div>
                            <div class="col-md-8 col-xs-12">
                                <a href="<?php echo get_the_permalink(); ?>"><p><?php echo the_title(); ?></p></a>
                                <small><?php the_date('d F Y'); ?></small>
                            </div>
                        </div>
                        <?php
						else:
						?>
                        
                        <div class="row">
                            <div class="col-md-12 col-xs-12" style="padding:0px;">
                                <a href="<?php echo get_the_permalink(); ?>"><p><?php echo the_title(); ?></p></a>
                                <small><?php the_date('d F Y'); ?></small>
                            </div>
                        </div>
                        <?php
						endif;
						?>
        <?php
        endwhile;
        ?>


                                <a href="<?php echo site_url(); ?>/<?=$all_activity_slug?>" class="btn btn-default"><?=$all_activity_label?></a>



                <br/><br/>
                <?php endif; ?>
              
                <h4><?=$sidebar_banner_title?></h4>
                <div class="divider-xs"></div>
                <img src="<?=$sidebar_banner?>" width="100%"/>
				<!--</div>-->
                </div>
