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

	const parallax_bg = document.querySelector('.parallax-bg'); console.log(parallax_bg);
	const myFunction = () => {
		let variableY = 1;
		variableY = variableY - (window.scrollY / 1000);
		//console.log(window.scrollY); //Value of scroll Y in px
		//console.log(variableY);
		parallax_bg.setAttribute('style', `opacity:${variableY}`);
	};
	window.addEventListener("scroll", myFunction);

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
				headerBanner.classList.toggle('d-none');
				parallaxBg.classList.toggle('d-none');
				//event.currentTarget.classList.toggle('pe-0');
				//navbarCollapse.style.backgroundPositionY = '215px';
				event.currentTarget.nextElementSibling.classList.add('vh-100');
			}else{ //CLOSE
				navbarBrand.classList.remove('invisible');
				headerBanner.classList.toggle('d-none');
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
				headerBanner.classList.add('header-banner--white');
			}
			function navLinkMouseout(){
				this.querySelector('.dropdown-menu').classList.remove('show');
				navbar.classList.remove('navbar-white--white');
				headerBanner.classList.remove('header-banner--white');
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
	/*__/#NAVBAR & NAVBAR*/


});

new WOW().init(); //initial the WOW animation library
