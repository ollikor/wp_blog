<?php 
/**
 * The single recipe template
 * 
 * This is the template that display a single recipe.
 * 
 * @package Wordpress
 * @subpackage Mytheme
 * @since Mytheme 1.0
 * @version 1.0
 * 
 */

 get_header(); 
?>

<article>

<?php
    if( have_posts() ) :

        while( have_posts() ) :

            the_post();
            
            get_template_part( 'template-parts/content', 'single-recipe' );

        endwhile;

    endif;
?>

</article>

<?php 
    get_footer();
?>