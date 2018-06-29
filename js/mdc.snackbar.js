var mdc_active_snackbar;
var mdc_snackbar_timeout;
var mdc_snackbar_fadeout_time = 200;

function mdc_activate_snackbars(seconds = 4) {
    seconds = parseFloat(seconds);

    if (isNaN(seconds) || seconds < 4) {
        seconds = 4;
    }

    if (seconds > 10) {
        seconds = 10;
    }

    mdc_snackbar_timeout = seconds;

    var timeVisible = seconds * 1000;

    var snackbar = $('#mdc-snackbars > .mdc-snackbar').first();
    if (snackbar.length) {
        $(snackbar).addClass('active');
        mdc_active_snackbar = setTimeout(function() {
            $('#mdc-snackbars > .mdc-snackbar.active').fadeOut(mdc_snackbar_fadeout_time).delay(mdc_snackbar_fadeout_time * 2).queue(function(next) {
                $(this).remove();
                mdc_activate_snackbars(seconds);
                next();
            });
        }, timeVisible);
    }
}

$(document).ready(function() {
    $('body').on(md_click_event, '#mdc-snackbars > .mdc-snackbar.active .mdc-button-group .mdc-button', function(event) {
        clearTimeout(mdc_active_snackbar);

        $(this).closest('.mdc-snackbar.active').fadeOut(mdc_snackbar_fadeout_time).delay(mdc_snackbar_fadeout_time * 1.5).queue(function(next) {
            $(this).remove();
            mdc_activate_snackbars(mdc_snackbar_timeout);
            next();
        });
    });
});