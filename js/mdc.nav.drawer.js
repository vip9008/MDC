$(document).ready(function() {
    if ($('#mdc-nav-drawer').hasClass('permanent')) {
        $('body').addClass('mdc-drawer-expand');
    }
    
    $('body').on(md_click_event, '.mdc-drawer-scrim', function(event) {
        $('body').removeClass('mdc-drawer-modal');
        $('#mdc-nav-drawer').removeClass('active');
    });

    $('body').on(md_click_event, '#mdc-nav-drawer > .nano .mdc-list-group.collapsed > .mdc-list-item', function(event) {
        setTimeout(function() {
            nano_scoller_init("#mdc-nav-drawer > .nano");
        }, 300);
    });

    $('body').on(md_click_event, '#mdc-nav-drawer > .nano .mdc-list-group.expanded > .mdc-list-item', function(event) {
        setTimeout(function() {
            nano_scoller_init("#mdc-nav-drawer > .nano");
        }, 300);
    });
});