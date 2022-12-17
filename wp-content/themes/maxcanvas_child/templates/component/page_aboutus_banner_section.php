<?php
$get_queried_object = get_queried_object();
$bg_image_billboard_banner = get_field('background_image_billboard_banner', get_the_ID() );
$superscript_title_billboard_banner = get_field('superscript_title_billboard_banner', get_the_ID() );
$title_billboard_banner = get_field('title_billboard_banner', get_the_ID() );
$text_billboard_banner = get_field('text_billboard_banner', get_the_ID() );
$optlBtnLink = get_field('optional_button_link', get_the_ID() ); //$optlBtnLink['title']// $optlBtnLink['url']// $optlBtnLink['target']
?>
<section class="page-banner-section mt-3 mb-5">
	<div class="container-lg">
		<div class="page-banner-bg" style="background-image: url(<?php echo $bg_image_billboard_banner;?>)"></div>

		<div class="row position-relative">
			<div class="page-banner-content-wrapper col-xxl-6 col-xl-6 col-lg-7 col-md-8 col-12">
				<div class="page-banner-content">
					<?php if($superscript_title_billboard_banner):?><div class="sup-title text-uppercase mb-3"><?php echo $superscript_title_billboard_banner;?></div><?php endif;?>
					<?php if($title_billboard_banner):?><h2><?php echo $title_billboard_banner;?></h2><?php endif;?>
					<?php if($text_billboard_banner):?><p class="mt-3"><?php echo $text_billboard_banner;?></p><?php endif;?>
					<?php if($optlBtnLink): $_target = ($optlBtnLink['target'] == '_blank') ? '_blank' : '_self';?>
						<a class="learn-more-link learn-more-link-pipirka text-uppercase text-decoration-none" href="<?php echo $optlBtnLink['url'];?>" target="<?php echo $_target;?>">
							<img src="<?php echo get_stylesheet_directory_uri();?>/img/pipirka.svg" alt="">&nbsp;<?php echo $optlBtnLink['title'];?>
						</a>
					<?php endif;?>
				</div>
			</div>
		</div>

	</div>
</section>