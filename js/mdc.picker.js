function mdc_datepicker(container) {
    var options = {
        startDate: new Date(),
        endDate: new Date(),
        selectedDate: new Date(),
        color: 'purple-900',
        label: 'Select a date'
    };

    options.startDate.setFullYear(options.selectedDate.getFullYear() - 100);
    options.endDate.setFullYear(options.selectedDate.getFullYear() + 100);

    var pickerHTML = '<div class="mdc-datepicker-container">' +
                        '<div class="mdc-datepicker ' + options.color + '">' +
                            '<div class="header">' +
                                '<div class="label">' + options.label + '</div>' +
                                '<div class="selected-date">Mon, Sept 17</div>' +
                            '</div>' +
                        '</div>'+
                    '</div>';
}

function mdc_date_format(date, format) {
    var weekDay = date.getDay();
    var monthDay = date.getDate();
    var monthIndex = date.getMonth();
    var year = date.getFullYear();

    var string;
}

$(document).ready(function() {
    $('.has-datepicker').each(function() {
        mdc_datepicker(this);
    });

    $('body').on(md_click_event, '.mdc-datepicker > .mdc-calendar-controls > .toggle-years', function(event) {
        var parent = $(this).closest('.mdc-datepicker');
        if ($(parent).hasClass('show-years')) {
            $(parent).removeClass('show-years');
        } else {
            $(parent).addClass('show-years');
        }
    });
});