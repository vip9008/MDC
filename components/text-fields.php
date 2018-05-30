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
    "css/mdc.text.field.css",
];
$js_files = [
    "js/mdc.list.js",
    "js/mdc.nav.drawer.js",
    "js/mdc.top.app.bar.js",
    "js/mdc.text.field.js",
];

$head_title = "MDC v2";

$topAppBarColor = "bg-blue-grey-900";
$topAppBarTitle = "Components - Text fields";

$primaryColor = "indigo";
$accentColor = "blue";

$prefix = "../";
$url = $prefix."components/text-fields.php";
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

                <div class="mdc-text-field orange">
                    <input type="text" class="input">
                    <label class="label">Default</label>
                    <div class="help-block">Help text here</div>
                </div>

                <div class="mdc-text-field orange">
                    <div class="material-icon">person</div>
                    <input type="text" class="input">
                    <label class="label">Default</label>
                    <div class="help-block">Help text here</div>
                </div>

                <div class="mdc-text-field orange">
                    <div class="material-icon trailing">person</div>
                    <input type="text" class="input">
                    <label class="label">Default</label>
                    <div class="help-block">Help text here</div>
                </div>

                <h1 class="article_title">Text fields</h1>
                <h5 class="text-secondary">Text fields let users enter and edit text.</h5>

                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/component_text_fields/textfields-intro.png"></figure>
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

                <p class="text-secondary">Text fields allow users to enter text into a UI. They typically appear in forms and dialogs.</p>
                <div class="space"></div>

                <h4>Principles</h4>
            </div>
        </div>
        <div class="row">
            <div class="col xlarge-2 large-3 medium-4 small-4">
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/component_text_fields/textfield-illo-01.png"></figure>
                <h6>Discoverable</h6>
                <p class="text-secondary">Text fields should stand out and indicate that users can input information.</p>
            </div>
            <div class="col xlarge-2 large-3 medium-4 small-4">
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/component_text_fields/textfield-illo-02.png"></figure>
                <h6>Clear</h6>
                <p class="text-secondary">Text field states should be clearly differentiated from one another.</p>
            </div>
            <div class="clearfix visible-smallext visible-small"></div>
            <div class="col xlarge-2 large-3 medium-4 small-4">
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/component_text_fields/textfield-illo-03.png"></figure>
                <h6>Efficient</h6>
                <p class="text-secondary">Text fields should make it easy to understand the requested information and to address any errors.</p>
            </div>
        </div>

        <div class="row">
            <div class="col xlarge-6 large-9 medium-12">
                <div class="space"></div>
                <div class="mdc-divider"></div>
                <div class="space"></div>

                <h4>Types</h4>
                <p class="text-secondary">Text fields come in two types:</p>
                <ul class="text-secondary">
                    <li>Filled text fields</li>
                    <li>Outlined text fields</li>
                </ul>
                <p class="text-secondary">Both types of text fields use a container to provide a clear affordance for interaction, making the fields discoverable in layouts.</p>

                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/component_text_fields/textfields-types.png"></figure>
                <ol class="text-secondary">
                    <li>Filled text fields</li>
                    <li>Outlined text fields</li>
                </ol>

                <div class="space"></div>
                <div class="mdc-divider"></div>
                <div class="space"></div>

                <h4>Choosing the right text field</h4>
                <p class="text-secondary">Both types of text fields provide the same functionality, so the type of text field you use can depend on style alone.</p>
                <p class="text-secondary">Choose the type that:</p>

                <ul class="text-secondary">
                    <li>Works best with your app’s visual style</li>
                    <li>Best accommodates the goals of your UI</li>
                    <li>Is most distinct from other components (like buttons) and surrounding content</li>
                </ul>
                <div class="space"></div>
            </div>
        </div>

        <div class="row">
            <div class="col xlarge-3 large-4 medium-6 small-4">
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/component_text_fields/textfields-type-filled.png"></figure>
                <p class="text-secondary">Mobile form using filled text fields.</p>
                <div class="space"></div>
            </div>
            <div class="col xlarge-3 large-4 medium-6 small-4">
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/component_text_fields/textfields-type-stroke.png"></figure>
                <p class="text-secondary">The same mobile form using outlined text fields.</p>
                <div class="space"></div>
            </div>
        </div>

        <div class="row">
            <div class="col xlarge-6 large-9 medium-12">
                <h6>Both types of text fields in one UI</h6>
                <p class="text-secondary">If both types of text fields are used in a single UI, they should be used consistently within different sections, and not intermixed within the same region. For example, you could use outlined text fields in one section and filled text fields in another.</p>
                <div class="space"></div>
            </div>
        </div>

        <div class="row">
            <div class="col xlarge-3 large-4 medium-6 small-4">
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/component_text_fields/textfields-type-mix-do.png"></figure>
                <p class="text-secondary">When using both types of text fields in a UI, separate them by region.</p>
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

                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/component_text_fields/textfields-annotations-1.png"></figure>
                <ol class="text-secondary">
                    <li>Container</li>
                    <li>Leading icon (optional)</li>
                    <li>Label text</li>
                    <li>Input text</li>
                    <li>Trailing icon (optional)</li>
                    <li>Activation indicator</li>
                    <li>Assistive text (optional)</li>
                </ol>
                <div class="space"></div>
                <div class="space"></div>

                <h4>Container</h4>
            </div>
        </div>

        <div class="row">
            <div class="col xlarge-3 large-4 medium-6 small-4">
                <div class="space"></div>
                <p class="text-secondary">Containers improve the discoverability of text fields by creating contrast between the text field and surrounding content.</p>
                <div class="space"></div>

                <h6>Fill and stroke</h6>
                <p class="text-secondary">A text field container has a fill and a stroke (either around the entire container, or just the bottom edge). The color and thickness of a stroke can change to indicate when the text field is active.</p>

                <h6>Rounded corners</h6>
                <p class="text-secondary">The container of an outlined text field has rounded corners, while the container of a filled text field has rounded top corners and square bottom corners.</p>
            </div>
            <div class="col xlarge-3 large-4 medium-6 small-4">
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/component_text_fields/textfields-anatomy-container.png"></figure>
                <div class="space"></div>
            </div>
        </div>

        <div class="row">
            <div class="col xlarge-6 large-9 medium-12">
                <div class="mdc-divider"></div>
                <div class="space"></div>

                <h4>Label text</h4>
                <p class="text-secondary">Label text is used to inform users as to what information is requested for a text field. Every text field should have a label.</p>
                <p class="text-secondary">Label text is used to inform users as to what information is requested for a text field. Every text field should have a label.</p>
                <div class="space"></div>
            </div>
        </div>

        <div class="row">
            <div class="col xlarge-3 large-4 medium-6 small-4">
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/component_text_fields/textfields-annotations-labels-dont-1.png"></figure>
                <p class="text-secondary">Label text shouldn’t be truncated. Keep it short, clear, and fully visible.</p>
                <div class="space"></div>
            </div>
            <div class="col xlarge-3 large-4 medium-6 small-4">
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/component_text_fields/textfields-annotations-labels-dont-2.png"></figure>
                <p class="text-secondary">Label text shouldn’t take up multiple lines.</p>
                <div class="space"></div>
            </div>
        </div>

        <div class="row">
            <div class="col xlarge-6 large-9 medium-12">
                <div class="space"></div>

                <h6>Required text indicator</h6>
                <p class="text-secondary">To indicate that a field is required, display an asterisk (*) next to the label text and mention near the form that asterisks indicate required fields.</p>
                <ul class="text-secondary">
                    <li>If some fields are required, indicate all required ones</li>
                    <li>If most fields are required, indicate optional fields by displaying the word “optional” in parentheses next to the label text</li>
                    <li>If required text is colored, that color should also be used for the asterisk</li>
                </ul>

                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/component_text_fields/textfields-annotations-required.png"></figure>
                <p class="text-secondary">Required text with asterisk</p>

                <div class="space"></div>
                <div class="mdc-divider"></div>
                <div class="space"></div>

                
            </div>
        </div>
    </section>
</div>

</body>
</html>