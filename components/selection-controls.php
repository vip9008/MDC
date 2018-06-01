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
$topAppBarTitle = "Components - Selection controls";

$primaryColor = "indigo";
$accentColor = "blue";

$prefix = "../";
$url = $prefix."components/selection-controls.php";
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
                <h1 class="article_title">Selection controls</h1>
                <h5 class="text-secondary">A divider is a thin line that groups content in lists and layouts.</h5>
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/component_selection_controls/selectioncontrols-usage-howtouse.png"></figure>
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
                <p class="text-secondary">Selection controls allow users to complete tasks that involve making choices such as selecting options, or switching settings on or off. Selection controls are found on screens that ask users to make decisions or declare preferences such as settings or dialogs.</p>
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
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/component_selection_controls/selection-controls-illos-01.png"></figure>
                <h6>Familiar</h6>
                <p class="text-secondary">Selection controls have been in user interfaces for a long time and should be used as expected.</p>
            </div>
            <div class="col xlarge-2 large-3 medium-4 small-4">
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/component_selection_controls/selection-controls-illos-03.png"></figure>
                <h6>Scannable</h6>
                <p class="text-secondary">It should be visible at a glance if a selection control has been selected, and selected items should be more visually prominent than unselected items.</p>
            </div>
            <div class="clearfix visible-smallext visible-small"></div>
            <div class="col xlarge-2 large-3 medium-4 small-4">
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/component_selection_controls/selection-controls-illos-02.png"></figure>
                <h6>Efficient</h6>
                <p class="text-secondary">Selection controls make it easy to compare available options.</p>
            </div>
        </div>
    </section>

    <div class="row">
        <div class="col xlarge-6 large-9 medium-12">
            <div class="mdc-divider"></div>
        </div>
    </div>

    <section>
        <div class="row">
            <div class="col xlarge-6 large-9 medium-12">
                <h4>Types</h4>
            </div>
        </div>
        <div class="row">
            <div class="col xlarge-2 large-3 medium-4 small-4">
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/component_selection_controls/when-to-use-radiobuttons.png"></figure>
                <h6>Radio buttons</h6>
            </div>
            <div class="col xlarge-2 large-3 medium-4 small-4">
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/component_selection_controls/when-to-use-checkboxes.png"></figure>
                <h6>Checkboxes</h6>
            </div>
            <div class="clearfix visible-smallext visible-small"></div>
            <div class="col xlarge-2 large-3 medium-4 small-4">
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/component_selection_controls/when-to-use-switches.png"></figure>
                <h6>Switches</h6>
            </div>
        </div>
        <div class="row">
            <div class="col xlarge-6 large-9 medium-12">
                <div class="space"></div>
                <div class="mdc-divider"></div>
                <div class="space"></div>

                <h4>Types</h4>
                <p class="text-secondary">Use radio buttons to:</p>
                <ul class="text-secondary">
                    <li>Select a single option from a list</li>
                    <li>Expose all available options</li>
                </ul>
                <p class="text-secondary">If available options can be collapsed, consider using a dropdown menu instead, as it uses less space.</p>

                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/component_selection_controls/selectioncontrols-usage-whentouse-radio.png"></figure>
                <p class="text-secondary">Radio buttons</p>

                <div class="space"></div>
                <div class="space"></div>

                <p class="text-secondary">Radio buttons should be used instead of checkboxes if only one item can be selected from a list.</p>
            </div>
        </div>
        <div class="row">
            <div class="col xlarge-3 large-4 medium-6 small-4">
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/component_selection_controls/selectioncontrols-usage-whentouse-do-radio.png"></figure>
                <p class="text-secondary">Use radio buttons when only one item can be selected from a list.</p>
            </div>
        </div>
        <div class="row">
            <div class="col xlarge-6 large-9 medium-12">
                <div class="space"></div>
                <div class="mdc-divider"></div>
                <div class="space"></div>

                <h4>When to use switches</h4>
                <p class="text-secondary">Use switches to:</p>
                <ul class="text-secondary">
                    <li>Toggle a single option on or off, on mobile and tablet</li>
                    <li>Immediately activate or deactivate something</li>
                </ul>

                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/component_selection_controls/selectioncontrols-usage-whentouse-switches.png"></figure>
                <p class="text-secondary">Switches</p>

                <div class="space"></div>
                <div class="space"></div>

                <p class="text-secondary">Swtiches should be used instead of radio buttons if only one item can be selected from a list.</p>

                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/component_selection_controls/selectioncontrols-usage-whentouse-do-switches.png"></figure>
                <p class="text-secondary">Use switches to turn an option on or off, especially on mobile.</p>

                <div class="space"></div>
                <div class="mdc-divider"></div>
                <div class="space"></div>

                <h4>When to use checkboxes</h4>
                <p class="text-secondary">Use checkboxes to:</p>
                <ul class="text-secondary">
                    <li>Select one or multiple items from a list</li>
                    <li>Present a list containing sub-selections</li>
                    <li>Turn an option on or off in desktop environment</li>
                </ul>

                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/component_selection_controls/selectioncontrols-checkboxes-usage-parentchild-1c.png"></figure>
                <p class="text-secondary">Checkboxes</p>

                <div class="space"></div>
                <div class="space"></div>

                <h6>When to use checkboxes instead of toggles</h6>

                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/component_selection_controls/selectioncontrols-usage-whentouse-dont-switches.png"></figure>
                <p class="text-secondary">If a list consists of multiple options, avoid using switches. Use checkboxes instead because they take up less space.</p>
                <div class="space"></div>

                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/component_selection_controls/selectioncontrols-usage-whentouse-do-checkboxes.png"></figure>
                <p class="text-secondary">Checkboxes are for making selections from a list. They let users select more than one item and allow for easy selection or deselection of all items with a parent checkbox.</p>
            </div>
        </div>
    </section>
</div>
<div class="mdc-divider"></div>
<div class="container">
    <section>
        <div class="row">
            <div class="col xlarge-6 large-9 medium-12">
                <h1 class="article_title">Checkboxes</h1>
                <div class="space"></div>

                <h4>Usage</h4>
            </div>
        </div>
    </section>
</div>

</body>
</html>