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
                            <td>(0.2 tracking / 16px font size) = 0.0125 rem</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</div>

</body>
</html>