MDC.activateTab = function(tab, animate = true) {
    var container = $(tab).closest('.mdc-tabs');
    var scrollable = false;

    if (container.closest('.mdc-tabs-group').hasClass('scrollable')) {
        container = $(tab).closest('.os-content');
        scrollable = true;
    }

    if (!$(tab).hasClass('active')) {
        $(tab).addClass('active').siblings().removeClass('active');

        var tabIndex = $(tab).index();
        var target = container.data('target');
        if (target) {
            target = $(target);

            var direction = {
                start: 'left',
                end: 'right'
            };

            if (target.css('direction') == 'rtl') {
                direction = {
                    start: 'right',
                    end: 'left'
                };
            }

            target.children('.tab-page').css(direction.start, '-' + (tabIndex * 100).toString() + '%').css(direction.end, 'auto');
        }
    }

    if (animate) {
        container.addClass('animate');
    }

    var inkBar = container.children('.ink-bar');
    var startingSide = container.css('direction') == 'ltr' ? 'left' : 'right';
    var width = $(tab).outerWidth();

    if (scrollable) {
        $(tab).closest('.mdc-tabs').overlayScrollbars().scroll({
            el: $(tab),
            scroll: 'ifneeded',
            margin: (parseInt($('body').css('font-size')) * 2.75)
        }, 200);
    }
    
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

MDC.updateTabs = function () {
    $('.mdc-tabs .tab-item.active').each(function () {
        MDC.activateTab(this, false);
    });
}

jQuery(function() {
    MDC.overlayScrollbarsInit('.mdc-tabs-group.scrollable .mdc-tabs');
    MDC.updateTabs();

    $('body').on(md_click_event, '.mdc-tabs .tab-item', function(event) {
        if (!$(this).hasClass('active') && !$(this).hasClass('disabled') && !$(this).prop('disabled')) {
            MDC.activateTab(this);
        }
    });
});

$(window).on('load resize', function () {
    MDC.updateTabs();
});