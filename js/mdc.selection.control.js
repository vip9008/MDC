MDC.checkboxSetIndeterminate = function (item) {
    $(item).addClass('indeterminate');
    $(item).children('input[type="checkbox"]').prop('indeterminate', true);
};

jQuery(function() {
    $('.mdc-checkbox').each(function() {
        if ($(this).hasClass('indeterminate')) {
            MDC.checkboxSetIndeterminate(this);
        }
    });
});