<?php

# Menu
require_once('wp_bootstrap_navwalker.php');

function theme_wp_setup()
{
    add_theme_support('automatic-feed-links');
    add_theme_support('html5', array(
        'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
        ));
    // pengganti tag <title></title>
    add_theme_support('title-tag');

    // mengaktifkan post thumbnail
    add_theme_support('post-thumbnails');
 	add_image_size( 'thumbnail-500', 500, 500 );
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
