<?php
$testimonialPostID = get_sub_field('testimonial_post'); $testimonials_superscript_title = get_sub_field('testimonials_superscript_title'); $testimonials_title = get_sub_field('testimonials_title');
$testimonialsData = get_field('testimonials', $testimonialPostID );
?>
<section id="testimonials_section_for_city" class="casestudies_n_testimonials-section-fx-content single-cities-testimonials-section-fx-content mt-1">
	<div class="container-xl text-center mt-md-0 mt-5 --testimonials">
		<?php if($testimonials_superscript_title):?><div class="sup-title text-uppercase mb-3"><?php echo $testimonials_superscript_title;?></div><?php endif;?>
		<?php if($testimonials_title):?><h2 class="mb-md-5 mb-3"><?php echo $testimonials_title;?></h2><?php endif;?>

		<div id="__testimonials_city_slider" class="splide __testimonials-slider" aria-label="Testimonials City Slider">
			<div class="splide__track">
				<ul class="splide__list" style="padding-bottom:50px !important;">
					<?php foreach( $testimonialsData as $t_item ):?>
					<li class="splide__slide">
						<div class="--testimonials-col--item px-4 py-4">
							<blockquote class="text-start"><img src="<?php echo get_stylesheet_directory_uri();?>/img/blockquote-icon.svg" alt=""></blockquote>
							<p><?php echo $t_item['testimonials_text'];?></p>
							<div class="row align-items-center">
								<div class="col-2">
									<img class="testimonials-author-img" src="<?php echo $t_item['interviewee_photo'];?>" alt="">
								</div>
								<div class="col text-start ms-xxl-2 ms-xl-3 ms-lg-4 ms-md-3 ms-sm-0 ms-5">
									<div class="testimonials-author-name"><?php echo $t_item['interviewee_name'];?></div>
									<div class="testimonials-author-role"><?php echo $t_item['interviewee_position'];?></div>
								</div>
							</div>
						</div>
					</li>
					<?php endforeach;?>
				</ul>
			</div>
		</div>
	</div>
</section> <!--/#testimonials_section_for_city-->
<div class="section-divider-100"></div>