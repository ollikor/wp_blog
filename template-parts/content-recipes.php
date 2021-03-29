<a class="card" href="<?php the_permalink(); ?>">

<?php if ( has_post_thumbnail() ) : ?>
                <img class="thumbnail" src="<?php the_post_thumbnail_url('thumbnail'); ?>" alt="image">
        <?php else : ?>
                <img class="thumbnail" src="<?php bloginfo('template_directory'); ?>/images/header.jpg" alt="image">
        <?php endif; ?>

        <h3><?php the_title(); ?></h3>

        <p><?php the_time('d F Y'); ?></p>

        <p>Serve: <?php the_field('serve'); ?> person</p>

        <p>Cook time: <?php the_field('cook_time'); ?></p>
        
</a>