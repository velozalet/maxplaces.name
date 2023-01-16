<?php get_header();?>
<?php
$get_queried_object = get_queried_object();
//Section 1 Tab
$s1_SuperscriptTitle = get_field('case_study_int_superscript_title_sec1', get_the_ID() ); $s1_Title = get_field('case_study_int_title_sec1', get_the_ID() ); $s1_Text = get_field('case_study_int_text_sec1', get_the_ID() ); $s1_CasesItemsRepeater = get_field('case_study_int_cases_items _repeater_sec1', get_the_ID() );
//__/Section 1 Tab

//Section 2 Tab
$s2_Img = get_field('case_study_int_bg_image_sec2', get_the_ID() ); $s2_SuperscriptTitle = get_field('case_study_int_superscript_title_sec2', get_the_ID() ); $s2_Title = get_field('case_study_int_title_sec2', get_the_ID() ); $s2_Text = get_field('case_study_int_text_sec2', get_the_ID() );
//__/Section 2 Tab

//Section 3 Tab
$s3_Img = get_field('case_study_int_image_sec3', get_the_ID() ); $s3_Content = get_field('case_study_int_content_sec3', get_the_ID() );
//__/Section 3 Tab

//Section 4 Tab
$s4_SuperscriptTitle = get_field('case_study_int_superscript_title_sec4', get_the_ID() ); $s4_Title = get_field('case_study_int_title_sec4', get_the_ID() ); $s4_Text = get_field('case_study_int_text_sec4', get_the_ID() ); $s4_Img = get_field('case_study_int_image_sec4', get_the_ID() );
//__/Section 4 Tab
?>
<div class="cities-served-page-wrapper industry-served-page-wrapper single-cases-page-wrapper">
	<?php get_template_part('templates/component/header_page_title_section');?>
	<?php get_template_part('templates/component/page_banner_section');?>

	<section class="s-c-p--1-section mt-md-5 mt-0 mb-md-5 mb-3">
		<div class="container-lg">
			<div class="row d-flex align-items-center">
				<div class="col-lg-6 col-12">
					<div class="content mb-lg-0 mb-5 text-md-start text-center">
						<?php if($s1_SuperscriptTitle):?><div class="sup-title text-uppercase mb-3"><?php echo $s1_SuperscriptTitle;?></div><?php endif;?>
						<?php if($s1_Title):?><h3 class="mb-3"><?php echo $s1_Title;?></h3><?php endif;?>
						<?php if($s1_Text):?><?php echo $s1_Text;?><?php endif;?>
					</div>
				</div>
				<div class="col-lg col-12">
					<div class="row">
						<?php if($s1_CasesItemsRepeater):?>
						<?php $s1_cases_cnt=0; foreach($s1_CasesItemsRepeater as $s1_cases_i):?>
							<?php if($s1_cases_cnt !== 0 && $s1_cases_cnt%2 == 0):?><div class="w-100"></div><?php endif;?>
							<div class="col-sm col-12 mb-sm-4 mb-3">
								<div class="d-flex align-items-start">
									<img src="<?php echo $s1_cases_i['cases_items _repeater_icon'];?>" alt="<?php echo get_bloginfo('name');?>" style="width:65px; height:auto;">
									<div class="ms-3">
										<p class="text-uppercase mb-1"> <strong><?php echo $s1_cases_i['cases_items _repeater_title'];?></strong> </p>
										<p class="mb-0"><?php echo $s1_cases_i['cases_items _repeater_text'];?></p>
									</div>
								</div>
							</div>
						<?php $s1_cases_cnt++; endforeach;?>
						<?php endif;?>
					</div> <!--/.row-->
				</div>
			</div> <!--/.row-->
		</div> <!--/.container-->
	</section>

	<section class="s-c-p--2-section industry-served-page--f-st mt-md-5 mt-0 mb-md-0 mb-3">
		<div class="container-lg --correct">
			<div class="industry-served-page--f-st--bg" style="background-image:url(<?php echo $s2_Img;?>)"></div>
			<aside style="padding-bottom:0;">
				<div class="row">
					<div class="col-sm-6 col-12">
						<?php if($s2_SuperscriptTitle):?><div class="sup-title text-uppercase mb-3"><?php echo $s2_SuperscriptTitle;?></div><?php endif;?>
						<?php if($s2_Title):?><h2><?php echo $s2_Title;?></h2><?php endif;?>
					</div>
					<div class="col-sm-6 col-12 mt-3">
						<?php if($s2_Text):?><?php echo $s2_Text;?><?php endif;?>
					</div>
				</div>
			</aside>
		</div>
	</section>

	<section class="s-c-p--3-section s-c-p--analysis-section mt-md-5 mt-0 mb-md-5 mb-3">
		<div class="container-lg">
			<div class="row row-cols-lg-2 row-cols-md-2 row-cols-1 d-flex align-items-center align-self-center">
				<div class="order-md-1 mt-md-0 mt-4 order-2 text-md-start text-center">
					<?php if($s3_Img):?><img class="img-fluid" src="<?php echo $s3_Img;?>" alt="<?php echo get_bloginfo('name');?>"><?php endif;?>
				</div>
				<div class="order-md-2 order-1">
					<?php if($s3_Content):?>
						<?php if( $s3_Content['case_study_int_content_title1_sec3'] && $s3_Content['case_study_int_content_text1_sec3'] ):?>
						<div class="item-slot position-relative">
							<img src="<?php echo get_stylesheet_directory_uri();?>/img/case-study-internal-svg-icon.svg" alt=""> <span>01</span>
							<?php if($s3_Content && $s3_Content['case_study_int_content_title1_sec3']):?><h3><?php echo $s3_Content['case_study_int_content_title1_sec3'];?></h3><?php endif;?>
							<?php if($s3_Content && $s3_Content['case_study_int_content_text1_sec3']):?><?php echo $s3_Content['case_study_int_content_text1_sec3'];?><?php endif;?>
						</div>
						<?php endif;?>
					<?php endif;?>

					<?php if($s3_Content):?>
						<?php if( $s3_Content['case_study_int_content_title2_sec3'] && $s3_Content['case_study_int_content_text2_sec3'] ):?>
							<div class="item-slot position-relative">
								<img src="<?php echo get_stylesheet_directory_uri();?>/img/case-study-internal-svg-icon.svg" alt=""> <span>02</span>
								<?php if($s3_Content && $s3_Content['case_study_int_content_title2_sec3']):?><h3><?php echo $s3_Content['case_study_int_content_title2_sec3'];?></h3><?php endif;?>
								<?php if($s3_Content && $s3_Content['case_study_int_content_text2_sec3']):?><?php echo $s3_Content['case_study_int_content_text2_sec3'];?><?php endif;?>
							</div>
						<?php endif;?>
					<?php endif;?>

					<?php if($s3_Content):?>
						<?php if( $s3_Content['case_study_int_content_title3_sec3'] && $s3_Content['case_study_int_content_text3_sec3'] ):?>
							<div class="item-slot position-relative">
								<img src="<?php echo get_stylesheet_directory_uri();?>/img/case-study-internal-svg-icon.svg" alt=""> <span>03</span>
								<?php if($s3_Content && $s3_Content['case_study_int_content_title3_sec3']):?><h3><?php echo $s3_Content['case_study_int_content_title3_sec3'];?></h3><?php endif;?>
								<?php if($s3_Content && $s3_Content['case_study_int_content_text3_sec3']):?><?php echo $s3_Content['case_study_int_content_text3_sec3'];?><?php endif;?>
							</div>
						<?php endif;?>
					<?php endif;?>
				</div>
			</div> <!--/.row-->
		</div> <!--/.container-->
	</section>

	<section class="s-c-p--4-section s-c-p--analysis-section mt-md-5 mt-0 mb-md-5 mb-4">
		<div class="container-lg">
			<div class="row row-cols-lg-2 row-cols-md-2 row-cols-1 d-flex align-items-center align-self-center">
				<div class="order-md-1 order-1">
					<?php if($s4_SuperscriptTitle):?><div class="sup-title text-uppercase mb-3"><?php echo $s4_SuperscriptTitle;?></div><?php endif;?>
					<?php if($s4_Title):?><h2><?php echo $s4_Title;?></h2><?php endif;?>
					<?php if($s4_Text):?><?php echo $s4_Text;?><?php endif;?>
				</div>
				<div class="order-md-2 mt-md-0 mt-4 order-2 text-md-start text-center">
					<?php if($s4_Img):?><img class="img-fluid" src="<?php echo $s4_Img;?>" alt="<?php echo get_bloginfo('name');?>"><?php endif;?>
				</div>
			</div> <!--/.row-->
		</div> <!--/.container-->
	</section>
	<div class="d-xl-block d-none" style="margin-top:100px;"></div>
</div> <!--/.single-cases-page-wrapper-->
<?php get_footer();?>
