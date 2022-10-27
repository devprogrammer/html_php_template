// Example starter JavaScript for disabling form submissions if there are invalid fields
(function () {
    'use strict'

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
        })
})()

$('#card-number').mask('0000 0000 0000 0000');

$('.needs-validation').on('submit', function() {
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