<?php
/* Enqueue Styles */
if ( ! function_exists('mk_enqueue_styles') ) {
    function mk_enqueue_styles() {
        wp_enqueue_style( 'twenty-twenty-three-style', get_template_directory_uri() .'/style.css' );
    }
    add_action('wp_enqueue_scripts', 'mk_enqueue_styles');
}
