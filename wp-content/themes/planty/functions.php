<?php

// Action qui permet de charger des scripts dans notre thème
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
function theme_enqueue_styles(){
    // Chargement du style.css du thème parent twenty twenty
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');

 wp_enqueue_style( 'parent-style' , get_template_directory_uri() . '/style.css' );
    // Chargement du css/theme.css pour nos personnalisations
   wp_enqueue_style( 'theme-style' , get_stylesheet_directory_uri() . '/css/theme.css' , array (), filemtime(get_stylesheet_directory() . '/css/theme.css' ));
//
    // Gestion des menus
function enregistre_mon_menu() {
    register_nav_menu( 'menu_principal', __( 'Menu principal' ) );
}
add_action( 'init', 'enregistre_mon_menu' );
}
//ajouter une nouvelle zone de menu à mon thème
function register_my_menu() {
  register_nav_menu('footer-menu',__( 'Menu Footer' ));
}
add_action( 'init', 'register_my_menu' );

add_filter('wp_nav_menu_items', 'crunchify_add_login_logout_menu', 10, 2);
function crunchify_add_login_logout_menu($items, $args) {
ob_start();
wp_loginout('index.php');
$loginoutlink = ob_get_contents();
ob_end_clean();
$items .= '<li class="boutonconnexion">'. $loginoutlink .'</li>';
return $items;
}
