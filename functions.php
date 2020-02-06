<?php 

// Register custom nav walker (bootstrap)
require_once('class-wp-bootstrap-navwalker.php');

// Enqueue scripts
function cleancut_enqueue_scripts() {
    // jQuery
    wp_enqueue_script( 'jquery' );
}
add_action( 'wp_enqueue_scripts', 'cleancut_enqueue_scripts' );

// Theme support
function cleancut_theme_support() {
    // Post thumbnails
    add_theme_support( 'post-thumbnails' );

    // Nav menus
    register_nav_menus( array(
        'primary' => __('Primary Menu'),
        'footer'=> __('Footer Menu')
    ) );
}
add_action( 'after_setup_theme', 'cleancut_theme_support' );

// Widge locations
function init_widgets($id) {
    register_sidebar( array(
        'name' => 'Sidebar',
        'id' => 'sidebar',
        'before_widget' => '<div class="card card-body bg-light animated fadeInRight sidebar-widget">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));
    register_sidebar( array(
        'name' => 'Subnav',
        'id' => 'subnav',
        'before_widget' => '<div class="sub-nav">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="d-none">',
        'after_title' => '</h3>'
    ));
}
add_action( 'widgets_init', 'init_widgets' );

// Get top parent page
function get_top_parent() {
    global $post;
    if($post->post_parent) {
        $ancestors = array_reverse(get_post_ancestors( $post->ID ));
        return $ancestors[0];
    }
    return $post->ID;
}

// Add customizer functionality
require get_template_directory(  ) . '/inc/customizer.php';