<div class="single-post">

    <header class="single-post-header"> 

    <div class="post-title">
            <?php echo esc_html( get_the_title() ); ?>
            <div class="date"><?php the_time('d F Y'); ?></div>
    </div>

        <div class="tags"><?php the_tags(''); ?></div>

        <div>
            <?php if ( has_post_thumbnail() ) : ?>
                <img class="thumbnail" src="<?php esc_url( the_post_thumbnail_url('blog-small') ); ?>" alt="image">
        <?php else : ?>
                <img class="thumbnail" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/header.jpg" alt="image">
        <?php endif; ?>
        </div>

    </header>

    <div class="single-recipe-content">
        <header class="recipe-header">
            <div class="header-item">
                <p>Prep time</p> 
                <?php 
                   echo esc_html( get_field('prep_time') ); 
                ?>
            </div>
            <div class="header-item">
                <p>Cook time</p> 
            <?php echo esc_html( get_field('cook_time') ); ?>
            </div>
            <div class="header-item">
                <p>Serve</p> 
                <?php echo esc_html( get_field('serve') ); ?>
            </div>
        </header>
        <aside class="recipe-aside">
        <ul class="ingredients-list">
            <?php
                $incredients = get_field('ingredients');
                $array = explode(",", $incredients);

                foreach ($array as $item) { ?>
                    <li class='ingredients'><?php echo wp_kses_post($item); ?></li>
               <?php }
            ?>
        </ul>
        </aside>
        <section class="recipe-section">
        <?php
            echo wp_kses_post( the_field('instruction') );
        ?>
        </section>
    </div>

    <div class="tags">
        <?php 
        global $post;
        $tags = wp_get_post_terms($post->ID, 'recipe');
        if(!empty($tags)) :
            foreach ($tags as $tag) : ?>
                <span class="tag">
                    <a href="<?php echo esc_url( get_tag_link( $tag->term_id) );?>">
                        <i class="fas fa-tags"></i>
                        <?php echo esc_html( $tag->name ); ?>
                    </a>
                </span>
                <?php endforeach;
        endif; ?>
    </div>

    <div class="post_link_navigation">
        <?php 
        $prev_post = get_previous_post();
        $next_post = get_next_post();
        if(! empty($prev_post)) : ?>
        <span>Previous: <?php previous_post_link('%link', '%title'); ?></span>
        <?php endif;

        if(! empty($next_post)) : ?>
        <span>Next: <?php next_post_link('%link', '%title'); ?></span>
        <?php endif; ?>
    </div>

    <?php
    if(comments_open()) :
        comments_template(); 
    endif; ?>

</div>