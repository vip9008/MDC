function mdc_banners_width() {
    $('#mdc-banners .banners-container').width($('#mdc-banners').width());
}

$(window).resize(function() {
    mdc_banners_width();
});

$(document).ready(function() {
    mdc_banners_width();
});