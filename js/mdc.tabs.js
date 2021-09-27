MDC.activateTab = function(tab, animate = true) {
    if (!$(tab).hasClass('active')) {
        $(tab).addClass('active').siblings().removeClass('active');
    }

    var container = $(tab).closest('.mdc-tabs');

    if (animate) {
        container.addClass('animate');
    }

    var inkBar = container.children('.ink-bar');
    var startingSide = container.css('direction') == 'ltr' ? 'left' : 'right';
    var width = $(tab).outerWidth();
    
    if (startingSide == 'left') {
        var offset = $(tab).offset().left - container.offset().left;
    } else {
        var offset = (container.offset().left + container.outerWidth()) - ($(tab).offset().left + width);
    }

    inkBar.css(startingSide, offset).css('width', width);

    if (animate) {
        setTimeout(function () {
            container.removeClass('animate');
        }, 250);
    }
}

jQuery(function() {
    $('.mdc-tabs .tab-item.active').each(function () {
        MDC.activateTab(this, false);
    });

    $('body').on(md_click_event, '.mdc-tabs .tab-item', function(event) {
        if (!$(this).hasClass('active')) {
            MDC.activateTab(this);
        }
    });
});

$(window).resize(function () {
    $('.mdc-tabs .tab-item.active').each(function () {
        MDC.activateTab(this, false);
    });
});