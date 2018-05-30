$(document).ready(function() {
    $('.mdc-text-field').each(function() {
        if ($(this).children('.input').val()) {
            $(this).addClass('focus');
        } else {
            $(this).removeClass('focus');
        }
    });

    $('body').on('change', '.mdc-text-field > .input', function() {
        if($(this).val()) {
            $(this).parent('.mdc-text-field').addClass('focus');
        } else {
            $(this).parent('.mdc-text-field').removeClass('focus');
        }
    });

    $('body').on('focus', '.mdc-text-field > .input', function() {
        $(this).parent('.mdc-text-field').addClass('active');
    });

    $('body').on('blur', '.mdc-text-field > .input', function() {
        $(this).parent('.mdc-text-field').removeClass('active');
    });
});