(function($){
    // mdcDatePicker plugin default options
    $.fn.mdcDatePicker = function(userOptions) {
        // Merge passed options with defaults
        var options = $.extend({}, $.fn.mdcDatePicker.defaults, userOptions);

        return this.each(function() {
            container = $(this);
            if (!container.hasClass('has-datepicker')) {
                container.addClass('has-datepicker');
            }
            container.find('input').addClass('datepicker-input');

            options = $.extend(options, container.data(), userOptions);
            if (typeof options.startDate === "string") {
                options.startDate = new Date(options.startDate);
            }
            if (typeof options.endDate === "string") {
                options.endDate = new Date(options.endDate);
            }
            if (typeof options.selectedDate === "string") {
                options.selectedDate = new Date(options.selectedDate);
            }

            var yearsList = '';
            for (var i = options.startDate.getFullYear(); i <= options.endDate.getFullYear(); i++) {
                var thisYear = options.currentMonth.getFullYear();
                yearsList += '<div class="year-box"><button class="year-'+ i + (i == thisYear ? ' active' : '') + '" data-year="' + i + '">' + i + '</button></div>';
            }

            var pickerHTML = '<div class="mdc-datepicker-container">' +
                                '<div class="mdc-datepicker ' + options.color + '">' +
                                    '<div class="header">' +
                                        '<div class="label">' + options.label + '</div>' +
                                        '<div class="selected-date">' + dateFormat(options.selectedDate, '<span>EEE, </span>MMM d') + '</div>' +
                                    '</div>' +
                                    '<div class="mdc-calendar-controls">' +
                                        '<div class="selected-month">' + dateFormat(options.currentMonth, 'MMMM yyyy') + '</div>' +
                                        '<button class="material-icon dense toggle-years">arrow_drop_down</button>' +
                                        '<div class="month-controls">' +
                                            '<button class="material-icon dense prev">chevron_left</button>' +
                                            '<button class="material-icon dense next">chevron_right</button>' +
                                        '</div>' +
                                    '</div>' +
                                    renderMonth(options.currentMonth, options.selectedDate, options.startDate, options.endDate) +
                                    '<div class="years-list nano">' +
                                        '<div class="nano-content">' + yearsList + '</div>' +
                                    '</div>' +
                                    '<div class="mdc-button-group">' +
                                        '<button class="mdc-button close-picker ' + options.color + '">Cancel</button>' +
                                        '<button class="mdc-button confirm-date ' + options.color + '">OK</button>' +
                                    '</div>' +
                                '</div>'+
                            '</div>';

            $.fn.mdcDatePicker.container = $(pickerHTML).appendTo(container);
            $.fn.mdcDatePicker.defaults = options;
            nano_scoller_init($(container).find('.mdc-datepicker-container > .mdc-datepicker > .years-list.nano'));
        });
    };
    // default options
    var selectedDate = new Date();
    $.fn.mdcDatePicker.defaults = {
        startDate: new Date(selectedDate.getFullYear() - 100, selectedDate.getMonth(), 1),
        endDate: new Date(selectedDate.getFullYear() + 100, selectedDate.getMonth() + 1, 0),
        selectedDate: selectedDate,
        currentMonth: selectedDate,
        dateFormat: 'dd/MM/yyyy',
        color: 'purple-900',
        label: 'Select a date'
    };

    $.fn.mdcDatePicker.container = $('<div />');

    function renderMonth(date, selectedDate, start, end) {
        var monthDaysHTML = '<tr>';
        var startingDay = new Date(date.getFullYear(), date.getMonth(), 1);
        startingDay = startingDay.getDay();
        if (startingDay > 0) {
            monthDaysHTML += '<td colspan="' + startingDay + '"></td>';
        }
        var monthDays = totalMonthDays(date);
        var todaysDate = new Date();
        for (var i = 1; i <= monthDays; i++) {
            var cssClass = 'month-day';
            var currentDate = new Date(date.getFullYear(), date.getMonth(), i);
            var isDisabled = false;

            if (start.getFullYear() == currentDate.getFullYear() && start.getMonth() == currentDate.getMonth()) {
                if (start.getDate() > currentDate.getDate()) {
                    isDisabled = true;
                }
            }
            if (end.getFullYear() == currentDate.getFullYear() && end.getMonth() == currentDate.getMonth()) {
                if (end.getDate() < currentDate.getDate()) {
                    isDisabled = true;
                }
            }

            if (isDisabled) {
                monthDaysHTML += '<td><div class="month-day disabled">' + i + '</div></td>';
            } else {
                if (compareDates(currentDate, todaysDate)) {
                    cssClass += ' today';
                }
                if (compareDates(currentDate, selectedDate)) {
                    cssClass += ' active';
                }
                monthDaysHTML += '<td><button class="' + cssClass + '" data-date="'+ dateFormat(currentDate, 'yyyy-MM-dd') +'">' + i + '</button></td>';
            }

            if ((i + startingDay) % 7 == 0) {
                monthDaysHTML += '</tr><tr>';
            }
        }
        for (var i = (startingDay + monthDays + 1); i <= 42; i++) {
            monthDaysHTML += '<td></td>';
            if (i % 7 == 0 && i != 42) {
                monthDaysHTML += '</tr><tr>';
            }
        }
        monthDaysHTML += '</tr>';

        return '<table class="month-days">' +
                    '<thead>' +
                        '<tr><th>S</th><th>M</th><th>T</th><th>W</th><th>T</th><th>F</th><th>S</th></tr>' +
                        '<tbody>' +
                            monthDaysHTML +
                        '</tbody>' +
                    '</thead>' +
                '</table>';
    };

    function updateCalendar() {
        var options = $.fn.mdcDatePicker.defaults;
        $.fn.mdcDatePicker.container.find('.mdc-datepicker > .mdc-calendar-controls > .selected-month').text(dateFormat(options.currentMonth, 'MMMM yyyy'));
        $.fn.mdcDatePicker.container.find('.mdc-datepicker > table.month-days').replaceWith(renderMonth(options.currentMonth, options.selectedDate, options.startDate, options.endDate));
        $.fn.mdcDatePicker.container.find('.mdc-datepicker > .years-list .year-box > button.active').removeClass('active');
        $.fn.mdcDatePicker.container.find('.mdc-datepicker > .years-list .year-box > button.year-' + options.currentMonth.getFullYear()).addClass('active');
    }

    $.fn.mdcDatePicker.changeMonth = function (direction) {
        var options = $.fn.mdcDatePicker.defaults;
        if (!canChangeMonth(options.currentMonth.getFullYear(), options.currentMonth.getMonth() + direction, options.startDate, options.endDate)) {
            return;
        }

        if (options.currentMonth.getFullYear() == options.startDate.getFullYear() && options.currentMonth.getMonth() + direction == options.startDate.getMonth()) {
            $.fn.mdcDatePicker.container.find('.mdc-datepicker > .mdc-calendar-controls > .month-controls > .prev').prop('disabled', true);
        } else {
            $.fn.mdcDatePicker.container.find('.mdc-datepicker > .mdc-calendar-controls > .month-controls > .prev').prop('disabled', false);
        }

        if (options.currentMonth.getFullYear() == options.endDate.getFullYear() && options.currentMonth.getMonth() + direction == options.endDate.getMonth()) {
            $.fn.mdcDatePicker.container.find('.mdc-datepicker > .mdc-calendar-controls > .month-controls > .next').prop('disabled', true);
        } else {
            $.fn.mdcDatePicker.container.find('.mdc-datepicker > .mdc-calendar-controls > .month-controls > .next').prop('disabled', false);
        }

        options.currentMonth = new Date(options.currentMonth.getFullYear(), options.currentMonth.getMonth() + direction, options.currentMonth.getDate());
        updateCalendar();
    }

    $.fn.mdcDatePicker.changeYear = function (year) {
        var options = $.fn.mdcDatePicker.defaults;
        var month = options.currentMonth.getMonth();
        if (year == options.startDate.getFullYear() && month < options.startDate.getMonth()) {
            month = options.startDate.getMonth();
        }
        if (year == options.endDate.getFullYear() && month > options.endDate.getMonth()) {
            month = options.endDate.getMonth();
        }
        if (!canChangeMonth(year, month, options.startDate, options.endDate)) {
            return;
        }

        if (year == options.startDate.getFullYear() && month == options.startDate.getMonth()) {
            $.fn.mdcDatePicker.container.find('.mdc-datepicker > .mdc-calendar-controls > .month-controls > .prev').prop('disabled', true);
        } else {
            $.fn.mdcDatePicker.container.find('.mdc-datepicker > .mdc-calendar-controls > .month-controls > .prev').prop('disabled', false);
        }

        if (year == options.endDate.getFullYear() && month == options.endDate.getMonth()) {
            $.fn.mdcDatePicker.container.find('.mdc-datepicker > .mdc-calendar-controls > .month-controls > .next').prop('disabled', true);
        } else {
            $.fn.mdcDatePicker.container.find('.mdc-datepicker > .mdc-calendar-controls > .month-controls > .next').prop('disabled', false);
        }

        options.currentMonth = new Date(year, month, options.currentMonth.getDate());
        updateCalendar();
    }

    $.fn.mdcDatePicker.selectDate = function (dateString) {
        var options = $.fn.mdcDatePicker.defaults;
        options.selectedDate = new Date(dateString);
        $.fn.mdcDatePicker.container.find('.mdc-datepicker > .header > .selected-date').html(dateFormat(options.selectedDate, '<span>EEE, </span>MMM d'));
        $.fn.mdcDatePicker.container.find('.mdc-datepicker > table.month-days td > .month-day.active').removeClass('active');
        $.fn.mdcDatePicker.container.find(".mdc-datepicker > table.month-days td > .month-day[data-date='" + dateString + "']").addClass('active');
    }

    $.fn.mdcDatePicker.getSelectedDate = function () {
        return dateFormat($.fn.mdcDatePicker.defaults.selectedDate, $.fn.mdcDatePicker.defaults.dateFormat);
    }

    $.fn.mdcDatePicker.close = function () {
        var options = $.fn.mdcDatePicker.defaults;
        options.currentMonth = options.selectedDate;
        $.fn.mdcDatePicker.container.removeClass('active');
    }

    $.fn.mdcDatePicker.open = function () {
        var options = $.fn.mdcDatePicker.defaults;
        updateCalendar();
        $.fn.mdcDatePicker.container.addClass('active');
    }

    function canChangeMonth(year, month, start, end) {
        if ((year == start.getFullYear() && month < start.getMonth()) || (year == end.getFullYear() && month > end.getMonth())) {
            return false;
        } else {
            if (year < start.getFullYear() || year > end.getFullYear()) {
                return false;
            }
        }

        return true;
    }

    function compareDates(date1, date2) {
        if (date1.getFullYear() == date2.getFullYear() && date1.getMonth() == date2.getMonth() && date1.getDate() == date2.getDate()) {
            return true;
        }
        return false;
    }
    
    function totalMonthDays(date) {
        var days = new Date(date.getFullYear(), date.getMonth() + 1, 0);
        return days.getDate();
    }
    
    // returns a formatted string for a date object (ICU)
    function dateFormat(date, format) {
        var weekDay = date.getDay();
        var monthDay = date.getDate();
        var monthIndex = date.getMonth();
        var year = date.getFullYear();
    
        var D = ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'];
        var M = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
        var F = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
    
        var string = format;
        // day of month with leading 0
        string = string.replace('dd', (monthDay < 10 ? '0' + monthDay.toString() : monthDay.toString()));
        // day of month
        string = string.replace('d', monthDay.toString());
        // year number
        string = string.replace('yyyy', year);
        // month full name
        string = string.replace('MMMM', F[monthIndex]);
        // month name (3 letters)
        string = string.replace('MMM', M[monthIndex]);
        // month number with leading 0
        string = string.replace('MM', (monthIndex + 1 < 10 ? '0' + (monthIndex + 1).toString() : (monthIndex + 1).toString()));
        // day of week (3 letters)
        string = string.replace('EEE', D[weekDay]);
    
        return string;
    }
})(jQuery); 

$(document).ready(function() {
    $('.has-datepicker').each(function() {
        $(this).mdcDatePicker();
    });
    
    $('body').on('focus', '.has-datepicker input.datepicker-input', function(event) {
        event.preventDefault();
        $(this).trigger('blur');
        $(this).closest('.has-datepicker').mdcDatePicker.open();
    });

    $('body').on(md_click_event, '.mdc-datepicker-container .mdc-calendar-controls > .toggle-years', function(event) {
        var parent = $(this).closest('.mdc-datepicker');
        if ($(parent).hasClass('show-years')) {
            $(parent).removeClass('show-years');
        } else {
            $(parent).addClass('show-years');
        }
    });

    $('body').on(md_click_event, '.mdc-datepicker-container .mdc-calendar-controls > .month-controls > .prev', function(event) {
        if ( $(this).hasClass('disabled') || $(this).prop('disabled')) {
            return;
        }
        $(this).closest('.has-datepicker').mdcDatePicker.changeMonth(-1);
    });

    $('body').on(md_click_event, '.mdc-datepicker-container .mdc-calendar-controls > .month-controls > .next', function(event) {
        if ( $(this).hasClass('disabled') || $(this).prop('disabled')) {
            return;
        }
        $(this).closest('.has-datepicker').mdcDatePicker.changeMonth(1);
    });

    $('body').on(md_click_event, '.mdc-datepicker-container .years-list .year-box > button', function(event) {
        if ($(this).hasClass('active')) {
            return;
        }
        $(this).closest('.has-datepicker').mdcDatePicker.changeYear($(this).attr('data-year'));
        $(this).closest('.mdc-datepicker').removeClass('show-years');
    });

    $('body').on(md_click_event, '.mdc-datepicker-container table.month-days td > button.month-day', function(event) {
        if ($(this).hasClass('active') || $(this).hasClass('disabled') || $(this).prop('disabled')) {
            return;
        }
        $(this).closest('.has-datepicker').mdcDatePicker.selectDate($(this).attr('data-date'));
    });

    $('body').on(md_click_event, '.mdc-datepicker-container .mdc-button-group > .mdc-button.close-picker', function(event) {
        $(this).closest('.has-datepicker').mdcDatePicker.close();
    });

    $('body').on(md_click_event, '.mdc-datepicker-container .mdc-button-group > .mdc-button.confirm-date', function(event) {
        var date = $(this).closest('.has-datepicker').mdcDatePicker.getSelectedDate();
        $(this).closest('.has-datepicker').find('input.datepicker-input').val(date).trigger('change');
        $(this).closest('.mdc-datepicker-container').removeClass('active');
    });
});