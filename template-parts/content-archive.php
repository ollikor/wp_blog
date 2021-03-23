<div class="card"> 

<img class="thumbnail" src="<?php the_post_thumbnail_url(); ?>" alt="image">
<h3><?php the_title(); ?></h3>
<div><?php the_date(); ?></div>
<div><?php comments_number(); ?></div>

<?php
the_excerpt();
?>

<a href="<?php the_permalink(); ?>">Read more &rarr;</a>

</div>