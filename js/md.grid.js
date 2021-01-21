// initialize MDC object
const MDC = {};

function md_touch_handler(event)
{
    var touches = event.changedTouches,
        first = touches[0],
        type = "";
    switch(event.type)
    {
        case "touchstart": type = "click"; break;
        case "touchmove": type = "mousemove"; break;        
        case "touchend": type = "mouseup"; event.preventDefault(); break;
        default: return;
    }

    // initMouseEvent(type, canBubble, cancelable, view, clickCount, 
    //                screenX, screenY, clientX, clientY, ctrlKey, 
    //                altKey, shiftKey, metaKey, button, relatedTarget);

    var simulatedEvent = document.createEvent("MouseEvent");
    simulatedEvent.initMouseEvent(type, true, true, window, 1, 
                                  first.screenX, first.screenY, 
                                  first.clientX, first.clientY, false, 
                                  false, false, false, 0, null);

    first.target.dispatchEvent(simulatedEvent);
}

function md_init()
{
    document.addEventListener("touchstart", md_touch_handler, true);
    // document.addEventListener("touchmove", md_touch_handler, true);
    document.addEventListener("touchend", md_touch_handler, true);
    // document.addEventListener("touchcancel", md_touch_handler, true);
}

// md_init();

// var md_click_event = (function() {
//     if ('ontouchstart' in document.documentElement === true) {
//         return 'touchstart';
//     }
//     else {
//         return 'click';
//     }
// })();

var md_click_event = 'click';

function overlayScrollbarsInit(selector) {
    $(selector).overlayScrollbars({
        className: "os-theme-main",
        callbacks: {
            onScroll: function(eventArgs) {
                $(this.getElements().host).trigger('scroll');
            }
        }
    });
}

jQuery(function($) {
    overlayScrollbarsInit('.overlay-scrollbars');
});