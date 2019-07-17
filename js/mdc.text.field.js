function mdc_outlined_fields_init() {
    $('.mdc-text-field.outlined, .mdc-text-area.outlined').each(function() {
        mdc_outlined_field_init(this);
    });
}

function mdc_outlined_field_init(outlined_text_field) {
    var container = $(outlined_text_field).children('.input');

    if (!$(container).children('.outline').length) {
        $(container).append('<div class="outline"><div class="top"></div></div>');
    }

    var base_size = parseInt($('body').css('font-size'));
    var label_width = ($(outlined_text_field).children('.label').width() * 0.75) / base_size;
    $(container).children('.outline').children('.top').css('width', 'calc(100% - ' + (label_width + 0.5) + 'rem)');
}

$(document).ready(function() {
    $('.mdc-text-field').each(function() {
        var value = '';

        if ($(this).children('.input').children('input').length) {
            value = $(this).children('.input').children('input').val();
        } else {
            value = $(this).children('.input').children('div').first().text();
        }

        if (value.length) {
            $(this).addClass('focus');
        } else {
            $(this).removeClass('focus');
        }

        if ($(this).children('.input').hasClass('disabled') && $(this).children('.input').children('input').length) {
            $(this).children('.input').children('input').prop('disabled', true);
        }
    });

    $('.mdc-text-area').each(function() {
        var value = $(this).children('.input').children('textarea').val();

        if (value.length) {
            $(this).addClass('focus');
        } else {
            $(this).removeClass('focus');
        }

        if ($(this).children('.input').hasClass('disabled')) {
            $(this).children('.input').children('textarea').prop('disabled', true);
        }
    });

    mdc_outlined_fields_init();

    $('body').on('change', '.mdc-text-field > .input > input', function() {
        if($(this).val()) {
            $(this).parent('.input').parent('.mdc-text-field').addClass('focus');
        } else {
            $(this).parent('.input').parent('.mdc-text-field').removeClass('focus');
        }
    });

    $('body').on('change', '.mdc-text-area > .input > textarea', function() {
        if($(this).val()) {
            $(this).parent('.input').parent('.mdc-text-area').addClass('focus');
        } else {
            $(this).parent('.input').parent('.mdc-text-area').removeClass('focus');
        }
    });

    $('body').on('focus', '.mdc-text-field > .input > input', function() {
        $(this).parent('.input').parent('.mdc-text-field').addClass('active');
    });

    $('body').on('focus', '.mdc-text-area > .input > textarea', function(event) {
        event.stopPropagation();
        $(this).parent('.input').parent('.mdc-text-area').addClass('active');
    });

    $('body').on(md_click_event + ' focus', '.mdc-text-area > .input', function() {
        $(this).children('textarea').trigger('focus');
    });

    $('body').on('blur', '.mdc-text-field > .input > input', function() {
        $(this).parent('.input').parent('.mdc-text-field').removeClass('active');
    });

    $('body').on('blur', '.mdc-text-area > .input > textarea', function() {
        $(this).parent('.input').parent('.mdc-text-area').removeClass('active');
    });
});