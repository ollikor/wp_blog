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
    <header id="site-header">

    <?php if ( get_header_image() ) : ?>

        <div id="site-header">
            <img class="header-image" src="<?php header_image(); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
        </div>

    <?php endif; ?>
      
       
        <div class="logo-container">
            <?php
                if(function_exists('the_custom_logo')) {
                    
                    the_custom_logo();

                }
            ?>
            <h1 class="site-title"><?php bloginfo('name'); ?></h1>
            <h1 class="site-description"><?php bloginfo('description'); ?></h1>
        </div>
    </header>

    <?php
        wp_nav_menu(
            array(
                'menu' => 'primary',
                'container' => '',
                'theme_location' => 'primary',
                'items_wrap' => '<ul id="" class="navbar">%3$s</ul>',
            )
        );
    ?>

    <div>