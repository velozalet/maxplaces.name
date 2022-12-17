<?php get_header();?>
<?php
$get_queried_object = get_queried_object();
//Industry Served Internal: Banner
$isi_bg_image_banner = get_field('industry_server_int_bg_image_banner', get_the_ID() ); $isi_superscript_title_banner = get_field('industry_server_int_superscript_title_banner', get_the_ID() ); $isi_title_banner = get_field('industry_server_int_title_banner', get_the_ID() ); $isi_text_banner = get_field('industry_server_int_text_banner', get_the_ID() );
//__/Industry Served Internal: Banner

//Industry Served Internal: Slot Content
$isi_slotcontent_image = get_field('industry_server_int_slotcontent_image', get_the_ID() ); $isi_slotcontent_title = get_field('industry_server_int_slotcontent_title', get_the_ID() ); $isi_slotcontent_text = get_field('industry_server_int_slotcontent_text', get_the_ID() );
//__/Industry Served Internal: Slot Content

//Industry Served Internal: Jotform Contact Form
$isi_slotcontent_is_display = get_field('industry_server_int_is_display_cf', get_the_ID() ); $isi_slotcontent_title_cf = get_field('industry_server_int_title_cf', get_the_ID() ); $isi_slotcontent_text_cf = get_field('industry_server_int_text_cf', get_the_ID() );
//__/Industry Served Internal: Jotform Contact Form

//Industry Served Internal: Slot Content
$isi_bgimage_subbanner = get_field('industry_server_int_bg_image_subbanner', get_the_ID() ); $isi_superscript_title_subbanner = get_field('industry_server_int_superscript_title_subbanner', get_the_ID() ); $isi_title_subbanner = get_field('industry_server_int_title_subbanner', get_the_ID() ); $isi_text_subbanner = get_field('industry_server_int_text_subbanner', get_the_ID() );
//__/Industry Served Internal: Slot Content
?>
<div class="industry-served-page-wrapper single-industryserved-page-wrapper">

	<?php get_template_part('templates/component/header_page_title_section');?>

	<?php if($isi_bg_image_banner):?>
	<section class="industry-served-page--f-st single-industryserved-page--f-st">
		<div class="container-lg">
			<div class="industry-served-page--f-st--bg" style="background-image: url(<?php echo $isi_bg_image_banner;?>)"></div>
			<aside>
				<div class="row align-items-lg-end mb-md-5 mb-3">
					<div class="col-lg-6 col-md-4 col-12">
						<?php if($isi_superscript_title_banner):?><div class="sup-title text-uppercase mb-3"><?php echo $isi_superscript_title_banner;?></div><?php endif;?>
						<?php if($isi_title_banner):?>
							<h2 data-id="<?php echo $get_queried_object->ID;?>"><?php echo $isi_title_banner;?></h2>
						<?php else:?>
							<h2 data-id="<?php echo $get_queried_object->ID;?>"><?php echo $get_queried_object->post_title;?></h2>
						<?php endif;?>
					</div>
					<div class="col-lg-6 col-md-8 col-12"><?php echo $isi_text_banner;?></div>
				</div>
			</aside>
		</div>
	</section>
	<?php endif;?>

	<section class="single-industryserved-content-section mt-lg-5 mt-3">
		<div class="container-xl">
			<div class="row d-flex align-items-center">
				<?php if($isi_slotcontent_image):?>
				<div class="col-lg-6 col-12 order-lg-1 order-2">
					<div class="text-center"><img class="img-fluid" src="<?php echo $isi_slotcontent_image;?>" alt=""></div>
				</div>
				<?php endif;?>
				<div class="col-lg-6 col-12 ps-lg-5 ps-3 order-lg-2 order-1">
					<div class="">
						<h2><?php echo $isi_slotcontent_title;?></h2>
						<p><?php echo $isi_slotcontent_text;?></p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<?php if($isi_slotcontent_is_display):?>
	<section class="getintouch-section-contact-form">
		<div class="container-xl getintouch-section-contact-form-container" style="padding-left:0; padding-right:0;">
			<div class="text-center">
				<h2><?php echo $isi_slotcontent_title_cf;?></h2>
				<p class="mt-3"><?php echo $isi_slotcontent_text_cf;?></p>
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
	<!--<div class="page-wrapper-bottom-bg-ameb"></div>-->

	<section class="single-industryserved-sub-banner">
		<div class="container-lg">
			<div class="single-industryserved-sub-banner--bg d-flex" style="background-image: url(<?php echo $isi_bgimage_subbanner;?>">
				<div class="row align-self-center">
					<div class="col">
						<aside class="ms-md-5 ms-sm-4 ms-0">
							<?php if($isi_superscript_title_subbanner):?><div class="sup-title text-uppercase mb-3"><?php echo $isi_superscript_title_subbanner;?></div><?php endif;?>
							<?php if($isi_title_subbanner):?><h2><?php echo $isi_title_subbanner;?></h2><?php endif;?>
							<?php if($isi_text_subbanner):?><p class="mt-3"><?php echo $isi_text_subbanner;?></p><?php endif;?>
						</aside>
					</div>
				</div>
			</div>
		</div> <!--/.container-lg-->
	</section>
</div> <!--/.single-industryserved-page-wrapper-->
<?php get_footer();?>
