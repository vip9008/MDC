$(document).ready(function() {
    $('pre.html').each(function(i, block) {
        hljs.highlightBlock(block);
    });

    $('#dir_control').click(function () {
        if ($('html').attr('dir') == "rtl") {
            $('html').attr('dir', "ltr");
            $(this).removeClass('checked');
        } else {
            $('html').attr('dir', "rtl");
            $(this).addClass('checked');
        }
    });

    $('#theme_control').click(function () {
        if ($('body').hasClass('md-theme-dark')) {
            $('body').removeClass('md-theme-dark');
            $(this).removeClass('checked');
        } else {
            $('body').addClass('md-theme-dark');
            $(this).addClass('checked');
        }
    });
});