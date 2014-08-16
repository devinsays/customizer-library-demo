<?php
/**
 * Customizer Library Demo functions and definitions
 *
 * @package Customizer Library Demo
 */

// Default styles
function demo_styles() {
	wp_enqueue_style( 'demo-style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'demo_styles' );

// Helper library for the theme customizer.
require get_template_directory() . '/inc/customizer-library/customizer-library.php';

// Define options for the theme customizer.
require get_template_directory() . '/inc/customizer-options.php';

// Output inline styles based on theme customizer selections.
require get_template_directory() . '/inc/styles.php';

// Additional filters and actions based on theme customizer selections.
require get_template_directory() . '/inc/mods.php';