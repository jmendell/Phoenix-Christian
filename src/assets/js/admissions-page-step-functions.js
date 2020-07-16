import $ from 'jquery';

//Admissions page 'step' progress bar and text color change, also swapping img to the left on click

$('.single-step__container').on('click', function(){
	var step_img_src = $(this).attr('data-img-src');
	$('.single-step__container').removeClass('step-active');
	$(this).addClass('step-active');
	$('.step__image').attr('src', step_img_src);
});

$('.steps__mobile-button').on('click', function(e){
	e.preventDefault();
	$('.steps__mobile-button').removeClass('clicked');
	$(this).addClass('clicked');
});

var step1 = $('.step-btn-1');
var step2 = $('.step-btn-2');
var step3 = $('.step-btn-3');

step1.on('click', function(){
	var step_img_src = $(this).attr('data-img-src');
	$('.single-step__container').removeClass('step-active');
	$('.step-1').addClass('step-active');
	$('.step__image').attr('src', step_img_src);
});

step2.on('click', function(){
	var step_img_src = $(this).attr('data-img-src');
	$('.single-step__container').removeClass('step-active');
	$('.step-2').addClass('step-active');
	$('.step__image').attr('src', step_img_src);
});

step3.on('click', function(){
	var step_img_src = $(this).attr('data-img-src');
	$('.single-step__container').removeClass('step-active');
	$('.step-3').addClass('step-active');
	$('.step__image').attr('src', step_img_src);
});