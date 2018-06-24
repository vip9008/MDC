$(document).ready(function() {
    $('body').on('change', '.mdc-data-table > table > tbody > tr > td > .cell-data > .mdc-checkbox > input', function(event) {
        if (parseInt($(this).val()) == 1) {
            $(this).closest('tr').addClass('selected');
        } else {
            $(this).closest('tr').removeClass('selected');
        }
    });
});