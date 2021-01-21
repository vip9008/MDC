MDC.sliderUpdate = function(selector) {
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

MDC.sliderEnable = function(selector) {
    $(selector).children('input').prop('disabled', false);
    $(selector).removeClass('disabled');
}

MDC.sliderDisable = function(selector) {
    $(selector).children('input').prop('disabled', true);
    $(selector).addClass('disabled');
}

jQuery(function() {
    $('.mdc-slider').each(function() {
        if ($(this).hasClass('discrete')) {
            var val = $(this).children('input').val();
            $(this).children('.highlight').html('<div class="value">' + val + '</div>');
        }

        if ($(this).hasClass('disabled') || $(this).children('input').prop('disabled')) {
            MDC.sliderDisable(this);
        }

        MDC.sliderUpdate($(this).children('input'));
    });

    $('body').on('input', '.mdc-slider > input', function(event) {
        if ($(this).prop('disabled')) {
            return false;
        }

        MDC.sliderUpdate(this);
    });
});