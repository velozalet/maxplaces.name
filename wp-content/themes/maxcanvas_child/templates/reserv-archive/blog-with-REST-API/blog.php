<?php
/**
 * Template Name: Blog
 *
 * @package maxcanvas
 */
?>
<?php get_header();?>
<div class="blog-archive-page-wrapper">
	<?php get_template_part('templates/component/header_page_title_section');?>

	<section class="blog-archive-sub-banner mt-5">
		<div class="container-xl">
			<div class="blog-archive-sub-banner--bg d-flex" style="background-image: url(<?php echo get_stylesheet_directory_uri();?>/img/istockphoto-1286815179-2048x2048-4.jpg);">
				<div class="row align-self-end">
					<div class="col pe-0">
						<aside>
							<div class="blog-date-gradient text-uppercase mb-3">august 2022</div>
							<div class="blog-archive-sub-banner--title text-capitalize mb-1">Troubleshoot Your SEO Issues Using the	Wayback Machine</div>
							<p class="mt-2">
								Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo...
							</p>
							<a class="learn-more-link learn-more-link-pipirka text-uppercase text-decoration-none" href="#">
								<img src="http://maxplaces.name/wp-content/themes/maxcanvas_child/img/pipirka.svg" alt=""> Learn More
							</a>
						</aside>
					</div>
				</div>
			</div>
		</div> <!--/.container-lg-->
	</section>

	<section class="blog-archive--function-panel mt-5 mb-5">
		<div class="container-xl">
			<div class="row">
				<div class="col-6">
					<form action="" style="width:30%;">
						<!--<label class="form-label" for="date">Sort by:</label>-->
						<select name="date" id="date" class="form-select ps-0" aria-label="Sort by:" style="color:grey; border-right:none; border-left:none; border-top:none; border-radius:0;">
							<option selected>Sort by:</option>
							<option value="more_less">more to less</option>
							<option value="less_more">less to more</option>
						</select>
					</form>
				</div>
				<div class="col-6">
					<form class="row g-3" style="position:relative;">
						<div class="col-auto" style="width:100%;">
							<input id="searchPostArticle" type="search" class="form-control ps-0" id="search" placeholder="Search" style="border-right:none; border-left:none; border-top:none; border-radius:0;">
						</div>
						<div class="col-auto" style="position:absolute; right:0;">
							<button type="submit" class="btn btn-primary mb-3 pe-0" style="background-color:transparent; border:none;">
								<img src="<?=get_stylesheet_directory_uri();?>/img/lens-icon.svg" alt="">
							</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>



	<section class="blog-archive--articles mt-5 mb-5">

		<div class="container-xl">
			<div class="row">

			</div>

		</div>
	</section>

</div> <!--/.blog-archive-wrapper-->
<?php get_footer();?>
