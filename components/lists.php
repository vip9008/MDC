<?php
$language = "en-US";
$direction = "ltr";

$css_files = [
];
$js_files = [
];

$head_title = "MDC v2";

$topAppBarColor = "bg-blue-grey-900";
$topAppBarTitle = "Components - Lists";

$primaryColor = "indigo";
$accentColor = "blue";

$prefix = "../";
$url = $prefix."components/lists.php";
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
                <h1 class="article_title">Lists</h1>
                <h5 class="text-secondary">Lists are continuous, vertical indexes of text or images.</h5>
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/component_lists/lists-intro.png"></figure>
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
                <p class="text-secondary">Lists are a continuous group of text or images. They are composed of items containing primary and supplemental actions, which are represented by icons and text.</p>
            </div>
        </div>
    </section>
    <section>
        <div class="row">
            <div class="col xlarge-6 large-9 medium-12">
                <h4>Principles</h4>
            </div>
        </div>
        <div class="row">
            <div class="col xlarge-2 large-3 medium-4 small-4">
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/component_lists/lists-illos-logical.png"></figure>
                <h6>Logical</h6>
                <p class="text-secondary">Lists should be sorted in logical ways that make content easy to scan, such as alphabetical, numerical, chronological, or by user preference.</p>
            </div>
            <div class="col xlarge-2 large-3 medium-4 small-4">
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/component_lists/lists-illos-content.png"></figure>
                <h6>Actionable</h6>
                <p class="text-secondary">Lists present content in a way that makes it easy to identify a specific item in a collection and act on it.</p>
            </div>
            <div class="clearfix visible-smallext visible-small"></div>
            <div class="col xlarge-2 large-3 medium-4 small-4">
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/component_lists/lists-illos-consistency.png"></figure>
                <h6>Consistent</h6>
                <p class="text-secondary">Lists should present icons, text, and actions in a consistent format.</p>
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
                <h4>Types</h4>
            </div>
        </div>
        <div class="row">
            <div class="col xlarge-6 large-9 medium-12">
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/component_lists/usage-types.png"></figure>
                <h6>1. Single-line list</h6>
                <p class="text-secondary">Single-line list items contain a maximum of one line of text.</p>
                <h6>2. Two-line list</h6>
                <p class="text-secondary">Two-line list items contain a maximum of two lines of text.</p>
                <h6>3. Three-line list</h6>
                <p class="text-secondary">Three-line list items contains a maximum of three lines of text.</p>
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
                <p class="text-secondary">Lists are optimized for reading comprehension. A list consists of a single continuous column of subdivisions called rows that contain items of content.</p>
            </div>
        </div>
        <div class="row">
            <div class="col xlarge-6 large-9 medium-12">
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/component_lists/lists-elements.png"></figure>
                <h6>1. List</h6>
                <h6>2. Row</h6>
                <h6>3. List item content</h6>
            </div>
        </div>
    </section>
    <section>
        <div class="row">
            <div class="col xlarge-6 large-9 medium-12">
                <h4>Content types</h4>
                <p class="text-secondary">Content types can take different forms, depending on the needs of a list.</p>
            </div>
        </div>
        <div class="row">
            <div class="col xlarge-6 large-9 medium-12">
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/component_lists/list-elements.png"></figure>
                <h6>List items are comprised of three different content types:</h6>
                <h6>1. Supporting visuals</h6>
                <h6>2. Primary text</h6>
                <h6>3. Metadata</h6>
            </div>
        </div>
    </section>
    <section>
        <div class="row">
            <div class="col xlarge-6 large-9 medium-12">
                <p class="text-secondary">A list control can display information and actions for list items.</p>
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/component_lists/list-elements-2.png"></figure>
                <h6>Lists with controls contain three content types:</h6>
                <h6>1. Supporting visuals</h6>
                <h6>2. Primary text</h6>
                <h6>3. List control</h6>
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
                <h4>Visuals, dividers, and spacing</h4>
                <p class="text-secondary">List structure can be organized using visuals, dividers, and spacing.</p>
            </div>
        </div>
        <div class="row">
            <div class="col xlarge-3 large-4 medium-6 small-4">
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/component_lists/two-line-example-2.png"></figure>
                <p class="text-secondary">Improve scannability by anchoring supporting visuals, such as thumbnails, along the row's edge.</p>
            </div>
            <div class="col xlarge-3 large-4 medium-6 small-4">
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/component_lists/threeline-sample-2.png"></figure>
                <p class="text-secondary">Place a divider between rows with lots of content, such as those with three-line lists.</p>
            </div>
        </div>
    </section>
    <section>
        <div class="row">
            <div class="col xlarge-3 large-4 medium-6 small-4">
                <figure class="img_figure clearfix">
                    <img src="<?= $prefix ?>img/component_lists/content-action.png">
                </figure>
                <p class="text-secondary">The primary action takes up the majority of space.</p>
                <ol>
                    <li class="text-secondary">Primary Action area</li>
                    <li class="text-secondary">Secondary Action area</li>
                </ol>
            </div>
            <div class="col xlarge-3 large-4 medium-6 small-4">
                <figure class="img_figure clearfix">
                    <img src="<?= $prefix ?>img/component_lists/content-hierarchy.png">
                </figure>
                <p class="text-secondary">Clear hierarchy is created by aligning the most distinguishing content on the left, with the least distinguishing on the right.</p>
                <ol>
                    <li class="text-secondary">More distinguishing content</li>
                    <li class="text-secondary">Less distinguishing content</li>
                </ol>
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
                <h4>Subheaders</h4>
                <p class="text-secondary">Subheaders delineate sections of a list. They appear on list rows.</p>
            </div>
        </div>
        <div class="row">
            <div class="col xlarge-6 large-9 medium-12">
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/component_lists/subheader-lists.png"></figure>
                <h6>1. Subheader</h6>
                <p class="text-secondary">A subheader should be left-aligned with an avatar or icon in a list.</p>
                <h6>2. Subheader inset</h6>
                <p class="text-secondary">If a floating action button is aligned with list avatars or icons, the subheader should be aligned with the text content.</p>
            </div>
        </div>
    </section>
</div>
<div class="mdc-divider"></div>
<div class="container">
    <section>
        <div class="row">
            <div class="col xlarge-6 large-9 medium-12">
                <h1 class="article_title">Types</h1>
                <div class="space"></div>
                <h4>Single-line list</h4>
            </div>
        </div>
        <div class="row">
            <div class="col xlarge-3 large-4 medium-6 small-4">
                <figure class="img_figure clearfix""><img src="<?= $prefix ?>img/component_lists/single-line-example-1.png"></figure>
                <p class="text-secondary">A text list</p>
            </div>
            <div class="col xlarge-3 large-4 medium-6 small-4">
                <figure class="img_figure clearfix""><img src="<?= $prefix ?>img/component_lists/single-line-example-2.png"></figure>
                <p class="text-secondary">A single-line list with icons and text</p>
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
                <h4>Two-line list</h4>
                <p class="text-secondary">In a two-line list, each row contains two lines of text maximum.</p>
            </div>
        </div>
        <div class="row">
            <div class="col xlarge-3 large-4 medium-6 small-4">
                <figure class="img_figure clearfix""><img src="<?= $prefix ?>img/component_lists/two-line-example-1.png"></figure>
                <p class="text-secondary">A text list</p>
            </div>
            <div class="col xlarge-3 large-4 medium-6 small-4">
                <figure class="img_figure clearfix""><img src="<?= $prefix ?>img/component_lists/two-line-example-2.png"></figure>
                <p class="text-secondary">A single-line list with icons and text</p>
            </div>
        </div>
        <div class="row">
            <div class="col xlarge-6 large-9 medium-12">
                <figure class="img_figure clearfix""><img src="<?= $prefix ?>img/component_lists/two-line-mix.png"></figure>
                <p class="text-secondary">The amount of text can vary between different rows within the same list</p>
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
                <h4>Three-line list</h4>
            </div>
        </div>
        <div class="row">
            <div class="col xlarge-3 large-4 medium-6 small-4">
                <figure class="img_figure clearfix""><img src="<?= $prefix ?>img/component_lists/threeline-sample-1.png"></figure>
                <p class="text-secondary">A three-line text with an avatar</p>
            </div>
            <div class="col xlarge-3 large-4 medium-6 small-4">
                <figure class="img_figure clearfix""><img src="<?= $prefix ?>img/component_lists/threeline-sample-2.png"></figure>
                <p class="text-secondary">A three-line text list, with a thumbnail and meta text</p>
            </div>
        </div>
        <div class="row">
            <div class="col xlarge-6 large-9 medium-12">
                <figure class="img_figure clearfix""><img src="<?= $prefix ?>img/component_lists/three-line-mix.png"></figure>
                <p class="text-secondary">The amount of text can vary between rows within the same list</p>
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
                <h4>List controls</h4>
                <p class="text-secondary">List controls display information and actions for list items.</p>
                <div class="space"></div>

                <h6>Checkbox</h6>
                <p class="text-secondary">A checkbox can either be a primary or secondary action.</p>
                <figure class="img_figure clearfix""><img src="<?= $prefix ?>img/component_lists/lists-controls-checkbox.png"></figure>
                <p class="text-secondary">1. Secondary action<br>This checkbox is the list item’s secondary action.</p>
                <p class="text-secondary">2. Primary action<br>This checkbox is both the list item’s primary action and state indicator.</p>
                <br>
                <br>
            </div>
        </div>
        <div class="row">
            <div class="col xlarge-6 large-9 medium-12">
                <h6>Expand and collapse</h6>
                <p class="text-secondary">Show and hide details of existing list items by expanding and collapsing list content vertically.</p>
            </div>
        </div>
        <div class="row">
            <div class="col xlarge-3 large-4 medium-6 small-4">
                <figure class="img_figure clearfix""><img src="<?= $prefix ?>img/component_lists/lists-controls-expandable-close.png"></figure>
                <p class="text-secondary">Tapping the list control expands the list</p>
                <br>
                <br>
            </div>
            <div class="col xlarge-3 large-4 medium-6 small-4">
                <figure class="img_figure clearfix""><img src="<?= $prefix ?>img/component_lists/lists-controls-expandable-open.png"></figure>
                <p class="text-secondary">An expanded list</p>
                <br>
                <br>
            </div>
        </div>
        <div class="row">
            <div class="col xlarge-3 large-4 medium-6 small-4">
                <h6>Switch</h6>
                <figure class="img_figure clearfix""><img src="<?= $prefix ?>img/component_lists/lists-controls-switch.png"></figure>
                <p class="text-secondary">Tapping the list control expands the list</p>
            </div>
            <div class="col xlarge-3 large-4 medium-6 small-4">
                <h6>Reorder</h6>
                <figure class="img_figure clearfix""><img src="<?= $prefix ?>img/component_lists/lists-controls-reorder.png"></figure>
                <p class="text-secondary">Usually appearing in edit mode, dragging lists items moves them to other locations within the list. This reorder icon is the list item’s secondary action</p>
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
                <h4>Single-line list</h4>
            </div>
        </div>
        <div class="row">
            <div class="col xlarge-3 large-4 medium-6">
                <div class="mdc-list-group bg-cards example">
                    <div class="mdc-list-item">
                        <div class="text">Dining</div>
                    </div>
                    <div class="mdc-list-item">
                        <div class="text">Education</div>
                    </div>
                    <div class="mdc-list-item">
                        <div class="text">Health</div>
                    </div>
                </div>
            </div>
            <div class="col xlarge-5 large-6 medium-10">
<pre class="bg-app-bar html"><?= htmlspecialchars(
<<<TEXT
<div class="mdc-list-container">
    <div class="mdc-list-group">
        <div class="mdc-list-item">
            <div class="text">Dining</div>
        </div>
        .
        .
    </div>
    .
    .
    .
</div>
TEXT
) ?></pre>
            </div>
        </div>

        <div class="row">
            <div class="col xlarge-3 large-4 medium-6">
                <div class="mdc-list-group bg-cards example">
                    <div class="mdc-list-item">
                        <div class="text">Dining</div>
                        <div class="meta icon material-icon">star</div>
                    </div>
                    <div class="mdc-list-item">
                        <div class="text">Education</div>
                        <div class="meta icon material-icon">star</div>
                    </div>
                    <div class="mdc-list-item">
                        <div class="text">Health</div>
                        <div class="meta icon material-icon">star</div>
                    </div>
                </div>
            </div>
            <div class="col xlarge-5 large-6 medium-10">
<pre class="bg-app-bar html"><?= htmlspecialchars(
<<<TEXT
<div class="mdc-list-container">
    <div class="mdc-list-group">
        <div class="mdc-list-item">
            <div class="text">Dining</div>
            <div class="meta icon material-icon">star</div>
        </div>
        .
        .
    </div>
    .
    .
    .
</div>
TEXT
) ?></pre>
            </div>
        </div>
        
        <div class="row">
            <div class="col xlarge-3 large-4 medium-6">
                <div class="mdc-list-group bg-cards example">
                    <div class="mdc-list-item">
                        <div class="icon material-icon text-secondary">restaurant_menu</div>
                        <div class="text">Dining</div>
                    </div>
                    <div class="mdc-list-item">
                        <div class="icon material-icon text-secondary">edit</div>
                        <div class="text">Education</div>
                    </div>
                    <div class="mdc-list-item">
                        <div class="icon material-icon text-secondary">favorite</div>
                        <div class="text">Health</div>
                    </div>
                </div>
            </div>
            <div class="col xlarge-5 large-6 medium-10">
<pre class="bg-app-bar html"><?= htmlspecialchars(
<<<TEXT
<div class="mdc-list-container">
    <div class="mdc-list-group">
        <div class="mdc-list-item">
            <div class="icon material-icon">restaurant_menu</div>
            <div class="text">Dining</div>
        </div>
        .
        .
    </div>
    .
    .
    .
</div>
TEXT
) ?></pre>
            </div>
        </div>
        
        <div class="row">
            <div class="col xlarge-3 large-4 medium-6">
                <div class="mdc-list-group bg-cards example">
                    <div class="mdc-list-item">
                        <div class="graphic material-icon bg-grey-600">folder</div>
                        <div class="text">Photos</div>
                        <div class="meta icon material-icon">info</div>
                    </div>
                    <div class="mdc-list-item">
                        <div class="graphic material-icon bg-grey-600">folder</div>
                        <div class="text">Recipes</div>
                        <div class="meta icon material-icon">info</div>
                    </div>
                    <div class="mdc-list-item">
                        <div class="graphic material-icon bg-grey-600">folder</div>
                        <div class="text">Work</div>
                        <div class="meta icon material-icon">info</div>
                    </div>
                </div>
            </div>
            <div class="col xlarge-5 large-6 medium-10">
<pre class="bg-app-bar html"><?= htmlspecialchars(
<<<TEXT
<div class="mdc-list-container">
    <div class="mdc-list-group">
        <div class="mdc-list-item">
            <div class="graphic material-icon">folder</div>
            <div class="text">Photos</div>
            <div class="meta icon material-icon">info</div>
        </div>
        .
        .
    </div>
    .
    .
    .
</div>
TEXT
) ?></pre>
            </div>
        </div>
        
        <div class="row">
            <div class="col xlarge-3 large-4 medium-6">
                <div class="mdc-list-group bg-cards example">
                    <div class="mdc-list-item">
                        <div class="graphic md-56" style="background-image: url('<?= $prefix ?>img/component_lists/avatar-1.png');"></div>
                        <div class="text">Pencil</div>
                        <div class="meta">in stock</div>
                    </div>
                    <div class="mdc-list-item">
                        <div class="graphic md-56" style="background-image: url('<?= $prefix ?>img/component_lists/avatar-2.png');"></div>
                        <div class="text">Rubberbands</div>
                        <div class="meta">in stock</div>
                    </div>
                    <div class="mdc-list-item">
                        <div class="graphic md-56" style="background-image: url('<?= $prefix ?>img/component_lists/avatar-3.png');"></div>
                        <div class="text">Rulers</div>
                        <div class="meta">only 1 in stock</div>
                    </div>
                </div>
            </div>
            <div class="col xlarge-5 large-6 medium-10">
<pre class="bg-app-bar html"><?= htmlspecialchars(
<<<TEXT
<div class="mdc-list-container">
    <div class="mdc-list-group">
        <div class="mdc-list-item">
            <div class="graphic md-56" style="background-image: url('...');"></div>
            <div class="text">Pencil</div>
            <div class="meta">in stock</div>
        </div>
        .
        .
    </div>
    .
    .
    .
</div>
TEXT
) ?></pre>
            </div>
        </div>
        
        <div class="row">
            <div class="col xlarge-3 large-4 medium-6">
                <div class="mdc-list-group bg-cards example">
                    <div class="mdc-list-item">
                        <div class="graphic md-100" style="background-image: url('<?= $prefix ?>img/component_lists/thumb-1.png');"></div>
                        <div class="text">Crunchy Croissants</div>
                        <div class="meta">01</div>
                    </div>
                    <div class="mdc-list-item">
                        <div class="graphic md-100" style="background-image: url('<?= $prefix ?>img/component_lists/thumb-2.png');"></div>
                        <div class="text">Grilled Eggplant</div>
                        <div class="meta">02</div>
                    </div>
                    <div class="mdc-list-item">
                        <div class="graphic md-100" style="background-image: url('<?= $prefix ?>img/component_lists/thumb-3.png');"></div>
                        <div class="text">Tngerine Salad</div>
                        <div class="meta">03</div>
                    </div>
                </div>
            </div>
            <div class="col xlarge-5 large-6 medium-10">
<pre class="bg-app-bar html"><?= htmlspecialchars(
<<<TEXT
<div class="mdc-list-container">
    <div class="mdc-list-group">
        <div class="mdc-list-item">
            <div class="graphic md-100" style="background-image: url('...');"></div>
            <div class="text">Crunchy Croissants</div>
            <div class="meta">01</div>
        </div>
        .
        .
    </div>
    .
    .
    .
</div>
TEXT
) ?></pre>
            </div>
        </div>
        
        <div class="row">
            <div class="col xlarge-3 large-4 medium-6">
                <div class="mdc-list-container bg-cards example">
                    <div class="mdc-list-group">
                        <div class="mdc-list-subtitle">Label 1</div>
                        <div class="mdc-list-item">
                            <div class="graphic material-icon bg-grey-600">folder</div>
                            <div class="text">Photos</div>
                            <div class="meta icon material-icon">info</div>
                        </div>
                        <div class="mdc-list-item">
                            <div class="graphic material-icon bg-grey-600">folder</div>
                            <div class="text">Recipes</div>
                            <div class="meta icon material-icon">info</div>
                        </div>
                    </div>
                    <div class="mdc-divider"></div>
                    <div class="mdc-list-group">
                        <div class="mdc-list-subtitle">Label 1</div>
                        <div class="mdc-list-item">
                            <div class="graphic material-icon bg-grey-600">folder</div>
                            <div class="text">Work</div>
                            <div class="meta icon material-icon">info</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col xlarge-5 large-6 medium-10">
<pre class="bg-app-bar html"><?= htmlspecialchars(
<<<TEXT
<div class="mdc-list-container">
    <div class="mdc-list-group">
        <div class="mdc-list-subtitle">Label 1</div>
        <div class="mdc-list-item">
            <div class="graphic material-icon">folder</div>
            <div class="text">Photos</div>
            <div class="meta icon material-icon">info</div>
        </div>
        .
        .
    </div>
    <div class="mdc-divider"></div>
    .
    .
    .
</div>
TEXT
) ?></pre>
            </div>
        </div>
        
        <div class="row">
            <div class="col xlarge-3 large-4 medium-6">
                <div class="mdc-list-group bg-cards example">
                    <div class="mdc-list-group collapsed">
                        <div class="mdc-list-item interactive deep-purple-A700">
                            <div class="icon material-icon text-secondary">restaurant_menu</div>
                            <div class="text">Dining</div>
                            <div class="meta icon">
                                <div class="material-icon">keyboard_arrow_down</div>
                            </div>
                        </div>
                        <div class="mdc-dropdown">
                            <div class="mdc-list-item">
                                <div class="icon"></div>
                                <div class="text">Breakfast & brunch</div>
                            </div>
                            <div class="mdc-list-item">
                                <div class="icon"></div>
                                <div class="text">New American</div>
                            </div>
                            <div class="mdc-list-item">
                                <div class="icon"></div>
                                <div class="text">Sushi bars</div>
                            </div>
                            <div class="mdc-list-item">
                                <div class="icon"></div>
                                <div class="text">Filipino food</div>
                            </div>
                        </div>
                    </div>
                    <div class="mdc-list-group collapsed">
                        <div class="mdc-list-item interactive deep-purple-A700">
                            <div class="icon material-icon text-secondary">edit</div>
                            <div class="text">Education</div>
                            <div class="meta icon">
                                <div class="material-icon">keyboard_arrow_down</div>
                            </div>
                        </div>
                        <div class="mdc-dropdown">
                            <div class="mdc-list-item">
                                <div class="icon"></div>
                                <div class="text">Courses</div>
                            </div>
                            <div class="mdc-list-item">
                                <div class="icon"></div>
                                <div class="text">Tutorials</div>
                            </div>
                            <div class="mdc-list-item">
                                <div class="icon"></div>
                                <div class="text">Test marks</div>
                            </div>
                        </div>
                    </div>
                    <div class="mdc-list-group collapsed">
                        <div class="mdc-list-item interactive deep-purple-A700">
                            <div class="icon material-icon text-secondary">favorite</div>
                            <div class="text">Health</div>
                            <div class="meta icon">
                                <div class="material-icon">keyboard_arrow_down</div>
                            </div>
                        </div>
                        <div class="mdc-dropdown">
                            <div class="mdc-list-item">
                                <div class="icon"></div>
                                <div class="text">Calories</div>
                            </div>
                            <div class="mdc-list-item">
                                <div class="icon"></div>
                                <div class="text">Healthy food</div>
                            </div>
                            <div class="mdc-list-item">
                                <div class="icon"></div>
                                <div class="text">Work out</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col xlarge-5 large-6 medium-10">
<pre class="bg-app-bar html"><?= htmlspecialchars(
<<<TEXT
<div class="mdc-list-container">
    <div class="mdc-list-group">
        <div class="mdc-list-group collapsed">
            <div class="mdc-list-item interactive">
                <div class="icon material-icon text-secondary">restaurant_menu</div>
                <div class="text">Dining</div>
                <div class="meta icon">
                    <div class="material-icon">keyboard_arrow_down</div>
                </div>
            </div>
            <div class="mdc-dropdown">
                <div class="mdc-list-item">
                    <div class="icon"></div>
                    <div class="text">Breakfast & brunch</div>
                </div>
                .
                .
            </div>
        </div>
        .
        .
    </div>
    .
    .
    .
</div>
TEXT
) ?></pre>
            </div>
        </div>
    </section>
    <div class="row">
        <div class="col xlarge-8 medium-10">
            <div class="mdc-divider"></div>
        </div>
    </div>
    <section>
        <div class="row">
            <div class="col xlarge-6 large-9 medium-12">
                <h4>Two-line list</h4>
            </div>
        </div>
        <div class="row">
            <div class="col xlarge-3 large-4 medium-6">
                <div class="mdc-list-group bg-cards example">
                    <div class="mdc-list-item interactive">
                        <div class="text">
                            Search engine
                            <div class="secondary">Google</div>
                        </div>
                    </div>
                    <div class="mdc-list-item interactive">
                        <div class="text">
                            When device is locked
                            <div class="secondary">Show all notification content</div>
                        </div>
                    </div>
                    <div class="mdc-list-item interactive">
                        <div class="text">
                            Start time
                            <div class="secondary">10:00 AM</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col xlarge-5 large-6 medium-10">
<pre class="bg-app-bar html"><?= htmlspecialchars(
<<<TEXT
<div class="mdc-list-container">
    <div class="mdc-list-group">
        <div class="mdc-list-item interactive">
            <div class="text">
                Search engine
                <div class="secondary">Google</div>
            </div>
        </div>
        .
        .
    </div>
    .
    .
    .
</div>
TEXT
) ?></pre>
            </div>
        </div>

        <div class="row">
            <div class="col xlarge-3 large-4 medium-6">
                <div class="mdc-list-group bg-cards example">
                    <div class="mdc-list-item">
                        <div class="text">
                            <div class="overline">April 14</div>
                            Family camp
                        </div>
                    </div>
                    <div class="mdc-list-item">
                        <div class="text">
                            <div class="overline">March 3</div>
                            Dentist appointment
                        </div>
                    </div>
                    <div class="mdc-list-item">
                        <div class="text">
                            <div class="overline">January 10</div>
                            Annual meeting
                        </div>
                    </div>
                </div>
            </div>
            <div class="col xlarge-5 large-6 medium-10">
<pre class="bg-app-bar html"><?= htmlspecialchars(
<<<TEXT
<div class="mdc-list-container">
    <div class="mdc-list-group">
        <div class="mdc-list-item">
            <div class="text">
                <div class="overline">April 14</div>
                Family camp
            </div>
        </div>
        .
        .
    </div>
    .
    .
    .
</div>
TEXT
) ?></pre>
            </div>
        </div>
        
        <div class="row">
            <div class="col xlarge-3 large-4 medium-6">
                <div class="mdc-list-group bg-cards example">
                    <div class="mdc-list-item">
                        <div class="text">
                            Pencil
                            <div class="secondary">in stock</div>
                        </div>
                        <div class="meta">$1.5</div>
                    </div>
                    <div class="mdc-list-item">
                        <div class="text">
                            Rubberbands
                            <div class="secondary">in stock</div>
                        </div>
                        <div class="meta">$4.5</div>
                    </div>
                    <div class="mdc-list-item">
                        <div class="text">
                            Rulers
                            <div class="secondary">only 1 in stock</div>
                        </div>
                        <div class="meta">$8.0</div>
                    </div>
                </div>
            </div>
            <div class="col xlarge-5 large-6 medium-10">
<pre class="bg-app-bar html"><?= htmlspecialchars(
<<<TEXT
<div class="mdc-list-container">
    <div class="mdc-list-group">
        <div class="mdc-list-item">
            <div class="text">
                Pencil
                <div class="secondary">in stock</div>
            </div>
            <div class="meta">$1.5</div>
        </div>
        .
        .
    </div>
    .
    .
    .
</div>
TEXT
) ?></pre>
            </div>
        </div>
        
        <div class="row">
            <div class="col xlarge-3 large-4 medium-6">
                <div class="mdc-list-group bg-cards example">
                    <div class="mdc-list-item">
                        <div class="icon material-icon deep-purple-A700">wifi</div>
                        <div class="text">
                            Wi-Fi
                            <div class="secondary">Main Office</div>
                        </div>
                    </div>
                    <div class="mdc-list-item">
                        <div class="icon material-icon text-secondary">bluetooth</div>
                        <div class="text">
                            Bluetooth
                            <div class="secondary">Off</div>
                        </div>
                    </div>
                    <div class="mdc-list-item">
                        <div class="icon material-icon deep-purple-A700">location_searching</div>
                        <div class="text">
                            Location services
                            <div class="secondary">On</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col xlarge-5 large-6 medium-10">
<pre class="bg-app-bar html"><?= htmlspecialchars(
<<<TEXT
<div class="mdc-list-container">
    <div class="mdc-list-group">
        <div class="mdc-list-item">
            <div class="icon material-icon">wifi</div>
            <div class="text">
                Wi-Fi
                <div class="secondary">Main Office</div>
            </div>
        </div>
        .
        .
    </div>
    .
    .
    .
</div>
TEXT
) ?></pre>
            </div>
        </div>
        
        <div class="row">
            <div class="col xlarge-3 large-4 medium-6">
                <div class="mdc-list-group bg-cards example">
                    <div class="mdc-list-item">
                        <div class="graphic material-icon bg-grey-600">folder</div>
                        <div class="text">
                            Photos
                            <div class="secondary">Jan 9, 2018</div>
                        </div>
                        <div class="meta icon">
                            <button class="material-icon grey">info</button>
                        </div>
                    </div>
                    <div class="mdc-list-item">
                        <div class="graphic material-icon bg-grey-600">folder</div>
                        <div class="text">
                            Recipes
                            <div class="secondary">Jan 17, 2018</div>
                        </div>
                        <div class="meta icon">
                            <button class="material-icon grey">info</button>
                        </div>
                    </div>
                    <div class="mdc-list-item">
                        <div class="graphic material-icon bg-grey-600">folder</div>
                        <div class="text">
                            Work
                            <div class="secondary">Jan 28, 2018</div>
                        </div>
                        <div class="meta icon">
                            <button class="material-icon grey">info</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col xlarge-5 large-6 medium-10">
<pre class="bg-app-bar html"><?= htmlspecialchars(
<<<TEXT
<div class="mdc-list-container">
    <div class="mdc-list-group">
        <div class="mdc-list-item">
            <div class="graphic material-icon">folder</div>
            <div class="text">
                Photos
                <div class="secondary">Jan 9, 2018</div>
            </div>
            <div class="meta icon">
                <button class="material-icon">info</button>
            </div>
        </div>
        .
        .
    </div>
    .
    .
    .
</div>
TEXT
) ?></pre>
            </div>
        </div>

        <div class="row">
            <div class="col xlarge-3 large-4 medium-6">
                <div class="mdc-list-group bg-cards example">
                    <div class="mdc-list-item interactive">
                        <div class="graphic md-56" style="background-image: url('<?= $prefix ?>img/component_lists/avatar-1.png');"></div>
                        <div class="text">
                            Pencil
                            <div class="secondary">in stock</div>
                        </div>
                        <div class="meta">$1.5</div>
                    </div>
                    <div class="mdc-list-item interactive">
                        <div class="graphic md-56" style="background-image: url('<?= $prefix ?>img/component_lists/avatar-2.png');"></div>
                        <div class="text">
                            Rubberbands
                            <div class="secondary">in stock</div>
                        </div>
                        <div class="meta">$4.5</div>
                    </div>
                    <div class="mdc-list-item interactive">
                        <div class="graphic md-56" style="background-image: url('<?= $prefix ?>img/component_lists/avatar-3.png');"></div>
                        <div class="text">
                            Rulers
                            <div class="secondary">only 1 in stock</div>
                        </div>
                        <div class="meta">$8.0</div>
                    </div>
                </div>
            </div>
            <div class="col xlarge-5 large-6 medium-10">
<pre class="bg-app-bar html"><?= htmlspecialchars(
<<<TEXT
<div class="mdc-list-container">
    <div class="mdc-list-group">
        <div class="mdc-list-item">
            <div class="graphic md-56" style="background-image: url('...');"></div>
            <div class="text">
                Pencil
                <div class="secondary">in stock</div>
            </div>
            <div class="meta">$1.5</div>
        </div>
        .
        .
    </div>
    .
    .
    .
</div>
TEXT
) ?></pre>
            </div>
        </div>

        <div class="row">
            <div class="col xlarge-3 large-4 medium-6">
                <div class="mdc-list-group bg-cards example">
                    <div class="mdc-list-item">
                        <div class="graphic md-100" style="background-image: url('<?= $prefix ?>img/component_lists/thumb-1.png');"></div>
                        <div class="text">
                            Crunchy Croissants
                            <div class="secondary">Breakfast delight</div>
                        </div>
                        <div class="meta">01</div>
                    </div>
                    <div class="mdc-list-item">
                        <div class="graphic md-100" style="background-image: url('<?= $prefix ?>img/component_lists/thumb-2.png');"></div>
                        <div class="text">
                            Grilled Eggplant
                            <div class="secondary">Healthy & tasty</div>
                        </div>
                        <div class="meta">02</div>
                    </div>
                    <div class="mdc-list-item">
                        <div class="graphic md-100" style="background-image: url('<?= $prefix ?>img/component_lists/thumb-3.png');"></div>
                        <div class="text">
                            Tngerine Salad
                            <div class="secondary">Nutrition & diet</div>
                        </div>
                        <div class="meta">03</div>
                    </div>
                </div>
            </div>
            <div class="col xlarge-5 large-6 medium-10">
<pre class="bg-app-bar html"><?= htmlspecialchars(
<<<TEXT
<div class="mdc-list-container">
    <div class="mdc-list-group">
        <div class="mdc-list-item">
            <div class="graphic md-100" style="background-image: url('...');"></div>
            <div class="text">
                Crunchy Croissants
                <div class="secondary">Breakfast delight</div>
            </div>
            <div class="meta">01</div>
        </div>
        .
        .
    </div>
    .
    .
    .
</div>
TEXT
) ?></pre>
            </div>
        </div>
    </section>
    <div class="row">
        <div class="col xlarge-8 medium-10">
            <div class="mdc-divider"></div>
        </div>
    </div>
    <section>
        <div class="row">
            <div class="col xlarge-6 large-9 medium-12">
                <h4>Three-line list</h4>
            </div>
        </div>
        
        <div class="row">
            <div class="col xlarge-3 large-4 medium-6">
                <div class="mdc-list-group md-3line bg-cards example">
                    <div class="mdc-list-item interactive">
                        <div class="graphic material-icon bg-deep-purple-A700">person</div>
                        <div class="text">
                            Summer BBQ
                            <div class="secondary">
                                <span class="text-primary">Ali Connors</span>
                                - I'll be in your neighborhood doing errands this weekend. Do you want ...
                            </div>
                        </div>
                        <div class="meta">15 mins</div>
                    </div>
                    <div class="mdc-list-item interactive">
                        <div class="graphic material-icon bg-deep-purple-A700">person</div>
                        <div class="text">
                            Birthday Gift
                            <div class="secondary">
                                <span class="text-primary">Trevor Hansen</span>
                                - Have any ideas about what we should get Heidi for her birthday?
                            </div>
                        </div>
                        <div class="meta">45 mins</div>
                    </div>
                    <div class="mdc-list-item interactive">
                        <div class="graphic material-icon bg-deep-purple-A700">person</div>
                        <div class="text">
                            Recipe to try
                            <div class="secondary">
                                <span class="text-primary">Britta Holt</span>
                                - We should eat this: Grated Squash, Corn and tomatillo Tacos.
                            </div>
                        </div>
                        <div class="meta">3 hrs</div>
                    </div>
                </div>
            </div>
            <div class="col xlarge-5 large-6 medium-10">
<pre class="bg-app-bar html"><?= htmlspecialchars(
<<<TEXT
<div class="mdc-list-container">
    <div class="mdc-list-group md-3line">
        <div class="mdc-list-item interactive">
            <div class="graphic material-icon">person</div>
            <div class="text">
                Summer BBQ
                <div class="secondary">
                    <span class="text-primary">Ali Connors</span>
                    - I'll be in your neighborhood doing errands this weekend. Do you want ...
                </div>
            </div>
            <div class="meta">15 mins</div>
        </div>
        .
        .
    </div>
    .
    .
    .
</div>
TEXT
) ?></pre>
            </div>
        </div>

        <div class="row">
            <div class="col xlarge-3 large-4 medium-6">
                <div class="mdc-list-group md-3line bg-cards example">
                    <div class="mdc-list-item interactive">
                        <div class="graphic md-100" style="background-image: url('<?= $prefix ?>img/component_lists/thumb-1.png');"></div>
                        <div class="text">
                            Crunchy Croissants
                            <div class="secondary">Buttery, flaky pastry named for its crecent shape.</div>
                        </div>
                        <div class="meta">01</div>
                    </div>
                    <div class="mdc-list-item interactive">
                        <div class="graphic md-100" style="background-image: url('<?= $prefix ?>img/component_lists/thumb-2.png');"></div>
                        <div class="text">
                            Grilled Eggplant
                            <div class="secondary">Tender with a rich, complex flavor when cooked.</div>
                        </div>
                        <div class="meta">02</div>
                    </div>
                    <div class="mdc-list-item interactive">
                        <div class="graphic md-100" style="background-image: url('<?= $prefix ?>img/component_lists/thumb-3.png');"></div>
                        <div class="text">
                            Tngerine Salad
                            <div class="secondary">Peak tangerine season lasts from autumn to spring.</div>
                        </div>
                        <div class="meta">03</div>
                    </div>
                </div>
            </div>
            <div class="col xlarge-5 large-6 medium-10">
<pre class="bg-app-bar html"><?= htmlspecialchars(
<<<TEXT
<div class="mdc-list-container">
    <div class="mdc-list-group md-3line">
        <div class="mdc-list-item">
            <div class="graphic md-100" style="background-image: url('...');"></div>
            <div class="text">
                Crunchy Croissants
                <div class="secondary">Buttery, flaky pastry named for its crecent shape.</div>
            </div>
            <div class="meta">01</div>
        </div>
        .
        .
    </div>
    .
    .
    .
</div>
TEXT
) ?></pre>
            </div>
        </div>
    </section>
</div>

</body>
</html>