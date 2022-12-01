<?php
/**
 * Template Name: Contact
 *
 * @package maxcanvas
 */
?>
<?php get_header();?>
<?php
$address_1 = get_field('address_-1','options');
$address_2 = get_field('address_-2','options');
$socialLinks = get_field('social_links','options');
?>
<div class="request-quote-page-wrapper contactus-page-wrapper">
	<?php get_template_part('templates/component/header_page_title_section');?>

	<section class="request-quote--section1 contactus--section1 mt-5">
		<div class="a-w-c--bg"></div>
		<div class="container-xl">
			<div class="row">
				<div class="col-lg-5 col-12 mb-lg-0 mb-4 --awc-section-col1">
					<div class="">
						<div class="sup-title text-uppercase mb-3">lorem ipsum</div>
						<h2>Lorem Ipsum Contact US</h2>
						<p class="mt-3">
							Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
						</p>
					</div>
				</div> <!--col-n.--awc-section-col1-->
				<div class="col-lg col-12 --awc-section-col2 ps-lg-5 ps-md-2 ps-0">
					<div class="row">
						<section class="requestquote-section-contact-form contactus-section-contact-form">
							<div class="requestquote-section-contact-form-container contactus-section-contact-form-container">
								<div class="text-center">
									<div id="get_in_touch__form"> <!--https://eu.jotform.com/build/223132406993960--> <!--https://eu.jotform.com/myforms/-->
										<iframe
												id="JotFormIFrame-223132406993960"
												title="Get In Touch Form"

												allowtransparency="true"
												allowfullscreen="true"
												allow="geolocation; microphone; camera"
												src="https://form.jotform.com/223132406993960"
												frameborder="0"
												style="min-width:100%; height:539px; border:none; background:transparent;"
												scrolling="no"
										>
										</iframe>
										<script type="text/javascript">
											var ifr = document.getElementById("JotFormIFrame-223132406993960");
											if (ifr) {
												var src = ifr.src;
												var iframeParams = [];
												if (window.location.href && window.location.href.indexOf("?") > -1) {
													iframeParams = iframeParams.concat(window.location.href.substr(window.location.href.indexOf("?") + 1).split('&'));
												}
												if (src && src.indexOf("?") > -1) {
													iframeParams = iframeParams.concat(src.substr(src.indexOf("?") + 1).split("&"));
													src = src.substr(0, src.indexOf("?"))
												}
												iframeParams.push("isIframeEmbed=1");
												ifr.src = src + "?" + iframeParams.join('&');
											}
											window.handleIFrameMessage = function(e) {
												if (typeof e.data === 'object') { return; }
												var args = e.data.split(":");
												if (args.length > 2) { iframe = document.getElementById("JotFormIFrame-" + args[(args.length - 1)]); } else { iframe = document.getElementById("JotFormIFrame"); }
												if (!iframe) { return; }
												switch (args[0]) {
													case "scrollIntoView":
														iframe.scrollIntoView();
														break;
													case "setHeight":
														iframe.style.height = args[1] + "px";
														break;
													case "collapseErrorPage":
														if (iframe.clientHeight > window.innerHeight) {
															iframe.style.height = window.innerHeight + "px";
														}
														break;
													case "reloadPage":
														window.location.reload();
														break;
													case "loadScript":
														if( !window.isPermitted(e.origin, ['jotform.com', 'jotform.pro']) ) { break; }
														var src = args[1];
														if (args.length > 3) {
															src = args[1] + ':' + args[2];
														}
														var script = document.createElement('script');
														script.src = src;
														script.type = 'text/javascript';
														document.body.appendChild(script);
														break;
													case "exitFullscreen":
														if      (window.document.exitFullscreen)        window.document.exitFullscreen();
														else if (window.document.mozCancelFullScreen)   window.document.mozCancelFullScreen();
														else if (window.document.mozCancelFullscreen)   window.document.mozCancelFullScreen();
														else if (window.document.webkitExitFullscreen)  window.document.webkitExitFullscreen();
														else if (window.document.msExitFullscreen)      window.document.msExitFullscreen();
														break;
												}
												var isJotForm = (e.origin.indexOf("jotform") > -1) ? true : false;
												if(isJotForm && "contentWindow" in iframe && "postMessage" in iframe.contentWindow) {
													var urls = {"docurl":encodeURIComponent(document.URL),"referrer":encodeURIComponent(document.referrer)};
													iframe.contentWindow.postMessage(JSON.stringify({"type":"urls","value":urls}), "*");
												}
											};
											window.isPermitted = function(originUrl, whitelisted_domains) {
												var url = document.createElement('a');
												url.href = originUrl;
												var hostname = url.hostname;
												var result = false;
												if( typeof hostname !== 'undefined' ) {
													whitelisted_domains.forEach(function(element) {
														if( hostname.slice((-1 * element.length - 1)) === '.'.concat(element) ||  hostname === element ) {
															result = true;
														}
													});
													return result;
												}
											};
											if (window.addEventListener) {
												window.addEventListener("message", handleIFrameMessage, false);
											} else if (window.attachEvent) {
												window.attachEvent("onmessage", handleIFrameMessage);
											}
										</script>
									</div> <!--#get_in_touch__form-->
								</div>
							</div>
						</section>
					</div>
				</div> <!--col-n.--awc-section-col2-->
			</div> <!--.row-->
		</div> <!--.container-x-->
	</section>
	<div class="section-divider-100 --section1"></div>

	<section class="request-quote--section2 contactus--section2 mt-md-5 mt-4">
		<div class="container-xl">
			<div class="row d-flex align-items-center">
				<div class="col-lg col-12">
					<div class="">
						<img class="img-fluid" src="<?=get_stylesheet_directory_uri();?>/img/istockphoto-1182777182.jpg" alt="">
					</div>
				</div>
				<div class="col-lg-5 col-12">
					<div class="">
						<p class="mt-3">
							Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
						</p>
						<p>
							Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est.
						</p>
					</div>
				</div>
			</div> <!--.row-->
		</div> <!--.container-x-->
	</section>
	<div class="section-divider-100"></div>

	<section class="contactus--office-locations">
		<div class="contactus--office-locations--bg">
			<div class="container-xl">
				<div class="row d-flex align-items-center">
					<div class="col-sm-7 col-12 order-sm-1 order-2">
						<aside class="">
							<div class="sup-title text-uppercase mb-3 d-sm-block d-none">Contact</div>
							<h2 class="d-sm-block d-none">Our Office Locations</h2>
							<ul class="office-locations--address mt-5 ps-0">
								<div class="row">
									<div class="col-md col-12">
										<?php if($address_1):?>
											<li class="mb-3"><?php echo $address_1['address_slot_1'];?></li>
											<li><?php echo $address_1['address_slot_2'];?> <?php echo $address_1['address_slot_3'];?></li>
											<li>Phone: <a href="tel:<?php echo get_numerics($address_1['phone']);?>"><strong><?php echo $address_1['phone'];?></strong></a> | <a href="tel:<?php echo get_numerics($address_1['phone_2']);?>"><strong><?php echo $address_1['phone_2'];?></strong></a> </li>
											<li>E-mail: <a href="mailto:<?php echo $address_1['email'];?>"><strong><?php echo $address_1['email'];?></strong></a> </li>
										<?php endif;?>
									</div>
									<div class="col-md col-12">
										<?php if($address_2):?>
											<li class="mb-3"><?php echo $address_2['address_slot_1'];?></li>
											<li><?php echo $address_2['address_slot_2'];?><?php echo $address_2['address_slot_3'];?></li>
											<li>Phone: <a href="tel:<?php echo get_numerics($address_2['phone']);?>"><strong><?php echo $address_2['phone'];?></strong></a> | <a href="tel:<?php echo get_numerics($address_2['phone_2']);?>"><strong><?php echo $address_2['phone_2'];?></strong></a> </li>
											<li>E-mail: <a href="mailto:<?php echo $address_2['email'];?>"><strong><?php echo $address_2['email'];?></strong></a> </li>
										<?php endif;?>
									</div>
								</div>
							</ul>
						</aside>
					</div>
					<div class="sup-title text-uppercase mb-3 d-sm-none b-block">Contact</div>
					<h2 class="d-sm-none b-block mb-4">Our Office Locations</h2>
					<div class="col-sm col-12 order-sm-2 order-1">
						<div class="col-image--bg" style="background-image: url(<?=get_stylesheet_directory_uri();?>/img/istockphoto-1134660371-2048x2048-5.jpg);"></div>
					</div>
				</div>
			</div> <!--.container-xl-->
		</div>
	</section>

</div> <!--/.request-quote-page-wrapper-->
<?php get_footer();?>
