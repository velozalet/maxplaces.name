<?php
/**
 * Template Name: Industry Served
 *
 * @package maxcanvas
 */
?>
<?php get_header();?>
<div class="industry-served-page-wrapper">
	<?php get_template_part('templates/component/header_page_title_section');?>

	<section class="industry-served-page--f-st">
		<div class="container-lg">
			<div class="industry-served-page--f-st--bg" style="background-image: url(<?php echo get_stylesheet_directory_uri();?>/img/istockphoto-850495466-2048x2048-1.jpg)"></div>

			<aside>
				<div class="row align-items-lg-end mb-md-5 mb-3">
					<div class="col-sm-6 col-12">
						<div class="sup-title text-uppercase mb-3">сities</div>
						<h2>Lorem ipsum dolor</h2>
					</div>
					<div class="col-sm-6 col-12">
						<p class="mt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo </p>
					</div>
				</div>
				<div class="row industry-served--serveds justify-content-center">
					<div class="col-xl-3 col-md-4 col-sm-6 col-6 mb-md-5 mb-3 text-sm-start text-center d-sm-flex d-block align-items-center">
						<img src="<?php echo get_stylesheet_directory_uri();?>/img/case_studies/__1.svg" alt="<?php echo get_bloginfo('name');?>">
						<span class="text-uppercase ms-sm-2 ms-0 mt-sm-0 mt-1">Construction</span>
					</div>
					<div class="col-xl-3 col-md-4 col-sm-6 col-6 mb-md-5 mb-3 text-sm-start text-center d-sm-flex d-block align-items-center">
						<img src="<?php echo get_stylesheet_directory_uri();?>/img/case_studies/__3.svg" alt="<?php echo get_bloginfo('name');?>">
						<span class="text-uppercase ms-sm-2 ms-0 mt-sm-0 mt-1">Medical</span>
					</div>
					<div class="col-xl-3 col-md-4 col-sm-6 col-6 mb-md-5 mb-3 text-sm-start text-center d-sm-flex d-block align-items-center">
						<img src="<?php echo get_stylesheet_directory_uri();?>/img/case_studies/__5.svg" alt="<?php echo get_bloginfo('name');?>">
						<span class="text-uppercase ms-sm-2 ms-0 mt-sm-0 mt-1">Retail</span>
					</div>
					<div class="col-xl-3 col-md-4 col-sm-6 col-6 mb-md-5 mb-3 text-sm-start text-center d-sm-flex d-block align-items-center">
						<img src="<?php echo get_stylesheet_directory_uri();?>/img/case_studies/__7.svg" alt="<?php echo get_bloginfo('name');?>">
						<span class="text-uppercase ms-sm-2 ms-0 mt-sm-0 mt-1">Food and Beverage</span>
					</div>


					<div class="col-xl-3 col-md-4 col-sm-6 col-6 mb-md-5 mb-3 text-sm-start text-center d-sm-flex d-block align-items-center">
						<img src="<?php echo get_stylesheet_directory_uri();?>/img/case_studies/__2.svg" alt="<?php echo get_bloginfo('name');?>">
						<span class="text-uppercase ms-sm-2 ms-0 mt-sm-0 mt-1">Technology</span>
					</div>
					<div class="col-xl-3 col-md-4 col-sm-6 col-6 mb-md-5 mb-3 text-sm-start text-center d-sm-flex d-block align-items-center">
						<img src="<?php echo get_stylesheet_directory_uri();?>/img/case_studies/__4.svg" alt="<?php echo get_bloginfo('name');?>">
						<span class="text-uppercase ms-sm-2 ms-0 mt-sm-0 mt-1">Life Sciences</span>
					</div>
					<div class="col-xl-3 col-md-4 col-sm-6 col-6 mb-md-5 mb-3 text-sm-start text-center d-sm-flex d-block align-items-center">
						<img src="<?php echo get_stylesheet_directory_uri();?>/img/case_studies/__6.svg" alt="<?php echo get_bloginfo('name');?>">
						<span class="text-uppercase ms-sm-2 ms-0 mt-sm-0 mt-1">Home</span>
					</div>
					<div class="col-xl-3 col-md-4 col-sm-6 col-6 mb-md-5 mb-3 text-sm-start text-center d-sm-flex d-block align-items-center">
						<img src="<?php echo get_stylesheet_directory_uri();?>/img/case_studies/__8.svg" alt="<?php echo get_bloginfo('name');?>">
						<span class="text-uppercase ms-sm-2 ms-0 mt-sm-0 mt-1">Finance</span>
					</div>
				</div>
			</aside>
		</div>
	</section>

	<section class="industry-served-page--case-slider">
		<div class="container-xl">
			<div class="row row-height"> <!--g-0-->
				<div class="col-lg-4 col-12" id="dynamic_content__industry_served_case_slider">

					<kbd class="d-none">
						<?php
							$data = array(
								array('title' => 'Lorem ipsum dolor sit - 1', 'text' => 'It is likely that you have direct competitors that are achieving better results in Google search ranking than you are __1' ),
								array('title' => 'Lorem ipsum dolor sit - 2', 'text' => 'It is likely that you have direct competitors that are achieving better results in Google search ranking than you are __2' ),
								array('title' => 'Lorem ipsum dolor sit - 3', 'text' => 'It is likely that you have direct competitors that are achieving better results in Google search ranking than you are __3' ),
								array('title' => 'Lorem ipsum dolor sit - 4', 'text' => 'It is likely that you have direct competitors that are achieving better results in Google search ranking than you are __4' ),
								array('title' => 'Lorem ipsum dolor sit - 5', 'text' => 'It is likely that you have direct competitors that are achieving better results in Google search ranking than you are __5' ),
								array('title' => 'Lorem ipsum dolor sit - 6', 'text' => 'It is likely that you have direct competitors that are achieving better results in Google search ranking than you are __6' ),
							); //dd($data);
						?>
						<ul><?php foreach( $data as $d ):?><li><p><?php echo $d['title']?></p><p><?php echo $d['text']?></p></li><?php endforeach;?></ul>
					</kbd>

					<div class="sup-title text-uppercase mb-3">сase study</div>
					<h2 class="mb-md-5 mb-3">Lorem ipsum dolor</h2>

					<div class="industry-served-case-slider-content">
						<h5></h5> <!--from JS-->
						<p></p> <!--from JS-->
					</div>

					<!--progress bar slider-->
					<div id="industry_served_case_slide_progress">
						<span class="progress-bar-slider--start">01</span><div class="industry-served-case-slide--progress d-inline-block mx-2">
							<div class="industry-served-case-slide--progress-bar"></div>
						</div><span class="progress-bar-slider--end"></span>
					</div>
					<!--/progress bar slider-->
				</div>
				<div class="col-lg col-12"> <!--col-md-9 col-12-->
					<div id="__industry_served_case_slider" class="splide __industry-served-case-slider" aria-label="Industry Served Case Slider">
						<div class="splide__track">
							<ul class="splide__list">
								<li class="splide__slide"> <!--img-fluid-->
									<div class="vual"></div>
									<img src="<?php echo get_stylesheet_directory_uri();?>/img/blog-1.jpeg" alt="<?php echo get_bloginfo('name');?>">
								</li>
								<li class="splide__slide">
									<div class="vual"></div>
									<img src="<?php echo get_stylesheet_directory_uri();?>/img/blog-2.jpeg" alt="<?php echo get_bloginfo('name');?>">
								</li>
								<li class="splide__slide">
									<div class="vual"></div>
									<img src="<?php echo get_stylesheet_directory_uri();?>/img/blog-3.jpeg" alt="<?php echo get_bloginfo('name');?>">
								</li>
								<li class="splide__slide">
									<div class="vual"></div>
									<img src="<?php echo get_stylesheet_directory_uri();?>/img/blog-4.jpeg" alt="<?php echo get_bloginfo('name');?>">
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<div class="section-divider-100"></div>
	<?php get_template_part('templates/component/frequently_asked_section');?>
	<div class="section-divider-100"></div>

	<section class="getintouch-section-contact-form">
		<div class="container-xl getintouch-section-contact-form-container">
			<div class="text-center">
				<h2>Lorem Ipsum</h2>
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
	<div class="section-divider-100"></div>

	<section class="industry-served-page--l-st">
		<div class="pisdiv">
			<img class="img-fluid" src="<?php echo get_stylesheet_directory_uri();?>/img/istockphoto-1286815179-2048x2048-6.jpg" alt="<?php echo get_bloginfo('name');?>">
		</div>

		<div class="container-xl">
			<div class="row d-flex align-items-center">
				<div class="col text-center mb-lg-0 mb-5">
					<img class="img-fluid if-img" src="<?php echo get_stylesheet_directory_uri();?>/img/istockphoto-1286815179-2048x2048-6.jpg" alt="<?php echo get_bloginfo('name');?>">
				</div>
				<div class="col-lg-7 col-12">
					<div class="industry-served-page--l-st--content">
						<div class="sup-title text-uppercase mb-3">Lorem ipsum</div>
						<h2>Lorem ipsum dolor sit amet consectetur adipiscing elit</h2>
						<p class="mt-3">
							Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam
						</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<div class="section-divider-100"></div>

	<div class="page-wrapper-bottom-bg-home"></div>
</div> <!--/.industry-served-page-wrapper-->
<?php get_footer();?>
