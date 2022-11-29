<?php
$menuitems = get_all_menu('primary','ASC'); $menuitems_count = count($menuitems); //dd($menuitems);
$currentUrl = $_SERVER['REQUEST_URI']; if( $_SERVER['REQUEST_URI'] == '/' ){ $currentUrl = "/home/"; }

$aboutus_page_id = 34;/*53*/ $aboutus_dropdown_list = array(); $aboutus_dropdown_list_cnt = count($aboutus_dropdown_list);
$services_page_id = 35;/*60*/ $services_dropdown_list = array(); $services_dropdown_list_cnt = count($services_dropdown_list);
foreach( $menuitems as $menu_item ){
	if( $menu_item->menu_item_parent == $aboutus_page_id && $menu_item->post_status == 'publish' ){ array_push($aboutus_dropdown_list, $menu_item); }
	if( $menu_item->menu_item_parent == $services_page_id && $menu_item->post_status == 'publish' ){ array_push($services_dropdown_list, $menu_item); }
}
$aboutus_dropdown_list_cnt = count($aboutus_dropdown_list); //5
$services_dropdown_list_cnt = count($services_dropdown_list); //6
/*________________________________________________________________________________________________*/

$col1_aboutus = array(); $col2_aboutus = array(); $col3_aboutus = array(); $col4_aboutus = array();
for( $i=0; $i < $aboutus_dropdown_list_cnt; $i++ ){
	if($i == 0){ array_push($col1_aboutus, $aboutus_dropdown_list[$i]); }
	if($i == 1){ array_push($col2_aboutus, $aboutus_dropdown_list[$i]); }
	if($i == 2){ array_push($col3_aboutus, $aboutus_dropdown_list[$i]); }
	if($i == 3){ array_push($col4_aboutus, $aboutus_dropdown_list[$i]); }

	if($i == 4){ array_push($col1_aboutus, $aboutus_dropdown_list[$i]); }
	if($i == 5){ array_push($col2_aboutus, $aboutus_dropdown_list[$i]); }
	if($i == 6){ array_push($col3_aboutus, $aboutus_dropdown_list[$i]); }
	if($i == 7){ array_push($col4_aboutus, $aboutus_dropdown_list[$i]); }

	if($i == 8){ array_push($col1_aboutus, $aboutus_dropdown_list[$i]); }
	if($i == 9){ array_push($col2_aboutus, $aboutus_dropdown_list[$i]); }
	if($i == 10){ array_push($col3_aboutus, $aboutus_dropdown_list[$i]); }
	if($i == 11){ array_push($col4_aboutus, $aboutus_dropdown_list[$i]); }

	if($i == 12){ array_push($col1_aboutus, $aboutus_dropdown_list[$i]); }
	if($i == 13){ array_push($col2_aboutus, $aboutus_dropdown_list[$i]); }
	if($i == 14){ array_push($col3_aboutus, $aboutus_dropdown_list[$i]); }
	if($i == 15){ array_push($col4_aboutus, $aboutus_dropdown_list[$i]); }
}

$col1_services = array(); $col2_services = array(); $col3_services = array(); $col4_services = array();
for( $i=0; $i < $services_dropdown_list_cnt; $i++ ){
	if($i == 0){ array_push($col1_services, $services_dropdown_list[$i]); }
	if($i == 1){ array_push($col2_services, $services_dropdown_list[$i]); }
	if($i == 2){ array_push($col3_services, $services_dropdown_list[$i]); }
	if($i == 3){ array_push($col4_services, $services_dropdown_list[$i]); }

	if($i == 4){ array_push($col1_services, $services_dropdown_list[$i]); }
	if($i == 5){ array_push($col2_services, $services_dropdown_list[$i]); }
	if($i == 6){ array_push($col3_services, $services_dropdown_list[$i]); }
	if($i == 7){ array_push($col4_services, $services_dropdown_list[$i]); }

	if($i == 8){ array_push($col1_services, $services_dropdown_list[$i]); }
	if($i == 9){ array_push($col2_services, $services_dropdown_list[$i]); }
	if($i == 10){ array_push($col3_services, $services_dropdown_list[$i]); }
	if($i == 11){ array_push($col4_services, $services_dropdown_list[$i]); }

	if($i == 12){ array_push($col1_services, $services_dropdown_list[$i]); }
	if($i == 13){ array_push($col2_services, $services_dropdown_list[$i]); }
	if($i == 14){ array_push($col3_services, $services_dropdown_list[$i]); }
	if($i == 15){ array_push($col4_services, $services_dropdown_list[$i]); }

	if($i == 16){ array_push($col1_services, $services_dropdown_list[$i]); }
	if($i == 17){ array_push($col2_services, $services_dropdown_list[$i]); }
	if($i == 18){ array_push($col3_services, $services_dropdown_list[$i]); }
	if($i == 19){ array_push($col4_services, $services_dropdown_list[$i]); }

	if($i == 20){ array_push($col1_services, $services_dropdown_list[$i]); }
	if($i == 21){ array_push($col2_services, $services_dropdown_list[$i]); }
	if($i == 22){ array_push($col3_services, $services_dropdown_list[$i]); }
	if($i == 23){ array_push($col4_services, $services_dropdown_list[$i]); }

	if($i == 24){ array_push($col1_services, $services_dropdown_list[$i]); }
	if($i == 25){ array_push($col2_services, $services_dropdown_list[$i]); }
	if($i == 26){ array_push($col3_services, $services_dropdown_list[$i]); }
	if($i == 27){ array_push($col4_services, $services_dropdown_list[$i]); }
}

?>
<ul id="desktop_tablet" class="navbar-nav mb-2 mb-lg-0 mx-md-0 mx-3 d-md-flex d-none <?php echo (is_404()) ? 'invisible' : '';?>">
	<?php for( $i=0; $i < $menuitems_count; $i++ ):?>
		<?php if( $menuitems[$i]->menu_item_parent == '0' && $menuitems[$i]->post_status == 'publish' ):?>

			<?php if( $menuitems[$i]->ID == $aboutus_page_id ):?>
			<li class="nav-item me-lg-3 me-0 mt-md-2 mt-0 dropdown" data-itemid="<?php echo $menuitems[$i]->ID;?>" data-itemobject="<?php echo $menuitems[$i]->object;?>">
				<a class="nav-link text-uppercase dropdown-toggle <?php echo (strtoupper($currentUrl) == '/'.str_replace(" ","-",strtoupper($menuitems[$i]->title)).'/') ? 'current-menu-item' : '';?>" href="<?php echo $menuitems[$i]->url;?>" id="navbarDropdown" role="button" aria-expanded="false">
					<img class="active-item-menu-icon" src="<?php echo get_stylesheet_directory_uri();?>/img/active-item-menu-icon.svg" alt="">
					<span><?php echo $menuitems[$i]->title;?> <hr></span>
				</a>
				<ul class="dropdown-menu pb-3" aria-labelledby="navbarDropdown">
					<div class="container-lg container-desktop_tablet">
						<hr class="position-relative">
						<div class="row">
							<div class="col mb-2 dropdown-menu-col">
							<?php foreach( $col1_aboutus as $au_i ):?>
								<li class="mb-4" data-itemid="<?php echo $au_i->ID;?>" data-itemobject="<?php echo $au_i->object;?>">
									<a class="dropdown-item text-capitalize" href="<?=$au_i->url;?>"><?=$au_i->title;?></a>
								</li>
							<?php endforeach;?>
							</div>
							<div class="col mb-2 dropdown-menu-col">
							<?php foreach( $col2_aboutus as $au_i ):?>
								<li class="mb-4" data-itemid="<?php echo $au_i->ID;?>" data-itemobject="<?php echo $au_i->object;?>">
									<a class="dropdown-item text-capitalize" href="<?=$au_i->url;?>"><?=$au_i->title;?></a>
								</li>
							<?php endforeach;?>
							</div>
							<?php if($col3_aboutus):?>
							<div class="col mb-2 dropdown-menu-col">
								<?php foreach( $col3_aboutus as $au_i ):?>
									<li class="mb-4" data-itemid="<?php echo $au_i->ID;?>" data-itemobject="<?php echo $au_i->object;?>">
										<a class="dropdown-item text-capitalize" href="<?=$au_i->url;?>"><?=$au_i->title;?></a>
									</li>
								<?php endforeach;?>
							</div>
							<?php endif;?>
							<?php if($col4_aboutus):?>
								<div class="col mb-2 dropdown-menu-col">
								<?php foreach( $col4_aboutus as $au_i ):?>
									<li class="mb-4" data-itemid="<?php echo $au_i->ID;?>" data-itemobject="<?php echo $au_i->object;?>">
										<a class="dropdown-item text-capitalize" href="<?=$au_i->url;?>"><?=$au_i->title;?></a>
									</li>
								<?php endforeach;?>
								</div>
							<?php endif;?>
						</div>
					</div>
				</ul>
			</li>
			<?php elseif( $menuitems[$i]->ID == $services_page_id ):?>
			<li class="nav-item me-lg-3 me-0 mt-md-2 mt-0 dropdown" data-itemid="<?php echo $menuitems[$i]->ID;?>" data-itemobject="<?php echo $menuitems[$i]->object;?>">
				<a class="nav-link text-uppercase dropdown-toggle <?php echo (strtoupper($currentUrl) == '/'.strtoupper($menuitems[$i]->title).'/') ? 'current-menu-item' : '';?>" href="<?php echo $menuitems[$i]->url;?>" id="navbarDropdown" role="button" aria-expanded="false">
					<img class="active-item-menu-icon" src="<?php echo get_stylesheet_directory_uri();?>/img/active-item-menu-icon.svg" alt="">
					<span><?php echo $menuitems[$i]->title;?> <hr></span>
				</a>
				<ul class="dropdown-menu pb-3" aria-labelledby="navbarDropdown">
					<div class="container-lg container-desktop_tablet">
						<hr class="position-relative">
						<div class="row">
							<div class="col mb-2 dropdown-menu-col">
							<?php foreach( $col1_services as $s_i ):?>
								<li class="mb-4" data-itemid="<?php echo $s_i->ID;?>" data-itemobject="<?php echo $s_i->object;?>">
									<a class="dropdown-item text-capitalize" href="<?=$s_i->url;?>"><?=$s_i->title;?></a>
								</li>
							<?php endforeach;?>
							</div>
							<div class="col mb-2 dropdown-menu-col">
							<?php foreach( $col2_services as $s_i ):?>
								<li class="mb-4" data-itemid="<?php echo $s_i->ID;?>" data-itemobject="<?php echo $s_i->object;?>">
									<a class="dropdown-item text-capitalize" href="<?=$s_i->url;?>"><?=$s_i->title;?></a>
								</li>
							<?php endforeach;?>
							</div>
							<div class="col mb-2 dropdown-menu-col">
							<?php foreach( $col3_services as $s_i ):?>
								<li class="mb-4" data-itemid="<?php echo $s_i->ID;?>" data-itemobject="<?php echo $s_i->object;?>">
									<a class="dropdown-item text-capitalize" href="<?=$s_i->url;?>"><?=$s_i->title;?></a>
								</li>
							<?php endforeach;?>
							</div>
							<div class="col mb-2 dropdown-menu-col">
							<?php foreach( $col4_services as $s_i ):?>
								<li class="mb-4" data-itemid="<?php echo $s_i->ID;?>" data-itemobject="<?php echo $s_i->object;?>">
									<a class="dropdown-item text-capitalize" href="<?=$s_i->url;?>"><?=$s_i->title;?></a>
								</li>
							<?php endforeach;?>
							</div>
						</div>
					</div>
				</ul>
			</li>
			<?php else:?>
			<li class="nav-item me-lg-3 me-0 mt-md-2 mt-0" data-itemid="<?php echo $menuitems[$i]->ID;?>" data-itemobject="<?php echo $menuitems[$i]->object;?>">
				<a class="nav-link text-uppercase <?php echo (strtoupper($currentUrl) == '/'.strtoupper($menuitems[$i]->title).'/') ? 'current-menu-item' : '';?>" href="<?php echo $menuitems[$i]->url;?>">
					<img class="active-item-menu-icon" src="<?php echo get_stylesheet_directory_uri();?>/img/active-item-menu-icon.svg" alt="">
					<?php echo $menuitems[$i]->title;?>
				</a>
			</li>
			<?php endif;?>

		<?php endif;?>
	<?php endfor;?>

	<?php $requestBtnLink = get_field('request_button_link','options'); if($requestBtnLink): $link_target = ($requestBtnLink['target']) ? $requestBtnLink['target'] : '_self'; endif;?>
	<?php if($requestBtnLink):?>
		<li class="nav-item nav-item-btn mt-md-0 mt-4">
			<a class="text-center button button--blue-gradient mx-md-2 me-0" href="<?php echo $requestBtnLink['url'];?>" target="<?=esc_attr($link_target);?>"><?php echo $requestBtnLink['title'];?></a>
		</li>
	<?php endif;?>


	<li class="nav-item nav-item-social-icons mt-md-0 mt-4 d-md-none d-block">
		<span class="me-3">
			<a href="#" class="" target="_blank">
				<img src="<?php echo get_stylesheet_directory_uri();?>/img/social-icons/facebook-header-mobile-social-icon.png" alt="<?php echo get_bloginfo('name');?>">
			</a>
		</span>
		<span class="me-3">
			<a href="#" class="" target="_blank">
				<img src="<?php echo get_stylesheet_directory_uri();?>/img/social-icons/in-header-mobile-social-icon.png" alt="<?php echo get_bloginfo('name');?>">
			</a>
		</span>
		<span class="me-3">
			<a href="#" class="" target="_blank">
				<img src="<?php echo get_stylesheet_directory_uri();?>/img/social-icons/twitter-header-mobile-social-icon.png" alt="<?php echo get_bloginfo('name');?>">
			</a>
		</span>
		<span class="me-3">
			<a href="#" class="" target="_blank">
				<img src="<?php echo get_stylesheet_directory_uri();?>/img/social-icons/insta-header-mobile-social-icon.png" alt="<?php echo get_bloginfo('name');?>">
			</a>
		</span>
	</li>
</ul>