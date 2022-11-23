<?php
/**
 * Template Name: _404
 *
 * @package maxcanvas
 */
?>
<?php get_header();?>
<div class="page-404-wrapper">
	<div class="a-w-c--bg"></div>
	<div class="container-xl">
		<div class="page-404-bg-image" style="background-image: url(<?php echo get_stylesheet_directory_uri();?>/img/istockphoto-1286815179-2048x2048-4.jpg);"></div>
		<div class="row">
			<div class="col-lg-5 col-12 --page-404-col1">
<!--				<img src="http://maxplaces.name/wp-content/themes/maxcanvas_child/img/istockphoto-1182777182.jpg" alt="Maxplaces" style="height:465px;">-->
			</div>
			<div class="col-lg-7 col-12 text-start --page-404-col2">
				<div class="page-404-text-content mx-auto">
					<h2>404</h2>
					<p>
						Sorry, but the page was not found. Maybe you just entered the wrong url address.
					</p>
					<a class="text-center button button--blue-gradient" href="<?php echo esc_url(home_url());?>" target="_self">back home</a>
				</div>
			</div>
		</div>
	</div>
	<div class="section-divider-100"></div>
</div> <!--/.page-404-wrapper-->
<?php get_footer();?>