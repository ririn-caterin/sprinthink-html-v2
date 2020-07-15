(function($) {
    /* Scrolling Header
    --------------------- */
    $(window).scroll(function() {    
        var scroll = $(window).scrollTop();
        if (scroll >= 30) {
            $("header").addClass("fixed");
        } else {
            $("header").removeClass("fixed");
        }
    });

    /* Header on Mobile
    --------------------- */
    $('.header-toggle').on('click', function() {
        $('.header-menu').toggleClass('open');
    });

    $('.header-caret').on('click', function() {
        $(this).parent('.menu-item-has-children').toggleClass('open');
        $(this).parent('.menu-item-has-children').find('.sub-menu').slideToggle();
    });

    /* Section Client
    --------------------- */
    $('.client-testi__list').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: false
    });

    /* Section Our Team
    --------------------- */
    $('.team-list').slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        dots: false,
        responsive: [
        {
            breakpoint: 1023,
            settings: {
                slidesToShow: 2
            }
        },
        {
            breakpoint: 767,
            settings: {
                slidesToShow: 1,
                dots: true
            }
        }
        ]
    });

    /* Section Image Slider
    --------------------- */
    $('.img-slider').slick({
        infinite: true,
        slidesToShow: 2,
        slidesToScroll: 1,
        dots: false,
        responsive: [
        {
            breakpoint: 767,
            settings: {
                slidesToShow: 1,
                dots: true
            }
        }
        ]
    });

    /* Section FAQ
    --------------------- */ 
    $('.faq-question').on('click', function() {
        $(this).parent('.faq-row').toggleClass('open');
        $(this).parent('.faq-row').find('.faq-answer').slideToggle();
    });

    var checkWidth = $(document).width();
    /* Client logo on Homepage
    --------------------- */ 
    if(checkWidth <=991){
        $('.client-logo__list').slick({
            infinite: true,
            slidesToShow: 4,
            slidesToScroll: 1,
            dots: true,
            arrows: false,
            responsive: [
                {
                    breakpoint: 767,
                    settings: {
                        slidesToShow: 2
                    }
                }
            ]
        });
    };

    /* Results Slider
    --------------------- */
    if(checkWidth <=767){
        $('.slider-results').slick({
            infinite: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            dots: true,
            arrows: false
        });
    };
})(jQuery);