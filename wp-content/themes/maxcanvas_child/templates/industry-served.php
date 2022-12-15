<?php
/**
 * Template Name: Industry Served
 *
 * @package maxcanvas
 */
?>
<?php get_header();?>
<div class="industry-served-page-wrapper">
	<?php get_template_part('templates/component/header_page_title_section');?>

	<section class="industry-served-page--f-st">
		<div class="container-lg">
			<div class="industry-served-page--f-st--bg" style="background-image: url(<?php echo get_stylesheet_directory_uri();?>/img/istockphoto-850495466-2048x2048-1.jpg)"></div>

			<aside>
				<div class="row align-items-lg-end mb-md-5 mb-3">
					<div class="col-sm-6 col-12">
						<div class="sup-title text-uppercase mb-3">сities</div>
						<h2>Lorem ipsum dolor</h2>
					</div>
					<div class="col-sm-6 col-12">
						<p class="mt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo </p>
					</div>
				</div>
				<div class="row industry-served--serveds justify-content-center">
					<div class="col-xl-3 col-md-4 col-sm-6 col-6 mb-md-5 mb-3 text-sm-start text-center d-sm-flex d-block align-items-center">
						<img src="<?php echo get_stylesheet_directory_uri();?>/img/case_studies/__1.svg" alt="<?php echo get_bloginfo('name');?>">
						<span class="text-uppercase ms-sm-2 ms-0 mt-sm-0 mt-1">Construction</span>
					</div>
					<div class="col-xl-3 col-md-4 col-sm-6 col-6 mb-md-5 mb-3 text-sm-start text-center d-sm-flex d-block align-items-center">
						<img src="<?php echo get_stylesheet_directory_uri();?>/img/case_studies/__3.svg" alt="<?php echo get_bloginfo('name');?>">
						<span class="text-uppercase ms-sm-2 ms-0 mt-sm-0 mt-1">Medical</span>
					</div>
					<div class="col-xl-3 col-md-4 col-sm-6 col-6 mb-md-5 mb-3 text-sm-start text-center d-sm-flex d-block align-items-center">
						<img src="<?php echo get_stylesheet_directory_uri();?>/img/case_studies/__5.svg" alt="<?php echo get_bloginfo('name');?>">
						<span class="text-uppercase ms-sm-2 ms-0 mt-sm-0 mt-1">Retail</span>
					</div>
					<div class="col-xl-3 col-md-4 col-sm-6 col-6 mb-md-5 mb-3 text-sm-start text-center d-sm-flex d-block align-items-center">
						<img src="<?php echo get_stylesheet_directory_uri();?>/img/case_studies/__7.svg" alt="<?php echo get_bloginfo('name');?>">
						<span class="text-uppercase ms-sm-2 ms-0 mt-sm-0 mt-1">Food and Beverage</span>
					</div>


					<div class="col-xl-3 col-md-4 col-sm-6 col-6 mb-md-5 mb-3 text-sm-start text-center d-sm-flex d-block align-items-center">
						<img src="<?php echo get_stylesheet_directory_uri();?>/img/case_studies/__2.svg" alt="<?php echo get_bloginfo('name');?>">
						<span class="text-uppercase ms-sm-2 ms-0 mt-sm-0 mt-1">Technology</span>
					</div>
					<div class="col-xl-3 col-md-4 col-sm-6 col-6 mb-md-5 mb-3 text-sm-start text-center d-sm-flex d-block align-items-center">
						<img src="<?php echo get_stylesheet_directory_uri();?>/img/case_studies/__4.svg" alt="<?php echo get_bloginfo('name');?>">
						<span class="text-uppercase ms-sm-2 ms-0 mt-sm-0 mt-1">Life Sciences</span>
					</div>
					<div class="col-xl-3 col-md-4 col-sm-6 col-6 mb-md-5 mb-3 text-sm-start text-center d-sm-flex d-block align-items-center">
						<img src="<?php echo get_stylesheet_directory_uri();?>/img/case_studies/__6.svg" alt="<?php echo get_bloginfo('name');?>">
						<span class="text-uppercase ms-sm-2 ms-0 mt-sm-0 mt-1">Home</span>
					</div>
					<div class="col-xl-3 col-md-4 col-sm-6 col-6 mb-md-5 mb-3 text-sm-start text-center d-sm-flex d-block align-items-center">
						<img src="<?php echo get_stylesheet_directory_uri();?>/img/case_studies/__8.svg" alt="<?php echo get_bloginfo('name');?>">
						<span class="text-uppercase ms-sm-2 ms-0 mt-sm-0 mt-1">Finance</span>
					</div>
				</div>
			</aside>
		</div>
	</section>

	<section class="industry-served-page--case-slider">
		<div class="container-xl">
			<div class="row row-height"> <!--g-0-->
				<div class="col-lg-4 col-12" id="dynamic_content__industry_served_case_slider">

					<kbd class="d-none">
						<?php
							$data = array(
								array('title' => 'Lorem ipsum dolor sit - 1', 'text' => 'It is likely that you have direct competitors that are achieving better results in Google search ranking than you are __1' ),
								array('title' => 'Lorem ipsum dolor sit - 2', 'text' => 'It is likely that you have direct competitors that are achieving better results in Google search ranking than you are __2' ),
								array('title' => 'Lorem ipsum dolor sit - 3', 'text' => 'It is likely that you have direct competitors that are achieving better results in Google search ranking than you are __3' ),
								array('title' => 'Lorem ipsum dolor sit - 4', 'text' => 'It is likely that you have direct competitors that are achieving better results in Google search ranking than you are __4' ),
								array('title' => 'Lorem ipsum dolor sit - 5', 'text' => 'It is likely that you have direct competitors that are achieving better results in Google search ranking than you are __5' ),
								array('title' => 'Lorem ipsum dolor sit - 6', 'text' => 'It is likely that you have direct competitors that are achieving better results in Google search ranking than you are __6' ),
							); //dd($data);
						?>
						<ul><?php foreach( $data as $d ):?><li><p><?php echo $d['title']?></p><p><?php echo $d['text']?></p></li><?php endforeach;?></ul>
					</kbd>

					<div class="sup-title text-uppercase mb-3">сase study</div>
					<h2 class="mb-md-5 mb-3">Lorem ipsum dolor</h2>

					<div class="industry-served-case-slider-content">
						<h5></h5> <!--from JS-->
						<p></p> <!--from JS-->
					</div>

					<!--progress bar slider-->
					<div id="industry_served_case_slide_progress">
						<span class="progress-bar-slider--start">01</span><div class="industry-served-case-slide--progress d-inline-block mx-2">
							<div class="industry-served-case-slide--progress-bar"></div>
						</div><span class="progress-bar-slider--end"></span>
					</div>
					<!--/progress bar slider-->
				</div>
				<div class="col-lg col-12"> <!--col-md-9 col-12-->
					<div id="__industry_served_case_slider" class="splide __industry-served-case-slider" aria-label="Industry Served Case Slider">
						<div class="splide__track">
							<ul class="splide__list">
								<li class="splide__slide"> <!--img-fluid-->
									<div class="vual"></div>
									<img src="<?php echo get_stylesheet_directory_uri();?>/img/blog-1.jpeg" alt="<?php echo get_bloginfo('name');?>">
								</li>
								<li class="splide__slide">
									<div class="vual"></div>
									<img src="<?php echo get_stylesheet_directory_uri();?>/img/blog-2.jpeg" alt="<?php echo get_bloginfo('name');?>">
								</li>
								<li class="splide__slide">
									<div class="vual"></div>
									<img src="<?php echo get_stylesheet_directory_uri();?>/img/blog-3.jpeg" alt="<?php echo get_bloginfo('name');?>">
								</li>
								<li class="splide__slide">
									<div class="vual"></div>
									<img src="<?php echo get_stylesheet_directory_uri();?>/img/blog-4.jpeg" alt="<?php echo get_bloginfo('name');?>">
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<div class="section-divider-100"></div>
	<?php get_template_part('templates/component/frequently_asked_section');?>
	<div class="section-divider-100"></div>

	<?php get_template_part('templates/component/getintouch_cf');?>
	<div class="section-divider-100"></div>

	<section class="industry-served-page--l-st">
		<div class="pisdiv">
			<img class="img-fluid" src="<?php echo get_stylesheet_directory_uri();?>/img/istockphoto-1286815179-2048x2048-6.jpg" alt="<?php echo get_bloginfo('name');?>">
		</div>

		<div class="container-xl">
			<div class="row d-flex align-items-center">
				<div class="col text-center mb-lg-0 mb-5">
					<img class="img-fluid if-img" src="<?php echo get_stylesheet_directory_uri();?>/img/istockphoto-1286815179-2048x2048-6.jpg" alt="<?php echo get_bloginfo('name');?>">
				</div>
				<div class="col-lg-7 col-12">
					<div class="industry-served-page--l-st--content">
						<div class="sup-title text-uppercase mb-3">Lorem ipsum</div>
						<h2>Lorem ipsum dolor sit amet consectetur adipiscing elit</h2>
						<p class="mt-3">
							Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam
						</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<div class="section-divider-100"></div>

	<div class="page-wrapper-bottom-bg-home"></div>
</div> <!--/.industry-served-page-wrapper-->
<?php get_footer();?>
