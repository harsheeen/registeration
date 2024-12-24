$(document).ready(function () {
    $('#registrationForm').on('submit', function (e) {
        // Show a simple message (PHP handles data display)
        $('#success-message').text('Form submitted successfully! Please check your details.');
    });
});
