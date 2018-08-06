$(document).ready(function() {
    $('pre.html, pre.css').each(function(i, block) {
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
            $('.md-theme-dark').removeClass('md-theme-dark').addClass('md-theme-light');
            $(this).removeClass('checked');
        } else {
            $('body').addClass('md-theme-dark');
            $('.md-theme-light').removeClass('md-theme-light').addClass('md-theme-dark');
            $(this).addClass('checked');
        }
    });
});