//About page text slider -- Dual Slider
  $("#text-slider__container").slick({
    speed: 1000,
    autoplay: false,
    autoplaySpeed: 2000,
    fade:true,
    slidesToShow: 1,
    slidesToScroll: 1,
    infinite: true,
    draggable:false,
    dots:true,
    arrows:true,
    prevArrow:'<div class="slider-button prev"><div class="button-inner"><span class="slide-arrow prev"></span></div></div>',
    nextArrow:'<div class="slider-button next"><div class="button-inner"><span class="slide-arrow next"></span></div></div>',
    asNavFor:$('#image-slider__container'),

    responsive: [{

      breakpoint: 800,
      settings: {
       dots:false
      }

    }]

  });

  $("#image-slider__container").slick({
    speed: 1000,
    autoplay: false,
    fade:true,
    slidesToShow: 1,
    slidesToScroll: 1,
    infinite: true,
    draggable:false,
    arrows:false,
    dots:false
  });


//Academics page -- tabs sliders -------------------->

  //Function on change of the tabs and accordian
  $(".grade-info__tabs").on("change.zf.tabs down.zf.accordion", function () {
    $(".academic-slider__slide-inner-container").slick("setPosition");
  });

   //High school tab slider
  $("#tab__hs-slider").slick({
    speed: 1000,
    autoplay: false,
    fade:false,
    slidesToShow: 1,
    slidesToScroll: 1,
    infinite: true,
    draggable:false,
    arrows:true,
    cssEase:'ease-in-out',
    appendArrows:".tab__hs-arrow-container",
    prevArrow:'<div class="slider-button prev"><div class="button-inner"><span class="slide-arrow prev"></span></div></div>',
    nextArrow:'<div class="slider-button next"><div class="button-inner"><span class="slide-arrow next"></span></div></div>',
  });

   //Middle school tab slider
  $("#tab__ms-slider").slick({
    speed: 1000,
    autoplay: false,
    fade:false,
    slidesToShow: 1,
    slidesToScroll: 1,
    infinite: true,
    draggable:false,
    arrows:true,
    cssEase:'ease-in-out',
    appendArrows:".tab__ms-arrow-container",
    prevArrow:'<div class="slider-button prev"><div class="button-inner"><span class="slide-arrow prev"></span></div></div>',
    nextArrow:'<div class="slider-button next"><div class="button-inner"><span class="slide-arrow next"></span></div></div>',
  });

  //Elementary tab slider
  $("#tab__elm-slider").slick({
    speed: 1000,
    autoplay: false,
    fade:false,
    slidesToShow: 1,
    slidesToScroll: 1,
    infinite: true,
    draggable:false,
    arrows:true,
    cssEase:'ease-in-out',
    appendArrows:".tab__elm-arrow-container",
    prevArrow:'<div class="slider-button prev"><div class="button-inner"><span class="slide-arrow prev"></span></div></div>',
    nextArrow:'<div class="slider-button next"><div class="button-inner"><span class="slide-arrow next"></span></div></div>',
  });

  //Preschool Tab slider
  $("#tab__preschool-slider").slick({
    speed: 1000,
    autoplay: false,
    fade:false,
    slidesToShow: 1,
    slidesToScroll: 1,
    infinite: true,
    draggable:false,
    arrows:true,
    cssEase:'ease-in-out',
    appendArrows:".tab__preschool-arrow-container",
    prevArrow:'<div class="slider-button prev"><div class="button-inner"><span class="slide-arrow prev"></span></div></div>',
    nextArrow:'<div class="slider-button next"><div class="button-inner"><span class="slide-arrow next"></span></div></div>',
  });



  //Student Life Page -- Student Life Slider ------>
  $(".student-life__slide-inner-container").slick({
    speed: 1000,
    autoplay: false,
    fade:false,
    slidesToShow: 1,
    slidesToScroll: 1,
    infinite: true,
    draggable:false,
    arrows:true,
    cssEase:'ease-in-out',
    appendArrows:".student-life__arrow-container",
    prevArrow:'<div class="slider-button prev"><div class="button-inner"><span class="slide-arrow prev"></span></div></div>',
    nextArrow:'<div class="slider-button next"><div class="button-inner"><span class="slide-arrow next"></span></div></div>',
    asNavFor: $(".student-life__slide-copy"),
  });

//Slider for the copy part of the student life slider

  $(".student-life__slide-copy").slick({
    speed: 1000,
    autoplay: false,
    fade:true,
    slidesToShow: 1,
    slidesToScroll: 1,
    infinite: true,
    draggable:false,
    arrows:false,
    dots:false,
    adaptiveHeight: true
  });

  //Staff member rotation
  $("#staff_slider").slick({
    speed: 1000,
    autoplay: false,
    fade:false,
    slidesToShow: 3,
    slidesToScroll: 1,
    infinite: true,
    draggable:false,
    arrows:true,
    prevArrow:'<div class="slider-button prev"><div class="button-inner"><span class="slide-arrow prev"></span></div></div>',
    nextArrow:'<div class="slider-button next"><div class="button-inner"><span class="slide-arrow next"></span></div></div>',
    dots:false,
    responsive:[{
      breakpoint:800,
      settings:{
        slidesToShow:2,
      }
      }, {
      breakpoint:600,
      settings:{
        slidesToShow:1,
      }
    }]
  });