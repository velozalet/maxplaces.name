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

			<div class="collapse navbar-collapse" id="navbarSupportedContent" style="background-position-y:1px;">

				<ul id="mobile" class="navbar-nav mb-2 mb-lg-0 mx-md-0 mx-3 d-md-none d-block">
					<li class="nav-item me-lg-3 me-0 mt-md-2 mt-0 dropdown" data-itemid="55" data-itemobject="page">
						<a class="nav-link text-uppercase dropdown-toggle " href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">About us</a>
						<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
							<li class="" data-itemid="75" data-itemobject="services">
								<a class="dropdown-item" href="#">In the News</a>
							</li>
							<li class="" data-itemid="74" data-itemobject="services">
								<a class="dropdown-item" href="#">Cities Served</a>
							</li>
							<li class="" data-itemid="73" data-itemobject="services">
								<a class="dropdown-item" href="#">Industry Served</a>
							</li>
						</ul>
					</li>

					<li class="nav-item me-lg-3 me-0 mt-md-2 mt-0 dropdown" data-itemid="55" data-itemobject="page">
						<a class="nav-link text-uppercase dropdown-toggle " href="https://www.naecsol.com/services/" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Services</a>
						<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
							<li class="" data-itemid="75" data-itemobject="services">
								<a class="dropdown-item" href="#">Search Engine Optimization</a>
							</li>
							<li class="" data-itemid="74" data-itemobject="services">
								<a class="dropdown-item" href="#">Search Engine Marketing</a>
							</li>
							<li class="" data-itemid="73" data-itemobject="services">
								<a class="dropdown-item" href="#">Local Search</a>
							</li>
							<li class="" data-itemid="73" data-itemobject="services">
								<a class="dropdown-item" href="#">Social Media</a>
							</li>
							<li class="" data-itemid="73" data-itemobject="services">
								<a class="dropdown-item" href="#">Reputation Management</a>
							</li>
							<li class="" data-itemid="73" data-itemobject="services">
								<a class="dropdown-item" href="#">Video Marketing</a>
							</li>
							<li class="" data-itemid="73" data-itemobject="services">
								<a class="dropdown-item" href="#">Google Penalty Recovery</a>
							</li>
						</ul>
					</li>

					<li class="nav-item me-lg-3 me-0 mt-md-2 mt-0" data-itemid="54" data-itemobject="page">
						<a class="nav-link text-uppercase" href="#">Blog</a>
					</li>
					<li class="nav-item me-lg-3 me-0 mt-md-2 mt-0" data-itemid="53" data-itemobject="page">
						<a class="nav-link text-uppercase current-menu-item" href="#">Contact</a>
					</li>

					<li class="nav-item nav-item-btn mt-md-0 mt-4">
						<a href="#" class="text-center button button--blue-gradient mx-md-2 me-0" target="_self">Request</a>
					</li>
					<li class="nav-item nav-item-social-icons mt-md-0 mt-4 d-md-none d-block">
						<span class="me-3">
							<a href="#" class="" target="_blank">
								<img src="<?php echo get_stylesheet_directory_uri();?>/img/social-icons/facebook-header-mobile-social-icon.png" alt="facebook">
							</a>
						</span>
						<span class="me-3">
							<a href="#" class="" target="_blank">
								<img src="<?php echo get_stylesheet_directory_uri();?>/img/social-icons/in-header-mobile-social-icon.png" alt="linkdin">
							</a>
						</span>
						<span class="me-3">
							<a href="#" class="" target="_blank">
								<img src="<?php echo get_stylesheet_directory_uri();?>/img/social-icons/twitter-header-mobile-social-icon.png" alt="twitter">
							</a>
						</span>
						<span class="me-3">
							<a href="#" class="" target="_blank">
								<img src="<?php echo get_stylesheet_directory_uri();?>/img/social-icons/insta-header-mobile-social-icon.png" alt="instagram">
							</a>
						</span>
					</li>
				</ul>

				<ul id="desktop_tablet" class="navbar-nav mb-2 mb-lg-0 mx-md-0 mx-3 d-md-flex d-none">
					<li class="nav-item me-lg-3 me-0 mt-md-2 mt-0 dropdown" data-itemid="55" data-itemobject="page">
						<a class="nav-link text-uppercase dropdown-toggle " href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
							<span>About us <hr></span>
						</a>
						<ul class="dropdown-menu pb-5" aria-labelledby="navbarDropdown">
							<div class="container-lg container-desktop_tablet">
								<hr class="position-relative">
								<div class="row">
									<div class="col dropdown-menu-col">
										<li class="" data-itemid="75" data-itemobject="services">
											<a class="dropdown-item" href="#">In the News</a>
										</li>
									</div>
									<div class="col dropdown-menu-col">
										<li class="" data-itemid="74" data-itemobject="services">
											<a class="dropdown-item" href="#">Cities Served</a>
										</li>
									</div>
									<div class="col dropdown-menu-col">
										<li class="" data-itemid="73" data-itemobject="services">
											<a class="dropdown-item" href="#">Industry Served</a>
										</li>
									</div>
								</div>
							</div>
						</ul>
					</li>

					<li class="nav-item me-lg-3 me-0 mt-md-2 mt-0 dropdown" data-itemid="55" data-itemobject="page">
						<a class="nav-link text-uppercase dropdown-toggle " href="https://www.naecsol.com/services/" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
							<span>Services <hr></span>
						</a>
						<ul class="dropdown-menu pb-5" aria-labelledby="navbarDropdown">
							<div class="container-lg container-desktop_tablet">
								<hr class="position-relative">
								<div class="row">
									<div class="col dropdown-menu-col">
										<li class="" data-itemid="75" data-itemobject="services">
											<a class="dropdown-item" href="#">Search Engine Optimization</a>
										</li>
										<li class="" data-itemid="74" data-itemobject="services">
											<a class="dropdown-item" href="#">Search Engine Marketing</a>
										</li>
									</div>
									<div class="col dropdown-menu-col">
										<li class="" data-itemid="73" data-itemobject="services">
											<a class="dropdown-item" href="#">Reputation Management</a>
										</li>
										<li class="" data-itemid="73" data-itemobject="services">
											<a class="dropdown-item" href="#">Google Penalty Recovery</a>
										</li>
									</div>
									<div class="col dropdown-menu-col">
										<li class="" data-itemid="73" data-itemobject="services">
											<a class="dropdown-item" href="#">Local Search</a>
										</li>
										<li class="" data-itemid="73" data-itemobject="services">
											<a class="dropdown-item" href="#">Video Marketing</a>
										</li>
									</div>
									<div class="col dropdown-menu-col">
										<li class="" data-itemid="73" data-itemobject="services">
											<a class="dropdown-item" href="#">Social Media</a>
										</li>
									</div>
								</div>
							</div>
						</ul>
					</li>

					<li class="nav-item me-lg-3 me-0 mt-md-2 mt-0" data-itemid="54" data-itemobject="page">
						<a class="nav-link text-uppercase" href="#">Blog</a>
					</li>
					<li class="nav-item me-lg-3 me-0 mt-md-2 mt-0" data-itemid="53" data-itemobject="page">
						<a class="nav-link text-uppercase current-menu-item" href="#">Contact</a>
					</li>

					<li class="nav-item nav-item-btn mt-md-0 mt-4">
						<a href="#" class="text-center button button--blue-gradient mx-md-2 me-0" target="_self">Request</a>
					</li>
					<li class="nav-item nav-item-social-icons mt-md-0 mt-4 d-md-none d-block">
						<span class="me-3">
							<a href="#" class="" target="_blank">
								<img src="<?php echo get_stylesheet_directory_uri();?>/img/social-icons/facebook-header-mobile-social-icon.png" alt="facebook">
							</a>
						</span>
						<span class="me-3">
							<a href="#" class="" target="_blank">
								<img src="<?php echo get_stylesheet_directory_uri();?>/img/social-icons/in-header-mobile-social-icon.png" alt="linkdin">
							</a>
						</span>
						<span class="me-3">
							<a href="#" class="" target="_blank">
								<img src="<?php echo get_stylesheet_directory_uri();?>/img/social-icons/twitter-header-mobile-social-icon.png" alt="twitter">
							</a>
						</span>
						<span class="me-3">
							<a href="#" class="" target="_blank">
								<img src="<?php echo get_stylesheet_directory_uri();?>/img/social-icons/insta-header-mobile-social-icon.png" alt="instagram">
							</a>
						</span>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<!--/NavBar-->
