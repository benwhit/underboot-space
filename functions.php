<?php
/**
 * underboot functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package underboot
 */

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {

	// Enqueue CSS Files
	// # https://developer.wordpress.org/reference/functions/wp_enqueue_style/
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'owl-carousel', get_stylesheet_directory_uri() . '/css/owl.carousel.css' );
    wp_enqueue_style( 'owl-theme', get_stylesheet_directory_uri() . '/css/owl.theme.default.min.css' );
    wp_enqueue_style( 'animate-css', get_stylesheet_directory_uri() . '/css/animate.css' );

	// Enqueue JS Files
	// # https://developer.wordpress.org/reference/functions/wp_enqueue_script/
    wp_enqueue_script( 'custom', get_stylesheet_directory_uri() . '/js/custom.js', array(), '1.0.0', true );
    wp_enqueue_script( 'owl-carousel', get_stylesheet_directory_uri() . '/js/owl.carousel.min.js', array(), '', true );

}
?>