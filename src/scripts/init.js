const lazyLoadInstance = new LazyLoad({
  elements_selector: '.lazy__item',

  callback_loaded: (trigger) => {
    const container = trigger.closest('.lazy');
    const loader = container.querySelector('.preloader');

    if (loader) loader.classList.add('preloader--hide');
  },
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

$(document).ready(function () {
  $(".slider-hero").owlCarousel({
    dots: false,
    nav: true,
    // navContainer: '#feedback .section__header .slider-nav',
    navText: '',
    items: 1,
    loop: true,
  });
});