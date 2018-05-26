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
];
$js_files = [
    "js/mdc.list.js",
    "js/mdc.nav.drawer.js",
    "js/mdc.top.app.bar.js",
];

$head_title = "MDC v2";

$topAppBarColor = "bg-blue-grey-900";
$topAppBarTitle = "Color - Color usage";

$primaryColor = "indigo";
$accentColor = "blue";

$prefix = "../";
$url = $prefix."color/color-usage.php";
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
                <h1 class="article_title">Color usage</h1>
                <h2 class="text-secondary">Color helps express hierarchy, establish brand presence, give meaning, and indicate element states.</h2>
            </div>
        </div>
    </section>
</div>
<div class="mdc-divider"></div>
<div class="container">
    <section>
        <div class="row">
            <div class="col xlarge-6 large-9 medium-12">
                <h1 class="article_title">Hierarchy</h1>
                <div class="space"></div>
                <p class="text-secondary">In Material Design, color draws attention to specific elements on-screen. When an element’s color contrasts with its surroundings, that element stands out, so users can tell it’s important. Because color themes vary – from bold and bright, to monochromatic or muted – there are different ways to indicate which elements have greater importance.</p>
                <p class="text-secondary">For example, black icons stand out when they are placed against a white background. Multicolored cards draw attention to themselves when placed next to monochromatic colors.</p>
                <div class="space"></div>
            </div>
        </div>
    </section>
</div>

</body>
</html>