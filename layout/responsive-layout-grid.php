<?php
$language = "en-US";
$direction = "ltr";

$css_files = [
];
$js_files = [
];

$head_title = "MDC v2";

$topAppBarColor = "bg-blue-grey-900";
$topAppBarTitle = "Layout - Responsive layout grid";

$primaryColor = "indigo";
$accentColor = "blue";

$prefix = "../";
$url = $prefix."layout/responsive-layout-grid.php";
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
                <h1 class="article_title">Responsive layout grid</h1>
                <h5 class="text-secondary">The Material Design responsive layout grid adapts to screen size and orientation, ensuring consistency across layouts.</h5>
            </div>
        </div>
    </section>
</div>
<div class="mdc-divider"></div>
<div class="container">
    <section>
        <div class="row">
            <div class="col xlarge-6 large-9 medium-12">
                <h1 class="article_title">Columns, gutters, and margins</h1>
                <p class="text-secondary">The Material Design layout grid is made up of three elements: columns, gutters, and margins.</p>
                <div class="space"></div>

                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/layout_responsive_layout_grid/layout-responsive-columns-margins-gutters.png"></figure>
                <ol class="text-secondary">
                    <li>Columns</li>
                    <li>Gutters</li>
                    <li>Margins</li>
                </ol>

                <div class="space"></div>
                <div class="space"></div>

                <h4>Columns</h4>
                <p class="text-secondary">Content is placed in the areas of the screen that contain columns.</p>
                <p class="text-secondary">Column width is defined using percentages, rather than fixed values, to allow content to flexibly adapt to any screen size. The number of columns displayed in the grid is determined by the breakpoint range (a range of predetermined screen sizes) at which a screen is viewed, whether it’s a breakpoint for mobile, tablet, or another size.</p>

                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/layout_responsive_layout_grid/layout-responsive-columns-360.png"></figure>
                <p class="text-secondary">On mobile, at a breakpoint of 360dp, this layout grid uses 4 columns.</p>
                <div class="space"></div>

                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/layout_responsive_layout_grid/layout-responsive-columns-600.png"></figure>
                <p class="text-secondary">On tablet, at a breakpoint of 600dp, this layout grid uses 8 columns.</p>

                <div class="space"></div>
                <div class="mdc-divider"></div>
                <div class="space"></div>

                <h4>Gutters</h4>
                <p class="text-secondary">Gutters are the spaces between columns. They help separate content.</p>
                <p class="text-secondary">Gutter widths are fixed values at each breakpoint range. To better adapt to the screen, gutter width can change at different breakpoints. Wider gutters are more appropriate for larger screens, as they create more whitespace between columns.</p>

                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/layout_responsive_layout_grid/layout-responsive-gutters-360.png"></figure>
                <p class="text-secondary">On mobile, at a breakpoint of 360dp, this layout grid uses 16dp gutters.</p>
                <div class="space"></div>

                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/layout_responsive_layout_grid/layout-responsive-gutters-600.png"></figure>
                <p class="text-secondary">On tablet, at a breakpoint of 600dp, this layout grid uses 24dp gutters.</p>

                <div class="space"></div>
                <div class="mdc-divider"></div>
                <div class="space"></div>

                <h4>Margins</h4>
                <p class="text-secondary">Margins are the space between content and the left and right edges of the screen.</p>
                <p class="text-secondary">Margin widths are defined as fixed values at each breakpoint range. To better adapt to the screen, the margin width can change at different breakpoints. Wider margins are more appropriate for larger screens, as they create more whitespace around the perimeter of content.</p>

                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/layout_responsive_layout_grid/layout-responsive-margins-360.png"></figure>
                <p class="text-secondary">On mobile, at a breakpoint of 360dp, this layout grid uses 16dp margins.</p>
                <div class="space"></div>

                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/layout_responsive_layout_grid/layout-responsive-margins-600.png"></figure>
                <p class="text-secondary">On a small tablet, at a breakpoint of 600dp, this layout grid uses 24dp margins.</p>
            </div>
        </div>
    </section>
</div>
<div class="mdc-divider"></div>
<div class="container">
    <section>
        <div class="row">
            <div class="col xlarge-6 large-9 medium-12">
                <h1 class="article_title">Grid customization</h1>
                <p class="text-secondary">The layout grid can be adjusted to meet the needs of both your product and various device sizes.</p>
                <div class="space"></div>

                <h4>Customizing gutters</h4>
                <p class="text-secondary">Gutters can be adjusted to create more or less space between the columns of a layout.</p>

                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/layout_responsive_layout_grid/layout-custom-gutters-small.gif"></figure>
                <p class="text-secondary">This layout grid uses 8dp gutters. The tighter spacing may suggest the images are closely related to one another, so that they are perceived as part of a collection.</p>
                <div class="space"></div>

                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/layout_responsive_layout_grid/layout-custom-gutter-large.gif"></figure>
                <p class="text-secondary">This layout grid uses larger, 32dp gutters to create more separation between columns. The extra space helps each album to be perceived as an individual entity within a collection.</p>

                <div class="space"></div>
                <div class="mdc-divider"></div>
                <div class="space"></div>

                <h4>Customizing margins</h4>
                <p class="text-secondary">Margins can be adjusted to create more or less space between content and the edge of the screen. Margins use a fixed value for each breakpoint.</p>
                <p class="text-secondary">The ideal length for legibility of body copy is 40-60 characters per line.</p>

                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/layout_responsive_layout_grid/layout-custom-margins-small.gif"></figure>
                <p class="text-secondary">This layout grid uses small, 8dp margins to allow images to take up more space in the layout.</p>
                <div class="space"></div>

                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/layout_responsive_layout_grid/layout-custom-margins-large.gif"></figure>
                <p class="text-secondary">This layout grid uses large, 64dp margins to limit the width of content.</p>

                <div class="space"></div>
                <div class="mdc-divider"></div>
                <div class="space"></div>

                <h4>Gutters and margins</h4>
                <p class="text-secondary">Within the same breakpoint, gutter and margin widths can be different from one another.</p>

                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/layout_responsive_layout_grid/layout-custom-gutters-margins-different.png"></figure>
                <ol class="text-secondary">
                    <li>32dp margins</li>
                    <li>8dp gutters</li>
                </ol>

                <div class="space"></div>
                <div class="mdc-divider"></div>
                <div class="space"></div>

                <h4>Horizontal grids</h4>
                <p class="text-secondary">The Material Design layout grid can be customized for touch UIs that scroll horizontally. Columns, gutters, and margins are laid out from left to right, rather than top to bottom. The height of the screen determines the number of columns in a horizontal grid.</p>
                <p class="text-secondary">Horizontally scrolling UIs are uncommon on non-touch and web platforms.</p>

                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/layout_responsive_layout_grid/layout-horizontal-grid.png"></figure>
                <p class="text-secondary">This horizontal layout grid uses four horizontal columns, for a total layout height of 400dp.</p>
                <ol class="text-secondary">
                    <li>Columns</li>
                    <li>Gutters</li>
                    <li>Margins</li>
                </ol>
                <div class="space"></div>

                <p class="text-secondary">Horizontal grids can be positioned to accommodate different heights, allowing space for app bars or other UI regions at the top.</p>

                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/layout_responsive_layout_grid/layout-horizontal-grid-appbar.png"></figure>
                <p class="text-secondary">This horizontal layout grid starts below the <b>Top App Bar</b> component and uses four horizontal columns at a height of 316dp.</p>
            </div>
        </div>
    </section>
</div>
<div class="mdc-divider"></div>
<div class="container">
    <section>
        <div class="row">
            <div class="col xlarge-6 large-9 medium-12">
                <h1 class="article_title">Breakpoints</h1>
                <p class="text-secondary">A breakpoint is the range of predetermined screen sizes that have specific layout requirements. At a given breakpoint range, the layout adjusts to suit the screen size and orientation.</p>
                <div class="space"></div>

                <h4>Breakpoint system</h4>
                <p class="text-secondary">Material Design provides responsive layouts based on the following column structures. Layouts using 4-column, 8-column, and 12-column grids are available for use across different screens, devices, and orientations.</p>
                <p class="text-secondary">Each breakpoint range determines the number of columns, and recommended margins and gutters, for each display size.</p>

                <table class="bg-cards">
                    <thead class="bg-app-bar">
                        <tr>
                            <th><b>Breakpoint Range (px)</b></th>
                            <th><b>Column Class</b></th>
                            <th><b># Columns</b></th>
                            <th><b>Margins / Gutters*</b></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>0 - 599</td>
                            <td>.xsmall</td>
                            <td>4</td>
                            <td>16</td>
                        </tr>
                        <tr>
                            <td>600 - 719</td>
                            <td>.small</td>
                            <td>8</td>
                            <td>16</td>
                        </tr>
                        <tr>
                            <td>720 - 839</td>
                            <td>.small</td>
                            <td>8</td>
                            <td>24</td>
                        </tr>
                        <tr>
                            <td>840 - 1023</td>
                            <td>.smallext</td>
                            <td>12</td>
                            <td>24</td>
                        </tr>
                        <tr>
                            <td>1024 - 1439</td>
                            <td>.medium</td>
                            <td>12</td>
                            <td>24</td>
                        </tr>
                        <tr>
                            <td>1440 - 1919</td>
                            <td>.large</td>
                            <td>12</td>
                            <td>24</td>
                        </tr>
                        <tr>
                            <td>1920+</td>
                            <td>.xlarge</td>
                            <td>12</td>
                            <td>24</td>
                        </tr>
                    </tbody>
                </table>
                <p class="text-secondary">*Margins and gutters are flexible and don’t need to be of equal size.</p>
            </div>
        </div>
    </section>
</div>
<div class="mdc-divider"></div>
<div class="container">
    <section>
        <div class="row">
            <div class="col xlarge-6 large-9 medium-12">
                <h1 class="article_title">Grid behavior</h1>
                <div class="space"></div>

                <h4>Fluid grids</h4>
                <p class="text-secondary">Fluid grids use columns that scale and resize content. A fluid grid’s layout can use breakpoints to determine if the layout needs to change dramatically.</p>

                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/layout_responsive_layout_grid/layout-responsive-grid-behavior-fluid.gif"></figure>
                <p class="text-secondary">Columns expanding in a full-width grid</p>

                <div class="space"></div>
                <div class="mdc-divider"></div>
                <div class="space"></div>

                <h4>Fixed grids</h4>
                <p class="text-secondary">Fixed grids use columns of a fixed size, with fluid margins to keep content unchanging within each breakpoint range. A fixed grid’s layout can only change at an assigned breakpoint.</p>

                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/layout_responsive_layout_grid/layout-responsive-grid-behavior-fixed.gif"></figure>
                <p class="text-secondary">Margins expanding in a fixed grid</p>
            </div>
        </div>
    </section>
</div>
<div class="mdc-divider"></div>
<div class="container">
    <section>
        <div class="row">
            <div class="col xlarge-6 large-9 medium-12">
                <h1 class="article_title">Grid Implementation</h1>
                <div class="space"></div>

                <h4>Containers</h4>
                <p class="text-secondary">Containers are the most basic layout element and are required when using our <b>default grid system</b>. Choose from default container (fixed grids) or fluid container (fluid grids).</p>
                <div class="space"></div>

                <div class="container example bg-status-bar">
                    <div class="row">
                        <div class="col xsmall-3"><div class="box bg-<?= $primaryColor ?>"></div></div>
                        <div class="col xsmall-1"><div class="box bg-<?= $accentColor ?>"></div></div>
                    </div>
                </div>

<pre class="bg-app-bar html"><?= htmlspecialchars(
<<<TEXT
<div class="container">
    .
    .
    .
</div>
TEXT
) ?></pre>
                <p class="text-secondary">Default container for fixed grids.</p>
                <div class="space"></div>
                <div class="space"></div>

                <div class="container-fluid example bg-status-bar">
                    <div class="row">
                        <div class="col xsmall-3"><div class="box bg-<?= $primaryColor ?>"></div></div>
                        <div class="col xsmall-1"><div class="box bg-<?= $accentColor ?>"></div></div>
                    </div>
                </div>

<pre class="bg-app-bar html"><?= htmlspecialchars(
<<<TEXT
<div class="container-fluid">
    .
    .
    .
</div>
TEXT
) ?></pre>
                <p class="text-secondary">Fluid container for fluid grids.</p>

                <div class="space"></div>
                <div class="space"></div>

                <h4>Rows</h4>
                <p class="text-secondary">Rows are wrappers for columns and should only contain columns inside.</p>

<pre class="bg-app-bar html"><?= htmlspecialchars(
<<<TEXT
<div class="container-fluid">
    <div class="row">
        .
        .
        .
    </div>
</div>
TEXT
) ?></pre>
                <p class="text-secondary">Row inside a fluid container (fluid grid).</p>
                <div class="space"></div>

                <h6>Row items vertical alignment</h6>
                <p class="text-secondary">Columns can be aligned <b>vertically</b> inside a row at top, middle, or bottom. note that in order for this to work, row height should be greater than the contained columns.</p>

                <div class="container-fluid example bg-status-bar">
                    <div class="row col-align-top" style="height: 6rem;">
                        <div class="col xsmall-3"><div class="box bg-<?= $primaryColor ?>"></div></div>
                        <div class="col xsmall-1"><div class="box bg-<?= $accentColor ?>"></div></div>
                    </div>
                </div>

<pre class="bg-app-bar html"><?= htmlspecialchars(
<<<TEXT
<div class="container-fluid">
    <div class="row col-align-top">
        .
        .
        .
    </div>
</div>
TEXT
) ?></pre>
                <p class="text-secondary">Columns vertically aligned at the top.</p>
                <div class="space"></div>

                <div class="container-fluid example bg-status-bar">
                    <div class="row col-align-middle" style="height: 6rem;">
                        <div class="col xsmall-3"><div class="box bg-<?= $primaryColor ?>"></div></div>
                        <div class="col xsmall-1"><div class="box bg-<?= $accentColor ?>"></div></div>
                    </div>
                </div>

<pre class="bg-app-bar html"><?= htmlspecialchars(
<<<TEXT
<div class="container-fluid">
    <div class="row col-align-middle">
        .
        .
        .
    </div>
</div>
TEXT
) ?></pre>
                <p class="text-secondary">Columns vertically aligned at the middle.</p>
                <div class="space"></div>

                <div class="container-fluid example bg-status-bar">
                    <div class="row col-align-bottom" style="height: 6rem;">
                        <div class="col xsmall-3"><div class="box bg-<?= $primaryColor ?>"></div></div>
                        <div class="col xsmall-1"><div class="box bg-<?= $accentColor ?>"></div></div>
                    </div>
                </div>

<pre class="bg-app-bar html"><?= htmlspecialchars(
<<<TEXT
<div class="container-fluid">
    <div class="row col-align-bottom">
        .
        .
        .
    </div>
</div>
TEXT
) ?></pre>
                <p class="text-secondary">Columns vertically aligned at the bottom.</p>
                <div class="space"></div>

                <h6>Row items horizontal alignment</h6>
                <p class="text-secondary">Columns can be aligned <b>horizontally</b> inside a row. note that in order for this to work, the row should not be full of columns.</p>

                <div class="container-fluid example bg-status-bar">
                    <div class="row col-justify-start">
                        <div class="col xsmall-1"><div class="box bg-<?= $primaryColor ?>"></div></div>
                        <div class="col xsmall-1"><div class="box bg-<?= $accentColor ?>"></div></div>
                    </div>
                </div>

<pre class="bg-app-bar html"><?= htmlspecialchars(
<<<TEXT
<div class="container-fluid">
    <div class="row col-justify-start">
        .
        .
        .
    </div>
</div>
TEXT
) ?></pre>
                <p class="text-secondary">Columns horizontally aligned at the start.</p>
                <div class="space"></div>

                <div class="container-fluid example bg-status-bar">
                    <div class="row col-justify-center">
                        <div class="col xsmall-1"><div class="box bg-<?= $primaryColor ?>"></div></div>
                        <div class="col xsmall-1"><div class="box bg-<?= $accentColor ?>"></div></div>
                    </div>
                </div>

<pre class="bg-app-bar html"><?= htmlspecialchars(
<<<TEXT
<div class="container-fluid">
    <div class="row col-justify-center">
        .
        .
        .
    </div>
</div>
TEXT
) ?></pre>
                <p class="text-secondary">Columns horizontally aligned at the center.</p>
                <div class="space"></div>

                <div class="container-fluid example bg-status-bar">
                    <div class="row col-justify-end">
                        <div class="col xsmall-1"><div class="box bg-<?= $primaryColor ?>"></div></div>
                        <div class="col xsmall-1"><div class="box bg-<?= $accentColor ?>"></div></div>
                    </div>
                </div>

<pre class="bg-app-bar html"><?= htmlspecialchars(
<<<TEXT
<div class="container-fluid">
    <div class="row col-justify-end">
        .
        .
        .
    </div>
</div>
TEXT
) ?></pre>
                <p class="text-secondary">Columns horizontally aligned at the end.</p>
                <div class="space"></div>

                <div class="container-fluid example bg-status-bar">
                    <div class="row col-justify-around">
                        <div class="col xsmall-1"><div class="box bg-<?= $primaryColor ?>"></div></div>
                        <div class="col xsmall-1"><div class="box bg-<?= $accentColor ?>"></div></div>
                    </div>
                </div>

<pre class="bg-app-bar html"><?= htmlspecialchars(
<<<TEXT
<div class="container-fluid">
    <div class="row col-justify-around">
        .
        .
        .
    </div>
</div>
TEXT
) ?></pre>
                <p class="text-secondary">Columns horizontally justified with space around each column.</p>
                <div class="space"></div>

                <div class="container-fluid example bg-status-bar">
                    <div class="row col-justify-between">
                        <div class="col xsmall-1"><div class="box bg-<?= $primaryColor ?>"></div></div>
                        <div class="col xsmall-1"><div class="box bg-<?= $accentColor ?>"></div></div>
                    </div>
                </div>

<pre class="bg-app-bar html"><?= htmlspecialchars(
<<<TEXT
<div class="container-fluid">
    <div class="row col-justify-between">
        .
        .
        .
    </div>
</div>
TEXT
) ?></pre>
                <p class="text-secondary">Columns horizontally justified with space between columns.</p>
                <div class="space"></div>

                <h6>Row items direction</h6>
                <p class="text-secondary">The default direction of columns is from start to end, from <b>left to right in LTR direction</b> and from <b>right to left in RTL direction</b>. however, the direction can br <b>reversed</b> to be from end to start.</p>

                <div class="container-fluid example bg-status-bar">
                    <div class="row direction-reverse">
                        <div class="col xsmall-1"><div class="box bg-<?= $primaryColor ?>"></div></div>
                        <div class="col xsmall-1"><div class="box bg-<?= $accentColor ?>"></div></div>
                    </div>
                </div>

<pre class="bg-app-bar html"><?= htmlspecialchars(
<<<TEXT
<div class="container-fluid">
    <div class="row direction-reverse">
        .
        .
        .
    </div>
</div>
TEXT
) ?></pre>
                <p class="text-secondary">Columns horizontally justified with space between columns.</p>

                <div class="space"></div>
                <div class="space"></div>

                <h4>Columns</h4>
                <p class="text-secondary">We have 6 column classes based on material design breakpoints system (read breakpoints section). be aware of maximum column numbers in each breakpoint.</p>

                <div class="container-fluid example bg-status-bar">
                    <div class="row">
                        <div class="col xsmall-1 small-3 medium-4"><div class="box bg-<?= $primaryColor ?>"></div></div>
                        <div class="col xsmall-3 small-5 medium-4"><div class="box bg-<?= $accentColor ?>"></div></div>
                        <div class="visible-xsmall visible-small visible-smallext" style="width: 100%; padding: 0.5rem;"></div>
                        <div class="col xsmall-3 small-5 medium-4"><div class="box bg-<?= $accentColor ?>"></div></div>
                    </div>
                </div>

<pre class="bg-app-bar html"><?= htmlspecialchars(
<<<TEXT
<div class="container-fluid">
    <div class="row">
        <div class="col xsmall-1 small-3 medium-4">...</div>
        <div class="col xsmall-3 small-5 medium-4">...</div>
        <div class="col xsmall-3 small-5 medium-4">...</div>
        .
        .
    </div>
    .
    .
    .
</div>
TEXT
) ?></pre>
                <p class="text-secondary">Columns with three different breakpoints. <b>xsmall</b>, <b>small</b>, and <b>medium</b>.</p>

                <div class="space"></div>
                <div class="space"></div>

                <h6>Auto sizing</h6>
                <p class="text-secondary">Columns with auto size class will be the same size as their content and their <b>width can't be less than 1 column</b>.</p>

                <div class="container-fluid example bg-status-bar">
                    <div class="row">
                        <div class="col xsmall-auto medium-auto"><div class="box bg-<?= $primaryColor ?>"></div></div>
                        <div class="col xsmall-3 medium-5"><div class="box bg-<?= $accentColor ?>"></div></div>
                        <div class="visible-xsmall visible-small visible-smallext" style="width: 100%; padding: 0.5rem;"></div>
                        <div class="col xsmall-auto medium-auto"><div class="box bg-<?= $primaryColor ?>"></div></div>
                    </div>
                </div>

<pre class="bg-app-bar html"><?= htmlspecialchars(
<<<TEXT
<div class="container-fluid">
    <div class="row">
        <div class="col xsmall-auto medium-auto">...</div>
        <div class="col xsmall-3 medium-5">...</div>
        <div class="col xsmall-auto medium-auto">...</div>
        .
        .
    </div>
    .
    .
    .
</div>
TEXT
) ?></pre>
                <p class="text-secondary">Columns with auto size class. note that on xsmall breakpoint the third column wraps to a new row because the first row is filled (maximum columns = 4).</p>

                <div class="space"></div>

                <p class="text-secondary">To fill the available empty space you can use <b>fill-space classes</b> on an auto sized column.</p>

                <div class="container-fluid example bg-status-bar">
                    <div class="row">
                        <div class="col xsmall-auto medium-auto"><div class="box bg-<?= $accentColor ?>"></div></div>
                        <div class="col xsmall-3 medium-5"><div class="box bg-<?= $accentColor ?>"></div></div>
                        <div class="visible-xsmall visible-small visible-smallext" style="width: 100%; padding: 0.5rem;"></div>
                        <div class="col xsmall-auto xsmall-fill-space medium-auto medium-fill-space"><div class="box bg-<?= $primaryColor ?>"></div></div>
                    </div>
                </div>

<pre class="bg-app-bar html"><?= htmlspecialchars(
<<<TEXT
<div class="container-fluid">
    <div class="row">
        <div class="col xsmall-auto medium-auto">...</div>
        <div class="col xsmall-3 medium-5">...</div>
        <div class="col xsmall-auto xsmall-fill-space medium-auto medium-fill-space">...</div>
        .
        .
    </div>
    .
    .
    .
</div>
TEXT
) ?></pre>
                <p class="text-secondary yellow-700">Note: for <b>fill-space classes</b> to work the column must have an auto size class.</p>

                <div class="space"></div>
                <div class="space"></div>

                <h6>Columns vertical aligning</h6>
                <p class="text-secondary">Each Column can be optionally aligned vertically at <b>top</b>, <b>middle</b>, and <b>bottom</b>.</p>

                <div class="container-fluid example bg-status-bar">
                    <div class="row" style="height: 6rem;">
                        <div class="col xsmall-auto align-top"><div class="box bg-<?= $primaryColor ?>"></div></div>
                        <div class="col xsmall-auto align-middle"><div class="box bg-<?= $accentColor ?>"></div></div>
                        <div class="col xsmall-auto align-bottom"><div class="box bg-<?= $accentColor ?>"></div></div>
                    </div>
                </div>

<pre class="bg-app-bar html"><?= htmlspecialchars(
<<<TEXT
<div class="container-fluid">
    <div class="row">
        <div class="col xsmall-auto align-top">...</div>
        <div class="col xsmall-auto align-middle">...</div>
        <div class="col xsmall-auto align-bottom">...</div>
        .
        .
    </div>
    .
    .
    .
</div>
TEXT
) ?></pre>
                <p class="text-secondary">Each column is aligned vertically.</p>
            </div>
        </div>
    </section>
</div>
<div class="mdc-divider"></div>
<div class="container">
    <section>
        <div class="row">
            <div class="col xlarge-6 large-9 medium-12">
                <h1 class="article_title">UI regions</h1>
                <div class="space"></div>

                <p class="text-secondary">A layout is made up of several UI regions, such as side navigation, content areas, and app bars. These regions can display actions, content, or navigation destinations. UI regions should be consistent across devices, while adapting to different breakpoints of different screen sizes.</p>
                <p class="text-secondary">To increase familiarity across devices, UI elements designed for desktop should be organized in a way that’s consistent with the mobile UI.</p>

                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/layout_responsive_layout_grid/01-ui-regions.gif"></figure>
                <p class="text-secondary">Layout changes on different-sized screens</p>

                <div class="space"></div>
                <div class="space"></div>

                <h4>Permanent UI regions</h4>
                <p class="text-secondary">Permanent UI regions are regions that can be displayed outside of the responsive grid, like a navigation drawer. These regions cannot be collapsed.</p>

                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/layout_responsive_layout_grid/layout-responsive-uiregions-permenant.png"></figure>
                <p class="text-secondary">When screen space is available, a permanent UI region exposes content.</p>

                <div class="space"></div>
                <div class="mdc-divider"></div>
                <div class="space"></div>

                <h4>Persistent UI regions</h4>
                <p class="text-secondary">Persistent UI regions are regions that can be displayed upon command at any time, or they can remain visible. They can be toggled on or off, to appear or disappear. When they appear, they condense both content and the grid.</p>
                <p class="text-secondary">When a persistent UI region is visible, its visibility isn’t affected by interaction with other elements on screen.</p>

                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/layout_responsive_layout_grid/layout-responsive-uiregions-persistent.gif"></figure>
                <p class="text-secondary">When open, this persistent navigation drawer causes the grid (and its content) to condense.</p>

                <div class="space"></div>
                <div class="mdc-divider"></div>
                <div class="space"></div>

                <h4>Temporary UI regions</h4>
                <p class="text-secondary">Temporary UI regions appear temporarily, and when they do, they do not affect the responsive grid. When visible, they can be hidden by tapping an item in their region, or any space outside their region.</p>
                <p class="text-secondary">When a UI region is visible, other screen elements aren’t interactive.</p>

                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/layout_responsive_layout_grid/layout-responsive-uiregions-temporary.gif"></figure>
                <p class="text-secondary">When open, this temporary navigation drawer doesn’t affect the responsive grid or screen content.</p>
            </div>
        </div>
    </section>
</div>
<div class="mdc-divider"></div>
<div class="container">
    <section>
        <div class="row">
            <div class="col xlarge-6 large-9 medium-12">
                <h1 class="article_title">Whiteframes</h1>
                <div class="space"></div>

                <p class="text-secondary">Whiteframes are structured layouts that provide a consistent approach to layout, layering, and shadows. They are a starting point, meant to be modified to meet the specific needs of a product.</p>

                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/layout_responsive_layout_grid/layout-responsive-whiteframes-01.png"></figure>
                <ol class="text-secondary">
                    <li>Desktop</li>
                    <li>Mobile</li>
                </ol>
                <div class="space"></div>

                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/layout_responsive_layout_grid/layout-responsive-whiteframes-02.png"></figure>
                <ol class="text-secondary">
                    <li>Desktop</li>
                    <li>Mobile</li>
                </ol>
            </div>
        </div>
    </section>
</div>

<?php include $prefix."_includes/footer.php"; ?>

</body>
</html>