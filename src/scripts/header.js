const header = $('#header');
if (header) {
  let lastScroll = 0;

  const top = header.find('.header__top');
  const bottom = header.find('.header__bottom');
  const offset = top.height();

  header.get(0).style.setProperty('--header-offset', `-${offset}px`);


  $(window).scroll(function () {
    const scroll = $(window).scrollTop();

    if (scroll >= offset) header.addClass('header-sticky');
    else header.removeClass('header-sticky');

    if (scroll > lastScroll) bottom.addClass('header__bottom--hide')
    else bottom.removeClass('header__bottom--hide')

    console.log(scroll);
    console.log(lastScroll);

    lastScroll = scroll;
  });
}

