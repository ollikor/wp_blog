<?php 
    get_header(); 
?>

<div >
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

    $currentPage = get_query_var('paged');

    $args = array(
        'post_type' => 'recipes',
        'paged' => $currentPage
    );
    $recipe_query = new WP_Query($args);
    if( $recipe_query->have_posts() ){

        while( $recipe_query->have_posts() ){

            $recipe_query->the_post();
            
            get_template_part( 'template-parts/content', 'recipes' );
        }

    } else { ?>
        <h1>No recipes</h1>
<?php } ?>

</article>

<?php 
    the_posts_pagination();
?>

<?php 
    get_footer();
?>