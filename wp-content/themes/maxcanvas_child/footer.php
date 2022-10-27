<?php
/**
 * FOOTER
 *
 * @package maxcanvas
 */
?>
<?php
$menuitems_footer = get_all_menu('secondary','ASC'); $menuitems_footer_count = count($menuitems_footer);
$services_page_id_footer = 83; /*74*/
$sub_items_services_footer = get_subitems_for_menuitem($menuitems_footer, $services_page_id_footer, 'ASC');

$menuitems_sub_footer = get_all_menu('sub_secondary','ASC'); $menuitems_sub_footer_count = count($menuitems_sub_footer);

$address_1 = get_field('address_-1','options');
$address_2 = get_field('address_-2','options');

?>

<footer class="site-footer">
	<div class="container-xxl pt-md-5 pt-3 pb-2">
		<div class="row">
			<div class="col-lg-3 col-12 order-lg-1 order-3">
				<div class="site-footer--address">
					<?php if($address_1):?>
					<h6 class="mb-2"><?php echo $address_1['address_slot_1'];?></h6>
					<p><?php echo $address_1['address_slot_2'];?></p>
					<p><?php echo $address_1['address_slot_3'];?></p>
					<p>Phone: <strong><?php echo $address_1['phone'];?> | <?php echo $address_1['phone_2'];?></strong></p>
					<p>E-mail: <strong><?php echo $address_1['email'];?></strong></p>
					<?php endif;?>
					<?php if($address_2):?>
					<h6 class="mt-4 mb-2"><?php echo $address_2['address_slot_1'];?></h6>
					<p><?php echo $address_2['address_slot_2'];?></p>
					<p><?php echo $address_2['address_slot_3'];?></p>
					<p>Phone: <strong><?php echo $address_2['phone'];?> | <?php echo $address_2['phone_2'];?></strong></p>
					<p>E-mail: <strong><?php echo $address_2['email'];?></strong></p>
					<?php endif;?>
				</div>
			</div>
			<div class="col-lg col-12 mt-3 px-lg-5 px-3 order-lg-2 order-1">
				<div class="site-footer--info">
					<h3 class="text-center"><?php echo get_field('footer_text_title','options');?></h3>
					<p class="text-center"><?php echo get_field('footer_text','options');?></p>
					<hr>
					<div class="text-center text-uppercase schedule-consultation"><a href="#">Schedule Consultation</a></div>
					<hr>
					<nav class="navbar navbar-expand-sm navbar-white">
						<ul class="navbar-nav">
							<?php for( $i=0; $i < $menuitems_footer_count; $i++ ):?>
								<?php if( $menuitems_footer[$i]->menu_item_parent == '0' && $menuitems_footer[$i]->post_status == 'publish' ):?>
									<li class="nav-item" data-itemid="<?php echo $menuitems_footer[$i]->ID;?>" data-itemobject="<?php echo $menuitems_footer[$i]->object;?>">
										<a class="nav-link text-uppercase <?php echo (strtoupper($currentUrl) == '/'.strtoupper($menuitems_footer[$i]->title).'/') ? 'current-menu-item' : '';?>" href="<?php echo $menuitems_footer[$i]->url;?>">
											<?php echo $menuitems_footer[$i]->title;?>
										</a>
									</li>
								<?php endif;?>
							<?php endfor;?>

							<?php $requestBtnLink = get_field('request_button_link','options'); if($requestBtnLink): $link_target = ($requestBtnLink['target']) ? $requestBtnLink['target'] : '_self'; endif;?>
							<?php if($requestBtnLink):?>
							<li class="nav-item">
								<a class="nav-link text-uppercase" href="<?php echo $requestBtnLink['url'];?>" target="<?=esc_attr($link_target);?>"><?php echo $requestBtnLink['title'];?></a>
							</li>
							<?php endif;?>
						</ul>
					</nav>
				</div>
			</div>
			<div class="col-lg-2 col-12 order-lg-3 order-2">
				<div class="site-footer--services">
					<hr class="d-lg-none d-block">
					<div class="d-lg-block d-none">
						<h6>Services</h6>
						<ul class="ps-0 mb-0 site-footer--services-list--desktop">
							<?php foreach( $sub_items_services_footer as $sub_i_services_footer ):?>
								<li><a class="text-capitalize" href="<?php echo $sub_i_services_footer->url;?>"><?php echo $sub_i_services_footer->title;?></a></li>
							<?php endforeach;?>
						</ul>
					</div>
					<div class="d-lg-none d-block">
						<div id="services_list_toggle" class="collapsed" data-bs-toggle="collapse" data-bs-target="#servicesListToggle" style="cursor:pointer;"><strong>Services</strong></div>
						<ul id="servicesListToggle" class="ps-0 collapse pt-2 site-footer--services-list--mobile">
							<?php foreach( $sub_items_services_footer as $sub_i_services_footer ):?>
								<li><a class="text-capitalize" href="<?php echo $sub_i_services_footer->url;?>"><?php echo $sub_i_services_footer->title;?></a></li>
							<?php endforeach;?>
						</ul>
					</div>
					<hr class="d-lg-none d-block">
				</div>
			</div>
		</div><!-- .row -->
	</div><!-- .container -->

	<div class="container-xxl pb-md-3 pb-5 text-white sub-footer">
		<hr>
		<div class="row">
			<div class="col-md col-12 text-lg-start text-center order-md-1 order-3">
				<hr class="d-md-none d-block">
				<div class="copyright-text">Copyright <?php echo date("Y");?> © <?php echo get_field('copyright_text','options');?></div>
			</div>
			<div class="col-md-3 col-6 text-lg-start text-md-center text-end order-md-2 order-2">
				<div class="privacy-terms-sitemap">
					<?php for( $i=0; $i < $menuitems_sub_footer_count; $i++ ):?>
						<?php if( $i == ($menuitems_sub_footer_count - 1) ):?>
							<a href="<?php echo $menuitems_sub_footer[$i]->url;?>"><?php echo $menuitems_sub_footer[$i]->title;?></a>
						<?php else:?>
							<a href="<?php echo $menuitems_sub_footer[$i]->url;?>"><?php echo $menuitems_sub_footer[$i]->title;?></a> <span>|</span>
						<?php endif;?>
					<?php endfor;?>
				</div>
			</div>
			<div class="col-md-3 col-6 order-md-3 order-1 text-md-end text-start">
				<span class="me-2 footer-social-icon">
					<a href="#" class="" target="_blank">
						<img src="<?php echo get_stylesheet_directory_uri();?>/img/social-icons/facebook-footer-social-icon.svg" alt="facebook">
					</a>
				</span>
				<span class="me-2 footer-social-icon">
					<a href="#" class="" target="_blank">
						<img src="<?php echo get_stylesheet_directory_uri();?>/img/social-icons/in-footer-social-icon.svg" alt="linkdin">
					</a>
				</span>
					<span class="me-2 footer-social-icon">
					<a href="#" class="" target="_blank">
						<img src="<?php echo get_stylesheet_directory_uri();?>/img/social-icons/twitter-footer-social-icon.svg" alt="twitter">
					</a>
				</span>
					<span class="me-2 footer-social-icon">
					<a href="#" class="" target="_blank">
						<img src="<?php echo get_stylesheet_directory_uri();?>/img/social-icons/insta-footer-social-icon.svg" alt="instagram">
					</a>
				</span>
			</div>
		</div>
	</div>
</footer><!-- .site-footer -->

<?php wp_footer(); ?>
</body>
</html>
