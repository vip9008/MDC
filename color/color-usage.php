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
                <h5 class="text-secondary">Color helps express hierarchy, establish brand presence, give meaning, and indicate element states.</h5>
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
        <div class="row">
            <div class="col xlarge-3 large-4 medium-6 small-4">
                <h6>Surface contrast</h6>
                <p class="text-secondary">To bring attention to important events, use stronger color contrasts between elements.</p>
                <div class="space"></div>
            </div>
            <div class="col xlarge-3 large-4 medium-6 small-4">
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/color_color_usage/color-hierarchybrand-hierarchy-surfacecontrast-crane.png"></figure>
                <p class="text-secondary">The purple background has a high contrast with the white surface, bringing emphasis to the list item choices – the main point of this travel app.</p>
                <div class="space"></div>
            </div>
        </div>
        <div class="row">
            <div class="col xlarge-3 large-4 medium-6 small-4">
                <h6>Color and shape</h6>
                <p class="text-secondary">Visual emphasis is given to an element that changes both color and shape at the same time. Use this kind of emphasis to indicate something has been selected or requires immediate attention.</p>
                <div class="space"></div>
            </div>
            <div class="col xlarge-3 large-4 medium-6 small-4">
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/color_color_usage/color-hierarchybrand-hierarchy-colorshape-owl.png"></figure>
                <p class="text-secondary">The chips with curved, pink left corners indicate they have been selected by the user.</p>
                <div class="space"></div>
            </div>
        </div>
        <div class="row">
            <div class="col xlarge-6 large-9 medium-12">
                <h4>Limiting color</h4>
                <div class="space"></div>
            </div>
        </div>
        <div class="row">
            <div class="col xlarge-3 large-4 medium-6 small-4">
                <p class="text-secondary">By limiting the use of color in your app, the areas that do receive color gain more attention, such as text, images, and individual elements like buttons.</p>
                <p class="text-secondary">Because the content of this product is multicolored, a black floating action button contrasts greatly with the bright colors, making it more visible.</p>
                <div class="space"></div>
            </div>
            <div class="col xlarge-3 large-4 medium-6 small-4">
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/color_color_usage/color-hierarchybrand-hierarchy-limitingcolor-posivibes.png"></figure>
                <div class="space"></div>
            </div>
        </div>
        <div class="row">
            <div class="col xlarge-3 large-4 medium-6 small-4">
                <p class="text-secondary">A grayscale color palette is best for allowing photography and text to stand out.</p>
                <div class="space"></div>
            </div>
            <div class="col xlarge-3 large-4 medium-6 small-4">
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/color_color_usage/color-hierarchybrand-hierarchy-limitingcolor-fortnightly.png"></figure>
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
                <h1 class="article_title">Brand</h1>
                <div class="space"></div>

                <p class="text-secondary">Your brand can use color to emphasize its presence. Brand colors can be used in key moments, in ways that associate those colors with specific actions and information.</p>
                <p class="text-secondary">Brand color application can be bold and brash, subtle and sophisticated, or anywhere in between. Your brand’s personal approach to color should be reflected in your app.</p>
                <div class="space"></div>

                <h4>Bold use of color</h4>
                <p class="text-secondary">Brands that wish to convey a sense of energy and excitement often use color in bold ways. Their apps should reflect that same approach, while preserving content legibility and overall usability.</p>
                <div class="space"></div>
            </div>
        </div>
        <div class="row">
            <div class="col xlarge-3 large-4 medium-6 small-4">
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/color_color_usage/color-hierarchybrand-brand-boldcolor-owl.png"></figure>
                <p class="text-secondary">This educational app uses bold, saturated brand colors (yellow, blue, magenta) in a vibrant way that matches the spirit of the brand.</p>
                <div class="space"></div>
            </div>
            <div class="col xlarge-3 large-4 medium-6 small-4">
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/color_color_usage/color-hierarchybrand-brand-boldcolor-basil.png"></figure>
                <p class="text-secondary">This cooking app’s bold approach to color and typography infuses energy and excitement while remaining legible and usable.</p>
                <div class="space"></div>
            </div>
        </div>
        <div class="row">
            <div class="col xlarge-6 large-9 medium-12">
                <p class="text-secondary">Even brands with more subtle color approaches can use color in bold, celebratory ways.</p>
            </div>
        </div>
        <div class="row">
            <div class="col xlarge-3 large-4 medium-6 small-4">
                <h6>Launch screens</h6>
                <p class="text-secondary">Launch screens can be celebratory moments that use color in bold ways.</p>
                <div class="space"></div>
            </div>
            <div class="col xlarge-3 large-4 medium-6 small-4">
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/color_color_usage/color-hierarchybrand-brand-boldcolor-launchscreen-rally.png"></figure>
                <div class="space"></div>
            </div>
        </div>
        <div class="row">
            <div class="col xlarge-3 large-4 medium-6 small-4">
                <h6>Onboarding</h6>
                <p class="text-secondary">Color used during onboarding can connect content to branding.</p>
                <div class="space"></div>
            </div>
            <div class="col xlarge-3 large-4 medium-6 small-4">
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/color_color_usage/color-hierarchybrand-brand-boldcolor-onboarding-baseline.png"></figure>
                <div class="space"></div>
            </div>
        </div>
        <div class="row">
            <div class="col xlarge-3 large-4 medium-6 small-4">
                <h6>Feature discovery</h6>
                <p class="text-secondary">New features can be highlighted to ensure the user sees them by using color to guide user focus.</p>
                <div class="space"></div>
            </div>
            <div class="col xlarge-3 large-4 medium-6 small-4">
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/color_color_usage/useredu-er-featuredisc-design-01.png"></figure>
                <div class="space"></div>
            </div>
        </div>
        <div class="row">
            <div class="col xlarge-6 large-9 medium-12">
                <div class="mdc-divider"></div>
                <div class="space"></div>

                <h4>Subtle use of color</h4>
                <p class="text-secondary">Brands can use color in subtle ways, whether that means conveying sophistication, emphasizing content, or suiting content in some other way. When using color with subtlety, ensure that interactive areas and state changes remain identifiable and easily seen.</p>
                <div class="space"></div>
            </div>
        </div>
        <div class="row">
            <div class="col xlarge-3 large-4 medium-6 small-4">
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/color_color_usage/color-hierarchybrand-brand-subtlecolor-rally.png"></figure>
                <p class="text-secondary">This financial app uses small amounts of color to display information, such as data in graphs. Using color in this way connects information to brand colors.</p>
                <div class="space"></div>
            </div>
            <div class="col xlarge-3 large-4 medium-6 small-4">
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/color_color_usage/color-hierarchybrand-brand-subtlecolor-fortnightly.png"></figure>
                <p class="text-secondary">This news app uses its secondary color (purple) sparingly. By doing so, it stands out in the places it is used. Using color in this way makes content the most important element on the page.</p>
                <div class="space"></div>
            </div>
        </div>
        <div class="row">
            <div class="col xlarge-6 large-9 medium-12">
                <p class="text-secondary">Brand presence can be maintained subtly by incorporating brand colors into moments like loading a placeholder UI, showing progress indicators, or expressing state changes.</p>
                <div class="space"></div>

                <h6>Placeholder UI</h6>
                <p class="text-secondary">A placeholder UI is displayed while screen content loads. Including a brand color here assures users that they are still in the app as it loads.</p>
                <div class="space"></div>
            </div>
        </div>
        <div class="row">
            <div class="col xlarge-3 large-4 medium-6 small-4">
                <h6>Progress indicators</h6>
                <p class="text-secondary">Progress indicators are a subtle but powerful place to incorporate brand color, as they tie the function of the app to the brand.</p>
                <div class="space"></div>
            </div>
            <div class="col xlarge-3 large-4 medium-6 small-4">
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/color_color_usage/color-hierarchybrand-brand-subtlecolor-progress-baseline.png"></figure>
                <div class="space"></div>
            </div>
        </div>
        <div class="row">
            <div class="col xlarge-3 large-4 medium-6 small-4">
                <h6>State changes</h6>
                <p class="text-secondary">State changes can subtly reinforce brand presence.</p>
                <div class="space"></div>
            </div>
            <div class="col xlarge-3 large-4 medium-6 small-4">
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/color_color_usage/color-hierarchybrand-brand-subtlecolor-state.png"></figure>
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
                <h1 class="article_title">Meaning</h1>
                <div class="space"></div>

                <p class="text-secondary">Color can communicate the meaning of different UI elements. For example, a weather app may display colors indicating current weather conditions, and a navigation app may display color showing traffic conditions, with roads colored red or green.</p>
                <div class="space"></div>
            </div>
        </div>
        <div class="row">
            <div class="col xlarge-3 large-4 medium-6 small-4">
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/color_color_usage/color-hierarchybrand-meaning-baseline-weather.png"></figure>
                <p class="text-secondary">This weather app pairs color with weather conditions.</p>
                <div class="space"></div>
            </div>
            <div class="col xlarge-3 large-4 medium-6 small-4">
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/color_color_usage/color-hierarchybrand-meaning-baseline-maps.png"></figure>
                <p class="text-secondary">A navigation app uses color to signal traffic conditions.</p>
                <div class="space"></div>
            </div>
        </div>
        <div class="row">
            <div class="col xlarge-6 large-9 medium-12">
                <h4>Consistency and context</h4>
                <div class="space"></div>
            </div>
        </div>
        <div class="row">
            <div class="col xlarge-3 large-4 medium-6 small-4">
                <p class="text-secondary">Color should be used consistently in a product, so that certain colors always mean the same thing, even if the context changes. Attention should also be given to colors with local or cultural significance. For example, alerts may typically be colored red in some cultures, but not in others.</p>
                <div class="space"></div>
            </div>
            <div class="col xlarge-3 large-4 medium-6 small-4">
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/color_color_usage/color-hierarchybrand-meaning-consistencycontext-crane.png"></figure>
                <p class="text-secondary">Date selection is shown in red against a purple background, associating the brand’s primary color (red) with choosing travel dates.</p>
                <div class="space"></div>
            </div>
        </div>
        <div class="row">
            <div class="col xlarge-3 large-4 medium-6 small-4">
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/color_color_usage/color-hierarchybrand-meaning-consistencycontext-dont-crane.png"></figure>
                <p class="text-secondary">Since red is a brand color, don’t also use it to convey an error state.</p>
            </div>
            <div class="col xlarge-3 large-4 medium-6 small-4">
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/color_color_usage/color-hierarchybrand-meaning-consistencycontext-do-crane.png"></figure>
                <p class="text-secondary">Choose alternative alert colors that don’t use brand coloring.</p>
            </div>
        </div>
    </section>
</div>
<div class="mdc-divider"></div>
<div class="container">
    <section>
        <div class="row">
            <div class="col xlarge-6 large-9 medium-12">
                <h1 class="article_title">State</h1>
                <div class="space"></div>

                <p class="text-secondary">Color can provide information about the state of an app, its components, and elements. This includes:</p>
                <ul>
                    <li class="text-secondary"><b>Current state</b> of an element or component, such as whether a button is enabled or disabled</li>
                    <li class="text-secondary"><b>Changes in state</b> to an app, component, or element</li>
                </ul>
                <p class="text-secondary">Color should be noticeable when indicating state changes, as subtle differences in color may be missed. It’s best to indicate a change of state in more than one way, such as by displaying an icon or moving the location of an element.</p>
                <div class="space"></div>

                <h4>Indicating interaction</h4>
            </div>
        </div>
        <div class="row">
            <div class="col xlarge-3 large-4 medium-6 small-4">
                <p class="text-secondary">To emphasize a specific interaction, use strong color contrasts on content that a user has interacted with, relative to content a user hasn’t.</p>
                <div class="space"></div>
            </div>
            <div class="col xlarge-3 large-4 medium-6 small-4">
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/color_color_usage/color-hierarchybrand-state-interaction-fortnightly.png"></figure>
                <p class="text-secondary">This image has a color treatment that indicates the user is interacting with it.</p>
                <div class="space"></div>
            </div>
        </div>
        <div class="row">
            <div class="col xlarge-6 large-9 medium-12">
                <div class="mdc-divider"></div>
                <div class="space"></div>

                <h4>Indicating selection</h4>
                <div class="space"></div>
            </div>
        </div>
        <div class="row">
            <div class="col xlarge-3 large-4 medium-6 small-4">
                <p class="text-secondary">To emphasize selected elements, use strong color contrasts on those elements.</p>
            </div>
            <div class="col xlarge-3 large-4 medium-6 small-4">
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/color_color_usage/color-hierarchybrand-state-selection-reply.png"></figure>
                <p class="text-secondary">The emails in this list use brand colors to indicate those which are selected, using a colored corner shape.</p>
            </div>
        </div>
    </section>
</div>

</body>
</html>