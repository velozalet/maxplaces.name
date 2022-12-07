<?php
/**
 * Template Name: Leadership Team
 *
 * @package maxcanvas
 */
?>
<?php get_header();?>
<div class="cities-served-page-wrapper blog-archive-page-wrapper leadership-team-page-wrapper">
	<?php get_template_part('templates/component/header_page_title_section');?>
	<?php get_template_part('templates/component/page_banner_section');?>
	<div class="section-divider-100"></div>

	<section class="leadteam-person-section mt-sm-5 mt-0">
		<div class="container-xl">
			<div class="sup-title text-uppercase mb-3 text-center">The Leadership Team</div>
			<h1 class="text-center">The Leadership Team</h1>
			<div class="row justify-content-center row-cols-lg-3 row-cols-md-2 row-cols-1"><!--row-cols-lg-3 row-cols-md-2 row-cols-1 gap-2"-->
				<div class="col text-center about-person--item-col">
					<div class="about-person--item">
						<div class="image-box"></div>
						<div class="image-box--before" style="background-image:url(https://www.maxburst.com/wp-content/uploads/2021/02/Amanda.V.png);"></div>
					</div>
					<div class="about-person--item-name mt-3">Amanda Vigilante</div>
					<div class="about-person--item-job">Lead Account Manager</div>
				</div>
				<div class="col text-center about-person--item-col">
					<div class="about-person--item">
						<div class="image-box"></div>
						<div class="image-box--before" style="background-image:url(https://www.maxburst.com/wp-content/uploads/2022/05/Lera.png);"></div>
					</div>
					<div class="about-person--item-name mt-3">Lera Zaitseva</div>
					<div class="about-person--item-job">Lead Web Designer</div>
				</div>
				<div class="col text-center about-person--item-col">
					<div class="about-person--item">
						<div class="image-box"></div>
						<div class="image-box--before" style="background-image:url(https://www.maxburst.com/wp-content/uploads/2021/02/Andrew.R.png);"></div>
					</div>
					<div class="about-person--item-name mt-3">Andrew Ruditser</div>
					<div class="about-person--item-job">Co-Founder & Lead Technology Coordinator</div>
				</div>
				<div class="col text-center about-person--item-col">
					<div class="about-person--item">
						<div class="image-box"></div>
						<div class="image-box--before" style="background-image:url(https://www.maxburst.com/wp-content/uploads/2021/02/Brian.W.png);"></div>
					</div>
					<div class="about-person--item-name mt-3">Brian Winum</div>
					<div class="about-person--item-job">Digital Marketing Director</div>
				</div>
				<div class="col text-center about-person--item-col">
					<div class="about-person--item">
						<div class="image-box"></div>
						<div class="image-box--before" style="background-image:url(<?=get_stylesheet_directory_uri();?>/img/brian_1.png);"></div>
					</div>
					<div class="about-person--item-name mt-3">Brian Winum</div>
					<div class="about-person--item-job">Digital Marketing Director</div>
				</div>
				<div class="col text-center about-person--item-col">
					<div class="about-person--item">
						<div class="image-box"></div>
						<div class="image-box--before" style="background-image:url(<?=get_stylesheet_directory_uri();?>/img/jason_1.png);"></div>
					</div>
					<div class="about-person--item-name mt-3">Jason Sidana</div>
					<div class="about-person--item-job">Head of Business Development</div>
				</div>
			</div>
		</div>
	</section>

	<section class="leadership-team-content-section mt-lg-5 mt-3">
		<div class="container-xl">
			<div class="row d-flex align-items-center">
				<div class="col-lg-6 col-12 order-lg-1 order-2">
					<div class="">
						<img class="img-fluid" src="<?=get_stylesheet_directory_uri();?>/img/istockphoto-1182777182.jpg" alt="">
					</div>
				</div>
				<div class="col-lg-6 col-12 ps-lg-5 ps-3 order-lg-2 order-1">
					<div class="">
						<div class="sup-title text-uppercase mb-3">The Leadership Team</div>
						<h2>Lorem Ipsum</h2>
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

	<section class="leadership-team-companylogos-section text-center mt-lg-5 mt-3">
		<div class="sup-title text-uppercase mb-3 text-center">The Leadership Team</div>
		<h2 class="text-center mb-5">The Leadership Team</h2>

		<div id="__companylogos_slider" class="splide __companylogos-slider" aria-label="Company logos Slider">
			<div class="splide__track">
				<ul class="splide__list">
					<li class="splide__slide">
						<!--<img class="img-fluid" src="--><?php //echo get_stylesheet_directory_uri();?><!--/img/company-logos/evero-logo.svg" alt="">-->
						<div class="companylogos-slide--item" style="background-image:url(<?php echo get_stylesheet_directory_uri();?>/img/company-logos/evero-logo.svg);">
<!--							<span class="decor-br"></span>-->
							<img class="decor-br" src="<?php echo get_stylesheet_directory_uri();?>/img/vertical-divider-slider.svg" alt="">
						</div>
					</li>
					<li class="splide__slide">
						<!--<img class="img-fluid" src="--><?php //echo get_stylesheet_directory_uri();?><!--/img/company-logos/garagetek-logo.svg" alt="">-->
						<div class="companylogos-slide--item" style="background-image:url(<?php echo get_stylesheet_directory_uri();?>/img/company-logos/garagetek-logo.svg);">
<!--							<span class="decor-br"></span>-->
							<img class="decor-br" src="<?php echo get_stylesheet_directory_uri();?>/img/vertical-divider-slider.svg" alt="">
						</div>
					</li>
					<li class="splide__slide">
						<!--<img class="img-fluid" src="--><?php //echo get_stylesheet_directory_uri();?><!--/img/company-logos/hanold-associates-logo.svg" alt="">-->
						<div class="companylogos-slide--item" style="background-image:url(<?php echo get_stylesheet_directory_uri();?>/img/company-logos/hanold-associates-logo.svg);">
<!--							<span class="decor-br"></span>-->
							<img class="decor-br" src="<?php echo get_stylesheet_directory_uri();?>/img/vertical-divider-slider.svg" alt="">
						</div>
					</li>
					<li class="splide__slide">
						<!--<img class="img-fluid" src="--><?php //echo get_stylesheet_directory_uri();?><!--/img/company-logos/nspc-logo.svg" alt="">-->
						<div class="companylogos-slide--item" style="background-image:url(<?php echo get_stylesheet_directory_uri();?>/img/company-logos/nspc-logo.svg);">
							<img class="decor-br" src="<?php echo get_stylesheet_directory_uri();?>/img/vertical-divider-slider.svg" alt="">
						</div>
					</li>
				</ul>
			</div>
		</div>
	</section>
	<div class="section-divider-100 d-sm-block d-none"></div>

	<section class="blog-archive--articles leadership-team-lastcases-section mt-md-5 mt-4 mb-md-5 mb-0">
		<div class="container-xl">
			<h2 class="text-center mb-4">Case Study</h2>
			<div id="postArticlesWithPagination" class="row justify-content-center">
				<div class="col-md-6 col-12 mb-3 article" data-postid="174">
					<a href="http://maxplaces.name/?post_type=cases&amp;p=174">
						<div class="blog-archive--article-bg" style="background-image:url(/wp-content/uploads/2022/12/case-study1.jpg);"></div>
					</a>
					<div class="blog-archive-sub-banner--title text-capitalize mt-2 mb-3">
						<a class="--posts-title-link" href="http://maxplaces.name/?post_type=cases&amp;p=174">Case Study Post Title -1</a>
					</div>
				</div>
				<div class="col-md-6 col-12 mb-3 article" data-postid="176">
					<a href="http://maxplaces.name/?post_type=cases&amp;p=176">
						<div class="blog-archive--article-bg" style="background-image:url(/wp-content/uploads/2022/12/case-study2.jpg);"></div>
					</a>
					<div class="blog-archive-sub-banner--title text-capitalize mt-2 mb-3">
						<a class="--posts-title-link" href="http://maxplaces.name/?post_type=cases&amp;p=176">Case Study Post Title -2</a>
					</div>
				</div>
			</div>
		</div> <!--/.container-xl-->
	</section>
</div> <!--/.leadership-team-page-wrapper-->

<?php get_footer();?>
