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
		const breakpoint_check = document.querySelector('.header-banner'); breakpoint_check.scrollIntoView();

		const scrollPage = () => {
			let variableY = 1;
			variableY = variableY - (window.scrollY / 1000);
			//console.log(window.scrollY); //Value of scroll Y in px
			//console.log(variableY);
			//parallax_bg.setAttribute('style', `opacity:${variableY}`);
			parallax_bg.style.opacity = `${variableY}`;
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
		if( parseInt(breakpointCheck) > 767 || breakpointCheck === 'auto' ){
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
		let ssMmobileTextBlockDOM_height = ssMmobileTextBlockDOM.getBoundingClientRect().height; //console.log(ssMmobileTextBlockDOM_height);
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

	if(singleServicesPageWrapperDOM){
		const singleSContentSectionDOM = singleServicesPageWrapperDOM.querySelector('.single-s-content-section');
		const singleSContentSectionBG = singleSContentSectionDOM.querySelector('.single-s-content-section--bg');
		const heightContainer = singleSContentSectionDOM.querySelector('.container-lg').getBoundingClientRect().height; console.log(heightContainer);
		singleSContentSectionBG.style.minHeight = `${parseInt(heightContainer) + 100}px`;
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
		const newsCatsCollection = inNewsPageWrapperDOM.querySelectorAll('.in-news--filter-trigger-block .in-news--filter-trigger-item > a');
		const inNewsPageCollection = inNewsPageWrapperDOM.querySelectorAll('.in-news-page--collection .wrapper > .wrapper-item.flip.--basic');

		for( let item of inNewsPageCollection ){ item.addEventListener('mouseover', mouseoverInNewFlip); item.addEventListener('mouseout', mouseoutInNewFlip); }

		function mouseoverInNewFlip(){ //console.log('mouseoverInNewFlip');
			this.classList.add('flip--active');
		}
		function mouseoutInNewFlip(){
			this.classList.remove('flip--active');
		}

		newsCatsCollection.forEach(
			(item,index,collection) => {
				item.addEventListener('click', function(event){
					event.preventDefault();
					for( let tab of collection ){ tab.parentElement.classList.remove('--act') }
					event.currentTarget.parentElement.classList.add('--act');
					let catSlug = event.currentTarget.parentElement.getAttribute('data-slug'); //console.log(catSlug);
					showItemsOfCategory(catSlug);

				})
			}
		);
		function showItemsOfCategory(catSlug){
			inNewsPageCollection.forEach(
				(item,index,collection) => {
					if( !item.getAttribute('data-categories').includes(catSlug) ){
						item.classList.add('d-none');
					}else{
						item.classList.remove('d-none');
					}
				}
			);
		}
	}
	/*__________________________________________________________________/#In The News Page*/

	/*_________________________________________________________________#Blog*/
	const blogArchivePageWrapperDOM = document.querySelector('.blog-archive-page-wrapper.blog-list');
	if(blogArchivePageWrapperDOM){
		let postsWithPagination =  document.querySelector('#postArticlesWithPagination'),
			postsForSearch =  document.querySelector('#allPostArticlesForSearch'),
			asideNotice =  postsForSearch.querySelector('aside'),
			blogPagination =  document.querySelector('#blog_pagination'),
			sortBySelect = document.querySelector('#sortBySelect'),
			sortBySelectForm = document.querySelector('#sortBySelectForm'),
			choiceListDropdown = document.querySelector('.choices__list--dropdown'); console.log(choiceListDropdown);
			document.querySelector('#postsSearchForm').addEventListener("submit", function(event){ event.preventDefault();	}, true);

		/*Blog Articles(Posts) Searching*/
		let postsSearchArticlesCollections = document.querySelectorAll('.blog-archive--articles #allPostArticlesForSearch> .article');
		let searchPostArticleInput = blogArchivePageWrapperDOM.querySelector('#searchPostArticle');
		function filterPosts(collection, elementSelectorContent){
			return function(event) {
				let inputValue = event.currentTarget.value.toUpperCase();
				for( let i=0; i < collection.length; i++ ){
					let title = collection[i].querySelectorAll(elementSelectorContent)[0];
					if( title.innerHTML.toUpperCase().indexOf(inputValue) > -1 ){ collection[i].style.display = "block"; collection[i].classList.remove('--hd');}
					else { collection[i].style.display = "none"; collection[i].classList.add('--hd'); }
				}

				if( inputValue.length !== 0 ){
					postsWithPagination.classList.add('d-none');
					blogPagination.classList.add('d-none');
					postsForSearch.classList.remove('d-none');
					sortBySelect.setAttribute('disabled','true');
					sortBySelect.parentElement.parentElement.classList.add('is-disabled');
					//choiceListDropdown.classList.add('d-none');
				}else{
					postsWithPagination.classList.remove('d-none');
					blogPagination.classList.remove('d-none');
					postsForSearch.classList.add('d-none');
					sortBySelect.removeAttribute('disabled');
					sortBySelect.parentElement.parentElement.classList.remove('is-disabled');
					//choiceListDropdown.classList.remove('d-none');
				}

				let hdClassCnt = 0;
				for( let it of collection ){ if( it.classList.contains('--hd') ){ hdClassCnt++; } }
				if( hdClassCnt === collection.length ){ asideNotice.classList.remove('d-none');	}else{ asideNotice.classList.add('d-none'); }
			}
		}
		if(searchPostArticleInput){ searchPostArticleInput.addEventListener( "input", filterPosts(postsSearchArticlesCollections, '.--posts-title-link') );	}
		/*Blog Articles(Posts) Searching*/

		if(sortBySelectForm){
			sortBySelect.onchange = function(event){ sortBySelectForm.submit(); }
			const sortBySelectChoices = new Choices(sortBySelect);
		}
	}
	/*________________________________________________________________/#Blog*/

	/*_____________________________________________________/Leadership Team*/
	/*Company logos Slider*/
	let companylogosSliderDOM = document.getElementById('__companylogos_slider'); //console.log(companylogosSliderDOM);
	if(companylogosSliderDOM){
		var companylogosSlider = new Splide( companylogosSliderDOM,{ //All settings: https://splidejs.com/guides/options
			type: 'loop', /*'slide'|'loop'|'fade'*/
			pagination: false,
			autoplay: true,
			speed: 2000,
			omitEnd: true,
			perPage: 4,
			/*gap: '1.5rem',*/
			//keyboard: true,
			//interval: 2000,
			arrows: true,
			breakpoints: {
				1199: {
					perPage: 3,
					autoplay: true,
				},
				767: {
					perPage: 2,
					autoplay: true,
				},
				575: {
					perPage: 1,
					autoplay: false,
				}
			},
		} ); companylogosSlider.mount();
	}
	/*__/Company logos Slider*/
	/*______________________________________________________/#Leadership Team*/

	/*______________________________________________________#Cities Single*/
	const singleCitiesPageWrapperDOM = document.querySelector('.single-cities-page-wrapper');
	if(singleCitiesPageWrapperDOM){
		/*Testimonials for "City Single" Slider*/
		let testimonialsCitySliderDOM = document.getElementById('__testimonials_city_slider'); //console.log(testimonialsCitySliderDOM);
		if(testimonialsCitySliderDOM){
			var testimonialsCitySlider = new Splide( testimonialsCitySliderDOM,{ //All settings: https://splidejs.com/guides/options
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
			} ); testimonialsCitySlider.mount();
		}
		/*__/Testimonials for "City Single" Slider*/
	}
	/*______________________________________________________/#Cities Single*/


	/*_____________________________________________________#Request A Quote Page*/
	const requestQuotePageWrapperDOM = document.querySelector('.request-quote-page-wrapper');
	if(requestQuotePageWrapperDOM){
		const requestQuoteServicesIncludeSection = requestQuotePageWrapperDOM.querySelector('.request-quote--services-include');
		let liItemsCollection = requestQuoteServicesIncludeSection.querySelectorAll('aside ul > li'); //console.log(liItemsCollection[1].textContent);
		for(let item of liItemsCollection){ item.innerHTML = `<span>${item.textContent}</span>`; }
	}
	/*_____________________________________________________/#Request A Quote Page*/

	/*______________________________________________________/#Case Study Single*/
	const singleCasesPageWrapperDOM = document.querySelector('.single-cases-page-wrapper');
	if( singleCasesPageWrapperDOM ){
		//Init fancyBox
		/*
			jQuery().fancybox({
				selector : '.fb',
				hash     : false,
				loop     : false,
			});
		*/
		let scpSectionDOM = singleCasesPageWrapperDOM.querySelector('.s-c-p--2-section');
		let scpSectionDOM_container = scpSectionDOM.querySelector('.container-lg');
		if( parseInt(breakpointCheck) === 575 || parseInt(breakpointCheck) < 575 ){ scpSectionDOM_container.classList.toggle('--correct'); }
		if( scpSectionDOM_container.classList.contains('--correct') ){
			let scpSectionDOM_container_height = window.getComputedStyle(scpSectionDOM_container, null).getPropertyValue('height');
			scpSectionDOM_container.style.height = `${parseInt(scpSectionDOM_container_height) - 135}px`;
		}
	}
	/*______________________________________________________/#Case Study Single*/

});
new WOW().init(); //initial the WOW animation library