<?php
/**
 * Template Name: Case Study
 *
 * @package maxcanvas
 */
?>
<?php get_header();?>
<div class="blog-archive-page-wrapper blog-list cities-served-page-wrapper case-study-page-wrapper">
	<?php get_template_part('templates/component/header_page_title_section');?>
	<?php get_template_part('templates/component/page_banner_section');?>

	<section class="blog-archive-sub-banner mt-5" style="display: none">
		<div class="container-xl">
			<div class="blog-archive-sub-banner--bg case-study-sub-banner--bg d-flex" style="background-image: url(<?php echo get_stylesheet_directory_uri();?>/img/istockphoto-1073656146-2048x2048_55.jpg);">
				<div class="row align-self-end">
					<div class="col pe-0">
						<aside class="">
							<div class="sup-title text-uppercase mb-3">Lorem ipsum</div>
							<h2>Lorem ipsum dolor</h2>
							<p class="mt-3">
								Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
							</p>
							<a class="text-center button button--blue-gradient" href="#" target="_self">Optional BTN</a>
						</aside>
					</div>
				</div>
			</div>
		</div> <!--/.container-xl-->
	</section>

	<section class="blog-archive--articles mt-md-5 mt-4 mb-md-5 mb-0">
		<?php
		$post_type = 'cases';
		$post_status = 'publish';
		$category = 0;
		$category_name = '';
		$orderby = 'date'; //'date'|'title'
		$order = 'ASC'; //'DESC'|'ASC'
		$posts_per_page = 4;
		$all_posts = get_posts_for_pagination($post_type, $posts_per_page, $post_status, $category, $category_name, $orderby, $order);
		?>
		<div class="container-xl">
			<div id="postArticlesWithPagination" class="row justify-content-center">
				<?php foreach( $all_posts as $post_i ):?>
					<div class="col-md-6 col-12 mb-3 article" data-postId="<?=$post_i->ID;?>">
						<a href="<?=$post_i->guid;?>">
							<div class="blog-archive--article-bg" style="background-image:url(<?=wp_get_attachment_url( get_post_thumbnail_id($post_i->ID) );?>);"></div>
						</a>
						<div class="blog-archive-sub-banner--title text-capitalize mt-2 mb-3">
							<a class="--posts-title-link" href="<?=$post_i->guid;?>"><?=$post_i->post_title;?></a>
						</div>
					</div>
				<?php endforeach;?>
			</div>

			<section id="blog_pagination" class="blog-pagination mt-md-5 mt-2">
				<div class="container text-center">
					<!--pagination-->
					<nav class="text-center" aria-label="Page navigation example">
						<?php posts_navigation($posts_per_page, $post_type, $post_status, $category, $category_name, $orderby, $order);?>
					</nav>
					<!--pagination-->
				</div>
			</section>
		</div> <!--/.container-xl-->
	</section>
</div> <!--/.case-study-page-wrapper-->

<?php get_footer();?>
