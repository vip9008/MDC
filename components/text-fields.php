<?php
$language = "en-US";
$direction = "ltr";

$css_files = [
    "css/md.grid.flex.css",
    "css/md.colors.css",
    "css/mdc.divider.css",
    "css/mdc.nav.drawer.css",
    "css/mdc.top.app.bar.css",
    "css/mdc.list.css",
    "css/mdc.text.field.css",
];
$js_files = [
    "js/mdc.list.js",
    "js/mdc.nav.drawer.js",
    "js/mdc.top.app.bar.js",
    "js/mdc.text.field.js",
];

$head_title = "MDC v2";

$topAppBarColor = "bg-blue-grey-900";
$topAppBarTitle = "Components - Text fields";

$primaryColor = "indigo";
$accentColor = "blue";

$prefix = "../";
$url = $prefix."components/text-fields.php";
?>

<!DOCTYPE html>
<html lang="<?= $language ?>" dir="<?= $direction ?>">

<?php include $prefix."_includes/head.php"; ?>

<body>

<?php include $prefix."_includes/drawer.php"; ?>
<?php include $prefix."_includes/app_bar.php"; ?>

<div class="container">
    <section>
        <div class="row">
            <div class="col xlarge-6 large-9 medium-12">

                <div class="mdc-text-field orange">
                    <input type="text" class="input">
                    <label class="label">Default</label>
                    <div class="help-block">Help text here</div>
                </div>

                <div class="mdc-text-field orange">
                    <div class="material-icon">person</div>
                    <input type="text" class="input">
                    <label class="label">Default</label>
                    <div class="help-block">Help text here</div>
                </div>

                <div class="mdc-text-field orange">
                    <div class="material-icon trailing">person</div>
                    <input type="text" class="input">
                    <label class="label">Default</label>
                    <div class="help-block">Help text here</div>
                </div>

                <h1 class="article_title">Text fields</h1>
                <h5 class="text-secondary">Text fields let users enter and edit text.</h5>

                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/component_text_fields/textfields-intro.png"></figure>
            </div>
        </div>
    </section>
</div>
<div class="mdc-divider"></div>
<div class="container">
    <section>
        <div class="row">
            <div class="col xlarge-6 large-9 medium-12">
                <h1 class="article_title">Usage</h1>
                <div class="space"></div>

                <p class="text-secondary">Text fields allow users to enter text into a UI. They typically appear in forms and dialogs.</p>
                <div class="space"></div>

                <h4>Principles</h4>
            </div>
        </div>
        <div class="row">
            <div class="col xlarge-2 large-3 medium-4 small-4">
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/component_text_fields/textfield-illo-01.png"></figure>
                <h6>Discoverable</h6>
                <p class="text-secondary">Text fields should stand out and indicate that users can input information.</p>
            </div>
            <div class="col xlarge-2 large-3 medium-4 small-4">
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/component_text_fields/textfield-illo-02.png"></figure>
                <h6>Clear</h6>
                <p class="text-secondary">Text field states should be clearly differentiated from one another.</p>
            </div>
            <div class="clearfix visible-smallext visible-small"></div>
            <div class="col xlarge-2 large-3 medium-4 small-4">
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/component_text_fields/textfield-illo-03.png"></figure>
                <h6>Efficient</h6>
                <p class="text-secondary">Text fields should make it easy to understand the requested information and to address any errors.</p>
            </div>
        </div>
    </section>

    <div class="row">
        <div class="col xlarge-6 large-9 medium-12">
            <div class="mdc-divider"></div>
        </div>
    </div>

    <section>
        <div class="row">
            <div class="col xlarge-6 large-9 medium-12">
                <h4>Types</h4>
                <p class="text-secondary">Text fields come in two types:</p>
                <ul class="text-secondary">
                    <li>Filled text fields</li>
                    <li>Outlined text fields</li>
                </ul>
                <p class="text-secondary">Both types of text fields use a container to provide a clear affordance for interaction, making the fields discoverable in layouts.</p>

                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/component_text_fields/textfields-types.png"></figure>
                <ol class="text-secondary">
                    <li>Filled text fields</li>
                    <li>Outlined text fields</li>
                </ol>

                <div class="space"></div>
                <div class="mdc-divider"></div>
                <div class="space"></div>
            </div>
        </div>
    </section>
</div>

</body>
</html>