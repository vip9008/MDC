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
$topAppBarTitle = "Environment - Light & shadows";

$primaryColor = "indigo";
$accentColor = "blue";

$prefix = "../";
$url = $prefix."environment/light-shadows.php";
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
                <h1 class="article_title">Light & shadows</h1>
                <h2 class="text-secondary">Material surfaces cast shadows when they obstruct light sources.</h2>
            </div>
        </div>
    </section>
</div>
<div class="mdc-divider"></div>
<div class="container">
    <section>
        <div class="row">
            <div class="col xlarge-6 large-9 medium-12">
                <h1 class="article_title">Light</h1>
                <div class="space"></div>
                <h1>Light and shadows</h1>
                <p class="text-secondary">In the Material Design environment, virtual lights illuminate the UI. Key lights create sharper, directional shadows, called key shadows. Ambient light appears from all angles to create diffused, soft shadows, called ambient shadows.</p>
            </div>
        </div>
        <div class="row">
            <div class="col xlarge-3 large-4 medium-6 small-4">
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/environment_elevation/lightshadows-1.png"></figure>
                <p class="text-secondary">Shadow cast by a key light.</p>
                <div class="space"></div>
            </div>
            <div class="col xlarge-3 large-4 medium-6 small-4">
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/environment_elevation/lightshadows-2.png"></figure>
                <p class="text-secondary">Shadow cast by ambient light.</p>
                <div class="space"></div>
            </div>
        </div>
        <div class="row">
            <div class="col xlarge-3 large-4 medium-6 small-4">
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/environment_elevation/lightshadows-3.png"></figure>
                <p class="text-secondary">Combined shadow from key and ambient lights.</p>
                <div class="space"></div>
            </div>
            <div class="col xlarge-3 large-4 medium-6 small-4">
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/environment_elevation/lightshadows-4.png"></figure>
                <p class="text-secondary">Elements use shadows on dark surfaces, even if they are less visible.</p>
                <div class="space"></div>
            </div>
        </div>
        <div class="row">
            <div class="col xlarge-6 large-8 medium-12">
                <div class="mdc-divider"></div>
                <div class="space"></div>
            </div>
        </div>
        <div class="row">
            <div class="col xlarge-6 large-9 medium-12">
                <h1>Light sources</h1>
                <p class="text-secondary">Shadows in the Material environment are cast by a key light and ambient light. In Android and iOS development, shadows occur when light sources are blocked by Material surfaces at various positions along the z-axis. On the web, shadows are depicted by manipulating the y-axis only. The following example shows a card with an elevation of 6dp.</p>
            </div>
        </div>
    </section>
</div>
<div class="mdc-divider"></div>
<div class="container">
    <section>
        <div class="row">
            <div class="col xlarge-6 large-9 medium-12">
                <h1 class="article_title">Shadows</h1>
                <p class="text-secondary">Shadows provide cues about depth, direction of movement, and surface edges. A surface’s shadow is determined by its elevation and relationship to other surfaces.</p>

                <div class="space"></div>

                <h1>Usage</h1>
                <p class="text-secondary">Because shadows express the degree of elevation between surfaces, they must be used consistently throughout your product.</p>

                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/environment_elevation/shadowprinciples-do-1.png"></figure>
                <p class="text-secondary">Elevation is depicted by consistent use of shadow.</p>
                <div class="space"></div>

                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/environment_elevation/shadowprinciples-do-2.png"></figure>
                <p class="text-secondary">Shadow size reflects elevation. Surfaces at higher elevations have larger shadows, while those at lower elevations have smaller shadows.</p>

                <div class="space"></div>
                <div class="mdc-divider"></div>
                <div class="space"></div>

                <h1>Shadows & Motion</h1>
                <p class="text-secondary">Shadows provide useful cues about an surface’s direction of movement and whether the distance between surfaces is increasing or decreasing.</p>
            </div>
        </div>
    </section>
</div>

</body>
</html>