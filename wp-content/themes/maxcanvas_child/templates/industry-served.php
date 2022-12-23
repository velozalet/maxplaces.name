<?php
/**
 * Template Name: Industry Served
 *
 * @package maxcanvas
 */
?>
<?php get_header();?>
<?php
$get_queried_object = get_queried_object();
//Billboard Banner
$bg_image_billboard_banner = get_field('background_image_billboard_banner', get_the_ID() ); $superscript_title_billboard_banner = get_field('superscript_title_billboard_banner', get_the_ID() ); $title_billboard_banner = get_field('title_billboard_banner', get_the_ID() ); $text_billboard_banner = get_field('text_billboard_banner', get_the_ID() ); $optlBtnLink = get_field('optional_button_link', get_the_ID() ); //$optlBtnLink['title']// $optlBtnLink['url']// $optlBtnLink['target']
//__/Billboard Banner

//Industry Served internal links
$industry_served_posts_relation = get_field('industry_served_posts_relation', get_the_ID() );
//__/Industry Served internal links

//Jotform Contact Form
$industryServedPageIsDisplay_cf = get_field('industry_served_page_is_display_cf', get_the_ID() ); $industryServedPageTitle_cf = get_field('industry_served_page_title_cf', get_the_ID() ); $industryServedPageText_cf = get_field('industry_served_page_text_cf', get_the_ID() );
//__/Jotform Contact Form

//Slider
$industryServedPageSliderSuperscriptTitleSection = get_field('industry_served_page_slider_superscript_title_section', get_the_ID() ); $industryServedPageSliderTitleSection = get_field('industry_served_page_slider_title_section', get_the_ID() ); $industryServedPageSlider = get_field('industry_served_page_slider', get_the_ID() );
//__/Slider

//Slot Content Tab
$industryServedSlotcontentImage = get_field('industry_served_slotcontent_image', get_the_ID() ); $industryServedSlotcontentSuperscriptTitle = get_field('industry_served_slotcontent_superscript_title', get_the_ID() ); $industryServedSlotcontentTitle = get_field('industry_served_slotcontent_title', get_the_ID() ); $industryServedSlotcontentText = get_field('industry_served_slotcontent_text', get_the_ID() );
//__/Slot Content Tab
?>
<div class="industry-served-page-wrapper">
	<?php get_template_part('templates/component/header_page_title_section');?>

	<section class="industry-served-page--f-st">
		<div class="container-lg">
			<div class="industry-served-page--f-st--bg" style="background-image: url(<?php echo $bg_image_billboard_banner;?>)"></div>

			<aside>
				<div class="row align-items-lg-end mb-md-5 mb-3">
					<div class="col-sm-6 col-12">
						<?php if($superscript_title_billboard_banner):?><div class="sup-title text-uppercase mb-3"><?php echo $superscript_title_billboard_banner;?></div><?php endif;?>
						<?php if($title_billboard_banner):?><h2><?php echo $title_billboard_banner;?></h2><?php endif;?>
					</div>
					<div class="col-sm-6 col-12 mt-3"><?php if($text_billboard_banner):?><?php echo $text_billboard_banner;?><?php endif;?></div>
				</div>
				<div class="row industry-served--serveds justify-content-center">
					<?php foreach($industry_served_posts_relation as $i_s_item):?>
					<div class="col-xl-3 col-md-4 col-sm-6 col-6 mb-md-5 mb-3 text-sm-start text-center d-sm-flex d-block align-items-center">
						<a href="<?php echo $i_s_item->guid;?>" class="text-decoration-none"><img src="<?php echo get_field('industry_served_icon', $i_s_item->ID );?>" alt="<?php echo get_bloginfo('name');?>"></a>
						<span class="text-uppercase ms-sm-2 ms-0 mt-sm-0 mt-1"><a href="<?php echo $i_s_item->guid;?>" class="text-decoration-none text-body"><?php echo $i_s_item->post_title;?></a></span>
					</div>
					<?php endforeach;?>
				</div>
			</aside>
		</div>
	</section>

	<section class="industry-served-page--case-slider">
		<div class="container-xl">
			<div class="row row-height"> <!--g-0-->
				<div class="col-lg-4 col-12" id="dynamic_content__industry_served_case_slider">
					<kbd class="d-none">
						<ul><?php foreach($industryServedPageSlider as $d ):?><li><p><?php echo $d['industry_served_page_slider_title_slide']?></p><p><?php echo $d['industry_served_page_slider_text_slide']?></p></li><?php endforeach;?></ul>
					</kbd>
					<?php if($industryServedPageSliderSuperscriptTitleSection):?><div class="sup-title text-uppercase mb-3"><?php echo $industryServedPageSliderSuperscriptTitleSection;?></div><?php endif;?>
					<?php if($industryServedPageSliderTitleSection):?><h2 class="mb-md-5 mb-3"><?php echo $industryServedPageSliderTitleSection;?></h2><?php endif;?>

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
								<?php foreach($industryServedPageSlider as $itemSlider):?>
								<li class="splide__slide"> <!--img-fluid-->
									<div class="vual"></div>
									<img src="<?php echo $itemSlider["industry_served_page_slider_image_slide"];?>" alt="<?php echo get_bloginfo('name');?>">
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
	<?php get_template_part('templates/component/frequently_asked_section');?>
	<div class="section-divider-100"></div>

	<?php if($industryServedPageIsDisplay_cf):?>
		<section class="getintouch-section-contact-form">
			<div class="container-xl getintouch-section-contact-form-container" style="padding-left:0; padding-right:0;">
				<div class="text-center">
					<h2><?php echo $industryServedPageTitle_cf;?></h2>
					<p class="mt-3"><?php echo $industryServedPageText_cf;?></p>
					<div id="get_in_touch__form"> <!--https://eu.jotform.com/build/223132406993960--> <!--https://eu.jotform.com/myforms/-->
						<?php get_template_part('templates/component/getintouch_cf');?>
					</div> <!--#get_in_touch__form-->
				</div>

				<!--			<div class="text-center mt-4">-->
				<!--				<a class="text-center button button--blue-gradient" href="#" target="_self">submit</a>-->
				<!--			</div>-->
			</div>
		</section>
	<?php endif;?>
	<div class="section-divider-100"></div>

	<section class="industry-served-page--l-st">
		<div class="pisdiv">
			<img class="img-fluid" src="<?php echo $industryServedSlotcontentImage;?>" alt="<?php echo get_bloginfo('name');?>">
		</div>

		<div class="container-xl">
			<div class="row d-flex align-items-center">
				<div class="col text-center mb-lg-0 mb-5">
					<img class="img-fluid if-img" src="<?php echo $industryServedSlotcontentImage;?>" alt="<?php echo get_bloginfo('name');?>">
				</div>
				<div class="col-lg-7 col-12">
					<div class="industry-served-page--l-st--content">
						<?php if($industryServedSlotcontentSuperscriptTitle):?><div class="sup-title text-uppercase mb-3"><?php echo $industryServedSlotcontentSuperscriptTitle;?></div><?php endif;?>
						<?php if($industryServedSlotcontentTitle):?><h2 class="mb-3"><?php echo $industryServedSlotcontentTitle;?></h2><?php endif;?>
						<?php if($industryServedSlotcontentText):?><?php echo $industryServedSlotcontentText;?><?php endif;?>
					</div>
				</div>
			</div>
		</div>
	</section>
	<div class="section-divider-100"></div>

	<div class="page-wrapper-bottom-bg-home"></div>
</div> <!--/.industry-served-page-wrapper-->
<?php get_footer();?>
