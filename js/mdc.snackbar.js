MDC.snackbars = {
    activeSnackbar: null,
    snackbarTimeout: {},
    fadeOutTime: 200
};

MDC.snackbarsActivate = function(seconds = 4) {
    var snackbar = $('#mdc-snackbars > .mdc-snackbar').first();

    if (snackbar.length && $(snackbar).hasClass('active')) {
        return false;
    }

    seconds = parseFloat(seconds);

    if (isNaN(seconds) || seconds < 4) {
        seconds = 4;
    }

    if (seconds > 10) {
        seconds = 10;
    }

    MDC.snackbars.snackbarTimeout = seconds;

    var timeVisible = seconds * 1000;

    if (snackbar.length) {
        $(snackbar).addClass('active');
        MDC.snackbars.activeSnackbar = setTimeout(function() {
            $('#mdc-snackbars > .mdc-snackbar.active').fadeOut(MDC.snackbars.fadeOutTime).delay(MDC.snackbars.fadeOutTime * 2).queue(function(next) {
                $(this).remove();
                MDC.snackbarsActivate(seconds);
                next();
            });
        }, timeVisible);
    } else {
        MDC.snackbars.activeSnackbar = null;
    }
}

jQuery(function() {
    $('body').on(md_click_event, '#mdc-snackbars > .mdc-snackbar.active .mdc-button-group .mdc-button', function(event) {
        clearTimeout(MDC.snackbars.activeSnackbar);

        $(this).closest('.mdc-snackbar.active').fadeOut(MDC.snackbars.fadeOutTime).delay(MDC.snackbars.fadeOutTime * 1.5).queue(function(next) {
            $(this).remove();
            MDC.snackbarsActivate(MDC.snackbars.snackbarTimeout);
            next();
        });
    });
});