AOS.init({
  duration: 600
})
  

;(function(jQuery) {

	'use strict';

  jQuery(window).stellar({
    responsive: false,
    parallaxBackgrounds: true,
    parallaxElements: true,
    horizontalScrolling: false,
    hideDistantElements: false,
    scrollProperty: 'scroll'
  });

	// bootstrap dropdown hover

  // loader
  var loader = function() {
    setTimeout(function() { 
      if(jQuery('#loader').length > 0) {
        jQuery('#loader').removeClass('show');
      }
    }, 1);
  };
  loader();


  // navigation
  var OnePageNav = function() {
    var navToggler = jQuery('.js-site-nav-toggle');
    jQuery(".smoothscroll[href^='#'], #ftco-navbar ul li a[href^='#']").on('click', function(e) {
      e.preventDefault();
      var hash = this.hash;
        
      jQuery('html, body').animate({

        scrollTop: jQuery(hash).offset().top
      }, 700, 'easeInOutExpo', function(){
        window.location.hash = hash;
      });
    });
    jQuery("#ftco-navbar ul li a[href^='#']").on('click', function(e){
      if ( navToggler.is(':visible') ) {
        navToggler.click();
      }
    });

    // jQuery('body').on('activate.bs.scrollspy', function () {
    //   console.log('nice');
    // })
  };
  OnePageNav();

  jQuery(window).scroll(function() {

    var $this = jQuery(this),
      st = $this.scrollTop(),
      navbar = jQuery('.site-header');

    if (st > 150) {
      if ( !navbar.hasClass('scrolled') ) {
        navbar.addClass('scrolled');  
      }
    } 
    if (st < 150) {
      if ( navbar.hasClass('scrolled') ) {
        navbar.removeClass('scrolled sleep');
      }
    } 
    if ( st > 350 ) {
      if ( !navbar.hasClass('awake') ) {
        navbar.addClass('awake'); 
      }
    }
    if ( st < 350 ) {
      if ( navbar.hasClass('awake') ) {
        navbar.removeClass('awake');
        navbar.addClass('sleep');
      }
    }

  }); 


  jQuery('.js-site-nav-toggle').on('click', function(e) {

    var $this = jQuery(this);
    e.preventDefault();

 

    if ( jQuery('body').hasClass('menu-open') ) {
      $this.removeClass('active');
        jQuery('.site-menu .site-menu-inner > ul > li').each(function(i) {

          var that = jQuery(this);
          setTimeout(function() {
            that.removeClass('is-show');
          }, i * 100);

          // jQuery(this).removeClass('is-show');
        });
      
      setTimeout(function() {
        // jQuery('.site-menu').fadeOut(400);
        jQuery('.site-menu').removeClass('site-menu-show');
      }, 800);

      jQuery('body').removeClass('menu-open');
    } else {

      // jQuery('.site-menu').fadeIn(400);
      jQuery('.site-menu').addClass('site-menu-show');

      $this.addClass('active');
      jQuery('body').addClass('menu-open');

      setTimeout(function() {
        jQuery('.site-menu .site-menu-inner > ul > li').each(function(i) {
          var that = jQuery(this);
          setTimeout(function() {
            that.addClass('is-show');
          }, i * 100);

        });
      }, 500);
      
    }

  });


	
	jQuery('nav .dropdown').hover(function(){
		var $this = jQuery(this);
		$this.addClass('show');
		$this.find('> a').attr('aria-expanded', true);
		$this.find('.dropdown-menu').addClass('show');
	}, function(){
		var $this = jQuery(this);
			$this.removeClass('show');
			$this.find('> a').attr('aria-expanded', false);
			$this.find('.dropdown-menu').removeClass('show');
	});


	jQuery('#dropdown04').on('show.bs.dropdown', function () {
	  console.log('show');
	});

	// home slider
	jQuery('.home-slider').owlCarousel({
    loop:true,
    autoplay: true,
    margin:0,
    animateOut: 'fadeOut',
    animateIn: 'fadeIn',
    nav:true,
    autoplayHoverPause: true,
    items: 1,
    navText : ["<span class='ion-chevron-left'></span>","<span class='ion-chevron-right'></span>"],
    responsive:{
      0:{
        items:1,
        nav:false
      },
      600:{
        items:1,
        nav:false
      },
      1000:{
        items:1,
        nav:true
      }
    }
	});

  jQuery('.home-slider-loop-false').owlCarousel({
    loop:false,
    autoplay: true,
    margin:0,
    animateOut: 'fadeOut',
    animateIn: 'fadeIn',
    nav:true,
    autoplayHoverPause: true,
    items: 1,
    navText : ["<span class='ion-chevron-left'></span>","<span class='ion-chevron-right'></span>"],
    responsive:{
      0:{
        items:1,
        nav:false
      },
      600:{
        items:1,
        nav:false
      },
      1000:{
        items:1,
        nav:true
      }
    }
  });

	// owl carousel
	var majorCarousel = jQuery('.js-carousel-1');
	majorCarousel.owlCarousel({
    loop:true,
    autoplay: true,
    stagePadding: 7,
    margin: 20,
    animateOut: 'fadeOut',
    animateIn: 'fadeIn',
    nav: true,
    autoplayHoverPause: true,
    items: 3,
    navText : ["<span class='ion-chevron-left'></span>","<span class='ion-chevron-right'></span>"],
    responsive:{
      0:{
        items:1,
        nav:false
      },
      600:{
        items:2,
        nav:false
      },
      1000:{
        items:3,
        nav:true,
        loop:false
      }
  	}
	});

	// owl carousel
	var major2Carousel = jQuery('.js-carousel-2');
	major2Carousel.owlCarousel({
    loop:true,
    autoplay: true,
    stagePadding: 7,
    margin: 20,
    animateOut: 'fadeOut',
    animateIn: 'fadeIn',
    nav: true,
    autoplayHoverPause: true,
    items: 4,
    navText : ["<span class='ion-chevron-left'></span>","<span class='ion-chevron-right'></span>"],
    responsive:{
      0:{
        items:1,
        nav:false
      },
      600:{
        items:3,
        nav:false
      },
      1000:{
        items:4,
        nav:true,
        loop:false
      }
  	}
	});


  jQuery('.centernonloop').owlCarousel({
    center: true,
    items: 1,
    loop: false,
    margin:10,
    dots: true,
    responsive:{
      600:{
        items: 3
      }
    }
  });

  jQuery('#date').datepicker({
    'format': 'm/d/yyyy',
    'autoclose': true
  });
  jQuery('#time').timepicker();


  //------- Google Map  js --------//  

    if (document.getElementById("map")) {
        google.maps.event.addDomListener(window, 'load', init);

        function init() {
            var mapOptions = {
                zoom: 11,
                center: new google.maps.LatLng(40.6700, -73.9400), // New York
                styles: [{
                    "featureType": "water",
                    "elementType": "geometry",
                    "stylers": [{
                        "color": "#e9e9e9"
                    }, {
                        "lightness": 17
                    }]
                }, {
                    "featureType": "landscape",
                    "elementType": "geometry",
                    "stylers": [{
                        "color": "#f5f5f5"
                    }, {
                        "lightness": 20
                    }]
                }, {
                    "featureType": "road.highway",
                    "elementType": "geometry.fill",
                    "stylers": [{
                        "color": "#ffffff"
                    }, {
                        "lightness": 17
                    }]
                }, {
                    "featureType": "road.highway",
                    "elementType": "geometry.stroke",
                    "stylers": [{
                        "color": "#ffffff"
                    }, {
                        "lightness": 29
                    }, {
                        "weight": 0.2
                    }]
                }, {
                    "featureType": "road.arterial",
                    "elementType": "geometry",
                    "stylers": [{
                        "color": "#ffffff"
                    }, {
                        "lightness": 18
                    }]
                }, {
                    "featureType": "road.local",
                    "elementType": "geometry",
                    "stylers": [{
                        "color": "#ffffff"
                    }, {
                        "lightness": 16
                    }]
                }, {
                    "featureType": "poi",
                    "elementType": "geometry",
                    "stylers": [{
                        "color": "#f5f5f5"
                    }, {
                        "lightness": 21
                    }]
                }, {
                    "featureType": "poi.park",
                    "elementType": "geometry",
                    "stylers": [{
                        "color": "#dedede"
                    }, {
                        "lightness": 21
                    }]
                }, {
                    "elementType": "labels.text.stroke",
                    "stylers": [{
                        "visibility": "on"
                    }, {
                        "color": "#ffffff"
                    }, {
                        "lightness": 16
                    }]
                }, {
                    "elementType": "labels.text.fill",
                    "stylers": [{
                        "saturation": 36
                    }, {
                        "color": "#333333"
                    }, {
                        "lightness": 40
                    }]
                }, {
                    "elementType": "labels.icon",
                    "stylers": [{
                        "visibility": "off"
                    }]
                }, {
                    "featureType": "transit",
                    "elementType": "geometry",
                    "stylers": [{
                        "color": "#f2f2f2"
                    }, {
                        "lightness": 19
                    }]
                }, {
                    "featureType": "administrative",
                    "elementType": "geometry.fill",
                    "stylers": [{
                        "color": "#fefefe"
                    }, {
                        "lightness": 20
                    }]
                }, {
                    "featureType": "administrative",
                    "elementType": "geometry.stroke",
                    "stylers": [{
                        "color": "#fefefe"
                    }, {
                        "lightness": 17
                    }, {
                        "weight": 1.2
                    }]
                }]
            };
            var mapElement = document.getElementById('map');
            var map = new google.maps.Map(mapElement, mapOptions);
            var marker = new google.maps.Marker({
                position: new google.maps.LatLng(40.6700, -73.9400),
                map: map,
                title: 'Snazzy!'
            });
        }
    }



})(jQuery);