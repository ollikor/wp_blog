<?php

function mytheme_theme_support() {
    // Adds dynamic title tag support 
    add_theme_support( 'title-tag' );
    add_theme_support( 'custom-logo' );
    add_theme_support( 'custom-header' );
    add_theme_support( 'post-thumbnails' );

//     add_image_size( 'custom-size', 150, 150, true );
    
//     add_filter( 'image_size_names_choose', 'my_custom_sizes' );
 
// function my_custom_sizes( $sizes ) {
//     return array_merge( $sizes, array(
//         'custom-size' => __( 'Your Custom Size Name' ),
//     ) );
// }
    // add_image_size( 'card-image', 150, 150);
    // add_image_size( 'article-image', 300, 200, true);
    
    // add_filter( 'image_size_names_choose', 'custom_image');
    //     function custom_image($sizes) {
    //         return array_merge($sizes, array (
    //             'card-image' => _('standard'),
    //             'article-image' => _('cropped'),
    //         ));
    //     }
}

// add_action( 'after_setup_theme', 'wpdocs_theme_setup' );
// function wpdocs_theme_setup() {
//     add_image_size( 'card-image', 150, 150 ); // 300 pixels wide (and unlimited height)
//     add_image_size( 'article-image', 400, 300, true ); // (cropped)
// }

add_action( 'after_setup_theme', 'mytheme_theme_support' );


function register_my_menus() {
    register_nav_menus(
      array(
        'main-menu' => __( 'Main Menu' ),
        'categories-menu' => __( 'Categories Menu' ),
        'food-categories-menu' => __( 'Food Categories Menu' ),
        'footer-menu' => __( 'Footer Menu' ),
        'footer-social-menu' => __( 'Footer Social Menu' ),
       )
     );
   }
   add_action( 'init', 'register_my_menus' );


function mytheme_register_styles() {

    wp_enqueue_style('mytheme-css', get_template_directory_uri().'/style.css', array(), '1.0', 'all');
    wp_enqueue_style('google-fonts', "https://fonts.googleapis.com/css2?family=Lexend&display=swap", false);

}

add_action( 'wp_enqueue_scripts', 'mytheme_register_styles');


function mytheme_widget_areas() {

    register_sidebar( array(
        'name'          => 'Frontpagebar',
        'id'            => 'frontpage-1',
        'before_widget' => '',
        'after_widget'  => '',
        'before_title'  => '',
        'after_title'   => '',
    ) );
    register_sidebar( array(
        'name'          => 'Sidebar',
        'id'            => 'sidebar-1',
        'before_widget' => '<header class="sidebar">',
        'after_widget'  => '</header></hr>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
    ) );

}

add_action( 'widgets_init', 'mytheme_widget_areas' );


function custom_post_type() {
    $args = array(
        'labels' => array(
            'name' => 'Recipes',
            'singular_name' => 'Recipe',
        ),
        'hierarchical' => false,
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-food',
        'supports' => array('title', 'thumbnail', 'custom-fields', 'excerpt'),
    );

    register_post_type('recipes', $args);

}

add_action('init', 'custom_post_type');


function my_first_taxonomy() {

    $args = array(
        'labels' => array(
            'name' => 'Incredients',
            'singular_name' => 'Incredient',
        ),
        'public' => true,
        'hierarchical' => false,
    );

    register_taxonomy('ingredients', array('recipes'), $args);
}

add_action('init', 'my_first_taxonomy');


?>