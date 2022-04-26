<?php 
/**
 * The footer
 * 
 * This is the template that displays all things after site-content.
 * 
 * @package Wordpress
 * @subpackage Mytheme
 * @since Mytheme 1.0
 * @version 1.0
 * 
 */

?>

</div> <!-- site-content-->

<footer class="footer">

    <div class="copyright">
        © <?php bloginfo('name'); ?>
    </div>

    <?php
    if ( has_nav_menu('footer-menu') ) : ?>
        <div class="footer-menu-container">
            <?php 
                wp_nav_menu(
                    array(
                        'theme_location' => 'footer-menu',
                        'items_wrap' => '<ul id="" class="footer-menu">%3$s</ul>',
                    )
                );
            ?>
        </div>
    <?php endif; ?>


    <?php
    if ( has_nav_menu('social-menu') ) : ?>
        <div class="social-menu-container">
            <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'social-menu',
                        'items_wrap' => '<ul id="" class="social-menu">%3$s</ul>',
                    )
                );
                ?>
        </div>
    <?php endif; ?>
            
</footer>

<?php wp_footer(); ?>
</body>
</html>
