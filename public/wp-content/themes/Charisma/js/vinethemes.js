jQuery(document).ready(function($) {

	"use strict";
	
	// Menu
	$('#navigation-wrap .menu').slicknav({
		prependTo:'.menu-mobile',
		label:'',
		allowParentLinks: true
	});
	
	// Search
	
	$('#upper-search-area a').on('click', function ( e ) {
		e.preventDefault();
    	$('.display-search-view').toggle('slide');
    });

	//Social Share Homepage
    $( '.share' ).each(function() {
        $(this).on('click', function(){
            $(this).next().toggle('slide');
        });
    });



	// Fitvids
	$(document).ready(function(){
		// Target your .container, .wrapper, .post, etc.
		$(".container").fitVids();
	});


    $(document).on('hover', '.post-share', function() {
        $(this).find('.social-share').toggleClass('active');
    });



        var ico = $('<i class="fa fa-angle-down"></i>');
        var ico1 = $('<i class="fa fa-angle-right"></i>');
        $('ul#menu-top-menu li ul li:has(ul) > a').append(ico1);
        $('ul#menu-top-menu >li:has(ul) > a').append(ico);







    $('.slider-area').on('init', function(event, slick){
$(".ct_slides_area").css("visibility", "visible");
});
    $('.ct_slider').slick({
  dots: true,
  infinite: true,
lazyLoad: 'ondemand',
  speed: 750,
 autoplay: true,
 autoplaySpeed: 5000,
 slidesToShow: 4,
 slidesToScroll:4,
 prevArrow: '<button type="button" class="slick-nav slick-prev"><i class="fa fa-angle-left"></i></button>',
 nextArrow: '<button type="button" class="slick-nav slick-next"><i class="fa fa-angle-right"></i></button>',
  arrows:false,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        infinite: true,
          slidesToShow: 3,
          slidesToScroll:3,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        centerPadding: '0px',
          slidesToShow: 2,
          slidesToScroll:2
      }
    },
    {
      breakpoint: 480,
      settings: {
  centerPadding: '0px',slidesToShow: 1,
          slidesToScroll:1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});


});