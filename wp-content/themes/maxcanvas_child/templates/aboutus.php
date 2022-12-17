<?php
/**
 * Template Name: About Us
 *
 * @package maxcanvas
 */
?>
<?php get_header();?>
<?php
$get_queried_object = get_queried_object();
$services_superscript_title = get_field('aboutus_services_superscript_title', get_the_ID() );
$services_title = get_field('aboutus_services_title', get_the_ID() );
$services_text = get_field('aboutus_services_text', get_the_ID() );
$services_services_posts = get_field('aboutus_services_services', get_the_ID() );
?>
<div class="aboutus-page-wrapper">
	<?php get_template_part('templates/component/header_page_title_section');?>
	<?php get_template_part('templates/component/page_aboutus_banner_section');?>

	<section class="aboutus-single-cst-section">
		<div class="container-lg">
			<div class="row">
				<div class="col-6"></div>
				<div class="col-md-6 col-12">
					<p><?php echo $get_queried_object->post_content;?></p>
				</div>
			</div>
		</div>
	</section>

	<section class="aboutus-why-choose-section mt-5">
		<div class="a-w-c--bg"></div>
		<div class="container-lg">
			<div class="row">
				<div class="col-lg-5 col-12 mb-lg-0 mb-4 --awc-section-col1">
					<div class="">
						<?php if($services_superscript_title):?><div class="sup-title text-uppercase mb-3"><?php echo $services_superscript_title;?></div><?php endif;?>
						<?php if($services_title):?><h2><?php echo $services_title;?></h2><?php endif;?>
						<?php if($services_text):?><p class="mt-3"><?php echo $services_text;?></p><?php endif;?>
					</div>
				</div> <!--col-n.--awc-section-col1-->
				<?php if($services_services_posts):?>
				<div class="col-lg col-12 --awc-section-col2 ps-lg-5 ps-2">
					<div class="row">
						<?php $ss_post_cnt = 0; foreach($services_services_posts as $ss_post):?>
							<?php if($ss_post_cnt !== 0 && $ss_post_cnt%2 == 0):?><div class="w-100"></div><?php endif;?>
							<div class="col-sm col-12 mb-sm-4 mb-3" data-id="<?php echo $ss_post->ID;?>">
								<a href="<?php echo $ss_post->guid;?>" class="text-decoration-none">
									<div class="d-flex align-items-start">
										<img src="<?php echo get_field('service_icon',$ss_post->ID );?>" alt="<?php echo get_bloginfo('name');?>">
										<div class="ms-3">
											<p class="text-uppercase mb-1"> <strong><?php echo $ss_post->post_title;?></strong> </p>
											<p class="mb-0"><?php echo $ss_post->post_excerpt;?></p>
										</div>
									</div>
								</a>
							</div>
						<?php $ss_post_cnt++; endforeach;?>
					</div>
				</div> <!--col-n.--awc-section-col2-->
				<?php endif;?>
			</div> <!--.row-->
		</div> <!--.container-lg-->
	</section>

	<?php get_template_part('templates/component/frequently_asked_section');?>
	<div class="page-wrapper-bottom-bg"></div>
</div> <!--/.aboutus-page-wrapper-->

<?php get_footer();?>
