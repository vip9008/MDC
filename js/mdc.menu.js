MDC.menuCloseAll = function() {
    $('.mdc-menu-container.active').each(function() {
        MDC.menuClose($(this));
    });
}

MDC.menuClose = function(selector) {
    $(selector).trigger('MDC.menuClose').removeClass('active').find('.menu-button').removeClass('active');
}

jQuery(function() {
    $(window).on('resize scroll', function(event) {
        MDC.menuCloseAll();
    });
    
    $('body').on(md_click_event, function(event) {
        MDC.menuCloseAll();
    });

    $('body').on(md_click_event, '.mdc-menu-container .mdc-list-container', function(event) {
        event.stopPropagation();
    });

    $('body').on(md_click_event, '.mdc-menu-container .menu-button', function(event) {
        event.stopPropagation();

        var menu_container = $(this).closest('.mdc-menu-container');

        if ($(menu_container).hasClass('active')) {
            if ($(this).hasClass('mdc-text-field') && ($(this).hasClass('mdc-searchable') || $(this).hasClass('mdc-editable'))) {
                return false;
            }

            MDC.menuClose(menu_container);
            return false;
        }

        MDC.menuCloseAll();

        // $(menu_container).removeClass('bottom reverse').find('.mdc-list-container').removeAttr('style');
        $(menu_container).find('.mdc-list-container').removeAttr('style');

        if ($(this).hasClass('disabled') || $(this).is(':disabled')) {
            return false;
        }

        var viewport_width = document.documentElement.clientWidth || document.body.clientWidth;
        var viewport_height = document.documentElement.clientHeight || document.body.clientHeight;

        var menu = $(menu_container).find('.mdc-list-container');
        var menu_height = $(menu).outerHeight();
        var menu_width = $(this).hasClass('mdc-text-field') ? $(this).outerWidth() : $(menu).outerWidth();
        var menu_position = $(menu)[0].getBoundingClientRect();

        var position = {
            top: "auto",
            right: "auto",
            bottom: "auto",
            left: "auto",
            width: "auto",
            minWidth: "auto",
            maxWidth: "none",
            position: "fixed"
        };

        if ((menu_position.top + menu_height) > viewport_height) {
            // $(menu_container).addClass('bottom');
            position.bottom = 16;
        } else {
            position.top = menu_position.top;
        }

        position.width = menu_width;

        if ($(menu).css('direction') == 'ltr') {
            position.left = menu_position.left;
            position.right = "auto";
            if ((menu_position.left + menu_width) > viewport_width) {
                // $(menu_container).addClass('reverse');
                position.right = 16;
                position.left = "auto";
            }
        } else {
            position.right = viewport_width - menu_position.right;
            position.left = "auto";
            if ((menu_position.right - menu_width) < 0) {
                // $(menu_container).addClass('reverse');
                position.left = 16;
                position.right = "auto";
            }
        }

        $(menu).css(position);

        $(menu_container).addClass('active');
        $(this).addClass('active');

        return false;
    });

    $('body').on('keyup', '.mdc-menu-container.select-menu .mdc-text-field.mdc-searchable > .input > input', function(event) {
        var filter = $(this).val().toUpperCase().replace("'", '');
        var found = false;
        var container = $(this).closest('.select-menu');
        $(container).find('.mdc-list-container .mdc-list-item').each(function() {
            if ($(this).children('.text').text().toUpperCase().replace("'", '').indexOf(filter) > -1) {
                $(this).removeClass('hidden');
                found = true;
            } else {
                $(this).addClass('hidden');
            }
        });
        if (!found) {
            $(container).find('.mdc-list-container .mdc-error-message').addClass('visible');
        } else {
            $(container).find('.mdc-list-container .mdc-error-message').removeClass('visible');
        }
    });

    $('body').on(md_click_event, '.mdc-menu-container.select-menu .mdc-list-container button.mdc-list-item, .mdc-menu-container.select-menu .mdc-list-container a.mdc-list-item, .mdc-menu-container.select-menu .mdc-list-container .mdc-list-item.interactive', function(event) {
        var container = $(this).closest('.select-menu');

        if ($(this).hasClass('selected')) {
            MDC.menuClose(container);
            return false;
        } else {
            $(container).find('.mdc-list-item.selected').removeClass('selected');
        }

        var value = $(this).addClass('selected').attr('data-value');
        var text = $(this).attr('data-label');
        var input = $(container).find('.mdc-text-field').children('.input').children().first();

        if ($(input).prop("tagName").toLowerCase() == 'input') {
            $(input).val(text);
        } else {
            $(input).text(text);
        }

        if (text.length) {
            $(container).find('.mdc-text-field').addClass('focus');
        } else {
            $(container).find('.mdc-text-field').removeClass('focus');
        }

        $(container).find('.mdc-text-field').children('.select-value').val(value);
        MDC.menuClose(container);
    });

    $('body').on('MDC.menuClose', '.mdc-menu-container.select-menu', function(event) {
        var field = $(this).find('.mdc-text-field');

        if ($(field).hasClass('mdc-searchable')) {
            $(this).find('.mdc-list-container .mdc-list-item').removeClass('hidden').removeClass('visible');
            var selected = $(this).find('.mdc-list-container .mdc-list-item.selected');
            if ($(selected).length) {
                $(field).children('.input').children('input').val($(selected).attr('data-label')).trigger('change');
            } else {
                $(field).children('.input').children('input').val('').trigger('change');
            }

            return;
        }
    });
});