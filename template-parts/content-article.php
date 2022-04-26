<div class="single-post">

    <header class="single-post-header"> 

        <div class="post-title">
            <?php echo esc_html( get_the_title() ); ?></span> - <span><?php the_date(); ?>
        </div>

        <div>
            <?php if ( has_post_thumbnail() ) : ?>
                    <img class="article-thumbnail" src="<?php esc_url( the_post_thumbnail_url() ); ?>" alt="image">
            <?php else : ?>
                    <img class="article-thumbnail" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/default.jpg" alt="image">
            <?php endif; ?>
        </div>

    </header>

    <div class="single-post-content">

        <?php the_content(); ?>
    </div>

    <div class="tags">
        <?php 
        $tags = get_the_tags();
        if(!empty($tags)) :
            foreach ($tags as $tag) : ?>
                <span class="tag">
                    <i class="fas fa-tags"></i>
                    <a href="<?php echo esc_url( get_tag_link( $tag->term_id) );?>">
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
        <?php echo wp_kses_post( get_previous_post_link('%link', '%title') ); ?>
        <?php endif;

        if(! empty($next_post)) : ?>
        <?php echo wp_kses_post( get_next_post_link('%link', '%title') ); ?>
        <?php endif; ?>
    </div>

    <?php comments_template(); ?>


</div>