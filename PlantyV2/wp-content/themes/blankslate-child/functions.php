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

/*   function ajouter_element_barre_outils($wp_admin_bar) {
    // Vérifiez si l'utilisateur est connecté
    if (is_user_logged_in()) {
        $args = array(
            'id'    => 'mon_element',    // ID unique pour l'élément
            'title' => 'Ma Rubrique',    // Texte à afficher
            'href'  => admin_url('admin.php?page=slug_de_ma_rubrique'),    // Lien vers votre page d'administration ou toute autre URL
            'meta'  => array('class' => 'ma-classe-personnalisee')    // Classes CSS optionnelles pour votre élément
        );
        $wp_admin_bar->add_node($args);
    }
}
add_action('admin_bar_menu', 'ajouter_element_barre_outils', 999); // 999 pour s'assurer que votre élément est ajouté à la fin

function restrict_admin() {

	if ( ! current_user_can( 'manage_options' ) && ( ! wp_doing_ajax() ) ) {
		wp_die( __( 'http://localhost/plantyV2/wp-admin/index.php' ) );
	}
}
add_action( 'admin_init', 'restrict_admin', 1 );*/

function add_search_form($items, $args) {  // Defined the function name based on the filter hook at the end

    if ($args->theme_location == 'main-menu') {
        $items .= '<li class="menu-item">';
        $items .= '<div class="nous-rencontrer"> <a href="nous-rencontrer">Nous rencontrer</a>';  // Corrected the spelling

        if (is_user_logged_in()) {
            $items .= '<a href="admin">Admin</a>';
        }

        $items .= '</div>';
        $items .= '<div class="commander"><a href="commander">Commander</a></div>';
        $items .= '</li>';
    }

    return $items;
}

add_filter('wp_nav_menu_items', 'add_search_form', 10, 2);

?>
