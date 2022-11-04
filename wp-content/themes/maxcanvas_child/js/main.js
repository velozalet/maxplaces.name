document.addEventListener( 'DOMContentLoaded', function () { //console.log('init');
	//console.log(globalData);

	/*Check Display Screen breakpoint*/
	const cssElem = window.getComputedStyle( document.getElementById("breakpoint_check"), null );
	let breakpointCheck = cssElem.getPropertyValue('width'); console.log(breakpointCheck); //possible values: 100%|1400px|1199px|991px|767px|575px
	/*__/Check Display Screen breakpoint*/

	/*Bootstrap 5x Popover initialization*/
	let popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'));
	let popoverList = popoverTriggerList.map(function (popoverTriggerEl){ return new bootstrap.Popover(popoverTriggerEl) });
	/*__/Bootstrap 5x Popover initialization*/
	/*Bootstrap 5x Tooltip initialization*/
	let tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
	let tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl){ return new bootstrap.Tooltip(tooltipTriggerEl) });
	/*__/Bootstrap 5x Tooltip initialization*/


	//window.scroll({ top: 0, behavior: 'smooth' });
	//const bodyDOM = document.getElementsByTagName("BODY")[0];

	const parallax_bg = document.querySelector('.parallax-bg');
	if(parallax_bg){
		const scrollPage = () => {
			let variableY = 1;
			variableY = variableY - (window.scrollY / 1000);
			//console.log(window.scrollY); //Value of scroll Y in px
			//console.log(variableY);
			parallax_bg.setAttribute('style', `opacity:${variableY}`);
		};
		window.addEventListener("scroll", scrollPage);
	}


	/*Сustom PAUSE/PLAY button control for video <video source></video>*/
	function playPauseVideo(video, btn){
		if(video.paused){
			video.play();
			if( btn.classList.contains('fa') ){ btn.classList.remove('fa-play-circle'); btn.classList.add('fa-pause'); }
		}else{
			video.pause();
			if( btn.classList.contains('fa') ){ btn.classList.remove('fa-pause'); btn.classList.add('fa-play-circle'); }
		}
	}
	/*__/Сustom PAUSE/PLAY button control for video <video source></video>*/
	/*Open full video-player for video <video source></video> by double click mouse*/
	function openFullVideo(video){
		if(video.requestFullscreen) {
			video.requestFullscreen();
		}else if(video.mozRequestFullScreen){
			video.mozRequestFullScreen(); /*Mozilla FF*/
		}else if(video.webkitRequestFullscreen) { /*Safari*/
			video.webkitRequestFullscreen();
		}else if(video.msRequestFullscreen) { /*IE11*/
			video.msRequestFullscreen();
		}
	}
	/*__/Open full video-player for video <video source></video> by double click mouse*/


	/*#BANNER & NAVBAR*/
	if( document.querySelector('nav.navbar') ){
		const parallaxBg = document.querySelector('.parallax-bg');
		const headerBanner = document.querySelector('.header-banner');
		const navbar = document.querySelector('nav.navbar');
		const navbarContainer = navbar.querySelector('.container-lg');
		const navbarBrand = navbar.querySelector('.navbar-brand');
		const btnNavbarToggler = navbar.querySelector('button.navbar-toggler');
		const navbarCollapse = document.getElementById('navbarSupportedContent');


		btnNavbarToggler.addEventListener('click', (event) => { //console.log('OPEN');
			if( !event.currentTarget.classList.contains('collapsed') ){ //OPEN
				navbarBrand.classList.toggle('invisible');
				if(headerBanner){ headerBanner.classList.toggle('d-none'); }
				parallaxBg.classList.toggle('d-none');
				//event.currentTarget.classList.toggle('pe-0');
				//navbarCollapse.style.backgroundPositionY = '215px';
				event.currentTarget.nextElementSibling.classList.add('vh-100');
			}else{ //CLOSE
				navbarBrand.classList.remove('invisible');
				if(headerBanner){ headerBanner.classList.toggle('d-none'); }
				parallaxBg.classList.toggle('d-none');
				//event.currentTarget.classList.toggle('pe-0');
				//navbarCollapse.style.backgroundPositionY = '1px';
				event.currentTarget.nextElementSibling.classList.remove('vh-100');
			}
		});

		/*Only Desktop/Tablet*/
		if( parseInt(breakpointCheck) > 767 || breakpointCheck === 'auto' ){ console.log('Desktop/Tablet');
			const navbarNavUlList = navbar.querySelector('#desktop_tablet');
			const navLinksCollection = navbarNavUlList.querySelectorAll('li.nav-item.dropdown');

			for( let itemMenu  of navLinksCollection ){ itemMenu.classList.add('desktop-tablet'); }

			function navLinkMouseover(){
				this.querySelector('.dropdown-menu').classList.add('show');
				navbar.classList.add('navbar-white--white');
				if(headerBanner){ headerBanner.classList.add('header-banner--white'); }
			}
			function navLinkMouseout(){
				this.querySelector('.dropdown-menu').classList.remove('show');
				navbar.classList.remove('navbar-white--white');
				if(headerBanner){ headerBanner.classList.remove('header-banner--white'); }
			}
			navLinksCollection.forEach(
				(item) => {
					item.addEventListener('mouseover', navLinkMouseover);
					item.addEventListener('mouseout', navLinkMouseout);
				}
			);
		}
		/*Only Desktop/Tablet*/

		/*Only Mobile*/
		if( parseInt(breakpointCheck) <= 767 ){
			const navbarCollapsedMobile = navbar.querySelector('.navbar-collapse.collapse');
			const navLinksCollection = navbarCollapsedMobile.querySelectorAll('.navbar-nav .nav-item.dropdown > a.nav-link');

			navLinksCollection.forEach(
				(item, index, collection) => {
					item.addEventListener('click', (event) => {
						let cssObjDropdownListHeight = window.getComputedStyle(event.currentTarget.nextElementSibling, null).getPropertyValue('height');

						for( let itemMenu  of collection ) {
							itemMenu.classList.remove('current-menu-item-mobile');
							navbarCollapsedMobile.style.backgroundPositionY = '1px';
						}
						event.currentTarget.classList.toggle('current-menu-item-mobile');
						navbarCollapsedMobile.style.backgroundPositionY = cssObjDropdownListHeight;
					});
				}
			);
		}
		/*__/Only Mobile*/

	}
	/*__________________________________________________________________/#NAVBAR & NAVBAR*/

	/*__/#HOME*/
	/*Gear Slider*/
	let gearSliderDOM = document.getElementById('__section_gear_slider');
	if(gearSliderDOM){
		var gearSlider = new Splide( gearSliderDOM,{ //All settings: https://splidejs.com/guides/options
			type: 'slide', /*'slide'|'loop'|'fade'*/
			pagination: true,
			autoplay: false,
			speed: 2000,
			omitEnd: true,
			//interval: 2000,
			arrows: false,
			breakpoints: {
				767: {
					type: 'loop',
					drag: true,
				}
			},
		} ); gearSlider.mount();
	}
	/*__/Gear Slider*/

	/*Our Services Slider*/
	let ourservicesSliderDOM = document.getElementById('__section_ourservices_slider'); //console.log(ourservicesSliderDOM);
	if(ourservicesSliderDOM){
		var ourservicesSlider = new Splide( ourservicesSliderDOM,{ //All settings: https://splidejs.com/guides/options
			type: 'loop', /*'slide'|'loop'|'fade'*/
			pagination: false,
			autoplay: false,
			speed: 2000,
			omitEnd: true,
			//keyboard: true,
			//interval: 2000,
			arrows: true,
		} ); ourservicesSlider.mount();

		let splideArrows = ourservicesSliderDOM.querySelector('.splide__arrows'); //console.log(splideArrows);
		splideArrows.insertAdjacentHTML('afterBegin', `
				   	<span>01</span>
			    `);
		//let splidePagination = ourservicesSliderDOM.querySelector('.splide__pagination'); if(splidePagination){ let splidePaginationCollection = splidePagination.querySelectorAll('li').length; }

		//let ii = 0;
		ourservicesSlider.on('move',function(destIndex) {
			let currentNumSlide = (destIndex+1);
			if( currentNumSlide < 10 ){ currentNumSlide = `0${currentNumSlide}` }
			splideArrows.querySelector('span').innerHTML = currentNumSlide;
		} );
	}
	/*__/Our Services Slider*/

	/*Testimonials Slider*/
	let testimonialsSliderDOM = document.getElementById('__testimonials_slider'); //console.log(testimonialsSliderDOM);
	if(testimonialsSliderDOM){
		var testimonialsSlider = new Splide( testimonialsSliderDOM,{ //All settings: https://splidejs.com/guides/options
			type: 'loop', /*'slide'|'loop'|'fade'*/
			pagination: true,
			autoplay: false,
			speed: 2000,
			omitEnd: true,
			perPage: 3,
			gap: '1.5rem',
			//keyboard: true,
			//interval: 2000,
			arrows: true,
			breakpoints: {
				1199: {
					perPage: 2,
				},
				767: {
					perPage: 1,
				}
			},
		} ); testimonialsSlider.mount();
	}
	/*__/Testimonials Slider*/

	/*__/Blog Slider*/
	let blogSliderDOM = document.getElementById('__blog_slider'); //console.log(blogSliderDOM);
	if(blogSliderDOM){
		var blogSlider = new Splide( blogSliderDOM,{ //All settings: https://splidejs.com/guides/options
			type: 'loop', /*'slide'|'loop'|'fade'*/
			pagination: false,
			autoplay: false,
			speed: 2000,
			omitEnd: true,
			perPage: 2,
			gap: '1.5rem',
			//keyboard: true,
			//interval: 2000,
			arrows: true,
			breakpoints: {
				575: {
					perPage: 1,
				}
			},
		} ); blogSlider.mount();

		let splideArrows = blogSliderDOM.querySelector('.splide__arrows'); //console.log(splideArrows);
		splideArrows.insertAdjacentHTML('afterBegin', `
				   	<span>01</span>
			    `);

		blogSlider.on('move',function(destIndex) {
			let currentNumSlide = (destIndex+1);
			if( currentNumSlide < 10 ){ currentNumSlide = `0${currentNumSlide}` }
			splideArrows.querySelector('span').innerHTML = currentNumSlide;
		} );
	}
	/*__/Blog Slider*/

	/*Home Video*/
	const homevideoSectionFxContent = document.getElementById("homevideo_section_fx_content");
	if(homevideoSectionFxContent) {
		const homeVideoVideo = homevideoSectionFxContent.querySelector("#home_video__video"),
			homeVideoVideoBtn = homevideoSectionFxContent.querySelector("#home_video__video_btn"),
			homevideoSectionContainer = homevideoSectionFxContent.querySelector(".homevideo-section-container");

		//Сustom PAUSE/PLAY button control for video <video source></video>
		homeVideoVideoBtn.addEventListener('click', () => playPauseVideo(homeVideoVideo, homeVideoVideoBtn));
		//Open full video-player for video <video source></video> by double click mouse
		homevideoSectionContainer.addEventListener('dblclick', () => openFullVideo(homeVideoVideo));
		/*__/Home Video*/
	}
	/*____________________________________________________________________/#HOME*/
});

new WOW().init(); //initial the WOW animation library
