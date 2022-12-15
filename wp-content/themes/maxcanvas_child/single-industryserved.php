<?php get_header();?>
<?php $get_queried_object = get_queried_object();?>
<div class="industry-served-page-wrapper single-industryserved-page-wrapper">

	<?php get_template_part('templates/component/header_page_title_section');?>

	<section class="industry-served-page--f-st single-industryserved-page--f-st">
		<div class="container-lg">
			<div class="industry-served-page--f-st--bg" style="background-image: url(<?php echo get_stylesheet_directory_uri();?>/img/istockphoto-850495466-2048x2048-1.jpg)"></div>
			<aside>
				<div class="row align-items-lg-end mb-md-5 mb-3">
					<div class="col-lg-6 col-md-4 col-12">
						<div class="sup-title text-uppercase mb-3">сities</div>
						<h2 data-id="<?php echo $get_queried_object->ID;?>"><?php echo $get_queried_object->post_title;?></h2>
					</div>
					<div class="col-lg-6 col-md-8 col-12">
						<p class="mt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo </p>
						<p class="mt-3">Ut enim ad minim veniam, exercitation ullamco laboris nisi ut aliquip ex ea commodo </p>
					</div>
				</div>
			</aside>
		</div>
	</section>

	<section class="single-industryserved-content-section mt-lg-5 mt-3">
		<div class="container-xl">
			<div class="row d-flex align-items-center">
				<div class="col-lg-6 col-12 order-lg-1 order-2">
					<div class="text-center">
						<img class="img-fluid" src="http://maxplaces.name/wp-content/themes/maxcanvas_child/img/istockphoto-1182777182.jpg" alt="">
					</div>
				</div>
				<div class="col-lg-6 col-12 ps-lg-5 ps-3 order-lg-2 order-1">
					<div class="">
						<h2>Lorem Ipsum Solor Dem Amet</h2>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						</p>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<?php get_template_part('templates/component/getintouch_cf');?>
	<!--<div class="page-wrapper-bottom-bg-ameb"></div>-->

	<section class="single-industryserved-sub-banner">
		<div class="container-lg">
			<div class="single-industryserved-sub-banner--bg d-flex" style="background-image: url(http://maxplaces.name/wp-content/themes/maxcanvas_child/img/istockphoto-1286815179-2048x2048-3.jpg);">
				<div class="row align-self-center">
					<div class="col">
						<aside class="ms-md-5 ms-sm-4 ms-0">
							<div class="sup-title text-uppercase mb-3">Lorem ipsum</div>
							<h2>Lorem ipsum</h2>
							<p class="mt-3">
								Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
							</p>
						</aside>
					</div>
				</div>
			</div>
		</div> <!--/.container-lg-->
	</section>
</div> <!--/.single-industryserved-page-wrapper-->
<?php get_footer();?>
