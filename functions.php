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

function create_case_study_post_type() {
    register_post_type('case_study',
        array(
            'labels' => array(
                'name' => __('Case Studies'),
                'singular_name' => __('Case Study'),
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'case-studies'),
            'show_in_rest' => true,
            'supports' => array('title', 'editor', 'thumbnail', 'custom-fields'),
            'menu_icon' => 'dashicons-clipboard',
        )
    );
}
add_action('init', 'create_case_study_post_type');
