<?php
/**
 * EXTRAS
 */

/** Removes access to Appearance>Editor for admin */
function remove_editor_menu() {
  remove_action('admin_menu', '_add_themes_utility_last', 101);
}
add_action('_admin_menu', 'remove_editor_menu', 1);


// ENABLE THIS TO REMOVE ADMIN BAR WHEN LOGGED IN ON THE SITE
// add_filter('wp_head','custom_admin_bar_style_frontend', 99);
function custom_admin_bar_style_frontend() {
    if ( is_super_admin() ) {
        echo '<style type="text/css" media="screen">
                    html { margin-top: 32px !important; height: calc(100% - 32px); }
                    * html body { margin-top: 32px !important; }
                    @media screen and ( max-width: 782px ) {
                        html { margin-top: 46px !important; }
                        * html body { margin-top: 46px !important; height: calc(100% - 32px); }
                    }
                  </style>';
    } else {
        echo '<style type="text/css" media="screen">
                  html { margin-top: 0px !important; }
                  * html body { margin-top: 0px !important; }
                  </style>';
    }
}

add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);
function add_additional_class_on_li($classes, $item, $args) {
	if(isset($args->add_li_class)) {
		$classes[] = $args->add_li_class;
	}
	return $classes;
}

add_filter( 'nav_menu_link_attributes', 'add_menu_link_class', 1, 3 );
function add_menu_link_class( $atts, $item, $args ) {
	if (property_exists($args, 'link_class')) {
		$atts['class'] = $args->link_class;
	}
	return $atts;
}


/** !!!!!!!!!!!!!!!!!! */
/*
	class Custom_Submenu_Container extends Walker_Nav_Menu {
		function start_lvl( &$output, $depth = 0, $args = array() ) {
			$indent = str_repeat("\t", $depth);
			$output .= "\n$indent<div class='menu__dropdown'><div class='menu__grid'><div class='menu__col'><ul class='menu__sub-list'>\n";
		}
		function end_lvl( &$output, $depth = 0, $args = array() ) {
			$indent = str_repeat("\t", $depth);
			$output .= "$indent</ul></div></div></div>\n";
		}
	}
*/

function dd($data){
	echo '<pre>', var_dump($data), '</pre>';
}

function get_numerics($str) {
	preg_match_all('/\d+/', $str, $matches);
	return implode("",$matches[0]);
}

function cut_string($string,$length){
	$string = strip_tags($string);
	$string = mb_substr($string, 0, $length,'UTF-8');
	$position = mb_strrpos($string, ' ', 'UTF-8');
	$string = mb_substr($string, 0, $position, 'UTF-8');
	$string = rtrim($string, "?!,.-");
	$string .= ' ...';
	return $string;
}

function get_all_menu($menu_slug, $order = 'ASC'){
	$menu_name = $menu_slug; //menu slug
	$locations = get_nav_menu_locations();
	$menu = wp_get_nav_menu_object( $locations[$menu_name] );
	$menuitems = wp_get_nav_menu_items( $menu->term_id, array('order' => $order) );

	if($order == 'DESC'){
		return array_reverse($menuitems);
	}else{
		return $menuitems;
	}
}

function get_subitems_for_menuitem($all_menu_arr, $ID_menuitem, $order= 'ASC'){
	$result = [];
	foreach( $all_menu_arr as $item_sub_menu ){
		if( $item_sub_menu-> menu_item_parent == $ID_menuitem ){ array_push($result, $item_sub_menu); }
	}

	if($order == 'DESC'){
		return array_reverse($result);
	}else{
		return $result;
	}
}

function get_embed_link_youtube($original_youtube_link){
	return str_replace("watch?v=","embed/", $original_youtube_link);
}

function get_needs_posts($post_type, $numberposts, $category, $category_name, $orderby, $order){
	$posts = get_posts( array(
		'numberposts' => $numberposts,
		'category'    => $category,
		'category_name' => $category_name,
		'orderby'     => $orderby,
		'order'       => $order,
		'include'     => array(),
		'exclude'     => array(),
		'meta_key'    => '',
		'meta_value'  =>'',
		'post_type'   => $post_type,
		'suppress_filters' => false,
	) );
	return $posts;
}

function get_posts_for_pagination($post_type, $posts_per_page, $post_status, $category, $category_name, $orderby, $order){
	$posts = get_posts( array(
		'post_status' => $post_status,
		'category'    => $category,
		'category_name' => $category_name,
		'orderby'     => $orderby,
		'order'       => $order,
		'post_type'   => $post_type,
		'posts_per_page' => $posts_per_page,
		'paged' => ( get_query_var('paged') ? get_query_var('paged') : 1 ), //'paged' - which page to start from, usually from the 1st
		/*'suppress_filters' => false,*/
	) );
	return $posts;
}

function posts_navigation_simple($posts_per_page, $post_type, $post_status, $category, $category_name, $orderby, $order, $page_pagination_part){
	echo '<ul class="pagination">';
	$all_posts_for_count = get_posts(
		array(
			'post_type' => $post_type,
			'post_status' => $post_status,
			'category'    => $category,
			'category_name' => $category_name,
			'orderby' => $orderby,
			'order' => $order,
			'posts_per_page' => $posts_per_page,
		)
	);
	$all_posts_cnt = count($all_posts_for_count);

	$pages_cnt_total = $all_posts_cnt/$posts_per_page;

	$decimal_part = floor($pages_cnt_total); //3
	if( $pages_cnt_total == $decimal_part ){
		$pages_cnt_total = $decimal_part;
	}elseif( $pages_cnt_total > $decimal_part && $pages_cnt_total < $decimal_part + 1 ){
		$pages_cnt_total = $decimal_part + 1;
	}
	$current_page_number = get_query_var('paged');

	if( $current_page_number > 1 ):
		printf(
			'<li class="page-item">
            <a class="page-link" href="%spage/%s/" aria-label="Previous"> <span aria-hidden="true">&laquo;</span> </a>
        </li>', home_url($page_pagination_part), ($current_page_number - 1)
		);
	endif;

	for($cnt_iteration = 0; $cnt_iteration <= $pages_cnt_total; $cnt_iteration++):
		if( !$cnt_iteration == 0):
			if( $current_page_number == 0 ){ $current_page_number = 1; }

			if( $current_page_number === $cnt_iteration ){
				printf('<li class="page-item active"><span class="page-link">%u</span></li>',$current_page_number);
			}else{
				printf(
					'<li class="page-item"><a class="page-link" href="%spage/%u/">%u</a></li>', home_url($page_pagination_part), $cnt_iteration, $cnt_iteration
				);
			}
		endif;
	endfor;

	if( $current_page_number < $pages_cnt_total ):
		printf(
			'<li class="page-item">
            <a class="page-link" href="%spage/%u/" aria-label="Next"> <span aria-hidden="true">&raquo;</span> </a>
        </li>', home_url($page_pagination_part), ($current_page_number + 1)
		);
	endif;
	echo '</ul>';
}

function posts_navigation($posts_per_page, $post_type, $post_status, $category, $category_name, $orderby, $order){
	$args =  array(
		'post_type' => $post_type,
		'post_status' => $post_status,
		'category'    => $category,
		'category_name' => $category_name,
		'orderby' => $orderby,
		'order' => $order,
		'posts_per_page' => $posts_per_page,
		'paged' => ( get_query_var('paged') ? get_query_var('paged') : 1 ),
	);
	$query = new WP_Query($args);
	$max_num_pages = $query->max_num_pages;

	/**Stop execution if there's only 1 page*/
	if( $max_num_pages <= 1 ){ return; }
	$paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;
	/** Add current page to the array */
	if ( $paged >= 1 ){ $links[] = $paged; }
	/**Add the pages around the current page to the array*/
	if( $paged >= 3 ){
		$links[] = $paged - 1;
		$links[] = $paged - 2;
	}
	if( ( $paged + 2 ) <= $max_num_pages ) {
		$links[] = $paged + 2;
		$links[] = $paged + 1;
	}

	echo '<ul class="pagination">' . "\n";
	/**Previous Post Link*/
	if( get_previous_posts_link('Prev', $max_num_pages) ){ printf( '<li class="me-3">%s</li>' . "\n", get_previous_posts_link('<i class="fa fa-angle-left"></i>', $max_num_pages) ); }

	/**Link to first page, plus ellipses if necessary*/
	if ( !in_array( 1, $links ) ) {
		$class = 1 == $paged ? ' class="active++"' : '';
		printf( '<li class="page-item" %s><a class="page-link" href="%s">0%s</a></li>' . "\n", $class, esc_url( get_pagenum_link(1 ) ), '1' );
		if ( ! in_array( 2, $links ) )
			echo '<li style="margin:0 5px; font-size:1.2rem;">...</li>';
	}

	/**Link to current page, plus 2 pages in either direction if necessary*/
	sort( $links );
	foreach ( (array) $links as $link ) {
		$class = $paged == $link ? ' class="page-item active"' : '';
		printf( '<li %s><a class="page-link" href="%s">0%s</a></li>' . "\n", $class, esc_url( get_pagenum_link($link) ), $link );
	}
	/**Link to last page, plus ellipses if necessary*/
	if ( ! in_array( $max_num_pages, $links ) ) {
		if ( ! in_array( $max_num_pages - 1, $links ) )
			echo '<li style="margin:0 5px; font-size:1.2rem;">...</li>' . "\n";
		$class = $paged == $max_num_pages ? ' class="active"' : '';
		printf( '<li class="page-item" %s><a class="page-link" href="%s">0%s</a></li>' . "\n", $class, esc_url( get_pagenum_link($max_num_pages) ), $max_num_pages );
	}

	/** Next Post Link */
	if( get_next_posts_link('Next', $max_num_pages) ){ printf( '<li class="ms-3">%s</li>' . "\n", get_next_posts_link('<i class="fa fa-angle-right"></i>', $max_num_pages) ); }
	echo '</ul>' . "\n";
}
