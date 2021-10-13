jQuery(function() {
    $('.mdc-checkbox, .mdc-switch').each(function() {
        var input = $(this).children('input[type="checkbox"]');

        if (input.prop('disabled')) {
            $(this).addClass('disabled');
        }

        if (input.prop('checked')) {
            $(this).addClass('checked');
        }
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

    $('.mdc-radiobutton').each(function() {
        if ($(this).children('input').prop('disabled')) {
            $(this).addClass('disabled');
        }

        if ($(this).children('input').prop('checked')) {
            $(this).addClass('checked');
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