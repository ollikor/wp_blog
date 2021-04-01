<?php 
    get_header();
?>

<?php
    if ( has_nav_menu('categories-menu') ) :
        wp_nav_menu(
            array(
                'menu' => 'categories-menu',
                'container' => '',
                'theme_location' => 'primary',
                'items_wrap' => '<ul id="" class="categories-menu">%3$s</ul>',
            )
        );
    endif;
?>

<div class="posts-container">

    <section class="posts-section">

        <article class="posts">
        
            <?php

                if( have_posts() ) :
                    
                    while( have_posts() ) :
                        
                        the_post();
                        get_template_part( 'template-parts/content', 'archive' );

                    endwhile;
                    
                endif;
                ?>

        </article>

        <?php the_posts_pagination(); ?>

    </section>

    <aside class="posts-aside">

        <?php dynamic_sidebar('sidebar-1'); ?>

    </aside>

</div>

<?php get_footer(); ?>