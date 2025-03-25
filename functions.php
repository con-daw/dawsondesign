<?php
function custom_theme_enqueue_styles() {
    wp_enqueue_style('tailwindcss', get_stylesheet_uri(), [], filemtime(get_stylesheet_directory() . '/style.css'));
}
add_action('wp_enqueue_scripts', 'custom_theme_enqueue_styles');


// Register the template
function register_front_page_template($templates) {
    $templates['front-page-custom.php'] = 'Custom Front Page';
    return $templates;
}
add_filter('theme_page_templates', 'register_front_page_template');
