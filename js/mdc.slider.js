function mdc_slider_update(selector) {
    var min = $(selector).attr('min');
    var max = $(selector).attr('max');
    var val = $(selector).val();
    var percent = (val - min) / (max - min) * 100;
    $(selector).siblings('.highlight').width(percent + "%");

    if ($(selector).parent('.mdc-slider').hasClass('discrete')) {
        var step = 100 / ((max - min) / $(selector).attr('step'));
        var point = 100 / percent * step;
        $(selector).parent('.mdc-slider').css('--slider-point', step + '%');
        $(selector).siblings('.highlight').css('background-size', point + "% 0.125rem").children('.value').text(val);
    }
}

function mdc_slider_enable(selector) {
    $(selector).children('input').prop('disabled', true);
    $(selector).removeClass('disabled');
}

function mdc_slider_disable(selector) {
    $(selector).children('input').prop('disabled', false);
    $(selector).addClass('disabled');
}

$(document).ready(function() {
    $('.mdc-slider').each(function() {
        if ($(this).hasClass('discrete')) {
            var val = $(this).children('input').val();
            $(this).children('.highlight').html('<div class="value">' + val + '</div>');
        }

        if ($(this).children('input').prop('disabled')) {
            $(this).addClass('disabled');
        }

        mdc_slider_update($(this).children('input'));
    });

    $('body').on('input', '.mdc-slider > input', function(event) {
        if ($(this).prop('disabled')) {
            return false;
        }

        mdc_slider_update(this);
    });
});