const header = $('#header');
if (header) {
  let lastScroll = 0;

  const top = header.find('.header__top');
  const bottom = header.find('.header__bottom');
  const offsetTop = top.height();
  const offsetBottom = bottom.css("height");

  header.get(0).style.setProperty('--header-offset', `-${offsetTop}px`);

  $(window).scroll(function () {
    const scroll = $(window).scrollTop();

    if (scroll >= offsetTop) header.addClass('header-sticky');
    else header.removeClass('header-sticky');

    if (scroll > lastScroll) {
      bottom.addClass('header__bottom--hide')
      document.body.style.setProperty('--sticky-offset', `0px`);
    }

    else {
      bottom.removeClass('header__bottom--hide')
      document.body.style.setProperty('--sticky-offset', `${offsetBottom}`);
    }

    lastScroll = scroll;
  });
}

