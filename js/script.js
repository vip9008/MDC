var direction = "ltr";

function change_document_direction() {
    if (direction == "ltr") {
        direction = "rtl";
    } else {
        direction = "ltr";
    }

    $('html').attr('dir', direction);
    mdc_close_menus();
}

function change_document_theme() {
    if ($('body').hasClass('md-theme-dark')) {
        $('body').removeClass('md-theme-dark');
    } else {
        $('body').addClass('md-theme-dark');
    }
}

$(document).ready(function() {
    $('pre.html').each(function(i, block) {
        hljs.highlightBlock(block);
    });
});