$("#slider-range").slider({
  range: true,
  min: parseInt($('#slider-range').attr('data-min')),
  max: parseInt($('#slider-range').attr('data-max')),
  // values: [parseInt($('#slider-range').attr('data-min')), parseInt($('#slider-range').attr('data-max')],
  values: [10000, 50000],

  slide: function (event, ui) {
    $("#amount_min").val(ui.values[0]);
    $("#amount_max").val(ui.values[1]);
  }
});

$("#amount_min").val($("#slider-range").slider("values", 0));
$("#amount_max").val($("#slider-range").slider("values", 1));
$("#amount_min").change(function () {
  $("#slider-range").slider("values", 0, $(this).val());
});
$("#amount_max").change(function () {
  $("#slider-range").slider("values", 1, $(this).val());
})