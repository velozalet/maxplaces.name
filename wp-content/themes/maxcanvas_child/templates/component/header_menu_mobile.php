<?php
$menuitems = get_all_menu('primary','ASC'); //dd($menuitems);
?>
<ul id="mobile" class="navbar-nav mb-2 mb-lg-0 mx-md-0 mx-3 d-md-none d-block">
	<li class="nav-item me-lg-3 me-0 mt-md-2 mt-0 dropdown" data-itemid="55" data-itemobject="page">
		<a class="nav-link text-uppercase dropdown-toggle " href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">About us</a>
		<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
			<li class="" data-itemid="75" data-itemobject="services">
				<a class="dropdown-item" href="#">In the News</a>
			</li>
			<li class="" data-itemid="74" data-itemobject="services">
				<a class="dropdown-item" href="#">Cities Served</a>
			</li>
			<li class="" data-itemid="73" data-itemobject="services">
				<a class="dropdown-item" href="#">Industry Served</a>
			</li>
		</ul>
	</li>

	<li class="nav-item me-lg-3 me-0 mt-md-2 mt-0 dropdown" data-itemid="55" data-itemobject="page">
		<a class="nav-link text-uppercase dropdown-toggle " href="https://www.naecsol.com/services/" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Services</a>
		<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
			<li class="" data-itemid="75" data-itemobject="services">
				<a class="dropdown-item" href="#">Search Engine Optimization</a>
			</li>
			<li class="" data-itemid="74" data-itemobject="services">
				<a class="dropdown-item" href="#">Search Engine Marketing</a>
			</li>
			<li class="" data-itemid="73" data-itemobject="services">
				<a class="dropdown-item" href="#">Local Search</a>
			</li>
			<li class="" data-itemid="73" data-itemobject="services">
				<a class="dropdown-item" href="#">Social Media</a>
			</li>
			<li class="" data-itemid="73" data-itemobject="services">
				<a class="dropdown-item" href="#">Reputation Management</a>
			</li>
			<li class="" data-itemid="73" data-itemobject="services">
				<a class="dropdown-item" href="#">Video Marketing</a>
			</li>
			<li class="" data-itemid="73" data-itemobject="services">
				<a class="dropdown-item" href="#">Google Penalty Recovery</a>
			</li>
		</ul>
	</li>

	<li class="nav-item me-lg-3 me-0 mt-md-2 mt-0" data-itemid="54" data-itemobject="page">
		<a class="nav-link text-uppercase" href="#">Blog</a>
	</li>
	<li class="nav-item me-lg-3 me-0 mt-md-2 mt-0" data-itemid="53" data-itemobject="page">
		<a class="nav-link text-uppercase current-menu-item" href="#">Contact</a>
	</li>

	<li class="nav-item nav-item-btn mt-md-0 mt-4">
		<a href="#" class="text-center button button--blue-gradient mx-md-2 me-0" target="_self">Request</a>
	</li>
	<li class="nav-item nav-item-social-icons mt-md-0 mt-4 d-md-none d-block">
		<span class="me-3">
			<a href="#" class="" target="_blank">
				<img src="<?php echo get_stylesheet_directory_uri();?>/img/social-icons/facebook-header-mobile-social-icon.png" alt="facebook">
			</a>
		</span>
		<span class="me-3">
			<a href="#" class="" target="_blank">
				<img src="<?php echo get_stylesheet_directory_uri();?>/img/social-icons/in-header-mobile-social-icon.png" alt="linkdin">
			</a>
		</span>
		<span class="me-3">
			<a href="#" class="" target="_blank">
				<img src="<?php echo get_stylesheet_directory_uri();?>/img/social-icons/twitter-header-mobile-social-icon.png" alt="twitter">
			</a>
		</span>
		<span class="me-3">
			<a href="#" class="" target="_blank">
				<img src="<?php echo get_stylesheet_directory_uri();?>/img/social-icons/insta-header-mobile-social-icon.png" alt="instagram">
			</a>
		</span>
	</li>
</ul>