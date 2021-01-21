var last_scroll_position = 0;

function mdc_top_app_bar() {
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
        if (scroll > last_scroll_position) {
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
    last_scroll_position = mdc_top_app_bar();

    if ($('#mdc-top-app-bar').hasClass('fixed')) {
        $('body').addClass('mdc-top-app-bar-visible');
    }

    $('body').on(md_click_event, '#mdc-top-app-bar > .nav-icon', function(event) {
        var css_class = 'mdc-drawer-expand';
        if ($('#mdc-nav-drawer').hasClass('modal')) {
            css_class = 'mdc-drawer-modal';
        }

        if ($('body').hasClass(css_class) && !$('#mdc-nav-drawer').hasClass('permanent')) {
            $('body').removeClass(css_class);
            $('#mdc-nav-drawer').removeClass('active');
        } else {
            $('body').addClass(css_class);
            $('#mdc-nav-drawer').addClass('active');
        }
    });
});

$(window).scroll(function () {
    last_scroll_position = mdc_top_app_bar();
});