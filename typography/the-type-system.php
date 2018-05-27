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
    "css/mdc.button.css",
];
$js_files = [
    "js/mdc.list.js",
    "js/mdc.nav.drawer.js",
    "js/mdc.top.app.bar.js",
];

$head_title = "MDC v2";

$topAppBarColor = "bg-blue-grey-900";
$topAppBarTitle = "Typography - The type system";

$primaryColor = "indigo";
$accentColor = "blue";

$prefix = "../";
$url = $prefix."typography/the-type-system.php";
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
                <h1 class="article_title">The type system</h1>
                <h5 class="text-secondary">Use typography to present your design and content as clearly and efficiently as possible.</h5>
            </div>
        </div>
    </section>
</div>
<div class="mdc-divider"></div>
<div class="container">
    <section>
        <div class="row">
            <div class="col xlarge-6 large-9 medium-12">
                <h1 class="article_title">Type Scale</h1>
                <div class="space"></div>
                <p class="text-secondary">The Material Design type scale includes a range of contrasting styles that support the needs of your product and its content.</p>
                <p class="text-secondary">The type scale is a combination of 12 styles that are supported by the type system. It contains reusable categories of text, each with an intended application and meaning.</p>
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/typography_type_system/typesystem-typescale.png"></figure>
                <p class="text-secondary">The Material Design type scale. (Letter spacing values are compatible with Sketch.)</p>

                <h4>Font size units</h4>
                <p class="text-secondary">The following units are used to express font size on Android, iOS, and the web.</p>

                <table class="bg-cards">
                    <thead class="bg-app-bar">
                        <tr>
                            <th><b>Platform</b></th>
                            <th><b>Font size unit</b></th>
                            <th><b>Conversion ratio</b></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Android</td>
                            <td>sp</td>
                            <td>1.0</td>
                        </tr>
                        <tr>
                            <td>iOS</td>
                            <td>pt</td>
                            <td>1.0</td>
                        </tr>
                        <tr>
                            <td>Web</td>
                            <td>rem</td>
                            <td>0.0625</td>
                        </tr>
                    </tbody>
                </table>

                <h6>Example conversions</h6>
                <table class="bg-cards">
                    <thead class="bg-app-bar">
                        <tr>
                            <th><b>Android</b></th>
                            <th><b>iOS</b></th>
                            <th><b>Web</b></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>10sp</td>
                            <td>10pt</td>
                            <td>0.625rem</td>
                        </tr>
                        <tr>
                            <td>12sp</td>
                            <td>12pt</td>
                            <td>0.75rem</td>
                        </tr>
                        <tr>
                            <td>24sp</td>
                            <td>24pt</td>
                            <td>1.5rem</td>
                        </tr>
                        <tr>
                            <td>60sp</td>
                            <td>60pt</td>
                            <td>3.75rem</td>
                        </tr>
                    </tbody>
                </table>
                <p class="text-secondary">Web browsers calculate the REM (the root em size) based on the root element size. The default for modern web browsers is 16px, so the conversion is SP_SIZE/16 = rem.</p>

                <div class="space"></div>
                <div class="mdc-divider"></div>
                <div class="space"></div>

                <h4>Letter spacing units</h4>
                <p class="text-secondary">The following units are for spacing letters in a UI.</p>
                <table class="bg-cards">
                    <thead class="bg-app-bar">
                        <tr>
                            <th><b>Platform</b></th>
                            <th><b>Letter spacing unit</b></th>
                            <th><b>Conversion ratio</b></th>
                        </tr>
                    </thead>
                    <tbody>
                            <td>Android</td>
                            <td>em</td>
                            <td>(Tracking from Sketch / font size in sp) = letter spacing</td>
                        <tr>
                            <td>iOS</td>
                            <td>pt</td>
                            <td>1.0</td>
                        </tr>
                        <tr>
                            <td>Web</td>
                            <td>em</td>
                            <td>(Tracking from Sketch / font size in px) = letter spacing</td>
                        </tr>
                    </tbody>
                </table>

                <h6>Letter spacing examples</h6>
                <table class="bg-cards">
                    <thead class="bg-app-bar">
                        <tr>
                            <th><b>Android</b></th>
                            <th><b>iOS</b></th>
                            <th><b>Web</b></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>(0.2 tracking / 16sp font size) = 0.0125 em</td>
                            <td>-0.1 pt</td>
                            <td>(0.2 tracking / 16px font size) = 0.0125 em</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</div>
<div class="mdc-divider"></div>
<div class="container">
    <section>
        <div class="row">
            <div class="col xlarge-6 large-9 medium-12">
                <h1 class="article_title">Applying the type scale</h1>
                <div class="space"></div>
                <p class="text-secondary">The type scale appears as text in components and the overall layout. Type attributes can use custom values for the typeface, font, case, size, and letter spacing.</p>

                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/typography_type_system/applyingtypescale-buckets-values.png"></figure>
                <ol class="text-secondary">
                    <li>Scale categories</li>
                    <li>Actual values</li>
                </ol>
                <div class="space"></div>

                <h4>Headlines</h4>
                <p class="text-secondary">In the type scale, headlines span from a range of 1 through 6. Headlines are the largest text on the screen, reserved for short, important text or numerals.</p>
                <p class="text-secondary">For headlines, you can choose an expressive font, such as a display, handwritten, or script style. These unconventional font designs have details and intricacy that help attract the eye.</p>

                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/typography_type_system/applyingtypescale-headlines-display.png"></figure>
                <p class="text-secondary">A display style is used for Headline 2.</p>
                <div class="space"></div>

                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/typography_type_system/applyingtypescale-headlines-script.png"></figure>
                <p class="text-secondary">A script style is used for Headline 3.</p>
                <div class="space"></div>

                <p class="text-secondary">Serif or sans serif typefaces work well for headlines, especially at smaller sizes.</p>
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/typography_type_system/applyingtypescale-headlines-sans.png"></figure>
                <p class="text-secondary">A sans serif is used for Headline 6.</p>
                
                <div class="space"></div>
                <div class="mdc-divider"></div>
                <div class="space"></div>

                <h4>Subtitles</h4>
                <p class="text-secondary">Subtitles are smaller than headlines. They are typically reserved for medium-emphasis text that is shorter in length. Serif or sans serif typefaces work well for subtitles.</p>

                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/typography_type_system/applyingtypescale-subtitle-sanserif.png"></figure>
                <p class="text-secondary">A sans serif typeface is used for Subtitle 1.</p>
                <div class="space"></div>

                <p class="text-secondary">For subtitles, use caution when using expressive fonts, including display, handwritten, and script styles.</p>
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/typography_type_system/applyingtypescale-subtitle-expressive-caution.png"></figure>
                <p class="text-secondary">Use caution when using expressive fonts for subtitles.</p>
                
                <div class="space"></div>
                <div class="mdc-divider"></div>
                <div class="space"></div>

                <h4>Body</h4>
                <p class="text-secondary">Body text comes in ranges 1-2, and it’s typically used for long-form writing as it works well for small text sizes. For longer sections of text, a serif or sans serif typeface is recommended.</p>

                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/typography_type_system/applyingtypescale-body-serif.png"></figure>
                <p class="text-secondary">A serif typeface is used for Body 1.</p>
                <div class="space"></div>

                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/typography_type_system/applyingtypescale-body-sanserif.png"></figure>
                <p class="text-secondary">A sans serif typeface is used for Body 2.</p>
                <div class="space"></div>

                <p class="text-secondary">Don’t use expressive fonts, including display, handwritten, and script styles for body copy.</p>
                
                <div class="space"></div>
                <div class="mdc-divider"></div>
                <div class="space"></div>

                <h4>Caption and overline</h4>
                <p class="text-secondary">Caption and overline text (text with a line above it) are the smallest font sizes. They are used sparingly to annotate imagery or to introduce a headline.</p>

                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/typography_type_system/applyingtypescale-capover-serif.png"></figure>
                <p class="text-secondary">A serif typeface being used for a caption.</p>
                <div class="space"></div>

                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/typography_type_system/applyingtypescale-capover-sanserif.png"></figure>
                <p class="text-secondary">A sans serif typeface being used for an overline.</p>
                <div class="space"></div>

                <p class="text-secondary">Don’t use expressive fonts, including display, handwritten, and script styles for caption or overline.</p>
                
                <div class="space"></div>
                <div class="mdc-divider"></div>
                <div class="space"></div>

                <h4>Button</h4>
                <p class="text-secondary">Button text is a call to action used different types of buttons (such as text, outlined and contained buttons) and in tabs, dialogs, and cards.</p>
                <p class="text-secondary">Button text is typically an all caps sans serif.</p>

                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/typography_type_system/applyingtypescale-button-sanserif.png"></figure>
                <p class="text-secondary">An all caps sans serif typeface being used for a button.</p>
                <div class="space"></div>

                <p class="text-secondary">Button text can be sentence case, sans serif, or serif.</p>

                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/typography_type_system/applyingtypescale-button-sanserif-uplow.png"></figure>
                <p class="text-secondary">Use caution when having button text appear distinct from non-interactive text, such as this upper lower, sans serif typeface on a button.</p>
                <div class="space"></div>

                <p class="text-secondary">Don’t use expressive fonts as button text, including display, handwritten, and script styles.</p>
            </div>
        </div>
    </section>
</div>

</body>
</html>