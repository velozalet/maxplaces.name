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
				if(parallaxBg){ parallaxBg.classList.toggle('d-none'); }
				//event.currentTarget.classList.toggle('pe-0');
				//navbarCollapse.style.backgroundPositionY = '215px';
				event.currentTarget.nextElementSibling.classList.add('vh-100');
			}else{ //CLOSE
				navbarBrand.classList.remove('invisible');
				if(headerBanner){ headerBanner.classList.toggle('d-none'); }
				if(parallaxBg){ parallaxBg.classList.toggle('d-none'); }
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
				(item,index,collection) => {
					item.addEventListener('click', (event) => {
						let cssObjDropdownListHeight = window.getComputedStyle(event.currentTarget.nextElementSibling, null).getPropertyValue('height'); //console.log(cssObjDropdownListHeight);

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

	/*__________________________________________________________________/#SERVICES*/
	const servicesSectionDesktop = document.querySelector('.services-section.services-section--desktop');
	if( servicesSectionDesktop ){
		const cstHeightServicesBlock = servicesSectionDesktop.querySelector('#cst_height_services_block'),
			imageAsy = servicesSectionDesktop.querySelector('#cst_height_services_block + img'),
			asynchronousMadnessBlock = servicesSectionDesktop.querySelector('.asynchronous-madness-block');

		let serviceItemLinkCollection = asynchronousMadnessBlock.parentElement.querySelectorAll('.service-item--link'); //7
		let serviceItemLinkEvenCollection = [];
		for(let i=0; i < serviceItemLinkCollection.length; i++){ if(i%2 === 0){ serviceItemLinkEvenCollection.push(serviceItemLinkCollection[i]); } }
		let calcul = (228 * serviceItemLinkEvenCollection.length - 75);  //console.log(calcul);
		cstHeightServicesBlock.style.height = `${calcul}px`;

		asynchronousMadnessBlock.style.height = `${parseInt(imageAsy.style.height) + 60}px`;
	}
	const servicesSectionMobile = document.querySelector('.services-section.services-section--mobile');
	if( servicesSectionMobile ){
		let ssMmobileTextBlockDOM =  servicesSectionMobile.querySelector('.ss--mobile-text-block > div'); //console.log(ssMmobileTextBlockDOM);
		let ssMmobileTextBlockDOM_height = ssMmobileTextBlockDOM.getBoundingClientRect().height; console.log(ssMmobileTextBlockDOM_height);
		servicesSectionMobile.style.marginBottom = `${parseInt(ssMmobileTextBlockDOM_height) - 50}px`;
	}
	/*__________________________________________________________________/#SERVICES*/

	/*__________________________________________________________________/#SINGLE-SERVICES*/
	singleServicesPageWrapperDOM = document.querySelector('.single-services-page-wrapper');
	if(singleServicesPageWrapperDOM){
		/*Single Services Slider*/
		let singleServicesSliderDOM = document.getElementById('__single_services_slider');
		if(singleServicesSliderDOM){
			var singleServicesSlider = new Splide( singleServicesSliderDOM,{ //All settings: https://splidejs.com/guides/options
				type: 'loop', /*'slide'|'loop'|'fade'*/
				pagination: false,
				autoplay: false,
				speed: 2000,
				omitEnd: true,
				perPage: 1,
				gap: '1.5rem',
				//keyboard: true,
				//interval: 2000,
				arrows: true,
				breakpoints: {
					575: {
						perPage: 1,
					}
				},
			} ); singleServicesSlider.mount();

			let splideArrows = singleServicesSliderDOM.querySelector('.splide__arrows');
			singleServicesSlider.on('move',function(destIndex) {
				let currentNumSlide = (destIndex+1);
				if( currentNumSlide < 10 ){ currentNumSlide = `0${currentNumSlide}` }
				splideArrows.querySelector('span').innerHTML = currentNumSlide;
			} );
		}
		/*__/Single Services Slider*/
	}
	/*__________________________________________________________________/#SINGLE-SERVICES*/

	/*__________________________________________________________________#Industry Served Page*/
	industryServedPageWrapperDOM = document.querySelector('.industry-served-page-wrapper');
	if(industryServedPageWrapperDOM){
		/*Industry Served Case Slider*/
		let industryServedCaseSliderDOM = document.getElementById('__industry_served_case_slider');
		if(industryServedCaseSliderDOM){
			var industryServedCaseSlider = new Splide( industryServedCaseSliderDOM,{ //All settings: https://splidejs.com/guides/options
				type: 'slide', /*'slide'|'loop'|'fade'*/
				pagination: false,
				autoplay: false,
				speed: 1000,
				omitEnd: true,
				perPage: 1,
				focus : 'center',
				gap: '1.5rem',
				/*padding: '20%', / padding: '5rem',*/
				padding: '20%',
				//keyboard: true,
				//interval: 2000,
				arrows: true,
				breakpoints: {
					767: {
						perPage: 1,
						padding: '',
					}
				},
			} );
			let bar = document.querySelector('.industry-served-case-slide--progress-bar');
			let progressBarSlider__end = document.querySelector('.progress-bar-slider--end');
			let progressBarSlider__start = document.querySelector('.progress-bar-slider--start');
			let dynamic_contentDOM = document.getElementById('dynamic_content__industry_served_case_slider'),
				industryServedCaseSliderContentSupTitle = dynamic_contentDOM.querySelector('div.sup-title'),
				industryServedCaseSliderContentTitleH2 = dynamic_contentDOM.querySelector('h2'),
				industryServedCaseSliderContentTitleH5 = dynamic_contentDOM.querySelector('.industry-served-case-slider-content h5'),
				industryServedCaseSliderContentText = dynamic_contentDOM.querySelector('.industry-served-case-slider-content p');

			const dataSliderCollectionDOM = dynamic_contentDOM.querySelectorAll('kbd ul > li');
			const dataSliderCollection = [];
			dataSliderCollectionDOM.forEach(
				(item, index, collection) => {
					dataSliderCollection.push( [item.querySelector('p:nth-of-type(1)').textContent, item.querySelector('p:nth-of-type(2)').textContent ] );
				}
			); console.log(dataSliderCollection);

			industryServedCaseSlider.on( 'mounted move', function(destIndex) {
				var end  = industryServedCaseSlider.Components.Controller.getEnd() + 1;
				var rate = Math.min( ( industryServedCaseSlider.index + 1 ) / end, 1 );
				bar.style.width = String( 100 * rate ) + '%';

				let progressBarSlider__end_val = end;
				if( progressBarSlider__end_val < 10 ){ progressBarSlider__end_val = `0${progressBarSlider__end_val}` }
				progressBarSlider__end.innerHTML = progressBarSlider__end_val;

				if( destIndex !== undefined ){
					industryServedCaseSliderContentTitleH5.innerHTML = dataSliderCollection[destIndex][0];
					industryServedCaseSliderContentText.innerHTML = dataSliderCollection[destIndex][1];
				}
			} );
			industryServedCaseSlider.mount();

			industryServedCaseSliderContentTitleH5.innerHTML = dataSliderCollection[0][0];
			industryServedCaseSliderContentText.innerHTML = dataSliderCollection[0][1];

			let splideArrowsDOM = industryServedCaseSliderDOM.querySelector('.splide__arrows');
			let splideArrowNextBtn = splideArrowsDOM.querySelector('.splide__arrow.splide__arrow--next');
			let splideArrowPrevBtn = splideArrowsDOM.querySelector('.splide__arrow.splide__arrow--prev');

			progressBarSlider__end.addEventListener('click', () => splideArrowNextBtn.click() );
			progressBarSlider__start.addEventListener('click', () => splideArrowPrevBtn.click() );
		}
		/*Industry Served Case Slider*/
	}
	/*__________________________________________________________________/#Industry Served Page*/

	/*__________________________________________________________________#In The News Page*/
	const inNewsPageWrapperDOM = document.querySelector('.in-news-page-wrapper');
	if(inNewsPageWrapperDOM){
		const inNewsPageCollection = inNewsPageWrapperDOM.querySelectorAll('.in-news-page--collection .wrapper > .wrapper-item.flip');
		for( let item of inNewsPageCollection ){ item.addEventListener('mouseover', mouseoverInNewFlip); item.addEventListener('mouseout', mouseoutInNewFlip); }

		function mouseoverInNewFlip(){ //console.log('mouseoverInNewFlip');
			this.classList.add('flip--active');
		}
		function mouseoutInNewFlip(){
			this.classList.remove('flip--active');
		}
	}

	/*__________________________________________________________________/#In The News Page*/

	/*_________________________________________________________________#Blog*/
	const blogArchivePageWrapperDOM = document.querySelector('.blog-archive-page-wrapper');
	if(blogArchivePageWrapperDOM){

		/*Query to REST-API get all posts*/
		const loadPostsContainer = document.querySelector('.blog-archive--articles .row');
		const postArticleData = [];
		let postArticleObj = {
			id: null,
			date: null,
			slug: null,
			status: null,
			link: null,
			titleRendered: null,
			contentRendered: null,
			excerptRendered: null,
			featuredMedia: null,
			featuredMediaSourceUrl: null
		};

		let getAllPosts = async(method, url) => { //В случае с GET-методом, можем его в fetch() вообще не указывать
			let response = await fetch(url, {method: method}); //завершается с заголовками ответа  //OR: await fetch(url);
			if(response.ok){ //проверяем статус ответа, через специальное поле `ok` на Объекте Response, если тут true,то данные получены
				return await response.json();
			}else{ console.error('Error no: ' + response.status); }
		};

		getAllPosts('GET', `${globalData.siteURL}/wp-json/wp/v2/posts?order=asc`).then( //myTestCustomData данные из PHP(`wp_localize_script()` by `functions.php`)
			(data) => {
				//return console.log(data);
				data.forEach(
					(item) => {
						postArticleObj = {
							id: item.id,
							date: item.date,
							slug: item.slug,
							status: item.status,
							link: item.link,
							titleRendered: item.title.rendered,
							contentRendered: item.content.rendered,
							excerptRendered: item.excerpt.rendered,
							featuredMedia: item.featured_media,
							featuredMediaSourceUrl: item.fimg_url
						};	postArticleData.push(postArticleObj);

						loadPostsContainer.insertAdjacentHTML('beforeEnd', `
						<div class="col-6 mb-3 article" data-postId="${postArticleObj.id}">
							<a href="${postArticleObj.link}">
								<div class="blog-archive--article-bg" style="background-image:url(${postArticleObj.featuredMediaSourceUrl});"></div>
							</a>
							<div class="blog-date-gradient text-uppercase mt-2 mb-2">${postArticleObj.date}</div>
							<div class="blog-archive-sub-banner--title text-capitalize mb-3">
								<a href="${postArticleObj.link}">${postArticleObj.titleRendered}</a>
							</div>
						</div>
						`);
					}
				); //loadPostsContainer.textContent = data[0].link; loadPostsContainer.textContent = data[1].link;
			}//OR: (data) => console.log(data)
		).catch(
			(error) => {
				return console.error(error);
			}//OR: (error) => console.error(error)
		).finally(
			() => {
				return console.log('DONE');
			}//OR: () => console.log('DONE')
		); //console.log(postArticleData);
		/*__/Query to REST-API get all posts*/


		//let postArticlesCollections = document.querySelectorAll('.blog-archive--articles .row > .article'); console.log(postArticlesCollections);
		//let searchPostArticleInput = blogArchivePageWrapperDOM.querySelector('#searchPostArticle'); console.log(searchPostArticleInput);
		/*
		function filterPosts(collection, elementSelectorContent){
			return function(event) {
				let inputValue = event.currentTarget.value.toUpperCase(); //console.log(inputValue);
				for( i=0; i < collection.length; i++ ){
					//let summary = collection[i].querySelectorAll('.summary')[0]; //console.log(summary.innerHTML);
					let title = collection[i].querySelectorAll('.filter-card__title')[0]; //console.log(summary.innerHTML);

					//if( summary.innerHTML.toUpperCase().indexOf(inputValue) > -1 ){ collection[i].style.display = "block"; }
					if( title.innerHTML.toUpperCase().indexOf(inputValue) > -1 ){ collection[i].style.display = "block"; }
					else { collection[i].style.display = "none"; }
				}
			}
		}
		*/

	}
	/*________________________________________________________________/#Blog*/

});

new WOW().init(); //initial the WOW animation library
