$(function() {

    $('#login-form-link').click(function(e) {
        $("#login-form").delay(100).fadeIn(100);
        $("#request-form").fadeOut(100);
        $('#request-form-link').removeClass('active');
        $(this).addClass('active');
        e.preventDefault();
    });
    $('#request-form-link').click(function(e) {
        $("#request-form").delay(100).fadeIn(100);
        $("#login-form").fadeOut(100);
        $('#login-form-link').removeClass('active');
        $(this).addClass('active');
        e.preventDefault();
    });

});