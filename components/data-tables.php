<?php
$language = "en-US";
$direction = "ltr";

$css_files = [
    "css/mdc.card.css",
];
$js_files = [
];

$head_title = "MDC v2";

$topAppBarColor = "bg-blue-grey-900";
$topAppBarTitle = "Components - Data tables";

$primaryColor = "indigo";
$accentColor = "blue";

$prefix = "../";
$url = $prefix."components/data-tables.php";
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
                <h1 class="article_title">Data tables</h1>
                <h5 class="text-secondary">Data tables display sets of data.</h5>
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/component_data_tables/components-datatables-structure.png"></figure>
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
                <p class="text-secondary">Data tables display information in a way that’s easy to scan, so that users can look for patterns and insights. They can be embedded in primary content, such as cards.</p>
                <p class="text-secondary">Data tables can include:</p>
                <ul class="text-secondary">
                    <li>A corresponding visualization</li>
                    <li>Navigation</li>
                    <li>Tools to query and manipulate data</li>
                </ul>
                <p class="text-secondary">When including tools, they should be placed directly above or below the table.</p>
                <div class="space"></div>

                <h4>Principles</h4>
            </div>
        </div>
        <div class="row">
            <div class="col xlarge-2 large-3 medium-4 small-4">
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/component_data_tables/data-tables-illos-02.png"></figure>
                <h6>Hierarchical</h6>
                <p class="text-secondary">Data table content should be hierarchical, alphabetical, or similarly organized.</p>
            </div>
            <div class="col xlarge-2 large-3 medium-4 small-4">
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/component_data_tables/data-tables-illos-01.png"></figure>
                <h6>Interactive</h6>
                <p class="text-secondary">Data tables should allow user interaction, so that users can sort information in custom ways.</p>
            </div>
            <div class="clearfix visible-smallext visible-small"></div>
            <div class="col xlarge-2 large-3 medium-4 small-4">
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/component_data_tables/data-tables-illos-03.png"></figure>
                <h6>Intuitive</h6>
                <p class="text-secondary">Data tables should work intuitively, allowing users to focus on content, not structure.</p>
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

                <p class="text-secondary">Data tables can include three or more columns. A header row at the top lists column names, and all subsequent rows contain data. Data tables can include a corresponding visualization, such as a graph.</p>
                <p class="text-secondary">If users need to interact with row data, checkboxes should accompany each row.</p>
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/component_data_tables/components-datatables-datatable-anatomy.png"></figure>

                <h6>1. Container</h6>
                <p class="text-secondary">The container holds all data table content.</p>

                <h6>2. Column header</h6>
                <p class="text-secondary">Column headers are titles for column content.</p>

                <h6>3. Sorting tool</h6>
                <p class="text-secondary">Sorting tools allow users to reorder table content, appearing only on hover.</p>

                <h6>4. Row checkbox</h6>
                <p class="text-secondary">Checkboxes allow users to select a row.</p>

                <h6>5. Table content</h6>
                <p class="text-secondary">Tables contain raw data.</p>

                <div class="space"></div>
                <div class="space"></div>

                <h4>Column header</h4>
                <p class="text-secondary">By default, there is 56dp of padding between columns. Column headers that extend into this padding can either:</p>
                <ol class="text-secondary">
                    <li>Enable horizontal scrolling, so users can scroll to see the full column name</li>
                    <li>Shorten the column name, while displaying it in full in a tooltip (on hover)</li>
                </ol>
                <div class="space"></div>
            </div>
        </div>
        <div class="row">
            <div class="col xlarge-3 large-4 medium-6 small-4">
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/component_data_tables/components-datatables-anatomy-interaction5.png"></figure>
                <p class="text-secondary">Long column headers are truncated with an ellipse.</p>
            </div>
            <div class="col xlarge-3 large-4 medium-6 small-4">
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/component_data_tables/components-datatables-anatomy-interaction6.png"></figure>
                <p class="text-secondary">Hovering over a truncated column header reveals the full text, using a tooltip.</p>
            </div>
        </div>
        <div class="row">
            <div class="col xlarge-6 large-9 medium-12">
                <div class="space"></div>
                <div class="mdc-divider"></div>
                <div class="space"></div>

                <h4>Sorting tool</h4>
                <p class="text-secondary">If sorting is enabled, the left-most column is sorted by default, with an indicator displayed in the column header. Tapping the header of the sorting column reverses the sort order, also rotating the sort icon 180 degrees.</p>

                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/component_data_tables/components-datatables-interaction3.png"></figure>
                <p class="text-secondary">Table with a sorting tool.</p>

                <div class="space"></div>
                <div class="mdc-divider"></div>
                <div class="space"></div>

                <h4>Row Checkbox</h4>
                <p class="text-secondary">When a checkbox for a row is selected, the row should display a background color.</p>

                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/component_data_tables/components-datatables-interaction2.png"></figure>
                <p class="text-secondary">A selected row checkbox.</p>
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

                <h4>Row hover (Desktop)</h4>
                <p class="text-secondary">If a user hovers over a row, display a background color in that row. If individual table cells have specific hover states, display both that cell’s hover state as well as the row hover state.</p>

                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/component_data_tables/components-datatables-interaction1.png"></figure>
                <p class="text-secondary">Hovering over a row.</p>

                <div class="space"></div>
                <div class="mdc-divider"></div>
                <div class="space"></div>

                <h4>Column hover (Desktop)</h4>
                <p class="text-secondary">On hover, two things can be displayed:</p>
                <ul class="text-secondary">
                    <li>A tooltip displaying more information about each column header</li>
                    <li>A sort icon in the column header, if sorting is enabled</li>
                </ul>

                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/component_data_tables/components-datatables-interaction4.png"></figure>
                <p class="text-secondary">A tooltip and sort icon can be displayed when hovering over a column name.</p>

                <div class="space"></div>
                <div class="mdc-divider"></div>
                <div class="space"></div>

                <h4>Inline text editing</h4>
                <p class="text-secondary">Tables can include editable fields for text editing or adding comments. They are indicated by placeholder text in the field. On tap, an edit dialog with a text field or a full dialog is displayed.</p>

                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/component_data_tables/components-datatables-interaction7.png"></figure>
                <p class="text-secondary">An editable table cell with placeholder text.</p>

                <div class="space"></div>
                <div class="space"></div>

                <h6>Small edit dialog</h6>
                <p class="text-secondary">Text can be edited using a small edit dialog, allowing users to confirm text by pressing Enter. Dialog edges should align with nearest divider line or table edge.</p>

                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/component_data_tables/components-datatables-interaction8.png"></figure>
                <div class="space"></div>

                <h6>Large edit dialog</h6>
                <p class="text-secondary">A large edit dialog is a complex, flexible dialog box. Users confirm text by tapping the Save button. Dialog edges should align with the nearest divider line or table edge.</p>

                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/component_data_tables/components-datatables-interaction9.png"></figure>
                <div class="space"></div>

                <h6>Inline edit icon (Optional)</h6>
                <p class="text-secondary">An inline edit icon allows field editing, with an icon at the opposite end of the cell from content.</p>

                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/component_data_tables/components-datatables-interaction10.png"></figure>

                <div class="space"></div>
                <div class="mdc-divider"></div>
                <div class="space"></div>

                <h4>Inline menus</h4>
                <p class="text-secondary">Inline menus allow users to select from a predefined list of options. These menus can be directly embedded in a table.</p>
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
                    <li><a href="<?= $prefix ?>components/buttons.php">Buttons</a></li>
                </ul>
                <div class="space"></div>
            </div>
        </div>

        <div class="row">
            <div class="col xlarge-3 large-4 medium-6">
            </div>
            <div class="col xlarge-5 large-6 medium-10">
<pre class="bg-app-bar html"><?= htmlspecialchars(
<<<TEXT
TEXT
) ?></pre>
            </div>
        </div>
    </section>
</div>

</body>
</html>