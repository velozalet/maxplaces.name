<?php
/**
 * Template Name: Request Quote
 *
 * @package maxcanvas
 */
?>
<?php get_header();?>
<div class="request-quote-page-wrapper">
	<?php get_template_part('templates/component/header_page_title_section');?>

	<section class="request-quote--section1 mt-5">
		<div class="a-w-c--bg"></div>
		<div class="container-xl">
			<div class="row">
				<div class="col-lg-5 col-12 mb-lg-0 mb-4 --awc-section-col1">
					<div class="">
						<div class="sup-title text-uppercase mb-3">lorem ipsum</div>
						<h2>Lorem Ipsum Title</h2>
						<p class="mt-3">
							Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
						</p>
					</div>
				</div> <!--col-n.--awc-section-col1-->
				<div class="col-lg col-12 --awc-section-col2 ps-lg-5 ps-2">
					<div class="row">
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
					</div>
				</div> <!--col-n.--awc-section-col2-->
			</div> <!--.row-->
		</div> <!--.container-x-->
	</section>

	<section class="request-quote--section2 mt-5">
		<div class="container-xl">
			<div class="row d-flex align-items-center">
				<div class="col-lg-5 col-12">
					<div class="">
						<p class="mt-3">
							Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
						</p>
						<p>
							Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.
						</p>
					</div>
				</div>
				<div class="col-lg col-12">
					<div class="">
						<img class="img-fluid" src="<?=get_stylesheet_directory_uri();?>/img/istockphoto-1182777182.jpg" alt="">
					</div>
				</div>
			</div> <!--.row-->
		</div> <!--.container-x-->
	</section>

	<section class="request-quote--services-include mt-5">
		<div class="container-xl">
			<div class="request-quote--services-include--bg" style="background-image: url(https://www.naecsol.com/wp-content/uploads/2022/10/1054349846_News_Banner.jpg); min-height:510px; background-size:cover; background-repeat:no-repeat; background-position:50% 50%;">

			</div>
		</div> <!--.container-lg-->
	</section>


	<div class="page-wrapper-bottom-bg"></div>
</div> <!--/.request-quote-page-wrapper-->
<?php get_footer();?>
