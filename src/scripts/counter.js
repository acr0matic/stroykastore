const counter = document.querySelectorAll('.counter');

if (counter) {
  const event = new Event('input');

  counter.forEach(item => {
    const field = item.querySelector('.input-number');
    const buttons = item.querySelectorAll('.btn-number');

    const minValue = parseInt(field.getAttribute('min'));
    const maxValue = parseInt(field.getAttribute('max'));

    buttons.forEach(button => {
      button.addEventListener('click', (e) => {
        e.preventDefault();

        const type = button.dataset.type;
        const currentVal = parseInt(field.value);

        if (!isNaN(currentVal)) {
          if (type == 'minus') {
            if (currentVal > minValue) field.value = currentVal - 1;
            if (currentVal == minValue) button.setAttribute('disabled', 'disabled');
          }

          else if (type == 'plus') {
            if (currentVal < maxValue) field.value = currentVal + 1;
            if (currentVal == maxValue) button.setAttribute('disabled', 'disabled');
          }
        }

        else field.value = 0;

        field.dispatchEvent(event);
      });
    });

    field.addEventListener('input', () => {
      const minus = item.querySelector(".btn-number[data-type='minus']")
      const plus = item.querySelector(".btn-number[data-type='plus']")

      const currentVal = parseInt(field.value);

      console.log(currentVal);

      if (currentVal <= minValue) {
        field.value = minValue;
        minus.removeAttribute('.disabled');
        minus.setAttribute('disabled', 'disabled');
      }

      else if (currentVal >= maxValue) {
        field.value = maxValue;
        minus.removeAttribute('disabled')
        plus.setAttribute('disabled', 'disabled');
      }

      else {
        minus.removeAttribute('disabled')
        plus.removeAttribute('disabled')
      }
    });
  });
}







