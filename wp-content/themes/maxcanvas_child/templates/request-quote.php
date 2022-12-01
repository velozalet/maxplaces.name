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
				<div class="col-lg col-12 --awc-section-col2 ps-lg-5 ps-md-2 ps-0">
					<div class="row">
						<section class="requestquote-section-contact-form">
							<div class="requestquote-section-contact-form-container">
								<div class="text-center">
									<div id="request_quote__form"> <!--https://eu.jotform.com/build/223132406993960--> <!--https://eu.jotform.com/myforms/-->

										<iframe
												id="JotFormIFrame-223323816992966"
												title="Request a quote Form"
												onload="window.parent.scrollTo(0,0)"
												allowtransparency="true"
												allowfullscreen="true"
												allow="geolocation; microphone; camera"
												src="https://form.jotform.com/223323816992966"
												frameborder="0"
												style="
      min-width: 100%;
      height:539px;
      border:none;"
												scrolling="no"
										>
										</iframe>
										<script type="text/javascript">
											var ifr = document.getElementById("JotFormIFrame-223323816992966");
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
									</div> <!--#request_quote__form-->
								</div>
							</div>
						</section>
					</div>
				</div> <!--col-n.--awc-section-col2-->
			</div> <!--.row-->
		</div> <!--.container-x-->
	</section>
	<div class="section-divider-100 --section1"></div>

	<section class="request-quote--section2 mt-md-5 mt-4">
		<div class="container-xl">
			<div class="row d-flex align-items-center">
				<div class="col-lg-5 col-12 order-md-1 order-2">
					<div class="">
						<p class="mt-3">
							Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
						</p>
						<p>
							Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.
						</p>
					</div>
				</div>
				<div class="col-lg col-12 order-md-2 order-1">
					<div class="">
						<img class="img-fluid" src="<?=get_stylesheet_directory_uri();?>/img/istockphoto-1182777182.jpg" alt="">
					</div>
				</div>
			</div> <!--.row-->
		</div> <!--.container-x-->
	</section>
	<div class="section-divider-100"></div>

	<section class="request-quote--services-include">
		<div class="container-xl">
			<div class="request-quote--services-include--bg d-flex" style="background-image: url(<?=get_stylesheet_directory_uri();?>/img/istockphoto-1073656146-2048x2048_45.jpg);">
				<div class="row align-self-center">
					<div class="col pe-0">
						<aside class="ms-md-5 ms-3">
							<div class="sup-title text-uppercase mb-3">lorem ipsum</div>
							<div class="services-include--title text-capitalize mb-3">Our Services Include</div>
							<ul>
								<div class="row">
									<div class="col-md col-12">
										<li> <span>Lorem ipsum Item -1</span> </li>
										<li> <a href="">Lorem ipsum Item -2</a> </li>
										<li> <span>Lorem ipsum Item -3</span> </li>
									</div>
									<div class="col-md col-12">
										<li> <span>Lorem ipsum Item -4</span> </li>
										<li> <span>Lorem ipsum Item -5</span> </li>
										<li> <span>Lorem ipsum Item -6</span> </li>
									</div>
								</div>


							</ul>
							<p class="mt-2">
								Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo...
							</p>
						</aside>
					</div>
				</div>
			</div>
		</div> <!--.container-lg-->
	</section>


	<div class="page-wrapper-bottom-bg"></div>
</div> <!--/.request-quote-page-wrapper-->
<?php get_footer();?>