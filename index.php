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
$topAppBarTitle = "Material Design v2 - Under Development";

$primaryColor = "indigo";
$accentColor = "blue";

$prefix = "";
$url = $prefix."index.php";
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
                <h1 class="article_title">Introduction</h1>
                <h5 class="text-secondary">Material Design is a visual language that synthesizes the classic principles of good design with the innovation of technology and science.</h5>
            </div>
        </div>
    </section>
</div>
<div class="mdc-divider"></div>
<div class="container">
    <section>
        <div class="row">
            <div class="col xlarge-6 large-9 medium-12">
                <h4>Goals</h4>
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/introduction/intro-illo-intro.png"></figure>
                <div class="space"></div>
            </div>
        </div>

        <div class="row">
            <div class="col xlarge-2 large-3 medium-4 small-4">
                <h6>Create</h6>
                <p class="text-secondary">Create a visual language that synthesizes the classic principles of good design with the innovation and possibility of technology and science.</p>
            </div>
            <div class="col xlarge-2 large-3 medium-4 small-4">
                <h6>Unify</h6>
                <p class="text-secondary">Develop a single underlying system that unifies the user experience across platforms, devices, and input methods.</p>
            </div>
            <div class="clearfix visible-smallext visible-small"></div>
            <div class="col xlarge-2 large-3 medium-4 small-4">
                <h6>Customize</h6>
                <p class="text-secondary">Expand Material’s visual language and provide a flexible foundation for innovation and brand expression.</p>
            </div>
        </div>

        <div class="row">
            <div class="col xlarge-6 large-9 medium-12">
                <div class="space"></div>
                <div class="mdc-divider"></div>
                <div class="space"></div>

                <h4>Principles</h4>
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/introduction/intro-illo-metaphor.png"></figure>
                <div class="space"></div>

                <h6>Material is the metaphor</h6>
                <p class="text-secondary">Material Design is inspired by the physical world and its textures, including how they reflect light and cast shadows. Material surfaces reimagine the mediums of paper and ink.</p>
                <div class="space"></div>
            </div>
        </div>

        <div class="row">
            <div class="col xlarge-3 large-4 medium-6 small-4">
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/introduction/intro-illo-bold.png"></figure>
                <h6>Bold, graphic, intentional</h6>
                <p class="text-secondary">Material Design is guided by print design methods — typography, grids, space, scale, color, and imagery — to create hierarchy, meaning, and focus that immerse viewers in the experience.</p>
                <div class="space"></div>
            </div>
            <div class="col xlarge-3 large-4 medium-6 small-4">
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/introduction/intro-illo-motion.png"></figure>
                <h6>Motion provides meaning</h6>
                <p class="text-secondary">Motion focuses attention and maintains continuity, through subtle feedback and coherent transitions. As elements appear on screen, they transform and reorganize the environment, with interactions generating new transformations.</p>
                <div class="space"></div>
            </div>
        </div>

        <div class="row">
            <div class="col xlarge-3 large-4 medium-6 small-4">
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/introduction/intro-illo-flexible.png"></figure>
                <h6>Flexible foundation</h6>
                <p class="text-secondary">The Material Design system is designed to enable brand expression. It’s integrated with a custom code base that allows the seamless implementation of components, plug-ins, and design elements.</p>
            </div>
            <div class="col xlarge-3 large-4 medium-6 small-4">
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/introduction/intro-illo-cross-platform.png"></figure>
                <h6>Cross-platform</h6>
                <p class="text-secondary">Material Design maintains the same UI across platforms, using shared components across Android, iOS, Flutter, and the web.</p>
            </div>
        </div>

        <div class="row">
            <div class="col xlarge-6 large-9 medium-12">
                <div class="space"></div>
                <div class="mdc-divider"></div>
                <div class="space"></div>

                <h4>Getting around</h4>
                <p class="text-secondary">Our comprehensive guidance helps you make beautiful products, faster. Design and build with new tools for customizing Material and sharing work, find inspiration in the Material studies, and express your product’s unique identity with Material Theming.</p>
                <p class="text-secondary">Find what you need by navigating across these three sections:</p>
                <div class="space"></div>
            </div>
        </div>

        <div class="row">
            <div class="col xlarge-2 large-3 medium-4 small-4">
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/introduction/intro-illo-system.png"></figure>
                <h6>Material System</h6>
                <p class="text-secondary">Our expanded and enhanced design system is unified with Material tools and components to improve workflow between design and development.</p>
            </div>
            <div class="col xlarge-2 large-3 medium-4 small-4">
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/introduction/intro-illo-foundation.png"></figure>
                <h6>Material Foundation</h6>
                <p class="text-secondary">Design and strategize how to build your app using Material Design architecture, while learning the principles and theory that underpin Material Design.</p>
            </div>
            <div class="clearfix visible-smallext visible-small"></div>
            <div class="col xlarge-2 large-3 medium-4 small-4">
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/introduction/intro-illo-guidance.png"></figure>
                <h6>Material Guidelines</h6>
                <p class="text-secondary">Customize and deploy a unique Material theme systematically across your product – from design to code.</p>
            </div>
        </div>

        <div class="row">
            <div class="col xlarge-6 large-9 medium-12">
                <div class="space"></div>
                <div class="space"></div>

                <p class="text-secondary">You can still view the <a href="https://material.io/archive/guidelines" target="_blank">previous set of Material Guidelines</a>.</p>
            </div>
        </div>
    </section>
</div>

</body>
</html>