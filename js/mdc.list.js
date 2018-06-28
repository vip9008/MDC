$(document).ready(function() {
    $('body').on(md_click_event, '.mdc-list-group.collapsed > .mdc-list-item', function(event) {
        $(this).closest('.mdc-list-group').removeClass('collapsed').addClass('expanded');
    });

    $('body').on(md_click_event, '.mdc-list-group.expanded > .mdc-list-item', function(event) {
        $(this).closest('.mdc-list-group').removeClass('expanded').addClass('collapsed');
    });
});