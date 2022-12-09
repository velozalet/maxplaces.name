<?php get_header();?>

<div class="cities-served-page-wrapper single-cities-page-wrapper">
	<?php get_template_part('templates/component/header_page_title_section');?>
	<?php get_template_part('templates/component/page_banner_city_section');?>
	<div class="section-divider-100"></div>

<!--	--><?php //get_template_part('templates/component/testimonials_city_slider');?>
<!--	<div class="section-divider-100"></div>-->

	<?php get_template_part('templates/content/flexible-city-content');?>
	<div class="section-divider-100"></div>
</div> <!--.single-cities-page-wrapper-->

<?php get_footer();?>