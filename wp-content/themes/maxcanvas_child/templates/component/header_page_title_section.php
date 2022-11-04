<?php
$get_queried_object = get_queried_object();
$socialLinks = get_field('social_links','options');
?>
<section class="header-page-title-section mt-3 mb-5">
	<div class="container-lg">
		<div class="row align-items-center">
			<div class="col">
				<h1 class="header-page-title" data-itemid="<?php echo $get_queried_object->ID;?>" data-itemobject="<?php echo $get_queried_object->post_type;?>">
					<?php echo $get_queried_object->post_title;?>
				</h1>
			</div>
			<div class="col text-end d-md-block d-none">
				<a href="<?php echo $socialLinks['facebook'];?>" class="text-decoration-none me-2" target="_blank">
					<img src="<?php echo get_stylesheet_directory_uri();?>/img/social-icons/facebook-header-mobile-social-icon.png" alt="facebook">
				</a>
				<a href="<?php echo $socialLinks['linkedin'];?>" class="text-decoration-none me-2" target="_blank">
					<img src="<?php echo get_stylesheet_directory_uri();?>/img/social-icons/in-header-mobile-social-icon.png" alt="linkdin">
				</a>
				<a href="<?php echo $socialLinks['twitter'];?>" class="text-decoration-none me-2" target="_blank">
					<img src="<?php echo get_stylesheet_directory_uri();?>/img/social-icons/twitter-header-mobile-social-icon.png" alt="twitter">
				</a>
				<a href="<?php echo $socialLinks['instagram'];?>" class="text-decoration-none me-2" target="_blank">
					<img src="<?php echo get_stylesheet_directory_uri();?>/img/social-icons/insta-header-mobile-social-icon.png" alt="instagram">
				</a>
			</div>
		</div>
	</div>
</section>