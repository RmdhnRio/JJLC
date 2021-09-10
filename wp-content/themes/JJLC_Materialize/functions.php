<?php

# Menu
require_once('wp_bootstrap_navwalker.php');

function theme_wp_setup()
{
	add_theme_support('automatic-feed-links');
	add_theme_support('html5', array('search-form', 'comment_form', 'comment_list', 'gallery', 'caption'
	));

	// Pengganti tag <title>..</title>
	add_theme_support('title-tag');

	// Mengaktifkan post thumbnail
	add_theme_support('post-thumbnails');
	add_image_size('thumbnail-500', 500, 500 );

	/* Register Menu */
	register_nav_menus(array(
		'primary_menu' => 'Primary Menu',
	));
}

add_action('after_setup_theme', 'theme_wp_setup');

/**
 * @param  $more from global variable
 * mengganti tanda '[...]' menjadi '....'
 */
function new_excerpt_more($more)
{
	return '....';
}

add_filter('excerpt_more', 'new_excerpt_more');


function my_login_logo() { ?>
    <style type="text/css">
        #login h1 a, .login h1 a {
            background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logo.png);
		height:120px;
		width:120px;
		background-size: 120px 120px;
		background-repeat: no-repeat;
        	padding-bottom: 30px;
        }
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );

?>