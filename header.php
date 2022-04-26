<?php 
/**
 * The header
 * 
 * This is the template that displays <head> section and header before content.
 * 
 * @package Wordpress
 * @subpackage Mytheme
 * @since Mytheme 1.0
 * @version 1.0
 * 
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body>
   
    <header>
        <?php get_template_part( 'template-parts/content', 'header' ); ?>
        
        <?php
            if ( has_nav_menu('main-menu') ) : ?>
                <div id="nav-container" class="nav-container">
                    <div id="open-navbar-container" class="open-navbar-container">
                        <button onclick="nav()" class="bars"><i class="fas fa-bars"></i></button>
                    </div>
                    <div id="nav-content" class="nav-content">
                        <?php
                            wp_nav_menu(
                                array(
                                    'theme_location' => 'main-menu',
                                    'items_wrap' => '<ul id="navbar" class="navbar">%3$s</ul>',
                                )
                            ); 
                        ?>
                        <div class="searchbar">
                            <?php 
                                esc_html( get_search_form() );
                            ?>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
    </header>
    </div>
    <div class="site-content">