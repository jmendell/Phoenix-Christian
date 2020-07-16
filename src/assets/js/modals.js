//'Take the next step' video modal

    function showModal(){
      $('.flyover-modal').fadeIn();
    }

    function hideModal(){
      $('.flyover-modal').fadeOut();
    }

    $('#play-btn__click-full, .flyover-click').on('click', function(e){
      e.preventDefault();

      var idPlayer = new Vimeo.Player('flyover__video');

      showModal();
      idPlayer.play();

    });

    $('.escape, .modal-overlay').on('click', function(){
      hideModal();
      var idPlayer = new Vimeo.Player('flyover__video');
      idPlayer.pause();
    });

    $(document).keyup(function(e) {
      if (e.keyCode === 27){
        hideModal();
        var idPlayer = new Vimeo.Player('flyover__video');
        idPlayer.pause();
      }
    });

//End ----->

// Academics slider modal --------->

    var el = $(this);
    var slideImg = $('.slide-image');

    function showAcademicsModal(){
      $('.academics-slider__modal').fadeIn();

    }

    function hideAcademicsModal(){
      $('.academics-slider__modal').fadeOut();
    }


    slideImg.on('click', function(){
      // e.preventDefault();
      
      var el = $(this);
      var slideImg = $('.slide-image');
      var slideImgSrc = el.data('vid-src');
      var modalSrc = $('.academics-slider__modal').find('.academic-slide-modal');

      // If has video source added, show modal on click
      if (slideImgSrc) {
        modalSrc.attr('src', slideImgSrc);
        showAcademicsModal();
      }


    });

    $('.escape, .modal-overlay').on('click', function(){
      hideAcademicsModal();

      var idPlayerPre = new Vimeo.Player('academics-modal__video');
      idPlayerPre.pause();
    });

    $(document).keyup(function(e) {
      if (e.keyCode === 27){
        hideAcademicsModal();

        var idPlayerPre = new Vimeo.Player('academics-modal__video');
        idPlayerPre.pause();
      }
    });

// End Academics slider modal --------->