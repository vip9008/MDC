<?php
$language = "en-US";
$direction = "ltr";
$head_title = "MDC v2";
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
    "js/mdc.button.js",
];

$topAppBarColor = "bg-blue-grey-900";
$topAppBarTitle = "Components - Buttons";

$primaryColor = "indigo";
$accentColor = "blue";

$url = "mdc_buttons.php";
?>

<!DOCTYPE html>
<html lang="<?= $language ?>" dir="<?= $direction ?>">

<?php include "_includes/head.php"; ?>

<body>

<?php include "_includes/drawer.php"; ?>
<?php include "_includes/app_bar.php"; ?>

<div class="container">
    <section>
        <div class="row">
            <div class="col xlarge-6 large-9 medium-12">
                <h1 class="article_title">Buttons</h1>
                <div class="space"></div>
                <h2 class="text-secondary">Buttons allow users to take actions, and make choices, with a single tap.</h2>
            </div>
        </div>
        <div class="row">
            <div class="col xlarge-6 large-9 medium-12">
                <figure class="img_figure clearfix"><img src="img/buttons/buttons-usage.png"></figure>
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
                <p class="text-secondary">Buttons communicate actions that users can take. They are typically placed throughout your UI, in places like:</p>
                <ul>
                    <li class="text-secondary">Dialogs</li>
                    <li class="text-secondary">Modal windows</li>
                    <li class="text-secondary">Forms</li>
                    <li class="text-secondary">Cards</li>
                    <li class="text-secondary">Toolbars</li>
                </ul>
            </div>
        </div>
    </section>
    <section>
        <div class="row">
            <div class="col xlarge-6 large-9 medium-12">
                <h1>Principles</h1>
            </div>
        </div>
        <div class="row">
            <div class="col xlarge-2 large-3 medium-4 small-4">
                <figure class="img_figure clearfix"><img src="img/buttons/buttons-illos-01.png"></figure>
                <h3>Identifiable</h3>
                <p class="text-secondary">Buttons should indicate that they can trigger an action.</p>
            </div>
            <div class="col xlarge-2 large-3 medium-4 small-4">
                <figure class="img_figure clearfix"><img src="img/buttons/buttons-illos-02.png"></figure>
                <h3>Findable</h3>
                <p class="text-secondary">Buttons should be easy to find among other elements, including other buttons.</p>
            </div>
            <div class="clearfix visible-smallext visible-small"></div>
            <div class="col xlarge-2 large-3 medium-4 small-4">
                <figure class="img_figure clearfix"><img src="img/buttons/buttons-illos-03.png"></figure>
                <h3>Clear</h3>
                <p class="text-secondary">A button’s action and state should be clear.</p>
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
                <h1>Types</h1>
                <figure class="img_figure clearfix"><img src="img/buttons/buttons-types-all.png"></figure>
                <ol>
                    <li>
                        <b>Text button</b> (low emphasis)<br>
                        Text buttons are typically used for less important actions.
                    </li>
                    <li>
                        <b>Outlined Button</b> (medium emphasis)<br>
                        Outlined buttons are used for more emphasis than text buttons due to the stroke.
                    </li>
                    <li>
                        <b>Contained button</b> (high emphasis)<br>
                        Contained buttons have more emphasis, as they use use a color fill and shadow.
                    </li>
                    <li>
                        <b>Toggle button</b><br>
                        Toggle buttons group a set of actions using layout and spacing. They’re used less often than other button types.
                    </li>
                </ol>
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
                <p class="text-secondary">Buttons contain only one required element and some optional elements.</p>
                <figure class="img_figure clearfix"><img src="img/buttons/buttons-anatomy-all.png"></figure>
            </div>
        </div>
        <div class="row">
            <div class="col xlarge-3 large-4 medium-6 small-4">
                <p>1. Text button</p>
                <p class="text-secondary">A. Text label</p>
                <p class="text-secondary">C. Icon (optional)</p>
            </div>
            <div class="col xlarge-3 large-4 medium-6 small-4">
                <p>2. Outlined button</p>
                <p class="text-secondary">A. Text label</p>
                <p class="text-secondary">B. Container</p>
                <p class="text-secondary">C. Icon (optional)</p>
            </div>
        </div>
        <div class="space"></div>
        <div class="row">
            <div class="col xlarge-3 large-4 medium-6 small-4">
                <p>3. Contained button</p>
                <p class="text-secondary">A. Text label</p>
                <p class="text-secondary">B. Container</p>
                <p class="text-secondary">C. Icon (optional)</p>
            </div>
            <div class="col xlarge-3 large-4 medium-6 small-4">
                <p>4. Toggle button</p>
                <p class="text-secondary">A. Container</p>
                <p class="text-secondary">C. Icon</p>
            </div>
        </div>
    </section>
    <section>
        <div class="row">
            <div class="col xlarge-6 large-9 medium-12">
                <h1>Text label</h1>
                <p class="text-secondary">Text buttons and contained buttons use text labels, which describe the action that will occur if a user taps a button. If a text label is not used, an icon should be present to signify what the button does.</p>
                <p class="text-secondary">By default Material uses capitalized button text labels (for languages that have capitalization). This is to distinguish the text label from surrounding text. If a text button does not use capitalization for button text, find another characteristic to distinguish it such as color, size, or placement.</p>
            </div>
        </div>
    </section>
</div>
<div class="mdc-divider"></div>
<div class="container">
    <section>
        <div class="row">
            <div class="col xlarge-6 large-9 medium-12">
                <h1 class="article_title">Hierarchy and placement</h1>
                <div class="space"></div>
                <h1>Hierarchy</h1>
                <h3>A single, prominent button</h3>
                <p class="text-secondary">A layout should contain a single prominent button that makes it clear that other buttons have less importance in the hierarchy. This high-emphasis button commands the most attention.</p>
                <h3>Other buttons</h3>
                <p class="text-secondary">An app can show more than one button in a layout at a time, so a high-emphasis button can be accompanied by medium- and low-emphasis buttons that perform less important actions. When using multiple buttons, ensure the available state of one button doesn’t look like the disabled state of another.</p>
                <figure class="img_figure clearfix"><img src="img/buttons/buttons-layout-diagram-01.png"></figure>
                <p class="text-secondary">A button’s level of emphasis helps determine its appearance, typography, and placement.</p>
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
                <h1>Placement</h1>
                <p class="text-secondary">Multiple button types can be used to express different emphasis levels.</p>
                <figure class="img_figure clearfix"><img src="img/buttons/buttons-layout-when-to-use-02.png"></figure>
                <p class="text-secondary">This screen layout uses:</p>
                <ol>
                    <li class="text-secondary">An extended floating action button for the highest emphasis</li>
                    <li class="text-secondary">A contained button for high emphasis </li>
                    <li class="text-secondary">A text button for low emphasis</li>
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
                <h1 class="article_title">Text button</h1>
                <div class="space"></div>
                <h1>Usage</h1>
                <p class="text-secondary">Text buttons are typically used for less-pronounced actions, including those located:</p>
                <ul>
                    <li class="text-secondary">In dialogs</li>
                    <li class="text-secondary">In cards</li>
                </ul>
                <p class="text-secondary">In cards, text buttons help maintain an emphasis on card content.</p>
                <figure class="img_figure clearfix"><img src="img/buttons/buttons-text-when-to-use-01.png"></figure>
                <p class="text-secondary">Text button</p>
                <div class="space"></div>
            </div>
        </div>
        <div class="row">
            <div class="col xlarge-3 large-4 medium-6 small-4">
                <figure class="img_figure clearfix"><img src="img/buttons/text-button-usage-2.png"></figure>
                <p class="text-secondary">Use a text button in snackbars.</p>
                <div class="space"></div>
            </div>
            <div class="col xlarge-3 large-4 medium-6 small-4">
                <figure class="img_figure clearfix"><img src="img/buttons/text-button-usage-3.png"></figure>
                <p class="text-secondary">A text button against an image background</p>
                <div class="space"></div>
            </div>
        </div>
        <div class="row">
            <div class="col xlarge-6 large-9 medium-12">
                <h3>Text label</h3>
                <p class="text-secondary">A button’s text label is the most important element on a button, as it communicates the action that will be performed when the user touches it.</p>
                <figure class="img_figure clearfix"><img src="img/buttons/text-button-usage-1.png"></figure>
                <p class="text-secondary">Text label using a distinct action</p>
                <div class="space"></div>
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
                <h1>Placement</h1>
                <p class="text-secondary">Text buttons are often embedded in contained components like cards and dialogs, in order to relate themselves to the component in which they appear. Because text buttons don’t have a container, they don’t distract from nearby content.</p>

                <figure class="img_figure clearfix"><img src="img/buttons/buttons-text-when-to-use-02.png"></figure>
                <p class="text-secondary">Dialogs use text buttons because the absence of a container helps unify the action with the dialog text. Align text buttons to the right edge for left-to-right scripts.</p>
                <div class="space"></div>

                <figure class="img_figure clearfix"><img src="img/buttons/buttons-text-when-to-use-03.png"></figure>
                <p class="text-secondary">Text buttons minimize distraction from card content.</p>
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
                <h1>States</h1>
                <p class="text-secondary">Text buttons can be placed in front of a variety of backgrounds. Until the button is interacted with, its container isn’t visible.</p>
                <p class="text-secondary">To maintain accessibility, Material Design provides baseline opacity values for the color overlays used by states. A brand can adjust opacity values to suit its color scheme.</p>
                <figure class="img_figure clearfix"><img src="img/buttons/text-buttons-states.png"></figure>
                <p class="text-secondary">Text button states</p>
            </div>
        </div>
    </section>
</div>
<div class="mdc-divider"></div>
<div class="container">
    <section>
        <div class="row">
            <div class="col xlarge-6 large-9 medium-12">
                <h1 class="article_title">Outlined button</h1>
                <div class="space"></div>
                <h1>Usage</h1>
                <p class="text-secondary">Outlined buttons are medium-emphasis buttons. They contain actions that are important, but aren’t the primary action in an app.</p>
                <h3>Alternatives</h3>
                <p class="text-secondary">Outlined buttons are also a lower emphasis alternative to contained buttons, or a higher emphasis alternative to text buttons.</p>
                <figure class="img_figure clearfix"><img src="img/buttons/buttons-text-when-to-use-01.png"></figure>
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
                <h1>Container</h1>
                <p class="text-secondary">Outlined buttons display a stroke around a text label. Stroke can be represented in different ways:</p>
                <ul>
                    <li class="text-secondary">Set a button’s width to be the size of the text label, with 16dp padding on the left and right</li>
                    <li class="text-secondary">Set the button’s relative position to the responsive layout grid</li>
                </ul>
                <p class="text-secondary">In a resting state, outlined buttons should display containment with a stroke and no fill.</p>
                <figure class="img_figure clearfix"><img src="img/buttons/buttons-outlined-usage-02.png"></figure>
                <p class="text-secondary">Outlined button</p>
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
                <h1>States</h1>
                <p class="text-secondary">Outlined buttons can be placed on top of a variety of backgrounds. Its container is transparent and until the button is interacted with, a color isn’t visible.</p>
                <p class="text-secondary">To maintain accessibility, Material Design provides baseline opacity values for the color overlays used by states. A brand can adjust opacity values to suit its color scheme.</p>
                <figure class="img_figure clearfix"><img src="img/buttons/outlined-button-states.png"></figure>
                <p class="text-secondary">Outlined button states</p>
            </div>
        </div>
    </section>
</div>
<div class="mdc-divider"></div>
<div class="container">
    <section>
        <div class="row">
            <div class="col xlarge-6 large-9 medium-12">
                <h1 class="article_title">Contained button</h1>
                <div class="space"></div>
                <h1>Usage</h1>
                <p class="text-secondary">Contained buttons are high-emphasis, distinguished by their use of elevation and fill. They contain actions that are primary to your app.</p>
            </div>
        </div>
        <div class="row">
            <div class="col xlarge-3 large-4 medium-6 small-4">
                <figure class="img_figure clearfix"><img src="img/buttons/buttons-contained-do-1.png"></figure>
                <p class="text-secondary">A contained button</p>
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
                <h1>Container</h1>
                <p class="text-secondary">Contained buttons display a container around a text label. Containers can be represented in different ways:</p>
                <ul>
                    <li class="text-secondary">Set container width to the size of the text label with 16dp padding on the left and right</li>
                    <li class="text-secondary">Set the container’s relative position to the responsive layout grid</li>
                </ul>
                <p class="text-secondary">Contained buttons should display containers with a solid color.</p>
                <figure class="img_figure clearfix"><img src="img/buttons/buttons-contained-do.png"></figure>
                <p class="text-secondary">A contained button with solid color</p>
                <div class="space"></div>
                <p class="text-secondary">Button container width can be set according to the responsive layout grid.</p>
                <figure class="img_figure clearfix"><img src="img/buttons/buttons-elements-container-extended.png"></figure>
                <p class="text-secondary">Contained button in a responsive layout grid</p>
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
                <h1>Shadow & elevation</h1>
                <p class="text-secondary">Buttons at higher elevations typically appear more prominent in a design. On press, elevated buttons lift up and the container displays touch feedback.</p>
                <figure class="img_figure clearfix"><img src="img/buttons/buttons-elements-shadow-elevation.png"></figure>
                <p class="text-secondary">Higher elevation increases the prominence of a contained button.</p>
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
                <h1>States</h1>
                <p class="text-secondary">The following opacity values are recommended for button container fill colors. Each app can alter the overlay values to suit their brand’s color palette.</p>
                <figure class="img_figure clearfix"><img src="img/buttons/contained-buttons-states.png"></figure>
                <p class="text-secondary">Contained button states</p>
            </div>
        </div>
    </section>
</div>
<div class="mdc-divider"></div>
<div class="container">
    <section>
        <div class="row">
            <div class="col xlarge-6 large-9 medium-12">
                <h1 class="article_title">Toggle button</h1>
                <div class="space"></div>
                <h1>Usage</h1>
                <p class="text-secondary">Toggle buttons can be used to group related options. To emphasize groups of related toggle buttons, a group should share a common container.</p>
                <h3>Selected action</h3>
                <p class="text-secondary">Only one option in a group of toggle buttons can be selected and active at a time. Selecting one option deselects any other.</p>
                <figure class="img_figure clearfix"><img src="img/buttons/buttons-toggle-usage.png"></figure>
                <p class="text-secondary">These toggle buttons present options for aligning text to the left, right, and center.</p>
                <div class="space"></div>
                <figure class="img_figure clearfix"><img src="img/buttons/buttons-toggle-usage-2.png"></figure>
                <p class="text-secondary">Icons can be used as toggle buttons when they allow selection, or deselection, of a single choice, such as marking an item as a favorite.</p>
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
                <h1>States</h1>
                <h3>Active and available toggle buttons</h3>
                <p class="text-secondary">A toggle button’s state makes it clear which button is active. Hover and focus states express the available selection options for buttons in a toggle group.</p>
                <h3>Disabled toggle buttons</h3>
                <p class="text-secondary">Toggle buttons that cannot be selected can either be given a disabled state, or be hidden.</p>
                <figure class="img_figure clearfix"><img src="img/buttons/toggle-buttons-states.png"></figure>
                <p class="text-secondary">Toggle button states</p>
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
            </div>
        </div>
        <div class="row">
            <div class="col xlarge-6 large-9 medium-12">
                <h1>Text buttons</h1>
            </div>
        </div>
        <div class="row">
            <div class="col xlarge-2 large-3 medium-6">
                <div class="btn-group-example">
                    <button class="mdc-button deep-purple-A700">Text</button>
                    <button class="mdc-button deep-purple-A700" disabled>Text</button>
                </div>
                <div class="btn-group-example">
                    <button class="mdc-button deep-purple-A700">
                        <div class="material-icon">favorite</div>
                        Text
                    </button>
                    <button class="mdc-button deep-purple-A700" disabled>
                        <div class="material-icon">favorite</div>
                        Text
                    </button>
                </div>
            </div>
            <div class="col xlarge-6 large-7 medium-12">
<pre class="bg-app-bar html"><?= htmlspecialchars(
<<<TEXT
<button class="mdc-button deep-purple-A700">Text</button>
<button class="mdc-button deep-purple-A700" disabled>Text</button>

<button class="mdc-button deep-purple-A700">
    <div class="material-icon">favorite</div>
    Text
</button>
<button class="mdc-button deep-purple-A700" disabled>
    <div class="material-icon">favorite</div>
    Text
</button>
TEXT
) ?></pre>
            </div>
        </div>
    </section>
    
    <div class="row">
        <div class="col xlarge-8 large-10 medium-12">
            <div class="mdc-divider"></div>
        </div>
    </div>

    <section>
        <div class="row">
            <div class="col xlarge-6 large-9 medium-12">
                <h1>Outlined buttons</h1>
            </div>
        </div>
        <div class="row">
            <div class="col xlarge-2 large-3 medium-6">
                <div class="btn-group-example">
                    <button class="mdc-button btn-outlined deep-purple-A700">Text</button>
                    <button class="mdc-button btn-outlined deep-purple-A700" disabled>Text</button>
                </div>
                <div class="btn-group-example">
                    <button class="mdc-button btn-outlined deep-purple-A700">
                        <div class="material-icon">favorite</div>
                        Text
                    </button>
                    <button class="mdc-button btn-outlined deep-purple-A700" disabled>
                        <div class="material-icon">favorite</div>
                        Text
                    </button>
                </div>
                <div class="btn-group-example">
                    <button class="mdc-button btn-outlined full-width deep-purple-A700">Text</button>
                </div>
                <div class="btn-group-example">
                    <button class="mdc-button btn-outlined full-width deep-purple-A700" disabled>Text</button>
                </div>
                <div class="btn-group-example">
                    <button class="mdc-button btn-outlined full-width deep-purple-A700">
                        <div class="material-icon">favorite</div>
                        Text
                    </button>
                </div>
                <div class="btn-group-example">
                    <button class="mdc-button btn-outlined full-width deep-purple-A700" disabled>
                        <div class="material-icon">favorite</div>
                        Text
                    </button>
                </div>
            </div>
            <div class="col xlarge-6 large-7 medium-12">
<pre class="bg-app-bar html"><?= htmlspecialchars(
<<<TEXT
<button class="mdc-button btn-outlined deep-purple-A700">Text</button>
<button class="mdc-button btn-outlined deep-purple-A700" disabled>Text</button>

<button class="mdc-button btn-outlined deep-purple-A700">
    <div class="material-icon">favorite</div>
    Text
</button>
<button class="mdc-button btn-outlined deep-purple-A700" disabled>
    <div class="material-icon">favorite</div>
    Text
</button>

<button class="mdc-button btn-outlined full-width deep-purple-A700">Text</button>
<button class="mdc-button btn-outlined full-width deep-purple-A700" disabled>Text</button>

<button class="mdc-button btn-outlined full-width deep-purple-A700">
    <div class="material-icon">favorite</div>
    Text
</button>
<button class="mdc-button btn-outlined full-width deep-purple-A700" disabled>
    <div class="material-icon">favorite</div>
    Text
</button>
TEXT
) ?></pre>
            </div>
        </div>
    </section>

    <div class="row">
        <div class="col xlarge-8 large-10 medium-12">
            <div class="mdc-divider"></div>
        </div>
    </div>

    <section>
        <div class="row">
            <div class="col xlarge-6 large-9 medium-12">
                <h1>Contained buttons</h1>
            </div>
        </div>
        <div class="row">
            <div class="col xlarge-2 large-3 medium-6">
                <div class="btn-group-example">
                    <button class="mdc-button btn-contained bg-deep-purple-A700">Text</button>
                    <button class="mdc-button btn-contained bg-deep-purple-A700" disabled>Text</button>
                </div>
                <div class="btn-group-example">
                    <button class="mdc-button btn-contained bg-deep-purple-A700">
                        <div class="material-icon">favorite</div>
                        Text
                    </button>
                    <button class="mdc-button btn-contained bg-deep-purple-A700" disabled>
                        <div class="material-icon">favorite</div>
                        Text
                    </button>
                </div>
                <div class="btn-group-example">
                    <button class="mdc-button btn-contained full-width bg-deep-purple-A700">Text</button>
                </div>
                <div class="btn-group-example">
                    <button class="mdc-button btn-contained full-width bg-deep-purple-A700" disabled>Text</button>
                </div>
                <div class="btn-group-example">
                    <button class="mdc-button btn-contained full-width bg-deep-purple-A700">
                        <div class="material-icon">favorite</div>
                        Text
                    </button>
                </div>
                <div class="btn-group-example">
                    <button class="mdc-button btn-contained full-width bg-deep-purple-A700" disabled>
                        <div class="material-icon">favorite</div>
                        Text
                    </button>
                </div>
            </div>
            <div class="col xlarge-6 large-7 medium-12">
<pre class="bg-app-bar html"><?= htmlspecialchars(
<<<TEXT
<button class="mdc-button btn-contained bg-deep-purple-A700">Text</button>
<button class="mdc-button btn-contained bg-deep-purple-A700" disabled>Text</button>

<button class="mdc-button btn-contained bg-deep-purple-A700">
    <div class="material-icon">favorite</div>
    Text
</button>
<button class="mdc-button btn-contained bg-deep-purple-A700" disabled>
    <div class="material-icon">favorite</div>
    Text
</button>

<button class="mdc-button btn-contained full-width bg-deep-purple-A700">Text</button>
<button class="mdc-button btn-contained full-width bg-deep-purple-A700" disabled>Text</button>

<button class="mdc-button btn-contained full-width bg-deep-purple-A700">
    <div class="material-icon">favorite</div>
    Text
</button>
<button class="mdc-button btn-contained full-width bg-deep-purple-A700" disabled>
    <div class="material-icon">favorite</div>
    Text
</button>
TEXT
) ?></pre>
            </div>
        </div>
    </section>

    <div class="row">
        <div class="col xlarge-8 large-10 medium-12">
            <div class="mdc-divider"></div>
        </div>
    </div>

    <section>
        <div class="row">
            <div class="col xlarge-6 large-9 medium-12">
                <h1>Toggle buttons</h1>
            </div>
        </div>
        <div class="row">
            <div class="col xlarge-2 large-3 medium-6">
                <div class="btn-group-example toggle-buttons">
                    <div class="mdc-toggle-buttons">
                        <button class="mdc-button"><div class="material-icon">format_italic</div></button>
                        <button class="mdc-button active"><div class="material-icon">format_bold</div></button>
                        <button class="mdc-button" disabled><div class="material-icon">format_underlined</div></button>
                    </div>
                </div>
                <div class="btn-group-example toggle-buttons">
                    <div class="mdc-toggle-buttons deep-purple-A700">
                        <button class="mdc-button"><div class="material-icon">format_italic</div></button>
                        <button class="mdc-button active"><div class="material-icon">format_bold</div></button>
                        <button class="mdc-button" disabled><div class="material-icon">format_underlined</div></button>
                    </div>
                </div>
            </div>
            <div class="col xlarge-6 large-7 medium-12">
<pre class="bg-app-bar html"><?= htmlspecialchars(
<<<TEXT
<div class="mdc-toggle-buttons">
    <button class="mdc-button"><div class="material-icon">format_italic</div></button>
    <button class="mdc-button active"><div class="material-icon">format_bold</div></button>
    <button class="mdc-button" disabled><div class="material-icon">format_underlined</div></button>
</div>

<div class="mdc-toggle-buttons deep-purple-A700">
    <button class="mdc-button"><div class="material-icon">format_italic</div></button>
    <button class="mdc-button active"><div class="material-icon">format_bold</div></button>
    <button class="mdc-button" disabled><div class="material-icon">format_underlined</div></button>
</div>
TEXT
) ?></pre>
            </div>
        </div>
    </section>
</div>

</body>
</html>