<?php

/**
 * Plugin Name: custom login form
 * Author: Olli Korhonen
 * Author URI: https://ollikor.github.io/
 * Version: 0.1.0
 */

function custom_login_styles() { ?>
    <style type="text/css">
        .login {
        background-color: #ffab00;
        }
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'custom_login_styles' );