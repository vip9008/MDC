MDC.NavBarOpen = function () {
    var css_class = 'mdc-drawer-expand';
    if ($('#mdc-nav-drawer').hasClass('modal')) {
        css_class = 'mdc-drawer-modal';
    }

    $('body').addClass(css_class);
    $('#mdc-nav-drawer').addClass('active');
}

MDC.NavBarClose = function () {
    if (!$('#mdc-nav-drawer').hasClass('permanent')) {
        $('body').removeClass('mdc-drawer-expand');
    }

    $('body').removeClass('mdc-drawer-modal');
    $('#mdc-nav-drawer').removeClass('active');
}

MDC.IsNavBarOpen = function () {
    return $('#mdc-nav-drawer').hasClass('active') || ($('#mdc-nav-drawer').hasClass('permanent') || $(window).outerWidth() >= 960);
}

jQuery(function() {
    if ($('#mdc-nav-drawer').hasClass('permanent')) {
        $('body').addClass('mdc-drawer-expand');
    }
    
    $('body').on(md_click_event, '.mdc-drawer-scrim', function(event) {
        MDC.NavBarClose();
    });
});