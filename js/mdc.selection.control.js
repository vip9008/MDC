MDC.checkboxInit = function (item) {
    var input = $(item).children('input[type="checkbox"]');

    if (input.prop('disabled')) {
        $(item).addClass('disabled');
    }

    if (input.prop('checked')) {
        $(item).addClass('checked');
    } else {
        $(item).removeClass('checked');
    }
};

MDC.radioInit = function (item) {
    var input = $(item).children('input[type="radio"]');

    if (input.prop('disabled')) {
        $(item).addClass('disabled');
    }

    if (input.prop('checked')) {
        $(item).addClass('checked');
    } else {
        $(item).removeClass('checked');
    }
};

jQuery(function() {
    $('.mdc-checkbox, .mdc-switch').each(function() {
        MDC.checkboxInit(this);
    });

    $('.mdc-radiobutton').each(function() {
        MDC.radioInit(this);
    });
    
    $('body').on(md_click_event, '.mdc-checkbox, .mdc-switch', function(event) {
        var input = $(this).children('input[type="checkbox"]');

        if (input.prop('disabled')) {
            return false;
        }

        if (input.prop('checked') || $(this).hasClass('indeterminate')) {
            $(this).removeClass('checked indeterminate');
            input.prop('checked', false).trigger('change');
            return false;
        } else {
            $(this).addClass('checked');
            input.prop('checked', true).trigger('change');
            return true;
        }
    });

    $('body').on('change', '.mdc-radiobutton > input', function(event) {
        if ($(this).prop('checked')) {
            var name = $(this).attr('name');
            $("input[name='"+name+"']:radio").parent().removeClass('checked');
            $(this).parent().addClass('checked');
        }
    });
});