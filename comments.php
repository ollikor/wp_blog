<div class="comments-container">
    <h2>
        <?php
            if( ! have_comments()) {
                echo "Leave a comment";
            } else {
                echo get_comments_number(). "comments";
            }
        ?>
    </h2>

    <div>
        <?php 
            wp_list_comments(
                array(
                    'avatar_size' => 0,
                    'style' => 'div',
                )
            );
        ?>
    </div>
</div>

<?php
    if( comments_open() ){
        comment_form(
            array(
                'class_form' => '',
            )
        );
    }