<?php

function mytheme_theme_support() {

    add_theme_support( 'title-tag' );

    add_theme_support( 'custom-logo' );

    add_theme_support( 'custom-header' );

    add_theme_support( 'post-thumbnails' );

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





function recipe_taxonomies() {

    $labels = array(
        'name'              => _x( 'tag', 'taxonomy general name', 'textdomain' ),
        'singular_name'     => _x( 'tag', 'taxonomy singular name', 'textdomain' ),
        'search_items'      => __( 'Search tag', 'textdomain' ),
        'all_items'         => __( 'All tag', 'textdomain' ),
        'parent_item'       => __( 'Parent tag', 'textdomain' ),
        'parent_item_colon' => __( 'Parent tag:', 'textdomain' ),
        'edit_item'         => __( 'Edit tag', 'textdomain' ),
        'update_item'       => __( 'Update v', 'textdomain' ),
        'add_new_item'      => __( 'Add New v', 'textdomain' ),
        'new_item_name'     => __( 'New tag Name', 'textdomain' ),
        'menu_name'         => __( 'tag', 'textdomain' ), 
    );

    $args = array(
        'hierarchical'      => false,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'tag' ),
    );

    register_taxonomy('recipe', array('recipes'), $args);

}
add_action('init', 'recipe_taxonomies');





function set_my_comment_title($defaults) {
    $defaults['title_reply'] = __('Leave a comment');
    return $defaults;
}
add_filter('comment_form_defaults', 'set_my_comment_title');





function website_remove($fields)
{
    if(isset($fields['url']))
    unset($fields['url']);
    return $fields;
}
add_filter('comment_form_default_fields', 'website_remove');



function disable_mytheme_action() {
    define('DISALLOW_FILE_EDIT', TRUE);
}
add_action('init', 'disable_mytheme_action');
?>