<?php
/**Declare Woocommerce Support, Can be removed if woocommerce is not necessary */
/*
	add_action( 'after_setup_theme', 'woocommerce_support' );
	if ( !function_exists( 'woocommerce_support' ) ) {
	  function woocommerce_support() {
		  add_theme_support( 'woocommerce' );
	  }
	}
*/

/** Navigation locations */
register_nav_menus( array(
	'primary' => __('Primary Menu', 'maxcanvas'),
	'secondary' => __('Footer Menu ', 'maxcanvas'),
	'sub_secondary' => __('Sub Footer Menu', 'maxcanvas'),
) );

/** ACF Pro Global page setup */
if( function_exists('acf_add_options_page') ) {
	acf_add_options_page();
	acf_add_options_sub_page('Site settings');
	acf_add_options_sub_page('Header settings');
	acf_add_options_sub_page('Footer settings');
}

//Add logo in Theme customize
add_action('after_setup_theme', 'themename_custom_logo_setup' );
function themename_custom_logo_setup() {
	$args = array(
		'height'               => 100,
		'width'                => 400,
		'flex-height'          => true,
		'flex-width'           => true,
		'header-text'          => array( 'site-title', 'site-description' ),
		'unlink-homepage-logo' => false,
	);
	add_theme_support('custom-logo', $args );
}

require_once('inc/init.php'); //CUSTOM POST TYPE
require_once('inc/wp_enqueue.php'); //SCRIPTS/STYLES
require_once('inc/widgets.php'); //WIDGETS
require_once('inc/extras.php'); //EXTRAS

