// the semi-colon before the function invocation is a safety net against concatenated scripts and/or other plugins that are not closed properly.
;(function ($, window, document, undefined) {
    "use strict";

    // Create the defaults once
    var defaults = {
        startDate: new Date((new Date()).getFullYear() - 100, (new Date()).getMonth(), 1),
        endDate: new Date((new Date()).getFullYear() + 100, (new Date()).getMonth() + 1, 0),
        selectedDate: new Date(),
        currentMonth: new Date(),
        dateFormat: 'dd/MM/yyyy',
        color: 'purple-900',
        label: 'Select a date'
    };

    var helpers = {
        getConfigData: function(container) {
            var data = $(container).data();
            var filteredData = {};
            $.each(defaults, function(key, value) {
                if (data.hasOwnProperty(key)) {
                    filteredData[key] = data[key];
                }
            });
            return filteredData;
        },
        getDateNumber: function(date) {
            var year = date.getFullYear();
            var month = date.getMonth() + 1;
            var day = date.getDate();
    
            return parseInt(year.toString() + month.toString().padStart(2, '0') + day.toString().padStart(2, '0'));
        },
        renderMonth: function(date, selectedDate, start, end) {
            var monthDaysHTML = '<tr>';
            var startingDay = new Date(date.getFullYear(), date.getMonth(), 1);
            startingDay = startingDay.getDay();
            if (startingDay > 0) {
                monthDaysHTML += '<td colspan="' + startingDay + '"></td>';
            }
            var monthDays = this.totalMonthDays(date);
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
                    if (this.compareDates(currentDate, todaysDate)) {
                        cssClass += ' today';
                    }
                    if (this.compareDates(currentDate, selectedDate)) {
                        cssClass += ' active';
                    }
                    monthDaysHTML += '<td><button class="' + cssClass + '" data-date="'+ this.dateFormat(currentDate, 'yyyy-MM-dd') +'">' + i + '</button></td>';
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
        },
        updateCalendar: function(pickerContainer, options) {
            var year = options.currentMonth.getFullYear();
            var month = options.currentMonth.getMonth();
    
            if (year == options.startDate.getFullYear() && month == options.startDate.getMonth()) {
                pickerContainer.find('.mdc-datepicker > .mdc-calendar-controls > .month-controls > .prev').prop('disabled', true);
            } else {
                pickerContainer.find('.mdc-datepicker > .mdc-calendar-controls > .month-controls > .prev').prop('disabled', false);
            }
    
            if (year == options.endDate.getFullYear() && month == options.endDate.getMonth()) {
                pickerContainer.find('.mdc-datepicker > .mdc-calendar-controls > .month-controls > .next').prop('disabled', true);
            } else {
                pickerContainer.find('.mdc-datepicker > .mdc-calendar-controls > .month-controls > .next').prop('disabled', false);
            }
    
            pickerContainer.find('.mdc-datepicker > .mdc-calendar-controls > .selected-month').text(this.dateFormat(options.currentMonth, 'MMMM yyyy'));
            pickerContainer.find('.mdc-datepicker > table.month-days').replaceWith(this.renderMonth(options.currentMonth, options.selectedDate, options.startDate, options.endDate));
            pickerContainer.find('.mdc-datepicker > .years-list .year-box > button.active').removeClass('active');
            pickerContainer.find('.mdc-datepicker > .years-list .year-box > button.year-' + options.currentMonth.getFullYear()).addClass('active');
        },
        canChangeMonth: function(year, month, start, end) {
            if ((year == start.getFullYear() && month < start.getMonth()) || (year == end.getFullYear() && month > end.getMonth())) {
                return false;
            } else {
                if (year < start.getFullYear() || year > end.getFullYear()) {
                    return false;
                }
            }
    
            return true;
        },
        compareDates: function(date1, date2) {
            if (date1.getFullYear() == date2.getFullYear() && date1.getMonth() == date2.getMonth() && date1.getDate() == date2.getDate()) {
                return true;
            }
            return false;
        },
        totalMonthDays: function(date) {
            var days = new Date(date.getFullYear(), date.getMonth() + 1, 0);
            return days.getDate();
        },
        // returns a formatted string for a date object (ICU)
        dateFormat: function(date, format) {
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
    };

    // The plugin constructor
    function mdcDatePickerPlugin(container, options) {
        this.container = container;
        this.options = $.extend({}, defaults, options, helpers.getConfigData(container));
        this.pickerContainer = null;

        this._defaults = defaults;
        this._name = "mdcDatePicker";

        this.init();
    }

    $.extend(mdcDatePickerPlugin.prototype = {
        init: function() {
            if (!$(this.container).hasClass('has-datepicker')) {
                $(this.container).addClass('has-datepicker');
            }

            $(this.container).find('input').addClass('datepicker-input');

            if (typeof this.options.startDate === "string") {
                this.options.startDate = new Date(this.options.startDate);
            }
            if (typeof this.options.endDate === "string") {
                this.options.endDate = new Date(this.options.endDate);
            }
            if (typeof this.options.selectedDate === "string") {
                this.options.selectedDate = new Date(this.options.selectedDate);
            }

            if (helpers.getDateNumber(this.options.selectedDate) > helpers.getDateNumber(this.options.endDate) || helpers.getDateNumber(this.options.selectedDate) < helpers.getDateNumber(this.options.startDate)) {
                this.options.selectedDate = new Date(helpers.dateFormat(this.options.endDate, 'yyyy-MM-dd'));
                this.options.currentMonth = new Date(helpers.dateFormat(this.options.endDate, 'yyyy-MM-01'));
            }

            var yearsList = '';
            for (var i = this.options.startDate.getFullYear(); i <= this.options.endDate.getFullYear(); i++) {
                var thisYear = this.options.currentMonth.getFullYear();
                yearsList += '<div class="year-box"><button class="year-'+ i + (i == thisYear ? ' active' : '') + '" data-year="' + i + '">' + i + '</button></div>';
            }

            var pickerHTML = '<div class="mdc-datepicker-container">' +
                                '<div class="mdc-datepicker ' + this.options.color + '">' +
                                    '<div class="header">' +
                                        '<div class="label">' + this.options.label + '</div>' +
                                        '<div class="selected-date">' + helpers.dateFormat(this.options.selectedDate, '<span>EEE, </span>MMM d') + '</div>' +
                                    '</div>' +
                                    '<div class="mdc-calendar-controls">' +
                                        '<div class="selected-month">' + helpers.dateFormat(this.options.currentMonth, 'MMMM yyyy') + '</div>' +
                                        '<button class="material-icon dense toggle-years">arrow_drop_down</button>' +
                                        '<div class="month-controls">' +
                                            '<button class="material-icon dense prev">chevron_left</button>' +
                                            '<button class="material-icon dense next">chevron_right</button>' +
                                        '</div>' +
                                    '</div>' +
                                    helpers.renderMonth(this.options.currentMonth, this.options.selectedDate, this.options.startDate, this.options.endDate) +
                                    '<div class="years-list">' +
                                        '<div class="years-items">' + yearsList + '</div>' +
                                    '</div>' +
                                    '<div class="mdc-button-group">' +
                                        '<button class="mdc-button close-picker">Cancel</button>' +
                                        '<button class="mdc-button confirm-date">OK</button>' +
                                    '</div>' +
                                '</div>'+
                            '</div>';

            $(this.container).append(pickerHTML);

            this.pickerContainer = $(this.container).find('.mdc-datepicker-container');
            var viewport_width = document.documentElement.clientWidth || document.body.clientWidth;
            if (viewport_width >= 960) {
                this.pickerContainer.addClass('inline');
            }
            // this.pickerContainer.on('touchmove mousewheel DOMMouseScroll', function (event) {
            //     if ($(event.target).hasClass('years-list') || $(event.target).closest('.years-list').length) {
            //         event.stopPropagation();
            //         return;
            //     }
            //     event.preventDefault();
            // });
            this.pickerContainer.find('.mdc-datepicker > .years-list').overlayScrollbars({
                className: "os-theme-main"
            });;
        },
        changeMonth: function(x) {
            var options = this.options;

            var month = options.currentMonth.getMonth() + x;
            if (!helpers.canChangeMonth(options.currentMonth.getFullYear(), month, options.startDate, options.endDate)) {
                return;
            }
            this.options.currentMonth = new Date(options.currentMonth.getFullYear(), month, 1);
            helpers.updateCalendar(this.pickerContainer, this.options);
        },
        setYear: function(year) {
            var options = this.options;

            var month = options.currentMonth.getMonth();
            if (year == options.startDate.getFullYear() && month < options.startDate.getMonth()) {
                month = options.startDate.getMonth();
            }
            if (year == options.endDate.getFullYear() && month > options.endDate.getMonth()) {
                month = options.endDate.getMonth();
            }
            if (!helpers.canChangeMonth(year, month, options.startDate, options.endDate)) {
                return;
            }
    
            this.options.currentMonth = new Date(year, month, 1);
            helpers.updateCalendar(this.pickerContainer, this.options);
        },
        selectDate: function(dateString) {
            this.options.selectedDate = new Date(dateString);
            var dateAttr = helpers.dateFormat(this.options.selectedDate, 'yyyy-MM-dd');

            this.pickerContainer.find('.mdc-datepicker > .header > .selected-date').html(helpers.dateFormat(this.options.selectedDate, '<span>EEE, </span>MMM d'));
            this.pickerContainer.find('.mdc-datepicker > table.month-days td > .month-day.active').removeClass('active');
            this.pickerContainer.find(".mdc-datepicker > table.month-days td > .month-day[data-date='" + dateAttr + "']").addClass('active');
        },
        getSelectedDate: function () {
            return helpers.dateFormat(this.options.selectedDate, this.options.dateFormat);
        },
        close: function () {
            this.options.currentMonth = new Date(helpers.dateFormat(this.options.selectedDate, 'yyyy-MM-01'));
            this.pickerContainer.removeClass('active').children('.mdc-datepicker').removeClass('show-years');
        },
        open: function () {
            helpers.updateCalendar(this.pickerContainer, this.options);
            this.pickerContainer.addClass('active').removeAttr('style');
            if (this.pickerContainer.hasClass('inline')) {
                var viewport_width = document.documentElement.clientWidth || document.body.clientWidth;
                var viewport_height = document.documentElement.clientHeight || document.body.clientHeight;
    
                var menu_height = 280;
                var menu_width = 256;
                var menu_position = this.pickerContainer[0].getBoundingClientRect();
    
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
    
                if (this.pickerContainer.css('direction') == 'ltr') {
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
    
                this.pickerContainer.css(position);
            }
        }
    });

    // A really lightweight plugin wrapper around the constructor,
    // preventing against multiple instantiations
    $.fn.mdcDatePicker = function(userOptions) {
        return this.each(function () {
            if (!$.data(this, "plugin_mdcDatePicker")) {
                $.data(this, "plugin_mdcDatePicker", new mdcDatePickerPlugin(this, userOptions));
            }
        });
    };

    $.fn.mdcDatePicker.defaults = {
        startDate: new Date((new Date()).getFullYear() - 100, (new Date()).getMonth(), 1),
        endDate: new Date((new Date()).getFullYear() + 100, (new Date()).getMonth() + 1, 0),
        selectedDate: new Date(),
        currentMonth: new Date(),
        dateFormat: 'dd/MM/yyyy',
        color: 'purple-900',
        label: 'Select a date'
    };

})(jQuery, window, document);

jQuery(function($) {
    $('.has-datepicker').each(function() {
        $(this).mdcDatePicker();
    });

    $('html').on(md_click_event, function(event) {
        if ($('.mdc-datepicker-container.inline.active').length) {
            $('.mdc-datepicker-container.inline.active').each(function() {
                $(this).closest('.has-datepicker').data('plugin_mdcDatePicker').close();
            });
        }
    });

    $(window).on('resize', function(event) {
        if (window.innerWidth >= 960) {
            $('.mdc-datepicker-container').addClass('inline');
        } else {
            $('.mdc-datepicker-container').removeClass('inline');
        }

        if ($('.mdc-datepicker-container.active').length) {
            $('.mdc-datepicker-container.active').each(function() {
                $(this).closest('.has-datepicker').data('plugin_mdcDatePicker').close();
            });
        }
    });

    $(window).on('scroll', function(event) {
        if ($('.mdc-datepicker-container.inline.active').length) {
            $('.mdc-datepicker-container.inline.active').each(function() {
                $(this).closest('.has-datepicker').data('plugin_mdcDatePicker').close();
            });
        }
    });

    $('body').on(md_click_event, '.has-datepicker', function(event) {
        event.stopPropagation();
    });
    
    $('body').on('focus', '.has-datepicker input.datepicker-input', function(event) {
        event.preventDefault();
        $(this).trigger('blur');
        if ($(this).closest('.has-datepicker').find('.mdc-datepicker-container.active').length) {
            return false;
        }

        if ($('.mdc-datepicker-container.inline.active').length) {
            $('.mdc-datepicker-container.inline.active').each(function() {
                $(this).closest('.has-datepicker').data('plugin_mdcDatePicker').close();
            });
        }
        $(this).closest('.has-datepicker').data('plugin_mdcDatePicker').open();
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
        $(this).closest('.has-datepicker').data('plugin_mdcDatePicker').changeMonth(-1);
        return false;
    });

    $('body').on(md_click_event, '.mdc-datepicker-container .mdc-calendar-controls > .month-controls > .next', function(event) {
        if ( $(this).hasClass('disabled') || $(this).prop('disabled')) {
            return;
        }
        $(this).closest('.has-datepicker').data('plugin_mdcDatePicker').changeMonth(1);
        return false;
    });

    $('body').on(md_click_event, '.mdc-datepicker-container .years-list .year-box > button', function(event) {
        $(this).closest('.mdc-datepicker').removeClass('show-years');
        if ($(this).hasClass('active')) {
            return;
        }
        $(this).closest('.has-datepicker').data('plugin_mdcDatePicker').setYear($(this).attr('data-year'));
        return false;
    });

    $('body').on(md_click_event, '.mdc-datepicker-container table.month-days td > button.month-day', function(event) {
        if ($(this).hasClass('active') || $(this).hasClass('disabled') || $(this).prop('disabled')) {
            return;
        }
        $(this).closest('.has-datepicker').data('plugin_mdcDatePicker').selectDate($(this).attr('data-date'));
        if ($(this).closest('.mdc-datepicker-container').hasClass('inline')) {
            $(this).closest('.mdc-datepicker-container').find('.mdc-button-group > .mdc-button.confirm-date').trigger('click');
        }
        return false;
    });

    $('body').on(md_click_event, '.mdc-datepicker-container .mdc-button-group > .mdc-button.close-picker', function(event) {
        $(this).closest('.has-datepicker').data('plugin_mdcDatePicker').close();
        return false;
    });

    $('body').on(md_click_event, '.mdc-datepicker-container .mdc-button-group > .mdc-button.confirm-date', function(event) {
        var date = $(this).closest('.has-datepicker').data('plugin_mdcDatePicker').getSelectedDate();
        $(this).closest('.has-datepicker').find('input.datepicker-input').val(date).trigger('change');
        $(this).closest('.has-datepicker').data('plugin_mdcDatePicker').close();
        return false;
    });
});