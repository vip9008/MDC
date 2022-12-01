MDC.tooltip = {
    activeTooltip: undefined,
    timeout: 1.5
};

jQuery(function() {
    $('body').on('mouseenter', '.has-tooltip', function(event) {
        // positioning the tooltip
        let baseSize = parseFloat($(':root').css('font-size'));
        let offset = $(this).offset();
        let target = $('<div/>', {
            class: 'mdc-tooltip',
            text: $(this).attr('data-tooltip')
        });

        $('body').append($(target)).ready(() => {
            offset.top = offset.top + $(this).innerHeight() + baseSize - $(window).scrollTop();
            offset.left = offset.left + ($(this).innerWidth() / 2) - ($(target).innerWidth() / 2) - $(window).scrollLeft();
            
            if (offset.top > ($(window).outerHeight() - $(target).innerHeight() - baseSize)) {
                offset.top = $(window).outerHeight() - $(target).innerHeight() - baseSize;
            }
            if (offset.left > ($(window).outerWidth() - $(target).innerWidth() - baseSize)) {
                offset.left = $(window).outerWidth() - $(target).innerWidth() - baseSize;
            }
            if (offset.left < 0) {
                offset.left = baseSize;
            }

            $(target).css(offset).addClass('active');
            
            MDC.tooltip.activeTooltip = setTimeout(() => {
                $(target).trigger('MDC.tooltipHide').removeClass('active');
            }, (MDC.tooltip.timeout * 1000));
        });
    });

    $('body').on('mouseleave', '.has-tooltip', function(event) {
        if (typeof MDC.tooltip.activeTooltip !== 'undefined') {
            clearTimeout(MDC.tooltip.activeTooltip);
        }
        $('.mdc-tooltip.active').trigger('MDC.tooltipHide').removeClass('active');
    });

    $('body').on('MDC.tooltipHide', '.mdc-tooltip', function(event) {
        let tooltip = $(this);
        setTimeout(() => {
            $(tooltip).remove();
        }, 400);
    });
});