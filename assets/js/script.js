$(document).ready(function() {
    $('.slick-slider-wrap').slick({
        dots: false,
        arrows: true,
        infinite: true,
        speed: 300,
        slidesToShow: 1,
        centerMode: true,
        variableWidth: true,
        centerPadding: 50,
        // autoplay: true,
    });
});
$(document).ready(function() {
    $(".client-slider").owlCarousel({
        loop: true,
        dots: true,
        items: 1,
        // autoplay: true,
    });
});
$(document).ready(function() {
    $(".navbar-toggle").click(function() {
        $(".nav-item-area").show('1000');
    });
    $(".navbar-toggle").click(function() {
        $(".nav-close-btn").show('1000');
    });
    $(".nav-close-btn").click(function() {
        $(".nav-item-area").hide('1000');
    });
    $(".nav-close-btn").click(function() {
        $(".nav-close-btn").hide('1000');
    });
    AOS.init({
        duration: 2000,
    });
});