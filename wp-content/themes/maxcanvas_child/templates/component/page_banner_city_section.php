<?php
$get_queried_object = get_queried_object();
?>
<section class="cities-served-page-sub-banner cities-single-page-sub-banner mt-5">
	<div class="container-lg">
		<div class="cities-served-page-sub-banner--bg d-flex" style="background-image: url(<?php echo get_stylesheet_directory_uri();?>/img/istockphoto-1286815179-2048x2048-4.jpg);">
			<div class="row align-self-end">
				<div class="col pe-0">
					<aside class="">
						<div class="sup-title text-uppercase mb-3"><?php echo $get_queried_object->post_title;?></div>
						<h2><?php echo $get_queried_object->post_title;?></h2>
						<p class="mt-3">
							Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						</p>
						<a class="text-center button button--blue-gradient" href="#" target="_self">Optional BTN</a>
					</aside>
				</div>
			</div>
		</div>
	</div> <!--/.container-lg-->
</section>