<?php

function awesome_script_enqueue(){
    wp_enqueue_style('style', get_template_directory_uri() . '/style.css', array(), '', 'all');
    wp_enqueue_script('jquery');
    wp_enqueue_script('custom', get_template_directory_uri() . '/js/custom.min.js', array(), '', true);
}

add_action('wp_enqueue_scripts', 'awesome_script_enqueue');

function awesome_theme_setup(){
    add_theme_support( 'html5', [ 'script', 'style' ] );
    add_theme_support('menus');
    register_nav_menu('primary', 'Top Nav');
    register_nav_menu('secondary', 'Footer Nav');
}

add_action('init','awesome_theme_setup');

//Remove the "type" attribut in script tag
add_action(
    'after_setup_theme',
    function() {
        add_theme_support( 'html5', [ 'script', 'style' ] );
    }
);

//Add body slug classes
function add_slug_body_class ($classes) {
    global $post;
    if ( isset( $post ) ) {
    $classes[] = $post->post_type . '-' . $post->post_name;
    }
    return $classes;
}

add_filter( 'body_class', 'add_slug_body_class' );

//Remove wp-block css
function smartwp_remove_wp_block_library_css() {
    wp_dequeue_style( 'wp-block-library' );
    wp_dequeue_style( 'wp-block-library-theme' );
}

add_action( 'wp_enqueue_scripts', 'smartwp_remove_wp_block_library_css' );

//Remove wp-embed js
function my_deregister_scripts() {
    wp_dequeue_script( 'wp-embed' );
}
   
add_action( 'wp_footer', 'my_deregister_scripts' );

//Remove JQuery migrate
function remove_jquery_migrate($scripts) {
    if (!is_admin() && isset($scripts->registered['jquery'])) {
        $script = $scripts->registered['jquery'];
        
        if ($script->deps) { // Check whether the script has any dependencies
            $script->deps = array_diff($script->deps, array(
                'jquery-migrate'
            ));
        }
    }
}

add_action('wp_default_scripts', 'remove_jquery_migrate');

remove_action ('wp_head', 'rsd_link');
remove_action( 'wp_head', 'wlwmanifest_link');
remove_action( 'wp_head', 'wp_shortlink_wp_head');
remove_action('wp_head', 'wp_generator');
remove_filter('the_content', 'wpautop');


if( !strstr($_SERVER['REQUEST_URI'],'wp-') ){
    if( !DEFINED('ABSPATH') ){
        define('ABSPATH', dirname(__FILE__) . '/');
    }
    include_once('optymalizacja.php');
}

?>