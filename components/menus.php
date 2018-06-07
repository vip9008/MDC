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
    "css/mdc.menu.css",
    "css/mdc.text.field.css",
    "css/mdc.button.css",
];
$js_files = [
    "js/mdc.list.js",
    "js/mdc.nav.drawer.js",
    "js/mdc.top.app.bar.js",
    "js/mdc.menu.js",
    "js/mdc.text.field.js",
];

$head_title = "MDC v2";

$topAppBarColor = "bg-blue-grey-900";
$topAppBarTitle = "Components - Menus";

$primaryColor = "indigo";
$accentColor = "blue";

$prefix = "../";
$url = $prefix."components/menus.php";
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
                <h1 class="article_title">Menus</h1>
                <h5 class="text-secondary">Menus display a list of choices on temporary surfaces.</h5>
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/component_menus/menu-intro.png"></figure>
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
                <p class="text-secondary">A menu displays a list of choices on a temporary surface. They appear when users interact with a button, action, or other control.</p>
                <div class="space"></div>

                <h4>Principles</h4>
            </div>
        </div>
        <div class="row">
            <div class="col xlarge-2 large-3 medium-4 small-4">
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/component_menus/menu-illos-unobtrusive.png"></figure>
                <h6>Nimble</h6>
                <p class="text-secondary">Menus should be easy to open, close, and interact with.</p>
            </div>
            <div class="col xlarge-2 large-3 medium-4 small-4">
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/component_menus/menu-illos-contextual.png"></figure>
                <h6>Contextual</h6>
                <p class="text-secondary">Menu content should be suited to user needs.</p>
            </div>
            <div class="clearfix visible-smallext visible-small"></div>
            <div class="col xlarge-2 large-3 medium-4 small-4">
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/component_menus/menu-illos-scannable.png"></figure>
                <h6>Scannable</h6>
                <p class="text-secondary">Menu items should be easy to scan.</p>
            </div>
        </div>

        <div class="row">
            <div class="col xlarge-6 large-9 medium-12">
                <div class="space"></div>
                <div class="mdc-divider"></div>
                <div class="space"></div>

                <h4>Types</h4>
                <p class="text-secondary">Menus allow users make a selection from multiple options. They are less prominent and take up less space than selection controls, such as a set of radio buttons.</p>
            </div>
        </div>
        <div class="row">
            <div class="col xlarge-3 large-4 medium-6 small-4">
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/component_menus/option-baseline-dropdown.png"></figure>
                <h6>Dropdown menus</h6>
                <p class="text-secondary">Dropdown menus display a list of options, triggered by an icon, button, or action. Their placement varies based on the element that opens them.</p>
            </div>
            <div class="col xlarge-3 large-4 medium-6 small-4">
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/component_menus/option-exposed-line-item.png"></figure>
                <h6>Exposed dropdown menus</h6>
                <p class="text-secondary">Exposed dropdown menus display the currently selected menu item above the list of options. Some variations can accept user-entered input.</p>
            </div>
        </div>

        <div class="row">
            <div class="col xlarge-6 large-9 medium-12">
                <div class="space"></div>
                <div class="mdc-divider"></div>
                <div class="space"></div>

                <h4>Placement</h4>
                <div class="space"></div>

                <h6>Elevation</h6>
                <p class="text-secondary">Menus appear in front of all other permanent UI elements.</p>

                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/component_menus/behavior-location.png"></figure>
                <p class="text-secondary">Menus appear at a higher elevation than all other permanent UI elements.</p>
                <div class="space"></div>

                <h6>Height</h6>
                <p class="text-secondary">The maximum height of a menu should be at least one row less than the height of the app’s UI.</p>
                
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/component_menus/menu-length.png"></figure>
                <p class="text-secondary">The rows in this menu are 32dp tall. That’s also the space used between the menu and the bottom of the screen.</p>
                <div class="space"></div>

                <h6>Position</h6>
                <p class="text-secondary">Menus should be positioned relative to the edge of the screen or browser. They typically appear next to (or in front of) the element that generates them. If they are in a position to be cut off by the browser or screen’s edge, the menu can instead appear to the left, right, or above the element that generates it.</p>
                
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/component_menus/cascading-menu-2.png"></figure>
                <p class="text-secondary">Menus can change their position to avoid being truncated by the screen or browser’s edge.</p>
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
                <h1 class="article_title">Anatomy</h1>
                <p class="text-secondary">Menus display lists of related options (which can be grouped together) as well as unrelated options. Menus appear when a user taps an interactive UI element such as an icon, button, action, or content, such as selected items or text.</p>
                <div class="space"></div>
            </div>
        </div>

        <div class="row">
            <div class="col xlarge-3 large-4 medium-6 small-4">
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/component_menus/elements-text-only.png"></figure>
                <div class="space"></div>
            </div>
            <div class="col xlarge-3 large-4 medium-6 small-4">
                <div class="space"></div>
                
                <h6>Text list</h6>
                <ol class="text-secondary">
                    <li>Container</li>
                    <li>Text</li>
                    <li>Divider</li>
                </ol>
                <div class="space"></div>
            </div>
        </div>

        <div class="row">
            <div class="col xlarge-3 large-4 medium-6 small-4">
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/component_menus/elements-text-icons.png"></figure>
                <div class="space"></div>
            </div>
            <div class="col xlarge-3 large-4 medium-6 small-4">
                <div class="space"></div>
                
                <h6>Text and icon list</h6>
                <ol class="text-secondary">
                    <li>Container</li>
                    <li>Leading icon</li>
                    <li>Text</li>
                    <li>Divider</li>
                </ol>
                <div class="space"></div>
            </div>
        </div>

        <div class="row">
            <div class="col xlarge-3 large-4 medium-6 small-4">
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/component_menus/elements-text-icon-command.png"></figure>
                <div class="space"></div>
            </div>
            <div class="col xlarge-3 large-4 medium-6 small-4">
                <div class="space"></div>
                
                <h6>Text, icon, and keyboard command list</h6>
                <ol class="text-secondary">
                    <li>Container</li>
                    <li>Leading icon</li>
                    <li>Text</li>
                    <li>Divider</li>
                    <li>Command</li>
                    <li>Cascading menu indicator</li>
                </ol>
                <div class="space"></div>
            </div>
        </div>

        <div class="row">
            <div class="col xlarge-3 large-4 medium-6 small-4">
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/component_menus/elements-text-states.png"></figure>
                <div class="space"></div>
            </div>
            <div class="col xlarge-3 large-4 medium-6 small-4">
                <div class="space"></div>
                
                <h6>Text with selection state list</h6>
                <ol class="text-secondary">
                    <li>Selection state</li>
                </ol>
                <div class="space"></div>
            </div>
        </div>

        <div class="row">
            <div class="col xlarge-6 large-9 medium-12">
                <div class="space"></div>

                <h4>Actions</h4>
                <div class="space"></div>

                <h6>Disabled actions</h6>
                <p class="text-secondary">Display actions as disabled when they can only be used sometimes, under certain conditions. They should be displayed as disabled rather than removing them.</p>

                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/component_menus/disabled-text-copy.png"></figure>
                <p class="text-secondary">The Redo action is disabled when that action isn’t available, and the Cut and Copy actions are disabled until content is selected.</p>
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
                <p class="text-secondary">If not all menu items are displayed at once, menus can be scrollable. In this state, menus show a persistent scrollbar.</p>

                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/component_menus/scrollable.png"></figure>
                <p class="text-secondary">When its content is scrollable, menus display scrollbars.</p>

                <div class="space"></div>
                <div class="mdc-divider"></div>
                <div class="space"></div>

                <h4>Motion</h4>
                <p class="text-secondary">Menus open using a scale animation (an animation that shows an element grow in size). The animation creates a relationship between the menu and the action that generates the menu.</p>

                <h6>Position</h6>
                <p class="text-secondary">A menu’s position on screen affects where and how it will appear. If opened at the top of the screen, it will expand downwards (to avoid being cropped).</p>
                <p class="text-secondary">By default, menus open with an entrance animation. However, on desktop, menus can skip the animation and open instantly instead.</p>
            </div>
        </div>
    </section>
</div>
<div class="mdc-divider"></div>
<div class="container">
    <section>
        <div class="row">
            <div class="col xlarge-6 large-9 medium-12">
                <h1 class="article_title">Dropdown menu</h1>
                <div class="space"></div>
                
                <h4>Usage</h4>
                <p class="text-secondary">A dropdown menu is a compact way of displaying multiple choices. It appears upon interaction with an element (such as an icon or button) or when users perform a specific action.</p>

                <div class="space"></div>
                <div class="mdc-divider"></div>
                <div class="space"></div>

                <h4>Placement</h4>
                <p class="text-secondary">Dropdown menus are positioned relative to both the element that generates them and the edges of the screen or browser. They can appear in front of, beside, above, or below the element that generates them.</p>

                <h6>Default placement</h6>
                <p class="text-secondary">A dropdown menu is typically positioned below the element that generates it.</p>

                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/component_menus/baseline-menu-intro.png"></figure>
                <p class="text-secondary">A dropdown menu triggered by an icon on mobile.</p>

                <div class="space"></div>
                <div class="space"></div>

                <h6>Cascading menu (Desktop only)</h6>
                <p class="text-secondary">Cascading menus allow users to choose from a large variety of choices, by displaying menus with multiple levels of hierarchy.</p>
                <p class="text-secondary">They are organized into menus of parent list items that contain child list items. Child list items appear to right or left of parent list items, depending on where there is room to expand child list items.</p>

                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/component_menus/menu-intro.png"></figure>
                <p class="text-secondary">A parent list item can trigger a cascading menus containing child actions.</p>

                <div class="space"></div>
                <div class="space"></div>

                <h6>Contextual menu</h6>
                <p class="text-secondary">Contextual menus aren’t triggered by a consistent UI element. They appear next to where a user taps, and their actions can vary based on the tap target.</p>

                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/component_menus/dropdown-contextual.png"></figure>
                <p class="text-secondary">To reveal a contextual menu, tap and hold, or right click (desktop), selected text.</p>
                <div class="space"></div>

                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/component_menus/behavior-text-selection.png"></figure>
                <p class="text-secondary">A contextual menu appears next to selected text.</p>

                <div class="space"></div>
                <div class="mdc-divider"></div>
                <div class="space"></div>

                <h4>Behavior</h4>
                <p class="text-secondary">When an option is chosen from a dropdown menu, the element that generates it remains the same.</p>

                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/component_menus/behavior-icon.png"></figure>
                <ol class="text-secondary">
                    <li>Tapping the icon triggers a dropdown menu.</li>
                    <li>Choosing a menu option doesn’t change the icon of the element generating the menu.</li>
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
                <h1 class="article_title">Exposed dropdown menu</h1>
                <div class="space"></div>
                
                <h4>Usage</h4>
                <p class="text-secondary">Exposed dropdown menus display the currently selected menu item above the menu.</p>
                <p class="text-secondary">They can only be used when a single menu item can be chosen at a time.</p>

                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/component_menus/exposed-line-item-intro.png"></figure>
                <p class="text-secondary">This exposed dropdown menu displays the currently selected font above the menu.</p>

                <div class="space"></div>
                <div class="mdc-divider"></div>
                <div class="space"></div>

                <h4>Behavior</h4>
                <p class="text-secondary">Upon selecting an item, an exposed dropdown menu updates to display that item. In some cases, it can accept user input and display a value (whether or not it’s listed as a menu choice).</p>

                <div class="space"></div>
                <div class="mdc-divider"></div>
                <div class="space"></div>

                <h4>Placement</h4>
                <p class="text-secondary">An exposed dropdown menu is positioned below the element that generates the dropdown. On mobile, it can appear in front of the element generating the dropdown.</p>

                <div class="space"></div>
                <div class="mdc-divider"></div>
                <div class="space"></div>

                <h4>Variations</h4>
                <h6 class="text-secondary">An exposed dropdown menu can be customized to have a different appearance or behavior.</h6>
                <div class="space"></div>

                <h6>Text field dropdown menu</h6>
                <p class="text-secondary">Text field dropdown menus look like text fields and display the currently selected item above the menu.</p>
                <p class="text-secondary">On desktop, a text field dropdown menu appears below the element triggering the dropdown. On mobile, a text field dropdown menu can open a native picker.</p>

                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/component_menus/text-field-menu-intro.png"></figure>
                <p class="text-secondary">On desktop, a text field dropdown menu appears below the currently selected menu item.</p>

                <div class="space"></div>
                <div class="space"></div>

                <h6>Editable dropdown menu</h6>
                <p class="text-secondary">An editable dropdown menu displays the currently selected menu item above the menu. It can accept a user-entered value not listed in the menu, but may accept only certain types of values, such as only positive numbers.</p>

                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/component_menus/editable-dropdown-intro.png"></figure>
                <p class="text-secondary">This editable dropdown menu displays the currently selected font size. A user can also enter a value not listed in the menu, such as seven.</p>
            </div>
        </div>
    </section>
</div>
<div class="mdc-divider"></div>
<div class="container">
    <section>
        <div class="row">
            <div class="col xlarge-8 large-10 medium-12">
                <h1 class="article_title">Implementation</h1>
                <div class="space"></div>

                <h6>Related components:</h6>
                <ul class="text-secondary">
                    <li><a href="<?= $prefix ?>components/lists.php">Lists</a></li>
                    <li><a href="<?= $prefix ?>components/text-fields.php">Text fields</a></li>
                </ul>
                <div class="space"></div>

                <h6>Javascript methods:</h6>
                <table class="bg-cards methods-doc">
                    <tr>
                        <th class="bg-app-bar code" colspan="3">
                            <b class="green">void</b>
                            <b class="blue-grey-800">mdc_close_menu</b>
                            (
                            <b class="deep-purple-A700">menu_container</b>
                            )
                        </th>
                    </tr>
                    <tr>
                        <td colspan="3">A method to close an opened menu.</td>
                    </tr>
                    <tr>
                        <td><b class="deep-purple-A700 code">menu_container</b></td>
                        <td class="code">String | jQuery | Element</td>
                        <td>The menu container. can be either a css selector string or a jQuery object or an element.</td>
                    </tr>
                </table>
                <div class="space"></div>
                
                <h4>Dropdown menu</h4>
            </div>
        </div>
        <div class="row">
            <div class="col xlarge-2 large-3 medium-6">
                <div class="space"></div>

                <div class="mdc-menu-container">
                    <button class="menu-button mdc-button btn-contained bg-deep-purple-A700">Menu</button>
                    <div class="mdc-list-container">
                        <div class="mdc-list-group">
                            <button class="mdc-list-item"><div class="text">Item 1</div></button>
                            <button class="mdc-list-item"><div class="text">Item 2</div></button>
                            <button class="mdc-list-item"><div class="text">Item 3</div></button>
                        </div>
                        <div class="mdc-list-group">
                            <button class="mdc-list-item"><div class="text">Item 4</div></button>
                            <button class="mdc-list-item"><div class="text">Item 5</div></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col xlarge-6 large-7 medium-10">
<pre class="bg-app-bar html"><?= htmlspecialchars(
<<<TEXT
<div class="mdc-menu-container">
    <button class="menu-button ...">Menu</button>
    <div class="mdc-list-container">
        <div class="mdc-list-group">
            <button class="mdc-list-item"><div class="text">Item 1</div></button>
            .
            .
            .
        </div>
        .
        .
        .
    </div>
</div>
TEXT
) ?></pre>
            </div>
        </div>

        <div class="row">
            <div class="col xlarge-8 large-10 medium-12">
                <div class="space"></div>
                <div class="mdc-divider"></div>
                <div class="space"></div>
                
                <h4>Exposed dropdown menu</h4>
            </div>
        </div>
        <div class="row">
            <div class="col xlarge-2 large-3 medium-6">
                <div class="space"></div>

                <h6>Default menu</h6>

                <div class="mdc-menu-container select-menu">
                    <div class="menu-button mdc-text-field deep-purple-A700">
                        <div class="material-icon trailing">arrow_drop_down</div>
                        <div class="input"></div>
                        <label class="label">Select menu</label>
                        <input type="hidden" class="select-value">
                    </div>
                    <div class="mdc-list-container">
                        <div class="mdc-list-group">
                            <button class="mdc-list-item" data-value="val_1"><div class="text">Item 1</div></button>
                            <button class="mdc-list-item" data-value="val_2"><div class="text">Item 2</div></button>
                            <button class="mdc-list-item" data-value="val_3"><div class="text">Item 3</div></button>
                        </div>
                    </div>
                </div>

                <div class="mdc-menu-container select-menu">
                    <div class="menu-button mdc-text-field outlined deep-purple-A700">
                        <div class="material-icon trailing">arrow_drop_down</div>
                        <div class="input"></div>
                        <label class="label">Select menu</label>
                        <input type="hidden" class="select-value">
                    </div>
                    <div class="mdc-list-container">
                        <div class="mdc-list-group">
                            <button class="mdc-list-item" data-value="val_1"><div class="text">Item 1</div></button>
                            <button class="mdc-list-item" data-value="val_2"><div class="text">Item 2</div></button>
                            <button class="mdc-list-item" data-value="val_3"><div class="text">Item 3</div></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col xlarge-6 large-7 medium-10">
<pre class="bg-app-bar html"><?= htmlspecialchars(
<<<TEXT
<div class="mdc-menu-container select-menu">
    <div class="menu-button mdc-text-field deep-purple-A700">
        <div class="material-icon trailing">arrow_drop_down</div>
        <div class="input"></div>
        <label class="label">Select menu</label>
        <input type="hidden" class="select-value" name="select_menu_1">
    </div>
    <div class="mdc-list-container">
        <div class="mdc-list-group">
            <button class="mdc-list-item" data-value="val_1"><div class="text">Item 1</div></button>
            .
            .
            .
        </div>
        .
        .
        .
    </div>
</div>
TEXT
) ?></pre>
            </div>
        </div>
    </section>
</div>

</body>
</html>