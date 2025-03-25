<?php
wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css',false,'1.1','all');
// ===========
// = MENU =
// ===========

// Register Custom Navigation Walker
require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';

add_theme_support( 'nav-menus' );
register_nav_menus(array('menu' => __('menu')));

// ===========
// = LOGO DESDE WORDPRESS =
// ===========
add_theme_support( 'custom-logo', array(
	'height'      => 200,
	'width'       => 400,
	'flex-height' => true,
	'flex-width'  => true,
	'header-text' => array( 'site-title', 'site-description' ),
) );

?>
