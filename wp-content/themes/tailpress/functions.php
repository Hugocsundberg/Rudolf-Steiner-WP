<?php
declare(strict_types=1);

add_action('wp_enqueue_scripts', function() {
    wp_enqueue_script('main', get_stylesheet_directory_uri() . '/assets/dist/main.bundle.js', [], '1.0.0', true);
    // wp_enqueue_style('style', get_stylesheet_directory_uri() . '/assets/dist/main.css', [], '1.0.0', true);
    wp_enqueue_style('style', get_theme_file_uri('assets/dist/main.css'));
});