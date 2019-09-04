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
        'default'   => 'John',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize-> add_control('user_given_name_control', array(
        'label'     => 'Name you wish to be addressed by.',
        'section'   => 'custom_home_page',
        'settings'  => 'user_given_name',
        'type'      => 'text',
    ));
}

add_action('customize_register', 'alec_personal_customize_register');

add_action('wp_enqueue_scripts', 'add_theme_scripts');
