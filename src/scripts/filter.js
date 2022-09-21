const range = $(".filter__range");
range.each(function () {
  const slider = $(this).find('.slider-range');
  const minInput = $(this).find('input[data-min]');
  const maxInput = $(this).find('input[data-max]');

  const min = parseInt($(slider).attr('data-min'));
  const max = parseInt($(slider).attr('data-max'));

  slider.slider({
    range: true,
    min: min,
    max: max,
    values: [min, max],

    slide: function (event, ui) {
      minInput.val(ui.values[0]);
      maxInput.val(ui.values[1]);
    }
  });

  minInput.change(function () {
    slider.slider("values", 0, $(this).val());
  });

  maxInput.change(function () {
    slider.slider("values", 1, $(this).val());
  })
})

$(document).ready(function () {
  $('.select2-item').select2({
    width: 'style',
    minimumResultsForSearch: -1,
    placeholder: "Аксон",

    language: {
      noResults: function () {
        return 'Совпадений не найдено';
      },
      searching: function () {
        return 'Поиск…';
      },
    }
  });
});