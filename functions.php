<?php 
function add_theme_scripts() {
    // Bootstrap bundle includes Popper JS
    // Wordpress includes JQuery
    wp_enqueue_script('bootstrap_js', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js');
    wp_enqueue_style('bootstrap_css', get_template_directory_uri() . '/assets/css/bootstrap.min.css');
}

function alec_personal_customize_register($wp_customize)
{
    $wp_customize->add_section('custom_home_page', array(
        'title'         => 'Custom Home Page',
        'description'   => 'Settings section for this theme.',
        'priority'      => 120,
    ));

    // Given name for home page
    $wp_customize->add_setting('user_given_name', array(
        'default'   => 'John Smith',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize-> add_control('user_given_name_control', array(
        'label'     => 'Name to display on the front page',
        'section'   => 'custom_home_page',
        'settings'  => 'user_given_name',
        'type'      => 'text',
    ));

    define("nFeaturedPages", 3);

    for ($i = 0; $i < nFeaturedPages; $i++) {
        $wp_customize->add_setting('feature_page_' . $i, array(
            'sanitize_callback' => 'absint',
        ));

        $wp_customize-> add_control('feature_page_' . $i . '_control', array(
            'label'     => 'Feature Page ' . $i,
            'section'   => 'custom_home_page',
            'settings'  => 'feature_page_' . $i,
            'type'      => 'dropdown-pages',
        ));
    }
}

function register_menus() 
{
  register_nav_menu('header-menu', __('Header Menu', 'alec-personal'));
}

add_action('customize_register', 'alec_personal_customize_register');

add_action('wp_enqueue_scripts', 'add_theme_scripts');

add_action('init', 'register_menus');

// Custom navigation walker for bootstrap navbar
require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
