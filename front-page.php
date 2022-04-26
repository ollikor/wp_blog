<?php 
/**
* The front page template
*
* Template to displaying a static front page.
*
* @package Wordpress
* @subpackage Mytheme
* @since Mytheme 1.0
* @version 1.0
*/

get_header(); ?>

<div class="frontpage-content">
    
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