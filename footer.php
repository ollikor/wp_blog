<footer class="footer">

            <div class="copyright">
                © Olli Korhonen
            </div>

            <aside class="aside">

                <h2 class="aside-title">Pages</h2>

                <?php 
                    wp_nav_menu(
                        array(
                            'theme_location' => 'footer-menu',
                            'items_wrap' => '<ul id="" class="footer-menu">%3$s</ul>',
                        )
                    );
                ?>

            </aside>
            
            <section class="section">

            <h2 class="social-title">Social media</h2>
                
                <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => 'footer-social-menu',
                            'items_wrap' => '<ul id="" class="social-menu">%3$s</ul>',
                            )
                        );
                ?>
                
            </section>
     
        </footer>

    </div>

</body>
</html>
