function shakeAndRedBorder(input) {
  if (input.id !== 'exampleFormControlInput3') {
    $(input).effect('shake', { times: 3, distance: 5 }, 500);
  }
  input.classList.add('invalid-input');
}

function removeRedBorder(input) {
  input.classList.remove('invalid-input');
}

function addGreenBorder(input) {
  input.classList.add('valid-input');
}

function removeGreenBorder(input) {
  input.classList.remove('valid-input');
}
$(document).ready(function() {
  $('#exampleFormControlInput1, #exampleFormControlInput2, #exampleFormControlInput3').on('input', function() {
    if (this.validity.valid) {
      removeRedBorder(this);
      addGreenBorder(this);
    } else {
      removeGreenBorder(this);
      shakeAndRedBorder(this);
    }
  });

  $('#job_form').on('submit', function(e) {
    e.preventDefault();

    let invalidInput = false;

    $('#exampleFormControlInput1, #exampleFormControlInput2, #exampleFormControlInput3').each(function() {
      if (!this.validity.valid) {
        shakeAndRedBorder(this);
        invalidInput = true;
      }
    });

    if (!invalidInput) {
      this.submit();
    }
  });

  // Allow only numbers and - in Offerer number input
  $('#exampleFormControlInput3').on('keypress', function(e) {
    var key = e.key;

    // Check if the key is not a number or a -
    if (!(/[0-9-]/.test(key))) {
      e.preventDefault();
    }
  });
  $('#exampleFormControlInput3').attr('maxlength', 11);

  // Allow only lowercase letters in the exampleFormControlInput4 input
  $('#exampleFormControlInput4').on('keypress', function(e) {
    var key = e.key;

    // Check if the key is not a lowercase letter
    if (!(/[a-z]/.test(key))) {
      e.preventDefault();
    }
  });
});
