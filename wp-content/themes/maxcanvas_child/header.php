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

<div class="parallax-bg"></div>

	<!--banner-->
	<?php if( get_field('supheader_text','options') ):?>
	<div class="header-banner sticky-top">
		<div class="container text-center">
			<div class="row">
				<div class="col text-center mt-md-2 mt-sm-5 mt-5 my-2">
					<?php echo get_field('supheader_text','options');?>
				</div>
			</div>
		</div>
	</div>
	<?php endif;?>
	<!--end banner-->

	<!--NavBar-->
	<nav class="navbar navbar-expand-md navbar-white <?php echo ($get_queried_object->post_name == 'home') ? '' : 'bg-white';?> p-0 py-3"> <!--sticky-top my-3-->
		<div class="container-lg">
			<a class="navbar-brand" href="<?php echo esc_url(home_url());?>">
				<?php if( get_field('site_logo','options') ):?>
					<img src="<?php echo get_field('site_logo','options')?>" alt="North American Ecommerce Solutions">
				<?php else:?>
					<img src="<?php echo get_stylesheet_directory_uri();?>/img/logo.svg" alt="North American Ecommerce Solutions">
				<?php endif;?>
			</a>
			<button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon position-relative mt-2"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent" style="background-position-y:1px;">
				<?php get_template_part('templates/component/header_menu_mobile');?>
				<?php get_template_part('templates/component/header_menu_desktop');?>
			</div>
		</div>
	</nav>
	<!--/NavBar-->
