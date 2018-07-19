function mdc_close_menus() {
    $('.mdc-menu-container.active').each(function() {
        mdc_close_menu($(this));
    });
}

function mdc_close_menu(selector) {
    $(selector).trigger('mdcMenuClose').removeClass('active').find('.menu-button').removeClass('active');
}

$(document).ready(function() {
    $('html').on(md_click_event, function(event) {
        mdc_close_menus();
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

            mdc_close_menu(menu_container);
            return false;
        }

        mdc_close_menus();

        $(menu_container).removeClass('bottom reverse');

        if ($(this).hasClass('disabled') || $(this).is(':disabled')) {
            return false;
        }

        var viewport_width = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
        var viewport_height = window.innerHeight || document.documentElement.clientHeight || document.body.clientHeight;

        var menu = $(menu_container).find('.mdc-list-container');
        var menu_height = $(menu).outerHeight();
        var menu_width = $(menu).outerWidth();
        var menu_position = $(menu)[0].getBoundingClientRect();

        if ((menu_position.top + menu_height) > viewport_height) {
            $(menu_container).addClass('bottom');
        }

        if (parseInt($(menu).css('left')) == 0) {
            if ((menu_position.left + menu_width) > viewport_width) {
                $(menu_container).addClass('reverse');
            }
        } else {
            if ((menu_position.right - menu_width) < 0) {
                $(menu_container).addClass('reverse');
            }
        }

        $(menu_container).addClass('active');
        $(this).addClass('active');
    });

    $('body').on('keyup', '.mdc-menu-container.select-menu .mdc-text-field.mdc-searchable > .input', function(event) {
        var filter = $(this).val().toUpperCase().replace("'", '');
        var found = false;
        $(this).closest('.select-menu').find('.mdc-list-container .mdc-list-item').each(function() {
            if ($(this).children('.text').text().toUpperCase().replace("'", '').indexOf(filter) > -1) {
                $(this).removeClass('hidden');
                found = true;
            } else {
                $(this).addClass('hidden');
            }
        });
        if (!found) {
            $(this).closest('.select-menu').find('.mdc-list-container .mdc-error-message').addClass('visible');
        } else {
            $(this).closest('.select-menu').find('.mdc-list-container .mdc-error-message').removeClass('visible');
        }
    });

    $('body').on(md_click_event, '.mdc-menu-container.select-menu .mdc-list-container button.mdc-list-item, .mdc-menu-container.select-menu .mdc-list-container a.mdc-list-item, .mdc-menu-container.select-menu .mdc-list-container .mdc-list-item.interactive', function(event) {
        var container = $(this).closest('.select-menu');

        if ($(this).hasClass('selected')) {
            mdc_close_menu(container);
            return false;
        } else {
            $(container).find('.mdc-list-item.selected').removeClass('selected');
        }

        var value = $(this).addClass('selected').attr('data-value');
        var text = $(this).attr('data-label');
        var input = $(container).find('.mdc-text-field').children('.input');

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
        mdc_close_menu(container);
    });

    $('body').on('mdcMenuClose', '.mdc-menu-container.select-menu', function(event) {
        var field = $(this).find('.mdc-text-field');

        if ($(field).hasClass('mdc-searchable')) {
            $(this).find('.mdc-list-container .mdc-list-item').removeClass('hidden').removeClass('visible');
            var selected = $(this).find('.mdc-list-container .mdc-list-item.selected');
            if ($(selected).length) {
                $(field).children('.input').val($(selected).attr('data-label')).trigger('change');
            } else {
                $(field).children('.input').val('').trigger('change');
            }

            return;
        }
    });
});