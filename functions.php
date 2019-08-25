<?php

function awesome_script_enqueue(){
    wp_enqueue_style('style', get_template_directory_uri() . '/style.css', array(), '', 'all');
    wp_enqueue_script('jquery');
    wp_enqueue_script('custom', get_template_directory_uri() . '/js/custom.js', array(), '', true);
}

add_action('wp_enqueue_scripts', 'awesome_script_enqueue');

function awesome_theme_setup(){
    add_theme_support('menus');
    register_nav_menu('primary', 'Top Nav');
    register_nav_menu('secondary', 'Footer Nav');
}

add_action('init','awesome_theme_setup');

//Page Slug Body Class
function add_slug_body_class( $classes ) {
    global $post;
    if ( isset( $post ) ) {
    $classes[] = $post->post_type . '-' . $post->post_name;
    }
    return $classes;
}

add_filter( 'body_class', 'add_slug_body_class' );

remove_action ('wp_head', 'rsd_link');
remove_action( 'wp_head', 'wlwmanifest_link');
remove_action( 'wp_head', 'wp_shortlink_wp_head');
remove_action('wp_head', 'wp_generator');
remove_filter('the_content', 'wpautop');

?>
