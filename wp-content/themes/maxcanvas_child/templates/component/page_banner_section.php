<?php
$get_queried_object = get_queried_object();
$bg_image_billboard_banner = get_field('background_image_billboard_banner', get_the_ID() );
$superscript_title_billboard_banner = get_field('superscript_title_billboard_banner', get_the_ID() );
$title_billboard_banner = get_field('title_billboard_banner', get_the_ID() );
$text_billboard_banner = get_field('text_billboard_banner', get_the_ID() );
$optlBtnLink = get_field('optional_button_link', get_the_ID() ); //$optlBtnLink['title']// $optlBtnLink['url']// $optlBtnLink['target']
?>
<?php if( $bg_image_billboard_banner && $title_billboard_banner ):?>
<section class="cities-served-page-sub-banner mt-5">
	<div class="container-lg">
		<div class="cities-served-page-sub-banner--bg d-flex" style="background-image: url(<?php echo $bg_image_billboard_banner;?>);">
			<div class="row align-self-end">
				<div class="col pe-0">
					<aside class="">
						<?php if($superscript_title_billboard_banner):?><div class="sup-title text-uppercase mb-3"><?php echo $superscript_title_billboard_banner;?></div><?php endif;?>
						<?php if($title_billboard_banner):?><h2><?php echo $title_billboard_banner;?></h2><?php endif;?>
						<?php if($text_billboard_banner):?><p class="mt-3"><?php echo $text_billboard_banner;?></p><?php endif;?>

						<?php if($optlBtnLink): $_target = ($optlBtnLink['target'] == '_blank') ? '_blank' : '_self';?>
							<a class="text-center button button--blue-gradient" href="<?php echo $optlBtnLink['url'];?>" target="<?php echo $_target;?>"><?php echo $optlBtnLink['title'];?></a>
						<?php endif;?>
					</aside>
				</div>
			</div>
		</div>
	</div> <!--/.container-lg-->
</section>
<?php endif;?>