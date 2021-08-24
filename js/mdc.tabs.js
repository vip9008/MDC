jQuery(function() {
    $('body').on(md_click_event, '.mdc-tabs .tab-item', function(event) {
        if (!$(this).hasClass('active')) {
            $(this).addClass('active').siblings().removeClass('active');
        }
    });
});