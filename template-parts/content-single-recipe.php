<div class="single-post">

    <header class="single-post-header"> 

    <div class="post-title">
            <?php the_title(); ?></span> - <span><?php the_date(); ?>
    </div>

        <div class="tags"><?php the_tags(''); ?></div>

        <div>
            <?php if ( has_post_thumbnail() ) : ?>
                    <img class="article-thumbnail" src="<?php the_post_thumbnail_url('thumbnail'); ?>" alt="image">
            <?php else : ?>
                    <img class="article-thumbnail" src="<?php bloginfo('template_directory'); ?>/images/header.jpg" alt="image">
            <?php endif; ?>
        </div>

    </header>

    <div class="single-post-content">
        <?php
        $terms = get_field('incredients');
        if( $terms ): ?>
            <ul>
            <?php foreach( $terms as $term ): ?>
                <h2><?php echo esc_html( $term->name ); ?></h2>
            <?php endforeach; ?>
            </ul>
        <?php endif; ?>
        <?php
            the_field('prep_time');
            the_field('cook_time');
            the_field('serve');
            the_content();
        ?>
    </div>

    <div class="post_link_navigation">
        <?php 
        $prev_post = get_previous_post();
        $next_post = get_next_post();
        if(! empty($prev_post)) : ?>
        <span>Previous article: <?php previous_post_link('%link', '%title'); ?></span>
        <?php endif;

        if(! empty($next_post)) : ?>
        <span>Next article: <?php next_post_link('%link', '%title'); ?></span>
        <?php endif; ?>
    </div>

    <?php comments_template(); ?>

</div>