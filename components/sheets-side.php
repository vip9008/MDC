<?php
$language = "en-US";
$direction = "ltr";

$css_files = [
    'css/mdc.sheets.side.css',
];
$js_files = [
    'js/mdc.sheets.side.js',
];

$head_title = "MDC v2";

$topAppBarColor = "bg-blue-grey-900";
$topAppBarTitle = "Components - Sheets: side";

$primaryColor = "indigo";
$accentColor = "blue";

$prefix = "../";
$url = $prefix."components/sheets-side.php";
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
                <h1 class="article_title">Sheets: side</h1>
                <h5 class="text-secondary">Side sheets are surfaces containing supplementary content that are anchored to the left or right edge of the screen.</h5>
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/component_sheets_side/side-sheet-intro.png"></figure>
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
                <p class="text-secondary">Side sheets are supplementary surfaces primarily used on tablet and desktop.</p>
                <p class="text-secondary">They come in two types:</p>
            </div>
        </div>
        <div class="row">
            <div class="col xlarge-3 large-4 medium-6 small-4">
                <h6>Standard side sheets</h6>
                <p class="text-secondary">Display content that complements the screen’s primary content. They remain visible while users interact with primary content.</p>
            </div>
            <div class="col xlarge-3 large-4 medium-6 small-4">
                <h6>Modal side sheets</h6>
                <p class="text-secondary">Used on mobile instead of standard side sheets, due to limited screen size. They can display the same types of content as standard side sheets, but must be dismissed in order to interact with the underlying content.</p>
            </div>
        </div>
        <div class="row">
            <div class="col xlarge-6 large-9 medium-12">
                <div class="space"></div>

                <p class="text-secondary">Common uses include</p>
                <ul class="text-secondary">
                    <li>Displaying a list of actions that affect the screen’s primary content, such as filters</li>
                    <li>Displaying supplemental content and features</li>
                </ul>
                <div class="space"></div>

                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/component_sheets_side/usage-standard.png"></figure>
                <p class="text-secondary">This standard side sheet on desktop contains filters that control the files shown in the primary UI region.</p>
            </div>
        </div>
        <div class="row">
            <div class="col xlarge-3 large-4 medium-6 small-4">
                <div class="space"></div>

                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/component_sheets_side/usage-modal.png"></figure>
                <p class="text-secondary">A modal side sheet on mobile is used instead of a standard side sheet, because of the limited screen space.</p>
            </div>
        </div>
        <div class="row">
            <div class="col xlarge-6 large-9 medium-12">
                <div class="space"></div>
                <div class="space"></div>

                <h4>Principles</h4>
            </div>
        </div>
        <div class="row">
            <div class="col xlarge-2 large-3 medium-4 small-4">
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/component_sheets_side/side-sheets-illos-04.png"></figure>
                <h6>Supporting</h6>
                <p class="text-secondary">Side sheets contain content that supplements the screen’s primary UI region.</p>
            </div>
            <div class="col xlarge-2 large-3 medium-4 small-4">
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/component_sheets_side/side-sheets-illos-02.png"></figure>
                <h6>Flexible</h6>
                <p class="text-secondary">Side sheets display a wide variety of content and layouts.</p>
            </div>
            <div class="clearfix visible-smallext visible-small"></div>
            <div class="col xlarge-2 large-3 medium-4 small-4">
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/component_sheets_side/side-sheets-illos-03.png"></figure>
                <h6>Contextual</h6>
                <p class="text-secondary">Side sheets can be visible or hidden based on screen size or user need, and they often become bottom sheets on mobile.</p>
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

                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/component_sheets_side/anatomy.png"></figure>
                <ol class="text-secondary">
                    <li>Sheet</li>
                    <li>Content</li>
                    <li>Scrim (Modal only)</li>
                </ol>

                <div class="space"></div>
                <div class="space"></div>

                <h4>Sheet</h4>
                <p class="text-secondary">Side sheets are anchored to the left or right edge of the screen. They are a fixed width and typically span the height of the screen. Their dimensions depend on how the app’s layout is subdivided into UI regions.</p>

                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/component_sheets_side/anatomy-sheet-placement-do.png"></figure>
                <p class="text-secondary">Place side sheets along the left or right edge of the screen.</p>

                <div class="space"></div>
                <div class="mdc-divider"></div>
                <div class="space"></div>

                <h4>Content</h4>
                <p class="text-secondary">Side sheets can display a wide variety of content and layouts, ranging from a list of actions to supplemental content in a tabular layout.</p>
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/component_sheets_side/anatomy-contents-metadata.png"></figure>
                <p class="text-secondary">Metadata about a photo in a standard side sheet.</p>
            </div>
        </div>
        <div class="row">
            <div class="col xlarge-3 large-4 medium-6 small-4">
                <div class="space"></div>

                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/component_sheets_side/anatomy-contents-filters.png"></figure>
                <p class="text-secondary">A list of filters in a modal side sheet</p>
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

                <h4>Scrolling</h4>
                <p class="text-secondary">Side sheets can be vertically scrolled independent of the rest of the UI. This allows their scroll position and contents to persist while the page is scrolled, and vice versa.</p>
                <p class="text-secondary">Side sheets cannot be horizontally scrolled.</p>
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

                <h4>Screen size</h4>
                <p class="text-secondary">Side sheets that are modal on mobile, due to limited screen width, can become standard side sheets on tablet and desktop. The reverse is also true.</p>

                <figure class="img_figure clearfix""><img src="<?= $prefix ?>img/component_sheets_side/placement-screen-size-do.png"></figure>
                <p class="text-secondary">The filters for this app are placed in a standard side sheet on desktop (1) and become modal on mobile due to limited screen width (2).</p>

                <div class="space"></div>
                <div class="mdc-divider"></div>
                <div class="space"></div>

                <h4>Pairing with navigation drawers</h4>
                <p class="text-secondary">Side sheets should be placed on the opposite side of a side navigation drawer to avoid obstructing the UI or causing confusion about the sheet’s functionality.</p>
                <p class="text-secondary">Navigation drawers are anchored to the left screen edge in left-to-right languages, and on the right for right-to-left languages.</p>

                <figure class="img_figure clearfix""><img src="<?= $prefix ?>img/component_sheets_side/placement-nav-drawer-do.png"></figure>
                <p class="text-secondary">Place a side sheet on the opposite edge of a navigation drawer. This app uses a left-to-right layout, so the navigation drawer is placed on its left edge (1) and a standard side sheet is anchored to the right edge (2).</p>
            </div>
        </div>
    </section>
</div>
<div class="mdc-divider"></div>
<div class="container">
    <section>
        <div class="row">
            <div class="col xlarge-6 large-9 medium-12">
                <h1 class="article_title">Standard side sheet</h1>
                <div class="space"></div>

                <h4>Usage</h4>
                <p class="text-secondary">Standard side sheets co-exist with the screen’s primary UI region, which allows viewing and interaction with both surfaces. They are used only on tablet and desktop.</p>
                <p class="text-secondary">Standard side sheets are commonly used for:</p>
                <ul class="text-secondary">
                    <li>Keeping a feature or content on-screen, if the primary UI region is frequently scrolled or panned</li>
                    <li>Contextual actions that affect the primary region, such as filters</li>
                    <li>Supporting information or metadata, such as location or photo details</li>
                    <li>Short tasks that can be accomplished in a single screen, such as configuring options or specifying item details before making a purchase</li>
                </ul>

                <div class="space"></div>
                <div class="mdc-divider"></div>
                <div class="space"></div>

                <h4>Behavior</h4>
                <div class="space"></div>

                <h6>Opening and closing</h6>
                <p class="text-secondary">Standard side sheets that aren’t permanent should include affordances to open and close the sheet.</p>
                <p class="text-secondary">Common open affordances include action icons in top app bars or buttons in the screen layout. While a single affordance can be used to toggle the visibility of the sheet on or off, a separate close affordance within the sheet is recommended.</p>

                <div class="space"></div>
                <div class="mdc-divider"></div>
                <div class="space"></div>

                <h4>Placement</h4>
                <div class="space"></div>

                <h6>Elevation</h6>
                <p class="text-secondary">Standard side sheets can be set at the same elevation as the main content or placed above it, at 8dp.</p>
                <p class="text-secondary">Their elevation can be used to indicate their hierarchical relationship to content or affect its behavior in the layout grid.</p>

                <h6>Coplanar elevation</h6>
                <p class="text-secondary">Coplanar elevation places the sheet at the same elevation as content, indicating the two surfaces are related and of equal importance. Coplanar sheets affect the layout grid and shrink the available area for content.</p>

                <h6>Above content</h6>
                <p class="text-secondary">When the standard side sheet is elevated above content, it can indicate hierarchical meaning or simply be for layout purposes. Surfaces elevated in front of others often convey more importance or control over those behind them. They don’t affect the layout grid, and should only be used for temporarily visible sheets since they obscure content.</p>
                <div class="space"></div>

                <figure class="img_figure clearfix""><img src="<?= $prefix ?>img/component_sheets_side/standard-placement-elevation-coplanar.png"></figure>
                <p class="text-secondary">This filter sheet is coplanar with the main UI region, indicating its connection to content and allowing both regions to be fully visible.</p>
                <div class="space"></div>

                <figure class="img_figure clearfix""><img src="<?= $prefix ?>img/component_sheets_side/standard-placement-elevation-above.png"></figure>
                <p class="text-secondary">The metadata for this photo is elevated above it to avoid resizing the image as the sheet opens and closes.</p>
            </div>
        </div>
    </section>
</div>
<div class="mdc-divider"></div>
<div class="container">
    <section>
        <div class="row">
            <div class="col xlarge-6 large-9 medium-12">
                <h1 class="article_title">Modal side sheet</h1>
                <div class="space"></div>

                <h4>Usage</h4>
                <p class="text-secondary">Modal side sheets present content while blocking interaction with the rest of the screen.</p>
                <p class="text-secondary">On mobile, they are used instead of standard side sheets. On larger screens, they can help focus a user’s attention on a key flow, such as making a purchase.</p>

                <div class="space"></div>
                <div class="mdc-divider"></div>
                <div class="space"></div>

                <h4>Behavior</h4>
                <div class="space"></div>

                <h6>Elevation and scrim</h6>
                <p class="text-secondary">Modal side sheets have a default elevation of 16dp. This elevation allows them to appear over all UI elements.</p>
                <p class="text-secondary">A modal side sheet places all content and UI elements behind a scrim, which indicates that they will not respond to user interaction. Tapping the scrim dismisses both the modal side sheet and scrim from view.</p>
            </div>
        </div>
        <div class="row">
            <div class="col xlarge-3 large-4 medium-6 small-4">
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/component_sheets_side/modal-behavior-scrim-do.png"></figure>
                <p class="text-secondary">A visible scrim informs users they cannot interact with the rest of the screen.</p>
            </div>
        </div>
        <div class="row">
            <div class="col xlarge-6 large-9 medium-12">
                <div class="space"></div>
                <div class="space"></div>

                <h6>Control</h6>
                <p class="text-secondary">Modal side sheets appear when triggered by a user action, such as tapping a button or action icon in a top app bar. They can be dismissed by:</p>
                <ul class="text-secondary">
                    <li>Tapping the scrim</li>
                    <li>Swiping towards the sheet’s anchoring edge (left or right)</li>
                    <li>Using a close affordance within the side sheet’s header, if available</li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col xlarge-3 large-4 medium-6 small-4">
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/component_sheets_side/modal-behavior-control-tap.png"></figure>
                <p class="text-secondary">Tapping the scrim will dismiss a modal side sheet.</p>
            </div>
            <div class="col xlarge-3 large-4 medium-6 small-4">
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/component_sheets_side/modal-behavior-control-swipe.png"></figure>
                <p class="text-secondary">A modal side sheet can be dismissed by swiping towards the sheet’s anchoring edge.</p>
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

                <h6>Javascript methods:</h6>
                <div class="table-container">
                    <table class="bg-cards methods-doc" style="width: auto; min-width: 45rem;">
                        <tbody>
                            <tr>
                                <th class="bg-app-bar code" colspan="3">
                                    <b class="green">void</b>
                                    <b class="blue-grey-800">mdc_sheets_side_open</b>
                                    (
                                    <b class="deep-purple-A700">sheet</b>
                                    )
                                </th>
                            </tr>
                            <tr>
                                <td colspan="3">A method to open the sheet.</td>
                            </tr>
                            <tr>
                                <td><b class="deep-purple-A700 code">sheet</b></td>
                                <td class="code">String | jQuery | Element</td>
                                <td>The sheet container. can be either a css selector string or a jQuery object or an element.</td>
                            </tr>
                            <tr>
                                <th class="bg-app-bar code" colspan="3">
                                    <b class="green">void</b>
                                    <b class="blue-grey-800">mdc_sheets_side_close</b>
                                    (
                                    <b class="deep-purple-A700">sheet</b>
                                    )
                                </th>
                            </tr>
                            <tr>
                                <td colspan="3">A method to close the sheet.</td>
                            </tr>
                            <tr>
                                <td><b class="deep-purple-A700 code">sheet</b></td>
                                <td class="code">String | jQuery | Element</td>
                                <td>The sheet container. can be either a css selector string or a jQuery object or an element.</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="space"></div>

                <h4>Coplanar side sheet</h4>
            </div>
        </div>
        <div class="row">
            <div class="col xlarge-2 large-3 medium-6">
                <div class="mdc-button-group" style="margin-top: 1rem;">
                    <button  onclick="open_example_sheet('fixed');" class="mdc-button btn-contained full-width bg-deep-purple-A700">Open sheet</button>
                </div>
            </div>
            <div class="col xlarge-6 large-7 medium-10">
<pre class="bg-app-bar html"><?= htmlspecialchars(
<<<TEXT
    <div class="mdc-sheets-side fixed">
        <div class="header">
            <div class="title">Side sheet title</div>
            <div class="close-action">
                <button class="material-icon">close</button>
            </div>
        </div>
        <div class="body">
            ...
        </div>
    </div>
    <div class="mdc-sheets-side-scrim" tabindex="-1"></div>
TEXT
) ?></pre>
            </div>
        </div>

        <div class="row">
            <div class="col xlarge-6 large-9 medium-12">
                <div class="space"></div>

                <h4>Above content side sheet</h4>
            </div>
        </div>
        <div class="row">
            <div class="col xlarge-2 large-3 medium-6">
                <div class="mdc-button-group" style="margin-top: 1rem;">
                    <button  onclick="open_example_sheet('');" class="mdc-button btn-contained full-width bg-deep-purple-A700">Open sheet</button>
                </div>
            </div>
            <div class="col xlarge-6 large-7 medium-10">
<pre class="bg-app-bar html"><?= htmlspecialchars(
<<<TEXT
    <div class="mdc-sheets-side">
        .
        .
        .
    </div>
    <div class="mdc-sheets-side-scrim" tabindex="-1"></div>
TEXT
) ?></pre>
            </div>
        </div>

        <div class="row">
            <div class="col xlarge-6 large-9 medium-12">
                <div class="space"></div>

                <h4>Modal side sheet</h4>
            </div>
        </div>
        <div class="row">
            <div class="col xlarge-2 large-3 medium-6">
                <div class="mdc-button-group" style="margin-top: 1rem;">
                    <button  onclick="open_example_sheet('modal');" class="mdc-button btn-contained full-width bg-deep-purple-A700">Open sheet</button>
                </div>
            </div>
            <div class="col xlarge-6 large-7 medium-10">
<pre class="bg-app-bar html"><?= htmlspecialchars(
<<<TEXT
    <div class="mdc-sheets-side model">
        .
        .
        .
    </div>
    <div class="mdc-sheets-side-scrim" tabindex="-1"></div>
TEXT
) ?></pre>
            </div>
        </div>
    </section>
</div>

<script type="text/javascript">
    function open_example_sheet(option) {
        if (option != 'fixed') {
            $('#example-sheet').removeClass('fixed');
        }

        if (option != 'modal') {
            $('#example-sheet').removeClass('modal');
        }

        $('#example-sheet').addClass(option);

        mdc_sheets_side_open('#example-sheet');
    }
</script>

<div id="example-sheet" class="mdc-sheets-side">
    <div class="header">
        <div class="title">Side sheet title</div>
        <div class="close-action">
            <button class="material-icon">close</button>
        </div>
    </div>
    <div class="body">
        <p class="text-secondary">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras luctus odio ac facilisis varius. Aliquam a felis in erat facilisis rutrum sit amet non velit. Aliquam quis enim nisi. Proin quis vulputate lectus. Praesent ac sem vel augue semper tincidunt. Quisque eget est turpis. Praesent laoreet turpis ac tortor mattis, nec pellentesque ipsum iaculis. Pellentesque turpis lorem, scelerisque id semper eu, volutpat nec risus. In hac habitasse platea dictumst. Donec hendrerit tristique tincidunt. Mauris nec elementum tortor, eget sodales urna. Ut dapibus et diam a pretium. Phasellus tristique eu risus vitae accumsan.</p>

        <p class="text-secondary">Quisque semper, urna vel elementum ornare, elit nisi blandit risus, sed tempus sem tellus eget leo. Integer aliquet convallis accumsan. Quisque vel consectetur lectus. Proin diam tortor, viverra quis sapien eu, cursus pulvinar eros. In in sem vulputate, lacinia nulla et, eleifend ex. Vestibulum euismod lacus eu cursus dapibus. Vestibulum gravida tincidunt metus. Interdum et malesuada fames ac ante ipsum primis in faucibus. In suscipit velit ligula, eu hendrerit est maximus et. Curabitur malesuada massa eget volutpat lobortis. Mauris vel ultrices tellus. Nulla tincidunt lorem eu enim sollicitudin laoreet. Phasellus sed odio eget purus vulputate faucibus id nec eros.</p>
    </div>
</div>
<div class="mdc-sheets-side-scrim" tabindex="-1"></div>

<?php include $prefix."_includes/footer.php"; ?>

</body>
</html>