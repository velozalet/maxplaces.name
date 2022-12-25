<?php
/**
 * Template Name: Request Quote
 *
 * @package maxcanvas
 */
?>
<?php get_header();?>
<?php
$get_queried_object = get_queried_object();
//Slot content Tab
$requestQuoteSuperscriptTitle = get_field('request_quote_superscript__title_page', get_the_ID() ); $requestQuoteTitle = get_field('request_quote_title_page', get_the_ID() ); $requestQuoteText = get_field('request_quote_superscript_text_page', get_the_ID() );
//__/Slot content Tab

//Billboard Banner
$bg_image_billboard_banner = get_field('background_image_billboard_banner', get_the_ID() );
$superscript_title_billboard_banner = get_field('superscript_title_billboard_banner', get_the_ID() );
$title_billboard_banner = get_field('title_billboard_banner', get_the_ID() );
$text_billboard_banner = get_field('text_billboard_banner', get_the_ID() );
$optlBtnLink = get_field('optional_button_link', get_the_ID() ); //$optlBtnLink['title']// $optlBtnLink['url']// $optlBtnLink['target']
//__/Billboard Banner
?>
<div class="request-quote-page-wrapper">
	<?php get_template_part('templates/component/header_page_title_section');?>

	<section class="request-quote--section1 mt-5">
		<div class="a-w-c--bg"></div>
		<div class="container-xl">
			<div class="row">
				<div class="col-lg-5 col-12 mb-lg-0 mb-4 --awc-section-col1">
					<div class="">
						<?php if($requestQuoteSuperscriptTitle):?><div class="sup-title text-uppercase mb-3"><?php echo $requestQuoteSuperscriptTitle;?></div><?php endif;?>
						<?php if($requestQuoteTitle):?><h2 class="mb-3"><?php echo $requestQuoteTitle;?></h2><?php endif;?>
						<?php if($requestQuoteText):?><?php echo $requestQuoteText;?><?php endif;?>
					</div>
				</div> <!--col-n.--awc-section-col1-->
				<div class="col-lg col-12 --awc-section-col2 ps-lg-5 ps-md-2 ps-0">
					<div class="row">
						<section class="requestquote-section-contact-form">
							<div class="requestquote-section-contact-form-container">
								<div class="text-center">
									<div id="request_quote__form"> <!--https://eu.jotform.com/build/223132406993960--> <!--https://eu.jotform.com/myforms/-->
										<?php get_template_part('templates/component/request_quote_cf');?>
									</div> <!--#request_quote__form-->
								</div>
							</div>
						</section>
					</div>
				</div> <!--col-n.--awc-section-col2-->
			</div> <!--.row-->
		</div> <!--.container-x-->
	</section>
	<div class="section-divider-100 --section1"></div>

	<section class="request-quote--section2 mt-md-5 mt-4">
		<div class="container-xl">
			<div class="row d-flex align-items-center">
				<div class="col-lg-5 col-12 order-md-1 order-2">
					<div class="mt-lg-0 mt-sm-3 mt-3">
						<p><?php echo $get_queried_object->post_content;?></p>
					</div>
				</div>
				<div class="col-lg col-12 order-md-2 order-1">
					<div class="">
						<?php if( get_featured_img_by_id($get_queried_object->ID) ):?>
							<img class="img-fluid" src="<?php echo get_featured_img_by_id($get_queried_object->ID);?>" alt="<?php get_bloginfo('name');?>">
						<?php endif;?>
					</div>
				</div>
			</div> <!--.row-->
		</div> <!--.container-x-->
	</section>
	<div class="section-divider-100"></div>

	<section class="request-quote--services-include">
		<div class="container-xl">
			<div class="request-quote--services-include--bg d-flex" style="background-image: url(<?php echo $bg_image_billboard_banner;?>);">
				<div class="row align-self-center">
					<div class="col pe-0">
						<aside class="ms-md-5 ms-3">
							<?php if($superscript_title_billboard_banner):?><div class="sup-title text-uppercase mb-3"><?php echo $superscript_title_billboard_banner;?></div><?php endif;?>
							<?php if($title_billboard_banner):?><div class="services-include--title text-capitalize mb-3"><?php echo $title_billboard_banner;?></div><?php endif;?>
							<?php echo $text_billboard_banner;?>
						</aside>
					</div>
				</div>
			</div>
		</div> <!--.container-lg-->
	</section>


	<div class="page-wrapper-bottom-bg"></div>
</div> <!--/.request-quote-page-wrapper-->
<?php get_footer();?>
