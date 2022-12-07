<?php
/**
 * HOLDS CUSTOM POST TYPES, TAXONOMIES, etc.
 */

define('THEME_URL', get_bloginfo('stylesheet_directory'));
define('THEME_PATH', get_stylesheet_directory());

/** Add `excerpt` for Posts & Pages*/
add_post_type_support( 'page', 'excerpt' );
add_post_type_support( 'post', 'excerpt' );
/**__/Add `excerpt` for Posts & Pages*/

/** Add featured image for Posts to REST API*/
function register_rest_images(){
	register_rest_field( array('post'),
		'fimg_url',
		array(
			'get_callback'    => 'get_rest_featured_image',
			'update_callback' => null,
			'schema'          => null,
		)
	);
} add_action('rest_api_init', 'register_rest_images' );
function get_rest_featured_image( $object, $field_name, $request ) {
	if( $object['featured_media'] ){
		$img = wp_get_attachment_image_src( $object['featured_media'], 'app-thumb' );
		return $img[0];
	}
	return false;
}
/**__/Add featured image for Posts to REST API*/


/** ADD CPT "services" and taxonomy for them */
	function services_cpt() {
		$labels = array(
			'name'                => _x( 'Services', 'Post Type General Name'),
			'singular_name'       => _x( 'Service', 'Post Type Singular Name'),
			'menu_name'           => __( 'Services'),
			'parent_item_colon'   => __( 'Parent Service'),
			'all_items'           => __( 'All Services'),
			'view_item'           => __( 'View Service'),
			'add_new_item'        => __( 'Add New Service'),
			'add_new'             => __( 'Add New'),
			'edit_item'           => __( 'Edit Service'),
			'update_item'         => __( 'Update Service'),
			'search_items'        => __( 'Search Service'),
			'not_found'           => __( 'Not Found'),
			'not_found_in_trash'  => __( 'Not found in Trash'),
		);
		$args = array(
			'label'               => __( 'Services'),
			'description'         => __( 'Service'),
			'labels'              => $labels,
			'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions'),
			'taxonomies'          => array( 'services-taxonomy' ),
			'hierarchical'        => false,
			'public'              => true,
			'show_ui'             => true,
			'show_in_menu'        => true,
			'show_in_nav_menus'   => true,
			'show_in_admin_bar'   => true,
			'menu_position'       => 3.1,
			'can_export'          => true,
			'has_archive'         => false,
			'rewrite' => ['slug'=>'services'],
			'exclude_from_search' => false,
			'publicly_queryable'  => true,
			'capability_type'     => 'post',
			'show_in_rest' => true,
			'menu_icon' => 'dashicons-archive',
		);
		register_post_type( 'services', $args );
	} add_action( 'init', 'services_cpt', 0 );
	function services_cpt_taxonomy() {
		register_taxonomy(
			'services-taxonomy',
			'services',
			array(
				'hierarchical' => true,
				'label' => 'Services Category',
				'query_var' => true,
				'has_archive' => false,
				'exclude_from_search' => true,
				'show_in_rest'  => true
			)
		);
	} add_action( 'init', 'services_cpt_taxonomy');
/**__/ADD CPT "services" and taxonomy for them */

/**ADD CPT "Testimonials" and taxonomy for them */
function testimonials_cpt() {
	$labels = array(
		'name'                => _x( 'Testimonials', 'Post Type General Name'),
		'singular_name'       => _x( 'Testimonial', 'Post Type Singular Name'),
		'menu_name'           => __( 'Testimonials'),
		'parent_item_colon'   => __( 'Parent Testimonial'),
		'all_items'           => __( 'All Testimonials'),
		'view_item'           => __( 'View Testimonial'),
		'add_new_item'        => __( 'Add New Testimonials'),
		'add_new'             => __( 'Add New'),
		'edit_item'           => __( 'Edit Testimonial'),
		'update_item'         => __( 'Update Testimonial'),
		'search_items'        => __( 'Search Testimonial'),
		'not_found'           => __( 'Not Found'),
		'not_found_in_trash'  => __( 'Not found in Trash'),
	);
	$args = array(
		'label'               => __( 'Testimonials'),
		'description'         => __( 'Testimonial'),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions'),
		'taxonomies'          => array( 'testimonials-taxonomy' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 3.1,
		'can_export'          => true,
		'has_archive'         => false,
		'rewrite' => ['slug'=>'testimonials'],
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'post',
		'show_in_rest' => true,
		'menu_icon' => 'dashicons-testimonial',
	);
	register_post_type( 'testimonials', $args );
} add_action( 'init', 'testimonials_cpt', 0 );
function testimonials_cpt_taxonomy() {
	register_taxonomy(
		'testimonials-taxonomy',
		'testimonials',
		array(
			'hierarchical' => true,
			'label' => 'Testimonials Category',
			'query_var' => true,
			'has_archive' => false,
			'exclude_from_search' => true,
			'show_in_rest'  => true
		)
	);
} add_action( 'init', 'testimonials_cpt_taxonomy');
/**__/ADD CPT "Testimonials" and taxonomy for them */

/**Custom Post Type "cases" adn taxonomy for them*/
function case_cases_cpt() {
	$labels = array(
		'name'                => _x( 'Cases', 'Post Type General Name'),
		'singular_name'       => _x( 'Case', 'Post Type Singular Name'),
		'menu_name'           => __( 'Case Studies'),
		'parent_item_colon'   => __( 'Parent Case'),
		'all_items'           => __( 'All Cases Studies'),
		'view_item'           => __( 'View Case'),
		'add_new_item'        => __( 'Add New Case Study'),
		'add_new'             => __( 'Add New'),
		'edit_item'           => __( 'Edit Case Study'),
		'update_item'         => __( 'Update Case Study'),
		'search_items'        => __( 'Search Case Study'),
		'not_found'           => __( 'Not Found'),
		'not_found_in_trash'  => __( 'Not found in Trash'),
	);
	$args = array(
		'label'               => __( 'Cases'),
		'description'         => __( 'Case'),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions'),
		'taxonomies'          => array( 'cases-taxonomy' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 3.6,
		'can_export'          => true,
		'has_archive'         => false,
		'rewrite' => ['slug'=>'cases'],
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'post',
		'show_in_rest' => true,
		'menu_icon' => 'dashicons-portfolio',
	);
	register_post_type( 'cases', $args );
} add_action( 'init', 'case_cases_cpt', 0 );
function cases_cpt_taxonomy() {
	register_taxonomy(
		'cases-taxonomy',
		'cases',
		array(
			'hierarchical' => true,
			'label' => 'Case Studies Category',
			'query_var' => true,
			'has_archive' => false,
			'exclude_from_search' => true,
			'show_in_rest'  => true
		)
	);
} add_action( 'init', 'cases_cpt_taxonomy');
/**__/Custom Post Type "cases" adn taxonomy for them*/

/** ADD CPT "cities" and taxonomy for them */
function cities_cpt() {
	$labels = array(
		'name'                => _x( 'Cities', 'Post Type General Name'),
		'singular_name'       => _x( 'City', 'Post Type Singular Name'),
		'menu_name'           => __( 'Cities'),
		'parent_item_colon'   => __( 'Parent City'),
		'all_items'           => __( 'All Cities'),
		'view_item'           => __( 'View City'),
		'add_new_item'        => __( 'Add New City'),
		'add_new'             => __( 'Add New'),
		'edit_item'           => __( 'Edit City'),
		'update_item'         => __( 'Update City'),
		'search_items'        => __( 'Search City'),
		'not_found'           => __( 'Not Found'),
		'not_found_in_trash'  => __( 'Not found in Trash'),
	);
	$args = array(
		'label'               => __( 'Cities'),
		'description'         => __( 'City'),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions'),
		'taxonomies'          => array( 'cities-taxonomy' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 3.1,
		'can_export'          => true,
		'has_archive'         => false,
		'rewrite' => ['slug'=>'cities'],
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'post',
		'show_in_rest' => true,
		'menu_icon' => 'dashicons-admin-multisite',
	);
	register_post_type( 'cities', $args );
} add_action( 'init', 'cities_cpt', 0 );
function cities_cpt_taxonomy() {
	register_taxonomy(
		'cities-taxonomy',
		'cities',
		array(
			'hierarchical' => true,
			'label' => 'Cities Category',
			'query_var' => true,
			'has_archive' => false,
			'exclude_from_search' => true,
			'show_in_rest'  => true
		)
	);
} add_action( 'init', 'cities_cpt_taxonomy');
/**__/ADD CPT "cities" and taxonomy for them */
