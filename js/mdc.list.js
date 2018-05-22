$(document).ready(function() {
    $('body').on('click', '.mdc-list-group.collapsed > .mdc-list-item', function(event) {
        $(this).closest('.mdc-list-group').removeClass('collapsed').addClass('expanded');
        $(this).children('.meta.material-icon').text('keyboard_arrow_up');
    });

    $('body').on('click', '.mdc-list-group.expanded > .mdc-list-item', function(event) {
        $(this).closest('.mdc-list-group').removeClass('expanded').addClass('collapsed');
        $(this).children('.meta.material-icon').text('keyboard_arrow_down');
    });
});