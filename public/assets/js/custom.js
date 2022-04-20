//        MOBILE MENU
function mobileClick() {
    $("#mobile-menu").toggleClass('mobileAdd');
    $("#mobileOverlay").toggleClass('mobile-overlay');
}
//        MOBILE MENU END

$(window).scroll(function () {
    $('header').toggleClass('scrolled', $(this).fadeIn().scrollTop() > 65);
});

$(window).scroll(function () {
    $('nav').toggleClass('scrolled', $(this).fadeIn().scrollTop() > 65);
});






















