<?php
$language = "en-US";
$direction = "ltr";

$css_files = [
    "css/mdc.dialog.css",
];
$js_files = [
    "js/mdc.dialog.js",
];

$head_title = "MDC v2";

$topAppBarColor = "bg-blue-grey-900";
$topAppBarTitle = "Components - Dialogs";

$primaryColor = "indigo";
$accentColor = "blue";

$prefix = "../";
$url = $prefix."components/dialogs.php";
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
                <h1 class="article_title">Dialogs</h1>
                <h5 class="text-secondary">Dialogs inform users about a task and can contain critical information, require decisions, or involve multiple tasks.</h5>
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/component_dialogs/dialogs-usage-1.png"></figure>
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
                <p class="text-secondary">A dialog is a type of modal window that appears in front of app content to provide critical information or ask for a decision. Dialogs disable all app functionality when they appear, and remain on screen until confirmed, dismissed, or a required action has been taken.</p>
                <p class="text-secondary">Dialogs are purposefully interruptive, so they should be used sparingly.</p>
                <div class="space"></div>

                <h4>Principles</h4>
            </div>
        </div>
        <div class="row">
            <div class="col xlarge-2 large-3 medium-4 small-4">
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/component_dialogs/dialogs-illos-03.png"></figure>
                <h6>Focused</h6>
                <p class="text-secondary">Dialogs focus user attention to ensure their content is addressed.</p>
            </div>
            <div class="col xlarge-2 large-3 medium-4 small-4">
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/component_dialogs/dialogs-illos-01.png"></figure>
                <h6>Direct</h6>
                <p class="text-secondary">Dialogs should be direct in communicating information and dedicated to completing a task.</p>
            </div>
            <div class="clearfix visible-smallext visible-small"></div>
            <div class="col xlarge-2 large-3 medium-4 small-4">
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/component_dialogs/dialogs-illos-02.png"></figure>
                <h6>Helpful</h6>
                <p class="text-secondary">Dialogs should appear in response to a user task or an action, with relevant or contextual information.</p>
            </div>
        </div>

        <div class="row">
            <div class="col xlarge-6 large-9 medium-12">
                <div class="space"></div>
                <div class="mdc-divider"></div>
                <div class="space"></div>

                <h4>When to use</h4>
                <p class="text-secondary">Dialogs should be used for:</p>
                <ul class="text-secondary">
                    <li>Errors that block an app’s normal operation</li>
                    <li>Critical information that requires a specific user task, decision, or acknowledgement</li>
                </ul>

                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/component_dialogs/dialog-when-to-use.png"></figure>

                <div class="space"></div>
                <div class="mdc-divider"></div>
                <div class="space"></div>

                <h4>Types</h4>
            </div>
        </div>
        <div class="row">
            <div class="col xlarge-3 large-4 medium-6 small-4">
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/component_dialogs/dialogs-alertdialog.png"></figure>
                <h6>Alert dialog</h6>
                <p class="text-secondary">Alert dialogs interrupt users with urgent information, details, or actions.</p>
                <div class="space"></div>
            </div>
            <div class="col xlarge-3 large-4 medium-6 small-4">
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/component_dialogs/dialogs-simpledialog.png"></figure>
                <h6>Simple dialog</h6>
                <p class="text-secondary">Simple dialogs display a list of items that take immediate effect when selected.</p>
                <div class="space"></div>
            </div>
        </div>
        <div class="row">
            <div class="col xlarge-3 large-4 medium-6 small-4">
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/component_dialogs/dialogs-confirmationdialog.png"></figure>
                <h6>Confirmation dialog</h6>
                <p class="text-secondary">Confirmation dialogs require users to confirm a choice before the dialog is dismissed.</p>
                <div class="space"></div>
            </div>
            <div class="col xlarge-3 large-4 medium-6 small-4">
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/component_dialogs/dialogs-fullscreendialog.png"></figure>
                <h6>Full-screen dialog</h6>
                <p class="text-secondary">Full-screen dialogs fill the entire screen, containing actions that require a series of tasks to complete.</p>
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
                <h1 class="article_title">Anatomy</h1>
                <div class="space"></div>

                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/component_dialogs/dialogs-elements-1.png"></figure>
                <ol class="text-secondary">
                    <li>Container</li>
                    <li>Title (optional)</li>
                    <li>Supporting text</li>
                    <li>Buttons</li>
                    <li>Scrim</li>
                </ol>

                <div class="space"></div>
                <div class="space"></div>

                <h4>Dialog box and scrim</h4>
                <p class="text-secondary">A dialog is a type of modal window. Access to the rest of the UI is disabled until the modal is addressed. All modal surfaces are interruptive by design – their purpose is to have the user focus on content on a surface that appears in front of all other surfaces.</p>
                <p class="text-secondary">To express that the rest of the app is inaccessible, and to focus attention on the dialog, surfaces behind the dialog are scrimmed. A scrim is a temporary treatment that can be applied to Material surfaces for the purpose of making content on the surface less prominent.</p>

                <div class="space"></div>
                <div class="mdc-divider"></div>
                <div class="space"></div>

                <h4>Title</h4>
                <p class="text-secondary">A dialog’s purpose should be communicated by its title and button text.</p>
                <p class="text-secondary">Titles should:</p>
                <ul class="text-secondary">
                    <li>Contain a brief, clear statement or question</li>
                    <li>Avoid apologies (“Sorry for the interruption”), alarm (“Warning!”), or ambiguity (“Are you sure?”)</li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col xlarge-3 large-4 medium-6 small-4">
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/component_dialogs/dialogs-titles-do-1.png"></figure>
                <p class="text-secondary">This dialog title poses a specific question, concisely explains what’s involved in the request, and provides clear actions.</p>
                <div class="space"></div>
            </div>
        </div>
        <div class="row">
            <div class="col xlarge-6 large-9 medium-12">
                <div class="space"></div>
                <div class="mdc-divider"></div>
                <div class="space"></div>

                <h4>Buttons</h4>

                <h6>Side-by-side buttons (Recommended)</h6>
                <p class="text-secondary">Side-by-side buttons display two text buttons next to one another.</p>

                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/component_dialogs/dialogs-buttons-sidebyside-1.png"></figure>
                <p class="text-secondary">These side-by-side buttons display buttons provide the actions of “Disagree” and “Agree” as options.</p>

                <div class="space"></div>
                <div class="space"></div>

                <h6>Stacked full-width buttons</h6>
                <p class="text-secondary">Stacked buttons accommodate longer button text. Confirming actions appear above dismissive actions.</p>

                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/component_dialogs/dialogs-buttons-stacked-1.png"></figure>

                <div class="space"></div>
                <div class="mdc-divider"></div>
                <div class="space"></div>

                <h4>Elevation</h4>
                <p class="text-secondary">Dialogs are displayed at 24dp elevation and can display a shadow. They appear above other content and typically have a scrim below them that covers all app content.</p>
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
                
                <h4>Interaction</h4>
                <p class="text-secondary">Dialogs appear without warning, requiring users to stop their current task. They should be used sparingly, as not every choice or setting warrants interruption.</p>

                <div class="space"></div>
                <div class="mdc-divider"></div>
                <div class="space"></div>
                
                <h4>Position</h4>
                <p class="text-secondary">Dialogs retain focus until dismissed or an action has been taken, such as choosing a setting. They shouldn’t be obscured by other elements or appear partially on screen, with the exception of full-screen dialogs.</p>

                <div class="space"></div>
                <div class="mdc-divider"></div>
                <div class="space"></div>
                
                <h4>Scrolling</h4>
                <p class="text-secondary">Most dialog content should avoid scrolling. When scrolling is required, the dialog title is pinned at the top, with buttons pinned at the bottom. This ensures selected content remains visible alongside the title and buttons, even upon scroll.</p>
                <p class="text-secondary">Dialogs don’t scroll with elements outside of the dialog, such as the background.</p>

                <div class="space"></div>
                <div class="mdc-divider"></div>
                <div class="space"></div>

                <h4>Dismissing dialogs</h4>
                <p class="text-secondary">Dialogs may be dismissed by:</p>
                <ul class="text-secondary">
                    <li>Tapping outside of the dialog</li>
                    <li>Tapping the “Cancel” button</li>
                    <li>Tapping the system back button (Android only)</li>
                </ul>
                <div class="space"></div>

                <p class="text-secondary">If the user’s ability to dismiss a dialog is disabled, the user must choose a dialog action to proceed.</p>
            </div>
        </div>
    </section>
</div>
<div class="mdc-divider"></div>
<div class="container">
    <section>
        <div class="row">
            <div class="col xlarge-6 large-9 medium-12">
                <h1 class="article_title">Actions</h1>
                <div class="space"></div>
                
                <h4>Types of actions</h4>
                <p class="text-secondary">Dialogs present a distinct choice to users through their title, content, and actions. Dialog actions are represented as buttons and allow users confirm or dismiss something.</p>
                <div class="space"></div>

                <p class="text-secondary">There are three types of dialog actions:</p>
                
                <h4>Confirming actions</h4>
                <p class="text-secondary">To resolve what triggered the dialog, confirming actions confirm a proposed action. These actions can involve removing something, such as “Delete” or “Remove,” if it suits the context. They are placed on the right side of the screen.</p>
                <div class="space"></div>
                
                <h4>Dismissive actions</h4>
                <p class="text-secondary">Dismissive actions dismiss a proposed action, and return the user to the originating screen or step. They are placed directly to the left of a confirming action.</p>
                <div class="space"></div>
                
                <h4>Acknowledgement actions</h4>
                <p class="text-secondary">When user acknowledgement is required to proceed, a single action may be presented. Alternatively, use a snackbar to communicate this type of information.</p>

                <div class="space"></div>
                <div class="space"></div>

                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/component_dialogs/dialogs-actions-do-1a.png"></figure>
                <p class="text-secondary">Disable confirming actions (1) until a choice is made. Dismissive actions are never disabled.</p>
                <div class="space"></div>

                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/component_dialogs/dialogs-actions-do-2.png"></figure>
                <p class="text-secondary">Disable confirming actions (1) until a choice is made. Dismissive actions are never disabled.</p>

                <div class="space"></div>
                <div class="mdc-divider"></div>
                <div class="space"></div>

                <h4>Number of actions</h4>
                <p class="text-secondary">Dialogs should contain a maximum of two actions.</p>
                <ul class="text-secondary">
                    <li>If a single action is provided, it must be an acknowledgement action.</li>
                    <li>If two actions are provided, one must be a confirming action, and the other a dismissing action.</li>
                    <li>Providing a third action such as “Learn more” is not recommended as it navigates the user away from the dialog, leaving the dialog task unfinished.</li>
                </ul>
                <div class="space"></div>

                <p class="text-secondary">Rather than adding a third action, an inline expansion can display more information. If more extensive information is needed, provide it prior to entering the dialog.</p>
            </div>
        </div>
    </section>
</div>
<div class="mdc-divider"></div>
<div class="container">
    <section>
        <div class="row">
            <div class="col xlarge-6 large-9 medium-12">
                <h1 class="article_title">Alert dialog</h1>
                <div class="space"></div>
                
                <h4>Usage</h4>
                <p class="text-secondary">Alert dialogs interrupt users with urgent information, details, or actions.</p>

                <div class="space"></div>
                <div class="mdc-divider"></div>
                <div class="space"></div>
                
                <h4>Behavior</h4>
                <p class="text-secondary">To close an alert dialog, one of its actions must be selected.</p>
            </div>
        </div>
        <div class="row">
            <div class="col xlarge-3 large-4 medium-6 small-4">
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/component_dialogs/dialogs-alertdialog-do-1.png"></figure>
                <p class="text-secondary">The action “Discard” indicates the outcome of the decision.</p>
            </div>
        </div>
    </section>
</div>
<div class="mdc-divider"></div>
<div class="container">
    <section>
        <div class="row">
            <div class="col xlarge-6 large-9 medium-12">
                <h1 class="article_title">Simple dialog</h1>
                <div class="space"></div>
                
                <h4>Usage</h4>
                <p class="text-secondary">Simple dialogs can display items that are immediately actionable when selected. They don’t have text buttons.</p>
                <p class="text-secondary">As simple dialogs are interruptive, they should be used sparingly. Alternatively, dropdown menus provide options in a non-modal, less disruptive way.</p>

                <div class="space"></div>
                <div class="mdc-divider"></div>
                <div class="space"></div>
                
                <h4>Behavior</h4>
                <p class="text-secondary">A simple dialog allows the following interactions:</p>
                <ul class="text-secondary">
                    <li>Tap an action to choose it and close the dialog</li>
                    <li>Tap outside the dialog to close the dialog without taking an action</li>
                </ul>

                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/component_dialogs/dialogs-simpledialog-1.png"></figure>
                <p class="text-secondary">A simple dialog</p>

                <div class="space"></div>
                <div class="space"></div>

                <h4>Simple dialogs without actions</h4>
                <p class="text-secondary">Simple dialogs allow users to act on selected elements, without action text. For example, users can simply select a list item to take action on it.</p>
            </div>
        </div>
    </section>
</div>
<div class="mdc-divider"></div>
<div class="container">
    <section>
        <div class="row">
            <div class="col xlarge-6 large-9 medium-12">
                <h1 class="article_title">Confirmation dialog</h1>
                <div class="space"></div>
                
                <h4>Usage</h4>
                <p class="text-secondary">Confirmation dialogs give users the ability to provide final confirmation of a choice before committing to it, so they have a chance to change their minds if necessary.</p>
                <p class="text-secondary">If the user confirms a choice, it’s carried out. Otherwise, the user can dismiss the dialog. For example, users can listen to multiple ringtones but only make a final selection upon touching “OK”.</p>

                <div class="space"></div>
                <div class="mdc-divider"></div>
                <div class="space"></div>
                
                <h4>Behavior</h4>
                <p class="text-secondary">To confirm a choice, the user taps a confirmation action. To cancel, the user taps a dismissive action.</p>

                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/component_dialogs/dialogs-confirmation-layout.png"></figure>
                <p class="text-secondary">The user must either confirm a choice or dismiss the dialog before proceeding.</p>

                <div class="space"></div>
                <div class="mdc-divider"></div>
                <div class="space"></div>
                
                <h4>Buttons</h4>
                <p class="text-secondary">Confirmation dialogs provide both confirmation and cancel buttons. After a confirmation button is tapped, a selection is confirmed. If the cancel button is tapped, or the area outside the dialog, the action is cancelled.</p>

                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/component_dialogs/dialogs-confirmation-layout-do.png"></figure>
                <p class="text-secondary">Provide confirmation and dismissive buttons.</p>
            </div>
        </div>
    </section>
</div>
<div class="mdc-divider"></div>
<div class="container">
    <section>
        <div class="row">
            <div class="col xlarge-6 large-9 medium-12">
                <h1 class="article_title">Full-screen dialog</h1>
                <div class="space"></div>
                
                <h4>Usage</h4>
                <p class="text-secondary">Full-screen dialogs group a series of tasks, such as creating a calendar entry with the event title, date, location, and time. Because they take up the entire screen, full-screen dialogs are the only dialogs over which other dialogs can appear.</p>
                <p class="text-secondary">Full-screen dialogs may be used for content or tasks that meet any of these criteria:</p>
                <ul class="text-secondary">
                    <li>Dialogs that include components which require keyboard input, such as form fields</li>
                    <li>When changes aren’t saved instantly</li>
                    <li>When components within the dialog open additional dialogs</li>
                </ul>
                <div class="space"></div>

                <p class="text-secondary">Full-screen dialogs are for mobile devices only. For tablet or desktop, use a modal dialog.</p>

                <div class="space"></div>
                <div class="mdc-divider"></div>
                <div class="space"></div>
                
                <h4>Behavior</h4>

                <h6>Saving selections</h6>
                <p class="text-secondary">To save a selection in a full-screen dialog, the user taps “Save.” To discard all changes and exit, the user taps the “X” icon or “Back” button.</p>
                <div class="space"></div>

                <h6>Confirmation</h6>
                <p class="text-secondary">The confirmation action is disabled until all mandatory fields are filled. Use descriptive verbs such as “Save,” “Send,” “Share,” “Update,” or “Create.” Don’t use vague terms such as “Done,” “OK” or “Close”.</p>
                <ul class="text-secondary">
                    <li>If no changes have been made, the dialog closes and no discard confirmation is required</li>
                    <li>If the user has made changes, the user is prompted to confirm the discard action</li>
                </ul>
                <div class="space"></div>
                
                <h6>Dialog windows</h6>
                <p class="text-secondary">Launching a full-screen dialog temporarily resets the app’s perceived elevation, allowing simple menus or dialogs to appear above the full-screen dialog.</p>

                <div class="space"></div>
                <div class="mdc-divider"></div>
                <div class="space"></div>
                
                <h4>Layout</h4>
                <p class="text-secondary">Full-screen dialogs cover the screen and don’t appear as a floating modal window.</p>
                <div class="space"></div>

                <h6>Actions</h6>
                <p class="text-secondary">Place confirmation and dismissive actions in the top app bar.</p>

                <h6>Navigation</h6>
                <p class="text-secondary">Because full-screen dialogs can only be completed, dismissed, or closed, only use the close “X” navigation button.</p>

                <div class="space"></div>
                <div class="space"></div>

                <h6>Titles</h6>
                <p class="text-secondary">Titles should be succinct. They can wrap to a second line if necessary, and be truncated. If there are long titles, or titles of variable lengths (such as translations), place them in the content area instead of the app bar.</p>

                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/component_dialogs/dialogs-fullscreen-titles-do-1.png"></figure>
                <p class="text-secondary">Find ways to shorten app bar text, and place longer titles into the content area (1) of a full-screen dialog.</p>
            </div>
        </div>
    </section>
</div>
<div class="mdc-divider"></div>
<div class="container">
    <section>
        <div class="row">
            <div class="col xlarge-8 large-10 medium-12">
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
                        <tr>
                            <th class="bg-app-bar code" colspan="3">
                                <b class="green">void</b>
                                <b class="blue-grey-800">mdc_open_dialog</b>
                                (
                                <b class="deep-purple-A700">dialog_container</b>
                                )
                            </th>
                        </tr>
                        <tr>
                            <td colspan="3">A method to open the dialog. note that this method wont create a new dialog.</td>
                        </tr>
                        <tr>
                            <td><b class="deep-purple-A700 code">dialog_container</b></td>
                            <td class="code">String | jQuery | Element</td>
                            <td>The dialog container. can be either a css selector string or a jQuery object or an element.</td>
                        </tr>
                        <tr>
                            <th class="bg-app-bar code" colspan="3">
                                <b class="green">void</b>
                                <b class="blue-grey-800">mdc_close_dialog</b>
                                (
                                <b class="deep-purple-A700">dialog_container</b>
                                )
                            </th>
                        </tr>
                        <tr>
                            <td colspan="3">A method to close the dialog.</td>
                        </tr>
                        <tr>
                            <td><b class="deep-purple-A700 code">dialog_container</b></td>
                            <td class="code">String | jQuery | Element</td>
                            <td>The dialog container. can be either a css selector string or a jQuery object or an element.</td>
                        </tr>
                    </table>
                </div>
                <div class="space"></div>
                
                <h4>Alert dialog</h4>
            </div>
        </div>
        <div class="row">
            <div class="col xlarge-2 large-3 medium-6">
                <div class="space"></div>

                <button onclick="mdc_open_dialog('#dialog-1')" class="mdc-button btn-contained full-width bg-deep-purple-A700">Alert dialog</button>

                <div id="dialog-1" class="mdc-dialog-container">
                    <div class="mdc-dialog">
                        <div class="header">
                            <div class="title">Dialog header</div>
                        </div>
                        <div class="body">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim.</div>
                        <div class="mdc-button-group">
                            <button onclick="mdc_close_dialog('#dialog-1')" class="mdc-button deep-purple-A700">Action 1</button>
                            <button onclick="mdc_close_dialog('#dialog-1')" class="mdc-button deep-purple-A700">Action 2</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col xlarge-6 large-7 medium-10">
<pre class="bg-app-bar html"><?= htmlspecialchars(
<<<TEXT
<div id="dialog-1" class="mdc-dialog-container">
    <div class="mdc-dialog">
        <div class="header">
            <div class="title">Dialog header</div>
        </div>
        <div class="body">...</div>
        <div class="mdc-button-group">
            <button class="mdc-button deep-purple-A700">Action 1</button>
            <button class="mdc-button deep-purple-A700">Action 2</button>
        </div>
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