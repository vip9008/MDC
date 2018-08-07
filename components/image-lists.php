<?php
$language = "en-US";
$direction = "ltr";

$css_files = [
    'css/mdc.image.list.css',
];
$js_files = [
];

$head_title = "MDC v2";

$topAppBarColor = "bg-blue-grey-900";
$topAppBarTitle = "Components - Image lists";

$primaryColor = "indigo";
$accentColor = "blue";

$prefix = "../";
$url = $prefix."components/image-lists.php";
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
                <h1 class="article_title">Image lists</h1>
                <h5 class="text-secondary">Image lists display a collection of images in an organized grid.</h5>
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/component_image_lists/hero-gridlist.png"></figure>
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
                <p class="text-secondary">Image lists represent a collection of items in a repeated pattern. They help improve the visual comprehension of the content they hold.</p>
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
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/component_image_lists/gridlist-illos-01.png"></figure>
                <h6>Visual</h6>
                <p class="text-secondary">Image lists allow users to scan content based on images.</p>
            </div>
            <div class="col xlarge-2 large-3 medium-4 small-4">
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/component_image_lists/gridlist-illos-03.png"></figure>
                <h6>Comparable</h6>
                <p class="text-secondary">Image lists allow users to easily compare items within a collection.</p>
            </div>
            <div class="clearfix visible-smallext visible-small"></div>
            <div class="col xlarge-2 large-3 medium-4 small-4">
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/component_image_lists/gridlist-illos-04.png"></figure>
                <h6>Integrated</h6>
                <p class="text-secondary">Image lists are responsively integrated with the surrounding content and layout.</p>
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
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/component_image_lists/grid-diagram.png"></figure>
                <ol class="text-secondary">
                    <li><b class="text-primary">Standard image lists</b> are best for items of equal importance. They have a uniform container size, ratio, and padding.</li>
                    <li><b class="text-primary">Quilted image lists</b> emphasize certain items over others in a collection. They create hierarchy using varied container sizes and ratios.</li>
                    <li><b class="text-primary">Woven image lists</b> facilitate the browsing of peer content. They display content in containers of varying ratios to create a rhythmic layout.</li>
                    <li><b class="text-primary">Masonry image lists</b> facilitate the browsing of uncropped peer content. Container heights are sized based on the image size.</li>
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
                <h1 class="article_title">Anatomy</h1>
                <div class="space"></div>
                <p class="text-secondary">Image lists are comprised of containers that are set at a certain aspect ratio. Each item in an image list can display optional text and iconography below or above the image container.</p>
            </div>
        </div>
        <div class="row">
            <div class="col xlarge-3 large-4 medium-6 small-4">
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/component_image_lists/elements.png"></figure>
            </div>
            <div class="col xlarge-3 large-4 medium-6 small-4">
                <div class="space"></div>

                <h6>1. Image container</h6>
                <p class="text-secondary">The image container displays an image list item’s image or illustration.</p>

                <h6>2. Text labels (optional)</h6>
                <p class="text-secondary">Text labels display one line of text related to an image list item.</p>

                <h6>3. Actionable iconography (optional)</h6>
                <p class="text-secondary">Actionable iconography can represent related actions.</p>

                <h6>4. Text protection (optional)</h6>
                <p class="text-secondary">Text protection is a semi-opaque scrim placed in front of imagery to keep text above it legible.</p>

                <h6>5. Image list item</h6>
                <p class="text-secondary">Image list items represent individual items in an image list.</p>
            </div>
        </div>
        <div class="row">
            <div class="col xlarge-6 large-9 medium-12">
                <div class="space"></div>
                <div class="space"></div>

                <h4>Padding</h4>
                <p class="text-secondary">Padding can vary between images in an image list. The following padding values are recommended: 1, 2, 4, 8, 16, 20, 24, 32 dp.</p>
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

                <h4>Actions</h4>
                <p class="text-secondary">Image lists items may be tapped, dragged, filtered, or sorted.</p>
                <p class="text-secondary">Tapping an image list item displays more detail about that item.</p>
                <p class="text-secondary">Image list content can be filtered or sorted by date, file size, alphabetical order, or other parameters.</p>
                <p class="text-secondary">You can drag an image list item to reorder it, but this interaction should be disabled if images are sorted or filtered.</p>

                <div class="space"></div>
                <div class="mdc-divider"></div>
                <div class="space"></div>

                <h4>Layout grid</h4>
                <div class="space"></div>

                <h6>Defined layout</h6>
                <p class="text-secondary">Image list column structures don’t need to align to the layout grid. Only the perimeter of the image list itself needs to align to the layout grid.</p>

                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/component_image_lists/composition-01d.png"></figure>
                <p class="text-secondary">An image list spanning eight columns of the layout grid, with 16dp padding</p>

                <div class="space"></div>
                <div class="space"></div>

                <h6>Alignment with other components</h6>
                <p class="text-secondary">Image lists can be placed adjacent to other components in the layout grid.</p>

                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/component_image_lists/composition-02.png"></figure>
                <p class="text-secondary">An image list spanning three columns of the layout grid, with 8dp padding</p>

                <div class="space"></div>
                <div class="space"></div>

                <h6>Responsive</h6>
                <p class="text-secondary">Image lists inherit the responsive behavior of the layout grid.</p>

                <div class="space"></div>
                <div class="mdc-divider"></div>
                <div class="space"></div>

                <h4>Scrolling</h4>
                <div class="space"></div>

                <p class="text-secondary">Image lists can scroll vertically or horizontally. All items in an image list must scroll together as a collection. Image cropping can be used to indicate scroll direction.</p>
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

                <h4>Standard image list</h4>
                <p class="text-secondary">Standard image lists are best for items of equal importance. They have a uniform container size, ratio, and padding.</p>

                <figure class="img_figure clearfix""><img src="<?= $prefix ?>img/component_image_lists/hero-gridlist-standard.png"></figure>
                <div class="space"></div>

                <figure class="img_figure clearfix""><img src="<?= $prefix ?>img/component_image_lists/standard-usage-01.png"></figure>
                <p class="text-secondary">Standard image lists can be displayed with or without text labels.</p>
                <ol class="text-secondary">
                    <li>image list with images only</li>
                    <li>image list with images and text labels</li>
                </ol>
                <div class="space"></div>

                <figure class="img_figure clearfix""><img src="<?= $prefix ?>img/component_image_lists/standard-usage-02.png"></figure>
                <p class="text-secondary">In compact layouts, labels can appear above the image container using an image treatment that provides text protection to ensure legibility.</p>

                <div class="space"></div>
                <div class="mdc-divider"></div>
                <div class="space"></div>

                <h4>Quilted image list</h4>
                <p class="text-secondary">Quilted image lists emphasize certain items over others in a collection. They use varied container sizes and ratios to create hierarchy across images.</p>

                <figure class="img_figure clearfix""><img src="<?= $prefix ?>img/component_image_lists/hero-gridlist-quilted.png"></figure>
                <p class="text-secondary">Quilted image lists shouldn’t display text below the image container, as it disrupts the layout.</p>

                <div class="space"></div>
                <div class="mdc-divider"></div>
                <div class="space"></div>

                <h4>Woven image list</h4>
                <p class="text-secondary">Woven image lists use alternating container ratios to create a rhythmic layout. A woven image list is best for browsing peer content.</p>

                <figure class="img_figure clearfix""><img src="<?= $prefix ?>img/component_image_lists/hero-gridlist-weaved.png"></figure>

                <div class="space"></div>
                <div class="mdc-divider"></div>
                <div class="space"></div>

                <h4>Masonry image list</h4>
                <p class="text-secondary">Masonry image lists use dynamically sized container heights that reflect the aspect ratio of each image. This image list is best used for browsing uncropped peer content.</p>

                <figure class="img_figure clearfix""><img src="<?= $prefix ?>img/component_image_lists/hero-gridlist-masonry.png"></figure>
            </div>
        </div>
    </section>
</div>
<div class="mdc-divider"></div>
<div class="container">
    <section>
        <div class="row">
            <div class="col">
                <h1 class="article_title">Implementation</h1>
                <div class="space"></div>

                <p class="text-secondary">By default, each row will show <b>five</b> list items on <code>.medium</code> and above, <b>four</b> list items on <code>.smallext</code>, <b>three</b> list items on <code>.small</code>, and <b>two</b> list items on <code>.xsmall</code>. Please refer to <a href="<?= $prefix ?>layout/responsive-layout-grid.php">Breakpoint system</a> for more information.</p>

                <p class="text-secondary green-600">Default padding is 8 dp and the following padding values are available: 1, 2, 4, 8, 16, 20, 24, 32 dp.</p>

                <div class="space"></div>
                <div class="space"></div>

                <h4>Standard image list</h4>
                <div class="space"></div>
                
                <div class="mdc-image-list">
                    <div class="list-item">
                        <div class="image" style="background-image: url('<?= $prefix ?>img/component_image_lists/thumb-1.jpg');"></div>
                    </div>
                    <div class="list-item">
                        <div class="image" style="background-image: url('<?= $prefix ?>img/component_image_lists/thumb-2.jpg');"></div>
                    </div>
                    <div class="list-item">
                        <div class="image" style="background-image: url('<?= $prefix ?>img/component_image_lists/thumb-3.jpg');"></div>
                    </div>
                    <div class="list-item">
                        <div class="image" style="background-image: url('<?= $prefix ?>img/component_image_lists/thumb-1.jpg');"></div>
                    </div>
                    <div class="list-item">
                        <div class="image" style="background-image: url('<?= $prefix ?>img/component_image_lists/thumb-2.jpg');"></div>
                    </div>
                </div>

<pre class="bg-app-bar html"><?= htmlspecialchars(
<<<TEXT
<div class="mdc-image-list">
    <div class="list-item">
        <div class="image" style="background-image: url('...');"></div>
    </div>
    .
    .
    .
</div>
TEXT
) ?></pre>

                <div class="space"></div>
                <div class="space"></div>

                <h6 class="text-secondary">16:9 image ratio</h6>
                <div class="space"></div>

                <div class="mdc-image-list md-16by9">
                    <div class="list-item">
                        <div class="image" style="background-image: url('<?= $prefix ?>img/component_image_lists/thumb-1.jpg');"></div>
                    </div>
                    <div class="list-item">
                        <div class="image" style="background-image: url('<?= $prefix ?>img/component_image_lists/thumb-2.jpg');"></div>
                    </div>
                    <div class="list-item">
                        <div class="image" style="background-image: url('<?= $prefix ?>img/component_image_lists/thumb-3.jpg');"></div>
                    </div>
                    <div class="list-item">
                        <div class="image" style="background-image: url('<?= $prefix ?>img/component_image_lists/thumb-1.jpg');"></div>
                    </div>
                    <div class="list-item">
                        <div class="image" style="background-image: url('<?= $prefix ?>img/component_image_lists/thumb-2.jpg');"></div>
                    </div>
                </div>

<pre class="bg-app-bar html"><?= htmlspecialchars(
<<<TEXT
<div class="mdc-image-list md-16by9">
    ...
</div>
TEXT
) ?></pre>

                <div class="space"></div>
                <div class="space"></div>

                <h6 class="text-secondary">Supporting text and iconography</h6>
                <div class="space"></div>

                <div class="mdc-image-list md-16by9">
                    <div class="list-item">
                        <div class="image" style="background-image: url('<?= $prefix ?>img/component_image_lists/thumb-1.jpg');"></div>
                        <div class="support">
                            <div class="text">Title here</div>
                            <div class="icon">
                                <div class="material-icon">star_outline</div>
                            </div>
                        </div>
                    </div>
                    <div class="list-item">
                        <div class="image" style="background-image: url('<?= $prefix ?>img/component_image_lists/thumb-2.jpg');"></div>
                        <div class="support">
                            <div class="text">Title here</div>
                            <div class="icon">
                                <div class="material-icon">star_outline</div>
                            </div>
                        </div>
                    </div>
                    <div class="list-item">
                        <div class="image" style="background-image: url('<?= $prefix ?>img/component_image_lists/thumb-3.jpg');"></div>
                        <div class="support">
                            <div class="text">Title here</div>
                            <div class="icon">
                                <div class="material-icon">star_outline</div>
                            </div>
                        </div>
                    </div>
                    <div class="list-item">
                        <div class="image" style="background-image: url('<?= $prefix ?>img/component_image_lists/thumb-1.jpg');"></div>
                        <div class="support">
                            <div class="text">Title here</div>
                            <div class="icon">
                                <div class="material-icon">star_outline</div>
                            </div>
                        </div>
                    </div>
                    <div class="list-item">
                        <div class="image" style="background-image: url('<?= $prefix ?>img/component_image_lists/thumb-2.jpg');"></div>
                        <div class="support">
                            <div class="text">Title here</div>
                            <div class="icon">
                                <div class="material-icon">star_outline</div>
                            </div>
                        </div>
                    </div>
                </div>

<pre class="bg-app-bar html"><?= htmlspecialchars(
<<<TEXT
<div class="mdc-image-list">
    <div class="list-item">
        <div class="image" style="background-image: url('...');"></div>
        <div class="support">
            <div class="text">...</div>
            <div class="icon">...</div>
        </div>
    </div>
    .
    .
    .
</div>
TEXT
) ?></pre>

                <div class="space"></div>
                <div class="space"></div>

                <h6 class="text-secondary">Overlay supporting text and iconography</h6>
                <div class="space"></div>

                <div class="mdc-image-list md-16by9 overlay-support">
                    <div class="list-item">
                        <div class="image" style="background-image: url('<?= $prefix ?>img/component_image_lists/thumb-1.jpg');"></div>
                        <div class="support">
                            <div class="text">Title here</div>
                            <div class="icon">
                                <div class="material-icon">star_outline</div>
                            </div>
                        </div>
                    </div>
                    <div class="list-item">
                        <div class="image" style="background-image: url('<?= $prefix ?>img/component_image_lists/thumb-2.jpg');"></div>
                        <div class="support">
                            <div class="text">Title here</div>
                            <div class="icon">
                                <div class="material-icon">star_outline</div>
                            </div>
                        </div>
                    </div>
                    <div class="list-item">
                        <div class="image" style="background-image: url('<?= $prefix ?>img/component_image_lists/thumb-3.jpg');"></div>
                        <div class="support">
                            <div class="text">Title here</div>
                            <div class="icon">
                                <div class="material-icon">star_outline</div>
                            </div>
                        </div>
                    </div>
                    <div class="list-item">
                        <div class="image" style="background-image: url('<?= $prefix ?>img/component_image_lists/thumb-1.jpg');"></div>
                        <div class="support">
                            <div class="text">Title here</div>
                            <div class="icon">
                                <div class="material-icon">star_outline</div>
                            </div>
                        </div>
                    </div>
                    <div class="list-item">
                        <div class="image" style="background-image: url('<?= $prefix ?>img/component_image_lists/thumb-2.jpg');"></div>
                        <div class="support">
                            <div class="text">Title here</div>
                            <div class="icon">
                                <div class="material-icon">star_outline</div>
                            </div>
                        </div>
                    </div>
                </div>

<pre class="bg-app-bar html"><?= htmlspecialchars(
<<<TEXT
<div class="mdc-image-list overlay-support">
    ...
</div>
TEXT
) ?></pre>

                <div class="space"></div>
                <p class="text-secondary">Background color classes can be added to each supporting element. Please refer to <a href="<?= $prefix ?>color/the-color-system.php">The color system</a>.</p>

                <div class="mdc-image-list md-16by9 overlay-support">
                    <div class="list-item">
                        <div class="image" style="background-image: url('<?= $prefix ?>img/component_image_lists/thumb-1.jpg');"></div>
                        <div class="support bg-deep-purple-900">
                            <div class="text">Title here</div>
                            <div class="icon">
                                <div class="material-icon">star_outline</div>
                            </div>
                        </div>
                    </div>
                    <div class="list-item">
                        <div class="image" style="background-image: url('<?= $prefix ?>img/component_image_lists/thumb-2.jpg');"></div>
                        <div class="support bg-red-900">
                            <div class="text">Title here</div>
                            <div class="icon">
                                <div class="material-icon">star_outline</div>
                            </div>
                        </div>
                    </div>
                    <div class="list-item">
                        <div class="image" style="background-image: url('<?= $prefix ?>img/component_image_lists/thumb-3.jpg');"></div>
                        <div class="support bg-orange-900">
                            <div class="text">Title here</div>
                            <div class="icon">
                                <div class="material-icon">star_outline</div>
                            </div>
                        </div>
                    </div>
                    <div class="list-item">
                        <div class="image" style="background-image: url('<?= $prefix ?>img/component_image_lists/thumb-1.jpg');"></div>
                        <div class="support bg-deep-purple-900">
                            <div class="text">Title here</div>
                            <div class="icon">
                                <div class="material-icon">star_outline</div>
                            </div>
                        </div>
                    </div>
                    <div class="list-item">
                        <div class="image" style="background-image: url('<?= $prefix ?>img/component_image_lists/thumb-2.jpg');"></div>
                        <div class="support bg-red-900">
                            <div class="text">Title here</div>
                            <div class="icon">
                                <div class="material-icon">star_outline</div>
                            </div>
                        </div>
                    </div>
                </div>

<pre class="bg-app-bar html"><?= htmlspecialchars(
<<<TEXT
<div class="mdc-image-list overlay-support">
    <div class="list-item">
        ...
        <div class="support bg-red-900">
            ...
        </div>
    </div>
    .
    .
    .
</div>
TEXT
) ?></pre>

                <div class="space"></div>
                <p class="text-secondary">Text protection opacity can be customized by changing the CSS variable <code class="hljs-css-attribute">--protection-opacity</code> for the support element. Defaults to <code class="hljs-css-number">0.6</code>.</p>

<pre class="bg-app-bar css"><?= htmlspecialchars(
<<<TEXT
.mdc-image-list .list-item .support {
    --protection-opacity: 0.6;
}
TEXT
) ?></pre>

                <div class="space"></div>
                <div class="space"></div>
                <div class="mdc-divider"></div>
                <div class="space"></div>
                <div class="space"></div>

                <h4>Woven image list</h4>
                <div class="space"></div>
                
                <div class="mdc-image-list mdc-style-woven md-32">
                    <div class="list-item">
                        <div class="image" style="background-image: url('<?= $prefix ?>img/component_image_lists/thumb-4.jpg');"></div>
                    </div>
                    <div class="list-item">
                        <div class="image" style="background-image: url('<?= $prefix ?>img/component_image_lists/thumb-5.jpg');"></div>
                    </div>
                    <div class="list-item">
                        <div class="image" style="background-image: url('<?= $prefix ?>img/component_image_lists/thumb-6.jpg');"></div>
                    </div>
                    <div class="list-item">
                        <div class="image" style="background-image: url('<?= $prefix ?>img/component_image_lists/thumb-7.jpg');"></div>
                    </div>
                    <div class="list-item">
                        <div class="image" style="background-image: url('<?= $prefix ?>img/component_image_lists/thumb-4.jpg');"></div>
                    </div>
                </div>

<pre class="bg-app-bar html"><?= htmlspecialchars(
<<<TEXT
<div class="mdc-image-list mdc-style-woven">
    .
    .
    .
</div>
TEXT
) ?></pre>

                <div class="space"></div>
                <div class="space"></div>
                <div class="mdc-divider"></div>
                <div class="space"></div>
                <div class="space"></div>

                <h4>Masonry image list</h4>
                <div class="space"></div>
                
                <div class="mdc-image-list mdc-style-masonry md-32">
                    <div class="list-item">
                        <div class="image">
                            <img src="<?= $prefix ?>img/component_image_lists/thumb-4.jpg">
                        </div>
                    </div>
                    <div class="list-item">
                        <div class="image">
                            <img src="<?= $prefix ?>img/component_image_lists/thumb-5.jpg">
                        </div>
                    </div>
                    <div class="list-item">
                        <div class="image">
                            <img src="<?= $prefix ?>img/component_image_lists/thumb-6.jpg">
                        </div>
                    </div>
                    <div class="list-item">
                        <div class="image">
                            <img src="<?= $prefix ?>img/component_image_lists/thumb-7.jpg">
                        </div>
                    </div>
                    <div class="list-item">
                        <div class="image">
                            <img src="<?= $prefix ?>img/component_image_lists/thumb-4.jpg">
                        </div>
                    </div>
                    <div class="list-item">
                        <div class="image">
                            <img src="<?= $prefix ?>img/component_image_lists/thumb-5.jpg">
                        </div>
                    </div>
                    <div class="list-item">
                        <div class="image">
                            <img src="<?= $prefix ?>img/component_image_lists/thumb-6.jpg">
                        </div>
                    </div>
                    <div class="list-item">
                        <div class="image">
                            <img src="<?= $prefix ?>img/component_image_lists/thumb-7.jpg">
                        </div>
                    </div>
                    <div class="list-item">
                        <div class="image">
                            <img src="<?= $prefix ?>img/component_image_lists/thumb-4.jpg">
                        </div>
                    </div>
                    <div class="list-item">
                        <div class="image">
                            <img src="<?= $prefix ?>img/component_image_lists/thumb-5.jpg">
                        </div>
                    </div>
                    <div class="list-item">
                        <div class="image">
                            <img src="<?= $prefix ?>img/component_image_lists/thumb-6.jpg">
                        </div>
                    </div>
                    <div class="list-item">
                        <div class="image">
                            <img src="<?= $prefix ?>img/component_image_lists/thumb-7.jpg">
                        </div>
                    </div>
                    <div class="list-item">
                        <div class="image">
                            <img src="<?= $prefix ?>img/component_image_lists/thumb-4.jpg">
                        </div>
                    </div>
                    <div class="list-item">
                        <div class="image">
                            <img src="<?= $prefix ?>img/component_image_lists/thumb-5.jpg">
                        </div>
                    </div>
                </div>

<pre class="bg-app-bar html"><?= htmlspecialchars(
<<<TEXT
<div class="mdc-image-list mdc-style-masonry">
    <div class="list-item">
        <div class="image">
            <img src="...">
        </div>
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

<?php include $prefix."_includes/footer.php"; ?>

</body>
</html>