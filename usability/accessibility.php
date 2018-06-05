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

                <div class="space"></div>
                <div class="space"></div>

                <h4>Touch and pointer targets</h4>

                <h6>Touch targets</h6>
                <p class="text-secondary">Touch targets are the parts of the screen that respond to user input. They extend beyond the visual bounds of an element. For example, an icon may appear to be 24 x 24 dp, but the padding surrounding it comprises the full 48 x 48 dp touch target.</p>
                <p class="text-secondary">Touch targets should be at least 48 x 48 dp. A touch target of this size results in a physical size of about 9mm, regardless of screen size. The recommended target size for touchscreen elements is 7-10mm. It may be appropriate to use larger touch targets to accommodate a larger spectrum of users.</p>
                
                <h6>Pointer targets</h6>
                <p class="text-secondary">Pointer targets are similar to touch targets, but apply to the use of motion-tracking pointer devices such as a mouse or a stylus. Pointer targets should be at least 44 x 44 dp.</p>
            </div>
        </div>
        <div class="row">
            <div class="col xlarge-3 large-4 medium-6 small-4">
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/usability_accessibility/accessibility-layout1.png"></figure>
                <p class="text-secondary">
                    Avatar: 40dp<br>
                    Icon:40dp<br>
                    Touch target on both: 48dp
                </p>
            </div>
            <div class="col xlarge-3 large-4 medium-6 small-4">
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/usability_accessibility/accessibility-layout2.png"></figure>
                <p class="text-secondary">Touch targets</p>
            </div>
        </div>

        <div class="row">
            <div class="col xlarge-6 large-9 medium-12">
                <div class="space"></div>
                <div class="space"></div>

                <h6>Touch target spacing</h6>
                <p class="text-secondary">In most cases, touch targets should be separated by 8dp of space or more to ensure balanced information density and usability.</p>
            </div>
        </div>
        <div class="row">
            <div class="col xlarge-3 large-4 medium-6 small-4">
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/usability_accessibility/accessibility-layout3.png"></figure>
                <p class="text-secondary">
                    Touch target height: 48dp<br>
                    Button height: 36dp
                </p>
            </div>
            <div class="col xlarge-3 large-4 medium-6 small-4">
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/usability_accessibility/accessibility-layout4.png"></figure>
                <p class="text-secondary">Touch targets and buttons</p>
            </div>
        </div>

        <div class="row">
            <div class="col xlarge-6 large-9 medium-12">
                <div class="space"></div>
                <div class="mdc-divider"></div>
                <div class="space"></div>

                <h4>Layout</h4>

                <h6>Responsive layouts</h6>
                <p class="text-secondary">Flexible, responsive layouts help content scale in relation to the screen size. Content shouldn’t be truncated as a result of device type or resolution.</p>
                
                <h6>Grouping items</h6>
                <p class="text-secondary">Keeping related items in proximity to one another is helpful for those who have low vision or have trouble focusing on the screen.</p>
            </div>
        </div>
        <div class="row">
            <div class="col xlarge-3 large-4 medium-6 small-4">
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/usability_accessibility/accessibility-layout5-do.png"></figure>
                <p class="text-secondary">The slider value is in close proximity with the slider control.</p>
            </div>
        </div>

        <div class="row">
            <div class="col xlarge-6 large-9 medium-12">
                <div class="space"></div>
                <div class="mdc-divider"></div>
                <div class="space"></div>

                <h4>Typography</h4>

                <h6>Fonts</h6>
                <p class="text-secondary">To improve readability, users might increase font size. Mobile devices and browsers include features to allow users to adjust font size system-wide. To enable system font size in an Android app, mark text and their associated containers to be measured in scaleable pixels (sp).</p>
                <p class="text-secondary">Make sure to allot enough space for large and foreign language fonts. See <a href="<?= $prefix ?>typography/language-support.php">Line Height</a> for information on the recommended sizes of foreign language fonts.</p>
            </div>
        </div>
    </section>
</div>
<div class="mdc-divider"></div>
<div class="container">
    <section>
        <div class="row">
            <div class="col xlarge-6 large-9 medium-12">
                <h1 class="article_title">Writing</h1>
                <div class="space"></div>

                <h4>Accessibility text</h4>
                <p class="text-secondary">Clear and helpful accessibility text is one of the primary ways to make UIs more accessible. Accessibility text refers to text that is used by screen reader accessibility software, such as TalkBack on Android, VoiceOver on iOS, and JAWS on desktop. Screen readers read all text and elements (such as buttons) on screen aloud, including both visible and nonvisible alternative text.</p>

                <h6>Visible and nonvisible text</h6>
                <p class="text-secondary">Accessibility text includes both visible text (including labels for UI elements, text on buttons, links, and forms) and nonvisible descriptions that don’t appear on screen (such as alternative text for buttons with icons). Sometimes, an on-screen label may be overridden with accessibility text to provide more information to the user.</p>
                <p class="text-secondary">Both visible and nonvisible text should be descriptive and meaningful, as some users navigate by using all headings or links on a screen. Test your app with a screen reader to identify areas that are missing or need better accessibility text.</p>

                <div class="space"></div>
                <div class="mdc-divider"></div>
                <div class="space"></div>

                <h4>Be succinct</h4>
                <p class="text-secondary">Keep content and accessibility text short and to the point. Screen reader users hear every UI element read aloud. The shorter the text, the faster the screen reader users can navigate it.</p>

                <div class="space"></div>
                <div class="mdc-divider"></div>
                <div class="space"></div>

                <h4>Avoid stating control type or state</h4>
                <p class="text-secondary">Screen readers may automatically announce a control’s type or state through a sound or by speaking the control name before or after the accessibility text.</p>
                <div class="space"></div>

                <h6>Developer note</h6>
                <p class="text-secondary">If the control type or state isn’t being read correctly, the control’s accessibility role may be improperly set or be a custom control.</p>
                <p class="text-secondary">Every element should have an associated accessibility role on a website or be coded to be announced properly. This means a button should be set as a button, and a checkbox as a checkbox, so that the control’s type or state is communicated correctly to the user.</p>

                <h6>Native elements</h6>
                <p class="text-secondary">If you extend or inherit from a native UI element, you will get the correct role. If not, you can override this information for accessibility on each platform <a href="https://www.w3.org/WAI/intro/aria" target="_blank">ARIA</a> for web, crosslink AccessibilityNodeInfo| https://developer.android.com/reference/android/view/accessibility/AccessibilityNodeInfo> for Android. On Android, set the class name field of the control’s AccessibilityNodeInfo to "android.widget.Button".</p>

                <div class="space"></div>
                <div class="mdc-divider"></div>
                <div class="space"></div>

                <h4>Indicate what an element does</h4>
                <p class="text-secondary">Use action verbs to indicate what an element or link does, not what an element looks like, so a visually impaired person can understand.</p>

                <p class="text-secondary">Link text should:</p>
                <ul class="text-secondary">
                    <li>Specify what will happen if an action or link is tapped</li>
                    <li>Avoid vague descriptions, such as “click here”</li>
                </ul>

                <p class="text-secondary">Ensure an element has the same description everywhere it’s used.</p>
            </div>
        </div>
        <div class="row">
            <div class="col xlarge-3 large-4 medium-6 small-4">
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/usability_accessibility/accessibility-writing-edit-do.png"></figure>
                <p class="text-secondary">The description read aloud indicates the action represented by the icon.</p>
            </div>
            <div class="col xlarge-3 large-4 medium-6 small-4">
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/usability_accessibility/accessibility-writing-menu-do.png"></figure>
                <p class="text-secondary">Accessible text for a navigation menu could be “Show navigation menu” and “Hide navigation menu” (preferred) or “Show main menu” and “Hide main menu” (acceptable).</p>
            </div>
        </div>

        <div class="row">
            <div class="col xlarge-6 large-9 medium-12">
                <div class="space"></div>
                <div class="space"></div>

                <h4>Elements with state changes</h4>
                <p class="text-secondary">For icons that toggle between values or states, announce the icon according to how it is presented to the user.</p>
                <ul class="text-secondary">
                    <li>If the icon is a property of an item, make it a checkbox so that screen readers verbalize the current state, such as “on” or “off.”</li>
                    <li>If the icon is an action, write the text label to specify the action that occurs if the icon is selected, such as “Add to wishlist.”</li>
                </ul>
                <p class="text-secondary">Elements are displayed based on how they should be used. For example, if a star icon represents the action of adding something to a wishlist, the app should verbally state “Add to wishlist” or “Remove from wishlist.”</p>

                <div class="space"></div>
                <div class="mdc-divider"></div>
                <div class="space"></div>

                <h4>Don’t specify how to interact with a control</h4>
                <p class="text-secondary">Don’t tell users how to physically interact with a control, as they may be navigating with a keyboard or other device, not with their fingers or a mouse. Accessibility software will describe the correct interaction for the user.</p>
            </div>
        </div>
        <div class="row">
            <div class="col xlarge-3 large-4 medium-6 small-4">
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/usability_accessibility/accessibility-writing-voicesearch-do.png"></figure>
                <p class="text-secondary">The command “voice search” describes the user task (search) paired with the input method (voice).</p>
            </div>
        </div>

        <div class="row">
            <div class="col xlarge-6 large-9 medium-12">
                <div class="space"></div>
                <div class="mdc-divider"></div>
                <div class="space"></div>

                <h4>Hint speech</h4>
                <p class="text-secondary">Hint speech provides extra information for actions that aren't clear. For example, Android's “double-tap to select” feature prompts the user to tap twice when landing on an item without taking action. Android TalkBack will also announce any custom actions associated with an element. Use hint speech sparingly and only for complex UI.</p>
            </div>
        </div>
    </section>
</div>
<div class="mdc-divider"></div>
<div class="container">
    <section>
        <div class="row">
            <div class="col xlarge-6 large-9 medium-12">
                <h1 class="article_title">Sound and motion</h1>
                <div class="space"></div>

                <h4>Sound</h4>
                <p class="text-secondary">Give visual alternatives to sound, and vice versa. Provide closed captions, a transcript, or other visual cues to critical audio elements and sound alerts.</p>
                <p class="text-secondary">Allow users to navigate your app using sound by adding descriptive labels to UI elements. When using a screen reader such as TalkBack and navigating by touch exploration, labels are spoken aloud when users touch UI elements with their fingertips.</p>
                <p class="text-secondary">The following sounds should be avoided:</p>
                <ul class="text-secondary">
                    <li>Unnecessary sounds that play over a screen reader, such as background music that autoplays when entering a web page. If there is background sound, ensure users can safely pause or stop it.</li>
                    <li>Extra sounds added to native elements (as screen readers will be able to interpret native elements correctly).</li>
                </ul>

                <div class="space"></div>
                <div class="mdc-divider"></div>
                <div class="space"></div>

                <h4>Motion</h4>
                <p class="text-secondary">Material Design uses motion to guide focus between views. Surfaces transform into focal points for the user to follow, and unimportant elements are removed.</p>
                <p class="text-secondary">To allow users with motion and vision sensitivities to use interfaces comfortably, adhere to the Material Design motion guidance, which supports the following from the W3C:</p>
                <ul class="text-secondary">
                    <li>Enable content that moves, scrolls, or blinks automatically to be paused, stopped, or hidden if it lasts more than five seconds</li>
                    <li>Limit flashing content to three times in a one-second period to meet <a href="https://www.w3.org/TR/WCAG20/#general-thresholddef" target="_blank">flash and red flash thresholds</a></li>
                    <li>Avoid <a href="https://www.w3.org/TR/2015/NOTE-WCAG20-TECHS-20150226/G176" target="_blank">flashing large central regions of the screen</a></li>
                </ul>

                <div class="space"></div>
                <div class="mdc-divider"></div>
                <div class="space"></div>

                <h4>Timed controls</h4>
                <p class="text-secondary">Controls in an app may be set to disappear after a certain amount of time. For example, five seconds after starting a video, playback controls may fade from the screen.</p>

                <h6>High-priority controls</h6>
                <p class="text-secondary">Avoid using timers on controls that perform high-priority functions, as users may not notice these controls if they fade away too quickly. For example, TalkBack reads controls out loud if they are focused on, and placing them on timers may prevent the controls from completing their task.</p>
                <p class="text-secondary">For controls that enable other important functions, make sure that the user can turn on the controls again or perform the same function in other ways. Learn more in <b>Composition section</b>.</p>
            </div>
        </div>
    </section>
</div>
<div class="mdc-divider"></div>
<div class="container">
    <section>
        <div class="row">
            <div class="col xlarge-6 large-9 medium-12">
                <h1 class="article_title">Implementing accessibility</h1>
                <div class="space"></div>

                <p class="text-secondary">By using standard platform controls and semantic HTML (on the web), your app will automatically contain the markup and code needed to work well with a platform’s assistive technology. Adapt your app to meet each platform's accessibility standards and assistive technology (including shortcuts and structure) to give users an efficient experience.</p>
            </div>
        </div>
        <div class="row">
            <div class="col xlarge-3 large-4 medium-6 small-4">
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/usability_accessibility/accessibility-implementation1-do.png"></figure>
                <p class="text-secondary">Use native elements, such as the standard platform dialog.</p>
            </div>
        </div>

        <div class="row">
            <div class="col xlarge-6 large-9 medium-12">
                <div class="space"></div>
                <div class="space"></div>

                <p class="text-secondary">Use scalable text and a spacious layout to accommodate users who may have large text, color correction, magnification, or other assistive settings turned on.</p>
                <p class="text-secondary">Keyboard and mouse interfaces should have every task and all hover information accessible by keyboard-only.</p>
                <ul class="text-secondary">
                    <li>Use scalable text and a spacious layout to accommodate users who may have large text, color correction, magnification, or other assistive settings turned on.</li>
                    <li>Keyboard and mouse interfaces should have every task and all hover information accessible by keyboard-only.</li>
                    <li>Touch interfaces should allow screen readers and other assistive technology devices to read all parts of your interface. The text read aloud should be both meaningful and helpful.</li>
                </ul>

                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/usability_accessibility/accessibility-implementation3-do.png"></figure>
                <p class="text-secondary">Scale your UI to work well with magnification and large text.</p>

                <div class="space"></div>
                <div class="space"></div>

                <h4>Label UI elements</h4>
                <p class="text-secondary">Screen-reader users need to know which UI elements are tappable on-screen. To enable screen readers to read the names of components out loud, add the contentDescription attribute to components such as buttons, icons, and tabs containing icons that have no visible text. For web apps, add an add <a href="https://developers.google.com/web/fundamentals/accessibility/semantics-aria/aria-labels-and-relationships" target="_blank">aria-label</a>.</p>
            </div>
        </div>
        <div class="row">
            <div class="col xlarge-3 large-4 medium-6 small-4">
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/usability_accessibility/accessibility-labeling1.png"></figure>
                <ol class="text-secondary">
                    <li>Label the Search icon</li>
                    <li>Label the Microphone icon</li>
                </ol>
            </div>
            <div class="col xlarge-3 large-4 medium-6 small-4">
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/usability_accessibility/accessibility-labeling2.png"></figure>
                <ol class="text-secondary">
                    <li>Label the Edit icon</li>
                    <li>Label the Chat icon</li>
                </ol>
            </div>
        </div>

        <div class="row">
            <div class="col xlarge-6 large-9 medium-12">
                <div class="space"></div>
                <div class="mdc-divider"></div>
                <div class="space"></div>

                <h4>Help documentation</h4>
                <p class="text-secondary">Any features with special accessibility considerations should be included in help documentation. Make help documentation relevant, accessible, and discoverable. As an example, review this guide on how to use a screen reader with <a href="https://support.google.com/drive/answer/6034939" target="_blank">Google Drive</a>.</p>

                <div class="space"></div>
                <div class="mdc-divider"></div>
                <div class="space"></div>

                <h4>Testing and research</h4>
                <p class="text-secondary">Following these accessibility guidelines will help improve the accessibility of your app, but does not guarantee a fully accessible experience. It is recommended that you also:</p>
                <ul class="text-secondary">
                    <li>Test your app for full task completion, beginning to end, with various assistive technologies turned on. For example, turn on Explore by Touch in TalkBack and change the speed at which text is spoken out loud.</li>
                    <li>Have users with impairments test your app.</li>
                    <li>Consider how individual elements should be accessible while also fitting together in a coherent user flow.</li>
                    <li>Make sure the major tasks you want your users to complete are possible for everyone.</li>
                </ul>
                <p class="text-secondary">Talk to your users, particularly those who use assistive technology, to learn about their needs, what they want out of your app, which tools they use, and how they use them. Become familiar with these tools so you can give them the best experience.</p>

                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/usability_accessibility/accessibility-implementation5.png"></figure>
                <p class="text-secondary">People use assistive technology in different ways.</p>
            </div>
        </div>
    </section>
</div>

</body>
</html>