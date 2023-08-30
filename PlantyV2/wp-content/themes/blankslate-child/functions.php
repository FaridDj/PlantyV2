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



function add_search_form($items, $args) { 

    if ($args->theme_location == 'main-menu') {
        $items .= '<li class="menu-item">';
        $items .= '<div class="nous-rencontrer"> <a href="nous-rencontrer">Nous rencontrer</a>';  // Corrected the spelling

        if (is_user_logged_in()) {
            $items .= '<a href="wp-admin">Admin</a>';
        }

        $items .= '</div>';
        $items .= '<div class="commander"><a href="commander">Commander</a></div>';
        $items .= '</li>';
    }

    return $items;
}

add_filter('wp_nav_menu_items', 'add_search_form', 10, 2);

?>
