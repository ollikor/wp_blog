<?php 
    get_header(); 
?>

<article class="frontpage-content">

<?php
    if( have_posts() ){

        while( have_posts() ){

            the_post();
            the_content();

        }

    }
?>

<?php 
    dynamic_sidebar('frontpage-1'); 
?>

</article>

<?php 
    get_footer();
?>