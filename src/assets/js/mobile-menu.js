import $ from 'jquery';

//mobile menu animations
function mobileMenuToggle(){
	$('.mobile__menu').slideToggle('2000', 'linear');
}

$('#mobile_menu_icon').on('click', function(){
	mobileMenuToggle();
	$(this).toggleClass('menu-open');
	$('.hero-menu-container').addClass('hide-mobile');
	$('.pc_global-container').toggleClass('no-scroll');
	$('body').css('overflow', 'hidden');
});

$('#mobile-menu__show-more').on('click', function(e){
	e.preventDefault();
	$('.mobile-menu__hidden').slideToggle();
	$(this).toggleClass('flipped');
});

$('#close_icon').on('click', function(){
	mobileMenuToggle();
	$('.hero-menu-container').removeClass('hide-mobile');
	$('.pc_global-container').removeClass('no-scroll');
	$('body').css('overflow', 'initial');
});


$('.banner-escape').on('click', function(){
	$('.covid-banner').addClass('hide-banner');
	Cookies.set('covid-banner-cookie', 'covid-banner-cookie', { expires: 1 });
});