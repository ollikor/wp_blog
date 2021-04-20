<a class="card" href="<?php echo esc_url( get_permalink() ); ?>">

<?php if ( has_post_thumbnail() ) : ?>
                <img class="thumbnail" src="<?php esc_url( the_post_thumbnail_url('blog-small') ); ?>" alt="image">
        <?php else : ?>
                <img class="thumbnail" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/default.jpg" alt="image">
        <?php endif; ?>

        <h3><?php echo esc_html( get_the_title() ); ?></h3>

        <p><?php echo esc_html( get_the_time('d F Y' ) ); ?></p>

        <p>Serve: <?php 
        
        echo esc_html( get_field('serve') ); ?> person</p>

        <p>Cook time: <?php 

        echo esc_html( get_field('cook_time') ); ?></p>
        
</a>