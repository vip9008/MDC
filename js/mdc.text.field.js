function outlined_textfield_init() {
    $('.mdc-text-field.outlined').each(function() {
        if (!$(this).children('.outline').length) {
            $('<div class="outline"><div class="top"></div></div>').insertAfter($(this).children('.label'));
        }

        var base_size = parseInt($('body').css('font-size'));
        var label_width = ($(this).children('.label').width() * 0.75) / base_size;
        $(this).children('.outline').children('.top').css('width', 'calc(100% - ' + (label_width + 0.5) + 'rem)');
    });
}

$(document).ready(function() {
    $('.mdc-text-field').each(function() {
        if ($(this).children('.input').val()) {
            $(this).addClass('focus');
        } else {
            $(this).removeClass('focus');
        }
    });

    outlined_textfield_init();

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