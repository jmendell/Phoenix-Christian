import $ from 'jquery';

//'Support' page mobile arrow flip and show/hide content
$('.donation-list__inner-container').on('click', function(){
	var el = $(this);
	el.find('.donation-mobile__down-arrow').toggleClass('flipped');
	el.find('.hidden__list_js').slideToggle();
});


//Footer animations
$('.footer-container').on('click', function(){
	var el = $(this);
	el.find('.footer__arrow').toggleClass('flipped');
	el.find('.footer-links__container').slideToggle();
});


//Home page 'Grade Card' hover effects ------>
$('.grade-info-card').on({
		mouseenter: function(){
		$(this).find('.hidden-content').slideDown();
	},
		mouseleave: function(){
		$(this).find('.hidden-content').slideUp();
	}
});

//Home page 'Grade Card' hover effects end ------>

//Form Label Animations ---------------->

jQuery(document).on( 'nfFormReady', function( e, layoutView ) {

	$('.ninja-forms-field').focus(function(){
	  $(this).parents('.field-wrap').addClass('focused');
	});

	//Checks if any of the fields are already filled. (Edit Alumni Profile page and Select fields mostly)
	$('.ninja-forms-field').each(function( i, val ) {
		var inputVal = $(val).val();
		if (inputVal.length > 0) {
			$(val).parents('.field-wrap').addClass('focused');
		}
	});

	//when you click away from form field, it will check if it is filled and either moves label down or keeps above field
	$('.ninja-forms-field').blur(function(){
	  var inputValue = $(this).val();
	  if ( inputValue == "" ) {
	    $(this).removeClass('filled');
	    $(this).parents('.field-wrap').removeClass('focused');
	  } else {
	    $(this).addClass('filled');
	  }
	});
});


//End form label animations ------------>

//FAQ show/hide content and flip arrow
	$('.faq__question-container').on('click', function(){
		var el = $(this);
		el.find('.faq__arrow').toggleClass('flipped');
		el.parent('.faq__single-container').find('.faq__answer-container').slideToggle();
	});

