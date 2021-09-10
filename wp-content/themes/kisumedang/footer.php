 <?php wp_footer(); ?>
<?php
$settings = pods('landing');
$instagram_url = $settings->display( 'instagram_url' );
$facebook_url = $settings->display( 'facebook_url' );
$twitter_url = $settings->display( 'twitter_url' );
$footer_copyright = $settings->display( 'footer_copyright' );
?>
<footer class="footer">
    <div class="container" >
    <div class="row" style=" ">
        <div class="col-lg-6 copyright">
           <?=$footer_copyright?>
        </div>
        <div class="col-lg-6 social-media">
            <a href="<?=$instagram_url?>" target="_blank">
            <img src="http://kelasinspirasisumedang.org/wp-content/uploads/2017/03/instagram-logo-3.png"
            width="30"/></a>
            
            <a href="<?=$facebook_url?>" target="_blank">
            <img src="http://kelasinspirasisumedang.org/wp-content/uploads/2017/03/facebook-logo-button.png" width="30"/>
            </a>
            
            <a href="<?=$twitter_url?>" target="_blank">
            <img src="http://kelasinspirasisumedang.org/wp-content/uploads/2017/03/twitter-logo-button.png" width="30"/>
            </a>
        </div>
    </div>
    </div>
</footer>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="<?php  get_template_directory_uri(); ?>/wp-content/themes/kisumedang/js/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="<?php  get_template_directory_uri(); ?>/wp-content/themes/kisumedang/js/bootstrap.js"></script>
</body>
</html>