<?php
$menuitems = get_all_menu('primary','ASC'); $menuitems_count = count($menuitems); //dd($menuitems);
$currentUrl = $_SERVER['REQUEST_URI']; if( $_SERVER['REQUEST_URI'] == '/' ){ $currentUrl = "/home/"; }

$aboutus_page_id = 34;/*53*/ $aboutus_dropdown_list = array();
$services_page_id = 35;/*60*/ $services_dropdown_list = array();
foreach( $menuitems as $menu_item ){
	if( $menu_item->menu_item_parent == $aboutus_page_id && $menu_item->post_status == 'publish' ){ array_push($aboutus_dropdown_list, $menu_item); }
	if( $menu_item->menu_item_parent == $services_page_id && $menu_item->post_status == 'publish' ){ array_push($services_dropdown_list, $menu_item); }
}
$aboutus_dropdown_list_cnt = count($aboutus_dropdown_list);
$services_dropdown_list_cnt = count($services_dropdown_list);

$socialLinks = get_field('social_links','options');
?>
<ul id="mobile" class="navbar-nav mb-2 mb-lg-0 mx-md-0 mx-3 d-md-none d-block">
	<?php for( $i=0; $i < $menuitems_count; $i++ ):?>
		<?php if( $menuitems[$i]->menu_item_parent == '0' && $menuitems[$i]->post_status == 'publish' ):?>

			<?php if( $menuitems[$i]->ID == $aboutus_page_id ):?>
			<li class="nav-item me-lg-3 me-0 mt-md-2 mt-0 dropdown" data-itemid="<?php echo $menuitems[$i]->ID;?>" data-itemobject="<?php echo $menuitems[$i]->object;?>">
				<a class="nav-link text-uppercase dropdown-toggle <?php echo (strtoupper($currentUrl) == '/'.strtoupper($menuitems[$i]->title).'/') ? 'current-menu-item' : '';?>" href="<?php echo $menuitems[$i]->url;?>" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"><?php echo $menuitems[$i]->title;?></a>
				<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
					<?php foreach( $aboutus_dropdown_list as $aboutus_dropdown_i ):?>
					<li class="" data-itemid="<?php echo $aboutus_dropdown_i->ID;?>" data-itemobject="<?php echo $aboutus_dropdown_i->object;?>">
						<a class="dropdown-item text-capitalize ps-0" href="<?=$aboutus_dropdown_i->url;?>"><?=$aboutus_dropdown_i->title;?></a>
					</li>
					<?php endforeach;?>
				</ul>
			</li>
			<?php elseif( $menuitems[$i]->ID == $services_page_id ):?>
			<li class="nav-item me-lg-3 me-0 mt-md-2 mt-0 dropdown" data-itemid="<?php echo $menuitems[$i]->ID;?>" data-itemobject="<?php echo $menuitems[$i]->object;?>">
				<a class="nav-link text-uppercase dropdown-toggle <?php echo (strtoupper($currentUrl) == '/'.strtoupper($menuitems[$i]->title).'/') ? 'current-menu-item' : '';?>" href="<?php echo $menuitems[$i]->url;?>" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"><?php echo $menuitems[$i]->title;?></a>
				<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
					<?php foreach( $services_dropdown_list as $services_dropdown_i ):?>
					<li class="" data-itemid="<?php echo $services_dropdown_i->ID;?>" data-itemobject="<?php echo $services_dropdown_i->object;?>">
						<a class="dropdown-item text-capitalize ps-0" href="<?=$services_dropdown_i->url;?>"><?=$services_dropdown_i->title;?></a>
					</li>
					<?php endforeach;?>
				</ul>
			</li>
			<?php else:?>
			<li class="nav-item me-lg-3 me-0 mt-md-2 mt-0" data-itemid="<?php echo $menuitems[$i]->ID;?>" data-itemobject="<?php echo $menuitems[$i]->object;?>">
				<a class="nav-link text-uppercase " href="<?php echo $menuitems[$i]->url;?>"><?php echo $menuitems[$i]->title;?></a>
			</li>
			<?php endif;?>

		<?php endif;?>
	<?php endfor;?>

	<?php $requestBtnLink = get_field('request_button_link','options'); if($requestBtnLink): $link_target = ($requestBtnLink['target']) ? $requestBtnLink['target'] : '_self'; endif;?>
	<?php if($requestBtnLink):?>
		<li class="nav-item nav-item-btn mt-md-0 mt-4">
			<a class="text-center button button--blue-gradient mx-md-2 me-0" href="<?php echo $requestBtnLink['url'];?>"  target="<?=esc_attr($link_target);?>">
				<?php echo $requestBtnLink['title'];?>
			</a>
		</li>
	<?php endif;?>

	<li class="nav-item nav-item-social-icons mt-md-0 mt-4 d-md-none d-block">
		<span class="me-3">
			<a href="<?php echo $socialLinks['facebook'];?>" class="" target="_blank">
				<img src="<?php echo get_stylesheet_directory_uri();?>/img/social-icons/facebook-header-mobile-social-icon.png" alt="facebook">
			</a>
		</span>
		<span class="me-3">
			<a href="<?php echo $socialLinks['linkedin'];?>" class="" target="_blank">
				<img src="<?php echo get_stylesheet_directory_uri();?>/img/social-icons/in-header-mobile-social-icon.png" alt="linkdin">
			</a>
		</span>
		<span class="me-3">
			<a href="<?php echo $socialLinks['twitter'];?>" class="" target="_blank">
				<img src="<?php echo get_stylesheet_directory_uri();?>/img/social-icons/twitter-header-mobile-social-icon.png" alt="twitter">
			</a>
		</span>
		<span class="me-3">
			<a href="<?php echo $socialLinks['instagram'];?>" class="" target="_blank">
				<img src="<?php echo get_stylesheet_directory_uri();?>/img/social-icons/insta-header-mobile-social-icon.png" alt="instagram">
			</a>
		</span>
	</li>
	<li class="bruce-li"></li>
</ul>