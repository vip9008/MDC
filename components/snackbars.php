<?php
$language = "en-US";
$direction = "ltr";

$css_files = [
    "css/mdc.snackbar.css",
];
$js_files = [
    "js/mdc.snackbar.js",
];

$head_title = "MDC v2";

$topAppBarColor = "bg-blue-grey-900";
$topAppBarTitle = "Components - Snackbars";

$primaryColor = "indigo";
$accentColor = "blue";

$prefix = "../";
$url = $prefix."components/snackbars.php";
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
                <h1 class="article_title">Snackbars</h1>
                <h5 class="text-secondary">Snackbars provide brief messages about app processes at the bottom of the screen.</h5>
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/component_snackbars/snackbars-container-do.png"></figure>
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

                <p class="text-secondary">Snackbars inform users of a process that an app has performed or will perform. They appear temporarily, towards the bottom of the screen. They shouldn’t interrupt the user experience, and they don’t require user input to disappear.</p>
                <div class="space"></div>

                <h6>Frequency</h6>
                <p class="text-secondary">Only one snackbar may be displayed at a time.</p>

                <h6>Actions</h6>
                <p class="text-secondary">A snackbar can contain a single action. Because they disappear automatically, the action shouldn’t be “Dismiss” or “Cancel”.</p>

                <div class="space"></div>
                <div class="space"></div>

                <h4>Principles</h4>
            </div>
        </div>
        <div class="row">
            <div class="col xlarge-2 large-3 medium-4 small-4">
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/component_snackbars/snackbar-illos-02.png"></figure>
                <h6>Informational</h6>
                <p class="text-secondary">Snackbars provide updates on an app’s processes.</p>
            </div>
            <div class="col xlarge-2 large-3 medium-4 small-4">
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/component_snackbars/snackbar-illos-03.png"></figure>
                <h6>Temporary</h6>
                <p class="text-secondary">Snackbars appear temporarily, and disappear on their own without requiring user input to be dismissed.</p>
            </div>
            <div class="clearfix visible-smallext visible-small"></div>
            <div class="col xlarge-2 large-3 medium-4 small-4">
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/component_snackbars/snackbar-illos-04.png"></figure>
                <h6>Contextual</h6>
                <p class="text-secondary">Snackbars are placed in the most suitable area of the UI.</p>
            </div>
        </div>

        <div class="row">
            <div class="col xlarge-6 large-9 medium-12">
                <div class="space"></div>
                <div class="mdc-divider"></div>
                <div class="space"></div>

                <h4>When to use</h4>
                <p class="text-secondary">Snackbars should communicate messages that are minimally interruptive; those don’t require user action.</p>

                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/component_snackbars/snackbars-when-to-use.png"></figure>
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

                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/component_snackbars/understanding-snackbars-elements.png"></figure>
                <ol class="text-secondary">
                    <li>Text label</li>
                    <li>Container</li>
                    <li>Action (optional)</li>
                </ol>

                <div class="space"></div>
                <div class="space"></div>

                <h4>Text label</h4>
                <p class="text-secondary">Snackbars contain a text label that directly relates to the process being performed. On mobile, the text label can contain up to two lines of text.</p>

                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/component_snackbars/understanding-snackbars-text-1-line.png"></figure>
                <p class="text-secondary">Text labels are short, clear updates on processes that have been performed.</p>
                <div class="space"></div>

                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/component_snackbars/understanding-snackbars-text-2-lines.png"></figure>
                <p class="text-secondary">On mobile, use up to two lines of text to communicate the snackbar message.</p>
                <div class="space"></div>

                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/component_snackbars/snackbars-text-desktop.png"></figure>
                <p class="text-secondary">In wide UIs like desktop and tablet, snackbars should have only a single line of text.</p>

                <div class="space"></div>
                <div class="mdc-divider"></div>
                <div class="space"></div>

                <h4>Container</h4>
                <p class="text-secondary">Snackbars are displayed in rectangular containers with a grey background. Containers should be completely opaque, so that text labels remain legible.</p>

                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/component_snackbars/snackbars-container-do.png"></figure>
                <p class="text-secondary">Snackbar containers use a solid background color with a shadow to stand out against content.</p>
                <div class="space"></div>

                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/component_snackbars/snackbars-container-desktop-do.png"></figure>
                <p class="text-secondary">In wide layouts, extend the container width to accommodate longer text labels.</p>
                <div class="space"></div>
            </div>
        </div>

        <div class="row">
            <div class="col xlarge-3 large-4 medium-6 small-4">
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/component_snackbars/snackbars-container-caution-transparent.png"></figure>
                <p class="text-secondary">An app can apply slight transparency to the container background, as long as text remains clearly legible.</p>
            </div>
        </div>

        <div class="row">
            <div class="col xlarge-6 large-9 medium-12">
                <div class="space"></div>
                <div class="mdc-divider"></div>
                <div class="space"></div>

                <h4>Action</h4>
                <p class="text-secondary">Snackbars can display a single text button that lets users take action on a process performed by the app. Snackbars shouldn’t be the only way to access a core use case, to make an app usable.</p>

                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/component_snackbars/understanding-snackbars-action-color.png"></figure>
                <p class="text-secondary">To distinguish the action from the text label, text buttons should display colored text.</p>
                <div class="space"></div>

                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/component_snackbars/understanding-snackbars-text-2-lines-longer-action.png"></figure>
                <p class="text-secondary">If an action is long, it can be displayed on a third line.</p>
                <div class="space"></div>

                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/component_snackbars/understanding-snackbars-action-undo.png"></figure>
                <p class="text-secondary">To allow users to amend choices, display an "Undo" action.</p>
                <div class="space"></div>

                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/component_snackbars/snackbars-action-caution-dismiss.png"></figure>
                <p class="text-secondary">A dismiss action is unnecessary, as snackbar disappears on their own by default.</p>
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
                <h4>Appearing and disappearing</h4>
                <p class="text-secondary">Snackbars appear without warning, and don't require user interaction. They automatically disappear from the screen after a minimum of four seconds, and a maximum of ten seconds.</p>

                <div class="space"></div>
                <div class="mdc-divider"></div>
                <div class="space"></div>

                <h4>Consecutive snackbars</h4>
                <p class="text-secondary">When multiple snackbar updates are necessary, they should appear one at a time.</p>
                <p class="text-secondary">Avoid stacking snackbars on top of one another.</p>
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

                <p class="text-secondary">Snackbars should be placed at the bottom of a UI, in front of app content. Avoid placing a snackbar in front of frequently used touch targets or navigation.</p>

                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/component_snackbars/snackbars-layout-do.png"></figure>
                <p class="text-secondary">Place a snackbar in front of content.</p>
                <div class="space"></div>

                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/component_snackbars/snackbars-layout-don-t-edge-to-edge.png"></figure>
                <p class="text-secondary">Snackbars can span the entire width of a UI. However, they should not appear in front of navigation or other important UI elements like floating action buttons.</p>

                <div class="space"></div>
                <div class="space"></div>

                <h4>Snackbars and floating action buttons (FABs)</h4>
                <p class="text-secondary">Snackbars should appear above FABs.</p>

                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/component_snackbars/snackbars-layout-fab.png"></figure>
                <div class="space"></div>

                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/component_snackbars/snackbars-layout-fab-caution.png"></figure>
                <p class="text-secondary">The FAB can be pushed up when a snackbar appears, though this can cause distraction if multiple snackbars appear.</p>

                <div class="space"></div>
                <div class="mdc-divider"></div>
                <div class="space"></div>

                <h4>Snackbars and persistent footer elements</h4>
                <p class="text-secondary">Snackbars should appear directly above persistent footer elements.</p>

                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/component_snackbars/snackbars-layout-do-navigation.png"></figure>
                <div class="space"></div>

                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/component_snackbars/snackbars-layout-sheets-extended.png"></figure>
                <p class="text-secondary">Place snackbars in front of medium extended sheets.</p>

                <div class="space"></div>
                <div class="mdc-divider"></div>
                <div class="space"></div>

                <h4>Snackbars in wide layouts</h4>
                <p class="text-secondary">In wide layouts, snackbars can be left-aligned or center-aligned if they are consistently placed on the same spot at the bottom of the screen.</p>

                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/component_snackbars/snackbars-layout-desktop-do.png"></figure>
                <div class="space"></div>

                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/component_snackbars/snackbars-container-landscape-do-2.png"></figure>
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
<div id="mdc-snackbars">
    <div class="mdc-snackbar">
        <div class="text">
            Photo saved to your favorites
        </div>
    </div>
    .
    .
    .
</div>
TEXT
) ?></pre>
            </div>
        </div>

        <div class="row">
            <div class="col xlarge-2 large-3 medium-6">
                <div class="mdc-button-group" style="margin-top: 1rem;">
                    <button  onclick="mdc_snackbar_example(2, '')" class="mdc-button btn-contained full-width bg-deep-purple-A700 mdc-snackbar-example">Run Snackbar</button>
                </div>
                <p class="text-secondary">Default snackbar with action.</p>
            </div>
            <div class="col xlarge-6 large-7 medium-10">
<pre class="bg-app-bar html"><?= htmlspecialchars(
<<<TEXT
<div id="mdc-snackbars">
    <div class="mdc-snackbar">
        <div class="text">
            Your photo has been archived.
        </div>
        <div class="mdc-button-group">
            <button class="mdc-button blue">Undo</button>
        </div>
    </div>
    .
    .
    .
</div>
TEXT
) ?></pre>
            </div>
        </div>

        <div class="row">
            <div class="col xlarge-2 large-3 medium-6">
                <div class="mdc-button-group" style="margin-top: 1rem;">
                    <button  onclick="mdc_snackbar_example(3, '')" class="mdc-button btn-contained full-width bg-deep-purple-A700 mdc-snackbar-example">Run Snackbar</button>
                </div>
                <p class="text-secondary">Default snackbar with long action.</p>
            </div>
            <div class="col xlarge-6 large-7 medium-10">
<pre class="bg-app-bar html"><?= htmlspecialchars(
<<<TEXT
<div id="mdc-snackbars">
    <div class="mdc-snackbar stacked">
        ...
    </div>
    .
    .
    .
</div>
TEXT
) ?></pre>
            </div>
        </div>

        <div class="row">
            <div class="col xlarge-6 large-9 medium-12">
                <div class="space"></div>
                <div class="space"></div>

                <h4>Snackbars styling options</h4>
                <div class="space"></div>
            </div>
        </div>

        <div class="row">
            <div class="col xlarge-2 large-3 medium-6">
                <div class="mdc-button-group" style="margin-top: 1rem;">
                    <button  onclick="mdc_snackbar_example(2, 'position-start')" class="mdc-button btn-contained full-width bg-deep-purple-A700 mdc-snackbar-example">Run Snackbar</button>
                </div>
                <p class="text-secondary">Snackbars positioned at the edge of the screen.</p>
            </div>
            <div class="col xlarge-6 large-7 medium-10">
<pre class="bg-app-bar html"><?= htmlspecialchars(
<<<TEXT
<div id="mdc-snackbars" class="position-start">
    .
    .
    .
</div>
TEXT
) ?></pre>
            </div>
        </div>

        <div class="row">
            <div class="col xlarge-2 large-3 medium-6">
                <div class="mdc-button-group" style="margin-top: 1rem;">
                    <button  onclick="mdc_snackbar_example(2, 'standard')" class="mdc-button btn-contained full-width bg-deep-purple-A700 mdc-snackbar-example">Run Snackbar</button>
                </div>
                <p class="text-secondary">Standard snackbars</p>
            </div>
            <div class="col xlarge-6 large-7 medium-10">
<pre class="bg-app-bar html"><?= htmlspecialchars(
<<<TEXT
<div id="mdc-snackbars" class="standard">
    .
    .
    .
</div>
TEXT
) ?></pre>
            </div>
        </div>

        <div class="row">
            <div class="col xlarge-2 large-3 medium-6">
                <div class="mdc-button-group" style="margin-top: 1rem;">
                    <button  onclick="mdc_snackbar_example(2, 'position-start standard')" class="mdc-button btn-contained full-width bg-deep-purple-A700 mdc-snackbar-example">Run Snackbar</button>
                </div>
                <p class="text-secondary">Standard snackbars positioned at the edge of the screen.</p>
            </div>
            <div class="col xlarge-6 large-7 medium-10">
<pre class="bg-app-bar html"><?= htmlspecialchars(
<<<TEXT
<div id="mdc-snackbars" class="position-start standard">
    .
    .
    .
</div>
TEXT
) ?></pre>
            </div>
        </div>
    </section>
</div>

<div id="mdc-snackbars"></div>

<div id="snackbar-examples" class="hidden">

<div class="example-1">
    <div class="mdc-snackbar">
        <div class="text">
            Photo saved to your favorites.
        </div>
    </div>
</div>

<div class="example-2">
    <div class="mdc-snackbar">
        <div class="text">
            Your photo has been archived.
        </div>
        <div class="mdc-button-group">
            <button class="mdc-button blue" onclick="mdc_enable_ex_snackbars()">Undo</button>
        </div>
    </div>
</div>

<div class="example-3">
    <div class="mdc-snackbar stacked">
        <div class="text">
            This item already has the label "travel". You can add a new label.
        </div>
        <div class="mdc-button-group">
            <button class="mdc-button blue" onclick="mdc_enable_ex_snackbars()">Add a new label</button>
        </div>
    </div>
</div>

</div>

<script type="text/javascript">
    var mdc_example_snackbar_timeout;

    function mdc_snackbar_example(num, snackbars_class) {
        var delay = 4;

        $('#mdc-snackbars').removeClass('position-start standard').addClass(snackbars_class);

        $('#mdc-snackbars').html($('#snackbar-examples > .example-'+num).html()).delay(100).queue(function(next) {
            mdc_activate_snackbars(delay);
            next();
        });

        $('button.mdc-snackbar-example').prop("disabled", true);

        mdc_example_snackbar_timeout = setTimeout(function() {
            $('button.mdc-snackbar-example').removeAttr("disabled");
        }, (delay + 0.5) * 1000);
    }

    function mdc_enable_ex_snackbars() {
        clearTimeout(mdc_example_snackbar_timeout);
        $('button.mdc-snackbar-example').removeAttr("disabled");
    }
</script>

<?php include $prefix."_includes/footer.php"; ?>

</body>
</html>