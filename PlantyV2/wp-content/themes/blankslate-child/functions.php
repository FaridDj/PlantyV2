<?php
/**
 * blankslate Child Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package blankslate Child
 * @since 6.1
 */

/**
 * Define Constants
 */
define( 'CHILD_THEME_BLANKSLATE_CHILD_VERSION', '6.1' );

/**
 * Enqueue styles
 */

add_action('wp_enqueue_scripts', 'theme_enqueue_styles');

function theme_enqueue_styles()
{
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/css/theme.css',
     array(), filemtime(get_stylesheet_directory() . '/css/theme.css'));
}

/*Personnaliser le logo*/
   add_theme_support( 'custom-logo' );


