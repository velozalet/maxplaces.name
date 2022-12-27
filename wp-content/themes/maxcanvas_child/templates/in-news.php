<?php
/**
 * Template Name: In the News
 *
 * @package maxcanvas
 */
?>
<?php get_header();?>
<?php
$get_queried_object = get_queried_object();
$new_categories = get_categories_of_cpt('news-taxonomy', 'title', 'ASC'); $news_posts = get_needs_posts('news', -1, 0, '', 'date', 'DESC');

$in_new_page_see_current_ids = get_field('in_new_page_see_current', get_the_ID() ); $in_new_page_see_currents = [];
for( $i=0,$cnt=count($news_posts); $i < $cnt; $i++ ){ if( in_array($news_posts[$i]->ID, $in_new_page_see_current_ids) ){ array_push($in_new_page_see_currents, $news_posts[$i]); } }
?>
<div class="in-news-page-wrapper">
	<?php get_template_part('templates/component/header_page_title_section');?>

	<section class="in-news--filter-trigger-block mt-5 mb-5">
		<div class="container-xl">
			<div class="row">
				<?php $i_cnt=0; foreach($new_categories as $news_cat):?>
					<div class="col">
						<div id="__<?php echo $news_cat->slug;?>" class="in-news--filter-trigger-item <?php echo ($i_cnt == 0) ? '--act' :'';?>" data-id="<?php echo $news_cat->term_id;?>" data-slug="<?php echo $news_cat->slug;?>">
							<a class="text-decoration-none" href="#"><?php echo $news_cat->cat_name;?></a>
						</div>
					</div>
				<?php $i_cnt++; endforeach;?>
			</div>
		</div>
	</section>

	<section class="in-news-page--collection mb-5">
		<div class="container-xl">
			<div class="row">
				<div class="wrapper">
					<?php foreach($news_posts as $news_post):?>
						<?php $news_categories_arr = get_categories_of_cpt_by_id($news_post->ID,'news-taxonomy');?>
						<div class="wrapper-item flip --basic" data-id="<?php echo $news_post->ID;?>" data-name="<?php echo $news_post->post_name;?>" data-categories="<?php foreach($news_categories_arr as $news_cats){ echo $news_cats->slug.' '; };?>">
							<div class="front">
								<img src="<?php echo get_featured_img_by_id($news_post->ID);?>" alt="<?php echo $news_post->post_name;?>">
								<div><?php echo $news_post->post_content;?></div>
								<a class="learn-more-link learn-more-link-pipirka text-uppercase text-decoration-none" href="<?php echo $news_post->post_excerpt;?>" target="_blank">
									<img src="<?php echo get_stylesheet_directory_uri();?>/img/pipirka.svg" alt=""> Learn More
								</a>
							</div>
							<div class="back">
								<img src="<?php echo get_featured_img_by_id($news_post->ID);?>" alt="<?php echo $news_post->post_name;?>">
								<div><?php echo $news_post->post_content;?></div>
								<a class="learn-more-link learn-more-link-pipirka text-uppercase text-decoration-none" href="<?php echo $news_post->post_excerpt;?>" target="_blank">
									<img src="<?php echo get_stylesheet_directory_uri();?>/img/pipirka.svg" alt=""> Learn More
								</a>
							</div>
						</div>
					<?php endforeach;?>
				</div>
			</div> <!--/.row -->
		</div> <!--/.container-xl -->
	</section>

	<section class="in-news-page--collection mb-5">
		<div class="container-xl">
			<h2 class="header-page-title mt-5 mb-4">See current</h2>
			<div class="row">
				<div class="wrapper">
					<?php foreach($in_new_page_see_currents as $news_post):?>
						<div class="wrapper-item flip --see-current">
							<div class="front">
								<img src="<?php echo get_featured_img_by_id($news_post->ID);?>" alt="<?php echo $news_post->post_name;?>">
								<div><?php echo $news_post->post_content;?></div>
								<a class="learn-more-link learn-more-link-pipirka text-uppercase text-decoration-none" href="<?php echo $news_post->post_excerpt;?>" target="_blank">
									<img src="<?php echo get_stylesheet_directory_uri();?>/img/pipirka.svg" alt=""> Learn More
								</a>
							</div>
							<div class="back">
								<img src="<?php echo get_featured_img_by_id($news_post->ID);?>" alt="<?php echo $news_post->post_name;?>">
								<div><?php echo $news_post->post_content;?></div>
								<a class="learn-more-link learn-more-link-pipirka text-uppercase text-decoration-none" href="<?php echo $news_post->post_excerpt;?>" target="_blank">
									<img src="<?php echo get_stylesheet_directory_uri();?>/img/pipirka.svg" alt=""> Learn More
								</a>
							</div>
						</div>
					<?php endforeach;?>
				</div>
			</div>
		</div>
	</section>

</div> <!--/.in-news-page-wrapper-->
<?php get_footer();?>
