MDC.textFieldsInit = function() {
    $('.mdc-text-field.outlined, .mdc-text-area.outlined').each(function() {
        MDC.outlinedTextFieldInit(this);
    });
}

MDC.outlinedTextFieldInit = function(outlinedTextField) {
    var container = $(outlinedTextField).children('.input');

    if (!$(container).children('.outline').length) {
        $(container).append('<div class="outline"><div class="top"></div></div>');
    }

    var base_size = parseInt($('body').css('font-size'));
    var label_width = ($(outlinedTextField).children('.label').width() * 0.75) / base_size;
    $(container).children('.outline').children('.top').css('width', 'calc(100% - ' + (label_width + 0.5) + 'rem)');
}

jQuery(function() {
    $('.mdc-text-field').each(function() {
        var inputElement = $(this).children('.input').children('.input-element');
        var value = '';

        if ($(inputElement)[0].tagName == 'INPUT') {
            value = $(inputElement).val();
        } else {
            value = $(inputElement).text();
        }

        if (value.length) {
            $(this).addClass('focus');
        } else {
            $(this).removeClass('focus');
        }

        if ($(this).children('.input').hasClass('disabled') && $(inputElement)[0].tagName == 'INPUT') {
            $(inputElement).prop('disabled', true);
        }
    });

    $('.mdc-text-area').each(function() {
        var inputElement = $(this).children('.input').children('.input-element');
        var value = $(inputElement).val();

        if (value.length) {
            $(this).addClass('focus');
        } else {
            $(this).removeClass('focus');
        }

        if ($(this).children('.input').hasClass('disabled')) {
            $(inputElement).prop('disabled', true);
        }
    });

    MDC.textFieldsInit();

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