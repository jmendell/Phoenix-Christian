import $ from 'jquery';
import whatInput from 'what-input';

window.$ = $;

// import Foundation from 'foundation-sites';
// If you want to pick and choose which modules to include, comment out the above and uncomment
// the line below
import './lib/foundation-explicit-pieces';

$(document).foundation();


// Custom JS ------------------------------------>


//Add placeholder to Constant Contact email input
  $('#email___ecd412e904309dcce66177488240b016').attr('placeholder', 'Enter Your Email');

  
//Determine width of the window on load and add the class to show/hide content on mobile.
  $(document).ready(function(){
    var windowWidth = $(window).width();
    if (windowWidth < 601) {
      $('.donation__list').addClass('hidden__list_js');
    }else if (windowWidth >= 601) {
      $('.donation__list').removeClass('hidden__list_js');
    }
  });

//Determine width of the window on screen resize and add the class to show/hide content on mobile.
//Also adds 'flex' when screen size is over 601px. This fixes the hidden content when toggled on mobile and resized back to larger size.
  $(window).on('resize', function(){
    var windowWidth = $(window).width();
    if (windowWidth < 601) {
      $('.donation__list').addClass('hidden__list_js');
    }else if (windowWidth >= 601) {
      $('.donation__list').removeClass('hidden__list_js');
      $('.donation__list').css('display', 'flex');
    }
  });
  

require('./admissions-page-step-functions.js');
require('./sliders.js');
require('./mobile-menu.js');
require('./animations.js');
require('./modals.js');
require('./secondary-page.js');
require('./smooth-scroll.js');