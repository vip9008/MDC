MDC.sideSheetOpen = function(selector) {
    $(selector).addClass('active');
    if ($(selector).hasClass('fixed')) {
        $('body').addClass('mdc-sheets-side-fixed');
    }
}

MDC.sideSheetClose = function(selector) {
    $(selector).removeClass('active');
    if ($(selector).hasClass('fixed')) {
        $('body').removeClass('mdc-sheets-side-fixed');
    }
}

jQuery(function() {
    $('body').on(md_click_event, '.mdc-sheets-side .header .close-action > button', function(event) {
        MDC.sideSheetClose($(this).closest('.mdc-sheets-side'));
    });

    $('body').on(md_click_event, '.mdc-sheets-side-scrim', function(event) {
        MDC.sideSheetClose($(this).prev('.mdc-sheets-side'));
    });
});