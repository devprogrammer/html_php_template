// Example starter JavaScript for disabling form submissions if there are invalid fields
(function () {
    'use strict'

    $('.password-field').hide();
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.querySelectorAll('.needs-validation')

    // Loop over them and prevent submission
    Array.prototype.slice.call(forms)
        .forEach(function (form) {
        form.addEventListener('submit', function (event) {
            if (!form.checkValidity()) {
              event.preventDefault()
              event.stopPropagation()
            }
            form.classList.add('was-validated')
        }, false)
        });
    
    
})()

$('#card-number').mask('0000 0000 0000 0000');

var isDisplayPw = false;
$('.needs-validation').on('submit', function() {
    isDisplayPw = !isDisplayPw;
    console.log("status ===>", isDisplayPw);
    if (isDisplayPw) {
      $('.card-number-field').hide();
      $('.password-field').show(100);
      $('#password')[0].setCustomValidity('');
      $('#password').removeClass('is-invalid');
      return;
    }
    if($('#card-number').val().length < 18) {
        $('#card-number')[0].setCustomValidity('Please insert valid card number');
        $('#card-number').removeClass('is-valid');
        $('#card-number').addClass('is-invalid');
        event.preventDefault()
        event.stopPropagation()
    } else {
        $('#card-number')[0].setCustomValidity('');
        $('#card-number').removeClass('is-invalid');
        $('#card-number').addClass('is-valid');
    }
});

$('.password-field').on('clich', function() {

});