<?php
$language = "en-US";
$direction = "ltr";

$css_files = [
];
$js_files = [
];

$head_title = "MDC v2";

$topAppBarColor = "bg-blue-grey-900";
$topAppBarTitle = "Environment - Elevation";

$primaryColor = "indigo";
$accentColor = "blue";

$prefix = "../";
$url = $prefix."environment/elevation.php";
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
                <h1 class="article_title">Elevation</h1>
                <h5 class="text-secondary">Elevation is the relative distance between two surfaces along the z-axis.</h5>
            </div>
        </div>
    </section>
</div>
<div class="mdc-divider"></div>
<div class="container">
    <section>
        <div class="row">
            <div class="col xlarge-6 large-9 medium-12">
                <h1 class="article_title">Elevation in Material Design</h1>
                <div class="space"></div>

                <h4>Measuring elevation</h4>
                <p class="text-secondary">Elevation in Material Design is measured as the distance between Material surfaces. The distance from the front of one Material surface to the front of another is measured along the z-axis in density-independent pixels (dps) and depicted (by default) using shadows.</p>

                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/environment_elevation/elevation-materialdesign.png"></figure>
                <ol>
                    <li class="text-secondary">One surface at 1dp elevation and another surface at 8dp elevation, as viewed from the front</li>
                    <li class="text-secondary">The difference in elevation between the two surfaces is 7dp, as viewed from the side</li>
                </ol>

                <div class="space"></div>

                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/environment_elevation/elevation-materialdesign-2.png"></figure>
                <p class="text-secondary">Surfaces at the same elevation can appear differently when other surfaces are behind them.</p>
                <ol>
                    <li class="text-secondary">One surface at 1dp elevation and another surface at 8dp elevation, as viewed from the front</li>
                    <li class="text-secondary">The difference in elevation between the two surfaces is 7dp, as viewed from the side</li>
                </ol>

                <div class="space"></div>
                <div class="mdc-divider"></div>
                <div class="space"></div>

                <h4>The elevation system</h4>
                <p class="text-secondary">All Material Design surfaces, and components, have elevation values.</p>
                <p>Surfaces at different elevations do the following:</p>
                <ul>
                    <li class="text-secondary">Allow surfaces to move in front of and behind other surfaces, such as content scrolling behind app bars</li>
                    <li class="text-secondary">Reflect spatial relationships, such as how a floating action button’s shadow indicates it is separate from a card collection</li>
                    <li class="text-secondary">Focus attention on the highest elevation, such as a dialog temporarily appearing in front of other surfaces</li>
                </ul>
                <p class="text-secondary">Elevation can be depicted using shadows or other visual cues, such as surface fills or opacities.</p>
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/environment_elevation/measuringelevation-intro-alt.png"></figure>
                <p class="text-secondary">Material Design displays elevation using shadows.</p>

                <div class="space"></div>
                <div class="mdc-divider"></div>
                <div class="space"></div>

                <h4>Resting elevation</h4>
                <p class="text-secondary">Resting elevations are starting elevation values given to components by default. Components move from resting elevations in response to the user or a system event. All Material components have resting elevations that are the same for each type of component. For example, all cards have the same resting elevations as each other, and a dialog has the same resting elevation as other dialogs.</p>
                <h6>Resting elevation and environment</h6>
                <p class="text-secondary">Resting elevations vary based on the environment, platform, or app. The resting elevations on mobile are designed to provide visual cues, like shadows, to indicate when components are interactive. In contrast, resting elevations on desktop are shallower because other cues, like hover states, communicate when a component is interactive. For example, cards at 0dp elevation on desktop are outlined with a stroke.</p>
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/environment_elevation/restingelevation-baselineelevation.png"></figure>
                <ol>
                    <li class="text-secondary">Resting elevations on mobile for an app bar (A), cards (B), and a floating action button (C), as viewed from the front</li>
                    <li class="text-secondary">The same components, as viewed from the side</li>
                </ol>

                <div class="space"></div>

                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/environment_elevation/restingelevation-modifiedelevation.png"></figure>
                <ol>
                    <li class="text-secondary">Resting elevations on desktop for an app bar (A), floating action button (B), and cards (C), as viewed from the front</li>
                    <li class="text-secondary">The same components, as viewed from the side</li>
                </ol>

                <div class="space"></div>
                <div class="mdc-divider"></div>
                <div class="space"></div>

                <h4>Changing elevation</h4>
                <p class="text-secondary">Components can change elevation in response to user input or system events. When this happens, components move to preset dynamic elevation offsets, which are the default elevations components move to when not resting.</p>
                <p class="text-secondary">Dynamic elevation offsets are the same across each type of component. For example, all cards use the same offset as other cards, and all floating action buttons use the same offset as other floating action buttons.</p>
                <p class="text-secondary">Once the user input (or system event) is completed or cancelled, the component swiftly returns to its resting elevation.</p>

                <div class="space"></div>
                <div class="mdc-divider"></div>
                <div class="space"></div>

                <h4>Elevation interference</h4>
                <p class="text-secondary">When a component moves between its resting elevation and dynamic elevation offset, it shouldn’t collide with other components.</p>
                <p class="text-secondary">To avoid these kinds of collisions, components can move out of the way. For example, if increasing a card’s elevation positions it to pass through a floating action button, that button can disappear or move off-screen before the collision occurs.</p>
                <p class="text-secondary">You can also design your app’s layout to avoid collisions, such as placing a floating action button beside cards, instead of directly above them.</p>
            </div>
        </div>
    </section>
</div>
<div class="mdc-divider"></div>
<div class="container">
    <section>
        <div class="row">
            <div class="col xlarge-6 large-9 medium-12">
                <h1 class="article_title">Depicting elevation</h1>
                <div class="space"></div>
                <p class="text-secondary">To successfully depict elevation, a surface must show:</p>
                <ol>
                    <li class="text-secondary">Surface edges, contrasting the surface from its surroundings</li>
                    <li class="text-secondary">Overlap with other surfaces, either at rest or in motion</li>
                    <li class="text-secondary">Distance from other surfaces</li>
                </ol>

                <div class="space"></div>

                <h4>Surface edges</h4>
                <p class="text-secondary">Edges help to express the tactile quality of Material surfaces. They show where one surface ends and another begins by separating different parts of a UI into identifiable components. For example, the edges of an app bar show that it is separate from a grid list, communicating to the user that the grid list scrolls independently of the app bar.</p>
                <p class="text-secondary">By default, Material surfaces use shadows to indicate edges. Other methods can be used to indicate edges, such as:</p>
                <ul>
                    <li class="text-secondary">Giving surfaces different colors</li>
                    <li class="text-secondary">Giving surfaces different opacities</li>
                </ul>
                <p class="text-secondary">Edges must create sufficient contrast between surfaces (by meeting or exceeding accessible contrast ratios) for them to be seen as separate from one another.</p>
            </div>
        </div>
        <div class="row">
            <div class="col xlarge-3 large-4 medium-6 small-4">
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/environment_elevation/othertechniques-edges-none.png"></figure>
                <p class="text-secondary">Without showing edges, it’s unclear if this image contains one or more surfaces.</p>
            </div>
            <div class="col xlarge-3 large-4 medium-6 small-4">
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/environment_elevation/othertechniques-edges-fill.png"></figure>
                <p class="text-secondary">Contrasting surface fills provide enough contrast to make it clear that this image has two surfaces.</p>
            </div>
        </div>
        <div class="row">
            <div class="col xlarge-6 large-9 medium-12">
                <div class="space"></div>
                <div class="mdc-divider"></div>
                <div class="space"></div>

                <h4>Surface overlap</h4>
                <p class="text-secondary">When a surface overlaps another surface, either partially or completely, it indicates that the two surfaces occupy different elevations (but not the degree, or amount, of difference between them). Surfaces at higher elevations appear in front of those at lower elevations, meaning they are positioned at different elevations along the z-axis. Surfaces may overlap one another by default, or become overlapped as a result of motion that changes their position in the UI.</p>
                <p class="text-secondary">When surfaces have different opacities or insufficient contrast from one another, it can make it difficult to tell which surface is in front of another. Avoid ambiguous overlap by ensuring surface edges are clearly defined.</p>
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/environment_elevation/surfaceedges-grid-1.png"></figure>
                <ol>
                    <li class="text-secondary">Shadows show surface edges, surface overlap, and the degree of elevation.</li>
                    <li class="text-secondary">Different surface colors show surface edges and overlap, but not the degree of elevation.</li>
                    <li class="text-secondary">Opacity shows surface edges and overlap, but not the degree of elevation.</li>
                </ol>

                <div class="space"></div>
                <div class="mdc-divider"></div>
                <div class="space"></div>

                <h4>Distance</h4>
                <p class="text-secondary">The degree of elevation difference between surfaces can be expressed using scrimmed backgrounds, or using shadows.</p>
                <h6>Scrimmed backgrounds</h6>
                <p class="text-secondary">When the background is scrimmed in a UI, it expresses that the content above it is at a higher elevation. Scrimmed backgrounds express large, but unspecified, amounts of elevation.</p>
            </div>
        </div>
        <div class="row">
            <div class="col xlarge-3 large-4 medium-6 small-4">
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/environment_elevation/dimmedbackgrounds-do-1.png"></figure>
                <p class="text-secondary">A scrimmed background can indicate surface overlap, but not the degree of elevation.</p>
                <div class="space"></div>
            </div>
        </div>
        <div class="row">
            <div class="col xlarge-6 large-9 medium-12">
                <h6>Shadows</h6>
                <p class="text-secondary">Shadows can express the degree of elevation between surfaces in ways that other techniques cannot.</p>
                <p class="text-secondary">Both a shadow’s size and amount of softness or diffusion express the degree of distance between two surfaces. For example, a surface with a shadow that is small and sharp indicates a surface’s close proximity to the surface behind it. Larger, softer shadows express more distance.</p>
                <p class="text-secondary">Subtle differences in shadow size and diffusion communicate:</p>
                <ul>
                    <li class="text-secondary">A detailed degree of distance between two surfaces</li>
                    <li class="text-secondary">Elevation differences between non-overlapping surfaces</li>
                </ul>
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/environment_elevation/expressingelevation-1.png"></figure>
                <p class="text-secondary">Shadows show the edges of a surface and its degree of elevation against the background. They also make differences in surface elevations perceptible between non-overlapping surfaces.</p>
            </div>
        </div>
    </section>
</div>
<div class="mdc-divider"></div>
<div class="container">
    <section>
        <div class="row">
            <div class="col xlarge-6 large-9 medium-12">
                <h1 class="article_title">Elevation hierarchy</h1>
                <p class="text-secondary">Content relates to other content depending on whether they are at similar or different elevations.</p>
                <div class="space"></div>
                <h4>Content at different elevations</h4>
                <p class="text-secondary">Surfaces in front of other surfaces typically:</p>
                <ol>
                    <li class="text-secondary">Contain more important content</li>
                    <li class="text-secondary">Focus attention, such as a dialog</li>
                    <li class="text-secondary">Control the surfaces behind it, such as actions in an app bar</li>
                </ol>

                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/environment_elevation/abovesurface-footnote-1.png"></figure>
                <p class="text-secondary">Front (1) and side (2) views of a desktop interface demonstrate how more important content that is of primary focus (B) appears in front of content that is of secondary focus, like footnotes (A).</p>

                <div class="space"></div>

                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/environment_elevation/abovesurface-bottomsheet-1.png"></figure>
                <p class="text-secondary">Front (1) and side (2) views of a mobile interface demonstrate how placing content on a higher surface, like a bottom sheet (A), can focus attention while maintaining context.</p>

                <div class="space"></div>
                <div class="mdc-divider"></div>
                <div class="space"></div>

                <h4>Content on coplanar surfaces</h4>
                <p class="text-secondary">Positioning surfaces at the same elevation makes them coplanar, and may indicate they contain content of equal importance as one another. For example, all cards in a collection have equal importance.</p>
                <p class="text-secondary">Surfaces that don’t express elevation can appear coplanar. For surfaces that don’t express elevation, you can communicate hierarchy differences through their content and by adjusting their horizontal and vertical layout position to suggest their relative hierarchy levels.</p>
                <p class="text-secondary">For example, on a dashboard with coplanar surfaces, detail content is placed next to parent content, based on the direction a language’s text is displayed.</p>

                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/environment_elevation/coplanar-hierarchy-1.png"></figure>
                <ol>
                    <li class="text-secondary">A desktop UI, as viewed from the front, demonstrates how the left-to-right positioning of surfaces at the same elevation (A, B, C) communicates hierarchy based on English language content.</li>
                    <li class="text-secondary">The same components, as viewed from the side</li>
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
                <h1 class="article_title">Default elevations</h1>
                <p class="text-secondary">All elements have default values for resting elevation and dynamic elevation offsets. Certain components are positioned at higher elevations than others, establishing a consistent elevation order across all components. For example, dialogs always appear in front of all other components.</p>
                <p class="text-secondary">The following table lists default values for resting elevation and dynamic elevation offsets.</p>
                <div class="space"></div>
                <h4>Table of default elevation values</h4>
                
                <table class="bg-cards">
                    <thead class="bg-app-bar">
                        <th>
                            <span class="bold">Component</span>
                        </th>
                        <th>
                            <span class="bold">Default elevation values (z-axis)</span>
                        </th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Dialog</td>
                            <td>24</td>
                        </tr>
                        <tr>
                            <td>Modal bottom sheet<br>Modal side sheet</td>
                            <td>16</td>
                        </tr>
                        <tr>
                            <td>Navigation drawer</td>
                            <td>16</td>
                        </tr>
                        <tr>
                            <td>Floating action button (FAB - pressed)</td>
                            <td>12</td>
                        </tr>
                        <tr>
                            <td>Standard bottom sheet<br>Standard side sheet</td>
                            <td>8</td>
                        </tr>
                        <tr>
                            <td>Bottom navigation bar</td>
                            <td>8</td>
                        </tr>
                        <tr>
                            <td>Bottom app bar</td>
                            <td>8</td>
                        </tr>
                        <tr>
                            <td>Menus and sub menus</td>
                            <td>8</td>
                        </tr>
                        <tr>
                            <td>Card (when picked up)</td>
                            <td>8</td>
                        </tr>
                        <tr>
                            <td>Contained button (pressed state)</td>
                            <td>8</td>
                        </tr>
                        <tr>
                            <td>Floating action button (FAB - resting elevation)<br>Snackbar</td>
                            <td>6</td>
                        </tr>
                        <tr>
                            <td>Top app bar (scrolled state)</td>
                            <td>4</td>
                        </tr>
                        <tr>
                            <td>Top app bar (resting elevation)</td>
                            <td>0 or 4</td>
                        </tr>
                        <tr>
                            <td>Refresh indicator<br>Search bar (scrolled state)</td>
                            <td>3</td>
                        </tr>
                        <tr>
                            <td>Contained button (resting elevation)</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>Search bar (resting elevation)</td>
                            <td>1</td>
                        </tr>
                        <tr>
                            <td>Card (resting elevation)</td>
                            <td>1</td>
                        </tr>
                        <tr>
                            <td>Switch</td>
                            <td>1</td>
                        </tr>
                        <tr>
                            <td>Text button</td>
                            <td>0</td>
                        </tr>
                        <tr>
                            <td>Standard side sheet</td>
                            <td>0</td>
                        </tr>
                    </tbody>
                </table>

                <div class="space"></div>
                <div class="mdc-divider"></div>
                <div class="space"></div>

                <h4>Diagram of default elevation values</h4>
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/environment_elevation/baselineelevation-chart.png"></figure>
                <p class="text-secondary">Cross-section diagram showing the resting elevation and dynamic elevation offsets for multiple components.</p>
            </div>
        </div>
    </section>
</div>

<?php include $prefix."_includes/footer.php"; ?>

</body>
</html>