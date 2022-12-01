<?php
/**
 * Template Name: Cities Served
 *
 * @package maxcanvas
 */
?>
<?php get_header();?>
<div class="cities-served-page-wrapper">
	<?php get_template_part('templates/component/header_page_title_section');?>
	<?php get_template_part('templates/component/page_banner_section');?>

	<div class="section-divider-100"></div>
	<div class="frequently-asked-section--bg-wrapper">
		<?php get_template_part('templates/component/frequently_asked_section');?>
	</div>

	<div class="section-divider-100"></div>
	<section class="getintouch-section-contact-form">
		<div class="container-xl getintouch-section-contact-form-container">
			<div class="text-center">
				<h2>Get In Touch</h2>
				<p class="mt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do.</p>
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

			<!--			<div class="text-center mt-4">-->
			<!--				<a class="text-center button button--blue-gradient" href="#" target="_self">submit</a>-->
			<!--			</div>-->
		</div>
	</section>

	<div class="page-wrapper-bottom-bg-ameb"></div>
	<section class="cities-served-page-map">
		<div class="container-lg">
			<div class="cities-served-page-map--bg" style="background-image: url(<?php echo get_stylesheet_directory_uri();?>/img/istockphoto-1134660371-2048x2048-5.jpg);">
			</div>
			<aside>
				<div class="row align-items-lg-end">
					<div class="col-sm-6 col-12">
						<div class="sup-title text-uppercase mb-3">сities</div>
						<h2>Lorem ipsum dolor</h2>
					</div>
					<div class="col-sm-6 col-12">
						<p class="mt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo </p>
					</div>
				</div>
				<div class="cities-served--map text-center">
					<img class="img-fluid" src="<?php echo get_stylesheet_directory_uri();?>/img/map-sities-served.svg" alt="<?php echo get_bloginfo('name');?>">
				</div>
				<div class="row cities-served--cities justify-content-center">
					<div class="col-xl-3 col-md-4 col-sm-6 col-6 mb-md-5 mb-3 text-sm-start text-center">
						<img src="<?php echo get_stylesheet_directory_uri();?>/img/citiesserved-icons/--1--.svg" alt="<?php echo get_bloginfo('name');?>">
						<span class="text-uppercase ms-sm-2 ms-0 mt-sm-0 mt-1">new york</span>
					</div>
					<div class="col-xl-3 col-md-4 col-sm-6 col-6 mb-md-5 mb-3 text-sm-start text-center">
						<img src="<?php echo get_stylesheet_directory_uri();?>/img/citiesserved-icons/--2--.svg" alt="<?php echo get_bloginfo('name');?>">
						<span class="text-uppercase ms-sm-2 ms-0 mt-sm-0 mt-1">denver</span>
					</div>
					<div class="col-xl-3 col-md-4 col-sm-6 col-6 mb-md-5 mb-3 text-sm-start text-center">
						<img src="<?php echo get_stylesheet_directory_uri();?>/img/citiesserved-icons/--3--.svg" alt="<?php echo get_bloginfo('name');?>">
						<span class="text-uppercase ms-sm-2 ms-0 mt-sm-0 mt-1">chicago</span>
					</div>
					<div class="col-xl-3 col-md-4 col-sm-6 col-6 mb-md-5 mb-3 text-sm-start text-center">
						<img src="<?php echo get_stylesheet_directory_uri();?>/img/citiesserved-icons/--4--.svg" alt="<?php echo get_bloginfo('name');?>">
						<span class="text-uppercase ms-sm-2 ms-0 mt-sm-0 mt-1">Phoenix</span>
					</div>


					<div class="col-xl-3 col-md-4 col-sm-6 col-6 mb-md-5 mb-3 text-sm-start text-center">
						<img src="<?php echo get_stylesheet_directory_uri();?>/img/citiesserved-icons/--5--.svg" alt="<?php echo get_bloginfo('name');?>">
						<span class="text-uppercase ms-sm-2 ms-0 mt-sm-0 mt-1">Los Angeles</span>
					</div>
					<div class="col-xl-3 col-md-4 col-sm-6 col-6 mb-md-5 mb-3 text-sm-start text-center">
						<img src="<?php echo get_stylesheet_directory_uri();?>/img/citiesserved-icons/--6--.svg" alt="<?php echo get_bloginfo('name');?>">
						<span class="text-uppercase ms-sm-2 ms-0 mt-sm-0 mt-1">San Diego</span>
					</div>
					<div class="col-xl-3 col-md-4 col-sm-6 col-6 mb-md-5 mb-3 text-sm-start text-center">
						<img src="<?php echo get_stylesheet_directory_uri();?>/img/citiesserved-icons/--7--.svg" alt="<?php echo get_bloginfo('name');?>">
						<span class="text-uppercase ms-sm-2 ms-0 mt-sm-0 mt-1">Dallas</span>
					</div>
					<div class="col-xl-3 col-md-4 col-sm-6 col-6 mb-md-5 mb-3 text-sm-start text-center">
						<img src="<?php echo get_stylesheet_directory_uri();?>/img/citiesserved-icons/--8--.svg" alt="<?php echo get_bloginfo('name');?>">
						<span class="text-uppercase ms-sm-2 ms-0 mt-sm-0 mt-1">Philadelphia</span>
					</div>
				</div>
			</aside>
		</div>
	</section>

</div> <!--/.cities-served-page-wrapper-->
<?php get_footer();?>
