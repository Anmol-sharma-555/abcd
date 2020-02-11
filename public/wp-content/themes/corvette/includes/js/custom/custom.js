jQuery(document).ready(function( $ ) {

    //matchheight

    $('.post-wrap.grid .post').matchHeight();

		//Slick slider

		$('.corvette_slides').slick({
			infinite: true,
			speed: 750,
			autoplay: true,
			autoplaySpeed: 3000,
			slidesToShow: 1,
			centerMode: true,
			centerPadding:'200px',
			slidesToScroll:1,
			dots:false,
			prevArrow: '<button type="button" class="slick-nav slick-prev"><i class="fa fa-angle-left"></i></button>',
			nextArrow: '<button type="button" class="slick-nav slick-next"><i class="fa fa-angle-right"></i></button>',
			arrows:true,
			responsive: [
				{
					breakpoint: 1024,
					settings: {
						slidesToShow: 1,
                        centerPadding:'100px',
						slidesToScroll:1
					}
				},
				{
					breakpoint: 600,
					settings: {
						slidesToShow: 1,
                        centerPadding:'60px',
						slidesToScroll:1
					}
				},
				{
					breakpoint: 480,
					settings: {
						slidesToShow: 1,
						slidesToScroll:1,
                        centerMode: false
					}
				}
			]
		});

    $('.corvette_slides2').slick({
        infinite: true,
        speed: 750,
        autoplay: true,
        autoplaySpeed: 3000,
        slidesToShow: 3,
        slidesToScroll:3,
        dots:false,
        prevArrow: '<button type="button" class="slick-nav slick-prev"><i class="fa fa-angle-left"></i></button>',
        nextArrow: '<button type="button" class="slick-nav slick-next"><i class="fa fa-angle-right"></i></button>',
        arrows:true,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll:3
                }
            },
            {
                breakpoint: 750,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll:2
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll:1
                }
            }
        ]
    });
    $('.corvette_slides3').slick({
        infinite: true,
        speed: 750,
        autoplay: true,
        autoplaySpeed: 3000,
        slidesToShow: 1,
        slidesToScroll:1,
        dots:false,
        prevArrow: '<button type="button" class="slick-nav slick-prev"><i class="fa fa-angle-left"></i></button>',
        nextArrow: '<button type="button" class="slick-nav slick-next"><i class="fa fa-angle-right"></i></button>',
        arrows:true,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll:1
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll:1
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll:1
                }
            }
        ]
    });

    $('.below-slider-wrapper .corvette_popular_news_widget ul.side-newsfeed.clearfix').slick({
        infinite: true,
        speed: 750,
        autoplay: true,
        autoplaySpeed: 3000,
        slidesToShow: 4,
        centerMode: false,
        slidesToScroll:1,
        dots:true,
        prevArrow: '<button type="button" class="slick-nav slick-prev"><i class="fa fa-angle-left"></i></button>',
        nextArrow: '<button type="button" class="slick-nav slick-next"><i class="fa fa-angle-right"></i></button>',
        arrows:true,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll:1
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll:1
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll:1
                }
            }
        ]
    });
$('.below-slider-wrapper .corvette_recent_news_widget ul.side-newsfeed').slick({
        infinite: true,
        speed: 750,
        autoplay: true,
        autoplaySpeed: 3000,
        slidesToShow: 4,
        centerMode: false,
        slidesToScroll:1,
        dots:true,
        prevArrow: '<button type="button" class="slick-nav slick-prev"><i class="fa fa-angle-left"></i></button>',
        nextArrow: '<button type="button" class="slick-nav slick-next"><i class="fa fa-angle-right"></i></button>',
        arrows:true,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll:1
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll:1
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll:1
                }
            }
        ]
    });
	    $('.ribbon').fadeIn();


    // Menu
    $('.corvette-top-bar>.menu-wrap .main-nav').slicknav({
        prependTo:'.corvette-top-bar .top-bar .menu-wrap',
        label:'',
        allowParentLinks: true
    });

		$( window ).resize( function() {
			var browserWidth = $( window ).width();

			if ( browserWidth > 768 ) {
				$(".main-nav,.secondary-menu").show();
			}
		} );


    var ico = $('<i class="fa fa-caret-down"></i>');
    var ico2 = $('<i class="fa fa-caret-down"></i>');
    var ico1 = $('<i class="fa fa-caret-right"></i>');


    $('.main-nav > li:has(ul) > a').append(ico);
    $('.main-nav li:has(ul)  li:has(ul)>a').append(ico1);


    $('.searchwrap a').on('click', function ( e ) {
        e.preventDefault();
        $('.display-search-view').toggle('slide');

        $('#upper-search-area a.ct_icon.search').toggleClass('inc-zindex');
        $('#upper-search-area a.ct_icon.search i').addClass('fa-search');
        $('#upper-search-area a.ct_icon.search i').removeClass('fa-times-circle');
		$('a.ct_icon.search.inc-zindex i').addClass('fa-times-circle');
        $('a.ct_icon.search.inc-zindex i').removeClass('fa-search');
    });



		//FitVids
		$(".post-content iframe").wrap("<div class='fitvid'/>");
		$(".arrayvideo,.fitvid").fitVids();



    $(function()
    {
        $.fn.scrollToTop = function() {
            $(this).hide().removeAttr('href');

            var scrollDiv = $(this);
            $(window).scroll(function()
            {
                if ($(window).scrollTop() >= 1000)
                {
                    $(scrollDiv).fadeIn('slow')
                }
                else
                {
                    $(scrollDiv).fadeOut('slow')
                }
            });
            $(this).click(function()
            {
                $('html, body').animate({
                    scrollTop: 0
                }, 'slow')
            })
        }
    });
    $(function()
    {
        $('#credits').scrollToTop();
    });

    

});

