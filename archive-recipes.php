<?php 
    get_header(); 
?>
<h1 class="page-title"><?php wp_title(''); ?></h1>

<div >
    <!-- <?php 
     wp_nav_menu(
        array(
            'menu' => 'food-categories-menu',
            'container' => '',
            'theme_location' => 'primary',
            'items_wrap' => '<ul id="" class="categories-menu">%3$s</ul>',
        )
    );
    ?> -->
</div>

<article class="posts">

<?php
    $args = array(
        'post_type' => array('recipes'),
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