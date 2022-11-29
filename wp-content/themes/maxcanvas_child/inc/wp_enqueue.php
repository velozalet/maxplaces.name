<?php
/**
 * SCRIPTS / STYLES
 */

/** ADD styles and scripts for Theme */
if ( ! function_exists( 'maxcanvas_child_scripts_styles' ) ):
	function maxcanvas_child_scripts_styles() {
	//____________________________________include fonts:
		wp_enqueue_style( 'inter_font', 'https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap', array() );
		wp_enqueue_style( 'font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css' );
	//____________________________________include styles:
		wp_enqueue_style( 'wow-css', get_stylesheet_directory_uri() . '/wow-animation/animate.min.css', array() );
		wp_enqueue_style( 'choices-select2-css', 'https://cdn.jsdelivr.net/npm/choices.js@9.0.1/public/assets/styles/choices.min.css', array() ); //https://github.com/Choices-js/Choices | https://choices-js.github.io/Choices/
		wp_enqueue_style( 'splideslider-css', get_stylesheet_directory_uri() . '/splide_slider/splide.min.css', array() );
		wp_enqueue_style('bootstrap5-scc', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css', array());
		wp_enqueue_style('main-css', get_stylesheet_directory_uri() . '/css/main.css', array());
	 /*
		 if( is_front_page() ): wp_enqueue_style('home-css', get_stylesheet_directory_uri() . '/css/home.css'); endif;
		 if( is_page_template('templates/about-us.php') ): wp_enqueue_style('about_us-css', get_stylesheet_directory_uri() . '/css/about_us.css'); endif;
			etc...
	 */

	//____________________________________include scripts:
		wp_enqueue_script('wow-script', get_stylesheet_directory_uri() . '/wow-animation/wow.min.js', array(), false, true); /*Need initial in JS-file --> new WOW().init(); Also see simple library: https://animate.style/*/
		wp_enqueue_script('choices-select2-js', 'https://cdn.jsdelivr.net/npm/choices.js@9.0.1/public/assets/scripts/choices.min.js', array(), true); /*Need initial in JS-file --> const choices = new Choices( document.querySelector('.js-choice') );*/
		wp_enqueue_script('splideslider-js', get_stylesheet_directory_uri() . '/splide_slider/splide.min.js', array(), false, true);
		wp_enqueue_script('bootstrap5-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js', array(), true);
		wp_enqueue_script('main-js', get_stylesheet_directory_uri() . '/js/main.js', array(), false, true);
	  /*
		if( is_front_page() ): wp_enqueue_script('home-js', get_stylesheet_directory_uri() . '/js/home.js'); endif;
		if( is_page_template('templates/about-us.php') ): wp_enqueue_script('about_us-js', get_stylesheet_directory_uri() . '/js/about_us.js'); endif;
			etc...
	 */

		wp_localize_script('main-js','globalData', array(
			'nonce' => wp_create_nonce('wp_rest'),
			'siteURL' => get_site_url(),
			'testStr' => 'This is test string...'
		));
	}
endif;
add_action('wp_enqueue_scripts', 'maxcanvas_child_scripts_styles', 20 );

/** ADD styles and scripts for Admin-Panel */
if( !function_exists( 'custom_admin_style' ) ):
	function maxcanvas_admin_scripts_styles() {
		wp_enqueue_style('admin-css', get_stylesheet_directory_uri() . '/css/admin.css');
	}
	add_action('admin_enqueue_scripts', 'maxcanvas_admin_scripts_styles');
endif;
