<?php 
function add_theme_scripts() {
    // Bootstrap bundle includes Popper JS
    wp_enqueue_script('bootstrap_js', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js');
    wp_enqueue_style('bootstrap_css', get_template_directory_uri() . '/assets/css/bootstrap.min.css');
}

add_action('wp_enqueue_scripts', 'add_theme_scripts');
