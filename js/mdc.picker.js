(function($){
    // mdcDatePicker plugin default options
    $.fn.mdcDatePicker = function(userOptions) {
        // Merge passed options with defaults
        var options = $.extend({}, $.fn.mdcDatePicker.defaults, userOptions);

        return this.each(function() {
            var container = $(this);
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

            if (getDateNumber(options.selectedDate) > getDateNumber(options.endDate) || getDateNumber(options.selectedDate) < getDateNumber(options.startDate)) {
                options.selectedDate = new Date(dateFormat(options.endDate, 'yyyy-MM-dd'));
                options.currentMonth = new Date(dateFormat(options.endDate, 'yyyy-MM-01'));
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
                                        '<button class="mdc-button close-picker">Cancel</button>' +
                                        '<button class="mdc-button confirm-date">OK</button>' +
                                    '</div>' +
                                '</div>'+
                            '</div>';
            
            $(pickerHTML).appendTo(container);

            $.fn.mdcDatePicker.container = container.find('.mdc-datepicker-container');
            $.fn.mdcDatePicker.defaults = options;
            
            var viewport_width = document.documentElement.clientWidth || document.body.clientWidth;
            if (viewport_width >= 960) {
                $.fn.mdcDatePicker.container.addClass('inline');
            }
            // $.fn.mdcDatePicker.container.on('touchmove mousewheel DOMMouseScroll', function (event) {
            //     if ($(event.target).hasClass('years-list') || $(event.target).closest('.years-list').length) {
            //         event.stopPropagation();
            //         return;
            //     }
            //     event.preventDefault();
            // });
            nano_scoller_init(container.find('.mdc-datepicker-container > .mdc-datepicker > .years-list.nano'));
        });
    };
    // default options
    var d = new Date();
    $.fn.mdcDatePicker.defaults = {
        startDate: new Date(d.getFullYear() - 100, d.getMonth(), 1),
        endDate: new Date(d.getFullYear() + 100, d.getMonth() + 1, 0),
        selectedDate: new Date(),
        currentMonth: new Date(),
        dateFormat: 'dd/MM/yyyy',
        color: 'purple-900',
        label: 'Select a date'
    };

    $.fn.mdcDatePicker.container = $('<div/>');

    function getDateNumber(date) {
        var year = date.getFullYear();
        var month = date.getMonth() + 1;
        var day = date.getDate();

        return parseInt(year.toString() + month.toString().padStart(2, '0') + day.toString().padStart(2, '0'));
    }

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
        var c = 0;
        for (var i = (startingDay + monthDays + 1); i <= 42; i++) {
            monthDaysHTML += '<td><div class="month-day disabled">' + (++c) + '</div></td>';
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
        var year = options.currentMonth.getFullYear();
        var month = options.currentMonth.getMonth();

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

        $.fn.mdcDatePicker.container.find('.mdc-datepicker > .mdc-calendar-controls > .selected-month').text(dateFormat(options.currentMonth, 'MMMM yyyy'));
        $.fn.mdcDatePicker.container.find('.mdc-datepicker > table.month-days').replaceWith(renderMonth(options.currentMonth, options.selectedDate, options.startDate, options.endDate));
        $.fn.mdcDatePicker.container.find('.mdc-datepicker > .years-list .year-box > button.active').removeClass('active');
        $.fn.mdcDatePicker.container.find('.mdc-datepicker > .years-list .year-box > button.year-' + options.currentMonth.getFullYear()).addClass('active');
    }

    $.fn.mdcDatePicker.changeMonth = function (x) {
        var options = $.fn.mdcDatePicker.defaults;
        var month = options.currentMonth.getMonth() + x;
        if (!canChangeMonth(options.currentMonth.getFullYear(), month, options.startDate, options.endDate)) {
            return;
        }
        options.currentMonth = new Date(options.currentMonth.getFullYear(), month, 1);
        updateCalendar();
    }

    $.fn.mdcDatePicker.setYear = function (year) {
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

        options.currentMonth = new Date(year, month, 1);
        updateCalendar();
    }

    $.fn.mdcDatePicker.selectDate = function (dateString) {
        var options = $.fn.mdcDatePicker.defaults;
        options.selectedDate = new Date(dateString);
        var dateAttr = dateFormat(options.selectedDate, 'yyyy-MM-dd');
        $.fn.mdcDatePicker.container.find('.mdc-datepicker > .header > .selected-date').html(dateFormat(options.selectedDate, '<span>EEE, </span>MMM d'));
        $.fn.mdcDatePicker.container.find('.mdc-datepicker > table.month-days td > .month-day.active').removeClass('active');
        $.fn.mdcDatePicker.container.find(".mdc-datepicker > table.month-days td > .month-day[data-date='" + dateAttr + "']").addClass('active');
    }

    $.fn.mdcDatePicker.getSelectedDate = function () {
        return dateFormat($.fn.mdcDatePicker.defaults.selectedDate, $.fn.mdcDatePicker.defaults.dateFormat);
    }

    $.fn.mdcDatePicker.close = function () {
        var options = $.fn.mdcDatePicker.defaults;
        options.currentMonth = new Date(dateFormat(options.selectedDate, 'yyyy-MM-01'));
        $.fn.mdcDatePicker.container.removeClass('active').children('.mdc-datepicker').removeClass('show-years');
    }

    $.fn.mdcDatePicker.open = function () {
        // var options = $.fn.mdcDatePicker.defaults;
        updateCalendar();
        $.fn.mdcDatePicker.container.addClass('active').removeAttr('style');
        if ($.fn.mdcDatePicker.container.hasClass('inline')) {
            var viewport_width = document.documentElement.clientWidth || document.body.clientWidth;
            var viewport_height = document.documentElement.clientHeight || document.body.clientHeight;

            var menu_height = 280;
            var menu_width = 256;
            var menu_position = $.fn.mdcDatePicker.container[0].getBoundingClientRect();

            var position = {
                top: "auto",
                right: "auto",
                bottom: "auto",
                left: "auto",
                position: "fixed"
            };

            if ((menu_position.top + menu_height) > viewport_height) {
                position.bottom = 16;
            } else {
                position.top = menu_position.top;
            }

            if ($.fn.mdcDatePicker.container.css('direction') == 'ltr') {
                position.left = menu_position.left;
                position.right = "auto";
                if ((menu_position.left + menu_width) > viewport_width) {
                    position.right = 16;
                    position.left = "auto";
                }
            } else {
                position.right = viewport_width - menu_position.right;
                position.left = "auto";
                if ((menu_position.right - menu_width) < 0) {
                    position.left = 16;
                    position.right = "auto";
                }
            }

            $.fn.mdcDatePicker.container.css(position);
        }
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

        if (string.indexOf('dd') > -1) {
            // day of month with leading 0
            string = string.replace('dd', monthDay.toString().padStart(2, '0'));
        } else if (string.indexOf('d') > -1) {
            // day of month
            string = string.replace('d', monthDay.toString());
        }

        if (string.indexOf('MMMM') > -1) {
            // month full name
            string = string.replace('MMMM', F[monthIndex]);
        } else if (string.indexOf('MMM') > -1) {
            // month name (3 letters)
            string = string.replace('MMM', M[monthIndex]);
        } else if (string.indexOf('MM') > -1) {
            // month number with leading 0
            string = string.replace('MM', (monthIndex + 1).toString().padStart(2, '0'));
        } else if (string.indexOf('M') > -1) {
            // month number with leading 0
            string = string.replace('M', (monthIndex + 1).toString());
        }

        // year number
        string = string.replace('yyyy', year);
        // day of week (3 letters)
        string = string.replace('EEE', D[weekDay]);
    
        return string;
    }
})(jQuery);

jQuery(function($) {
    $('.has-datepicker').each(function() {
        $(this).mdcDatePicker();
    });

    $('html').on(md_click_event, function(event) {
        $('.mdc-datepicker-container.inline.active').mdcDatePicker.close();
    });

    $(window).resize(function(event) {
        var viewport_width = document.documentElement.clientWidth || document.body.clientWidth;
        if (viewport_width >= 960) {
            $('.mdc-datepicker-container').addClass('inline');
        } else {
            $('.mdc-datepicker-container').removeClass('inline');
        }

        $('.mdc-datepicker-container.active').mdcDatePicker.close();
    });

    $(window).scroll(function(event) {
        $('.mdc-datepicker-container.active').each(function() {
            if ($(this).hasClass('inline')) {
                $(this).mdcDatePicker.close();
            }
        });
    });

    $('body').on(md_click_event, '.has-datepicker', function(event) {
        event.stopPropagation();
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
        return false;
    });

    $('body').on(md_click_event, '.mdc-datepicker-container .mdc-calendar-controls > .month-controls > .prev', function(event) {
        if ( $(this).hasClass('disabled') || $(this).prop('disabled')) {
            return;
        }
        $(this).closest('.has-datepicker').mdcDatePicker.changeMonth(-1);
        return false;
    });

    $('body').on(md_click_event, '.mdc-datepicker-container .mdc-calendar-controls > .month-controls > .next', function(event) {
        if ( $(this).hasClass('disabled') || $(this).prop('disabled')) {
            return;
        }
        $(this).closest('.has-datepicker').mdcDatePicker.changeMonth(1);
        return false;
    });

    $('body').on(md_click_event, '.mdc-datepicker-container .years-list .year-box > button', function(event) {
        $(this).closest('.mdc-datepicker').removeClass('show-years');
        if ($(this).hasClass('active')) {
            return;
        }
        $(this).closest('.has-datepicker').mdcDatePicker.setYear($(this).attr('data-year'));
        return false;
    });

    $('body').on(md_click_event, '.mdc-datepicker-container table.month-days td > button.month-day', function(event) {
        if ($(this).hasClass('active') || $(this).hasClass('disabled') || $(this).prop('disabled')) {
            return;
        }
        $(this).closest('.has-datepicker').mdcDatePicker.selectDate($(this).attr('data-date'));
        if ($(this).closest('.mdc-datepicker-container').hasClass('inline')) {
            $(this).closest('.mdc-datepicker-container').find('.mdc-button-group > .mdc-button.confirm-date').trigger('click');
        }
        return false;
    });

    $('body').on(md_click_event, '.mdc-datepicker-container .mdc-button-group > .mdc-button.close-picker', function(event) {
        $(this).closest('.has-datepicker').mdcDatePicker.close();
        return false;
    });

    $('body').on(md_click_event, '.mdc-datepicker-container .mdc-button-group > .mdc-button.confirm-date', function(event) {
        var date = $(this).closest('.has-datepicker').mdcDatePicker.getSelectedDate();
        $(this).closest('.has-datepicker').find('input.datepicker-input').val(date).trigger('change');
        $(this).closest('.has-datepicker').mdcDatePicker.close();
        return false;
    });
});