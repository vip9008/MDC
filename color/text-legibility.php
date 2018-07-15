<?php
$language = "en-US";
$direction = "ltr";

$css_files = [
];
$js_files = [
];

$head_title = "MDC v2";

$topAppBarColor = "bg-blue-grey-900";
$topAppBarTitle = "Color - Text legibility";

$primaryColor = "indigo";
$accentColor = "blue";

$prefix = "../";
$url = $prefix."color/text-legibility.php";
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
                <h1 class="article_title">Text legibility</h1>
                <h5 class="text-secondary">Color plays an important role in text legibility.</h5>
            </div>
        </div>
    </section>
</div>
<div class="mdc-divider"></div>
<div class="container">
    <section>
        <div class="row">
            <div class="col xlarge-6 large-9 medium-12">
                <h1 class="article_title">Legibility standards</h1>
                <div class="space"></div>

                <h4>WCAG standards</h4>
                <p class="text-secondary">All text should be legible and meet accessibility standards. <a href="https://www.w3.org/TR/UNDERSTANDING-WCAG20/visual-audio-contrast-contrast.html" target="_blank">The Web Content Accessibility Guidelines (WCAG 2.0)</a> level AA requires a 4.5.1 color contrast between text and background for normal text, and 3:1 to large text.</p>
                <p class="text-secondary">To learn more about color, contrast, and accessibility design, read <a href="<?= $prefix ?>usability/accessibility.php">Material Design Accessibility</a>.</p>
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
                <h1 class="article_title">Text backgrounds</h1>
                <div class="space"></div>

                <h4>Text on colored backgrounds</h4>
                <p class="text-secondary">Black text is recommended for use on light backgrounds, and white text on dark backgrounds. If your app has both light and dark themes, make sure the text is available in a contrasting color against each theme.</p>
                <p class="text-secondary">Colored backgrounds or typography additionally change the rules regarding text opacity and different states of text.</p>

                <div class="space"></div>
                <div class="mdc-divider"></div>
                <div class="space"></div>

                <h4>Using text opacity</h4>
                <p class="text-secondary">Instead of using gray text and icons on top of colored backgrounds, create better contrast by displaying white or black text with reduced opacity.</p>
                <p class="text-secondary">For example, black text displayed at 75% opacity on a green background gives the text an appearance of black, with a hint of green.</p>
                <p class="text-secondary">Alternatively, you can calculate the color of text by doing the following:</p>
                <ul>
                    <li class="text-secondary">Place the color black at reduced opacity in front of a green background</li>
                    <li class="text-secondary">Identify the hex value of the resulting darkened green color</li>
                    <li class="text-secondary">Use that hex value of that color for your text</li>
                </ul>
                <p class="text-secondary">In this case, if the surface behind the text changes color, you must update the hex color as well.</p>
                <div class="space"></div>

                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/color_text_legibility/color-legibility-opacity-baseline-do.png"></figure>
                <p class="text-secondary">Use a transparent version of black on a colored surface to preserve legibility.</p>
                <div class="space"></div>

                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/color_text_legibility/color-legibility-opacity-baseline-dont.png"></figure>
                <p class="text-secondary">Avoid using opaque gray text that isn’t legible on colored surfaces.</p>
                
                <div class="space"></div>
                <div class="mdc-divider"></div>
                <div class="space"></div>

                <h4>Dark text on light backgrounds</h4>
            </div>
        </div>
        <div class="row">
            <div class="col xlarge-3 large-4 medium-6 small-4">
                <p class="text-secondary">Dark text on light backgrounds (shown here as #000000 on #FFFFFF) applies the following opacity levels:</p>
                <ul>
                    <li class="text-secondary">High-emphasis text has an opacity of 87%</li>
                    <li class="text-secondary">Medium-emphasis text and hint text have opacities of 60%</li>
                    <li class="text-secondary">Disabled text has an opacity of 38%</li>
                </ul>
                <div class="space"></div>
            </div>
            <div class="col xlarge-3 large-4 medium-6 small-4">
                <ul class="palette text-colors bg-white">
                    <li class="text-primary">
                        <div class="title">High Emphasis</div>
                        <div class="left">87%</div>
                        <div class="right">#000000</div>
                    </li>
                    <li class="text-secondary">
                        <div class="title">Medium Emphasis</div>
                        <div class="left">60%</div>
                        <div class="right">#000000</div>
                    </li>
                    <li class="text-hint">
                        <div class="title">Disabled</div>
                        <div class="left">38%</div>
                        <div class="right">#000000</div>
                    </li>
                </ul>
                <div class="space"></div>
            </div>
        </div>
        <div class="row">
            <div class="col xlarge-6 large-9 medium-12">
                <div class="space"></div>
                <div class="mdc-divider"></div>
                <div class="space"></div>

                <h4>Light text on dark backgrounds</h4>
            </div>
        </div>
        <div class="row">
            <div class="col xlarge-3 large-4 medium-6 small-4">
                <p class="text-secondary">Light text on dark backgrounds (shown here as #FFFFFF on #000000) applies the following opacity levels:</p>
                <ul>
                    <li class="text-secondary">High-emphasis text has an opacity of 100%</li>
                    <li class="text-secondary">Medium-emphasis text and hint text have opacities of 70%</li>
                    <li class="text-secondary">Disabled text has an opacity of 50%</li>
                </ul>
                <div class="space"></div>
            </div>
            <div class="col xlarge-3 large-4 medium-6 small-4">
                <ul class="palette text-colors bg-black">
                    <li class="text-primary">
                        <div class="title">High Emphasis</div>
                        <div class="left">100%</div>
                        <div class="right">#FFFFFF</div>
                    </li>
                    <li class="text-secondary">
                        <div class="title">Medium Emphasis</div>
                        <div class="left">70%</div>
                        <div class="right">#FFFFFF</div>
                    </li>
                    <li class="text-hint">
                        <div class="title">Disabled</div>
                        <div class="left">50%</div>
                        <div class="right">#FFFFFF</div>
                    </li>
                </ul>
                <div class="space"></div>
            </div>
        </div>
        <div class="row">
            <div class="col xlarge-6 large-9 medium-12">
                <div class="space"></div>
                <div class="mdc-divider"></div>
                <div class="space"></div>

                <h4>Colored text and backgrounds</h4>
                <p class=" text-secondary">Colored text should be used sparingly to draw attention and apply selective emphasis. Ideally colored text should be reserved for text elements such as headlines, buttons, and links.</p>
                <p class=" text-secondary">Use the <a href="https://material.io/tools/color" target="_blank">Material color tool</a> to determine if certain foreground colors used on text pass accessibility standards on background colors.</p>
                <div class="space"></div>
            </div>
        </div>
        <div class="row">
            <div class="col xlarge-3 large-4 medium-6 small-4">
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/color_text_legibility/color-legibility-coloredtextbg-basil.png"></figure>
                <p class="text-secondary">Large headlines and short text snippets are best for colored text.</p>
            </div>
            <div class="col xlarge-3 large-4 medium-6 small-4">
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/color_text_legibility/color-legibility-coloredtextbg-caution-owl.png"></figure>
                <p class="text-secondary">It can be hard to read long body copy that is colored.</p>
            </div>
        </div>
    </section>
</div>
<div class="mdc-divider"></div>
<div class="container">
    <section>
        <div class="row">
            <div class="col xlarge-6 large-9 medium-12">
                <h1 class="article_title">Text types</h1>
                <div class="space"></div>

                <h4>Helper Text</h4>
            </div>
        </div>
        <div class="row">
            <div class="col xlarge-3 large-4 medium-6 small-4">
                <p class="text-secondary">Helper text gives context about a field’s input, such as how the input will be used. It can adopt brand colors, but should be legible as determined by WCAG standards.</p>
                <p class="text-secondary">Helper text on light backgrounds could apply the following opacity levels and default hexes:</p>
                <ul>
                    <li class="text-secondary">High emphasis helper: This text uses a hex value #000000 at 87% opacity</li>
                    <li class="text-secondary">Default color helper text: This text uses a hex value of #000000 at 60% opacity</li>
                    <li class="text-secondary">Default error helper text: This text uses a hex value of #B00020 at 100% opacity</li>
                </ul>
                <div class="space"></div>
            </div>
            <div class="col xlarge-3 large-4 medium-6 small-4">
                <ul class="palette text-colors bg-white">
                    <li class="text-primary">
                        <div class="title">High Emphasis</div>
                        <div class="left">87%</div>
                        <div class="right">#000000</div>
                    </li>
                    <li class="text-secondary">
                        <div class="title">Medium Emphasis</div>
                        <div class="left">70%</div>
                        <div class="right">#000000</div>
                    </li>
                    <li style="color: #B00020;">
                        <div class="title">Error Text</div>
                        <div class="left">100%</div>
                        <div class="right">#B00020</div>
                    </li>
                </ul>
                <div class="space"></div>
            </div>
        </div>
        <div class="row">
            <div class="col xlarge-3 large-4 medium-6 small-4">
                <p class="text-secondary">Helper text on dark backgrounds could apply the following opacity levels and default hexes:</p>
                <ul>
                    <li class="text-secondary">High emphasis helper: This text uses a hex value #FFFFFF at 100% opacity</li>
                    <li class="text-secondary">Default color helper text: This text uses a hex value of #FFFFFF at 70% opacity</li>
                    <li class="text-secondary">Default error helper text: This text uses a hex value of #FF1744 at 100% opacity</li>
                </ul>
                <div class="space"></div>
            </div>
            <div class="col xlarge-3 large-4 medium-6 small-4">
                <ul class="palette text-colors bg-black">
                    <li class="text-primary">
                        <div class="title">High Emphasis</div>
                        <div class="left">100%</div>
                        <div class="right">#FFFFFF</div>
                    </li>
                    <li class="text-secondary">
                        <div class="title">Medium Emphasis</div>
                        <div class="left">70%</div>
                        <div class="right">#FFFFFF</div>
                    </li>
                    <li style="color: #FF1744;">
                        <div class="title">Error Text</div>
                        <div class="left">100%</div>
                        <div class="right">#FF1744</div>
                    </li>
                </ul>
                <div class="space"></div>
            </div>
        </div>
        <div class="row">
            <div class="col xlarge-6 large-9 medium-12">
                <div class="space"></div>
                <div class="mdc-divider"></div>
                <div class="space"></div>

                <h4>Selected Text</h4>
                <p class="text-secondary">To reflect brand, text selection can use an accent of your primary or secondary color.</p>
                <p class="text-secondary">Selected text should be legible against the selection color, and the selection color should contrast the background color. Alternatively, you can display outlines, motion, checkmark icons, or other text treatments to indicate selected text.</p>
                <p class="text-secondary">Learn more about contrast (or try a color contrast analyzer) at <a href="https://webaim.org" target="_blank">webaim.org</a>.</p>
                <div class="space"></div>
            </div>
        </div>
        <div class="row">
            <div class="col xlarge-3 large-4 medium-6 small-4">
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/color_text_legibility/color-legibility-selectedtext-baseline.png"></figure>
                <ol class="text-secondary">
                    <li>Text</li>
                    <li>Text selection color</li>
                    <li>Background</li>
                </ol>
                <div class="space"></div>
            </div>
            <div class="col xlarge-3 large-4 medium-6 small-4">
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/color_text_legibility/color-legibility-selectedtext-reply.png"></figure>
                <p class="text-secondary">Text selection can be customized using your palette accent color.</p>
                <div class="space"></div>
            </div>
        </div>
        <div class="row">
            <div class="col xlarge-6 large-9 medium-12">
                <div class="mdc-divider"></div>
                <div class="space"></div>

                <h4>Icons and Other symbols</h4>
            </div>
        </div>
        <div class="row">
            <div class="col xlarge-3 large-4 medium-6 small-4">
                <p class="text-secondary">Icons and other elements don’t need to meet WCAG legibility standards, but should be as visible as possible to indicate function or communicate information.</p>
                <p class="text-secondary">Dark icons (#000000) or other elements on light backgrounds (#FFFFFF) could apply the following opacity levels:</p>
                <ul>
                    <li class="text-secondary">Active icons have an opacity of 87%</li>
                    <li class="text-secondary">Inactive icons have an opacity of 60%</li>
                    <li class="text-secondary">Disabled icones have an opacity of 38%</li>
                </ul>
                <div class="space"></div>
            </div>
            <div class="col xlarge-3 large-4 medium-6 small-4">
                <ul class="palette text-colors bg-white">
                    <li class="text-primary">
                        <div class="title">Active</div>
                        <div class="left">87%</div>
                        <div class="right">#000000</div>
                    </li>
                    <li class="text-secondary">
                        <div class="title">Inactive</div>
                        <div class="left">60%</div>
                        <div class="right">#000000</div>
                    </li>
                    <li class="text-hint">
                        <div class="title">Disabled</div>
                        <div class="left">38%</div>
                        <div class="right">#000000</div>
                    </li>
                </ul>
                <div class="space"></div>
            </div>
        </div>
        <div class="row">
            <div class="col xlarge-3 large-4 medium-6 small-4">
                <p class="text-secondary">Light icons (#FFFFFF) or other elements on dark backgrounds (#000000) could apply the following opacity levels:</p>
                <ul>
                    <li class="text-secondary">Active icons have an opacity of 100%</li>
                    <li class="text-secondary">Inactive icons have an opacity of 70%</li>
                    <li class="text-secondary">Disabled icones have an opacity of 50%</li>
                </ul>
                <div class="space"></div>
            </div>
            <div class="col xlarge-3 large-4 medium-6 small-4">
                <ul class="palette text-colors bg-black">
                    <li class="text-primary">
                        <div class="title">Active</div>
                        <div class="left">100%</div>
                        <div class="right">#000000</div>
                    </li>
                    <li class="text-secondary">
                        <div class="title">Inactive</div>
                        <div class="left">70%</div>
                        <div class="right">#000000</div>
                    </li>
                    <li class="text-hint">
                        <div class="title">Disabled</div>
                        <div class="left">50%</div>
                        <div class="right">#000000</div>
                    </li>
                </ul>
                <div class="space"></div>
            </div>
        </div>
    </section>
</div>

<?php include $prefix."_includes/footer.php"; ?>

</body>
</html>