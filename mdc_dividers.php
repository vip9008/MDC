<?php
$language = "en-US";
$direction = "ltr";
$head_title = "MDC v2";
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

$topAppBarColor = "bg-blue-grey-900";
$topAppBarTitle = "Components - Dividers";

$primaryColor = "indigo";
$accentColor = "blue";

$url = "mdc_dividers.php";
?>

<!DOCTYPE html>
<html lang="<?= $language ?>" dir="<?= $direction ?>">

<?php include "_includes/head.php"; ?>

<body>

<?php include "_includes/drawer.php"; ?>
<?php include "_includes/app_bar.php"; ?>

<div class="container">
    <section>
        <div class="row">
            <div class="col xlarge-6 large-9 medium-12">
                <h1 class="article_title">Dividers</h1>
                <div class="space"></div>
                <h2 class="text-secondary">A divider is a thin line that groups content in lists and layouts.</h2>
            </div>
        </div>
        <div class="row">
            <div class="col xlarge-6 large-9 medium-12">
                <figure class="img_figure clearfix"><img src="img/dividers/divider-intro.png"></figure>
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
                <p class="text-secondary">Dividers separate content into clear groups.</p>
            </div>
        </div>
    </section>
    <section>
        <div class="row">
            <div class="col xlarge-6 large-9 medium-12">
                <h1>Principles</h1>
            </div>
        </div>
        <div class="row">
            <div class="col xlarge-2 large-3 medium-4 small-4">
                <figure class="img_figure clearfix"><img src="img/dividers/divider-illos-03.png"></figure>
                <h3>Subtle</h3>
                <p class="text-secondary">Dividers should be noticeable in a layout, but not jarring.</p>
            </div>
            <div class="col xlarge-2 large-3 medium-4 small-4">
                <figure class="img_figure clearfix"><img src="img/dividers/divider-illos-04.png"></figure>
                <h3>Secondary</h3>
                <p class="text-secondary">Dividers should only be used if elements cannot be separated using white space.</p>
            </div>
            <div class="clearfix visible-smallext visible-small"></div>
            <div class="col xlarge-2 large-3 medium-4 small-4">
                <figure class="img_figure clearfix"><img src="img/dividers/divider-illos-05.png"></figure>
                <h3>Infrequent</h3>
                <p class="text-secondary">Use dividers sparingly, to create groupings rather than separate items.</p>
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
                <h1>Types</h1>
            </div>
        </div>
        <div class="row">
            <div class="col xlarge-3 large-4 medium-6 small-4">
                <figure class="img_figure clearfix"><img src="img/dividers/dividers-full.png"></figure>
                <h3>Full-bleed dividers</h3>
                <p class="text-secondary">Full-bleed dividers separate content into sections and span the entire length of a layout.</p>
            </div>
            <div class="col xlarge-3 large-4 medium-6 small-4">
                <figure class="img_figure clearfix"><img src="img/dividers/dividers.png"></figure>
                <h3>Inset dividers</h3>
                <p class="text-secondary">Inset dividers separate related content, anchored by elements that align with the app bar title.</p>
            </div>
        </div>
    </section>

    <section>
        <div class="row">
            <div class="col xlarge-3 large-4 medium-6 small-4">
                <figure class="img_figure clearfix"><img src="img/dividers/divider-middle.png"></figure>
                <h3>Middle dividers</h3>
                <p class="text-secondary">Middle dividers space related content and are centered in a layout or list.</p>
            </div>
            <div class="col xlarge-3 large-4 medium-6 small-4">
                <figure class="img_figure clearfix"><img src="img/dividers/dividers-subhead.png"></figure>
                <h3>Dividers with subheaders</h3>
                <p class="text-secondary">Dividers can be paired with subheaders to help define content groupings.</p>
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
                <h1>Full-bleed dividers</h1>
                <p class="text-secondary">Full-bleed dividers separate content into sections, such as:</p>
                <ul>
                    <li class="text-secondary">Separating list and layout elements</li>
                    <li class="text-secondary">Indicating where an element may expand</li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col xlarge-3 large-4 medium-6 small-4">
                <figure class="img_figure clearfix"><img src="img/dividers/dividers-full-bleed.png"></figure>
                <p class="text-secondary">When lists don’t have an anchoring element (such as an icon), spacing may not be enough to separate content. Full-bleed dividers can help separate individual tiles</p>
            </div>
            <div class="col xlarge-3 large-4 medium-6 small-4">
                <figure class="img_figure clearfix"><img src="img/dividers/baseline-drawer.png"></figure>
                <p class="text-secondary">A full-bleed divider in a navigation drawer</p>
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
                <h1>Inset dividers</h1>
                <p class="text-secondary">Inset dividers separate related content, such as emails in an email thread. They should be used with anchoring elements such as icons or avatars, and left-aligned with the app bar title.</p>
            </div>
        </div>
        <div class="row">
            <div class="col xlarge-3 large-4 medium-6 small-4">
                <figure class="img_figure clearfix"><img src="img/dividers/dividers-with-dividers.png"></figure>
                <p class="text-secondary">Inset dividers</p>
            </div>
            <div class="col xlarge-3 large-4 medium-6 small-4">
                <figure class="img_figure clearfix"><img src="img/dividers/dividers-inset-2.png"></figure>
                <p class="text-secondary">Use inset dividers when there are anchoring elements such as an icon or avatar</p>
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
                <h1>Middle dividers</h1>
                <p class="text-secondary">Dividers can also be placed in the middle of a layout. They are best for separating related content, such prices on a receipt.</p>
            </div>
        </div>
        <div class="row">
            <div class="col xlarge-3 large-4 medium-6 small-4">
                <figure class="img_figure clearfix"><img src="img/dividers/divider-middle-2.png"></figure>
                <p class="text-secondary">An inset divider above a subheader</p>
            </div>
            <div class="col xlarge-3 large-4 medium-6 small-4">
                <figure class="img_figure clearfix"><img src="img/dividers/divider-middle.png"></figure>
                <p class="text-secondary">A full divider above a subheader</p>
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
                <h1>Dividers with subheaders</h1>
                <p class="text-secondary">Dividers can be paired with subheaders to identify grouped content. Place dividers above subheaders to reinforce the subheader’s connection to content.</p>
            </div>
        </div>
        <div class="row">
            <div class="col xlarge-3 large-4 medium-6 small-4">
                <figure class="img_figure clearfix"><img src="img/dividers/dividers-subhead.png"></figure>
                <p class="text-secondary">An inset divider above a subheader</p>
            </div>
            <div class="col xlarge-3 large-4 medium-6 small-4">
                <figure class="img_figure clearfix"><img src="img/dividers/dividers-subhead-2.png"></figure>
                <p class="text-secondary">A full-bleed divider above a subheaderA full divider above a subheader</p>
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
                <h1>Full-bleed dividers</h1>
                <p class="text-secondary">Placing a divider inside any container will cover the whole available width.</p>
            </div>
        </div>
        <div class="row">
            <div class="col xlarge-3 large-4 medium-6">
                <div class="mdc-list-group md-3line bg-cards example">
                    <div class="mdc-list-item interactive">
                        <div class="text">
                            Summer BBQ
                            <div class="secondary">
                                <span class="text-primary">Ali Connors</span>
                                - I'll be in your neighborhood doing errands this weekend. Do you want ...
                            </div>
                        </div>
                        <div class="meta">15 mins</div>
                    </div>
                    <div class="mdc-divider"></div>
                    <div class="mdc-list-item interactive">
                        <div class="text">
                            Birthday Gift
                            <div class="secondary">
                                <span class="text-primary">Trevor Hansen</span>
                                - Have any ideas about what we should get Heidi for her birthday?
                            </div>
                        </div>
                        <div class="meta">45 mins</div>
                    </div>
                    <div class="mdc-divider"></div>
                    <div class="mdc-list-item interactive">
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
<div class="mdc-list-group md-3line">
    .
    <div class="mdc-divider"></div>
    .
    <div class="mdc-divider"></div>
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
                <h1>Inset dividers</h1>
                <p class="text-secondary">Inset dividers are a special type of full-bleed dividers with additional margin settings.</p>
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
                    <div class="mdc-divider inset"></div>
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
                    <div class="mdc-divider inset"></div>
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
<div class="mdc-list-group md-3line">
    .
    <div class="mdc-divider inset"></div>
    .
    <div class="mdc-divider inset"></div>
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
                        <div class="graphic md-56" style="background-image: url('img/lists/avatar-1.png');"></div>
                        <div class="text">
                            Pencil
                            <div class="secondary">in stock</div>
                        </div>
                        <div class="meta">$1.5</div>
                    </div>
                    <div class="mdc-divider inset md-56"></div>
                    <div class="mdc-list-item interactive">
                        <div class="graphic md-56" style="background-image: url('img/lists/avatar-2.png');"></div>
                        <div class="text">
                            Rubberbands
                            <div class="secondary">in stock</div>
                        </div>
                        <div class="meta">$4.5</div>
                    </div>
                    <div class="mdc-divider inset md-56"></div>
                    <div class="mdc-list-item interactive">
                        <div class="graphic md-56" style="background-image: url('img/lists/avatar-3.png');"></div>
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
<div class="mdc-list-group md-3line">
    .
    <div class="mdc-divider inset md-56"></div>
    .
    <div class="mdc-divider inset md-56"></div>
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
                        <div class="graphic md-100" style="background-image: url('img/lists/thumb-1.png');"></div>
                        <div class="text">
                            Crunchy Croissants
                            <div class="secondary">Buttery, flaky pastry named for its crecent shape.</div>
                        </div>
                        <div class="meta">01</div>
                    </div>
                    <div class="mdc-divider inset md-100"></div>
                    <div class="mdc-list-item interactive">
                        <div class="graphic md-100" style="background-image: url('img/lists/thumb-2.png');"></div>
                        <div class="text">
                            Grilled Eggplant
                            <div class="secondary">Tender with a rich, complex flavor when cooked.</div>
                        </div>
                        <div class="meta">02</div>
                    </div>
                    <div class="mdc-divider inset md-100"></div>
                    <div class="mdc-list-item interactive">
                        <div class="graphic md-100" style="background-image: url('img/lists/thumb-3.png');"></div>
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
<div class="mdc-list-group md-3line">
    .
    <div class="mdc-divider inset md-100"></div>
    .
    <div class="mdc-divider inset md-100"></div>
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
                <h1>Middle dividers</h1>
                <p class="text-secondary">Placing a divider inside an item will act as a middle divider depending on the item padding and margin settings.</p>
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