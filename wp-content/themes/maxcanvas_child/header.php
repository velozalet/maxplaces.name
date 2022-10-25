<?php
/**
 * HEADER
 *
 * @package maxcanvas
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">

<!--For fonts googleapis-->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<!--/For fonts googleapis-->

<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
<?php if (strpos($_SERVER['HTTP_USER_AGENT'],"MSIE 8")) { header("X-UA-Compatible: IE=Edge");} ?>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php $get_queried_object = get_queried_object(); //dd($get_queried_object->post_name); ?>
	<mark id="breakpoint_check" style="display:none!important;"></mark>
	<!--Example:
		<a href="<?=esc_url(home_url('/'));?>"><img src="http://placehold.it/700x200&text=Logo" alt="<?=get_bloginfo('name');?>"></a>
		<a href="<?=get_site_url();?>"><img src="http://placehold.it/700x200&text=Logo" alt="<?=get_bloginfo('name');?>"></a>
		<img src="<?=get_stylesheet_directory_uri();?>/img/logo.svg" alt="North American Ecommerce Solutions">
	-->
<div class="parallax-bg"></div>

	<!--banner-->
	<div class="header-banner sticky-top">
		<div class="container text-center">
			<div class="row">
				<div class="col">
					<p class="text-center text-center mt-md-2 mt-sm-5 mt-5 my-2">Have questions about your next online marketing initiative? <span class="fw-bold">855.629.6584</span></p>
				</div>
			</div>
		</div>
	</div>
	<!--end banner-->
	<!--NavBar-->
	<nav class="navbar navbar-expand-md navbar-white <?php echo ($get_queried_object->post_name == 'home') ? '' : 'bg-white';?> p-0 py-3"> <!--sticky-top my-3-->
		<div class="container-lg">
			<a class="navbar-brand" href="<?php echo esc_url(home_url());?>">
				<img src="<?php echo get_stylesheet_directory_uri();?>/img/logo.svg" alt="North American Ecommerce Solutions">
			</a>
			<button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon position-relative mt-2"></span>
			</button>

			<?php
			//$menuitems = get_all_menu('primary','ASC'); //dd($menuitems);
			?>
			<div class="collapse navbar-collapse" id="navbarSupportedContent" style="background-position-y:1px;">
				<?php get_template_part('templates/component/header_menu_mobile');?>
				<?php get_template_part('templates/component/header_menu_desktop');?>
			</div>
		</div>
	</nav>
	<!--/NavBar-->
