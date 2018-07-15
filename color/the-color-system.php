<?php
$language = "en-US";
$direction = "ltr";

$css_files = [
];
$js_files = [
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

<body class="mdc-drawer-expand">

<?php include $prefix."_includes/drawer.php"; ?>
<?php include $prefix."_includes/app_bar.php"; ?>

<div class="container">
    <section>
        <div class="row">
            <div class="col xlarge-6 large-9 medium-12">
                <h1 class="article_title">The color system</h1>
                <h5 class="text-secondary">The Material Design color system can be used to create a color theme that reflects your brand or style.</h5>
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
                <h6>Colors and theming</h6>
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
                <h4>Principles</h4>
            </div>
        </div>
        <div class="row">
            <div class="col xlarge-2 large-3 medium-4 small-4">
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/color_color_system/color-illos-01.png"></figure>
                <h6>Hierarchical</h6>
                <p class="text-secondary">Color indicates which elements are interactive, how they relate to other elements, and their level of prominence. Important elements should stand out the most.</p>
            </div>
            <div class="col xlarge-2 large-3 medium-4 small-4">
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/color_color_system/color-illos-02.png"></figure>
                <h6>Legible</h6>
                <p class="text-secondary">Text and important elements, like icons, should meet legibility standards when appearing on colored backgrounds, across all screen and device types.</p>
            </div>
            <div class="clearfix visible-smallext visible-small"></div>
            <div class="col xlarge-2 large-3 medium-4 small-4">
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/color_color_system/color-illos-03.png"></figure>
                <h6>Expressive</h6>
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
                <h4>The baseline Material color theme</h4>
                <p class="text-secondary">Material Design comes designed with a built-in, baseline theme that can be used as-is, straight out of the proverbial box.</p>
                <p class="text-secondary">This includes default colors for primary, secondary, and their variants. This baseline theme also includes additional colors that define your UI, such as the colors for backgrounds, surfaces, errors, typography, and iconography. All of these colors can be customized for your app.</p>
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/color_color_system/theming-color-chart-1.png"></figure>
                <p class="text-secondary">The baseline Material color theme.</p>

                <div class="space"></div>
                <div class="mdc-divider"></div>
                <div class="space"></div>

                <h4>Primary color</h4>
                <p class="text-secondary">A <b>primary color</b> is the color displayed most frequently across your app’s screens and components.</p>
                <p class="text-secondary">If you don’t have a secondary color, your primary color can also be used to accent elements.</p>

                <h6>Dark and light primary variants</h6>
                <p class="text-secondary">You can make a color theme for your app using your primary color, as well as dark and light primary variants.</p>

                <h6>Distinguish UI elements</h6>
                <p class="text-secondary">To create contrast between UI elements, such as distinguishing a top app bar from a system bar, you can use light or dark variants of your primary color on each elements. You can also use variants to distinguish elements within a component, such different variants used on a floating action button container, and the icon within it.</p>

                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/color_color_system/color-colorsystem-schemecreation-primary-baseline-2.png"></figure>
                <p class="text-secondary">This UI uses a primary color and two primary variants.</p>

                <div class="space"></div>
                <div class="mdc-divider"></div>
                <div class="space"></div>

                <h4>Secondary color</h4>
                <p class="text-secondary">A <b>secondary color</b> provides more ways to accent and distinguish your product. Having a secondary color is optional, and should be applied sparingly to accent select parts of your UI.</p>
                <p class="text-secondary">Secondary colors are best for:</p>
                <ul>
                    <li class="text-secondary">Floating action buttons</li>
                    <li class="text-secondary">Selection controls, like sliders and switches</li>
                    <li class="text-secondary">Highlighting selected text</li>
                    <li class="text-secondary">Progress bars</li>
                    <li class="text-secondary">Links and headlines</li>
                </ul>

                <h6>Dark and light secondary variants</h6>
                <p class="text-secondary">Just like the primary color, your secondary color can have dark and light variants. You can make a color theme by using your primary color, secondary color, and dark and light variants of each color.</p>

                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/color_color_system/color-colorsystem-schemecreation-secondary-baseline-1.png"></figure>
                <p class="text-secondary">This UI uses a color theme with a primary, primary variant, and secondary color.</p>

                <div class="space"></div>
                <div class="mdc-divider"></div>
                <div class="space"></div>

                <h4>Surface, background, and error colors</h4>
                <p class="text-secondary">Surface, background, and error colors typically don’t represent brand:</p>
                <ul>
                    <li class="text-secondary">Surface colors affect surfaces of components, such as cards, sheets, and menus. </li>
                    <li class="text-secondary">The background color appears behind scrollable content. The baseline background and surface color is #FFFFFF. </li>
                    <li class="text-secondary">Error color indicates errors components, such as text fields. The baseline error color is #B00020.</li>
                </ul>

                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/color_color_system/theming-color-surfacesbgs.png"></figure>
                <p class="text-secondary">A UI showcasing the baseline colors for background, surface, and error color.</p>

                <div class="space"></div>
                <div class="mdc-divider"></div>
                <div class="space"></div>

                <h4>Typography and iconography colors</h4>

                <h6>“On” colors</h6>
                <p class="text-secondary">The elements in an app use colors from specific categories in your color palette, such as a primary color. Whenever other screen elements, such as text or icons, appear in front of surfaces using those colors, those elements should use colors specifically designed to appear clearly and legibly against the colors behind them.</p>
                <p class="text-secondary">This category of colors is called “on” colors, referring to the fact that they color elements that are sometimes placed “on” top of key surfaces that use a primary color, secondary color, surface color, background color, or error color. These are labelled using the original category name (such as primary color) with the prefix “on”.</p>
                <p class="text-secondary">“On” colors are primarily applied to text, iconography, and strokes. Sometimes, they are also applied to surfaces.</p>
                <p class="text-secondary">The defaults for these colors are #FFFFFF and #000000.</p>

                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/color_color_system/theming-color-oncolors.png"></figure>
                <p class="text-secondary">A UI showcases the baseline colors for text and iconography.</p>

                <div class="space"></div>
                <div class="mdc-divider"></div>
                <div class="space"></div>

                <h4>Accessible colors</h4>
                <p class="text-secondary">To ensure that a color provides an accessible background behind light or dark text, you can use light and dark variants of your primary and secondary colors.</p>
                <p class="text-secondary">Alternatively, these colors can be used for typography that appears in front of light and dark backgrounds.</p>

                <h6>Color swatches</h6>
                <p class="text-secondary">A <b>swatch</b> is a sample of a color chosen from a range of similar colors.</p>

                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/color_color_system/color-colorsystem-schemecreation-accessibility-2.png"></figure>
                <p class="text-secondary">For apps that use white text, backgrounds must be accessible against white. These white check marks indicate when white text is accessible against various background color swatches. The 400 color swatch is applied to this UI.</p>

                <div class="space"></div>

                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/color_color_system/color-colorsystem-schemecreation-accessibility-3.png"></figure>
                <p class="text-secondary">For apps that use black text, backgrounds must be accessible against black. These black check marks indicate when black text is accessible against various background color swatches. The 50 color swatch is applied to this UI.</p>

                <div class="space"></div>
                <div class="mdc-divider"></div>
                <div class="space"></div>

                <h4>Alternative colors</h4>
                <p class="text-secondary">The Material Design color system supports alternative colors, which are colors used as alternatives to your brand’s primary and secondary colors (they constitute additional colors to your theme). Apps can use alternative colors to establish themes that distinguish different sections.</p>
                <p class="text-secondary">Alternative colors are best for:</p>

                <ul>
                    <li class="text-secondary">Apps with light and dark themes</li>
                    <li class="text-secondary">Apps with different themes in different sections</li>
                    <li class="text-secondary">Apps that exist as part of a suite of products </li>
                </ul>

                <p class="text-secondary">Alternative colors should be used cautiously, because they can be challenging to implement cohesively with existing color themes.</p>

                <div class="space"></div>
                <div class="mdc-divider"></div>
                <div class="space"></div>

                <h4>Alternative colors for section themes</h4>
                <p class="text-secondary">Alternative colors can be used to theme different parts of an app.</p>

                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/color_color_system/color-colorsystem-schemecreation-altprimarysecondary-3.png"></figure>
                <p class="text-secondary">This app has three primary colors. Distinct themes are used in different parts of the app, allowing users to better locate themselves within it.</p>

                <div class="space"></div>
                <div class="mdc-divider"></div>
                <div class="space"></div>

                <h4>Additional colors for data visualization</h4>
                <p class="text-secondary">Apps can use additional colors to convey categories that are outside of your main color theme. They are still a part of your full color palette.</p>

                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/color_color_system/color-colorsystem-schemecreation-dataviz.png"></figure>
                <p class="text-secondary">This app has a color theme with five additional colors, which it uses when multiple data visualizations are shown on the same page.</p>
                <ol>
                    <li class="text-secondary">The Accounts section uses green</li>
                    <li class="text-secondary">The Bills section uses orange and yellow</li>
                    <li class="text-secondary">The Budget section uses purple and blue</li>
                </ol>
            </div>
        </div>
    </section>
</div>
<div class="mdc-divider"></div>
<div class="container">
    <section>
        <div class="row">
            <div class="col xlarge-6 large-9 medium-12">
                <h1 class="article_title">Tools for picking colors</h1>
                <div class="space"></div>

                <h4>Material palette generator</h4>
                <p class="text-secondary">The Material palette generator can be used to generate a palette for any color you input. An algorithmic adjustment of hue, chroma, and lightness creates palettes that are both usable and aesthetically pleasing.</p>

                <h6>Input colors</h6>
                <p class="text-secondary">Color palettes can be generated based on the primary input color, and whether the desired palette should be analogous, complementary, or triadic in relation to the primary color. Alternatively, the tool can generate expanded palettes for any primary and secondary color input.</p>

                <h6>Color variations for accessibility</h6>
                <p class="text-secondary">These palettes provide additional ways to use your primary and secondary colors, by providing lighter and darker options to separate surfaces and provide colors that meet accessibility standards.</p>

                <a class="mdc-button bg-<?= $primaryColor ?>" href="https://material.io/tools/color" target="_blank">
                    <div class="material-icon">launch</div>
                    Material palette generator
                </a>

                <div class="space"></div>
                <div class="mdc-divider"></div>
                <div class="space"></div>

                <h4>2014 Material Design color palettes</h4>
                <p class="text-secondary">These color palettes, originally created by Material Design in 2014, comprises of colors designed to work together harmoniously, and can be used to develop your brand palette. To generate your own harmonious palettes, use either the palette generation tool or Material Theme Editor.</p>
                <div class="space"></div>
            </div>
        </div>
        <?php
        $palettes = [
            'Red' => [
                '50' => ['#FFEBEE', true],
                '100' => ['#FFCDD2', true],
                '200' => ['#EF9A9A', true],
                '300' => ['#E57373', true],
                '400' => ['#EF5350', false],
                '500' => ['#F44336', false],
                '600' => ['#E53935', false],
                '700' => ['#D32F2F', false],
                '800' => ['#C62828', false],
                '900' => ['#B71C1C', false],
                'A100' => ['#FF8A80', true],
                'A200' => ['#FF5252', false],
                'A400' => ['#FF1744', false],
                'A700' => ['#D50000', false],
            ],
            'Pink' => [
                '50' => ['#FCE4EC', true],
                '100' => ['#F8BBD0', true],
                '200' => ['#F48FB1', true],
                '300' => ['#F06292', false],
                '400' => ['#EC407A', false],
                '500' => ['#E91E63', false],
                '600' => ['#D81B60', false],
                '700' => ['#C2185B', false],
                '800' => ['#AD1457', false],
                '900' => ['#880E4F', false],
                'A100' => ['#FF80AB', true],
                'A200' => ['#FF4081', false],
                'A400' => ['#F50057', false],
                'A700' => ['#C51162', false],
            ],
            'Purple' => [
                '50' => ['#F3E5F5', true],
                '100' => ['#E1BEE7', true],
                '200' => ['#CE93D8', true],
                '300' => ['#BA68C8', false],
                '400' => ['#AB47BC', false],
                '500' => ['#9C27B0', false],
                '600' => ['#8E24AA', false],
                '700' => ['#7B1FA2', false],
                '800' => ['#6A1B9A', false],
                '900' => ['#4A148C', false],
                'A100' => ['#EA80FC', true],
                'A200' => ['#E040FB', false],
                'A400' => ['#D500F9', false],
                'A700' => ['#AA00FF', false],
            ],
            'Deep Purple' => [
                '50' => ['#EDE7F6', true],
                '100' => ['#D1C4E9', true],
                '200' => ['#B39DDB', true],
                '300' => ['#9575CD', false],
                '400' => ['#7E57C2', false],
                '500' => ['#673AB7', false],
                '600' => ['#5E35B1', false],
                '700' => ['#512DA8', false],
                '800' => ['#4527A0', false],
                '900' => ['#311B92', false],
                'A100' => ['#B388FF', true],
                'A200' => ['#7C4DFF', false],
                'A400' => ['#651FFF', false],
                'A700' => ['#6200EA', false],
            ],
            'Indigo' => [
                '50' => ['#E8EAF6', true],
                '100' => ['#C5CAE9', true],
                '200' => ['#9FA8DA', true],
                '300' => ['#7986CB', false],
                '400' => ['#5C6BC0', false],
                '500' => ['#3F51B5', false],
                '600' => ['#3949AB', false],
                '700' => ['#303F9F', false],
                '800' => ['#283593', false],
                '900' => ['#1A237E', false],
                'A100' => ['#8C9EFF', true],
                'A200' => ['#536DFE', false],
                'A400' => ['#3D5AFE', false],
                'A700' => ['#304FFE', false],
            ],
            'Blue' => [
                '50' => ['#E3F2FD', true],
                '100' => ['#BBDEFB', true],
                '200' => ['#90CAF9', true],
                '300' => ['#64B5F6', true],
                '400' => ['#42A5F5', true],
                '500' => ['#2196F3', false],
                '600' => ['#1E88E5', false],
                '700' => ['#1976D2', false],
                '800' => ['#1565C0', false],
                '900' => ['#0D47A1', false],
                'A100' => ['#82B1FF', true],
                'A200' => ['#448AFF', false],
                'A400' => ['#2979FF', false],
                'A700' => ['#2962FF', false],
            ],
            'Light Blue' => [
                '50' => ['#E1F5FE', true],
                '100' => ['#B3E5FC', true],
                '200' => ['#81D4FA', true],
                '300' => ['#4FC3F7', true],
                '400' => ['#29B6F6', true],
                '500' => ['#03A9F4', true],
                '600' => ['#039BE5', false],
                '700' => ['#0288D1', false],
                '800' => ['#0277BD', false],
                '900' => ['#01579B', false],
                'A100' => ['#80D8FF', true],
                'A200' => ['#40C4FF', true],
                'A400' => ['#00B0FF', true],
                'A700' => ['#0091EA', false],
            ],
            'Cyan' => [
                '50' => ['#E0F7FA', true],
                '100' => ['#B2EBF2', true],
                '200' => ['#80DEEA', true],
                '300' => ['#4DD0E1', true],
                '400' => ['#26C6DA', true],
                '500' => ['#00BCD4', true],
                '600' => ['#00ACC1', true],
                '700' => ['#0097A7', false],
                '800' => ['#00838F', false],
                '900' => ['#006064', false],
                'A100' => ['#84FFFF', true],
                'A200' => ['#18FFFF', true],
                'A400' => ['#00E5FF', true],
                'A700' => ['#00B8D4', true],
            ],
            'Teal' => [
                '50' => ['#E0F2F1', true],
                '100' => ['#B2DFDB', true],
                '200' => ['#80CBC4', true],
                '300' => ['#4DB6AC', true],
                '400' => ['#26A69A', true],
                '500' => ['#009688', false],
                '600' => ['#00897B', false],
                '700' => ['#00796B', false],
                '800' => ['#00695C', false],
                '900' => ['#004D40', false],
                'A100' => ['#A7FFEB', true],
                'A200' => ['#64FFDA', true],
                'A400' => ['#1DE9B6', true],
                'A700' => ['#00BFA5', true],
            ],
            'Green' => [
                '50' => ['#E8F5E9', true],
                '100' => ['#C8E6C9', true],
                '200' => ['#A5D6A7', true],
                '300' => ['#81C784', true],
                '400' => ['#66BB6A', true],
                '500' => ['#4CAF50', true],
                '600' => ['#43A047', false],
                '700' => ['#388E3C', false],
                '800' => ['#2E7D32', false],
                '900' => ['#1B5E20', false],
                'A100' => ['#B9F6CA', true],
                'A200' => ['#69F0AE', true],
                'A400' => ['#00E676', true],
                'A700' => ['#00C853', true],
            ],
            'Light Green' => [
                '50' => ['#F1F8E9', true],
                '100' => ['#DCEDC8', true],
                '200' => ['#C5E1A5', true],
                '300' => ['#AED581', true],
                '400' => ['#9CCC65', true],
                '500' => ['#8BC34A', true],
                '600' => ['#7CB342', true],
                '700' => ['#689F38', false],
                '800' => ['#558B2F', false],
                '900' => ['#33691E', false],
                'A100' => ['#CCFF90', true],
                'A200' => ['#B2FF59', true],
                'A400' => ['#76FF03', true],
                'A700' => ['#64DD17', true],
            ],
            'Lime' => [
                '50' => ['#F9FBE7', true],
                '100' => ['#F0F4C3', true],
                '200' => ['#E6EE9C', true],
                '300' => ['#DCE775', true],
                '400' => ['#D4E157', true],
                '500' => ['#CDDC39', true],
                '600' => ['#C0CA33', true],
                '700' => ['#AFB42B', true],
                '800' => ['#9E9D24', true],
                '900' => ['#827717', false],
                'A100' => ['#F4FF81', true],
                'A200' => ['#EEFF41', true],
                'A400' => ['#C6FF00', true],
                'A700' => ['#AEEA00', true],
            ],
            'Yellow' => [
                '50' => ['#FFFDE7', true],
                '100' => ['#FFF9C4', true],
                '200' => ['#FFF59D', true],
                '300' => ['#FFF176', true],
                '400' => ['#FFEE58', true],
                '500' => ['#FFEB3B', true],
                '600' => ['#FDD835', true],
                '700' => ['#FBC02D', true],
                '800' => ['#F9A825', true],
                '900' => ['#F57F17', true],
                'A100' => ['#FFFF8D', true],
                'A200' => ['#FFFF00', true],
                'A400' => ['#FFEA00', true],
                'A700' => ['#FFD600', true],
            ],
            'Amber' => [
                '50' => ['#FFF8E1', true],
                '100' => ['#FFECB3', true],
                '200' => ['#FFE082', true],
                '300' => ['#FFD54F', true],
                '400' => ['#FFCA28', true],
                '500' => ['#FFC107', true],
                '600' => ['#FFB300', true],
                '700' => ['#FFA000', true],
                '800' => ['#FF8F00', true],
                '900' => ['#FF6F00', true],
                'A100' => ['#FFE57F', true],
                'A200' => ['#FFD740', true],
                'A400' => ['#FFC400', true],
                'A700' => ['#FFAB00', true],
            ],
            'Orange' => [
                '50' => ['#FFF3E0', true],
                '100' => ['#FFE0B2', true],
                '200' => ['#FFCC80', true],
                '300' => ['#FFB74D', true],
                '400' => ['#FFA726', true],
                '500' => ['#FF9800', true],
                '600' => ['#FB8C00', true],
                '700' => ['#F57C00', true],
                '800' => ['#EF6C00', false],
                '900' => ['#E65100', false],
                'A100' => ['#FFD180', true],
                'A200' => ['#FFAB40', true],
                'A400' => ['#FF9100', true],
                'A700' => ['#FF6D00', true],
            ],
            'Deep Orange' => [
                '50' => ['#FBE9E7', true],
                '100' => ['#FFCCBC', true],
                '200' => ['#FFAB91', true],
                '300' => ['#FF8A65', true],
                '400' => ['#FF7043', true],
                '500' => ['#FF5722', false],
                '600' => ['#F4511E', false],
                '700' => ['#E64A19', false],
                '800' => ['#D84315', false],
                '900' => ['#BF360C', false],
                'A100' => ['#FF9E80', true],
                'A200' => ['#FF6E40', true],
                'A400' => ['#FF3D00', false],
                'A700' => ['#DD2C00', false],
            ],
            'Brown' => [
                '50' => ['#EFEBE9', true],
                '100' => ['#D7CCC8', true],
                '200' => ['#BCAAA4', true],
                '300' => ['#A1887F', false],
                '400' => ['#8D6E63', false],
                '500' => ['#795548', false],
                '600' => ['#6D4C41', false],
                '700' => ['#5D4037', false],
                '800' => ['#4E342E', false],
                '900' => ['#3E2723', false],
            ],
            'Grey' => [
                '50' => ['#FAFAFA', true],
                '100' => ['#F5F5F5', true],
                '200' => ['#EEEEEE', true],
                '300' => ['#E0E0E0', true],
                '400' => ['#BDBDBD', true],
                '500' => ['#9E9E9E', true],
                '600' => ['#757575', false],
                '700' => ['#616161', false],
                '800' => ['#424242', false],
                '900' => ['#212121', false],
            ],
            'Blue Grey' => [
                '50' => ['#ECEFF1', true],
                '100' => ['#CFD8DC', true],
                '200' => ['#B0BEC5', true],
                '300' => ['#90A4AE', true],
                '400' => ['#78909C', false],
                '500' => ['#607D8B', false],
                '600' => ['#546E7A', false],
                '700' => ['#455A64', false],
                '800' => ['#37474F', false],
                '900' => ['#263238', false],
            ],
        ];
        ?>
        <div class="row">
            <?php
            foreach ($palettes as $name => $colors) {
                $color_class = strtolower(str_replace(' ', '-', $name));
                ?>
                <div class="col large-3 medium-4 smallext-6">
                    <ul class="palette z-axis-1">
                        <li class="bg-<?= $color_class ?>">
                            <div class="title"><?= $name ?></div>
                            <span class="left">500</span>
                            <span class="right"><?= $colors['500'][0] ?></span>
                        </li>
                        <?php foreach ($colors as $key => $value) { ?>
                        <li class="bg-<?= $color_class ?>-<?= $key ?>">
                            <span class="left"><?= $key ?></span>
                            <span class="right"><?= $value[0] ?></span>
                        </li>
                        <?php } ?>
                    </ul>
                </div>
                <?php
            }
            ?>
            <div class="col large-3 medium-4 smallext-6">
                <ul class="palette z-axis-1">
                    <li class="bg-black">
                        <div class="title">Black</div>
                        <span class="left"></span>
                        <span class="right">#000000</span>
                    </li>
                </ul>

                <ul class="palette z-axis-1">
                    <li class="bg-white">
                        <div class="title">White</div>
                        <span class="left"></span>
                        <span class="right">#FFFFFF</span>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <section>
        <div class="row">
            <div class="col xlarge-6 large-9 medium-12">
                <p class="text-secondary">Each of these colors is defined with a base color css class and an optional lighten or darken class.</p>
            </div>
        </div>
        <div class="row">
            <div class="col xlarge-3 large-4 medium-6">
                <div class="mdc-list-group bg-cards example">
                    <div class="mdc-list-item interactive deep-purple">
                        <div class="text">
                            Search engine
                            <div class="secondary">Google</div>
                        </div>
                    </div>
                    <div class="mdc-list-item interactive deep-purple-300">
                        <div class="text">
                            When device is locked
                            <div class="secondary">Show all notification content</div>
                        </div>
                    </div>
                    <div class="mdc-list-item interactive deep-purple-100">
                        <div class="text">
                            Start time
                            <div class="secondary">10:00 AM</div>
                        </div>
                    </div>
                </div>
                <p class="text-secondary">Text color</p>
            </div>
            <div class="col xlarge-5 large-6 medium-10">
<pre class="bg-app-bar html"><?= htmlspecialchars(
<<<TEXT
<div class="deep-purple">
    ...
</div>
<div class="deep-purple-300">
    ...
</div>
<div class="deep-purple-100">
    ...
</div>
TEXT
) ?></pre>
            </div>
        </div>
        <div class="row">
            <div class="col xlarge-3 large-4 medium-6">
                <div class="mdc-list-group bg-cards example">
                    <div class="mdc-list-item interactive bg-deep-purple">
                        <div class="text">
                            Search engine
                            <div class="secondary">Google</div>
                        </div>
                    </div>
                    <div class="mdc-list-item interactive bg-deep-purple-300">
                        <div class="text">
                            When device is locked
                            <div class="secondary">Show all notification content</div>
                        </div>
                    </div>
                    <div class="mdc-list-item interactive bg-deep-purple-100">
                        <div class="text">
                            Start time
                            <div class="secondary">10:00 AM</div>
                        </div>
                    </div>
                </div>
                <p class="text-secondary">Background color</p>
            </div>
            <div class="col xlarge-5 large-6 medium-10">
<pre class="bg-app-bar html"><?= htmlspecialchars(
<<<TEXT
<div class="bg-deep-purple">
    ...
</div>
<div class="bg-deep-purple-300">
    ...
</div>
<div class="bg-deep-purple-100">
    ...
</div>
TEXT
) ?></pre>
            </div>
        </div>
    </section>
</div>

<?php include $prefix."_includes/footer.php"; ?>

</body>
</html>