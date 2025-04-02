<?php
function pabau_theme_setup() {
    // Enqueue styles and scripts
    wp_enqueue_style('pabau-style', get_stylesheet_uri());
    wp_enqueue_script('jquery');
    wp_enqueue_script('pabau-custom-js', get_template_directory_uri() . '/js/custom.js', array('jquery'), '1.0', true);
}
add_action('wp_enqueue_scripts', 'pabau_theme_setup');

// Register navigation menu
register_nav_menus(array(
    'primary' => __('Primary Menu', 'pabau-custom-theme'),
));

// Localize script for AJAX
function pabau_localize_script() {
    wp_localize_script('pabau-custom-js', 'pabauAjax', array(
        'ajax_url' => admin_url('admin-ajax.php'),
    ));
}
add_action('wp_enqueue_scripts', 'pabau_localize_script');