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
$topAppBarTitle = "Environment - Surfaces";

$primaryColor = "indigo";
$accentColor = "blue";

$prefix = "../";
$url = $prefix."environment/surfaces.php";
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
                <h1 class="article_title">Surfaces</h1>
                <div class="space"></div>
                <h2 class="text-secondary">Material Design has three-dimensional qualities that are reflected in its use of surfaces, depth, and shadows.</h2>
            </div>
        </div>
    </section>
</div>
<div class="mdc-divider"></div>
<div class="container">
    <section>
        <div class="row">
            <div class="col xlarge-6 large-9 medium-12">
                <h1 class="article_title">Material environment</h1>
                <div class="space"></div>
                <h1>The physical world</h1>
                <p class="text-secondary">In the physical world, objects can be stacked or attached to one another, but cannot pass through each other. They cast shadows and reflect light.</p>
                <p class="text-secondary">Material Design reflects these qualities in how surfaces are displayed and move across the Material UI. Surfaces, and how they move in three dimensions, are communicated in ways that resemble how they move in the physical world. This spatial model can also be applied consistently across apps.</p>
                <div class="space"></div>
            </div>
        </div>
        <div class="row">
            <div class="col xlarge-6 large-9 medium-12">
                <div class="mdc-divider"></div>
            </div>
        </div>
        <div class="row">
            <div class="col xlarge-6 large-9 medium-12">
                <div class="space"></div>
                <h1>Depth</h1>
                <p class="text-secondary">In the physical world, objects can be stacked or attached to one another, but cannot pass through each other. They cast shadows and reflect light.</p>
                <p class="text-secondary">Material Design reflects these qualities in how surfaces are displayed and move across the Material UI. Surfaces, and how they move in three dimensions, are communicated in ways that resemble how they move in the physical world. This spatial model can also be applied consistently across apps.</p>
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/environment_surfaces/whatismaterial-environment-3d.png"></figure>
                <p class="text-secondary">3D space with x, y, and z axes</p>
            </div>
        </div>
    </section>
</div>
<div class="mdc-divider"></div>
<div class="container">
    <section>
        <div class="row">
            <div class="col xlarge-6 large-9 medium-12">
                <h1 class="article_title">Properties</h1>
                <div class="space"></div>
                <h2 class="text-secondary">Material surfaces have consistent, unchangeable characteristics and behaviors across Material Design.</h2>
                <div class="space"></div>
                <h1>Dimensions</h1>
                <p class="text-secondary">Material has varying x & y dimensions (measured in dp) and a uniform thickness (1dp).</p>
            </div>
        </div>
        <div class="row">
            <div class="col xlarge-3 large-4 medium-6 small-4">
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/environment_surfaces/dividers-full.png"></figure>
                <h3>Full-bleed dividers</h3>
                <p class="text-secondary">Full-bleed dividers separate content into sections and span the entire length of a layout.</p>
            </div>
            <div class="col xlarge-3 large-4 medium-6 small-4">
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/environment_surfaces/dividers.png"></figure>
                <h3>Inset dividers</h3>
                <p class="text-secondary">Inset dividers separate related content, anchored by elements that align with the app bar title.</p>
            </div>
        </div>
    </section>
</div>

</body>
</html>