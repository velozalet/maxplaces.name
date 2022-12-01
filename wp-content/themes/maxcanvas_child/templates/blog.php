<?php
/**
 * Template Name: Blog
 *
 * @package maxcanvas
 */
?>
<?php get_header();?>
<?php
$sort_by_select = null;
if($_POST){ if( $_POST["sort_by_select"] ){ $sort_by_select = $_POST["sort_by_select"]; } }
if(!$sort_by_select){ $sort_by_select = ''; }
//dd($sort_by_select);
?>
<div class="blog-archive-page-wrapper blog-list">
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
								<img src="<?php echo get_stylesheet_directory_uri();?>/img/pipirka.svg" alt=""> Learn More
							</a>
						</aside>
					</div>
				</div>
			</div>
		</div> <!--/.container-xl-->
	</section>

	<section class="blog-archive--function-panel mt-5 mb-md-5 mb-4">
		<div class="container-xl">
			<div class="row justify-content-center">
				<div class="col-md-6 col-12">
					<form id="sortBySelectForm" action="" method="post">
						<select name="sort_by_select" id="sortBySelect" class="form-select ps-0" aria-label="Sort by date:" required>
							<option value="" disabled selected>Sort by date:</option>
							<option value="desc" <?php echo ($sort_by_select == 'desc') ? 'selected': '';?>>more to less</option>
							<option value="asc" <?php echo ($sort_by_select == 'asc') ? 'selected': '';?>>less to more</option>
						</select>
					</form>
				</div>
				<div class="col-md-6 col-12">
					<form id="postsSearchForm" class="row g-3" style="position:relative;">
						<div class="col-auto">
							<input id="searchPostArticle" type="search" class="form-control ps-0" placeholder="Search by title:">
						</div>
						<div class="col-auto">
							<button type="submit" class="btn btn-primary mb-3 pe-0">
								<img src="<?=get_stylesheet_directory_uri();?>/img/lens-icon.svg" alt="">
							</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>

	<section class="blog-archive--articles mt-md-5 mt-4 mb-md-5 mb-0">
		<?php
		$post_type = 'post';
		$post_status = 'publish';
		$category = 0;
		$category_name = '';
		$orderby = 'date'; //'date'|'title'
		$order = $sort_by_select; //'DESC'|'ASC'
		$posts_per_page = 4;
		$all_posts = get_posts_for_pagination($post_type, $posts_per_page, $post_status, $category, $category_name, $orderby, $order);
		?>
		<div class="container-xl">
			<div id="postArticlesWithPagination" class="row justify-content-center">
				<?php foreach( $all_posts as $post_i ):?>
					<div class="col-md-6 col-12 mb-3 article" data-postId="<?=$post_i->ID;?>">
						<div class="label-blog">blog</div>
						<a href="<?=$post_i->guid;?>">
							<div class="blog-archive--article-bg" style="background-image:url(<?=wp_get_attachment_url( get_post_thumbnail_id($post_i->ID) );?>);"></div>
						</a>
						<div class="blog-date-gradient text-uppercase mt-2 mb-lg-2 mb-0"><?=date_format( date_create($post_i->post_date),"d M Y" );?></div>
						<div class="blog-archive-sub-banner--title text-capitalize mb-3">
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

			<?php
			$post_type = 'post';
			$post_status = 'publish';
			$category = 0;
			$category_name = '';
			$orderby = 'date'; //'date'|'title'
			$order = $sort_by_select; //'DESC'|'ASC'
			$posts_per_page = -1;
			$all_posts_for_search = get_posts_for_pagination($post_type, $posts_per_page, $post_status, $category, $category_name, $orderby, $order);
			?>
			<div id="allPostArticlesForSearch" class="row d-none">
				<aside class="text-center" style="color:#ED1C24;letter-spacing:0.2rem;">No search result...</aside>
				<?php foreach( $all_posts_for_search as $post_i ):?>
					<div class="col-md-6 col-12 mb-3 article" data-postId="<?=$post_i->ID;?>">
						<div class="label-blog">blog</div>
						<a href="<?=$post_i->guid;?>">
							<div class="blog-archive--article-bg" style="background-image:url(<?=wp_get_attachment_url( get_post_thumbnail_id($post_i->ID) );?>);"></div>
						</a>
						<div class="blog-date-gradient text-uppercase mt-2 mb-lg-2 mb-0"><?=date_format( date_create($post_i->post_date),"d M Y" );?></div>
						<div class="blog-archive-sub-banner--title text-capitalize mb-3">
							<a class="--posts-title-link" href="<?=$post_i->guid;?>"><?=$post_i->post_title;?></a>
						</div>
					</div>
				<?php endforeach;?>
			</div>
		</div> <!--/.container-xl-->
	</section>

</div> <!--/.blog-archive-wrapper-->
<?php get_footer();?>
