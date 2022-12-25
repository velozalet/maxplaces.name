<?php
/**
 * Template Name: Leadership Team
 *
 * @package maxcanvas
 */
?>
<?php get_header();?>
<?php
$get_queried_object = get_queried_object();
//Leadership Team Persons
$leadershipTeamPersonsSuperscriptTitle = get_field('leadership_team_persons_superscript_title', get_the_ID() ); $leadership_team_persons_title = get_field('leadership_team_persons_title', get_the_ID() ); $leadership_team_persons = get_field('_leadership_team_persons', get_the_ID() );
//__/Leadership Team Persons

//Company logos Slider
$companyLogosSuperscriptTitleSection = get_field('company_logos_superscript_title_section', get_the_ID() ); $companyLogosTitleSection = get_field('company_logos_title_section', get_the_ID() ); $_companyLogosSlider = get_field('_company_logos_slider', get_the_ID() );
//__/Company logos Slider

//Case Studies
$leadershipTeamPersonsCasestudiesPostsTitle =  get_field('leadership_team_persons_casestudies_posts_title', get_the_ID() ); $leadershipTeamPersonsCasestudiesPosts =  get_field('leadership_team_persons_casestudies_posts', get_the_ID() );
//__/Case Studies
?>
<div class="cities-served-page-wrapper blog-archive-page-wrapper leadership-team-page-wrapper">
	<?php get_template_part('templates/component/header_page_title_section');?>
	<?php get_template_part('templates/component/page_banner_section');?>
	<div class="section-divider-100"></div>

	<section class="leadteam-person-section mt-sm-5 mt-0">
		<div class="container-xl">
			<?php if($leadershipTeamPersonsSuperscriptTitle):?><div class="sup-title text-uppercase mb-3 text-center"><?php echo $leadershipTeamPersonsSuperscriptTitle;?></div><?php endif;?>
			<?php if($leadership_team_persons_title):?><h1 class="text-center"><?php echo $leadership_team_persons_title;?></h1><?php endif;?>
			<div class="row justify-content-center row-cols-lg-3 row-cols-md-2 row-cols-1"><!--row-cols-lg-3 row-cols-md-2 row-cols-1 gap-2"-->
				<?php foreach( $leadership_team_persons as $person ):?>
					<div class="col text-center about-person--item-col">
						<div class="about-person--item">
							<div class="image-box"></div>
							<div class="image-box--before" style="background-image:url(<?php echo $person['leadership_team_persons_person_photo'];?>);"></div>
						</div>
						<div class="about-person--item-name mt-3"><?php echo $person['leadership_team_persons_person_name'];?></div>
						<div class="about-person--item-job"><?php echo $person['leadership_team_persons_person_position'];?></div>
					</div>
				<?php endforeach;?>
			</div>
		</div>
	</section>

	<section class="leadership-team-content-section mt-lg-5 mt-3">
		<div class="container-xl">
			<div class="row d-flex align-items-center">
				<div class="col-lg-6 col-12 order-lg-1 order-2">
					<div class="text-center">
						<?php if( get_featured_img_by_id($get_queried_object->ID) ):?>
							<img class="img-fluid" src="<?php echo get_featured_img_by_id($get_queried_object->ID);?>" alt="<?php echo get_bloginfo('name');?>">
						<?php endif;?>
					</div>
				</div>
				<div class="col-lg-6 col-12 ps-lg-5 ps-3 order-lg-2 order-1">
					<div class="">
						<!--<div class="sup-title text-uppercase mb-3">The Leadership Team</div>-->
						<p><?php echo $get_queried_object->post_content;?></p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="leadership-team-companylogos-section text-center mt-lg-5 mt-3">
		<div class="sup-title text-uppercase mb-3 text-center"><?php echo $companyLogosSuperscriptTitleSection;?></div>
		<h2 class="text-center mb-5"><?php echo $companyLogosTitleSection;?></h2>

		<div id="__companylogos_slider" class="splide __companylogos-slider" aria-label="Company logos Slider">
			<div class="splide__track">
				<ul class="splide__list">
					<?php foreach($_companyLogosSlider as $item_logo):?>
						<li class="splide__slide">
							<div class="companylogos-slide--item" style="background-image:url(<?php echo $item_logo['_company_logos_slider_img'];?>);">
								<img class="decor-br" src="<?php echo get_stylesheet_directory_uri();?>/img/vertical-divider-slider.svg" alt="">
							</div>
						</li>
					<?php endforeach;?>
				</ul>
			</div>
		</div>
	</section>
	<div class="section-divider-100 d-sm-block d-none"></div>

	<section class="blog-archive--articles leadership-team-lastcases-section mt-md-5 mt-4 mb-md-5 mb-0">
		<div class="container-xl">
			<?php if($leadershipTeamPersonsCasestudiesPostsTitle):?><h2 class="text-center mb-4"><?php echo $leadershipTeamPersonsCasestudiesPostsTitle;?></h2><?php endif;?>
			<div id="postArticlesWithPagination" class="row justify-content-center">
				<?php foreach($leadershipTeamPersonsCasestudiesPosts as $case_study_posts):?>
					<div class="col-md-6 col-12 mb-3 article" data-postid="<?php echo $case_study_posts->ID;?>">
						<a href="<?php echo $case_study_posts->guid;?>">
							<div class="blog-archive--article-bg" style="background-image:url(<?php echo get_featured_img_by_id($case_study_posts->ID);?>);"></div>
						</a>
						<div class="blog-archive-sub-banner--title text-capitalize mt-2 mb-3">
							<a class="--posts-title-link" href="<?php echo $case_study_posts->guid;?>"><?php echo $case_study_posts->post_title;?></a>
						</div>
					</div>
				<?php endforeach;?>
			</div>
		</div> <!--/.container-xl-->
	</section>
</div> <!--/.leadership-team-page-wrapper-->

<?php get_footer();?>
