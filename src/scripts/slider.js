$(document).ready(function () {
  $(".slider-hero").owlCarousel({
    dots: false,
    nav: true,
    navContainer: '#hero .slider-nav',
    navText: '',

    items: 1,
    loop: true,

    autoplay: true,
    autoplayTimeout: 4000,
  });
});

$(document).ready(function () {
  $(".slider-feedback").owlCarousel({
    dots: false,
    nav: true,
    navContainer: '#feedback .section__header .slider-nav',
    navText: '',
    margin: 16,
  });
});