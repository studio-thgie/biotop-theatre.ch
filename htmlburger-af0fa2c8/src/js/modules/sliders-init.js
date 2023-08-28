/**
	Sldiers Init
**/

import Swiper from 'swiper/bundle';

if( $('.js-slider-hero').length ) {
	const swiperHero = new Swiper('.js-slider-hero .swiper', {
		speed: 2000,
		loop: true,
		slidesPerView: 'auto',
		parallax: true,
		autoplay: {
			delay: 4000,
			disableOnInteraction: false,
		},
	});
}

if( $('.js-slider-gallery').length ) {
	const swiperGallery = new Swiper('.js-slider-gallery .swiper', {
		slidesPerView: 'auto',
		spaceBetween: 15,
		pagination: {
			el: '.js-slider-gallery .slider__paging',
			type: 'custom',
			renderCustom: function (swiper, current, total) {
				return current + '/' + total;
			}
		},
		navigation: {
			nextEl: '.js-slider-gallery .slider__arrow--next',
			prevEl: '.js-slider-gallery .slider__arrow--prev',
		},
	});
}
