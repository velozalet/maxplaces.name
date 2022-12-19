<?php get_header();?>
<?php
$get_queried_object = get_queried_object();
$bg_image_billboard_banner = get_field('post_bg_image_banner', get_the_ID() );
?>
<div class="blog-archive-page-wrapper single-article-page-wrapper">
	<section class="blog-archive-sub-banner --single-article mt-5">
		<div class="container-xl">
			<?php if( !$bg_image_billboard_banner ){ $bg_image_billboard_banner = wp_get_attachment_url( get_post_thumbnail_id($get_queried_object->ID) ); }?>
			<div class="blog-archive-sub-banner--bg d-flex" style="background-image: url(<?php echo $bg_image_billboard_banner;?>);">
				<div class="row align-self-end --wwith">
					<div class="col pe-0">
						<aside>
							<h1 class="blog-archive-sub-banner--title text-capitalize mb-1 wow lightSpeedIn" data-wow-duration="1.2s" data-wow-delay="1s" style="visibility:hidden;"><?php echo $get_queried_object->post_title;?></h1>
							<div class="single-article--info-post mt-sm-5 mt-3">
								<ul class="ps-0">
									<li class="me-md-3 me-2 wow fadeInDown" data-wow-delay="2s" style="visibility:hidden;">
										<img src="<?php echo get_stylesheet_directory_uri();?>/img/clock-svg-icon.svg" alt=""> <span><?php echo date_format( date_create($get_queried_object->post_date),"d M Y" );?></span>
									</li>
									<li class="me-md-3 me-2 wow fadeInDown" data-wow-delay="2.3s" style="visibility:hidden;">
										<img src="<?php echo get_stylesheet_directory_uri();?>/img/author-svg-icon.svg" alt=""> <span><?php echo get_the_author_meta('display_name', $get_queried_object->post_author);?></span>
									</li>
									<li class="me-md-3 me-2 wow fadeInDown" data-wow-delay="2.6s" style="visibility:hidden;">
										<img src="<?php echo get_stylesheet_directory_uri();?>/img/comments-svg-icon.svg" alt=""> <span>Comments</span>
									</li>
								</ul>
							</div>
						</aside>
					</div>
				</div>
			</div>
		</div> <!--/.container-lg-->
	</section>

	<section class="single-article--post-content mt-5">
		<div class="container-xl">
			<div class="row">
				<div class="mx-auto">
					<?php while ( have_posts() ) : the_post(); ?>
						<h1 class="">
						<?php the_content();?>
						<?php if( has_post_thumbnail() ):?><img class="img-fluid mt-3" src="<?=get_the_post_thumbnail_url();?>" alt=""><?php endif;?>

						<!----><?php //echo get_the_excerpt();?>
						<!----><?php //echo get_permalink();?>
						<!----><?php //echo get_the_time('F j, Y');?>
					<?php endwhile; ?>

					<hr class="hr-article mt-5">
					 <div class="share-with-social-article"> <span class="me-3" style="display:none;">Share</span>
<!--						<a href="https://facebook.com/" class="text-decoration-none me-2" target="_blank">-->
<!--							<img src="--><?php //echo get_stylesheet_directory_uri();?><!--/img/social-icons/facebook-header-mobile-social-icon.png" alt="Maxplaces">-->
<!--						</a>-->
<!--						<a href="https://www.linkedin.com/" class="text-decoration-none me-2" target="_blank">-->
<!--							<img src="--><?php //echo get_stylesheet_directory_uri();?><!--/img/social-icons/in-header-mobile-social-icon.png" alt="Maxplaces">-->
<!--						</a>-->
<!--						<a href="https://twitter.com/" class="text-decoration-none me-2" target="_blank">-->
<!--							<img src="--><?php //echo get_stylesheet_directory_uri();?><!--/img/social-icons/twitter-header-mobile-social-icon.png" alt="Maxplaces">-->
<!--						</a>-->
<!--						<a href="https://instagram.com/" class="text-decoration-none me-2" target="_blank">-->
<!--							<img src="--><?php //echo get_stylesheet_directory_uri();?><!--/img/social-icons/insta-header-mobile-social-icon.png" alt="Maxplaces">-->
<!--						</a>-->
						 <?php dynamic_sidebar('share_links'); ?>
					</div>

					<!--Posts Navigation Bar-->
					<?php get_template_part('templates/component/posts_navigation_bar');?>
					<!--/Posts Navigation Bar-->
				</div>
			</div>
		</div>
	</section>


	<section class="single-article-page-direction-block">
	<?php
	?>
	</section>


	<section class="blog-archive--articles --for-single-article mt-md-5 mt-4 mb-md-5 mb-0">
		<?php
		$post_type = 'post';
		$post_status = 'publish';
		$category = 0;
		$category_name = '';
		$orderby = 'date'; //'date'|'title'
		$order = 'DESC'; //'DESC'|'ASC'
		$posts_per_page = 2;
		$all_posts_for_search = get_posts_for_pagination($post_type, $posts_per_page, $post_status, $category, $category_name, $orderby, $order);
		?>
		<div class="container-xl">
			<h2 class="mb-4">More interesting articles</h2>
			<div class="row justify-content-center">
				<?php foreach( $all_posts_for_search as $post_i ):?>
					<div class="col-md-6 col-12 mb-3 article" data-postId="<?php echo $post_i->ID;?>">
						<div class="label-blog">blog</div>
						<a href="<?php echo $post_i->guid;?>">
							<div class="blog-archive--article-bg" style="background-image:url(<?php echo wp_get_attachment_url( get_post_thumbnail_id($post_i->ID) );?>);"></div>
						</a>
						<div class="blog-date-gradient text-uppercase mt-2 mb-lg-2 mb-0"><?php echo date_format( date_create($post_i->post_date),"d M Y" );?></div>
						<div class="blog-archive-sub-banner--title text-capitalize mb-3">
							<a class="--posts-title-link" href="<?php echo $post_i->guid;?>"><?php echo $post_i->post_title;?></a>
						</div>
					</div>
				<?php endforeach;?>
			</div>
		</div> <!--/.container-xl-->
	</section>

	<div class="page-wrapper-bottom-bg-home"></div>
</div> <!--/.single-article-page-wrapper-->
<?php get_footer();?>
