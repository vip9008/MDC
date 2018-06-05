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
$topAppBarTitle = "Usability - Bidirectionality";

$primaryColor = "indigo";
$accentColor = "blue";

$prefix = "../";
$url = $prefix."usability/bidirectionality.php";
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
                <h1 class="article_title">Bidirectionality</h1>
                <h5 class="text-secondary">UIs for languages that are read from right-to-left (RTL), such as Arabic and Hebrew, should be mirrored to ensure content is easy to understand.</h5>
            </div>
        </div>
    </section>
</div>
<div class="mdc-divider"></div>
<div class="container">
    <section>
        <div class="row">
            <div class="col xlarge-6 large-9 medium-12">
                <h1 class="article_title">Mirroring layout</h1>
                <p class="text-secondary">The main difference between left-to-right (LTR) and right-to-left (RTL) language scripts is the direction in which content is displayed:</p>
                <ul class="text-secondary">
                    <li>LTR languages display content from left to right</li>
                    <li>RTL languages display content from right to left</li>
                </ul>
                <div class="space"></div>

                <p class="text-secondary">RTL content also affects the direction in which some icons and images are displayed, particularly those depicting a sequence of events.</p>
                <p class="text-secondary">In general, the passage of time is depicted as left to right for LTR languages, and right to left for RTL languages.</p>

                <table class="bg-cards">
                    <thead class="bg-app-bar">
                        <tr>
                            <th><b>Element</b></th>
                            <th><b>LTR</b></th>
                            <th><b>RTL</b></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Text</td>
                            <td>Sentences are read from left to right.</td>
                            <td>Sentences are read from right to left.</td>
                        </tr>
                        <tr>
                            <td>Timeline</td>
                            <td>An illustrated sequence of events progresses left to right.</td>
                            <td>An illustrated sequence of events progresses right to left.</td>
                        </tr>
                        <tr>
                            <td>Imagery</td>
                            <td>An arrow pointing left to right indicates forward motion: →</td>
                            <td>An arrow pointing right to left indicates forward motion: ←</td>
                        </tr>
                    </tbody>
                </table>
                <div class="space"></div>

                <p class="text-secondary">When a UI is changed from LTR to RTL (or vice-versa), it’s often called <b>mirroring</b>. An RTL layout is the mirror image of an LTR layout, and it affects layout, text, and graphics.</p>
                <p class="text-secondary">When a UI changes from one direction to another, these items are not mirrored:</p>
                <ul class="text-secondary">
                    <li>Numbers</li>
                    <li>Untranslated text (even if it’s part of a phrase)</li>
                </ul>
                <p class="text-secondary">Text should always be in the correct direction for the language it’s in. For example, any LTR words, such as a URL, will continue to be shown in an LTR format, even if the rest of the UI is in RTL.</p>
            </div>
        </div>
        <div class="row">
            <div class="col xlarge-3 large-4 medium-6 small-4">
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/usability_bidirectionality/usability-bidirectionality-mirroring-do.png"></figure>
                <p class="text-secondary">Text and numbers should always be in the correct direction for the language.</p>
            </div>
        </div>

        <div class="row">
            <div class="col xlarge-6 large-9 medium-12">
                <div class="space"></div>

                <p class="text-secondary">When a UI is mirrored, these changes occur:</p>
                <ul class="text-secondary">
                    <li>Text fields icons are displayed on the opposite side of a field</li>
                    <li>Navigation buttons are displayed in reverse order</li>
                    <li>Icons that communicate direction, like arrows, are mirrored</li>
                    <li>Text (if it is translated to an RTL language) is aligned to the right</li>
                </ul>
                <div class="space"></div>

                <p class="text-secondary">These items are not mirrored:</p>
                <ul class="text-secondary">
                    <li>Icons that don’t communicate direction, such as a camera</li>
                    <li>Numbers, such as those on a clock and phone numbers</li>
                    <li>Charts and graphs</li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col xlarge-3 large-4 medium-6 small-4">
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/usability_bidirectionality/usability-bidirectionality-mirror1.png"></figure>
                <p class="text-secondary">An English UI in LTR</p>
            </div>
            <div class="col xlarge-3 large-4 medium-6 small-4">
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/usability_bidirectionality/usability-bidirectionality-mirror2.png"></figure>
                <p class="text-secondary">An Arabic UI in RTL, with numbers presented in LTR</p>
            </div>
        </div>
        <div class="row">
            <div class="col xlarge-6 large-9 medium-12">
                <div class="space"></div>

                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/usability_bidirectionality/usability-bidirectionality-mirror-redlines-ltr.png"></figure>
                <p class="text-secondary">Text editing actions in LTR</p>

                <div class="space"></div>

                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/usability_bidirectionality/usability-bidirectionality-mirror-redlines-rtl.png"></figure>
                <p class="text-secondary">Text editing actions in RTL</p>
                <p class="text-secondary">1. Icons related to bidirectionality are mirrored to reflect the start and end of a line of text</p>

                <div class="space"></div>
            </div>
        </div>
        <div class="row">
            <div class="col xlarge-3 large-4 medium-6 small-4">
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/usability_bidirectionality/usability-bidirectionality-components-tabs-usage-specs1.png"></figure>
                <p class="text-secondary">On an LTR screen, the tab for “Item One” is aligned to the left, and users swipe to the left to see more tabs.</p>
                <div class="space"></div>
            </div>
            <div class="col xlarge-3 large-4 medium-6 small-4">
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/usability_bidirectionality/usability-bidirectionality-components-tabs-usage-specs2.png"></figure>
                <p class="text-secondary">On an RTL screen, the tab for “Item One” is aligned to the right, and users swipe to the right to see more tabs.</p>
                <div class="space"></div>
            </div>
        </div>
        <div class="row">
            <div class="col xlarge-3 large-4 medium-6 small-4">
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/usability_bidirectionality/usability-bidirectionality-mirroring5.png"></figure>
                <p class="text-secondary">LTR screen</p>
                <div class="space"></div>
            </div>
            <div class="col xlarge-3 large-4 medium-6 small-4">
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/usability_bidirectionality/usability-bidirectionality-mirroring5-farsi.png"></figure>
                <p class="text-secondary">RTL screen</p>
                <div class="space"></div>
            </div>
        </div>
        <div class="row">
            <div class="col xlarge-3 large-4 medium-6 small-4">
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/usability_bidirectionality/usability-bidirectionality-components-overflow-usage-specs1.png"></figure>
                <p class="text-secondary">Navigation, overflow menu, and icons displayed left-to-right.</p>
                <div class="space"></div>
            </div>
            <div class="col xlarge-3 large-4 medium-6 small-4">
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/usability_bidirectionality/usability-bidirectionality-components-overflow-usage-specs2.png"></figure>
                <p class="text-secondary">Navigation, overflow menu, and icons switch sides in the RTL layout.</p>
                <div class="space"></div>
            </div>
        </div>
        <div class="row">
            <div class="col xlarge-3 large-4 medium-6 small-4">
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/usability_bidirectionality/usability-bidirectionality-components-lists-keylines-two-1.png"></figure>
                <p class="text-secondary">Padding and margin around icons and text for LTR.</p>
                <div class="space"></div>
            </div>
            <div class="col xlarge-3 large-4 medium-6 small-4">
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/usability_bidirectionality/usability-bidirectionality-components-lists-keylines-two-2-farsi.png"></figure>
                <p class="text-secondary">When mirroring the layout, padding and margin around icons and text also switch placement to match RTL layouts.</p>
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
                <h1 class="article_title">Mirroring elements</h1>
                <p class="text-secondary">When text, layout, and iconography are mirrored to support right-to-left (RTL) UIs, anything that relates to time should be depicted as moving from right to left. For example, in a RTL layout, forward points to the left, and backwards points to the right.</p>
                <div class="space"></div>

                <h4>When to mirror</h4>
                <p class="text-secondary">The most important icons for mirroring are back and forward buttons. Back and forward navigation buttons are reversed.</p>
            </div>
        </div>
        <div class="row">
            <div class="col xlarge-3 large-4 medium-6 small-4">
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/usability_bidirectionality/usability-bidirectionality-guidelines-when1.png"></figure>
                <p class="text-secondary">LTR back button</p>
                <div class="space"></div>
            </div>
            <div class="col xlarge-3 large-4 medium-6 small-4">
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/usability_bidirectionality/usability-bidirectionality-guidelines-when2.png"></figure>
                <p class="text-secondary">RTL back button</p>
                <div class="space"></div>
            </div>
        </div>
        <div class="row">
            <div class="col xlarge-3 large-4 medium-6 small-4">
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/usability_bidirectionality/usability-bidirectionality-guidelines-when2.png"></figure>
                <p class="text-secondary">LTR forward button</p>
                <div class="space"></div>
            </div>
            <div class="col xlarge-3 large-4 medium-6 small-4">
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/usability_bidirectionality/usability-bidirectionality-guidelines-when1.png"></figure>
                <p class="text-secondary">RTL forward button</p>
                <div class="space"></div>
            </div>
        </div>

        <div class="row">
            <div class="col xlarge-6 large-9 medium-12">
                <p class="text-secondary">An icon that shows forward movement should be mirrored.</p>
            </div>
        </div>
        <div class="row">
            <div class="col xlarge-3 large-4 medium-6 small-4">
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/usability_bidirectionality/usability-bidirectionality-guidelines-when5.png"></figure>
                <p class="text-secondary">In a LTR UI, a bicycle facing the right typically communicates a sense of moving forward.</p>
                <div class="space"></div>
            </div>
            <div class="col xlarge-3 large-4 medium-6 small-4">
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/usability_bidirectionality/usability-bidirectionality-guidelines-when6.png"></figure>
                <p class="text-secondary">In a RTL UI, a bicycle pointing to the left similarly communicates a sense of moving forward.</p>
                <div class="space"></div>
            </div>
        </div>

        <div class="row">
            <div class="col xlarge-6 large-9 medium-12">
                <p class="text-secondary">Most RTL countries do not mirror slashes. Leave images with slashes as-is for RTL locales.</p>
            </div>
        </div>
        <div class="row">
            <div class="col xlarge-3 large-4 medium-6 small-4">
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/usability_bidirectionality/usability-bidirectionality-guidelines-when7.png"></figure>
                <p class="text-secondary">The LTR slash can indicate an off state for both LTR and RTL languages.</p>
                <div class="space"></div>
            </div>
        </div>

        <div class="row">
            <div class="col xlarge-6 large-9 medium-12">
                <p class="text-secondary">A volume icon with a slider at its right side should be mirrored. The slider should progress RTL, and the sound waves should emerge from the right.</p>
            </div>
        </div>
        <div class="row">
            <div class="col xlarge-3 large-4 medium-6 small-4">
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/usability_bidirectionality/usability-bidirectionality-guidelines-when9.png"></figure>
                <p class="text-secondary">LTR volume with slider</p>
                <div class="space"></div>
            </div>
            <div class="col xlarge-3 large-4 medium-6 small-4">
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/usability_bidirectionality/usability-bidirectionality-guidelines-when10.png"></figure>
                <p class="text-secondary">RTL volume with speaker icon and slider mirrored</p>
                <div class="space"></div>
            </div>
        </div>

        <div class="row">
            <div class="col xlarge-6 large-9 medium-12">
                <p class="text-secondary">Sometimes, both the horizontal and circular direction of time are implied in an icon. For example, the redo and undo buttons in Google Docs have both a horizontal direction and a circular direction.</p>
                <p class="text-secondary">In LTR, these point to the same direction in both circular and horizontal representations of time. In RTL, choose whether to show circular or horizontal direction.</p>

                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/usability_bidirectionality/usability-bidirectionality-guidelines-when13.png"></figure>
                <p class="text-secondary">LTR redo and undo button from the toolbar in Google Docs</p>
                <div class="space"></div>

                <p class="text-secondary">Icons that contain representations of text need careful mirroring.</p>
                <p class="text-secondary">Text is right-aligned in RTL. If there is a paragraph indent at the beginning of a paragraph, an unfinished line at the end of the paragraph, or a ragged right side, the icons need to be mirrored.</p>
            </div>
        </div>
        <div class="row">
            <div class="col xlarge-3 large-4 medium-6 small-4">
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/usability_bidirectionality/usability-bidirectionality-guidelines-when14.png"></figure>
                <p class="text-secondary">LTR chat icon</p>
                <div class="space"></div>
            </div>
            <div class="col xlarge-3 large-4 medium-6 small-4">
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/usability_bidirectionality/usability-bidirectionality-guidelines-when15.png"></figure>
                <p class="text-secondary">RTL chat icon</p>
                <div class="space"></div>
            </div>
        </div>

        <div class="row">
            <div class="col xlarge-6 large-9 medium-12">
                <div class="space"></div>
                <div class="mdc-divider"></div>
                <div class="space"></div>

                <h4>When not to mirror</h4>
                <p class="text-secondary">While the linear representation of time is mirrored in RTL, the circular direction of time is not. Clocks still turn clockwise for RTL languages. A clock icon or a circular refresh or progress indicator with an arrow pointing clockwise should not be mirrored.</p>
            </div>
        </div>
        <div class="row">
            <div class="col xlarge-3 large-4 medium-6 small-4">
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/usability_bidirectionality/usability-bidirectionality-guidelines-whennot1.png"></figure>
                <p class="text-secondary">The refresh icon shows time moving forward; the direction is clockwise. The icon is not mirrored.</p>
                <div class="space"></div>
            </div>
            <div class="col xlarge-3 large-4 medium-6 small-4">
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/usability_bidirectionality/usability-bidirectionality-guidelines-whennot2.png"></figure>
                <p class="text-secondary">The history icon points backwards in time; the direction is counterclockwise. The icon is not mirrored.</p>
                <div class="space"></div>
            </div>
        </div>

        <div class="row">
            <div class="col xlarge-6 large-9 medium-12">
                <p class="text-secondary">Some icons refer to physical objects that are not mirrored in a right-to-left UI.</p>
                <p class="text-secondary">For example, physical keyboards look the same everywhere, so they should not be mirrored.</p>
            </div>
        </div>
        <div class="row">
            <div class="col xlarge-3 large-4 medium-6 small-4">
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/usability_bidirectionality/usability-bidirectionality-guidelines-whennot3.png"></figure>
                <p class="text-secondary">Keyboard icon</p>
                <div class="space"></div>
            </div>
            <div class="col xlarge-3 large-4 medium-6 small-4">
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/usability_bidirectionality/usability-bidirectionality-guidelines-whennot4.png"></figure>
                <p class="text-secondary">Headset icon</p>
                <div class="space"></div>
            </div>
        </div>

        <div class="row">
            <div class="col xlarge-6 large-9 medium-12">
                <p class="text-secondary">Certain icons might seem directional but they actually represent holding an object with one’s right hand.</p>
                <p class="text-secondary">For example, the search icon typically has its handle at the bottom right side, because the majority of users are right-handed.</p>
                <p class="text-secondary">The majority of users in RTL-writing countries are also right-handed, so such icons should not be mirrored.</p>
            </div>
        </div>
        <div class="row">
            <div class="col xlarge-3 large-4 medium-6 small-4">
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/usability_bidirectionality/usability-bidirectionality-guidelines-whennot5.png"></figure>
                <p class="text-secondary">Search icon</p>
                <div class="space"></div>
            </div>
            <div class="col xlarge-3 large-4 medium-6 small-4">
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/usability_bidirectionality/usability-bidirectionality-guidelines-whennot6.png"></figure>
                <p class="text-secondary">Local cafe icon</p>
                <div class="space"></div>
            </div>
        </div>

        <div class="row">
            <div class="col xlarge-6 large-9 medium-12">
                <div class="space"></div>
                <div class="mdc-divider"></div>
                <div class="space"></div>

                <h4>The passage of time</h4>
                <p class="text-secondary">Anything depicting the passage of time should be mirrored.</p>
                <p class="text-secondary">Do not mirror media playback buttons and the media progress indicator as they refer to the direction of tape being played, not the direction of time.</p>

                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/usability_bidirectionality/usability-bidirectionality-guidelines-whennot7.png"></figure>
                <p class="text-secondary">Since media playback buttons and the progress indicator reflect the direction of the tape, they are not mirrored.</p>
                <div class="space"></div>

                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/usability_bidirectionality/usability-bidirectionality-guidelines-whennot-do.png"></figure>
                <p class="text-secondary">Media controls for playback are always LTR.</p>
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
                <h1 class="article_title">Localization</h1>

                <div class="space"></div>

                <h4>Text in graphics</h4>
                <p class="text-secondary">Graphics that include text usually require localization.</p>

                <div class="space"></div>
                <div class="mdc-divider"></div>
                <div class="space"></div>

                <h4>Numbers</h4>
                <p class="text-secondary">Numbers, including icons containing numbers, must be localized for languages that use different numerals. For example, Bengali, Marathi, Nepali, and some Arabic-speaking locales use different forms of numbers.</p>
            </div>
        </div>
        <div class="row">
            <div class="col xlarge-3 large-4 medium-6 small-4">
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/usability_bidirectionality/usability-bidirectionality-other1.png"></figure>
                <p class="text-secondary">An icon in LTR containing a number</p>
            </div>
            <div class="col xlarge-3 large-4 medium-6 small-4">
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/usability_bidirectionality/usability-bidirectionality-other2.png"></figure>
                <p class="text-secondary">An RTL icon in Arabic (Arabic digits are preferred for Arabic localization)</p>
            </div>
        </div>

        <div class="row">
            <div class="col xlarge-6 large-9 medium-12">
                <div class="space"></div>
                <div class="mdc-divider"></div>
                <div class="space"></div>

                <h4>Mirroring</h4>
                <p class="text-secondary">Sometimes content may need to be mirrored, even if the UI is not mirrored. For example, when a user edits an RTL paragraph inside a LTR document, the toolbar buttons for the RTL text should be in RTL.</p>

                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/usability_bidirectionality/usability-bidirectionality-other3.png"></figure>
                <p class="text-secondary">In this RTL paragraph inside a LTR document, the buttons for indenting and lists should be RTL even though the primary UI direction is LTR.</p>
                <ul class="text-secondary">
                    <li>Paragraph aligned right</li>
                    <li>Icons flipped</li>
                    <li>Hebrew text direction is RTL</li>
                </ul>
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
            <div class="col xlarge-3 large-4 medium-6">
                <h4>LTR</h4>
                <p class="text-secondary">Every element and component is in LTR by default but it is always a good idea to specify your application language and direction in the root element using <code>[lang="en-US"]</code> and <code>[dir="ltr"]</code> respectively.</p>
            </div>
            <div class="col xlarge-6 large-7 medium-10">
<pre class="bg-app-bar html"><?= htmlspecialchars(
<<<TEXT
<!DOCTYPE html>
<html lang="en-US" dir="ltr">
    .
    .
    .
</html>
TEXT
) ?></pre>
            </div>
        </div>
        <div class="row">
            <div class="col xlarge-3 large-4 medium-6">
                <h4>RTL</h4>
                <p class="text-secondary">For RTL applications use <code>[dir="rtl"]</code> on the root element. for elements and components that needs to be in LTR you can add <code>[dir="ltr"]</code> to them.</p>
                <p class="text-secondary">This works in most cases, it will sometimes lead to false negatives for more complex layouts, e.g.</p>
            </div>
            <div class="col xlarge-6 large-7 medium-10">
<pre class="bg-app-bar html"><?= htmlspecialchars(
<<<TEXT
<!DOCTYPE html>
<html lang="ar-BH" dir="rtl">
    .
    .
    <p dir="ltr">...</p>
    <div class="mdc-list-group" dir="ltr">
        <div class="mdc-list-item">...</div>
    </div>
    .
    .
</html>
TEXT
) ?></pre>
            </div>
        </div>
    </section>
</div>

</body>
</html>