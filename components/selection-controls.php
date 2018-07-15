<?php
$language = "en-US";
$direction = "ltr";

$css_files = [
];
$js_files = [
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

<body class="mdc-drawer-expand">

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
                <div class="space"></div>

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

        <div class="row">
            <div class="col xlarge-6 large-9 medium-12">
                <div class="space"></div>
                <div class="mdc-divider"></div>
                <div class="space"></div>
                
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

                <h4>When to use radio buttons</h4>
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
        <div class="row">
            <div class="col xlarge-3 large-4 medium-6 small-4">
                <p class="text-secondary">Checkboxes allow the user to select one or more items from a set. Checkboxes can be used to turn an option on or off.</p>
            </div>
            <div class="col xlarge-3 large-4 medium-6 small-4">
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/component_selection_controls/selectioncontrols-checkboxes-usage.png"></figure>
                <p class="text-secondary">Selected and unselected checkboxes.</p>
            </div>
        </div>
        <div class="row">
            <div class="col xlarge-6 large-9 medium-12">
                <div class="space"></div>
                <div class="space"></div>

                <h6>Parent and child checkboxes</h6>
                <p class="text-secondary">Checkboxes can have a parent-child relationship with other checkboxes.</p>
                <ul class="text-secondary">
                    <li>When the parent checkbox is checked, all child checkboxes are checked</li>
                    <li>If a parent checkbox is unchecked, all child checkboxes are unchecked</li>
                    <li>If some, but not all, child checkboxes are checked, the parent checkbox becomes an indeterminate checkbox</li>
                </ul>

                <div class="space"></div>
                <div class="mdc-divider"></div>
                <div class="space"></div>

                <h4>States</h4>
                <p class="text-secondary">Checkboxes can be selected, unselected, or indeterminate. Checkboxes have enabled, hover, focused and pressed states.</p>

                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/component_selection_controls/selectioncontrols-checkboxes-states.png"></figure>
                <p class="text-secondary">Checkbox states.</p>
            </div>
        </div>
    </section>
</div>
<div class="mdc-divider"></div>
<div class="container">
    <section>
        <div class="row">
            <div class="col xlarge-6 large-9 medium-12">
                <h1 class="article_title">Radio buttons</h1>
                <div class="space"></div>

                <h4>Usage</h4>
            </div>
        </div>
        <div class="row">
            <div class="col xlarge-3 large-4 medium-6 small-4">
                <p class="text-secondary">Radio buttons allow the user to select one option from a set. Use radio buttons when the user needs to see all available options. If available options can be collapsed, consider using a dropdown menu because it uses less space.</p>
            </div>
            <div class="col xlarge-3 large-4 medium-6 small-4">
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/component_selection_controls/selectioncontrols-radio-usage.png"></figure>
                <p class="text-secondary">Selected and unselected radio buttons</p>
            </div>
        </div>
        <div class="row">
            <div class="col xlarge-6 large-9 medium-12">
                <div class="space"></div>
                <div class="mdc-divider"></div>
                <div class="space"></div>

                <h4>States</h4>
                <p class="text-secondary">Radio buttons can be selected or unselected. Radio buttons have enabled, hover, focused and pressed states.</p>

                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/component_selection_controls/selectioncontrols-radio-states.png"></figure>
                <p class="text-secondary">Radio button states.</p>
            </div>
        </div>
    </section>
</div>
<div class="mdc-divider"></div>
<div class="container">
    <section>
        <div class="row">
            <div class="col xlarge-6 large-9 medium-12">
                <h1 class="article_title">Switches</h1>
                <div class="space"></div>

                <h4>Usage</h4>
            </div>
        </div>
        <div class="row">
            <div class="col xlarge-3 large-4 medium-6 small-4">
                <p class="text-secondary">Switches toggle the state of a single setting on or off. They are the preferred way to adjust settings on mobile.</p>

                <h6>State</h6>
                <p class="text-secondary">A switch is successfully toggled when the user slides a switch thumb to the other side of the track, and the state of the switch changes.</p>

                <h6>Text label</h6>
                <p class="text-secondary">The option that the switch controls, as well as the state it’s in, should be made clear from the corresponding inline label.</p>
                <p class="text-secondary">Avoid creating a switch that includes the text “on” and “off” within the graphic itself. The switch alone should be sufficient.</p>
            </div>
            <div class="col xlarge-3 large-4 medium-6 small-4">
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/component_selection_controls/selectioncontrols-switches-usage.png"></figure>
                <ol class="text-secondary">
                    <li>Thumb</li>
                    <li>Track</li> 
                </lo>
            </div>
        </div>
        <div class="row">
            <div class="col xlarge-6 large-9 medium-12">
                <div class="space"></div>
                <div class="mdc-divider"></div>
                <div class="space"></div>

                <h4>Behavior</h4>
                <p class="text-secondary">When a user toggles a switch, its corresponding action takes effect immediately. If a switch cannot be turned on, the switch will automatically turn back off.</p>

                <div class="space"></div>
                <div class="space"></div>

                <h6>Display processing status</h6>
                <p class="text-secondary">Because a switch shows the actual status of something, sometimes there is a delay in its change of state. In such cases, a processing status animation can be used.</p>
                <p class="text-secondary">A processing status is an animation on the thumb of the switch. For example, it can be used when a switch that controls a hardware feature experiences a delay before its final status can be confirmed.</p>

                <div class="space"></div>
                <div class="mdc-divider"></div>
                <div class="space"></div>

                <h4>States</h4>
                <p class="text-secondary">Switches can be on or off. Switches have enabled, hover, focused, and pressed states.</p>
                <p class="text-secondary">Display the outer radial reaction only on form factors that use touch, where interaction may obstruct the element completely.</p>
                <p class="text-secondary">For desktop, the radial reaction isn’t needed.</p>

                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/component_selection_controls/selectioncontrols-switches-states.png"></figure>
                <p class="text-secondary">Switch states.</p>
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
                    <li><a href="<?= $prefix ?>components/lists.php">Lists</a></li>
                </ul>
                <div class="space"></div>
                
                <h4>Checkboxes</h4>
            </div>
        </div>
        <div class="row">
            <div class="col xlarge-2 large-3 medium-6">
                <div class="space"></div>

                <div class="mdc-checkbox deep-purple-A700" tabindex="0">
                    <input type="hidden" value="0">
                </div>
                <div class="mdc-checkbox deep-purple-A700 indeterminate" tabindex="0">
                    <input type="hidden" value="0">
                </div>
                <div class="mdc-checkbox deep-purple-A700" tabindex="0">
                    <input type="hidden" value="1">
                </div>

                <div class=""></div>

                <div class="mdc-checkbox deep-purple-A700" tabindex="0">
                    <input type="hidden" value="0" disabled>
                </div>
                <div class="mdc-checkbox deep-purple-A700 indeterminate" tabindex="0">
                    <input type="hidden" value="0" disabled>
                </div>
                <div class="mdc-checkbox deep-purple-A700" tabindex="0">
                    <input type="hidden" value="1" disabled>
                </div>
            </div>
            <div class="col xlarge-6 large-7 medium-10">
<pre class="bg-app-bar html"><?= htmlspecialchars(
<<<TEXT
<div class="mdc-checkbox deep-purple-A700" tabindex="0">
    <input type="hidden" value="0">
</div>
<div class="mdc-checkbox deep-purple-A700 indeterminate" tabindex="0">
    <input type="hidden" value="0">
</div>
<div class="mdc-checkbox deep-purple-A700" tabindex="0">
    <input type="hidden" value="1">
</div>

<div class="mdc-checkbox deep-purple-A700" tabindex="0">
    <input type="hidden" value="0" disabled>
</div>
<div class="mdc-checkbox deep-purple-A700 indeterminate" tabindex="0">
    <input type="hidden" value="0" disabled>
</div>
<div class="mdc-checkbox deep-purple-A700" tabindex="0">
    <input type="hidden" value="1" disabled>
</div>
TEXT
) ?></pre>
            </div>
        </div>
        <div class="row">
            <div class="col xlarge-2 large-3 medium-6">
                <div class="space"></div>
                
                <div class="mdc-list-item">
                    <div class="mdc-checkbox deep-purple-A700" tabindex="0">
                        <input type="hidden" value="0">
                    </div>
                    <div class="text">Dining</div>
                </div>
                <div class="mdc-list-item">
                    <div class="mdc-checkbox deep-purple-A700" tabindex="0">
                        <input type="hidden" value="1">
                    </div>
                    <div class="text">Education</div>
                </div>
                <div class="mdc-list-item">
                    <div class="mdc-checkbox deep-purple-A700" tabindex="0">
                        <input type="hidden" value="0" disabled>
                    </div>
                    <div class="text">Health</div>
                </div>
                <div class="mdc-list-item">
                    <div class="mdc-checkbox deep-purple-A700" tabindex="0">
                        <input type="hidden" value="1" disabled>
                    </div>
                    <div class="text">Sport</div>
                </div>
            </div>
            <div class="col xlarge-6 large-7 medium-10">
<pre class="bg-app-bar html"><?= htmlspecialchars(
<<<TEXT
<div class="mdc-list-item">
    <div class="mdc-checkbox deep-purple-A700" tabindex="0">
        <input type="hidden" value="0">
    </div>
    <div class="text">Dining</div>
</div>
<div class="mdc-list-item">
    <div class="mdc-checkbox deep-purple-A700" tabindex="0">
        <input type="hidden" value="1">
    </div>
    <div class="text">Education</div>
</div>
<div class="mdc-list-item">
    <div class="mdc-checkbox deep-purple-A700" tabindex="0">
        <input type="hidden" value="0" disabled>
    </div>
    <div class="text">Health</div>
</div>
<div class="mdc-list-item">
    <div class="mdc-checkbox deep-purple-A700" tabindex="0">
        <input type="hidden" value="1" disabled>
    </div>
    <div class="text">Sport</div>
</div>
TEXT
) ?></pre>
            </div>
        </div>

        <div class="row">
            <div class="col xlarge-8 large-10 medium-12">
                <div class="space"></div>
                <div class="mdc-divider"></div>
                <div class="space"></div>
                
                <h4>Radio buttons</h4>
            </div>
        </div>
        <div class="row">
            <div class="col xlarge-2 large-3 medium-6">
                <div class="space"></div>

                <div class="mdc-radiobutton deep-purple-A700" tabindex="0">
                    <input type="radio" name="radio_1" value="val_1">
                </div>
                <div class="mdc-radiobutton deep-purple-A700" tabindex="0">
                    <input type="radio" name="radio_1" value="val_2" checked>
                </div>

                <div class=""></div>
                
                <div class="mdc-radiobutton deep-purple-A700" tabindex="0">
                    <input type="radio" name="radio_2" value="val_1" disabled>
                </div>
                <div class="mdc-radiobutton deep-purple-A700" tabindex="0">
                    <input type="radio" name="radio_2" value="val_2" disabled checked>
                </div>
            </div>
            <div class="col xlarge-6 large-7 medium-10">
<pre class="bg-app-bar html"><?= htmlspecialchars(
<<<TEXT
<div class="mdc-radiobutton deep-purple-A700" tabindex="0">
    <input type="radio" name="radio_1" value="val_1">
</div>
<div class="mdc-radiobutton deep-purple-A700" tabindex="0">
    <input type="radio" name="radio_1" value="val_2" checked>
</div>

<div class="mdc-radiobutton deep-purple-A700" tabindex="0">
    <input type="radio" name="radio_2" value="val_1" disabled>
</div>
<div class="mdc-radiobutton deep-purple-A700" tabindex="0">
    <input type="radio" name="radio_2" value="val_2" disabled checked>
</div>
TEXT
) ?></pre>
            </div>
        </div>
        <div class="row">
            <div class="col xlarge-2 large-3 medium-6">
                <div class="space"></div>

                <div class="mdc-list-item">
                    <div class="mdc-radiobutton deep-purple-A700" tabindex="0">
                        <input type="radio" name="radio_3" value="val_1">
                    </div>
                    <div class="text">Dining</div>
                </div>
                <div class="mdc-list-item">
                    <div class="mdc-radiobutton deep-purple-A700" tabindex="0">
                        <input type="radio" name="radio_3" value="val_1" checked>
                    </div>
                    <div class="text">Education</div>
                </div>
                <div class="mdc-list-item">
                    <div class="mdc-radiobutton deep-purple-A700" tabindex="0">
                        <input type="radio" name="radio_4" value="val_1" disabled>
                    </div>
                    <div class="text">Health</div>
                </div>
                <div class="mdc-list-item">
                    <div class="mdc-radiobutton deep-purple-A700" tabindex="0">
                        <input type="radio" name="radio_4" value="val_1" disabled checked>
                    </div>
                    <div class="text">Sport</div>
                </div>
            </div>
            <div class="col xlarge-6 large-7 medium-10">
<pre class="bg-app-bar html"><?= htmlspecialchars(
<<<TEXT
<div class="mdc-list-item">
    <div class="mdc-radiobutton deep-purple-A700" tabindex="0">
        <input type="radio" name="radio_3" value="val_1">
    </div>
    <div class="text">Dining</div>
</div>
<div class="mdc-list-item">
    <div class="mdc-radiobutton deep-purple-A700" tabindex="0">
        <input type="radio" name="radio_3" value="val_1" checked>
    </div>
    <div class="text">Education</div>
</div>
<div class="mdc-list-item">
    <div class="mdc-radiobutton deep-purple-A700" tabindex="0">
        <input type="radio" name="radio_4" value="val_1" disabled>
    </div>
    <div class="text">Health</div>
</div>
<div class="mdc-list-item">
    <div class="mdc-radiobutton deep-purple-A700" tabindex="0">
        <input type="radio" name="radio_4" value="val_1" disabled checked>
    </div>
    <div class="text">Sport</div>
</div>
TEXT
) ?></pre>
            </div>
        </div>

        <div class="row">
            <div class="col xlarge-8 large-10 medium-12">
                <div class="space"></div>
                <div class="mdc-divider"></div>
                <div class="space"></div>
                
                <h4>Switches</h4>
            </div>
        </div>
        <div class="row">
            <div class="col xlarge-2 large-3 medium-6">
                <div class="space"></div>

                <div class="mdc-switch deep-purple-A700" tabindex="0">
                    <div class="rail"></div>
                    <input type="hidden" value="0">
                </div>
                <div class="mdc-switch deep-purple-A700" tabindex="0">
                    <div class="rail"></div>
                    <input type="hidden" value="1">
                </div>

                <div class=""></div>

                <div class="mdc-switch deep-purple-A700" tabindex="0">
                    <div class="rail"></div>
                    <input type="hidden" value="0" disabled>
                </div>
                <div class="mdc-switch deep-purple-A700" tabindex="0">
                    <div class="rail"></div>
                    <input type="hidden" value="1" disabled>
                </div>
            </div>
            <div class="col xlarge-6 large-7 medium-10">
<pre class="bg-app-bar html"><?= htmlspecialchars(
<<<TEXT
<div class="mdc-switch deep-purple-A700" tabindex="0">
    <div class="rail"></div>
    <input type="hidden" value="0">
</div>
<div class="mdc-switch deep-purple-A700" tabindex="0">
    <div class="rail"></div>
    <input type="hidden" value="1">
</div>

<div class="mdc-switch deep-purple-A700" tabindex="0">
    <div class="rail"></div>
    <input type="hidden" value="0" disabled>
</div>
<div class="mdc-switch deep-purple-A700" tabindex="0">
    <div class="rail"></div>
    <input type="hidden" value="1" disabled>
</div>
TEXT
) ?></pre>
            </div>
        </div>
        <div class="row">
            <div class="col xlarge-2 large-3 medium-6">
                <div class="space"></div>

                <div class="mdc-list-item">
                    <div class="text">Dining</div>
                    <div class="mdc-switch deep-purple-A700" tabindex="0">
                        <div class="rail"></div>
                        <input type="hidden" value="0">
                    </div>
                </div>
                <div class="mdc-list-item">
                    <div class="text">Education</div>
                    <div class="mdc-switch deep-purple-A700" tabindex="0">
                        <div class="rail"></div>
                        <input type="hidden" value="1">
                    </div>
                </div>
                <div class="mdc-list-item">
                    <div class="text">Health</div>
                    <div class="mdc-switch deep-purple-A700" tabindex="0">
                        <div class="rail"></div>
                        <input type="hidden" value="0" disabled>
                    </div>
                </div>
                <div class="mdc-list-item">
                    <div class="text">Sport</div>
                    <div class="mdc-switch deep-purple-A700" tabindex="0">
                        <div class="rail"></div>
                        <input type="hidden" value="1" disabled>
                    </div>
                </div>
            </div>
            <div class="col xlarge-6 large-7 medium-10">
<pre class="bg-app-bar html"><?= htmlspecialchars(
<<<TEXT
<div class="mdc-list-item">
    <div class="text">Dining</div>
    <div class="mdc-switch deep-purple-A700" tabindex="0">
        <div class="rail"></div>
        <input type="hidden" value="0">
    </div>
</div>
<div class="mdc-list-item">
    <div class="text">Education</div>
    <div class="mdc-switch deep-purple-A700" tabindex="0">
        <div class="rail"></div>
        <input type="hidden" value="1">
    </div>
</div>
<div class="mdc-list-item">
    <div class="text">Health</div>
    <div class="mdc-switch deep-purple-A700" tabindex="0">
        <div class="rail"></div>
        <input type="hidden" value="0" disabled>
    </div>
</div>
<div class="mdc-list-item">
    <div class="text">Sport</div>
    <div class="mdc-switch deep-purple-A700" tabindex="0">
        <div class="rail"></div>
        <input type="hidden" value="1" disabled>
    </div>
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