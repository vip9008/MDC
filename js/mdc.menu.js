function mdc_close_menu(selector) {
    $(selector).removeClass('active').find('.menu-button').removeClass('active');
}

$(document).ready(function() {
    $('html').on('click', function(event) {
        $('.mdc-menu-container.active').removeClass('active').find('.menu-button').removeClass('active');
    });

    $('body').on('click', '.mdc-menu-container .mdc-list-container', function(event) {
        event.stopPropagation();
    });

    $('body').on('click', '.mdc-menu-container .menu-button', function(event) {
        event.stopPropagation();

        var menu_container = $(this).closest('.mdc-menu-container');

        if ($(menu_container).hasClass('active')) {
            $(menu_container).removeClass('active');
            $(this).removeClass('active');
            return false;
        }

        $('.mdc-menu-container.active').removeClass('active');

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

    $('body').on('click', '.mdc-menu-container.select-menu .mdc-list-container button.mdc-list-item, .mdc-menu-container.select-menu .mdc-list-container a.mdc-list-item, .mdc-menu-container.select-menu .mdc-list-container .mdc-list-item.interactive', function(event) {
        if ($(this).hasClass('selected')) {
            return false;
        } else {
            $(this).closest('.mdc-menu-container').find('.mdc-list-item').removeClass('selected');
        }

        var value = $(this).addClass('selected').attr('data-value');
        var text = $(this).children('.text').text();
        var container = $(this).closest('.select-menu');
        var input = $(container).children('.mdc-text-field').children('.input');

        if ($(input).is('input')) {
            $(input).val(text);
        } else {
            $(input).text(text);
        }

        if (text.length) {
            $(container).children('.mdc-text-field').addClass('focus');
        } else {
            $(container).children('.mdc-text-field').removeClass('focus');
        }

        $(container).children('.mdc-text-field').children('.select-value').val(value);
        mdc_close_menu(container);
    });
});