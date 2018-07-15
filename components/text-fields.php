<?php
$language = "en-US";
$direction = "ltr";

$css_files = [
    "css/mdc.text.field.css",
];
$js_files = [
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

<body class="mdc-drawer-expand">

<?php include $prefix."_includes/drawer.php"; ?>
<?php include $prefix."_includes/app_bar.php"; ?>

<div class="container">
    <section>
        <div class="row">
            <div class="col xlarge-6 large-9 medium-12">
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

                <h4>Input text</h4>
            </div>
        </div>

        <div class="row">
            <div class="col xlarge-3 large-4 medium-6 small-4">
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/component_text_fields/textfields-annotations-2.png"></figure>
                <div class="space"></div>
            </div>
            <div class="col xlarge-3 large-4 medium-6 small-4">
                <div class="space"></div>
                <p class="text-secondary">Input text is text the user has entered into a text field.</p>
                <div class="space"></div>

                <h6>1. Input text</h6>
                <p class="text-secondary">Input text is text entered by the user.</p>

                <h6>2. Cursor</h6>
                <p class="text-secondary">A cursor indicates the current location of text input in a field.</p>
            </div>
        </div>

        <div class="row">
            <div class="col xlarge-6 large-9 medium-12">
                <div class="space"></div>
                <div class="mdc-divider"></div>
                <div class="space"></div>

                <h4>Assistive elements</h4>
            </div>
        </div>

        <div class="row">
            <div class="col xlarge-3 large-4 medium-6 small-4">
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/component_text_fields/textfields-annotations-3.png"></figure>
                <div class="space"></div>
            </div>
            <div class="col xlarge-3 large-4 medium-6 small-4">
                <div class="space"></div>
                <p class="text-secondary">Assistive elements provide additional detail about text entered into text fields.</p>
                <div class="space"></div>

                <h6>1. Helper text</h6>
                <p class="text-secondary">Helper text conveys additional guidance about the input field, such as how it will be used. It should only take up a single line, being persistently visible or visible only on focus.</p>

                <h6>2. Error message</h6>
                <p class="text-secondary">When text input isn’t accepted, an error message can display instructions on how to fix it. Error messages are displayed below the input line, replacing helper text until fixed.</p>

                <h6>3. Icons</h6>
                <p class="text-secondary">Icons can be used to message alerts as well. Pair them with error messages to provide redundant alerts, which are useful when you need to design for colorblind users.</p>

                <h6>4. Character counter</h6>
                <p class="text-secondary">Character or word counters should be used if there is a character or word limit. They display the ratio of characters used and the total character limit.</p>
            </div>
        </div>

        <div class="row">
            <div class="col xlarge-6 large-9 medium-12">
                <div class="space"></div>
                <div class="space"></div>

                <h6>Error text</h6>
                <p class="text-secondary">For text fields that validate their content (such as passwords), replace helper text with error text when applicable. Swapping helper text with error text helps prevent new lines of text from being introduced into a layout, thus bumping content to fit it.</p>
                <ul class="text-secondary">
                    <li>If only one error is possible, error text describes how to avoid the error</li>
                    <li>If multiple errors are possible, error text describes how to avoid the most likely error</li>
                </ul>

                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/component_text_fields/textfields-anatomy-error-caution.png"></figure>
                <p class="text-secondary">Long errors can wrap to multiple lines if there isn’t enough space to clearly describe the error. In this case, ensure padding between text fields is sufficient to prevent multi-lined errors from bumping layout content.</p>

                <div class="space"></div>
                <div class="mdc-divider"></div>
                <div class="space"></div>

                <h4>Icons</h4>
                <p class="text-secondary">Icons in text fields are optional. Text field icons can describe valid input methods (such as a microphone icon), provide affordances to access additional functionality (such as clearing the content of a field), and can express an error.</p>
                <p class="text-secondary">Leading and trailing icons change their position based on LTR or RTL contexts.</p>
                <div class="space"></div>
            </div>
        </div>

        <div class="row">
            <div class="col xlarge-3 large-4 medium-6 small-4">
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/component_text_fields/textfields-annotations-4.png"></figure>
                <div class="space"></div>
            </div>
            <div class="col xlarge-3 large-4 medium-6 small-4">
                <div class="space"></div>

                <h6>1. Icon signifier</h6>
                <p class="text-secondary">Icon signifiers can describe the type of input a text field requires, and be touch targets for nested components. For example, a calendar icon may be tapped to reveal a date picker.</p>

                <h6>2. Valid or error icon</h6>
                <p class="text-secondary">Iconography can indicate both valid and invalid inputs, making error states clear for colorblind users.</p>

                <h6>3. Clear icon</h6>
                <p class="text-secondary">Clear icons let users clear an entire input field. They appear only when input text is present.</p>

                <h6>4. Voice input icon</h6>
                <p class="text-secondary">A microphone icon signifies that users can input characters using voice.</p>

                <h6>5. Dropdown icon</h6>
                <p class="text-secondary">A dropdown arrow indicates that a text field has a nested selection component.</p>
            </div>
        </div>
    </section>
</div>
<div class="mdc-divider"></div>
<div class="container">
    <section>
        <div class="row">
            <div class="col xlarge-6 large-9 medium-12">
                <h1 class="article_title">Filled text field</h1>
                <div class="space"></div>

                <h4>Usage</h4>
                <p class="text-secondary">Filled text fields carry more visual emphasis, making them stand out when surrounded by other content and components.</p>

                <div class="space"></div>
                <div class="mdc-divider"></div>
                <div class="space"></div>

                <h4>States</h4>
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/component_text_fields/textfields-filled-states.png"></figure>
                <p class="text-secondary">Filled text field states are inactive, activated, focused, hover, error, and disabled.</p>
            </div>
        </div>
    </section>
</div>
<div class="mdc-divider"></div>
<div class="container">
    <section>
        <div class="row">
            <div class="col xlarge-6 large-9 medium-12">
                <h1 class="article_title">Outlined text field</h1>
                <div class="space"></div>

                <h4>Usage</h4>
                <p class="text-secondary">Outlined text fields have less visual emphasis than filled text fields, which helps simplify layout in places like forms, where many text fields are placed together.</p>

                <div class="space"></div>
                <div class="mdc-divider"></div>
                <div class="space"></div>

                <h4>States</h4>
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/component_text_fields/textfields-outline-states-enabled.png"></figure>
                <p class="text-secondary">Outlined text field states are inactive, activated, focused, hover, error, and disabled.</p>
            </div>
        </div>
    </section>
</div>
<div class="mdc-divider"></div>
<div class="container">
    <section>
        <div class="row">
            <div class="col xlarge-6 large-9 medium-12">
                <h1 class="article_title">Input types </h1>
                <div class="space"></div>

                <p class="text-secondary">Text fields can display user input in the following ways:</p>
                <ul class="text-secondary">
                    <li><b>Single line text fields</b> display only one line of text</li>
                    <li><b>Multi-line text fields</b> grow to accommodate multiple lines of text</li>
                    <li><b>Text areas</b> are fixed-height fields</li>
                </ul>
                <div class="space"></div>

                <h6>Single-line fields</h6>
                <p class="text-secondary">In single-line fields, as the cursor reaches the right field edge, text longer than the input line automatically scrolls left.</p>
                <p class="text-secondary">Single-line fields are not suitable for collecting long responses. For those, use a multi-line text field or text area instead.</p>
                <div class="space"></div>
            </div>
        </div>

        <div class="row">
            <div class="col xlarge-3 large-4 medium-6 small-4">
                <h6>Multi-line fields</h6>
                <p class="text-secondary">Multi-line text fields show all user input at once. Overflow text causes the text field to expand (shifting screen elements downward), and text wraps onto a new line.</p>
                <p class="text-secondary">These fields initially appear as single-line fields, which is useful for compact layouts that need to be able to accomodate large amounts of text.</p>
            </div>
            <div class="col xlarge-3 large-4 medium-6 small-4">
                <h6>Text areas</h6>
                <p class="text-secondary">Text areas are taller than text fields and wrap overflow text onto a new line. They are a fixed height and scroll vertically when the cursor reaches the bottom of the field.</p>
                <p class="text-secondary">The large initial size indicates that longer responses are possible and encouraged.</p>
                <p class="text-secondary">These should be used instead of multi-line fields on the web. Ensure the height of a text area fits within <a href="https://material.io/devices" target="_blank">mobile screen sizes</a>.</p>
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

                <h6>Javascript methods:</h6>
                <div class="table-container">
                    <table class="bg-cards methods-doc" style="width: auto; min-width: 45rem;">
                        <tr>
                            <th class="bg-app-bar code" colspan="3">
                                <b class="green">void</b>
                                <b class="blue-grey-800">mdc_init_outlined_textfields</b>
                                (
                                )
                            </th>
                        </tr>
                        <tr>
                            <td colspan="3">A method to initialize all outlined text fields. note that only outlined text fields needs to be initialized. this method is called on document ready.</td>
                        </tr>
                        <tr>
                            <th class="bg-app-bar code" colspan="3">
                                <b class="green">void</b>
                                <b class="blue-grey-800">mdc_init_field</b>
                                (
                                <b class="deep-purple-A700">outlined_text_field</b>
                                )
                            </th>
                        </tr>
                        <tr>
                            <td colspan="3">A method to initialize a specific outlined text field. useful for dynamic forms.</td>
                        </tr>
                        <tr>
                            <td><b class="deep-purple-A700 code">outlined_text_field</b></td>
                            <td class="code">String | jQuery | Element</td>
                            <td>The outlined text field container. can be either a css selector string or a jQuery object or an element.</td>
                        </tr>
                    </table>
                </div>
                <div class="space"></div>
                
                <h4>Filled text field</h4>
            </div>
        </div>

        <div class="row">
            <div class="col xlarge-3 large-4 medium-6">
                <div class="mdc-text-field deep-purple-A700">
                    <input type="text" class="input">
                    <label class="label">Label</label>
                    <div class="help-block">Help text</div>
                </div>

                <div class="mdc-text-field deep-purple-A700">
                    <div class="icon material-icon">person</div>
                    <input type="text" class="input">
                    <label class="label">Label</label>
                    <div class="help-block">Help text</div>
                </div>

                <div class="mdc-text-field deep-purple-A700">
                    <div class="icon material-icon trailing">person</div>
                    <input type="text" class="input">
                    <label class="label">Label</label>
                    <div class="help-block">Help text</div>
                </div>
            </div>
            <div class="col xlarge-5 large-6 medium-10">
<pre class="bg-app-bar html"><?= htmlspecialchars(
<<<TEXT
<div class="mdc-text-field deep-purple-A700">
    <input type="text" class="input">
    <label class="label">Label</label>
    <div class="help-block">Help text</div>
</div>

<div class="mdc-text-field deep-purple-A700">
    <div class="icon material-icon">person</div>
    <input type="text" class="input">
    <label class="label">Label</label>
    <div class="help-block">Help text</div>
</div>

<div class="mdc-text-field deep-purple-A700">
    <div class="icon material-icon trailing">person</div>
    <input type="text" class="input">
    <label class="label">Label</label>
    <div class="help-block">Help text</div>
</div>
TEXT
) ?></pre>
            </div>
        </div>
        
        <div class="row">
            <div class="col xlarge-8 large-10 medium-10">
                <div class="space"></div>
                <div class="space"></div>

                <h4>Standard text field</h4>
            </div>
        </div>

        <div class="row">
            <div class="col xlarge-3 large-4 medium-6">
                <div class="mdc-text-field standard deep-purple-A700">
                    <input type="text" class="input">
                    <label class="label">Label</label>
                    <div class="help-block">Help text</div>
                </div>

                <div class="mdc-text-field standard deep-purple-A700">
                    <div class="icon material-icon">person</div>
                    <input type="text" class="input">
                    <label class="label">Label</label>
                    <div class="help-block">Help text</div>
                </div>

                <div class="mdc-text-field standard deep-purple-A700">
                    <div class="icon material-icon trailing">person</div>
                    <input type="text" class="input">
                    <label class="label">Label</label>
                    <div class="help-block">Help text</div>
                </div>
            </div>
            <div class="col xlarge-5 large-6 medium-10">
<pre class="bg-app-bar html"><?= htmlspecialchars(
<<<TEXT
<div class="mdc-text-field standard deep-purple-A700">
    <input type="text" class="input">
    <label class="label">Label</label>
    <div class="help-block">Help text</div>
</div>

<div class="mdc-text-field standard deep-purple-A700">
    <div class="icon material-icon">person</div>
    <input type="text" class="input">
    <label class="label">Label</label>
    <div class="help-block">Help text</div>
</div>

<div class="mdc-text-field standard deep-purple-A700">
    <div class="icon material-icon trailing">person</div>
    <input type="text" class="input">
    <label class="label">Label</label>
    <div class="help-block">Help text</div>
</div>
TEXT
) ?></pre>
            </div>
        </div>

        <div class="row">
            <div class="col xlarge-8 large-10 medium-10">
                <div class="space"></div>
                <div class="space"></div>

                <h4>Outlined text field</h4>
            </div>
        </div>

        <div class="row">
            <div class="col xlarge-3 large-4 medium-6">
                <div class="mdc-text-field outlined deep-purple-A700">
                    <input type="text" class="input">
                    <label class="label">Label</label>
                    <div class="help-block">Help text</div>
                </div>

                <div class="mdc-text-field outlined deep-purple-A700">
                    <div class="icon material-icon">person</div>
                    <input type="text" class="input">
                    <label class="label">Label</label>
                    <div class="help-block">Help text</div>
                </div>

                <div class="mdc-text-field outlined deep-purple-A700">
                    <div class="icon material-icon trailing">person</div>
                    <input type="text" class="input">
                    <label class="label">Label</label>
                    <div class="help-block">Help text</div>
                </div>
            </div>
            <div class="col xlarge-5 large-6 medium-10">
<pre class="bg-app-bar html"><?= htmlspecialchars(
<<<TEXT
<div class="mdc-text-field outlined deep-purple-A700">
    <input type="text" class="input">
    <label class="label">Label</label>
    <div class="help-block">Help text</div>
</div>

<div class="mdc-text-field outlined deep-purple-A700">
    <div class="icon material-icon">person</div>
    <input type="text" class="input">
    <label class="label">Label</label>
    <div class="help-block">Help text</div>
</div>

<div class="mdc-text-field outlined deep-purple-A700">
    <div class="icon material-icon trailing">person</div>
    <input type="text" class="input">
    <label class="label">Label</label>
    <div class="help-block">Help text</div>
</div>
TEXT
) ?></pre>
            </div>
        </div>

        <div class="row">
            <div class="col xlarge-6 large-9 medium-12">
                <div class="space"></div>
                <div class="space"></div>

                <h4>Text field styling options</h4>
                <div class="space"></div>

                <h6 class="text-secondary">Full width text fields</h6>
            </div>
        </div>

        <div class="row">
            <div class="col xlarge-3 large-4 medium-6">
                <div class="mdc-text-field full-width deep-purple-A700">
                    <input type="text" class="input">
                    <label class="label">Label</label>
                    <div class="help-block">Help text</div>
                </div>
            </div>
            <div class="col xlarge-5 large-6 medium-10">
<pre class="bg-app-bar html"><?= htmlspecialchars(
<<<TEXT
<div class="mdc-text-field full-width deep-purple-A700">
    ...
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