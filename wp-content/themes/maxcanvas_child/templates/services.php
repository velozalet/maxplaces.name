<?php
/**
 * Template Name: Services
 *
 * @package maxcanvas
 */
?>
<?php get_header();?>

<?php
$get_queried_object = get_queried_object();

$bg_image_billboard_banner = get_field('background_image_billboard_banner', get_the_ID() );
$superscript_title_billboard_banner = get_field('superscript_title_billboard_banner', get_the_ID() );
$title_billboard_banner = get_field('title_billboard_banner', get_the_ID() );
$text_billboard_banner = get_field('text_billboard_banner', get_the_ID() );
$optlBtnLink = get_field('optional_button_link', get_the_ID() ); //$optlBtnLink['title']// $optlBtnLink['url']// $optlBtnLink['target']

$services_superscript_title = get_field('services_services_superscript_title', get_the_ID() );
$services_title = get_field('services_services_title', get_the_ID() );
$services_services_services_posts = get_field('services_services_services', get_the_ID() );

$services_page_is_display_cf = get_field('services_page_is_display_cf', get_the_ID() );
$services_page_title_cf = get_field('services_page_title_cf', get_the_ID() );
$services_page_text_cf = get_field('services_page_text_cf', get_the_ID() );
?>
<div class="services-page-wrapper">
	<?php get_template_part('templates/component/header_page_title_section');?>

	<!--Desktop Only-->
	<section class="services-section services-section--desktop mt-5 d-lg-block d-none">
		<div class="a-w-c--bg"></div>
		<div class="container-xl">
			<div class="row">
				<div class="col-lg-5 col-12 --s-section-col1">
					<div class="">
						<div class="sup-title text-uppercase mb-3"><?php echo $services_superscript_title;?></div>
						<h2><?php echo $services_title;?></h2>
					</div>
					<div id="cst_height_services_block"></div>
					<img src="<?php echo $bg_image_billboard_banner;?>" alt="<?php echo get_bloginfo('name');?>" style="height:465px;">
				</div> <!--col-n.--awc-section-col1-->


				<div class="col-lg col-12 ps-lg-5 ps-2 --s-section-col2" >
					<div class="row">
						<?php if($services_services_services_posts):?>
						<?php $ss_post_cnt = 0; foreach($services_services_services_posts as $ss_post):?>
							<?php if($ss_post_cnt !== 0 && $ss_post_cnt%2 == 0):?><div class="w-100"></div><?php endif;?>
							<div class="col-lg-5 col-xl-4 col-6 mt-5 mb-5" data-id="<?php echo $ss_post->ID;?>">
								<a class="service-item--link text-decoration-none" href="<?php echo $ss_post->guid;?>">
									<div class="position-relative">
										<img src="<?php echo get_field('service_icon',$ss_post->ID );?>">
										<img class="hover-effect-services-item" src="<?php echo get_stylesheet_directory_uri();?>/img/services/hover-effect-services-item.svg">
										<div class="mt-1">
											<p class="text-uppercase mb-1"><?php echo $ss_post->post_title;?></p>
										</div>
									</div>
								</a>
								<a class="learn-more-link learn-more-link-pipirka text-uppercase text-decoration-none" href="<?php echo $ss_post->guid;?>">
									<img src="<?php echo get_stylesheet_directory_uri();?>/img/pipirka.svg" alt=""> Learn More
								</a>
							</div>
						<?php $ss_post_cnt++; endforeach;?>
						<?php endif;?>

						<div class="asynchronous-madness-block">
							<div>
								<h2><?php echo $title_billboard_banner;?></h2>
								<p><?php echo $text_billboard_banner;?></p>
								<?php if($optlBtnLink): $_target = ($optlBtnLink['target'] == '_blank') ? '_blank' : '_self';?>
									<a class="text-center button button--blue-gradient" href="<?php echo $optlBtnLink['url'];?>" target="<?php echo $_target;?>"><?php echo $optlBtnLink['title'];?></a>
								<?php endif;?>
							</div>
						</div>
					</div>
				</div> <!--col-n.--awc-section-col2-->
			</div> <!--.row-->
		</div> <!--.container-lg-->
	</section>
	<!--/Desktop Only-->
	<!--Tablet & Mobile Only-->
	<section class="services-section services-section--mobile mt-5 d-lg-none d-block">
		<div class="a-w-c--bg"></div>
		<div class="container-xl">
			<div class="row">
				<div class="col-lg col-12 ps-lg-5 ps-2 --s-section-col2" >
					<div class="row">
						<div class=" --s-section-col1">
							<div class="">
								<div class="sup-title text-uppercase mb-3"><?php echo $services_superscript_title;?></div>
								<h2><?php echo $services_title;?></h2>
							</div>
						</div> <!--col-n.--awc-section-col1-->

						<?php if($services_services_services_posts):?>
						<?php $ss_post_cnt = 0; foreach($services_services_services_posts as $ss_post):?>
							<?php if($ss_post_cnt !== 0 && $ss_post_cnt%2 == 0):?><div class="w-100"></div><?php endif;?>
							<div class="col-lg-5 col-xl-4 col-6 mb-5 text-center">
								<a class="service-item--link text-decoration-none" href="<?php echo $ss_post->guid;?>">
									<div class="position-relative">
										<img src="<?php echo get_field('service_icon',$ss_post->ID );?>">
										<img class="d-none" src="<?php echo get_stylesheet_directory_uri();?>/img/services/hover-effect-services-item.svg" style="position:absolute; top:-50px; left:-50px;">
										<div class="mt-1">
											<p class="text-uppercase mb-1"><?php echo $ss_post->post_title;?></p>
										</div>
									</div>
								</a>
							</div>
						<?php $ss_post_cnt++; endforeach;?>
						<?php endif;?>
					</div>
				</div> <!--col-n.--awc-section-col2-->
			</div>
			<div class="mt-3 position-relative">
				<div class="ss--mobile-image-bg" style="background-image:url(<?php echo $bg_image_billboard_banner;?>)"></div>
				<div class="ss--mobile-text-block">
					<div>
						<h2><?php echo $title_billboard_banner;?></h2>
						<p><?php echo $text_billboard_banner;?></p>
						<?php if($optlBtnLink): $_target = ($optlBtnLink['target'] == '_blank') ? '_blank' : '_self';?>
							<a class="text-center button button--blue-gradient" href="<?php echo $optlBtnLink['url'];?>" target="<?php echo $_target;?>"><?php echo $optlBtnLink['title'];?></a>
						<?php endif;?>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--/Tablet & Mobile Only-->
	<div class="section-divider-100 --as-124"></div>


	<?php if($services_page_is_display_cf):?>
		<section class="getintouch-section-contact-form">
			<div class="container-xl getintouch-section-contact-form-container" style="padding-left:0; padding-right:0;">
				<div class="text-center">
					<h2><?php echo $services_page_title_cf;?></h2>
					<p class="mt-3"><?php echo $services_page_text_cf;?></p>
					<div id="get_in_touch__form"> <!--https://eu.jotform.com/build/223132406993960--> <!--https://eu.jotform.com/myforms/-->
						<?php get_template_part('templates/component/getintouch_cf');?>
					</div> <!--#get_in_touch__form-->
				</div>
				<!--            <div class="text-center mt-4">-->
				<!--                <a class="text-center button button--blue-gradient" href="#" target="_self">submit</a>-->
				<!--            </div>-->
			</div>
		</section>
	<?php endif;?>

	<div class="page-wrapper-bottom-bg"></div>
</div> <!--/.services-page-wrapper-->

<?php get_footer();?>
