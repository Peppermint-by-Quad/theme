<?php 
if(!defined('QUAD_THEME_DIR')) {
	define('QUAD_THEME_DIR', WP_CONTENT_URL . '/themes/' . get_template() . '/');
}

// Adding a menu
function custom_menu() {
    register_nav_menu('nav-menu',__( 'Nav menu' ));
}
add_action('init', 'custom_menu');

