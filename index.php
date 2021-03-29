<?php 
    get_header();
?>

<?php

    wp_nav_menu(
        array(
            'menu' => 'categories-menu',
            'container' => '',
            'theme_location' => 'primary',
            'items_wrap' => '<ul id="" class="categories-menu">%3$s</ul>',
        )
    );
?>

<div class="posts-container">

    <section class="posts-section">

        <article class="posts">
        
            <?php

                $args = array(
                    'post_type' => array('post'),
                );

                $posts_query = new WP_Query( $args );
                if( $posts_query->have_posts() ){
                    
                    while( $posts_query->have_posts() ){
                        
                        $posts_query->the_post();
                            get_template_part( 'template-parts/content', 'archive' );
                    }
                    
                }
                ?>

        </article>

        <?php the_posts_pagination(); ?>

    </section>

    <aside class="posts-aside">

        <?php dynamic_sidebar('sidebar-1'); ?>

    </aside>

</div>

<?php get_footer(); ?>