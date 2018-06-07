var md_click_event = (function() {
    if ('ontouchstart' in document.documentElement === true) {
        return 'touchstart';
    }
    else {
        return 'click';
    }
})();