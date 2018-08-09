function mdc_sheets_side_open(selector) {
    $(selector).addClass('active');
    if ($(selector).hasClass('fixed')) {
        $('body').addClass('mdc-sheets-side-fixed');
    }
}

function mdc_sheets_side_close(selector) {
    $(selector).removeClass('active');
    if ($(selector).hasClass('fixed')) {
        $('body').removeClass('mdc-sheets-side-fixed');
    }
}

$(document).ready(function() {
    $('body').on(md_click_event, '.mdc-sheets-side .header .close-action > button', function(event) {
        mdc_sheets_side_close($(this).closest('.mdc-sheets-side'));
    });

    $('body').on(md_click_event, '.mdc-sheets-side-scrim', function(event) {
        mdc_sheets_side_close($(this).prev('.mdc-sheets-side'));
    });
});