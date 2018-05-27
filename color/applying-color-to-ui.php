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
$topAppBarTitle = "Color - Applying color to UI";

$primaryColor = "indigo";
$accentColor = "blue";

$prefix = "../";
$url = $prefix."color/applying-color-to-ui.php";
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
                <h1 class="article_title">Applying color to UI</h1>
                <h5 class="text-secondary">Color is applied to UI elements and components in consistent and meaningful ways.</h5>
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
                <p class="text-secondary">These guidelines describe a variety of UI components and elements where color application is important.</p>
                <div class="space"></div>

                <h4>Principles</h4>
            </div>
        </div>
        <div class="row">
            <div class="col xlarge-2 large-3 medium-4 small-4">
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/color_applying_color_to_ui/color-illos-08.png"></figure>
                <h6>Consistent</h6>
                <p class="text-secondary">Color should be applied throughout a UI consistently and be compatible with the brand it represents.</p>
            </div>
            <div class="col xlarge-2 large-3 medium-4 small-4">
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/color_applying_color_to_ui/color-illos-09.png"></figure>
                <h6>Distinct</h6>
                <p class="text-secondary">Color should create distinction between elements, with sufficient contrast between them.</p>
            </div>
            <div class="clearfix visible-smallext visible-small"></div>
            <div class="col xlarge-2 large-3 medium-4 small-4">
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/color_applying_color_to_ui/color-illos-10.png"></figure>
                <h6>Intentional</h6>
                <p class="text-secondary">Color should be applied purposefully as it can convey meaning in multiple ways, such as relationships between elements and degrees of hierarchy.</p>
            </div>
        </div>
    </section>
</div>
<div class="mdc-divider"></div>
<div class="container">
    <section>
        <div class="row">
            <div class="col xlarge-6 large-9 medium-12">
                <h1 class="article_title">Top and bottom app bars</h1>
                <div class="space"></div>
                <p class="text-secondary">The way color is applied to top and bottom app bars helps users identify them and understand their relationship to surrounding UI elements.</p>
                <div class="space"></div>
                
                <h4>Identifying app bars</h4>
                <p class="text-secondary">Top and bottom app bars use an app’s primary color. System bars can use a dark or light variant of the primary color to separate system content from top app bar content.</p>

                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/color_applying_color_to_ui/color-applyingcolorui-bars-differentiating-baseline.png"></figure>
                <p class="text-secondary">The primary color (purple 500) is used on this top app bar, and a dark primary variant (purple 700) is used on the system bar.</p>
                <div class="space"></div>

                <p class="text-secondary">To emphasize the difference between app bars and other surfaces, use a secondary color on nearby components such as the FAB.</p>
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/color_applying_color_to_ui/color-applyingcolorui-bars-differentiating-reply.png"></figure>
                <p class="text-secondary">The primary color (blue 700) is used on this bottom app bar, and the secondary color (orange 500) is used on the floating action button.</p>
                <div class="space"></div>

                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/color_applying_color_to_ui/color-applyingcolorui-bars-differentiating-caution-1.png"></figure>
                <p class="text-secondary">If the bottom app bar and floating action button are the same color, use shadow or alternate means to create enough distinction between them.</p>

                <div class="space"></div>
                <div class="mdc-divider"></div>
                <div class="space"></div>

                <h4>Blending an app bar with the background</h4>
                <p class="text-secondary">When an app’s top or bottom app bar color is the same color as the background color, they blend together, placing emphasis on an app’s content instead of its structure.</p>

                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/color_applying_color_to_ui/color-applyingcolorui-blendedbars-owl.png"></figure>
                <p class="text-secondary">This app’s bright, seamless layout uses it’s primary blue (blue 700) color for app bars, bottom navigation, and the background color, so individual elements stand out less, and content stands out more. The activation state uses the secondary yellow. It includes a shadow on the bottom navigation to show the elevation division between surfaces.</p>
        </div>
    </section>
</div>
<div class="mdc-divider"></div>
<div class="container">
    <section>
        <div class="row">
            <div class="col xlarge-6 large-9 medium-12">
                <h1 class="article_title">Backdrop</h1>
                <div class="space"></div>
                <p class="text-secondary">A backdrop has a front and back layer. To distinguish between these two layers, the baseline back layer color is your primary color and the baseline front layer is white.</p>

                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/color_applying_color_to_ui/color-applyingcolorui-surfaces-surfaceelevations-crane.png"></figure>
                <p class="text-secondary">This app uses its primary color (purple 800) on the backdrop’s back layer. The text fields are a light primary variant (purple 700). A secondary color (red 700) is applied as an accent to the flight fares.</p>
                <div class="space"></div>

                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/color_applying_color_to_ui/color-applyingcolorui-surfaces-surfaceelevations-shrine.png"></figure>
                <p class="text-secondary">This app uses the primary color (pink 100) for the backdrop’s back layer and the primary dark primary variant (pink 900) for typography and iconography. Additionally, the secondary color (pink 50) is used for the expanding sheet on the front layer.</p>
            </div>
        </div>
    </section>
</div>
<div class="mdc-divider"></div>
<div class="container">
    <section>
        <div class="row">
            <div class="col xlarge-6 large-9 medium-12">
                <h1 class="article_title">Sheets and surfaces</h1>
                <div class="space"></div>
                <p class="text-secondary">The baseline color for sheets and surfaces, such as bottom sheets, navigation drawers, menus, dialogs, and cards is white. These components can incorporate color to create contrast between other surfaces. Contrast can make surface edges apparent, indicating elevation differences when surfaces overlap.</p>

                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/color_applying_color_to_ui/color-applyingcolorui-surfaces-baseline-alt.png"></figure>
                <p class="text-secondary">This product has changed the default white to a primary color in a bottom sheet and the navigation drawer.</p>
                <ol>
                    <li class="text-secondary">This product uses a primary color (purple 500) in part of the bottom sheet instead of the baseline white.</li>
                    <li class="text-secondary">This product’s navigation drawer uses its primary color (purple 500) instead of the baseline white.</li>
                </ol>
                <div class="space"></div>

                <h4>Modal sheets</h4>
                <p class="text-secondary">Use contrasting colors on surfaces that appear on-screen temporarily, such as navigation drawers and bottom sheets. Usually these surfaces are white, but you can use your app’s primary or secondary color.</p>

                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/color_applying_color_to_ui/color-applyingcolorui-surfaces-tempsurfaces-reply.png"></figure>
                <p class="text-secondary">This app uses its primary color blue (blue 700) on the bottom navigation drawer, a primary dark variant (blue 800) for the account switcher, and a secondary color (orange 500) for selection.</p>
                <div class="space"></div>

                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/color_applying_color_to_ui/color-applyingcolorui-surfaces-tempsurfaces-fortnightly.png"></figure>
                <p class="text-secondary">This app uses its primary color (white) for its modal navigation drawer, creating the maximum contrast between the dark typography and the navigation. A white scrim is used to make content behind it less noticeable, as the navigation drawer is the same color as the background.</p>

                <div class="space"></div>
                <div class="mdc-divider"></div>
                <div class="space"></div>

                <h4>Cards</h4>
                <p class="text-secondary">The baseline color for cards is white. This color can be customized to express brand or to improve legibility. Card text and icons can also use the color theme to improve legibility.</p>

                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/color_applying_color_to_ui/color-applyingcolorui-surfaces-cards-baseline.png"></figure>
                <p class="text-secondary">The surfaces of these cards use the primary color (purple 500). The app’s background color is white. The secondary color (teal 200) is used for data visualization.</p>
                <div class="space"></div>

                <p class="text-secondary">When a card’s text and icons appear in front of imagery, they can be difficult to read. To improve legibility, you can use color to create a surface for text and icons.</p>
            </div>
        </div>
        <div class="row">
            <div class="col xlarge-3 large-4 medium-6 small-4">
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/color_applying_color_to_ui/color-applyingcolorui-surfaces-cards-legibility-baseline-1a.png"></figure>
                <p class="text-secondary">This card uses a colorful scrim to ensure text remains legible.</p>
                <div class="space"></div>
            </div>
        </div>
    </section>
</div>
<div class="mdc-divider"></div>
<div class="container">
    <section>
        <div class="row">
            <div class="col xlarge-6 large-9 medium-12">
                <h1 class="article_title">Buttons, chips and selection controls</h1>
                <div class="space"></div>
                <p class="text-secondary">Buttons, chips and selection controls can be emphasized by applying your primary or secondary color to them.</p>

                <h6>Color categories</h6>
                <ul>
                    <li class="text-secondary">The baseline color for contained, text and outlined buttons is your <b>primary color</b>.</li>
                    <li class="text-secondary">The baseline color for floating action buttons and extended floating action buttons is your <b>secondary color</b>.</li>
                    <li class="text-secondary">The baseline color for selection controls is your <b>secondary color</b>.</li>
                </ul>

                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/color_applying_color_to_ui/color-applyingcolorui-inputselectioncontrols-baseline.png"></figure>
                <p class="text-secondary">The color theme for this app consists of a primary color (purple 500) with a primary dark variant (purple 600) and a secondary color (teal 200).</p>
                <ol>
                    <li class="text-secondary">This product uses the primary color (purple 500) for the bottom app bar and the secondary color (teal 200) as an accent for the floating action button and selection controls.</li>
                    <li class="text-secondary">This product uses the secondary color (teal 200) as an accent for selected list items.</li>
                </ol>
                <div class="space"></div>

                <h4>Buttons, chips, and selection controls</h4>
                <p class="text-secondary">Buttons, chips, and selection controls can be emphasized with your primary or secondary colors.</p>

                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/color_applying_color_to_ui/color-applyingcolorui-inputselectioncontrols-buttonschips-shrine.png"></figure>
                <p class="text-secondary">This app uses its primary color (pink 100) for its extended floating action button and chips. It uses its primary dark variant (pink 900) for the slider.</p>
                <div class="space"></div>
            </div>
        </div>
        <div class="row">
            <div class="col xlarge-3 large-4 medium-6 small-4">
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/color_applying_color_to_ui/color-applyingcolorui-inputselectioncontrols-buttonschips-dont-crane.png"></figure>
                <p class="text-secondary">Selection controls can inherit your app’s secondary color.</p>
                <div class="space"></div>
            </div>
            <div class="col xlarge-3 large-4 medium-6 small-4">
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/color_applying_color_to_ui/color-applyingcolorui-inputselectioncontrols-buttonschips-do-crane.png"></figure>
                <p class="text-secondary">Don’t use one of your brand colors for coloring alerts. This will help it stand out.</p>
                <div class="space"></div>
            </div>
        </div>
        <div class="row">
            <div class="col xlarge-6 large-9 medium-12">
                <div class="mdc-divider"></div>
                <div class="space"></div>

                <h4>Floating action button (FAB)</h4>
                <p class="text-secondary">The floating action button (FAB) should be one of the most recognizable items on your screen.</p>
                <p class="text-secondary">Use color to create contrast between the FAB and surrounding elements, such as the app bar. Your secondary color is the baseline color for use on the FAB. If your canvas uses many colors, your FAB can use monochromatic coloring instead, to stand out from the content.</p>

                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/color_applying_color_to_ui/color-applyingcolorui-inputselectioncontrols-fab-reply.png"></figure>
                <p class="text-secondary">This app’s secondary color (orange 500) is applied to the FAB, contrasting it from the surrounding UI.</p>
                <div class="space"></div>

                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/color_applying_color_to_ui/color-applyingcolorui-inputselectioncontrols-fab-posivibes.png"></figure>
                <p class="text-secondary">This app’s color theme uses a primary white and a secondary black for all buttons, selection controls, and iconography. These components stand out because they contrast with the vivid, multicolor content.</p>
            </div>
        </div>
    </section>
</div>
<div class="mdc-divider"></div>
<div class="container">
    <section>
        <div class="row">
            <div class="col xlarge-6 large-9 medium-12">
                <h1 class="article_title">Typography and iconography</h1>
                <div class="space"></div>
                <p class="text-secondary">Color can express whether text has greater, or lesser, importance relative to other text. Color also ensures text remains legible when placed above imagery or backgrounds, which can make it difficult to read the text in front of them.</p>

                <h6>Typographic hierarchy</h6>
                <p class="text-secondary">Color can increase both text’s visibility and its level of importance.</p>

                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/color_applying_color_to_ui/color-applyingcolorui-typography-baseline-alt.png"></figure>
                <p class="text-secondary">The color theme for this app consists of a primary color (purple 500) and a secondary color (orange 600). Orange accents the card’s headlines, and purple appears on tabs and buttons.</p>

                <div class="space"></div>
                <div class="mdc-divider"></div>
                <div class="space"></div>

                <h4>Headlines and tabs</h4>
                <p class="text-secondary">Important text, like tabs and headlines, can use your primary or secondary color.</p>

                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/color_applying_color_to_ui/color-applyingcolorui-typography-headlinetabs-basil-1.png"></figure>
                <p class="text-secondary">This app uses its secondary color (orange 800) to accent and call attention to the headlines.</p>
                <div class="space"></div>

                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/color_applying_color_to_ui/color-applyingcolorui-typography-headlinetabs-basil-1.png"></figure>
                <p class="text-secondary">This app uses its primary color (green 800) for tabs, with weight changes indicating selected and unselected states.</p>
                <div class="space"></div>
            </div>
        </div>
        <div class="row">
            <div class="col xlarge-3 large-4 medium-6 small-4">
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/color_applying_color_to_ui/color-applyingcolorui-typography-headlinetabs-do-owl-1.png"></figure>
                <p class="text-secondary">Use your primary or secondary color to emphasize shorter text, such as headlines.</p>
                <div class="space"></div>
            </div>
            <div class="col xlarge-3 large-4 medium-6 small-4">
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/color_applying_color_to_ui/color-applyingcolorui-typography-headlinetabs-do-owl-2.png"></figure>
                <p class="text-secondary">You can use your primary or secondary color to accent links.</p>
                <div class="space"></div>
            </div>
        </div>
        <div class="row">
            <div class="col xlarge-6 large-9 medium-12">
                <div class="mdc-divider"></div>
                <div class="space"></div>

                <h4>Text legibility</h4>
                <p class="text-secondary">When text is placed above imagery, it often leads to legibility issues. Creating a colored layer between text and image can ensure text remains legible.</p>

                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/color_applying_color_to_ui/textlegibility-posivibes-2.png"></figure>
                <p class="text-secondary">This app applies a yellow scrim above imagery to ensure text above it is legible.</p>

                <div class="space"></div>
                <div class="mdc-divider"></div>
                <div class="space"></div>

                <h4>Icons</h4>
                <p class="text-secondary">Icons help identify actions and provide information. Their color should contrast against the background to ensure that they are legible and identifiable.</p>

                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/color_applying_color_to_ui/color-applyingcolorui-inputselectioncontrols-icons-shrine.png"></figure>
                <p class="text-secondary">Shrine uses its primary dark variant (pink 900) for icons.</p>
            </div>
        </div>
    </section>
</div>

</body>
</html>