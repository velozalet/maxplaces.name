<?php
$address_superscript_title = get_sub_field('address_superscript_title');
$address_title = get_sub_field('address_title');
$address_place = get_sub_field('address_place');
$address_text = get_sub_field('address_text');
$address_image = get_sub_field('address_image');
$address_phone1 = get_sub_field('address_phone_1');
$address_phone2 = get_sub_field('address_phone_2');
$address_email = get_sub_field('address_email');
?>
<section class="single-cities--address-info">
	<div class="container-xl">
		<div class="row d-flex align-items-center">
			<div class="col-lg-6 col-12 ps-lg-5 ps-3">
				<div class="city-address-info">
					<?php if($address_superscript_title):?><div class="sup-title text-uppercase mb-3"><?php echo $address_superscript_title;?></div><?php endif;?>
					<?php if($address_title):?><h2><?php echo $address_title;?></h2><?php endif;?>
					<?php if($address_place):?><h6 class="mt-4 mb-3"><?php echo $address_place;?></h6><?php endif;?>
					<?php if($address_text):?><p><?php echo $address_text;?></p><?php endif;?>

					<?php if($address_phone1 || $address_phone2):?>
						<p>Phone:
							<?php if($address_phone1):?>
								<a href="tel:<?php echo get_numerics($address_phone1);?>"><strong><?php echo $address_phone1;?></strong></a>
							<?php endif;?>
							<?php if($address_phone2):?>
								| <a href="tel:<?php echo get_numerics($address_phone2);?>"><strong><?php echo $address_phone2;?></strong></a>
							<?php endif;?>
						</p>
					<?php endif;?>

					<?php if($address_email):?>
						<p>E-mail: <a href="mailto:<?php echo $address_email;?>"><strong><?php echo $address_email;?></strong></a></p>
					<?php endif;?>
				</div>
			</div>
			<?php if($address_image):?>
			<div class="col-lg-6 col-12">
				<div class="text-center">
					<img class="img-fluid" src="<?php echo $address_image;?>" alt="<?php echo get_bloginfo('name');?>">
				</div>
			</div>
			<?php endif;?>
		</div>
	</div>
</section>
