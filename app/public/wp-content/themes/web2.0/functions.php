<?php
function my_theme_enqueue_bootstrap() {
    // Enqueue Bootswatch Vapor CSS from CDN
    wp_enqueue_style('bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootswatch@5.3.3/dist/vapor/bootstrap.min.css', array(), '5.3.3', 'all');
    // Enqueue Bootstrap JS from CDN
    wp_enqueue_script('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js', array('jquery'), '5.3.3', true);
}

// Hook the function into the wp_enqueue_scripts action
add_action('wp_enqueue_scripts', 'my_theme_enqueue_bootstrap');

// Enqueue scripts and styles
function web2_enqueue_scripts() {
    wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_script( 'script', get_template_directory_uri() . '/script.js', array(), null, true );
}
add_action( 'wp_enqueue_scripts', 'web2_enqueue_scripts' );

// Add theme support
function web2_theme_setup() {
    add_theme_support( 'title-tag' );
}
add_action( 'after_setup_theme', 'web2_theme_setup' );

function bootStrapIcons() {
    wp_enqueue_style('icons', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css');
}
add_action('wp_enqueue_scripts', 'bootStrapIcons');