$(document).ready(function() {
    $('.mdc-checkbox, .mdc-switch').each(function() {
        if ($(this).children('input').prop('disabled')) {
            $(this).addClass('disabled');
        }

        if (parseInt($(this).children('input').val())) {
            $(this).addClass('checked');
        }
    });
    
    $('body').on(md_click_event, '.mdc-checkbox, .mdc-switch', function(event) {
        if ($(this).children('input').prop('disabled')) {
            return false;
        }

        if (parseInt($(this).children('input').val()) || $(this).hasClass('indeterminate')) {
            $(this).removeClass('checked indeterminate');
            $(this).children('input').val(0).trigger('change');
            return false;
        } else {
            $(this).addClass('checked');
            $(this).children('input').val(1).trigger('change');
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