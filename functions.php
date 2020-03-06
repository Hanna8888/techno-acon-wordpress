<?php
/**
 * acorn functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package acorn
 */

function acorn_scripts() {
	
	wp_enqueue_style( 'bootstrap-cdn', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css');
    wp_enqueue_style( 'acorn-style', get_template_directory_uri() . '/style.css', array(), '1.2' );
    wp_enqueue_style( 'acorn-media', get_template_directory_uri() . '/assets/css/media-acorn.css', array(), '1.2' );
    wp_enqueue_style( 'owlcarousel', get_template_directory_uri() . '/assets/css/owl.carousel.min.css' );
    wp_enqueue_style( 'owlcarousel-theme', get_template_directory_uri() . '/assets/css/owl.theme.default.min.css', array(), '1.2' );
    wp_enqueue_style( 'myawesome', 'https://use.fontawesome.com/releases/v5.7.1/css/all.css');   
    wp_enqueue_style( 'acorn-google-fonts-awesome', 'https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'); 
    wp_enqueue_style( 'acorn-google-fonts-alegreya', 'https://fonts.googleapis.com/css?family=Alegreya+SC&display=swap&subset=cyrillic'); 
    wp_enqueue_style( 'acorn-google-fonts-concert', 'https://fonts.googleapis.com/css?family=Anton|Concert+One|Kalam:700|Oxanium:800&display=swap'); 
    wp_deregister_script( 'jquery');
    wp_register_script( 'jquery', get_template_directory_uri() . '/assets/js/jquery-3.4.1.min.js');
    wp_enqueue_script( 'jquery');
    wp_enqueue_script( 'bootstrap-js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js');
    wp_enqueue_script('owlcarousel-js', get_template_directory_uri() . '/assets/js/owl.carousel.min.js');
    wp_enqueue_script('carousel', get_template_directory_uri() . '/assets/js/main.js', array(), '1.2' );
    wp_enqueue_script( 'acorn-html5shiv', 'https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js');
    wp_script_add_data( 'acorn-html5shiv', 'conditional', 'lt IE9' );
}
add_action( 'wp_enqueue_scripts', 'acorn_scripts' );

require get_template_directory() . '/inc/config.php';

show_admin_bar( false );


