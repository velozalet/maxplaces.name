<?php get_header();?>
<?php
$get_queried_object = get_queried_object();
//Slot Content
$services_cpt_slotcontent1_image = get_field('services_cpt_slotcontent1_image', get_the_ID() ); $services_cpt_slotcontent1_superscript_title = get_field('services_cpt_slotcontent1_superscript_title', get_the_ID() ); $services_cpt_slotcontent1_title = get_field('services_cpt_slotcontent1_title', get_the_ID() ); $services_cpt_slotcontent1_text = get_field('services_cpt_slotcontent1_text', get_the_ID() );
$services_cpt_slotcontent2_image = get_field('services_cpt_slotcontent2_image', get_the_ID() ); $services_cpt_slotcontent2_superscript_title = get_field('services_cpt_slotcontent2_superscript_title', get_the_ID() ); $services_cpt_slotcontent2_title = get_field('services_cpt_slotcontent2_title', get_the_ID() ); $services_cpt_slotcontent2_text = get_field('services_cpt_slotcontent2_text', get_the_ID() );
//__/Slot Content

//Slider
$services_cpt_slider_repeater_title = get_field('services_cpt_slider_repeater_title', get_the_ID() ); $services_cpt_slider_repeater = get_field('services_cpt_slider_repeater', get_the_ID() );
//__/Slider

//Sub Banner
$services_cpt_bg_image_sub_banner = get_field('bg_image_sub_banner', get_the_ID() ); $services_cpt_superscript_title_subbanner = get_field('services_cpt_superscript_title_subbanner', get_the_ID() ); $services_cpt_title_subbanner = get_field('services_cpt_title_subbanner', get_the_ID() ); $services_cpt_text_subbanner = get_field('services_cpt_text_subbanner', get_the_ID() ); $optlBtnLink = get_field('services_cpt_optional_button_link_subbanner', get_the_ID() );
//_Sub Banner
?>
<div class="single-services-page-wrapper">
	<?php get_template_part('templates/component/header_page_title_section');?>

	<section class="single-s-content-section">
		<div class="single-s-content-section--bg" style="min-height:1139px;"></div> <!--for JS: 1139px = .container-lg(height) + 100px-->
		<div class="container-lg">
			<div class="row d-flex align-items-center mb-5 --single-s-section-row1" style="display: none">
				<div class="col-md-6 col-12"> <!--order-md-1 order-2-->
					<div class="text-md-start text-center">
						<?php if( $services_cpt_slotcontent1_superscript_title ):?><div class="sup-title text-uppercase mb-3"><?php echo $services_cpt_slotcontent1_superscript_title;?></div><?php endif;?>
						<?php if( $services_cpt_slotcontent1_title ):?><h2 class="mb-3"><?php echo $services_cpt_slotcontent1_title;?></h2><?php endif;?>
						<?php if( $services_cpt_slotcontent1_text ):?><?php echo $services_cpt_slotcontent1_text;?><?php endif;?>
					</div>
				</div>
				<div class="col-md-6 col-12 pe-md-0 pe-2 text-md-start text-center"> <!--order-md-2 order-1-->
					<?php if( $services_cpt_slotcontent1_image ):?>
						<img class="img-fluid" src="<?php echo $services_cpt_slotcontent1_image;?>" alt="<?php echo get_bloginfo('name');?>">
					<?php endif;?>
				</div>
			</div> <!--/.row-->
			<div class="row d-flex align-items-center --single-s-section-row2">
				<div class="col-md-6 col-12 order-md-1 order-2 text-md-start text-center">
					<?php if( $services_cpt_slotcontent2_image ):?>
					<img class="img-fluid" src="<?php echo $services_cpt_slotcontent2_image;?>" alt="<?php echo get_bloginfo('name');?>">
					<?php endif;?>
				</div>
				<div class="col-md-6 col-12 pe-md-0 pe-2 order-md-2 order-1">
					<div class="text-md-start text-center">
						<?php if( $services_cpt_slotcontent2_superscript_title ):?><div class="sup-title text-uppercase mb-3"><?php echo $services_cpt_slotcontent2_superscript_title;?></div><?php endif;?>
						<?php if( $services_cpt_slotcontent2_title ):?><h2 class="mb-3"><?php echo $services_cpt_slotcontent2_title;?></h2><?php endif;?>
						<?php if( $services_cpt_slotcontent2_text ):?><?php echo $services_cpt_slotcontent2_text;?><?php endif;?>
					</div>
				</div>
			</div> <!--/.row-->
		</div> <!--/.container-lg-->
	</section>

	<?php if($services_cpt_slider_repeater):?>
	<section class="management-process-section">
		<div class="container-lg">
			<?php if($services_cpt_slider_repeater_title):?><h2 class="mb-md-5 mb-4"><?php echo $services_cpt_slider_repeater_title;?></h2><?php endif;?>
			<div class="row">
				<div class="col-xxl-9 col-12 mx-auto">
					<div id="__single_services_slider" class="splide __single-services-slider" aria-label="Single Services Slider">
						<div class="splide__track">
							<ul class="splide__list">
								<?php $slide_cnt=0; foreach( $services_cpt_slider_repeater as $slide ):?>
								<li class="splide__slide">
									<div class="row d-flex align-items-center">
										<div class="col-md-4 col-12 mt-md-0 mt-4 order-md-1 order-2">
											<div class="single-services-slider-text-content">
												<div class="sup-title text-uppercase mb-3">STEP <span>0<?php echo ($slide_cnt+1);?></span></div>
												<h4><?php echo $slide['services_cpt_slide_title'];?></h4>
												<p><?php echo $slide['services_cpt_slide_text'];?></p>
											</div>
										</div>
										<div class="col-md-8 col-12 order-md-2 order-1 col--background-image" style="background-image:url(<?php echo $slide['services_cpt_slide_image'];?>);">
											<span class="decor-number-for-slide d-md-block d-none">0<?php echo ($slide_cnt+1);?></span>
										</div>
									</div>
								</li>
								<?php $slide_cnt++; endforeach;?>
							</ul>
							<div class="splide__arrows">
								<button class="splide__arrow splide__arrow--prev">
									<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 40 40" width="40" height="40" focusable="false"><path d="m15.5 0.932-4.3 4.38 14.5 14.6-14.5 14.5 4.3 4.4 14.6-14.6 4.4-4.3-4.4-4.4-14.6-14.6z"></path></svg>
								</button>
								<span>01</span>
								<button class="splide__arrow splide__arrow--next">
									<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 40 40" width="40" height="40" focusable="false"><path d="m15.5 0.932-4.3 4.38 14.5 14.6-14.5 14.5 4.3 4.4 14.6-14.6 4.4-4.3-4.4-4.4-14.6-14.6z"></path></svg>
								</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<?php endif;?>

	<section class="single-s-sub-banner mt-5">
		<div class="container-lg">
			<div class="single-s-sub-banner--bg d-flex" style="background-image: url(<?php echo $services_cpt_bg_image_sub_banner;?>);">
				<div class="row align-self-center">
					<div class="col">
						<?php if( $services_cpt_title_subbanner || $services_cpt_text_subbanner ):?>
						<aside class="ms-md-5 ms-sm-4 ms-0">
							<?php if($services_cpt_superscript_title_subbanner):?><div class="sup-title text-uppercase mb-3"><?php echo $services_cpt_superscript_title_subbanner;?></div><?php endif;?>
							<?php if($services_cpt_title_subbanner):?><h2 class="mb-3"><?php echo $services_cpt_title_subbanner;?></h2><?php endif;?>
							<?php echo $services_cpt_text_subbanner;?>
							<?php if($optlBtnLink): $_target = ($optlBtnLink['target'] == '_blank') ? '_blank' : '_self';?>
								<a class="text-center button button--blue-gradient" href="<?php echo $optlBtnLink['url'];?>" target="<?php echo $_target;?>"><?php echo $optlBtnLink['title'];?></a>
							<?php endif;?>
						</aside>
						<?php endif;?>
					</div>
				</div>
			</div>
		</div> <!--/.container-lg-->
	</section>

	<div class="section-divider-100"></div>
	<?php get_template_part('templates/component/frequently_asked_section');?>
	<div class="page-wrapper-bottom-bg-center"></div>
</div> <!--/.single-services-page-wrapper-->
<?php get_footer();?>
