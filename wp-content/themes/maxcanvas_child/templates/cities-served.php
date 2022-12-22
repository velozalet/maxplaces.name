<?php
/**
 * Template Name: Cities Served
 *
 * @package maxcanvas
 */
?>
<?php get_header();?>
<?php
$get_queried_object = get_queried_object();
//Jotform Contact Form
$cities_served_page_is_display_cf = get_field('cities_served_page_is_display_cf', get_the_ID() ); $cities_served_page_title_cf = get_field('cities_served_page_title_cf', get_the_ID() ); $cities_served_page_text_cf = get_field('cities_served_page_text_cf', get_the_ID() );
//__/Jotform Contact Form

//Cities Served Section Tab
$cities_served_content_superscript_title = get_field('cities_served_content_superscript_title', get_the_ID() ); $cities_served_content_title = get_field('cities_served_content_title', get_the_ID() ); $cities_served_text_content = get_field('cities_served_text_content', get_the_ID() ); $cities_served_content_img = get_field('cities_served_content_img', get_the_ID() );
//__/Cities Served Section Tab

//__/Cities Served Section Tab
$cities_served_icon_items = get_field('cities_served_icon_items', get_the_ID() );
//__/Cities Served Section Tab
?>
<div class="cities-served-page-wrapper">
	<?php get_template_part('templates/component/header_page_title_section');?>
	<?php get_template_part('templates/component/page_banner_section');?>

	<div class="section-divider-100"></div>
	<div class="frequently-asked-section--bg-wrapper">
		<?php get_template_part('templates/component/frequently_asked_section');?>
	</div>

	<div class="section-divider-100"></div>

	<?php if($cities_served_page_is_display_cf):?>
	<section class="getintouch-section-contact-form">
		<div class="container-xl getintouch-section-contact-form-container" style="padding-left:0; padding-right:0;">
			<div class="text-center">
				<h2><?php echo $cities_served_page_title_cf;?></h2>
				<p class="mt-3"><?php echo $cities_served_page_text_cf;?></p>
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

	<div class="page-wrapper-bottom-bg-ameb"></div>
	<section class="cities-served-page-map">
		<div class="container-lg">
			<div class="cities-served-page-map--bg" style="background-image: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id($get_queried_object->ID) );?>);"></div>
			<aside>
				<div class="row align-items-lg-end">
					<div class="col-sm-6 col-12">
						<?php if($cities_served_content_superscript_title):?><div class="sup-title text-uppercase mb-3"><?php echo $cities_served_content_superscript_title;?></div><?php endif;?>
						<?php if($cities_served_content_title):?><h2><?php echo $cities_served_content_title;?></h2><?php endif;?>
					</div>
					<div class="col-sm-6 col-12">
						<?php if($cities_served_text_content):?><p class="mt-3"><?php echo $cities_served_text_content;?></p><?php endif;?>
					</div>
				</div>
				<div class="cities-served--map text-center">
					<?php if($cities_served_content_img):?><img class="img-fluid" src="<?php echo $cities_served_content_img;?>" alt="<?php echo get_bloginfo('name');?>"><?php endif;?>
				</div>
				<div class="row cities-served--cities justify-content-center">
					<?php foreach( $cities_served_icon_items as $i_item ):?>
					<div class="col-xl-3 col-md-4 col-sm-6 col-6 mb-md-5 mb-3 text-sm-start text-center">
						<img src="<?php echo $i_item['icon'];?>" alt="<?php echo get_bloginfo('name');?>">
						<span class="text-uppercase ms-sm-2 ms-0 mt-sm-0 mt-1"><?php echo $i_item['text'];?></span>
					</div>
					<?php endforeach;?>
				</div>
			</aside>
		</div>
	</section>

</div> <!--/.cities-served-page-wrapper-->
<?php get_footer();?>
