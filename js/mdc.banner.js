var mdc_banner_fadeout_time = 200;

function mdc_activate_banners() {
    if ($('#mdc-banners .mdc-banner.active').length) {
        $('#mdc-banners .mdc-banner.active').removeClass('active').delay(mdc_banner_fadeout_time * 1.5).queue(function(next) {
            $(this).remove();
            mdc_activate_banners();
            next();
        });

        return;
    }

    var banner = $('#mdc-banners .mdc-banner').first();
    if (banner.length) {
        $(banner).addClass('active');
        $('body').addClass('mdc-banner-active');
    } else {
        $('body').removeClass('mdc-banner-active');
    }
}

$(document).ready(function() {
    $('body').on(md_click_event, '#mdc-banners .mdc-banner.active .mdc-button-group .mdc-button', function(event) {
        mdc_activate_banners();
    });
});
