$(document).ready(function() {
    $('pre.html').each(function(i, block) {
        hljs.highlightBlock(block);
    });
});