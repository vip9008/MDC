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
$topAppBarTitle = "Color - The color system";

$primaryColor = "indigo";
$accentColor = "blue";

$prefix = "../";
$url = $prefix."color/the-color-system.php";
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
                <h1 class="article_title">The color system</h1>
                <h2 class="text-secondary">The Material Design color system can be used to create a color theme that reflects your brand or style.</h2>
            </div>
        </div>
    </section>
</div>
<div class="mdc-divider"></div>
<div class="container">
    <section>
        <div class="row">
            <div class="col xlarge-6 large-9 medium-12">
                <h1 class="article_title">Color usage and palettes</h1>
                <div class="space"></div>
                <p class="text-secondary">The Material Design color system uses an organized approach to applying color to your UI. In this system, a primary and a secondary color are typically selected to represent your brand. Dark and light variants of each color can then be applied to your UI in different ways.</p>
                <div class="space"></div>
                <h3>Colors and theming</h2>
                <p class="text-secondary">Your app’s primary and secondary colors, and their variants, help create a color theme that is harmonious, ensures accessible text, and distinguishes UI elements and surfaces from one another.</p>
                <p class="text-secondary">To select primary and secondary colors, and generate light and dark variants of each, use the Material Design palette tool, Theme Editor, or 2014 Material Design palettes.</p>
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/color_color_system/color-colorsystem-usagepalettes-1.png"></figure>
                <p class="text-secondary">A sample primary and secondary palette</p>
                <ol>
                    <li class="text-secondary">Primary color indicator</li>
                    <li class="text-secondary">Secondary color indicator</li>
                    <li class="text-secondary">Light and dark variants</li>
                </ol>
            </div>
        </div>
    </section>
    <section>
        <div class="row">
            <div class="col xlarge-6 large-9 medium-12">
                <h1>Principles</h1>
            </div>
        </div>
        <div class="row">
            <div class="col xlarge-2 large-3 medium-4 small-4">
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/color_color_system/color-illos-01.png"></figure>
                <h3>Hierarchical</h3>
                <p class="text-secondary">Color indicates which elements are interactive, how they relate to other elements, and their level of prominence. Important elements should stand out the most.</p>
            </div>
            <div class="col xlarge-2 large-3 medium-4 small-4">
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/color_color_system/color-illos-02.png"></figure>
                <h3>Legible</h3>
                <p class="text-secondary">Text and important elements, like icons, should meet legibility standards when appearing on colored backgrounds, across all screen and device types.</p>
            </div>
            <div class="clearfix visible-smallext visible-small"></div>
            <div class="col xlarge-2 large-3 medium-4 small-4">
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/color_color_system/color-illos-03.png"></figure>
                <h3>Expressive</h3>
                <p class="text-secondary">Reinforce your brand by showing brand colors at memorable moments that reinforce your brand’s style.</p>
            </div>
        </div>
    </section>
</div>
<div class="mdc-divider"></div>
<div class="container">
    <section>
        <div class="row">
            <div class="col xlarge-6 large-9 medium-12">
                <h1 class="article_title">Color theme creation</h1>
                <div class="space"></div>
                <h1>The baseline Material color theme</h1>
                <p class="text-secondary">Material Design comes designed with a built-in, baseline theme that can be used as-is, straight out of the proverbial box.</p>
                <p class="text-secondary">This includes default colors for primary, secondary, and their variants. This baseline theme also includes additional colors that define your UI, such as the colors for backgrounds, surfaces, errors, typography, and iconography. All of these colors can be customized for your app.</p>
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/color_color_system/theming-color-chart-1.png"></figure>
                <p class="text-secondary">The baseline Material color theme.</p>

                <div class="space"></div>
                <div class="mdc-divider"></div>
                <div class="space"></div>

                <h1>Primary color</h1>
                <p class="text-secondary">A <b>primary color</b> is the color displayed most frequently across your app’s screens and components.</p>
                <p class="text-secondary">If you don’t have a secondary color, your primary color can also be used to accent elements.</p>

                <h3>Dark and light primary variants</h3>
                <p class="text-secondary">You can make a color theme for your app using your primary color, as well as dark and light primary variants.</p>

                <h3>Distinguish UI elements</h3>
                <p class="text-secondary">To create contrast between UI elements, such as distinguishing a top app bar from a system bar, you can use light or dark variants of your primary color on each elements. You can also use variants to distinguish elements within a component, such different variants used on a floating action button container, and the icon within it.</p>

                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/color_color_system/color-colorsystem-schemecreation-primary-baseline-2.png"></figure>
                <p class="text-secondary">This UI uses a primary color and two primary variants.</p>

                <div class="space"></div>
                <div class="mdc-divider"></div>
                <div class="space"></div>

                <h1>Secondary color</h1>
                <p class="text-secondary">A <b>secondary color</b> provides more ways to accent and distinguish your product. Having a secondary color is optional, and should be applied sparingly to accent select parts of your UI.</p>
                <p class="text-secondary">Secondary colors are best for:</p>
                <ul>
                    <li class="text-secondary">Floating action buttons</li>
                    <li class="text-secondary">Selection controls, like sliders and switches</li>
                    <li class="text-secondary">Highlighting selected text</li>
                    <li class="text-secondary">Progress bars</li>
                    <li class="text-secondary">Links and headlines</li>
                </ul>

                <h3>Dark and light secondary variants</h3>
                <p class="text-secondary">Just like the primary color, your secondary color can have dark and light variants. You can make a color theme by using your primary color, secondary color, and dark and light variants of each color.</p>

                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/color_color_system/color-colorsystem-schemecreation-secondary-baseline-1.png"></figure>
                <p class="text-secondary">This UI uses a color theme with a primary, primary variant, and secondary color.</p>

                <div class="space"></div>
                <div class="mdc-divider"></div>
                <div class="space"></div>

                <h1>Surface, background, and error colors</h1>
            </div>
        </div>
    </section>
</div>

</body>
</html>