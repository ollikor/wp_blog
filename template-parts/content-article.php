<div>
    <header>
        <div>
            <span><?php the_date(); ?></span>
            <span><?php the_tags(); ?></span>
            <span><?php comments_number(); ?></span>
        </div>
    </header>
<?php
the_content();
?>

<?php 
comments_template();
?>

</div>