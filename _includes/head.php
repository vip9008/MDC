<?php
$initial_css_files = [
    "css/md.grid.css",
    "css/md.colors.css",
    "css/mdc.divider.css",
    "css/mdc.nav.drawer.css",
    "css/mdc.top.app.bar.css",
    "css/mdc.list.css",
    "css/mdc.menu.css",
    "css/mdc.button.css",
    "css/mdc.selection.control.css",
];
$initial_js_files = [
    "js/md.grid.js",
    "js/mdc.nav.drawer.js",
    "js/mdc.top.app.bar.js",
    "js/mdc.list.js",
    "js/mdc.menu.js",
    "js/mdc.button.js",
    "js/mdc.selection.control.js",
];
?>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title><?= $head_title ?></title>

    <!-- Material Grid -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,400i,500,500i,700,700i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <?php foreach ($initial_css_files as $file) { ?>
    <link href="<?= $prefix.$file ?>" rel="stylesheet">
    <?php } ?>

    <?php foreach ($css_files as $file) { ?>
    <link href="<?= $prefix.$file ?>" rel="stylesheet">
    <?php } ?>

    <link href="<?= $prefix ?>css/style.css" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>

    <?php foreach ($initial_js_files as $file) { ?>
    <script src="<?= $prefix.$file ?>"></script>
    <?php } ?>

    <?php foreach ($js_files as $file) { ?>
    <script src="<?= $prefix.$file ?>"></script>
    <?php } ?>

    <script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/highlight.min.js"></script>
    <script src="<?= $prefix ?>js/script.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#mdc-nav-drawer a.mdc-list-item[href="<?= $url ?>"]')
            .addClass('active bold')
            .closest('.mdc-list-group.collapsed')
            .children('.mdc-list-item')
            .addClass('active bold')
            .click();
        });
    </script>
</head>