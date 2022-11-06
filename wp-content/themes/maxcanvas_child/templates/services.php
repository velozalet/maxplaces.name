<?php
/**
 * Template Name: Services
 *
 * @package maxcanvas
 */
?>
<?php get_header();?>
<div class="services-page-wrapper">
	<?php get_template_part('templates/component/header_page_title_section');?>

	<section class="services-section mt-5">
		<div class="container-lg">
			<div class="row">
				<div class="col-lg-5 col-12 --s-section-col1" style="background:linear-gradient(180deg, rgba(10, 77, 124, 0.24), rgba(237, 248, 255, 0.1) 100%); padding:75px 55px 0 55px;">
					<div class="">
						<div class="sup-title text-uppercase mb-3">Services</div>
						<h2>Lorem ipsum</h2>
					</div>
				</div> <!--col-n.--awc-section-col1-->
				<div class="col-lg col-12 --s-section-col2">
					<div class="row">
						<div class="col-sm-auto col-12">
							<div class="" style="width:75%;">
								<img src="<?php echo get_stylesheet_directory_uri();?>/img/services/services-icon_1.svg">
								<div class="ms-3">
									<p class="text-uppercase mb-1"> <strong>Search Engine Optimization	</strong> </p>
								</div>
							</div>
						</div>
						<div class="col-sm-auto col-12">
							<div class="" style="width:75%;">
								<img src="<?php echo get_stylesheet_directory_uri();?>/img/services/services-icon_2.svg">
								<div class="ms-3">
									<p class="text-uppercase mb-1"> <strong>Search Engine Marketing</strong> </p>
								</div>
							</div>
						</div>
					</div>
				</div> <!--col-n.--awc-section-col2-->
			</div> <!--.row-->
		</div> <!--.container-lg-->
	</section>
</div> <!--/.services-page-wrapper-->

<?php get_footer();?>
