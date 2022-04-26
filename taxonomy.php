<?php 
/**
 * The taxonomy template
 * 
 * This is the template that display a sorted recipes.
 * 
 * @package Wordpress
 * @subpackage Mytheme
 * @since Mytheme 1.0
 * @version 1.0
 * 
 */

 get_header(); 
?>

<div>
    <?php 
    if( has_nav_menu('food-categories-menu') ) :
        wp_nav_menu(
            array(
                'menu' => 'food-categories-menu',
                'container' => '',
                'theme_location' => 'primary',
                'items_wrap' => '<ul id="" class="food-category-menu">%3$s</ul>',
            )
        );
    endif;
    ?>
</div>

        <article class="posts">

        <?php
            if( have_posts() ) :

                while( have_posts() ) :

                    the_post();
                    get_template_part( 'template-parts/content', 'recipes' );
                
                endwhile;

            endif;
        ?>


        </article>

        <?php 
            the_posts_pagination();
        ?>

<?php 
    get_footer();
?>
