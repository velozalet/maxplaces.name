<?php
/**
 * FOOTER
 *
 * @package maxcanvas
 */
?>

<footer class="site-footer" style="background-color: #011536;">
	<div class="container-lg pt-md-5 pt-3 pb-2">
		<div class="row">
			<div class="col-lg-3 col-12 order-lg-1 order-3">
				<div class="site-footer--address">
					<h6 class="mb-2">Brookville</h6>
					<p>565 Broadhollow Rd, Suite 12E</p>
					<p>Farmingdale, NY 11735</p>
					<p>Phone: <strong>631.709.5005 | 855.629.6584</strong></p>
					<p>E-mail: <strong>hello@maxplaces.com</strong></p>
					<p></p>
					<p></p>

					<h6 class="mt-4 mb-2">New York</h6>
					<p>205 East 42nd St, 20th Fl New York</p>
					<p>NY 10017</p>
					<p>Phone: <strong>212.651.1879 | 855.629.6584</strong></p>
					<p>E-mail: <strong>hello@maxplaces.com</strong></p>
				</div>
			</div>
			<div class="col-lg col-12 mt-3 px-lg-5 px-3 order-lg-2 order-1">
				<div class="site-footer--info">
					<h3 class="text-center">Let's Work Together!</h3>
					<p class="text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna</p>
					<hr>
					<div class="text-center text-uppercase schedule-consultation"><a href="#">Schedule Consultation</a></div>
					<hr>
					<nav class="navbar navbar-expand-sm navbar-white">
						<ul class="navbar-nav">
							<li class="nav-item">
								<a class="nav-link" href="#">ABOUT US</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">SERVICES</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">BLOG</a>
							</li>
							<li class="nav-item">
								<a class="nav-link current-menu-item" href="#">CONTACT</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">REQUEST</a>
							</li>
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
							<li><a href="#">Organic SEO</a></li>
							<li><a href="#">Search Engine Marketing</a></li>
							<li><a href="#">Local Search</a></li>
							<li><a href="#">Social Media</a></li>
							<li><a href="#">Reputation Management</a></li>
							<li><a href="#">Video Marketing</a></li>
							<li><a href="#">Penalty Recovery</a></li>
							<li><a href="#">Link Building</a></li>
							<li><a href="#">Conversion Optimization</a></li>
						</ul>
					</div>
					<div class="d-lg-none d-block">
						<div id="services_list_toggle" class="collapsed" data-bs-toggle="collapse" data-bs-target="#servicesListToggle" style="cursor:pointer;"><strong>Services</strong></div>
						<ul id="servicesListToggle" class="ps-0 collapse pt-2 site-footer--services-list--mobile">
							<li><a href="#">Organic SEO</a></li>
							<li><a href="#">Search Engine Marketing</a></li>
							<li><a href="#">Local Search</a></li>
							<li><a href="#">Social Media</a></li>
							<li><a href="#">Reputation Management</a></li>
							<li><a href="#">Video Marketing</a></li>
							<li><a href="#">Penalty Recovery</a></li>
							<li><a href="#">Link Building</a></li>
							<li><a href="#">Conversion Optimization</a></li>
						</ul>
					</div>
					<hr class="d-lg-none d-block">
				</div>
			</div>
		</div><!-- .row -->
	</div><!-- .container -->

	<div class="container-lg pb-md-3 pb-5 text-white sub-footer">
		<hr>
		<div class="row">
			<div class="col-md col-12 text-lg-start text-center order-md-1 order-3">
				<hr class="d-md-none d-block">
				<div class="copyright-text">Copyright 2021 © MAXPlaces Marketing, LLC. All Rights Reserved.</div>
			</div>
			<div class="col-md-3 col-6 text-lg-start text-md-center text-end order-md-2 order-2">
				<div class="privacy-terms-sitemap"> <a href="#">Privacy</a> <span>|</span> <a href="#">Terms</a> <span>|</span> <a href="#">Sitemap</a> </div>
			</div>
			<div class="col-md-3 col-6 order-md-3 order-1 text-md-end text-start">
				<span class="me-2 footer-social-icon">
					<a href="#" class="" target="_blank">
						<img src="<?php echo get_stylesheet_directory_uri();?>/img/social-icons/facebook-footer-social-icon" alt="facebook">
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
