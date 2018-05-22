<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title><?= $head_title ?></title>

    <!-- Material Grid -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,400i,500,500i,700,700i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <?php foreach ($css_files as $file) { ?>
    <link href="<?= $file ?>" rel="stylesheet">
    <?php } ?>
    <link href="css/style.css" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
    <?php foreach ($js_files as $file) { ?>
    <script src="<?= $file ?>"></script>
    <?php } ?>
    <script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/highlight.min.js"></script>
    <script src="js/script.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#mdc-nav-drawer a.mdc-list-item[href="<?= $url ?>"]')
            .addClass('active bold')
            .closest('.mdc-list-group.collapsed')
            .addClass('bold')
            .children('.mdc-list-item')
            .click();
        });
    </script>
</head>