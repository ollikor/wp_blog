<div class="single-post">

    <header class="single-post-header"> 

    <div class="post-title">
            <?php the_title(); ?>
            <div class="date"><?php the_time('d F Y'); ?></div>
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

    <div class="single-recipe-content">
        <header class="recipe-header">
            <div class="header-item">
                <p>Prep time</p> 
                <?php the_field('prep_time'); ?>
            </div>
            <div class="header-item">
                <p>Cook time</p> 
            <?php the_field('cook_time'); ?>
            </div>
            <div class="header-item">
                <p>Serve</p> 
                <?php the_field('serve'); ?>
            </div>
        </header>
        <aside class="recipe-aside">
        <ul class="ingredients-list">
            <?php
                $incredients = get_field('ingredients');
                $array = explode(",", $incredients);

                foreach ($array as $item) {
                    echo "<li class='ingredients'>$item</li>";
                }
            ?>
        </ul>
        </aside>
        <section class="recipe-section">
        <?php
            
            the_field('instruction');
        ?>
        </section>
    </div>

    <div class="tags">
        <?php 
        // echo $post->ID;
        global $post;
        $tags = get_the_terms($post->ID, 'recipes');
        // $tags = get_the_tags();
        // print_r($tags);
        if(!empty($tags)) :
            foreach ($tags as $tag) : ?>
                <span class="tag">
                    <i class="fas fa-tags"></i>
                    <a href="<?php get_tag_link( $tag->term_id);?>">
                        <?php echo $tag->name; ?>
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