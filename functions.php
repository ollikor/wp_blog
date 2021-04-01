<?php

function mytheme_theme_support() {
    // Adds dynamic title tag support 
    add_theme_support( 'title-tag' );
    add_theme_support( 'custom-logo' );
    add_theme_support( 'custom-header' );
    add_theme_support( 'post-thumbnails' );

    add_image_size('blog-small', 300, 200, true);
    add_image_size('blog-large', 800, 400, false);
}


add_action( 'after_setup_theme', 'mytheme_theme_support' );


function register_my_menus() {
    register_nav_menus(
      array(
        'main-menu' => __( 'Main Menu' ),
        'categories-menu' => __( 'Categories Menu' ),
        'food-categories-menu' => __( 'Food Categories Menu' ),
        'footer-menu' => __( 'Footer Menu' ),
        'social-menu' => __( 'Social Menu' ),
       )
     );
   }
   add_action( 'init', 'register_my_menus' );


function mytheme_register_styles() {

    $version = wp_get_theme()->get( 'Version' );
    wp_enqueue_style('mytheme-css', get_template_directory_uri().'/style.css', array(), $version, 'all');
    wp_enqueue_style('google-fonts', "https://fonts.googleapis.com/css2?family=Lexend&display=swap", false);

}

add_action( 'wp_enqueue_scripts', 'mytheme_register_styles');

function mytheme_register_scripts() {

    wp_enqueue_script('mytheme-scripts', get_template_directory_uri().'/scripts.js', array(), '1.0', true);

}

add_action( 'wp_enqueue_scripts', 'mytheme_register_scripts');


function mytheme_widget_areas() {

    register_sidebar( array(
        'name'          => 'Sidebar',
        'id'            => 'sidebar-1',
        'before_widget' => '<header class="sidebar">',
        'after_widget'  => '</header></hr>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
    ) );
    register_sidebar( array(
        'name'          => 'Searchbar',
        'id'            => 'searchbar-1',
        'before_widget' => '<div class="searchbar">',
        'after_widget'  => '</div>',
        'before_title'  => '',
        'after_title'   => '',
        'title'         => 'dsaf'
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
        'supports' => array('title', 'thumbnail', 'custom-fields', 'excerpt', 'comments'),
    );

    register_post_type('recipes', $args);

}

add_action('init', 'custom_post_type');


function recipe_taxonomy() {

    $args = array(
        'labels' => array(
            'name' => 'Tags',
        ),
        'public' => true,
        'hierarchical' => false,
    );

    register_taxonomy('recipes', array('recipes'), $args);
    // register_taxonomy_for_object_type('post_tag', 'recipes');
}

add_action('init', 'recipe_taxonomy');


add_filter('comment_form_defaults', 'set_my_comment_title');
function set_my_comment_title($defaults) {
    $defaults['title_reply'] = __('Leave a comment');
    return $defaults;
}

add_filter('comment_form_default_fields', 'website_remove');
function website_remove($fields)
{
if(isset($fields['url']))
unset($fields['url']);
return $fields;
}

?>