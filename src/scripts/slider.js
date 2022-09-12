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
    items: 1,

    responsive: {
      768: {
        items: 2,
      },

      1200: {
        items: 3,
      }
    }
  });
});