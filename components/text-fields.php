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
                <h1 class="article_title">Text fields</h1>
                <h5 class="text-secondary">A divider is a thin line that groups content in lists and layouts.</h5>

                <div class="mdc-text-field blue">
                    <input type="text" class="input">
                    <label class="label">Default</label>
                </div>

                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/component_dividers/divider-intro.png"></figure>
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
                <p class="text-secondary">Dividers separate content into clear groups.</p>
            </div>
        </div>
    </section>
    <section>
        <div class="row">
            <div class="col xlarge-6 large-9 medium-12">
                <h4>Principles</h4>
            </div>
        </div>
        <div class="row">
            <div class="col xlarge-2 large-3 medium-4 small-4">
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/component_dividers/divider-illos-03.png"></figure>
                <h6>Subtle</h6>
                <p class="text-secondary">Dividers should be noticeable in a layout, but not jarring.</p>
            </div>
            <div class="col xlarge-2 large-3 medium-4 small-4">
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/component_dividers/divider-illos-04.png"></figure>
                <h6>Secondary</h6>
                <p class="text-secondary">Dividers should only be used if elements cannot be separated using white space.</p>
            </div>
            <div class="clearfix visible-smallext visible-small"></div>
            <div class="col xlarge-2 large-3 medium-4 small-4">
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/component_dividers/divider-illos-05.png"></figure>
                <h6>Infrequent</h6>
                <p class="text-secondary">Use dividers sparingly, to create groupings rather than separate items.</p>
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
            </div>
        </div>
        <div class="row">
            <div class="col xlarge-3 large-4 medium-6 small-4">
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/component_dividers/dividers-full.png"></figure>
                <h6>Full-bleed dividers</h6>
                <p class="text-secondary">Full-bleed dividers separate content into sections and span the entire length of a layout.</p>
            </div>
            <div class="col xlarge-3 large-4 medium-6 small-4">
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/component_dividers/dividers.png"></figure>
                <h6>Inset dividers</h6>
                <p class="text-secondary">Inset dividers separate related content, anchored by elements that align with the app bar title.</p>
            </div>
        </div>
    </section>
</div>

</body>
</html>