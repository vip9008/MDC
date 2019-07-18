var mdc_active_tooltip;
var mdc_tooltip_timeout = 1.5;

$(document).ready(function() {
    $('body').on('mouseenter', '.has-tooltip', function(event) {
        // positioning the tooltip
        var baseSize = parseFloat($(':root').css('font-size'));
        var offset = $(this).offset();
        var target = $(this).find('.mdc-tooltip');

        offset.top = offset.top + $(this).innerHeight() + baseSize - $(window).scrollTop();
        offset.left = offset.left + ($(this).innerWidth() / 2) - ($(target).innerWidth() / 2) - $(window).scrollLeft();
        
        if (offset.top > ($(window).height() - $(target).innerHeight() - baseSize)) {
            offset.top = $(window).height() - $(target).innerHeight() - baseSize;
        }
        if (offset.left > ($(window).width() - $(target).innerWidth() - baseSize)) {
            offset.left = $(window).width() - $(target).innerWidth() - baseSize;
        }
        if (offset.left < 0) {
            offset.left = baseSize;
        }

        $(target).css(offset).addClass('active');

        mdc_active_tooltip = setTimeout(function() {
            $('.mdc-tooltip.active').removeClass('active');
        }, (mdc_tooltip_timeout * 1000));
    });

    $('body').on('mouseleave', '.has-tooltip', function(event) {
        $('.mdc-tooltip.active').removeClass('active');
        if (typeof mdc_active_tooltip !== 'undefined') {
            clearTimeout(mdc_active_tooltip);
        }
    });
});