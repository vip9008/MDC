MDC.tooltip = {
    activeTooltip,
    timeout: 1.5
};

jQuery(function() {
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

        MDC.tooltip.activeTooltip = setTimeout(function() {
            $('.mdc-tooltip.active').removeClass('active');
        }, (MDC.tooltip.timeout * 1000));
    });

    $('body').on('mouseleave', '.has-tooltip', function(event) {
        $('.mdc-tooltip.active').removeClass('active');
        if (typeof MDC.tooltip.activeTooltip !== 'undefined') {
            clearTimeout(MDC.tooltip.activeTooltip);
        }
    });
});