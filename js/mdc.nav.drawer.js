$(document).ready(function() {
    if ($('#mdc-nav-drawer').hasClass('permanent')) {
        $('body').addClass('mdc-drawer-expand');
    }
    
    $('body').on(md_click_event, '.mdc-drawer-scrim', function(event) {
        $('body').removeClass('mdc-drawer-modal');
        $('#mdc-nav-drawer').removeClass('active');
    });
});