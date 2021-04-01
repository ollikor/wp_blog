<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/wp-content/themes/mytheme/images/logo.png">
    <?php wp_head(); ?>
</head>

<body>
    <?php if (is_front_page()) : ?>

        <header class="full-site-header">

            <?php if ( has_header_image() ) : ?>

                    <img class="full-header-image" src="<?php header_image(); ?>" alt="image">

            <?php endif; ?>
        
        
            <div class="logo-container">
                        
                <?php the_custom_logo(); ?>

                <h1 class="site-title"><?php bloginfo('name'); ?></h1>

                <h1 class="site-description"><?php bloginfo('description'); ?></h1>


            </div>

        </header>

    <?php else : ?>

        <header class="site-header">

            <?php if ( has_header_image() ) : ?>

                    <img class="full-header-image" src="<?php header_image(); ?>" alt="image">

            <?php endif; ?>


            <div class="logo-container">
                <?php the_custom_logo(); ?>

                <h1 class="site-title"><?php bloginfo('name'); ?></h1>

                <h1 class="site-description"><?php bloginfo('description'); ?></h1>

            </div>

        </header>

    <?php endif ?>
    
    <?php
        if ( has_nav_menu('main-menu') ) : ?>
            <div id="nav-container" class="nav-container">
                <div id="open-navbar-container" class="nav">
                    <button onclick="nav()" class="bars"><i class="fas fa-bars"></i></button>
                </div>
                <div id="nav-content" class="nav-content">
                    <!-- <div class="nav"> -->
                        <?php
                            wp_nav_menu(
                                array(
                                    'theme_location' => 'main-menu',
                                    'items_wrap' => '<ul id="navbar" class="navbar">%3$s</ul>',
                                )
                            ); 
                        ?>
                        <?php 
                            dynamic_sidebar('searchbar-1'); 
                        ?>
                    <!-- </div> -->
                </div>
            </div>
        <?php endif; ?>
    </div>

    <div>