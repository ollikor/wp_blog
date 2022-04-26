<?php 
/**
 * The page template
 * 
 * This is the template that display contact-page content.
 * 
 * @package Wordpress
 * @subpackage Mytheme
 * @since Mytheme 1.0
 * @version 1.0
 * 
 */

 get_header(); 
?>

<div class="wide-page">

<?php
    if( have_posts() ) :

        while( have_posts() ) :

            the_post();
            the_content();
        
        endwhile;

    endif;
?>

</div>

<?php 
    get_footer();
?>