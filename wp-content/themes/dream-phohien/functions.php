<?php
function theme_enqueue_resources() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_script( 'navigation', get_stylesheet_directory_uri() . '/navigation.js', array('jquery') );
    wp_enqueue_script( 'theme-my-login', get_stylesheet_directory_uri() . '/theme-my-login.js', array('jquery') );
}
add_action( 'wp_enqueue_scripts', 'theme_enqueue_resources' );

function show_address() {
    //echo 'HELLO' . "\n";
}
add_action( 'wp_head', 'show_address' );
?>
