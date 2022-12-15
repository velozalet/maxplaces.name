<?php

?>
<section class="getintouch-section-contact-form">
	<div class="container-xl getintouch-section-contact-form-container" style="padding-left:0; padding-right:0;">
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