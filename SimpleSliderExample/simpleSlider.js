 (function ($){
 $.fn.simpleSlider = function(options){
  'use strict';
  //Settings
  var settings = $.extend({
/*__________________________________________________________________________________________________*/
/*                                                                                                  */
/*                                                                                                  */
/*                                   All your settings down below                                   */
/*                                                                                                  */
/*__________________________________________________________________________________________________*/

      animationSpeed: 200, //Animationspeed
      animationPause: 5000, //Time image is shown

      nav: 'dot', //Navigation options, 'dot', 'img' or null(for no one), notice the '' on dot and img but not null;
      arrowNav: true, //Next previous navigation (Good for mobile use)
      hoverHandler: true //Pause if user hovers slide
  }, options);

/*__________________________________________________________________________________________________*/
/*                                                                                                  */
/*                          You don't need to do anything below this box                            */
/*                                     But you are welcome to :)                                    */
/*__________________________________________________________________________________________________*/

  //Quicker selector options
  var $slider = $('#slider'),
      $slideContainer = $slider.find('.slides'),
      $slide = $slideContainer.find('.slide');

  //General variables
  var  currentSlide = 0,
       interval,
       resizeId,
       slideLength = $slide.length,
       containerWidth = $slider.width(),
       sliderLengthWithAppend = slideLength + 1,
       movementLeft,
       upcomingSlide;

  //-------------------------------//
  //      Navigation options       //
  //-------------------------------//
  //Dotnavigation
  if (settings.nav === 'dot') {

    $slider.append('<ul id="dotsNavigation"></ul>');

    $slide.each(function(index) {
      $('#dotsNavigation').append('<li class="dotNavigation" id="' + index + '" data-id="' + index + '"></li>');
    });
  } 
  //Image Navigation
  if (settings.nav === 'img') {

    $slider.append('<ul id="imagesNavigation"></ul>');

    $slide.each(function(index) {
      $('#imagesNavigation').append('<li id="nav' + index + '" class="imageNavigation" data-id="' + index + '"></li>');
    });

    $slide.each(function(i) {
      var image = $(this).children('.slideImage').attr('src');
      $('#nav' + i).css('background-image', 'url(' + image + ')');
    });
  }
  //Arrow navigation
  if (settings.arrowNav === true) {
    $slider.append('<div class="previous hideArrow"><p>&#x27E8;</p></div>');
    $slider.append('<div class="next hideArrow"><p>&#x27E9;</p></div>');
    $('.previous').on('click', function() {

      if (currentSlide === 0) {
        $slideContainer.css('margin-left', -(slideLength - 1) * containerWidth);
        currentSlide = slideLength - 1;
      } else {
        currentSlide = currentSlide - 1;
        $slideContainer.css('margin-left', -containerWidth * currentSlide);

      }
      $('.dotNavigation').removeClass('active');
      $('#' + currentSlide).addClass('active');
    });

    $('.next').on('click', function() {

      var nextSlide = (currentSlide * containerWidth) + containerWidth;
      currentSlide++;

      if (currentSlide === slideLength) {
        currentSlide = 0;
        $slideContainer.css('margin-left', 0);
      }

      $('.dotNavigation').removeClass('active');
      $('#' + currentSlide).addClass('active');
      $slideContainer.css('margin-left', -nextSlide);
    });
  }


  //-------------------------------//
  //      Navigation handler       //
  //-------------------------------//

  $('.dotNavigation').on('click', function() {
    menuHandler($(this));
    $('.dotNavigation').removeClass('active');
    $(this).addClass('active');
  });

  $('.imageNavigation').on('click', function() {
    menuHandler($(this));
  });


  //-------------------------------//
  //      HoverState handler       //
  //-------------------------------//

  if (settings.hoverHandler === true) {  
    $slider.on('mouseenter', function() {
         $('.previous').removeClass('hideArrow');
         $('.next').removeClass('hideArrow');
         pauseSlider();
      });

      $slider.on('mouseleave', function() {
         $('.previous').addClass('hideArrow');
         $('.next').addClass('hideArrow');
         slider();
      });
  }

  //------------------------------//
  // Window resize restart slider //
  //------------------------------//

  $(window).resize(function() {
    clearTimeout(resizeId);
    resizeId = setTimeout(slider, 1);
  });

  //------------------------------//
  //    visibilitychange check    //
  //------------------------------//

  document.addEventListener("visibilitychange", function() {
    if (document.visibilityState === 'hidden') {

      pauseSlider();
    } else if (document.visibilityState === 'visible') {
      slider();
    }
  });

  //------------------------------//
  //          Functions           //
  //------------------------------//

  //Function for the slider, deciding width length adding values to startSlider

  function slider() {
    pauseSlider();

    containerWidth = $slider.width();
    $slideContainer.css('width', containerWidth * (slideLength + 1));
    $slide.css('width', containerWidth);

    movementLeft = sliderLengthWithAppend - (containerWidth * currentSlide + sliderLengthWithAppend);

    $slideContainer.css('margin-left', movementLeft);
    $('.clonedAppend').remove();
    $slideContainer.append($slide.first().clone().addClass('clonedAppend'));
    $('#' + currentSlide).addClass('active');

    startSlider($slideContainer, containerWidth);
  }

  //Function for the menu

  function menuHandler(_this) {
    pauseSlider();

    var handler = $(_this).attr('data-id'),
      handlerMovement = handler * containerWidth;

    $slideContainer.css('margin-left', -handlerMovement);

    currentSlide = handler;
    startSlider($slideContainer, containerWidth);
  }

  //Function for the slider

  function startSlider(sContainer, cWidth) {
    interval = setInterval(function() {
      sContainer.animate({
        'margin-left': '-=' + cWidth
      }, settings.animationSpeed, function() {
        currentSlide++;

        //If window size changes during animation fix positioning
        movementLeft = sliderLengthWithAppend - (containerWidth * currentSlide + sliderLengthWithAppend);
        $slideContainer.css('margin-left', movementLeft);

        //When slide is done, restart
        if (currentSlide === slideLength) {
          currentSlide = 0;
          sContainer.css('margin-left', 0);
        }

        $('.dotNavigation').removeClass('active');
        $('#' + currentSlide).addClass('active');
      });
    }, settings.animationPause);
  }

  //Function start slider

  function pauseSlider() {
    clearInterval(interval);
  }

  //------------------------------//
  //     Start the slideshow      //
  //------------------------------//
    slider();
}
}(jQuery));