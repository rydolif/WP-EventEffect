'use strict'

document.addEventListener("DOMContentLoaded", function() {

	//----------------------SLIDER-hero----------------------
		var mySwiper = new Swiper('.partners__slider', {
			slidesPerView: 2,
			slidesPerColumn: 3,
			pagination: {
				el: '.partners__pagination',
				clickable: 'true',
			},
			breakpoints: {
				// when window width is >= 320px
				320: {
					slidesPerView: 2,
					slidesPerColumn: 3,
				},
				// when window width is >= 480px
				576: {
					slidesPerView: 3,
					slidesPerColumn: 3,
				},
				// when window width is >= 767px
				767: {
					slidesPerView: 4,
					slidesPerColumn: 3,
				},
				// when window width is >= 992px
				992: {
					slidesPerView: 5,
					slidesPerColumn: 3,
				},
				// when window width is >= 640px
				1200: {
					slidesPerView: 6,
					slidesPerColumn: 3,
				}
			}
		});

	//----------------------SLIDER-hero----------------------
		var mySwiper = new Swiper('.slider-services', {
			slidesPerView: 1,
			spaceBetween: 30,
			loop: true,
      navigation: {
        nextEl: '.slider-services__next',
        prevEl: '.slider-services__prev',
      },
			breakpoints: {
				// when window width is >= 480px
				576: {
					slidesPerView: 2,
					spaceBetween: 30,
				},
				// when window width is >= 640px
				1200: {
					slidesPerView: 3,
					spaceBetween: 30,
				}
			}
		});

	
	//----------------------MODAL-----------------------
		const modals = (triggerSelector, modalSelector, closeSelector) => {
			const trigger = document.querySelectorAll(triggerSelector),
						modal = document.querySelector(modalSelector),
						close = document.querySelector(closeSelector);
	
			trigger.forEach(item => {
				item.addEventListener('click', (e) => {
					if (e.target) {
						e.preventDefault();
					}
					modal.style.display = 'flex';
					document.body.classList.add('modal--open')
				});
			})
	
			close.addEventListener('click', () => {
				modal.style.display = 'none';
				document.body.classList.remove('modal--open');
			});
	
			modal.addEventListener('click', (e) => {
				if (e.target === modal) {
					modal.style.display = 'none';
					document.body.classList.remove('modal--open');
				}
			});
	
		};
		modals('.order__open', '.modal--order', '.modal--order .modal__close');

	//----------------------SCROLL-----------------------
		const scrollTo = (scrollTo) => {
			let list = document.querySelector(scrollTo);
			
			if (list) {
				list = '.' + list.classList[0]  + ' a[href^="#"';
				document.querySelectorAll(list).forEach(link => {
					link.addEventListener('click', function(e) {
						e.preventDefault();

						const href = this.getAttribute('href').substring(1);
						const scrollTarget = document.getElementById(href);
						const topOffset = 70;
						const elementPosition = scrollTarget.getBoundingClientRect().top;
						const offsetPosition = elementPosition - topOffset;
						const button = document.querySelector('.hamburger'),
									nav = document.querySelector('.header__nav'),
									header = document.querySelector('.header');

						window.scrollBy({
								top: offsetPosition,
								behavior: 'smooth'
						});

						button.classList.remove('hamburger--active');
						nav.classList.remove('header__nav--active');
						header.classList.remove('header--menu');
					});
				});
			}

		};
		scrollTo('.hero__arrow');
		scrollTo('.wrapp-button');
	
	//----------------------FIXED-HEADER-----------------------
		const headerFixed = (headerFixed, headerActive) => {
			const header =  document.querySelector(headerFixed),
						active = headerActive.replace(/\./, '');
	
			window.addEventListener('scroll', function() {
				const top = pageYOffset;
				
				if (top >= 90) {
					header.classList.add(active);
				} else {
					header.classList.remove(active);
				}
	
			});
	
		};
		headerFixed('.header', '.header--active');
	
	//----------------------HAMBURGER-----------------------
		const hamburger = (hamburgerButton, hamburgerNav, hamburgerHeader) => {
			const button = document.querySelector(hamburgerButton),
						nav = document.querySelector(hamburgerNav),
						header = document.querySelector(hamburgerHeader);
	
			button.addEventListener('click', (e) => {
				button.classList.toggle('hamburger--active');
				nav.classList.toggle('header__nav--active');
				header.classList.toggle('header--menu');
			});
	
		};
		hamburger('.hamburger', '.header__nav', '.header');

	//------------------------------acardeon---------------------------
		$(".block__content").slideUp("slow");
		$(".active .block__content").slideDown("slow");

		$(".block__header").on("click", function(){
			if ($(this).parent().hasClass('active')) {
				$(this).parent().removeClass('active');
				$(".block__content").slideUp("slow");
			}
			else {
				$(".active .block__content").slideUp("slow");
				$(".active").removeClass('active');
				$(this).parent().addClass('active');
				$(".active .block__content").slideDown("slow");
			}
		});
		
		//----------------------TABS-JS----------------------
		const tabs = (headerSelector, tabSelector, contentSelector, activeClass) => {
			const list = document.querySelector(headerSelector);

			if (list) {
				const header = document.querySelector(headerSelector),
							tab = document.querySelectorAll(tabSelector),
							content = document.querySelectorAll(contentSelector);

				function hideTabContent() {
					content.forEach(item => {
						item.style.display = "none";
					});

					tab.forEach(item => {
						item.classList.remove(activeClass);
					});
				}

				function showTabContent(i = 0) {
					content[i].style.display = "block";
					tab[i].classList.add(activeClass);
				}

				hideTabContent();
				showTabContent();

				header.addEventListener('click', (e) => {
					const target = e.target;
					if (target && 
						(target.classList.contains(tabSelector.replace(/\./, '')) || 
						target.parentNode.classList.contains(tabSelector.replace(/\./, '')))) {
						tab.forEach((item, i) => {
							if (target == item || target.parentNode == item) {
								hideTabContent();
								showTabContent(i);
							}
						});
					}
				});
			}

		};
		tabs('.tabs', '.tabs__item', '.tabs__wrap', 'active');


		const sity = document.querySelector('.sity');
		if (sity) {
			var typed = new Typed(sity, {
				strings: ["в Москве", "в Санкт Петербурге", "в Ярославле",],
				typeSpeed: 100,
				backSpeed: 50,
				shuffle: true,
				smartBackspace: false,
				loop: true
			});
		}

		const tag_s = document.querySelector('.hero--services h1 span');
		if (tag_s) {
			var typed2 = new Typed(tag_s, {
				strings: ["на Корпоратив", "на Выставку", "на Промо мероприятие", "на Event", "на Свадьбу", "на Выпускной", "на День рождения"],
				typeSpeed: 100,
				backSpeed: 50,
				shuffle: true,
				smartBackspace: false,
				loop: true
			});
		}




});
	