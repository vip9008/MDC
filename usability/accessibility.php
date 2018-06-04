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
$topAppBarTitle = "Usability - Accessibility";

$primaryColor = "indigo";
$accentColor = "blue";

$prefix = "../";
$url = $prefix."usability/accessibility.php";
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
                <h1 class="article_title">Accessibility</h1>
                <h5 class="text-secondary">Accessible design allows users of all abilities to navigate, understand, and use your UI successfully.</h5>
            </div>
        </div>
    </section>
</div>
<div class="mdc-divider"></div>
<div class="container">
    <section>
        <div class="row">
            <div class="col xlarge-6 large-9 medium-12">
                <h1 class="article_title">Understanding accessibility</h1>
                <p class="text-secondary">A well-designed product is accessible to users of all abilities, including those with low vision, blindness, hearing impairments, cognitive impairments, motor impairments or situational disabilities, such as a broken arm. Improving your product’s accessibility enhances the usability for all users, which Material Design’s built-in accessibility considerations will help you accommodate.</p>
                <div class="space"></div>

                <h5>Mobile guidance</h5>
                <p class="text-secondary">This section primarily applies to mobile UI design. For more information on designing and developing fully accessible products, visit the <a href="https://www.google.com/accessibility" target="_blank">Google accessibility site</a>.</p>

                <div class="space"></div>
                <div class="space"></div>

                <h4>Principles</h4>
            </div>
        </div>

        <div class="row">
            <div class="col xlarge-2 large-3 medium-4 small-4">
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/usability_accessibility/accessibility-illos-03.png"></figure>
                <h6>Clear</h6>
                <p class="text-secondary">Help users navigate your app by designing clear layouts with distinct calls to action. Every added button, image, and line of text make the UI more complicated. Simplify your app with:</p>
                <ul class="text-secondary">
                    <li>Clearly visible elements</li>
                    <li>Sufficient contrast and size</li>
                    <li>A clear hierarchy of importance</li>
                    <li>Key information that is discernable at a glance</li>
                </ul>
            </div>
            <div class="col xlarge-2 large-3 medium-4 small-4">
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/usability_accessibility/accessibility-illos-01.png"></figure>
                <h6>Robust</h6>
                <p class="text-secondary">Design your app to accommodate a variety of users. A user may be new to your product or use a text-only <b>screen reader</b> (a program that reads text aloud or uses a braille display). Your app should make it easy to:</p>
                <ul class="text-secondary">
                    <li>Navigate: Give users confidence in knowing where they are in your app and what is important.</li>
                    <li>Understand important tasks: Reinforce information through multiple visual and textual cues like color, shape, text, and motion.</li>
                    <li>Access your app: Include appropriate content labelling to accommodate users who experience a text-only version of your app.</li>
                </ul>
            </div>
            <div class="clearfix visible-smallext visible-small"></div>
            <div class="col xlarge-2 large-3 medium-4 small-4">
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/usability_accessibility/accessibility-illos-02.png"></figure>
                <h6>Specific</h6>
                <p class="text-secondary">Support assistive technologies specific to your platform, just as you support the input methods of touch, keyboard, and mouse. For example, ensure your Android app works with Google’s screen reader, <a href="https://support.google.com/accessibility/android/answer/6283677?hl=en&ref_topic=3529932" target="_blank">TalkBack</a>.</p>
                <p class="text-secondary">Assistive technology helps increase, maintain, or improve the functional capabilities of individuals with disabilities, through devices like screen readers, magnification devices, wheelchairs, hearing aids, or memory aids.</p>
            </div>
        </div>
    </section>
</div>
<div class="mdc-divider"></div>
<div class="container">
    <section>
        <div class="row">
            <div class="col xlarge-6 large-9 medium-12">
                <h1 class="article_title">Composition</h1>
                <p class="text-secondary">Apps should give users feedback and a sense of where they are in the app. Navigation controls should be easy to locate and clearly written. Visual feedback (such as labels, colors, and icons) and touch feedback show users what is available in the UI.</p>
                <p class="text-secondary">Navigation should have clear task flows with minimal steps. Focus control, or the ability to control keyboard and reading focus, should be implemented for frequently used tasks.</p>

                <div class="space"></div>
                <div class="space"></div>

                <h4>Screen readers</h4>
                <p class="text-secondary">Screen readers give users multiple ways to navigate a screen, including:</p>
                <ul class="text-secondary">
                    <li>Touch interface screen readers allow users to run their finger over the screen to hear what is directly underneath. This provides the user a quick sense of an entire interface. Or the user can quickly move to a UI element from muscle memory. In TalkBack, this feature is called “explore by touch.” To select an item, the user must double tap.</li>
                    <li>Users may also move focus by swiping backwards or forwards on screen to read pages linearly, from top to bottom. This allows users to hone in on certain elements. In TalkBack, this is called linear navigation.</li>
                </ul>
                <p class="text-secondary">Users may switch between both “explore by touch” and “linear navigation” modes. Some assistive technologies allow users to navigate between page landmarks, such as headings, when these landmarks use the appropriate semantic markup.</p>
                <p class="text-secondary">Hardware or software directional controllers (such as a D-pad, trackball, or keyboard) allow users to jump from selection to selection in a linear fashion.</p>

                <div class="space"></div>
                <div class="mdc-divider"></div>
                <div class="space"></div>

                <h4>Hierarchy</h4>
                <p class="text-secondary">Place items on the screen according to their relative level of importance.</p>
                <ul class="text-secondary">
                    <li>Important actions: Place important actions at the top or bottom of the screen (reachable with shortcuts).</li>
                    <li>Related items: Place related items of a similar hierarchy next to each other.</li>
                </ul>

                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/usability_accessibility/accessibility-hierarchy-1-do.png"></figure>
                <p class="text-secondary">By placing important actions at the top of the screen, they are given more importance in the hierarchy.</p>

                <div class="space"></div>
                <div class="space"></div>

                <h5>Focus order</h5>
                <p class="text-secondary">Input focus should follow the order of the visual layout, from the top to the bottom of the screen. It should traverse from the most important to the least important item. Determine the following focus points and movements:</p>
                <ul class="text-secondary">
                    <li>The order in which elements receive focus</li>
                    <li>The way in which elements are grouped</li>
                    <li>Where focus moves when the element in focus disappears</li>
                </ul>
                <p class="text-secondary">Clarify where the focus exists through a combination of visual indicators and accessibility text.</p>

                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/usability_accessibility/accessibility-hierarchy-3.png"></figure>
                <p class="text-secondary">The black circles indicate the order in which onscreen elements should receive focus.</p>

                <div class="space"></div>
                <div class="space"></div>

                <h5>Grouping</h5>
                <p class="text-secondary">Group similar items under headings that communicate what the groupings are. These groups organize content spatially.</p>

                <div class="space"></div>
                <div class="space"></div>

                <h5>Transitions</h5>
                <p class="text-secondary">Focus traversal between screens and tasks should be as continuous as possible. If a task is interrupted and then resumed, place focus on the element that was previously focused.</p>
            </div>
        </div>
    </section>
</div>
<div class="mdc-divider"></div>
<div class="container">
    <section>
        <div class="row">
            <div class="col xlarge-6 large-9 medium-12">
                <h1 class="article_title">Color and contrast</h1>
                <p class="text-secondary">Use color and contrast to help users see and interpret your app’s content, interact with the right elements, and understand actions.</p>

                <div class="space"></div>
                <div class="space"></div>

                <h4>Accessible color</h4>
                <p class="text-secondary">Color can help communicate mood, tone, and critical information. Use color so that all users can understand the content is fundamental to accessible design. Choose primary, secondary, and accent colors for your app that support usability. Ensure sufficient color contrast between elements so that users with low vision can see and use your app.</p>
                <p class="text-secondary">Material Design’s <a href="https://material.io/tools/color" target="_blank">Color Tool</a> can help you choose colors with sufficient contrast between elements, so that all users can see and use your app.</p>

                <div class="space"></div>
                <div class="mdc-divider"></div>
                <div class="space"></div>

                <h4>Contrast ratios</h4>
                <p class="text-secondary">The contrast ratio between a color and its background ranges from 1-21 based on its <b>luminance</b> (the intensity of light emitted) according to the World Wide Web Consortium (W3C).</p>
                <p class="text-secondary">Contrast ratios represent how different a color is from another color, commonly written as 1:1 or 21:1. The higher the difference between the two numbers in the ratio, the greater the difference in relative luminance between the colors.</p>
                <p class="text-secondary">The W3C recommends the following contrast ratios for body text and image text:</p>
                <ul class="text-secondary">
                    <li>Small text should have a contrast ratio of at least 4.5:1 against its background.</li>
                    <li>Large text (at 14 pt bold/18 pt regular and up) should have a contrast ratio of at least 3:1 against its background.</li>
                </ul>
                <div class="space"></div>
            </div>
        </div>
        <div class="row">
            <div class="col xlarge-3 large-4 medium-6 small-4">
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/usability_accessibility/accessibility-color1-do.png"></figure>
                <p class="text-secondary">These lines of text follow the color contrast ratio recommendations and are legible against their background colors.</p>
            </div>
            <div class="col xlarge-3 large-4 medium-6 small-4">
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/usability_accessibility/accessibility-color3-do.png"></figure>
                <p class="text-secondary">These icons follow the color contrast ratio recommendations and are legible against their backgrounds.</p>
            </div>
        </div>

        <div class="row">
            <div class="col xlarge-6 large-9 medium-12">
                <div class="space"></div>
                <div class="mdc-divider"></div>
                <div class="space"></div>

                <h4>Logos and decorative elements</h4>
                <p class="text-secondary">While decorative elements (such as logos or illustrations) don’t have to meet contrast ratios, they should be distinguishable if they possess important functionality.</p>
            </div>
        </div>
        <div class="row">
            <div class="col xlarge-3 large-4 medium-6 small-4">
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/usability_accessibility/accessibility-color5-do.png"></figure>
                <p class="text-secondary">Decorative logos that are distinguishable don’t have to meet contrast ratios.</p>
            </div>
        </div>

        <div class="row">
            <div class="col xlarge-6 large-9 medium-12">
                <div class="space"></div>
                <div class="mdc-divider"></div>
                <div class="space"></div>

                <h4>Other visual cues</h4>
                <p class="text-secondary">For users who are colorblind, or cannot see differences in color, include design elements in addition to color that ensure they receive the same amount of information.</p>
                <p class="text-secondary">Because colorblindness takes different forms (including red-green, blue-yellow, and monochromatic), use multiple visual cues to communicate important states. Elements such as strokes, indicators, patterns, texture, or text can describe actions and content.</p>
            </div>
        </div>
        <div class="row">
            <div class="col xlarge-3 large-4 medium-6 small-4">
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/usability_accessibility/accessibility-color7-do.png"></figure>
                <p class="text-secondary">The text field error state is communicated through multiple cues: title color, text field stroke, and an error message below the field.</p>
            </div>
        </div>
    </section>
</div>
<div class="mdc-divider"></div>
<div class="container">
    <section>
        <div class="row">
            <div class="col xlarge-6 large-9 medium-12">
                <h1 class="article_title">Layout and typography</h1>
                <p class="text-secondary">Material Design’s touch target guidelines enable users who aren’t able to see the screen, or who have difficulty with small touch targets, to tap elements in your app.</p>
            </div>
        </div>
    </section>
</div>

</body>
</html>