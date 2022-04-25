<?php 
    get_header(); 
?>

<article class="frontpage-content">

<?php
    if( have_posts() ) :

        while( have_posts() ) :

            the_post();

            the_content();

        endwhile;

    endif;
?>

</article>

<?php 
    get_footer();
?>