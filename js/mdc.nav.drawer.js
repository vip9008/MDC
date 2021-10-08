MDC.NavBarOpen = function () {
    var css_class = 'mdc-drawer-expand';
    if ($('#mdc-nav-drawer').hasClass('modal')) {
        css_class = 'mdc-drawer-modal';
    }

    $('body').addClass(css_class);
    $('#mdc-nav-drawer').addClass('active');
}

MDC.NavBarClose = function () {
    $('body').removeClass('mdc-drawer-modal').removeClass('mdc-drawer-expand');
    $('#mdc-nav-drawer').removeClass('active');
}

MDC.IsNavBarOpen = function () {
    return ($('body').hasClass('mdc-drawer-expand') || $('body').hasClass('mdc-drawer-modal')) && (!$('#mdc-nav-drawer').hasClass('permanent') || $(window).outerWidth() < 960);
}

jQuery(function() {
    if ($('#mdc-nav-drawer').hasClass('permanent')) {
        $('body').addClass('mdc-drawer-expand');
    }
    
    $('body').on(md_click_event, '.mdc-drawer-scrim', function(event) {
        MDC.NavBarClose();
    });
});