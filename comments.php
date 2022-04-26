<?php 
/**
 * The comment template
 * 
 * 
 * @package Wordpress
 * @subpackage Mytheme
 * @since Mytheme 1.0
 * @version 1.0
 * 
 */
?>
<div class="comments-container">
    <h2>
        <?php
            if( have_comments()) :
                echo get_comments_number(). "comments";
            endif;
        ?>
    </h2>

    <div>
        <?php 
            if( have_comments() ) :
                wp_list_comments(
                    array(
                        'avatar_size' => 0,
                        'style' => 'div',
                    )
                );
            endif;
        ?>
    </div>
    
    <?php
    if( comments_open() ){
        comment_form(
            array(
                'class_form' => '',
                )
            );
        }
        ?>
</div>