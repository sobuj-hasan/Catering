//        MOBILE MENU
function mobileClick() {
    $("#mobile-menu").toggleClass('mobileAdd');
    $("#mobileOverlay").toggleClass('mobile-overlay');
}
//        MOBILE MENU END

$(window).scroll(function () {
    $('header').toggleClass('scrolled', $(this).fadeIn().scrollTop() > 65);
});


$('.foodplay').slick({
    slidesToShow: 4,
    slidesToScroll: 1,
    rtl: false,
    autoplay: true,
    autoplaySpeed: 2000,
    dots: false,
    arrows: false,
    responsive: [{
        breakpoint: 992,
        settings: {
            slidesToShow: 3,
            slidesToScroll: 1,
            infinite: true,
            dots: false
        }
    },
    {
        breakpoint: 768,
        settings: {
            slidesToShow: 2,
            slidesToScroll: 1
        }
    },
    {
        breakpoint: 576,
        settings: {
            slidesToShow: 1,
            slidesToScroll: 1
        }
    },
    {
        breakpoint: 350,
        settings: {
            slidesToShow: 1,
            slidesToScroll: 1
        }
    }]


});



















