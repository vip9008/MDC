MDC.lastScrollPosition = 0;

MDC.topAppBar = function () {
    var scroll = $(window).scrollTop();
    var height = $('#mdc-top-app-bar').height();

    if ($('#mdc-top-app-bar').hasClass('fixed')) {
        if (scroll > 0) {
            $('#mdc-top-app-bar').addClass('active');
        } else {
            $('#mdc-top-app-bar').removeClass('active');
        }
        
        return scroll;
    }

    if (scroll > height) {
        if (scroll > MDC.lastScrollPosition) {
            $('#mdc-top-app-bar').removeClass('active');
            $('body').addClass('mdc-top-app-bar-hidden');
            $('body').removeClass('mdc-top-app-bar-visible');
        } else {
            $('#mdc-top-app-bar').addClass('active standard');
            $('body').removeClass('mdc-top-app-bar-hidden');
            $('body').addClass('mdc-top-app-bar-visible');
        }
        
        $('#mdc-top-app-bar').addClass('standard-hidden');
    } else {
        if (scroll == 0) {
            $('#mdc-top-app-bar').removeClass('active standard');
        }
        
        $('#mdc-top-app-bar').removeClass('standard-hidden');
        $('body').removeClass('mdc-top-app-bar-hidden');
        $('body').addClass('mdc-top-app-bar-visible');
    }

    return scroll;
}

jQuery(function() {
    MDC.lastScrollPosition = MDC.TopAppBar();

    if ($('#mdc-top-app-bar').hasClass('fixed')) {
        $('body').addClass('mdc-top-app-bar-visible');
    }

    $('body').on(md_click_event, '#mdc-top-app-bar > .nav-icon', function(event) {
        if (MDC.isNavBarOpen()) {
            MDC.navBarClose();
        } else {
            MDC.navBarOpen();
        }
    });
});

$(window).scroll(function () {
    MDC.lastScrollPosition = MDC.topAppBar();
});