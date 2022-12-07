<?php get_header();?>
<?php
$address_1 = get_field('address_-1','options');
?>
<div class="cities-served-page-wrapper single-cities-page-wrapper">
	<?php get_template_part('templates/component/header_page_title_section');?>
	<?php get_template_part('templates/component/page_banner_city_section');?>
	<div class="section-divider-100"></div>
	<?php get_template_part('templates/component/testimonials_city_slider');?>
	<div class="section-divider-100"></div>

	<section class="single-cities--address-info">
		<div class="container-xl">
			<div class="row d-flex align-items-center">
				<div class="col-lg-6 col-12 ps-lg-5 ps-3">
					<div class="city-address-info">
						<div class="sup-title text-uppercase mb-3">contact</div>
						<h2>Lorem Ipsum dolor</h2>

						<h6 class="mt-4 mb-3"><?php echo $address_1['address_slot_1'];?></h6> <!-- --City Name-- -->
						<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.
						</p>
						<p>Phone: <a href="tel:<?php echo get_numerics($address_1['phone']);?>"><strong><?php echo $address_1['phone'];?></strong></a> | <a href="tel:<?php echo get_numerics($address_1['phone_2']);?>"><strong><?php echo $address_1['phone_2'];?></strong></a> </p>
						<p>E-mail: <a href="mailto:<?php echo $address_1['email'];?>"><strong><?php echo $address_1['email'];?></strong></a> </p>
					</div>
				</div>
				<div class="col-lg-6 col-12">
					<div class="text-center">
						<img class="img-fluid" src="<?=get_stylesheet_directory_uri();?>/img/istockphoto-city-example.jpg" alt="">
					</div>
				</div>
			</div>
		</div>
	</section>

	<?php get_template_part('templates/component/frequently_asked_city_section');?>
	<div class="section-divider-100"></div>
</div> <!--.single-cities-page-wrapper-->
<?php get_footer();?>