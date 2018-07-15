<?php
$language = "en-US";
$direction = "ltr";

$css_files = [
];
$js_files = [
];

$head_title = "MDC v2";

$topAppBarColor = "bg-blue-grey-900";
$topAppBarTitle = "Layout - Understanding layout";

$primaryColor = "indigo";
$accentColor = "blue";

$prefix = "../";
$url = $prefix."layout/understanding-layout.php";
?>

<!DOCTYPE html>
<html lang="<?= $language ?>" dir="<?= $direction ?>">

<?php include $prefix."_includes/head.php"; ?>

<body class="mdc-drawer-expand">

<?php include $prefix."_includes/drawer.php"; ?>
<?php include $prefix."_includes/app_bar.php"; ?>

<div class="container">
    <section>
        <div class="row">
            <div class="col xlarge-6 large-9 medium-12">
                <h1 class="article_title">Understanding layout</h1>
                <h5 class="text-secondary">Material Design layouts encourage consistency across platforms, environments, and screen sizes by using uniform elements and spacing.</h5>
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

                <h4>Principles</h4>
            </div>
        </div>
        <div class="row">
            <div class="col xlarge-2 large-3 medium-4 small-4">
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/layout_understanding_layout/01-intuitive-structure.png"></figure>
                <h6>Predictable</h6>
                <p class="text-secondary">UIs should use intuitive and predictable layouts, with consistent UI regions and spatial organization.</p>
            </div>
            <div class="col xlarge-2 large-3 medium-4 small-4">
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/layout_understanding_layout/03-consistency.png"></figure>
                <h6>Consistent</h6>
                <p class="text-secondary">Layouts should use a consistent grid, keylines, and padding.</p>
            </div>
            <div class="clearfix visible-smallext visible-small"></div>
            <div class="col xlarge-2 large-3 medium-4 small-4">
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/layout_understanding_layout/04-reactiveness.png"></figure>
                <h6>Responsive</h6>
                <p class="text-secondary">Layouts are adaptive and react to input from the user, device, and screen elements.</p>
            </div>
        </div>

        <div class="row">
            <div class="col xlarge-6 large-9 medium-12">
                <div class="space"></div>
                <div class="mdc-divider"></div>
                <div class="space"></div>

                <h4>Structure</h4>
                <p class="text-secondary">Material Design layouts are visually balanced. Most measurements align to an 8dp grid applied, which aligns both spacing and the overall layout.</p>
                <p class="text-secondary">Smaller components, such as iconography and typography, can align to a 4dp grid.</p>

                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/layout_understanding_layout/layout-unitsmeasurements-dev-grid.png"></figure>
                <p class="text-secondary">8dp and 4dp units</p>
            </div>
        </div>
    </section>
</div>
<div class="mdc-divider"></div>
<div class="container">
    <section>
        <div class="row">
            <div class="col xlarge-6 large-9 medium-12">
                <h1 class="article_title">Pixel density</h1>
                <p class="text-secondary">Screen pixel density and resolution vary depending on the platform. Device-independent pixels and scalable pixels are units that provide a flexible way to accommodate a design across platforms.</p>
                <div class="space"></div>

                <h4>Calculating pixel density</h4>
                <p class="text-secondary">The number of pixels that fit into an inch is referred to as pixel density. High-density screens have more pixels per inch than low-density ones. As a result, UI elements of the same pixel dimensions appear larger on low-density screens, and smaller on high-density screens.</p>
                <p class="text-secondary">To calculate screen density, you can use this equation:</p>
                <p class="text-secondary">Screen density = Screen width (or height) in pixels / Screen width (or height) in inches</p>
            </div>
        </div>
        <div class="row">
            <div class="col xlarge-3 large-4 medium-6 small-4">
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/layout_understanding_layout/layout-unitsmeasurements-pixeldensity-high.png"></figure>
                <p class="text-secondary">High-density display</p>
            </div>
            <div class="col xlarge-3 large-4 medium-6 small-4">
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/layout_understanding_layout/layout-unitsmeasurements-pixeldensity-lower.png"></figure>
                <p class="text-secondary">Lower density display</p>
            </div>
        </div>

        <div class="row">
            <div class="col xlarge-6 large-9 medium-12">
                <div class="space"></div>
                <div class="mdc-divider"></div>
                <div class="space"></div>

                <h4>Density independence</h4>
                <p class="text-secondary">Density independence refers to the uniform display of UI elements on screens with different densities.</p>
                <p class="text-secondary">Density-independent pixels, written as dp (pronounced “dips”), are flexible units that scale to have uniform dimensions on any screen. Material UIs use density-independent pixels to display elements consistently on screens with different densities.</p>

                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/layout_understanding_layout/layout-unitsmeasurements-pixeldensity-lowhigh.png"></figure>
                <ol class="text-secondary">
                    <li>Low-density screen displayed with density independence</li>
                    <li>High-density screen displayed with density independence</li>
                </ol>

                <div class="space"></div>
                <div class="mdc-divider"></div>
                <div class="space"></div>

                <h4>Pixel density on the web</h4>
                <div class="space"></div>

                <h6>Logical resolution</h6>
                <p class="text-secondary">Use the device's logical resolution, which scales to the device's screen resolution.</p>

                <h6>Units for the web</h6>
                <p class="text-secondary">When designing for the web, replace dp with rem.</p>
            </div>
        </div>
    </section>
</div>

<?php include $prefix."_includes/footer.php"; ?>

</body>
</html>