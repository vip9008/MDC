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
$topAppBarTitle = "Components - Cards";

$primaryColor = "indigo";
$accentColor = "blue";

$prefix = "../";
$url = $prefix."components/cards.php";
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
                <h1 class="article_title">Cards</h1>
                <h5 class="text-secondary">Cards contain content and actions about a single subject.</h5>
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
                <p class="text-secondary">Cards are surfaces that display content and actions on a single topic.</p>
                <p class="text-secondary">They should be easy to scan for relevant and actionable information. Elements, like text and images, should be placed on them in a way that clearly indicates hierarchy.</p>
                <div class="space"></div>

                <h4>Principles</h4>
            </div>
        </div>
        <div class="row">
            <div class="col xlarge-2 large-3 medium-4 small-4">
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/component_cards/illo-cards-intro.png"></figure>
                <h6>Contained</h6>
                <p class="text-secondary">A card is identifiable as a single, contained unit.</p>
            </div>
            <div class="col xlarge-2 large-3 medium-4 small-4">
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/component_cards/illo-cards-independent.png"></figure>
                <h6>Independent</h6>
                <p class="text-secondary">A card can stand alone, without relying on surrounding elements for context.</p>
            </div>
            <div class="clearfix visible-smallext visible-small"></div>
            <div class="col xlarge-2 large-3 medium-4 small-4">
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/component_cards/illo-cards-cut.png"></figure>
                <h6>Individual</h6>
                <p class="text-secondary">A card cannot merge with another card, or divide into multiple cards.</p>
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

                <p class="text-secondary">The card container is the only required element in a card. All other elements shown here are optional.</p>
                <p class="text-secondary">Card layouts can vary to support the types of content they contain. The following elements are commonly found among that variety.</p>
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/component_cards/cards-elements-2b.png"></figure>

                <h6>1. Container</h6>
                <p class="text-secondary">Card containers hold all card elements, and their size is determined by the space those elements occupy. Card elevation is expressed by the container.</p>

                <h6>2. Thumbnail [optional]</h6>
                <p class="text-secondary">Cards can include thumbnails to display an avatar, logo, or icon.</p>

                <h6>3. Header text [optional]</h6>
                <p class="text-secondary">Header text can include things like the name of a photo album or article.</p>

                <h6>4. Subhead [optional]</h6>
                <p class="text-secondary">Subhead text can include text elements such as an article byline or a tagged location.</p>

                <h6>5. Media [optional]</h6>
                <p class="text-secondary">Cards can include a variety of media, including photos, and graphics, such as weather icons.</p>

                <h6>6. Supporting text [optional]</h6>
                <p class="text-secondary">Supporting text include text like an article summary or a restaurant description.</p>

                <h6>7. Buttons [optional]</h6>
                <p class="text-secondary">Cards can include buttons for actions.</p>

                <h6>8. Icons [optional]</h6>
                <p class="text-secondary">Cards can include icons for actions.</p>

                <div class="space"></div>
                <div class="space"></div>

                <p class="text-secondary">Each card is made up of content blocks. All of the blocks, as a whole, are related to a single subject or destination. Content can receive different levels of emphasis, depending on its level of hierarchy.</p>

                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/component_cards/cards-elements-1.png"></figure>
                <p class="text-secondary">Cards contain rich media, primary title, supporting text, and actions.</p>

                <div class="space"></div>
                <div class="space"></div>

                <h4>Dividers</h4>
                <p class="text-secondary">Dividers can be used to separate regions in cards or to indicate areas of a card that can expand.</p>

                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/component_cards/cards-dividers-2.png"></figure>
                <p class="text-secondary">Use inset dividers (1), dividers that do not run the full length of a card, to separate related content.</p>
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

                <h4>Transitions</h4>
                <p class="text-secondary">Cards can transform to reveal additional content.</p>

                <div class="space"></div>
                <div class="mdc-divider"></div>
                <div class="space"></div>

                <h4>Elevation</h4>
                <p class="text-secondary">On mobile, a card’s default elevation is 1dp, with a raised elevation of 8dp.</p>

                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/component_cards/cards-elevation-1.png"></figure>
                <p class="text-secondary">A shadow helps indicate a card.</p>

                <div class="space"></div>
                <div class="space"></div>

                <p class="text-secondary">On desktop and mobile, cards can have a resting elevation of 0dp. They elevate to 8dp on hover.</p>

                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/component_cards/cards-elevation-3.png"></figure>
                <p class="text-secondary">A stroke of 0dp helps indicate a card.</p>

                <div class="space"></div>
                <div class="mdc-divider"></div>
                <div class="space"></div>

                <h4>Gestures</h4>
                <p class="text-secondary">Gestures should be implemented consistently within a card collection. Frequently used gestures on cards include swipe, pick up and move, and scrolling.</p>
                <div class="space"></div>

                <h6>Swipe</h6>
                <p class="text-secondary">A swipe gesture can be performed on a single card at a time, anywhere on that card.</p>
                <div class="space"></div>

                <p class="text-secondary">It can be used to:</p>
                <ul class="text-secondary">
                    <li>Dismiss a card</li>
                    <li>Change the state of a card (such as flagging or archiving it)</li>
                </ul>

                <div class="space"></div>
                <div class="space"></div>

                <h6>Pick up and move</h6>
                <p class="text-secondary">The pick up and move gesture allows users to move and re-order cards in a collection.</p>

                <div class="space"></div>
                <div class="space"></div>

                <h6>Scrolling</h6>
                <p class="text-secondary">Card content that is taller than the maximum card height is truncated and does not scroll, but can be displayed by expanding the height of a card. A card can expand beyond the maximum height of the screen, in which case the card scrolls within the screen.</p>
            </div>
        </div>
    </section>
</div>
<div class="mdc-divider"></div>
<div class="container">
    <section>
        <div class="row">
            <div class="col xlarge-6 large-9 medium-12">
                <h1 class="article_title">Actions</h1>
                <div class="space"></div>

                <h4>Primary action</h4>
                <p class="text-secondary">The primary action area of a card is typically the card itself. Often cards are one large touch target to a detail screen on a subject.</p>

                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/component_cards/cards-actions-1.png"></figure>
                <p class="text-secondary">The action area of a card contains rich media and supporting text.</p>

                <div class="space"></div>
                <div class="mdc-divider"></div>
                <div class="space"></div>

                <h4>Supplemental actions</h4>
                <p class="text-secondary">Supplemental actions are represented by icons, text, and UI controls on cards. They are typically placed at the bottom of the card.</p>
                <p class="text-secondary">For more than two supplemental actions, use an overflow menu instead.</p>

                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/component_cards/cards-supplementalactions-1.png"></figure>
                <p class="text-secondary">Supplemental text and actions at the bottom of the card.</p>

                <div class="space"></div>
                <div class="mdc-divider"></div>
                <div class="space"></div>

                <h4>Overflow menu</h4>
                <p class="text-secondary">Overflow menus contain related actions. They are typically placed in the upper-right or lower-right corner of a card.</p>

                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/component_cards/cards-overflowmenu-1b.png"></figure>
                <p class="text-secondary">Overflow menus are usually located in the upper-right or lower-right corner of a card.</p>

                <div class="space"></div>
                <div class="mdc-divider"></div>
                <div class="space"></div>

                <h4>UI controls</h4>
                <p class="text-secondary">UI controls can be included within a card to allow the user to interact with a card’s content. UI controls may be in the form of a slider, stars to rate content, chips, or buttons.</p>

                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/component_cards/cards-uicontrols-1.png"></figure>
                <p class="text-secondary">This card contains stars to rate content.</p>
                <div class="space"></div>

                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/component_cards/cards-uicontrols-2.png"></figure>
                <p class="text-secondary">This card contains choice chips within the action area.</p>

                <div class="space"></div>
                <div class="mdc-divider"></div>
                <div class="space"></div>

                <h4>Additional actions</h4>
                <p class="text-secondary">Cards can support multiple actions, such as UI controls and an overflow menu. Because cards are entry points to more detailed information, they should contain a limited number of actions.</p>

                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/component_cards/cards-additionalactions-1-dont.png"></figure>
                <p class="text-secondary">Cards provide entry to more robust information. Be cautious not to overload cards with extraneous information or actions.</p>

                <div class="space"></div>
                <div class="mdc-divider"></div>
                <div class="space"></div>

                <h4>Focus</h4>
                <p class="text-secondary">When traversing through focus points on a card, visit each focused element before moving to the next card.</p>
                <p class="text-secondary">For users that navigate solely using focus traversal (using a D-pad and keyboard), cards should have either a primary action or open a new screen containing primary and supplemental actions.</p>
            </div>
        </div>
    </section>
</div>
<div class="mdc-divider"></div>
<div class="container">
    <section>
        <div class="row">
            <div class="col xlarge-6 large-9 medium-12">
                <h1 class="article_title">Card collections</h1>
                <div class="space"></div>

                <h4>Usage</h4>
                <p class="text-secondary">When multiple cards are present, they are grouped together into one or more collections. By default, cards in a collection are coplanar, sharing the same resting elevation unless they are picked up or dragged.</p>

                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/component_cards/cards-cardcollections-hero.png"></figure>

                <div class="space"></div>
                <div class="mdc-divider"></div>
                <div class="space"></div>

                <h4>Layout</h4>
                <p class="text-secondary">Organize card collections so that they are easy to use. Their layout affects how they are perceived.</p>

                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/component_cards/cards-cardcollections.png"></figure>
                <p class="text-secondary">When adding cards to a collection, the first item is automatically positioned on the top left. Subsequent cards are laid out left to right, top to bottom.</p>

                <div class="space"></div>
                <div class="space"></div>

                <h6>Scannable</h6>
                <p class="text-secondary">To make a collection of cards scannable, place them in a consistent pattern.</p>
            </div>
        </div>
        <div class="row">
            <div class="col xlarge-3 large-4 medium-6 small-4">
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/component_cards/cards-layoutcardcollections-1a.png"></figure>
            </div>
            <div class="col xlarge-3 large-4 medium-6 small-4">
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/component_cards/cards-layoutcardcollections-1b.png"></figure>
            </div>
        </div>
        <div class="row">
            <div class="col xlarge-6 large-9 medium-12">
                <p class="text-secondary">Scannable cards</p>

                <div class="space"></div>
                <div class="space"></div>

                <h6>Dashboard</h6>
                <p class="text-secondary">To display multiple subject matters and functions on a screen, use a dashboard-style card collection.</p>
            </div>
        </div>
        <div class="row">
            <div class="col xlarge-3 large-4 medium-6 small-4">
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/component_cards/cards-layoutcardcollections-2a.png"></figure>
            </div>
            <div class="col xlarge-3 large-4 medium-6 small-4">
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/component_cards/cards-layoutcardcollections-2b.png"></figure>
            </div>
        </div>
        <div class="row">
            <div class="col xlarge-6 large-9 medium-12">
                <p class="text-secondary">Dashboard-style card collection</p>

                <div class="space"></div>
                <div class="space"></div>

                <h6>Distinction</h6>
                <p class="text-secondary">To highlight each card’s individuality, style, or novelty, use a card collection with an asymmetric grid.</p>
            </div>
        </div>
        <div class="row">
            <div class="col xlarge-3 large-4 medium-6 small-4">
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/component_cards/cards-layoutcardcollections-3a.png"></figure>
            </div>
            <div class="col xlarge-3 large-4 medium-6 small-4">
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/component_cards/cards-layoutcardcollections-3b.png"></figure>
            </div>
        </div>
        <div class="row">
            <div class="col xlarge-6 large-9 medium-12">
                <p class="text-secondary">Cards in an asymmetric grid</p>

                <div class="space"></div>
                <div class="mdc-divider"></div>
                <div class="space"></div>

                <h4>Contained collections</h4>
                <p class="text-secondary">Card collections can be placed within a container, and be scrolled within it.</p>

                <div class="space"></div>
                <div class="mdc-divider"></div>
                <div class="space"></div>

                <h4>Filtering and sorting</h4>
                <p class="text-secondary">Card collections can be filtered in a variety of ways, including by date or alphabetical order. If a collection can be filtered, the filter must apply to each card in the collection.</p>

                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/component_cards/cards-cardcollectionsort-1.png"></figure>
                <p class="text-secondary">Filter or sorting options should be placed outside of the card collection.</p>
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
                <p class="text-secondary"><b>This section should not be read as prescriptive or exhaustive</b>. Cards have no singular layout, typographic, or image size. All cards should be designed to meet the needs of the content they present. This section shows a general variety of card layouts to help showcase that variety. <b>However</b>, these layouts are implemented and can be used without customization.</p>
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
                <div class="mdc-card" style="margin: 1rem 0;">
                    <div class="mdc-card-primary">
                        <div class="header">
                            <div class="title">
                                <h5>Title goes here</h5>
                                <div class="mdt-subtitle-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
                            </div>
                            <div class="thumbnail md-80" style="background-image: url('<?= $prefix ?>img/component_cards/thumb.jpg');"></div>
                        </div>
                    </div>
                    <div class="mdc-button-group">
                        <button class="mdc-button deep-purple-A700">Action 1</button>
                        <button class="mdc-button deep-purple-A700">Action 2</button>
                    </div>
                </div>
                <p class="text-secondary">Thumbnail has 3 optional sizes:</p>
                <ul class="text-secondary">
                    <li>80x80: css class <code>.thumbnail.md-80</code></li>
                    <li>120x120: css class <code>.thumbnail.md-120</code></li>
                    <li>160x160: css class <code>.thumbnail.md-160</code></li>
                </ul>
            </div>
            <div class="col xlarge-5 large-6 medium-10">
<pre class="bg-app-bar html"><?= htmlspecialchars(
<<<TEXT
<div class="mdc-card">
    <div class="mdc-card-primary">
        <div class="header">
            <div class="title">
                <h5>Title goes here</h5>
                <div class="mdt-subtitle-2">Lorem ipsum ...</div>
            </div>
            <div class="thumbnail md-80" style="background-image: url('...');"></div>
        </div>
    </div>
    <div class="mdc-button-group">
        <button class="mdc-button deep-purple-A700">Action 1</button>
        <button class="mdc-button deep-purple-A700">Action 2</button>
    </div>
</div>
TEXT
) ?></pre>
            </div>
        </div>

        <div class="row">
            <div class="col xlarge-3 large-4 medium-6">
                <div class="mdc-card" style="margin: 1rem 0;">
                    <button class="mdc-card-primary">
                        <div class="header">
                            <div class="title">
                                <div class="mdt-overline">Overline</div>
                                <h5>Title goes here</h5>
                                <div class="mdt-subtitle-2">Lorem ipsum dolor sit amet, consectetur elit.</div>
                            </div>
                            <div class="thumbnail md-80" style="background-image: url('<?= $prefix ?>img/component_cards/thumb.jpg');"></div>
                        </div>
                    </button>
                    <div class="mdc-button-group">
                        <button class="mdc-button deep-purple-A700">Action 1</button>
                        <button class="mdc-button deep-purple-A700">Action 2</button>
                    </div>
                </div>
                <p class="text-secondary">Card with primary action</p>
            </div>
            <div class="col xlarge-5 large-6 medium-10">
<pre class="bg-app-bar html"><?= htmlspecialchars(
<<<TEXT
<div class="mdc-card">
    <button class="mdc-card-primary">
        .
        .
        .
    </button>
    <div class="mdc-button-group">
        <button class="mdc-button deep-purple-A700">Action 1</button>
        <button class="mdc-button deep-purple-A700">Action 2</button>
    </div>
</div>
TEXT
) ?></pre>
            </div>
        </div>

        <div class="row">
            <div class="col xlarge-3 large-4 medium-6">
                <div class="mdc-card" style="margin: 1rem 0;">
                    <div class="mdc-card-primary">
                        <div class="header">
                            <div class="thumbnail" style="background-image: url('<?= $prefix ?>img/component_cards/thumb.jpg');"></div>
                            <div class="title">
                                <h6>Title goes here</h6>
                                <div class="mdt-subtitle-2">Secondary line text</div>
                            </div>
                        </div>
                        <div class="media" style="background-image: url('<?= $prefix ?>img/component_cards/media.jpg');"></div>
                        <div class="supporting-text mdt-body-2">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.
                        </div>
                    </div>
                    <div class="mdc-button-group">
                        <button class="mdc-button deep-purple-A700">Action 1</button>
                        <button class="mdc-button deep-purple-A700">Action 2</button>
                    </div>
                </div>
                <p class="text-secondary">Default media aspect ratio is 16:9, as an option it can be 1:1 by using the css class <code>.media.md-1by1</code></p>
            </div>
            <div class="col xlarge-5 large-6 medium-10">
<pre class="bg-app-bar html"><?= htmlspecialchars(
<<<TEXT
<div class="mdc-card">
    <div class="mdc-card-primary">
        <div class="header">
            <div class="thumbnail" style="background-image: url('...');"></div>
            <div class="title">
                <h6>Title goes here</h6>
                <div class="mdt-subtitle-2">Secondary line text</div>
            </div>
        </div>
        <div class="media" style="background-image: url('...');"></div>
        <div class="supporting-text mdt-body-2">
            Lorem ipsum ...
        </div>
    </div>
    <div class="mdc-button-group">
        <button class="mdc-button deep-purple-A700">Action 1</button>
        <button class="mdc-button deep-purple-A700">Action 2</button>
    </div>
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