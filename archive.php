<?php 
/**
 * The archive template
 * 
 * This is the template that displays posts from categories.
 * 
 * @package Wordpress
 * @subpackage Mytheme
 * @since Mytheme 1.0
 * @version 1.0
 * 
 */

 get_header(); 
?>

<?php
    if(has_nav_menu('categories-menu') ) : 
        wp_nav_menu(
            array(
                'theme_location' => 'categories-menu',
                'items_wrap' => '<ul id="" class="categories-menu">%3$s</ul>',
            )
        );
    endif;
?>

<div class="posts-container">
    <div class="posts-section">
        <div class="posts">

        <?php
            if( have_posts() ) :

                while( have_posts() ) :

                    the_post();
                    
                    get_template_part( 'template-parts/content', 'archive' );
                
                endwhile;
            
            else : 

                get_template_part('template-parts/content', 'none' );

            endif;
        ?>


        </div>

        <?php 
            the_posts_pagination();
        ?>

        </div>

    <?php if( have_posts() ) : ?>
        <div class="posts-aside">
            <div class="sidebar">
                    <h3>Recent Posts</h3>
                    <?php
                    $recent_posts = wp_get_recent_posts();
                    foreach( $recent_posts as $recent ) : ?>
                        <li>
                            <a href="<?php echo esc_url( get_permalink( $recent['ID'] ) ); ?>">
                                <?php echo esc_html($recent['post_title']); ?><br>
                                <?php echo esc_html(date('d F Y', strtotime($recent['post_date']))); ?>
                            </a>
                        </li>
                    <?php endforeach; ?>
            </div>
            <div class="sidebar">
                <h3>Articles</h3>
                <?php 
                    wp_get_archives('type=monthly');
                ?>
            </div>
        </div>
    <?php endif; ?>
</div>

<?php 
    get_footer();
?>
