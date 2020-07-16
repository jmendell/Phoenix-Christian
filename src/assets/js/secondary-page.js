//Show/hide secondary pages 'side menu' nav links - mobile
$('.sub-page__menu-title').on('click', function(){
	$('.page-sub-nav').slideToggle();
});

//Secondary page 'side menu', menu item, sub-menu toggle - desktop

var hasChild = $('.side-menu__item').find('.side-menu__sub-menu').length;
var subMenuParent = $('.side-menu__sub-menu').parent();

subMenuParent.addClass('has-sub-menu');
// $('.has-sub-menu').find('.menu__link').append("<div class='view-arrow'></div>");

var hasSubMenuClass = $('.side-menu__item.has-sub-menu');

if ( hasSubMenuClass ) {
  $('.side-menu__item').on('click', function(e, el){
    var el = $(this);
    
    // e.preventDefault();
    el.find('.side-menu__sub-menu').slideToggle();
    el.find('.menu__link').find('.view-arrow').toggleClass('flipped');
  });
}

//Hide alumni directory registration copy after form submission
jQuery( document ).on( 'nfFormSubmitResponse', function() {
	$('.alumni-title-copy__register').css('display', 'none');
});

//select2 dropdown & reload of results -- Alumni Directory
  jQuery(document).ready(function(){
    $('.grad-year-select_js').select2({
      placeholder: 'Select a Graduation Year'
    });
  });

  $('.grad-year-select_js').on('change', function(){
    $('.submit_grad_year').trigger('click');
  });

//End select2 ----->