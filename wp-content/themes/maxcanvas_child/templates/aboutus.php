<?php
/**
 * Template Name: About Us
 *
 * @package maxcanvas
 */
?>
<?php get_header();?>
<div class="aboutus-page-wrapper">
	<?php get_template_part('templates/component/header_page_title_section');?>
	<?php get_template_part('templates/component/page_aboutus_banner_section');?>

	<section class="aboutus-single-cst-section">
		<div class="container-lg">
			<div class="row">
				<div class="col-6"></div>
				<div class="col-md-6 col-12">
					<p>
						<strong>Our mission</strong> is to offer top-notch and reasonably priced web marketing solutions to enable business owners to expand their online presence, generate leads, increase sales and improve levels of productivity.
					</p>
				</div>
			</div>
		</div>
	</section>

	<section class="aboutus-why-choose-section mt-5">
		<div class="a-w-c--bg"></div>
		<div class="container-lg">
			<div class="row">
				<div class="col-lg-5 col-12 mb-lg-0 mb-4 --awc-section-col1">
					<div class="">
						<div class="sup-title text-uppercase mb-3">lorem ipsum</div>
						<h2>Why Choose Maxplaces</h2>
						<p class="mt-3">
							We understand that each client has their own unique needs and goals. We strive to work closely with you to establish a clear cut marketing solution targeting all your objectives while staying within your budget. From the small business owner to the largest of Fortune 500 companies, we’ve helped countless clients take their online marketing efforts to the next level.
						</p>
					</div>
				</div> <!--col-n.--awc-section-col1-->
				<div class="col-lg col-12 --awc-section-col2 ps-lg-5 ps-2">
					<div class="row">
						<div class="col-sm col-12 mb-sm-4 mb-3">
							<a href="#" class="text-decoration-none">
								<div class="d-flex align-items-start">
									<img src="<?php echo get_stylesheet_directory_uri();?>/img/case_studies/__1.svg" alt="<?php echo get_bloginfo('name');?>">
									<div class="ms-3">
										<p class="text-uppercase mb-1"> <strong>Video Marketing</strong> </p>
										<p class="mb-0">Like a traditional television commercial, a promotional web video helps to advertise your business to potential customers.</p>
									</div>
								</div>
							</a>
						</div>
						<div class="col-sm col-12 mb-sm-4 mb-3">
							<a href="#" class="text-decoration-none">
								<div class="d-flex align-items-start">
									<img src="<?php echo get_stylesheet_directory_uri();?>/img/case_studies/__2.svg" alt="<?php echo get_bloginfo('name');?>">
									<div class="ms-3">
										<p class="text-uppercase mb-1"> <strong>SEO Services</strong> </p>
										<p class="mb-0">Let our Google Certified SEO specialists optimize your website for maximum visibility.</p>
									</div>
								</div>
							</a>
						</div>
						<div class="w-100"></div>
						<div class="col-sm col-12 mb-sm-4 mb-3">
							<a href="#" class="text-decoration-none">
								<div class="d-flex align-items-start">
									<img src="<?php echo get_stylesheet_directory_uri();?>/img/case_studies/__3.svg" alt="<?php echo get_bloginfo('name');?>">
									<div class="ms-3">
										<p class="text-uppercase mb-1"> <strong>Reputation Management</strong> </p>
										<p class="mb-0">Managing your online reputation isn’t shameless promotion, it’s a necessary means of self defense.</p>
									</div>
								</div>
							</a>
						</div>
						<div class="col-sm col-12 mb-sm-4 mb-3">
							<a href="#" class="text-decoration-none">
								<div class="d-flex align-items-start">
									<img src="<?php echo get_stylesheet_directory_uri();?>/img/case_studies/__4.svg" alt="<?php echo get_bloginfo('name');?>">
									<div class="ms-3">
										<p class="text-uppercase mb-1"> <strong>Pay Per Click</strong> </p>
										<p class="mb-0">Increase the profitability of your digital advertising spend with our expert Pay-Per-Click and Remarketing Campaign services spend.</p>
									</div>
								</div>
							</a>
						</div>
						<div class="w-100"></div>
						<div class="col-sm col-12 mb-sm-4 mb-3">
							<a href="#" class="text-decoration-none">
								<div class="d-flex align-items-start">
									<img src="<?php echo get_stylesheet_directory_uri();?>/img/case_studies/__5.svg" alt="<?php echo get_bloginfo('name');?>">
									<div class="ms-3">
										<p class="text-uppercase mb-1"> <strong>Social Media</strong> </p>
										<p class="mb-0">Social marketing campaigns that generate results. Social branding, targeted audience building, content creation and much more.</p>
									</div>
								</div>
							</a>
						</div>
						<div class="col-sm col-12 mb-sm-4 mb-3">
							<a href="#" class="text-decoration-none">
								<div class="d-flex align-items-start">
									<img src="<?php echo get_stylesheet_directory_uri();?>/img/case_studies/__6.svg" alt="<?php echo get_bloginfo('name');?>">
									<div class="ms-3">
										<p class="text-uppercase mb-1"> <strong>Local Search</strong> </p>
										<p class="mb-0">Geo-targeted SEO campaigns for better search engine rankings, increased local online visibility and a superior ROI.</p>
									</div>
								</div>
							</a>
						</div>
					</div>
				</div> <!--col-n.--awc-section-col2-->
			</div> <!--.row-->
		</div> <!--.container-lg-->
	</section>

	<?php get_template_part('templates/component/frequently_asked_section');?>


	<div class="page-wrapper-bottom-bg"></div>
</div> <!--/.aboutus-page-wrapper-->

<?php get_footer();?>
