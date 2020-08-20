'use strict'

let header_nav = document.querySelector('.header-nav');
let header_nav_item = header_nav.querySelector('.header-nav-item');
var html = document.documentElement, body = document.body;
let header_search = document.querySelector('header .header-top-search');

header_search.addEventListener('click', (e) => {
    if (header_search.classList.contains('active') && e.target.classList.contains('search__icon__close')) {
        header_search.classList.remove('active');
    } else {
        header_search.classList.add('active');
        header_search.querySelector('.search__input').focus();
    }
});

header_nav.addEventListener('click', (e) => {
	if (html.clientWidth < 1024 || body.clientWidth < 1024) {
		let dmi = e.target.closest('.header-dropdown-menu-item__link');
		let hni = e.target.closest('.header-nav-item__link');
		if (dmi && dmi.classList.contains('header-dropdown-menu-item__link')){
			dmi.classList.toggle('open');
		} else if (hni && hni.classList.contains('header-nav-item__link')) {
			hni.classList.toggle('open');
		}
	}
});
