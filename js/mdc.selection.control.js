$(document).ready(function() {
    $('.mdc-checkbox').each(function() {
        if ($(this).children('input').prop('disabled')) {
            $(this).addClass('disabled');
        }

        if (parseInt($(this).children('input').val())) {
            $(this).addClass('checked');
        }
    });
    
    $('body').on('click', '.mdc-checkbox', function(event) {
        if ($(this).children('input').prop('disabled')) {
            return false;
        }

        if ($(this).hasClass('checked') || $(this).hasClass('indeterminate')) {
            $(this).removeClass('checked indeterminate');
            $(this).children('input').val(0);
            return false;
        } else {
            $(this).addClass('checked');
            $(this).children('input').val(1);
            return true;
        }
    });
});