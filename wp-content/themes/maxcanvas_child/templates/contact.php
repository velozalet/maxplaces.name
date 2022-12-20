<?php
/**
 * Template Name: Contact
 *
 * @package maxcanvas
 */
?>
<?php get_header();?>
<?php
$get_queried_object = get_queried_object();
$address_1 = get_field('address_-1','options'); $address_2 = get_field('address_-2','options'); $socialLinks = get_field('social_links','options');
$superscript_title_billboard_banner = get_field('superscript_title_billboard_banner', get_the_ID() ); $title_billboard_banner = get_field('title_billboard_banner', get_the_ID() ); $text_billboard_banner = get_field('text_billboard_banner', get_the_ID() );
$contactus_content_superscript_title = get_field('contactus_content_superscript_title', get_the_ID() ); $contactus_content_title = get_field('contactus_content_title', get_the_ID() ); $contactus_content_image = get_field('contactus_content_image', get_the_ID() ); $contactus_content_textcontent = get_field('contactus_content_textcontent', get_the_ID() );
?>
<div class="request-quote-page-wrapper contactus-page-wrapper">
	<?php get_template_part('templates/component/header_page_title_section');?>

	<section class="request-quote--section1 contactus--section1 mt-5">
		<div class="a-w-c--bg"></div>
		<div class="container-xl">
			<div class="row">
				<div class="col-lg-5 col-12 mb-lg-0 mb-4 --awc-section-col1" style="padding-left:0; padding-right:0;">
					<div class="">
						<?php if($superscript_title_billboard_banner):?><div class="sup-title text-uppercase mb-3"><?php echo $superscript_title_billboard_banner;?></div><?php endif;?>
						<?php if($title_billboard_banner):?><h2><?php echo $title_billboard_banner;?></h2><?php endif;?>
						<?php if($text_billboard_banner):?><p class="mt-3"><?php echo $text_billboard_banner;?></p><?php endif;?>
					</div>
				</div> <!--col-n.--awc-section-col1-->
				<div class="col-lg col-12 --awc-section-col2 ps-lg-5 ps-md-2 ps-0">
					<div class="row">
						<section class="requestquote-section-contact-form contactus-section-contact-form">
							<div class="requestquote-section-contact-form-container contactus-section-contact-form-container">
								<div class="text-center">
									<div id="get_in_touch__form"> <!--https://eu.jotform.com/build/223132406993960--> <!--https://eu.jotform.com/myforms/-->
										<?php get_template_part('templates/component/getintouch_cf');?>
									</div> <!--#get_in_touch__form-->
								</div>
							</div>
						</section>
					</div>
				</div> <!--col-n.--awc-section-col2-->
			</div> <!--.row-->
		</div> <!--.container-x-->
	</section>
	<div class="section-divider-100 --section1"></div>

	<section class="request-quote--section2 contactus--section2 mt-md-5 mt-4">
		<div class="container-xl">
			<div class="text-center">
				<?php if($contactus_content_superscript_title):?><div class="sup-title text-uppercase mb-3"><?php echo $contactus_content_superscript_title;?></div><?php endif;?>
				<?php if($contactus_content_title):?><h2 class="mb-md-5 mb-3"><?php echo $contactus_content_title;?></h2><?php endif;?>
			</div>
			<div class="row d-flex align-items-center">
				<?php if($contactus_content_image):?>
				<div class="col-lg col-12">
					<div class="text-lg-start text-md-center mb-lg-0 mb-md-3 mb-3">
						<img class="img-fluid" src="<?php echo $contactus_content_image;?>" alt="<?php echo get_bloginfo('name');?>">
					</div>
				</div>
				<?php endif;?>
				<div class="col-lg-5 col-12">
					<div class="">
						<?php echo $contactus_content_textcontent;?>
					</div>
				</div>
			</div> <!--.row-->
		</div> <!--.container-x-->
	</section>
	<div class="section-divider-100"></div>

	<section class="contactus--office-locations">
		<div class="contactus--office-locations--bg">
			<div class="container-xl">
				<div class="row d-flex align-items-center">
					<div class="col-sm-7 col-12 order-sm-1 order-2">
						<aside class="">
							<div class="sup-title text-uppercase mb-3 d-sm-block d-none">Contact</div>
							<h2 class="d-sm-block d-none">Our Office Locations</h2>
							<ul class="office-locations--address mt-5 ps-0">
								<div class="row">
									<div class="col-md col-12">
										<?php if($address_1):?>
											<li class="mb-3"><?php echo $address_1['address_slot_1'];?></li>
											<li><?php echo $address_1['address_slot_2'];?> <?php echo $address_1['address_slot_3'];?></li>
											<li>Phone: <a href="tel:<?php echo get_numerics($address_1['phone']);?>"><strong><?php echo $address_1['phone'];?></strong></a> | <a href="tel:<?php echo get_numerics($address_1['phone_2']);?>"><strong><?php echo $address_1['phone_2'];?></strong></a> </li>
											<li>E-mail: <a href="mailto:<?php echo $address_1['email'];?>"><strong><?php echo $address_1['email'];?></strong></a> </li>
										<?php endif;?>
									</div>
									<div class="col-md col-12">
										<?php if($address_2):?>
											<li class="mb-3"><?php echo $address_2['address_slot_1'];?></li>
											<li><?php echo $address_2['address_slot_2'];?><?php echo $address_2['address_slot_3'];?></li>
											<li>Phone: <a href="tel:<?php echo get_numerics($address_2['phone']);?>"><strong><?php echo $address_2['phone'];?></strong></a> | <a href="tel:<?php echo get_numerics($address_2['phone_2']);?>"><strong><?php echo $address_2['phone_2'];?></strong></a> </li>
											<li>E-mail: <a href="mailto:<?php echo $address_2['email'];?>"><strong><?php echo $address_2['email'];?></strong></a> </li>
										<?php endif;?>
									</div>
								</div>
							</ul>
						</aside>
					</div>
					<div class="sup-title text-uppercase mb-3 d-sm-none b-block">Contact</div>
					<h2 class="d-sm-none b-block mb-4">Our Office Locations</h2>
					<?php if( wp_get_attachment_url( get_post_thumbnail_id($get_queried_object->ID) ) ):?>
					<div class="col-sm col-12 order-sm-2 order-1">
						<div class="col-image--bg" style="background-image: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id($get_queried_object->ID) );?>);"></div>
					</div>
					<?php endif;?>
				</div>
			</div> <!--.container-xl-->
		</div>
	</section>

</div> <!--/.request-quote-page-wrapper-->
<?php get_footer();?>
