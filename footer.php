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

    </div>

<?php wp_footer(); ?>
</body>
</html>
