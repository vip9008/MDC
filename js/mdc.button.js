$(document).ready(function() {
    $('body').on(md_click_event, '.mdc-toggle-buttons > .mdc-button', function(event) {
        if ($(this).hasClass('disabled') || $(this).is(':disabled')) {
            return false;
        }

        if ($(this).hasClass('active')) {
            $(this).removeClass('active');
        } else {
            $(this).addClass('active').siblings('.mdc-button').removeClass('active');
        }
    });
});