<?php
$language = "en-US";
$direction = "ltr";

$css_files = [
    "css/mdc.banner.css",
];
$js_files = [
    "js/mdc.banner.js",
];

$head_title = "MDC v2";

$topAppBarColor = "bg-blue-grey-900";
$topAppBarTitle = "Components - Banners";

$primaryColor = "indigo";
$accentColor = "blue";

$prefix = "../";
$url = $prefix."components/banners.php";
?>

<!DOCTYPE html>
<html lang="<?= $language ?>" dir="<?= $direction ?>">

<?php include $prefix."_includes/head.php"; ?>

<body class="mdc-drawer-expand">

<?php include $prefix."_includes/drawer.php"; ?>
<?php include $prefix."_includes/app_bar.php"; ?>

<div id="mdc-banners">
    <div class="banners-container">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="mdc-banner">
                        <div class="text">Banner implementation support for each platform is indicated below.</div>
                        <div class="mdc-button-group">
                            <button class="mdc-button deep-purple-A700">Action</button>
                            <button class="mdc-button deep-purple-A700">Action</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <section>
        <div class="row">
            <div class="col xlarge-6 large-9 medium-12">
                <h1 class="article_title">Banners</h1>
                <h5 class="text-secondary">A banner displays a prominent message and related optional actions.</h5>
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/component_banners/banners-usage.png"></figure>
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

                <p class="text-secondary">A banner displays an important, succinct message, and provides actions for users to address (or dismiss the banner). It requires a user action to be dismissed.</p>
                <div class="space"></div>

                <p class="text-secondary">Banners should be displayed at the top of the screen, below a top app bar. They are persistent and nonmodal, allowing the user to ignore them or interact with them at any time.</p>
                <div class="space"></div>

                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/component_banners/banners-when-to-use.png"></figure>
                <p class="text-secondary">Banners communicate messages which are important but don’t require user action. They are more prominent than snackbars, and less interruptive than dialogs.</p>

                <div class="space"></div>
                <div class="space"></div>

                <h4>Principles</h4>
            </div>
        </div>
        <div class="row">
            <div class="col xlarge-2 large-3 medium-4 small-4">
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/component_banners/alerts-illo-1.png"></figure>
                <h6>Appropriately interruptive</h6>
                <p class="text-secondary">Banners are interruptive, but their level of interruption should match the information they contain and the context in which they appear.</p>
            </div>
            <div class="col xlarge-2 large-3 medium-4 small-4">
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/component_banners/alerts-illo-2.png"></figure>
                <h6>Clear</h6>
                <p class="text-secondary">Banners communicate a succinct message and what will happen if users interact with them.</p>
            </div>
            <div class="clearfix visible-smallext visible-small"></div>
            <div class="col xlarge-2 large-3 medium-4 small-4">
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/component_banners/alerts-illo-3.png"></figure>
                <h6>Focused</h6>
                <p class="text-secondary">Banners contain a single message and specific actions a user can take.</p>
            </div>
        </div>
    </section>
</div>
<div class="mdc-divider"></div>
<div class="container">
    <section>
        <div class="row">
            <div class="col xlarge-6 large-9 medium-12">
                <h1 class="article_title">Anatomy</h1>
                <div class="space"></div>

                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/component_banners/banners-elements.png"></figure>
                <ol class="text-secondary">
                    <li>Supporting illustration (optional)</li>
                    <li>Container</li>
                    <li>Text</li>
                    <li>Buttons</li>
                </ol>

                <div class="space"></div>
                <div class="space"></div>

                <h4>Banner container</h4>
                <p class="text-secondary">A banner container is rectangular, extending the full width of a layout. The container should be placed in a consistent and prominent location throughout an app, sharing the same elevation as screen content.</p>
                <p class="text-secondary">Only one banner should be shown at a time.</p>

                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/component_banners/banners-container-mobile.png"></figure>
                <p class="text-secondary">A banner appears above content and below a top app bar.</p>
                <div class="space"></div>

                <div class="space"></div>
                <div class="mdc-divider"></div>
                <div class="space"></div>

                <h4>Banner message</h4>
                <p class="text-secondary">The banner message communicates a change or error within an app.</p>
                <p class="text-secondary">Banners should be considered as part of your overall in-app messaging strategy.</p>

                <div class="space"></div>
                <div class="mdc-divider"></div>
                <div class="space"></div>

                <h4>Buttons</h4>
                <p class="text-secondary">Buttons in banners should directly relate to a banner’s message and clearly represent the banner’s action. Buttons must be labelled with text, not icons, for clarity. Banners can contain up to two <a href="<?= $prefix ?>components/buttons.php">text buttons</a> with the dismissive action placed on the left and the confirming action on the right.</p>
                <p class="text-secondary">Place buttons under the banner message, or on the same line if there is enough room to fit both.</p>

                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/component_banners/banners-buttons-do.png"></figure>
                <p class="text-secondary">Banners may have one or two low-emphasis text buttons.</p>
                <div class="space"></div>
            </div>
        </div>

        <div class="row">
            <div class="col xlarge-3 large-4 medium-6 small-4">
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/component_banners/banners-buttons-caution-1.png"></figure>
                <p class="text-secondary">Avoid using a single button as a way to acknowledge a banner and dismiss it. A button to dismiss a banner should be paired with an action to address its message.</p>
            </div>
            <div class="col xlarge-3 large-4 medium-6 small-4">
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/component_banners/banners-buttons-do-2.png"></figure>
                <p class="text-secondary">Banners are intended to be minimally interruptive. If a button in a banner requires extra emphasis, a contained, full-width button can be used for a single, prominent action (though its prominence may be distracting).</p>
            </div>
        </div>

        <div class="row">
            <div class="col xlarge-3 large-4 medium-6 small-4">
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/component_banners/banners-buttons-dont-3.png"></figure>
                <p class="text-secondary">Don’t stack buttons unless there isn’t sufficient room to display them side by side.</p>
            </div>
        </div>

        <div class="row">
            <div class="col xlarge-6 large-9 medium-12">
                <div class="space"></div>
                <div class="mdc-divider"></div>
                <div class="space"></div>

                <h4>Supporting illustration</h4>
                <p class="text-secondary">Banners can supplement their message using a supporting illustration.</p>

                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/component_banners/banners-imagery.png"></figure>
                <p class="text-secondary">Icons can help communicate a banner’s message.</p>
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
                <h1 class="article_title">Placement</h1>
                <div class="space"></div>

                <p class="text-secondary">Banners should be placed at the top of a layout or screen. When scrolling, banners typically move with content and scroll off the screen. Only one banner should be shown at a time.</p>
                <div class="space"></div>

                <h4>Banners and top bars</h4>
                <p class="text-secondary">Banners are placed at the top of the screen below the top app bar. They can be fixed, or scroll with content, depending on the environment:</p>
                <ul class="text-secondary">
                    <li>On mobile, they scroll off-screen with content, at the same elevation as app content.</li>
                    <li>On desktop, they remain fixed at the top of the screen, at the same elevation as the top app bar.</li>
                </ul>
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/component_banners/banners-layout-placement.png"></figure>
                <p class="text-secondary">Banner and a top bar.</p>

                <div class="space"></div>
                <div class="mdc-divider"></div>
                <div class="space"></div>

                <h4>Banners and persistent search</h4>
                <p class="text-secondary">When a banner appears with a persistent search bar, it’s placed below the search bar.</p>
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/component_banners/banners-layout-placement-persistent-search.png"></figure>
                <p class="text-secondary">A banner appears below a persistent search bar.</p>

                <div class="space"></div>
                <div class="mdc-divider"></div>
                <div class="space"></div>

                <h4>Banners and bottom navigation</h4>
                <p class="text-secondary">When bottom navigation is present, banners should remain at the top of the screen.</p>
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/component_banners/banners-placement-bottomnav.png"></figure>
                <p class="text-secondary">Banners appear at the top of the screen when bottom navigation is present.</p>

                <div class="space"></div>
                <div class="mdc-divider"></div>
                <div class="space"></div>

                <h4>Banners in wide layouts</h4>
                <p class="text-secondary">Banners in wide layouts span the entire width of the screen. They appear at the same elevation as the top app bar and remain on screen while content scrolls.</p>
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/component_banners/banners-placement-desktop.png"></figure>
                <p class="text-secondary">A banner in a wide layout appears at the same elevation as the top app bar.</p>

                <div class="space"></div>
                <div class="space"></div>

                <p class="text-secondary">When vertical navigation is present, banners can appear above content rather than across the full width of the screen.</p>
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/component_banners/banners-placement-desktop-rails.png"></figure>
                <p class="text-secondary">A banner on a screen with a navigation drawer appears slightly above just the content (on the y-axis), at the same elevation as that content.</p>

                <div class="space"></div>
                <div class="mdc-divider"></div>
                <div class="space"></div>

                <h4>Banners and pannable content</h4>
                <p class="text-secondary">Banners remain on screen when scrolling pannable content.</p>
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/component_banners/banners-layout-placement-3.png"></figure>
                <p class="text-secondary">Banners remain on screen when scrolling pannable content, such as a map.</p>
            </div>
        </div>
    </section>
</div>
<div class="mdc-divider"></div>
<div class="container">
    <section>
        <div class="row">
            <div class="col xlarge-6 large-9 medium-12">
                <h1 class="article_title">Behavior</h1>
                <div class="space"></div>
                <h4>Appearing</h4>
                <p class="text-secondary">Banners typically appear when a screen loads content.</p>
                <p class="text-secondary">Banners that appear after a screen loads should animate on screen from the top of a layout. If the banner is at the same elevation as content, it pushes content downwards.</p>

                <div class="space"></div>
                <div class="mdc-divider"></div>
                <div class="space"></div>

                <h4>Dismissing banners</h4>
                <p class="text-secondary">Banners must remain on screen until dismissed by the user.</p>
            </div>
        </div>
    </section>
</div>
<div class="mdc-divider"></div>
<div class="container">
    <section>
        <div class="row">
            <div class="col xlarge-6 large-9 medium-12">
                <h1 class="article_title">Implementation</h1>
                <div class="space"></div>

                <h6>Related components:</h6>
                <ul class="text-secondary">
                    <li><a href="<?= $prefix ?>components/buttons.php">Buttons</a></li>
                </ul>
                <div class="space"></div>

                <h6>Javascript methods:</h6>
                <div class="table-container">
                    <table class="bg-cards methods-doc" style="width: auto; min-width: 45rem;">
                        <tbody><tr>
                            <th class="bg-app-bar code" colspan="3">
                                <b class="green">void</b>
                                <b class="blue-grey-800">mdc_activate_snackbars</b>
                                (
                                <b class="deep-purple-A700">seconds</b> = <b class="blue-900">4.0</b>
                                )
                            </th>
                        </tr>
                        <tr>
                            <td colspan="3">A method to run all snackbars sequentially.</td>
                        </tr>
                        <tr>
                            <td><b class="deep-purple-A700 code">seconds</b></td>
                            <td class="code">float</td>
                            <td>Time in seconds before removing an active snackbar. cannot be less than 4 or more than 10.</td>
                        </tr>
                    </tbody></table>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col xlarge-2 large-3 medium-6">
                <div class="mdc-button-group" style="margin-top: 1rem;">
                    <button  onclick="mdc_snackbar_example(1, '')" class="mdc-button btn-contained full-width bg-deep-purple-A700 mdc-snackbar-example">Run Snackbar</button>
                </div>
                <p class="text-secondary">Default snackbar.</p>
            </div>
            <div class="col xlarge-6 large-7 medium-10">
<pre class="bg-app-bar html"><?= htmlspecialchars(
<<<TEXT
TEXT
) ?></pre>
            </div>
        </div>
    </section>
</div>

<div id="banner-examples" class="hidden">

<div class="example-1">
    <div class="mdc-banner">
        <div class="text">
            Photo saved to your favorites.
        </div>
    </div>
</div>

</div>

<script type="text/javascript">
    function mdc_banner_example(num, banners_class) {
        
    }
</script>

<?php include $prefix."_includes/footer.php"; ?>

</body>
</html>