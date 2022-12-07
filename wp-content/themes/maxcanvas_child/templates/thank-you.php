<?php
/**
 * Template Name: Thank You
 *
 * @package maxcanvas
 */
?>
<?php get_header();?>
<div class="thankyou-page--bg"></div>
<div class="thankyou-page-wrapper">
	<div class="container-xl">
		<h2 class="text-center mb-4 text-center">Thank You</h2>
		<div class="text-center">
			<strong>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do	adipiscing elit, sed do eiusmod tempor </strong>
		</div>
		<div class="text-center">
			For any concerns, email us as hello@maxplaces.com
			<ul> <span class="me-3">Stay Connected</span>
				<a href="<?php echo $socialLinks['facebook'];?>" class="text-decoration-none me-2" target="_blank">
					<img src="<?php echo get_stylesheet_directory_uri();?>/img/social-icons/facebook-header-mobile-social-icon.png" alt="<?php echo get_bloginfo('name');?>">
				</a>
				<a href="<?php echo $socialLinks['linkedin'];?>" class="text-decoration-none me-2" target="_blank">
					<img src="<?php echo get_stylesheet_directory_uri();?>/img/social-icons/in-header-mobile-social-icon.png" alt="<?php echo get_bloginfo('name');?>">
				</a>
				<a href="<?php echo $socialLinks['twitter'];?>" class="text-decoration-none me-2" target="_blank">
					<img src="<?php echo get_stylesheet_directory_uri();?>/img/social-icons/twitter-header-mobile-social-icon.png" alt="<?php echo get_bloginfo('name');?>">
				</a>
				<a href="<?php echo $socialLinks['instagram'];?>" class="text-decoration-none me-2" target="_blank">
					<img src="<?php echo get_stylesheet_directory_uri();?>/img/social-icons/insta-header-mobile-social-icon.png" alt="<?php echo get_bloginfo('name');?>">
				</a>
			</ul>
		</div>

		<h2 class="text-center form-sub-title">We'd love to get to know you better: <br>What's your favorite pastime?</h2>

		<div class="thankyou-form--jotform">

			<iframe
					id="JotFormIFrame-223394897120057"
					title="Thank You Page"
					onload="window.parent.scrollTo(0,0)"
					allowtransparency="true"
					allowfullscreen="true"
					allow="geolocation; microphone; camera"
					src="https://form.jotform.com/223394897120057"
					frameborder="0"
					style="
      min-width: 100%;
      height:539px;
      border:none;"
					scrolling="no"
			>
			</iframe>
			<script type="text/javascript">
				var ifr = document.getElementById("JotFormIFrame-223394897120057");
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
		</div>
	</div>

	<div class="page-wrapper-bottom-bg-home"></div>
</div> <!--./thankyou-page-wrapper-->


<?php get_footer();?>
