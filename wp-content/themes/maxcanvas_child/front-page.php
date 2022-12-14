<?php
/**
 * Template Name: Home
 *
 * @package maxcanvas
 */
?>
<?php get_header(); ?>
<?php
//"Gear Slider"
$slider_banner = get_field('slider_home', get_the_ID() );
//__/"Gear Slider"

//__/"Slider-2"
$slider2_home = get_field('slider_2', get_the_ID() );
//__/"Slider-2"

//Who We Are Section Data
$whoWeAre_superscript_title = get_field('who_we_are_superscript_title', get_the_ID() ); $whoWeAre_title = get_field('who_we_are_title', get_the_ID() ); $whoWeAre_text = get_field('who_we_are_text', get_the_ID() ); $whoWeAre_image = get_field('who_we_are_image', get_the_ID() ); $whoWeAre_opt_btn = get_field('who_we_are_optional_button', get_the_ID() );
//__/Who We Are Section Data

//Сase Studies Section"
$caseStudies_superscript_title = get_field('case_studies_superscript_title', get_the_ID() ); $caseStudies_title = get_field('case_studies_title', get_the_ID() ); $caseStudies_posts = get_field('case_studies_posts', get_the_ID() ); $caseStudies_posts_cnt = count($caseStudies_posts);
//__/Сase Studies Section

//Testimonials Section"
$testimonials_superscript_title = get_field('testimonials_superscript_title', get_the_ID() ); $testimonials_title = get_field('testimonials_title', get_the_ID() ); $testimonials_posts = get_field('testimonials', get_the_ID() );
//__/Testimonials Section

//Blog Section"
$blogarticles_superscript_title = get_field('blogarticles_superscript_title', get_the_ID() ); $blogarticles_title = get_field('blogarticles_title', get_the_ID() ); $blogarticles = get_field('blog_articles', get_the_ID() );
//__/Blog Section

//Video/Bg Section"
$videoBgHomeSelected = get_field('video_home_background_selection', get_the_ID() ); //video/image
$image_bg_home = get_field('image_bg_home', get_the_ID() ); $video_bg_home = get_field('video_bg_home', get_the_ID() );
$videoBgHome_superscript_title = get_field('video_bg_home_superscript_title', get_the_ID() ); $videoBgHome_title = get_field('video_bg_home_title', get_the_ID() );
//__/Video/Bg Section
?>
<section id="section_gear_slider" class="section section-gear-slider">
	<div id="__section_gear_slider" class="splide __section-gear-slider" aria-label="Gear Slider">
		<div class="splide__track">
			<ul class="splide__list">
				<?php foreach( $slider_banner as $slideBanner):?>
				<li class="splide__slide">
					<div class="container-lg">
						<div class="row d-flex align-items-center">
							<div class="col-md col-12 text-start">
								<div class="sup-title sup-title-slide text-uppercase mb-3"><?php echo $slideBanner['sub_title_slide'];?></div>
								<h1><?php echo $slideBanner['title_slide'];?></h1>
								<p class="mt-3"><?php echo $slideBanner['text_slide'];?></p>
								<?php $requestBtnLink = $slideBanner['optional_button']; if($requestBtnLink): $link_target = ($requestBtnLink['target']) ? $requestBtnLink['target'] : '_self';?>
									<a class="text-center button button--blue-gradient" href="<?php echo $requestBtnLink['url'];?>" target="<?php echo esc_attr($link_target);?>"><?php echo $requestBtnLink['title'];?></a>
								<?php endif;?>
							</div>
							<div class="col-md col-12 text-md-end text-center">
								<img src="<?php echo $slideBanner['image_slide'];?>" alt="<?php echo get_bloginfo('name');?>" class="img-fluid">
							</div>
						</div>
					</div>
				</li>
				<?php endforeach;?>
			</ul>
		</div>
	</div>

	<img src="<?php echo get_stylesheet_directory_uri();?>/img/snake.svg" alt="<?php echo get_bloginfo('name');?>" class="snake-img--desktop img-fluid m-auto d-md-block d-none">
	<img src="<?php echo get_stylesheet_directory_uri();?>/img/snake-mobile.svg" alt="<?php echo get_bloginfo('name');?>" class="snake-img--mobile img-fluid m-auto d-md-none d-block">
</section>

<section id="ourservices_section_fx_content" class="ourservices-section-fx-content mt-md-0 mt-4 mb-5">
	<div id="__section_ourservices_slider" class="splide __section-ourservices-slider" aria-label="Our Services Slider">
		<div class="splide__track">
			<ul class="splide__list">
				<?php foreach( $slider2_home as $slide2_i):?>
				<li class="splide__slide">
					<div class="container-lg">
						<div class="row d-flex align-items-start">
							<div class="col-md-7 col-12 mt-md-0 mt-5 order-md-1 order-2">
								<div class="row">
									<div class="col-7 d-flex justify-content-end pe-0">
										<img class="--img1 img-fluid align-self-end" src="<?php echo $slide2_i['image1_slide'];?>" alt="<?php echo get_bloginfo('name');?>">
									</div>
									<div class="col-5 ps-0">
										<img class="--img2 img-fluid" src="<?php echo $slide2_i['image2_slide'];?>" alt="<?php echo get_bloginfo('name');?>">
										<br>
										<img class="--img3 img-fluid" src="<?php echo $slide2_i['image3_slide'];?>" alt="<?php echo get_bloginfo('name');?>">
									</div>
								</div>
							</div>
							<div class="col-md-5 col-12 order-md-2 order-1">
								<div class="sup-title text-uppercase mb-3"><?php echo $slide2_i['superscript_title_slide'];?></div>
								<h2><?php echo $slide2_i['title_slide'];?></h2>
								<p class="mt-3"><?php echo $slide2_i['text_slide'];?></p>

								<?php $requestBtnLink = $slide2_i['optional_button']; if($requestBtnLink): $link_target = ($requestBtnLink['target']) ? $requestBtnLink['target'] : '_self';?>
								<a class="text-center button button--blue-gradient" href="<?php echo $requestBtnLink['url'];?>" target="<?php echo esc_attr($link_target);?>"><?php echo $requestBtnLink['title'];?></a>
								<?php endif;?>
							</div>
						</div>
					</div>
				</li>
				<?php endforeach;?>
			</ul>
		</div>

		<!--<div class="splide__arrows"> <button class="splide__arrow splide__arrow--prev">Prev</button> <button class="splide__arrow splide__arrow--next">Next</button> </div>-->
	</div>
</section>
<div class="section-divider-100"></div>

<section id="weare_section_fx_content" class="weare-section-fx-content mt-5">
	<div class="container-lg">
		<div class="row align-items-center">
			<div class="col-md col-12">
				<?php if($whoWeAre_superscript_title):?><div class="sup-title text-uppercase mb-3"><?php echo $whoWeAre_superscript_title;?></div><?php endif;?>
				<?php if($whoWeAre_title):?><h2><?php echo $whoWeAre_title;?></h2><?php endif;?>
				<?php if($whoWeAre_text):?><p class="mt-3"><?php echo $whoWeAre_text;?></p><?php endif;?>
				<?php $requestBtnLink = $whoWeAre_opt_btn; if($requestBtnLink): $link_target = ($requestBtnLink['target']) ? $requestBtnLink['target'] : '_self';?>
					<a class="text-center button button--blue-gradient" href="<?php echo $requestBtnLink['url'];?>" target="<?php echo esc_attr($link_target);?>"><?php echo $requestBtnLink['title'];?></a>
				<?php endif;?>
			</div>
			<div class="col-md-5 col-12 text-center mt-md-0 mt-5">
				<?php if($whoWeAre_image):?>
					<img class="img-fluid" src="<?php echo $whoWeAre_image;?>" alt="<?php echo get_bloginfo('name');?>">
				<?php endif;?>
			</div>
		</div>
	</div>
</section>

<section id="casestudies_n_testimonials_section_fx_content" class="casestudies_n_testimonials-section-fx-content mt-1">
	<div class="container-lg --ourclients">
		<div class="row row-cst-padding">
			<div class="col-md-4 col-12 mb-md-0 mb-4 case-studies-titles">
				<?php if($caseStudies_superscript_title):?><div class="sup-title text-uppercase mb-3"><?php echo $caseStudies_superscript_title;?></div><?php endif;?>
				<?php if($caseStudies_title):?><h2><?php echo $caseStudies_title;?></h2><?php endif;?>
			</div>
			<?php if($caseStudies_posts):?>
			<div class="col-md col-12 case-studies-icons">
				<div class="row">
					<?php if( $caseStudies_posts[0] && $caseStudies_posts[1]):?>
					<div class="col-md col-6 text-center col-cst-case-studies--item">
						<?php if($caseStudies_posts[0]):?>
							<?php $case_study_icon = get_field('case_study_icon',$caseStudies_posts[0]->ID ); if($case_study_icon):?>
							<img src="<?php echo get_field('case_study_icon',$caseStudies_posts[0]->ID );?>" alt="<?php echo get_bloginfo('name');?>">
							<?php endif;?>
							<span class="d-block text-uppercase mt-2 mb-md-5 mb-4" data-id="<?php echo $caseStudies_posts[0]->ID;?>">
								<a class="text-decoration-none text-black" href="<?php echo $caseStudies_posts[0]->guid;?>"><?php echo $caseStudies_posts[0]->post_title;?></a>
							</span> <div class="w-100"></div>
						<?php endif;?>
						<?php if($caseStudies_posts[1]):?>
							<?php $case_study_icon = get_field('case_study_icon',$caseStudies_posts[1]->ID ); if($case_study_icon):?>
							<img src="<?php echo get_field('case_study_icon',$caseStudies_posts[1]->ID );?>" alt="<?php echo get_bloginfo('name');?>">
							<?php endif;?>
							<span class="d-block text-uppercase mt-2 mb-md-5 mb-4" data-id="<?php echo$caseStudies_posts[1]->ID;?>">
								<a class="text-decoration-none text-black" href="<?php echo $caseStudies_posts[1]->guid;?>"><?php echo $caseStudies_posts[1]->post_title;?></a>
							</span>
						<?php endif;?>
					</div>
					<?php endif;?>

					<?php if( $caseStudies_posts[2] && $caseStudies_posts[3]):?>
					<div class="col-md col-6 text-center col-cst-case-studies--item">
						<?php if($caseStudies_posts[2]):?>
							<?php $case_study_icon = get_field('case_study_icon',$caseStudies_posts[2]->ID ); if($case_study_icon):?>
							<img src="<?php echo get_field('case_study_icon',$caseStudies_posts[2]->ID );?>" alt="<?php echo get_bloginfo('name');?>">
							<?php endif;?>
							<span class="d-block text-uppercase mt-2 mb-md-5 mb-4" data-id="<?php echo $caseStudies_posts[2]->ID;?>">
								<a class="text-decoration-none text-black" href="<?php echo $caseStudies_posts[2]->guid;?>"><?php echo $caseStudies_posts[2]->post_title;?></a>
							</span> <div class="w-100"></div>
						<?php endif;?>
						<?php if($caseStudies_posts[3]):?>
							<?php $case_study_icon = get_field('case_study_icon',$caseStudies_posts[3]->ID ); if($case_study_icon):?>
							<img src="<?php echo get_field('case_study_icon',$caseStudies_posts[3]->ID );?>" alt="<?php echo get_bloginfo('name');?>">
							<?php endif;?>
							<span class="d-block text-uppercase mt-2 mb-md-5 mb-4" data-id="<?php echo$caseStudies_posts[3]->ID;?>">
								<a class="text-decoration-none text-black" href="<?php echo $caseStudies_posts[3]->guid;?>"><?php echo $caseStudies_posts[3]->post_title;?></a>
							</span>
						<?php endif;?>
					</div>
					<?php endif;?>

					<?php if( $caseStudies_posts[4] && $caseStudies_posts[5]):?>
					<div class="col-md col-6 text-center col-cst-case-studies--item">
						<?php if($caseStudies_posts[4]):?>
							<?php $case_study_icon = get_field('case_study_icon',$caseStudies_posts[4]->ID ); if($case_study_icon):?>
							<img src="<?php echo get_field('case_study_icon',$caseStudies_posts[4]->ID );?>" alt="<?php echo get_bloginfo('name');?>">
							<?php endif;?>
							<span class="d-block text-uppercase mt-2 mb-md-5 mb-4" data-id="<?php echo $caseStudies_posts[4]->ID;?>">
								<a class="text-decoration-none text-black" href="<?php echo $caseStudies_posts[4]->guid;?>"><?php echo $caseStudies_posts[4]->post_title;?></a>
							</span> <div class="w-100"></div>
						<?php endif;?>
						<?php if($caseStudies_posts[5]):?>
							<?php $case_study_icon = get_field('case_study_icon',$caseStudies_posts[5]->ID ); if($case_study_icon):?>
							<img src="<?php echo get_field('case_study_icon',$caseStudies_posts[5]->ID );?>" alt="<?php echo get_bloginfo('name');?>">
							<?php endif;?>
							<span class="d-block text-uppercase mt-2 mb-md-5 mb-4" data-id="<?php echo$caseStudies_posts[5]->ID;?>">
								<a class="text-decoration-none text-black" href="<?php echo $caseStudies_posts[5]->guid;?>"><?php echo $caseStudies_posts[5]->post_title;?></a>
							</span>
						<?php endif;?>
					</div>
					<?php endif;?>

					<?php if( $caseStudies_posts[6] && $caseStudies_posts[7]):?>
					<div class="col-md col-6 text-center col-cst-case-studies--item">
						<?php if($caseStudies_posts[6]):?>
							<?php $case_study_icon = get_field('case_study_icon',$caseStudies_posts[6]->ID ); if($case_study_icon):?>
							<img src="<?php echo get_field('case_study_icon',$caseStudies_posts[6]->ID );?>" alt="<?php echo get_bloginfo('name');?>">
							<?php endif;?>
							<span class="d-block text-uppercase mt-2 mb-md-5 mb-4" data-id="<?php echo $caseStudies_posts[6]->ID;?>">
								<a class="text-decoration-none text-black" href="<?php echo $caseStudies_posts[6]->guid;?>"><?php echo $caseStudies_posts[6]->post_title;?></a>
							</span> <div class="w-100"></div>
						<?php endif;?>
						<?php if($caseStudies_posts[7]):?>
							<?php $case_study_icon = get_field('case_study_icon',$caseStudies_posts[7]->ID ); if($case_study_icon):?>
							<img src="<?php echo get_field('case_study_icon',$caseStudies_posts[7]->ID );?>" alt="<?php echo get_bloginfo('name');?>">
							<?php endif;?>
							<span class="d-block text-uppercase mt-2 mb-md-5 mb-4" data-id="<?php echo$caseStudies_posts[7]->ID;?>">
								<a class="text-decoration-none text-black" href="<?php echo $caseStudies_posts[7]->guid;?>"><?php echo $caseStudies_posts[7]->post_title;?></a>
							</span>
						<?php endif;?>
					</div>
					<?php endif;?>
				</div> <!--.row-->
			</div>
			<?php endif;?>
		</div>
	</div>

	<div class="container-xl text-center mt-md-0 mt-5 --testimonials">
		<?php if($testimonials_superscript_title):?><div class="sup-title text-uppercase mb-3"><?php echo $testimonials_superscript_title;?></div><?php endif;?>
		<?php if($testimonials_title):?><h2 class="mb-md-5 mb-3"><?php echo $testimonials_title;?></h2><?php endif;?>

		<div id="__testimonials_slider" class="splide __testimonials-slider" aria-label="Testimonials Slider">
			<div class="splide__track">
				<ul class="splide__list" style="padding-bottom:50px !important;">
					<?php foreach( $testimonials_posts as $t_item ):?>
						<?php $testimonialsData = get_field('testimonials', $t_item->ID)[0];?>
						<li class="splide__slide" data-id="<?php echo $t_item->ID;?>">
							<div class="--testimonials-col--item px-4 py-4">
								<blockquote class="text-start"><img src="<?php echo get_stylesheet_directory_uri();?>/img/blockquote-icon.svg" alt=""></blockquote>
								<p><?php echo $testimonialsData['testimonials_text'];?></p>
								<div class="row align-items-center">
									<div class="col-2">
										<img class="testimonials-author-img" src="<?php echo $testimonialsData['interviewee_photo'];?>" alt="">
									</div>
									<div class="col text-start ms-xxl-2 ms-xl-3 ms-lg-4 ms-md-3 ms-sm-0 ms-5">
										<div class="testimonials-author-name"><?php echo $testimonialsData['interviewee_name'];?></div>
										<div class="testimonials-author-role"><?php echo $testimonialsData['interviewee_position'];?></div>
									</div>
								</div>
							</div>
						</li>
					<?php endforeach;?>
				</ul>
			</div>
		</div>
	</div>
</section>
<div class="section-divider-100"></div>

<section id="blog_section_fx_content" class="blog-section-fx-content mb-5">
	<div class="container-lg">
		<div class="row">
			<div class="col-md-3 col-12">
				<?php if($blogarticles_superscript_title):?><div class="sup-title text-uppercase mb-3"><?php echo $blogarticles_superscript_title;?></div><?php endif;?>
				<?php if($blogarticles_title):?><h2 class="mb-md-5 mb-3"><?php echo $blogarticles_title;?></h2><?php endif;?>
			</div>
			<div class="col-md-9 col-12">
				<div id="__blog_slider" class="splide __blog-slider" aria-label="Blog Slider">
					<div class="splide__track">
						<ul class="splide__list">
							<?php foreach($blogarticles as $blogArticle):?>
							<li class="splide__slide" data-id="<?php echo $blogArticle->ID;?>">
								<a class="text-decoration-none" href="<?php echo $blogArticle->guid;?>">
									<img class="img-fluid" src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($blogArticle->ID) );?>" alt="<?php echo get_bloginfo('name');?>">
								</a>
								<div class="mt-3">
									<span class="blog-article-date d-block text-uppercase mb-2"><?php echo date_format( date_create($blogArticle->post_date),"d M Y" );?></span>
									<span class="blog-article-title d-block">
										<a class="text-decoration-none" href="<?php echo $blogArticle->guid;?>"><?php echo $blogArticle->post_title;?></a>
									</span>
								</div>
							</li>
							<?php endforeach;?>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<div class="section-divider-100"></div>

<?php
/* https://www.naecsol.com/wp-content/uploads/2022/09/sample-5s.mp4
 * https://www.naecsol.com/wp-content/uploads/2022/09/video_1.mp4
 * https://www.naecsol.com/wp-content/uploads/2022/09/video_2.mp4
 * https://www.naecsol.com/wp-content/uploads/2022/09/rain.mp4
 * https://www.naecsol.com/wp-content/uploads/2022/09/short-video1.mp4
 * https://www.naecsol.com/wp-content/uploads/2022/09/Paradise_What_About_Us.mp4
 */
?>
<section id="homevideo_section_fx_content" class="homevideo-section-fx-content mt-5">
	<?php if($videoBgHomeSelected == 'image'):?>
	<div class="container-lg">
		<div class="row">
			<div class="col-md-9 col-12 position-relative d-flex align-items-center">
				<div class="homeimage-section-container">
					<div class="row">
						<div class="col-auto section-image-content text-start">
							<?php if($videoBgHome_superscript_title):?><div class="sup-title text-uppercase mb-3"><?php echo $videoBgHome_superscript_title;?></div><?php endif;?>
							<?php if($videoBgHome_title):?><h2 class="mb-md-5 mb-3"><?php echo $videoBgHome_title;?></h2><?php endif;?>
						</div>
					</div>
					<div class="bg-image" style="background-image:url(<?php echo $image_bg_home;?>);"></div>
				</div>
			</div>
		</div>
	</div>
	<?php endif;?>
	<?php if($videoBgHomeSelected == 'video' && $video_bg_home):?>
	<div class="container-lg position-relative homevideo-section-container">
		<div class="row">
			<div class="col-md-9 col-12 homevideo-section-container-video">
				<i class="fa fa-play-circle __video--btn" id="home_video__video_btn"></i>
				<video class="img-fluid" id="home_video__video">
					<source src="<?php echo $video_bg_home;?>" type="video/mp4">
				</video>
			</div>
		</div>
		<div class="col-auto section-video-content text-start">
			<?php if($videoBgHome_superscript_title):?><div class="sup-title text-uppercase mb-3"><?php echo $videoBgHome_superscript_title;?></div><?php endif;?>
			<?php if($videoBgHome_title):?><h2 class="mb-md-5 mb-3"><?php echo $videoBgHome_title;?></h2><?php endif;?>
		</div>
	</div>
	<?php endif;?>

	<div class="home-video-section-bg d-md-block d-none"></div>
	<div class="home-video-section-mobile-bg d-md-none d-block"></div>
</section>

<?php get_footer(); ?>
