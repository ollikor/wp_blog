<?php 
/**
 * The content of header
 * 
 * This is the template that displays header content.
 * 
 * @package Wordpress
 * @subpackage Mytheme
 * @since Mytheme 1.0
 * @version 1.0
 * 
 */

?><?php if (is_front_page()) : ?>

<header class="full-site-header">

    <?php if ( has_header_image() ) : ?> 

            <span class="full-header-image"> <?php the_header_image_tag(); ?></span>

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

            <span class="header-image"> <?php the_header_image_tag(); ?></span>

    <?php endif; ?>


    <div class="logo-container">
        <?php the_custom_logo(); ?>

        <h1 class="site-title"><?php bloginfo('name'); ?></h1>

        <h1 class="site-description"><?php bloginfo('description'); ?></h1>

    </div>

</header>

<?php endif ?>