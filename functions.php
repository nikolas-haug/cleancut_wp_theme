<?php 

// Register custom nav walker (bootstrap)
require_once('class-wp-bootstrap-navwalker.php');

// Theme support
function cleancut_theme_support() {
    // Nav menus
    register_nav_menus( array(
        'primary' => __('Primary Menu'),
        'footer'=> __('Footer Menu')
    ) );
}
add_action( 'after_setup_theme', 'cleancut_theme_support' );

// Add customizer functionality
require get_template_directory(  ) . '/inc/customizer.php';