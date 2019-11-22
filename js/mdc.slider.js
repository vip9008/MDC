$(document).ready(function() {
    $('.mdc-slider').each(function() {
        var min = $(this).children('input').attr('min');
        var max = $(this).children('input').attr('max');
        var val = $(this).children('input').val();
        var percent = (val - min) / (max-min) * 100;
        $(this).children('.highlight').width(percent + "%");
    });

    $('body').on('input', '.mdc-slider > input', function(event) {
        if ($(this).prop('disabled')) {
            return false;
        }

        var min = $(this).attr('min');
        var max = $(this).attr('max');
        var val = $(this).val();
        var percent = (val - min) / (max-min) * 100;
        $(this).siblings('.highlight').width(percent + "%");
    });
});