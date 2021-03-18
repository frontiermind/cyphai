$( function() {
  var $body = $('body');
  var $menu = $('#js-menu');
  var pagePath = location.pathname;


  var ua = navigator.userAgent.toLowerCase();

  // anchor link
  function anchorLink() {
    $(document).on('click', 'a[href^="#"]', function(e) {
      e.preventDefault();

      var $el     = $(this);
      var $target = $($el.attr('href'));
      var paddingTop = 97;
      if ( $(window).width() < 769 ) {
        paddingTop = $('.l-header-bottom').outerHeight();
      }

      if (!$target[0]) {
        return;
      }

      var offset = $target.offset().top;
      $('html, body').animate({scrollTop: offset - paddingTop});
    });
  }

  function navAnchor() {
    var headerHight = 500;
    $('.globalnav-child__list a[href^="#"]').click(function(){
      var href = $(this).attr("href");
      var target = $(href == "#" || href == "" ? 'html' : href);
      var position = target.offset().top-headerHight;
      $("html, body").animate({scrollTop:position}, 550, "swing");
      return false;
    });
  }

  //global navigation

  function navControl() {
    var $menuToggle = $('#js-menuToggle');
    var $bottomMenuToggle = $('#js-menuToggleClose');

    $('#js-menuToggle').on('click', function(e) {
      e.preventDefault();
      if ( $menuToggle.hasClass('close') ) {
        $menu.slideToggle(300);
      } else {
        $menu.slideToggle(300);
      }
      $menuToggle.toggleClass('close');
      $body.toggleClass('menu-open');
    });

    $('.sp-globalnav-list > a').on('click', function(e) {
      if ( $menuToggle.hasClass('close') ) {
        $menu.slideToggle(300);
      } else {
        $menu.slideToggle(300);
      }
      $menuToggle.toggleClass('open');
      $body.toggleClass('menu-open');
    });

    $('.js-chlid-btn').on('click',function(e) {
      e.preventDefault();
      if ($(this).hasClass('close') ) {
        $(this).next().slideToggle(300);
      } else {
        $(this).next().slideToggle(300);
      }
      $(this).toggleClass('close');
    });

    $('#js-menu, #js-menuToggle, #js-menuToggleClose').on( 'click', function(e) {
      e.stopPropagation();
    });




  }


  function onScroll() {
    $('.l-wrapper').waypoint(function(direction) {
      if (direction === 'down') {
        $('#js-pagetop').fadeIn();
      }
      if (direction === 'up') {
        $('#js-pagetop').fadeOut();
      }
    }, {
      offset: -200
    });
  }

  function openSubMenu() {

      if ( $(window).width() < 769 ) {
        $('#js-menu').css('display','none');
        $('.sp-globanav-child').css('display','none');
        if($('#js-menuToggle').hasClass('close')) {
          $('#js-menuToggle').removeClass('close');
          $body.removeClass('menu-open');
        }
        if($('.js-chlid-btn').hasClass('close')) {
          $('.js-chlid-btn').removeClass('close');
        }
      } else {
        // $('#js-menu').css('display','block');
      }
  }

  // fire when DOM is ready
  $(function() {
    anchorLink();
    navAnchor();
    navControl();
    slideAnime();
    btnHover();
    onScroll();
    if(pagePath == '/') {
      slider();
    }
    accordion();
    //fluid();
    // initSlider();
  });

  // fire when page is fully loaded
  $(window).on('load', function() {
  });

  $(window).on('resize', function() {
    openSubMenu();
  }).trigger('resize');

  $(window).on('scroll',function() {
    var $header = $('.js-header-sticky');
    if ($(this).scrollTop() > 100){
      $header.addClass('change');

      if($(this).scrollTop() > 120) {
        $header.addClass("sticky");
      }

    }
    else{
      $header.removeClass('sticky change');
    }
  });




  $('.js-gnav-child').hover(
    function () {
      $(this).children('.b-gnav-list-child').addClass('block-menu');
      // $(this).children('.b-gnav-list-child').fadeIn(400);
    },
    function () {
      // $(this).children('.b-gnav-list-child').fadeOut(400);
      $(this).children('.b-gnav-list-child').removeClass('block-menu');
    }
  );



  // toppage scroll animation with waypoint
  function slideAnime() {
    $('.js-slide_anime').css({'opacity': '0','margin-left': '-20px','margin-right': '-20px'}).waypoint(function(direction) {
      $(this.element).animate({
        'opacity': '1',
        'marginLeft': '0',
        'marginRight': '0'
      },500);
    }, {
      offset: '70%'
    })
  }

  //btn hover animation
  function btnHover() {
    $('.js-hover-btn').append('<span class="js-hover-btn__left"></span><span class="js-hover-btn__top"></span><span class="js-hover-btn__right"></span><span class="js-hover-btn__bottom"></span>');
  }


  //top page slider

  function slider() {
    var $slider = $('#slider');
    var $sliderList = $slider.find('li');

    var settings = function() {
      var mobile = {
        controls: false,
        auto: true,
        autoStart: true,
        touchEnabled: false,
        pagerCustom: '.slider-nav',
        onSlideBefore: function($slideElement, oldIndex, newIndex) {
          currentSlide();
        },
      };
      var tablet = {
        controls: false, // true
        auto: true,
        pause:  5000,
        speed: 500,
        autoStart: true,
        touchEnabled: false,
        pagerCustom: '.slider-nav',
        onSlideBefore: function($slideElement, oldIndex, newIndex) {
          currentSlide();
        },
      };
      return ($(window).width() < 690) ? mobile : tablet;
    };
    var slider;
    function switchSlider() {
      slider.reloadSlider(settings());
    }

    // currentのスライドを調べて最初と最後だったらslide-btn-opacityをつける
    function currentSlide() {
      var current = slider.getCurrentSlide();
      var pageLength = slider.getSlideCount();
      console.log(slider.getCurrentSlide());

      var pageLength = pageLength -1;
      if( current == 0) {
        // $('.slide-prev-btn').addClass('slide-btn-opacity');
        // $('.slide-next-btn').removeClass('slide-btn-opacity');
      } else if ( pageLength == current ) {
        // $('.slide-next-btn').addClass('slide-btn-opacity');
        // $('.slide-prev-btn').removeClass('slide-btn-opacity');
      } else {
        // $('.slide-next-btn').removeClass('slide-btn-opacity');
        // $('.slide-prev-btn').removeClass('slide-btn-opacity');
      }
    }

    slider = $('#slider').bxSlider(settings());
    $(window).resize(function(){
      //currentSlide();
      switchSlider();
    });

    //currentSlide();


    // < > ボタン
    $(document).on('click','.slide-prev-btn', function(event) {
      if(!$(this).hasClass('slide-btn-opacity')) {
        event.preventDefault();
        slider.goToPrevSlide();
        console.log('prev-ok!');
      }
    });
    $(document).on('click','.slide-next-btn', function(event) {
      if(!$(this).hasClass('slide-btn-opacity')) {
        event.preventDefault();
        slider.goToNextSlide();
      }
    });


  }


  // Accordion
  function accordion() {
    var accordionContent = $('.js-accordion--content');
    accordionContent.hide();
    $('.js-accordion--btn').click(function(e){
  		e.preventDefault();;
      //console.log(this);
  	  $(this).parent().prev('.js-accordion--content').slideToggle(function () {
  	    if ($(this).is(':visible')) {
  	      $(this).next().children('.js-accordion--btn').text('詳細を閉じる');
  	    } else {
  	      $(this).next().children('.js-accordion--btn').text('詳しく見る');
  	    }
  		});
  	});
  }

  // function fluid() {
  //    $('.js-modal').fluidbox();
  // }



});
