$(document).ready(function() {
    $('body').on('change', '.mdc-data-table > table > thead > tr > th > .mdc-checkbox > input', function(event) {
        var checkboxes = $(this).closest('table').find('tbody > tr > td > .cell-data > .mdc-checkbox');
        if (parseInt($(this).val()) == 1) {
            $(checkboxes).removeClass('indeterminate').addClass('checked').children('input').val(1).closest('tr').addClass('selected');
        } else {
            $(checkboxes).removeClass('checked indeterminate').children('input').val(0).closest('tr').removeClass('selected');
        }
    });

    $('body').on('change', '.mdc-data-table > table > tbody > tr > td > .cell-data > .mdc-checkbox > input', function(event) {
        if (parseInt($(this).val()) == 1) {
            $(this).closest('tr').addClass('selected');
        } else {
            $(this).closest('tr').removeClass('selected');
        }

        var tbody = $(this).closest('tbody');
        var count = $(tbody).find('tr > td > .cell-data > .mdc-checkbox > input').length;

        var selected = 0;
        $(tbody).find('.cell-data > .mdc-checkbox > input').each(function() {
            if (parseInt($(this).val()) == 1) {
                selected++;
            }
        });

        if (selected == 0) {
            $(this).closest('table').find('thead > tr > th > .mdc-checkbox').removeClass('checked indeterminate').children('input').val(0);
            return;
        }

        if (selected < count) {
            $(this).closest('table').find('thead > tr > th > .mdc-checkbox').removeClass('checked').addClass('indeterminate').children('input').val(0);
            return;
        }

        if (selected == count) {
            $(this).closest('table').find('thead > tr > th > .mdc-checkbox').removeClass('indeterminate').addClass('checked').children('input').val(1);
            return;
        }
    });
});