<?php

function mytheme_theme_support() {

    // Adds dynamic title tag support 
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support( 'custom-header' );
    add_theme_support( 'post-thumbnails');

}

add_action('after_setup_theme', 'mytheme_theme_support');



function mytheme_menus() {

    $locations = array(
        'primary' => "top menu",
        'footer' => "footer menu"
    );

    register_nav_menus($locations);
}

add_action('init', 'mytheme_menus');



function mytheme_register_styles() {

    wp_enqueue_style('mytheme-css', get_template_directory_uri().'/style.css', array(), '1.0', 'all');

}

add_action( 'wp_enqueue_scripts', 'mytheme_register_styles');

?>