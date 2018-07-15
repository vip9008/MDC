<?php
$language = "en-US";
$direction = "ltr";

$css_files = [
];
$js_files = [
];

$head_title = "MDC v2";

$topAppBarColor = "bg-blue-grey-900";
$topAppBarTitle = "Typography - Understanding typography";

$primaryColor = "indigo";
$accentColor = "blue";

$prefix = "../";
$url = $prefix."typography/understanding-typography.php";
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
                <h1 class="article_title">Understanding typography</h1>
                <h5 class="text-secondary">Typography expresses hierarchy and brand presence.</h5>
            </div>
        </div>
    </section>
</div>
<div class="mdc-divider"></div>
<div class="container">
    <section>
        <div class="row">
            <div class="col xlarge-6 large-9 medium-12">
                <h1 class="article_title">Type properties</h1>
                <div class="space"></div>
                <p class="text-secondary">A typeface is a collection of letters. While each letter is unique, certain shapes are shared across letters. A typeface represents shared patterns across a collection of letters.</p>
                <p class="text-secondary">Typefaces that are selected for their style, legibility, and readability are most effective when following the fundamental principles of typographic design.</p>
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/typography_understanding_typography/anatomy.png"></figure>
                <p class="text-secondary">Names of letterform parts: aperture, ascender, baseline, cap height, descender, leading, letter-spacing, sans serif, serif, stem, stroke, x-height.</p>

                <div class="space"></div>

                <h5>Letter spacing examples</h5>
                <p class="text-secondary">The <b>baseline</b> is the invisible line upon which a line of text rests. In Material Design, the baseline is an important specification in measuring the vertical distance between text and an element.</p>

                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/typography_understanding_typography/baseline.png"></figure>
                <p class="text-secondary">The baseline.</p>
                <div class="space"></div>

                <h6>4dp grid</h6>
                <p class="text-secondary">Type aligns to the 4dp baseline grid.</p>

                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/typography_understanding_typography/type-setting-4dp-lineheight.png"></figure>
                <p class="text-secondary">Regardless of pt / sp size, a text’s baseline must sit on the 4dp grid. Line-height must be a value divisible by 4 to maintain the grid.</p>
                <div class="space"></div>

                <h6>Measurement from the baseline</h6>
                <p class="text-secondary">Specify distances from UI elements from the baseline. Baseline values are software-agnostic, so they work in any design program, and work with the grid. On Android and iOS, code can be translated from baseline-relative specs into padding. For the web, automate the calculation using Sass or CSS.</p>
            </div>
        </div>
        <div class="row">
            <div class="col xlarge-3 large-4 medium-6 small-4">
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/typography_understanding_typography/type-setting-baseline.png"></figure>
                <p class="text-secondary">Reference baselines for vertical alignment, instead of bounding boxes. This produces more accurate implementation across design software and platforms.</p>
                <div class="space"></div>
            </div>
            <div class="col xlarge-3 large-4 medium-6 small-4">
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/typography_understanding_typography/type-setting-ex1.png"></figure>
                <p class="text-secondary">Measure text in relation to other components.</p>
                <div class="space"></div>
            </div>
        </div>
        <div class="row">
            <div class="col xlarge-6 large-9 medium-12">
                <div class="mdc-divider"></div>
                <div class="space"></div>

                <h4>Cap height</h4>
                <p class="text-secondary"><b>Cap height</b> refers to the height of a typeface’s flat capital letters (such as M or I) measured from the baseline. Round and pointed capital letters, such as S and A, are optically adjusted by being drawn with a slight overshoot above the cap height to achieve the effect of being the same size. Every typeface has a unique cap height.</p>

                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/typography_understanding_typography/cap-height.png"></figure>
                <p class="text-secondary">Cap height.</p>

                <div class="space"></div>
                <div class="mdc-divider"></div>
                <div class="space"></div>

                <h4>X-height</h4>
                <p class="text-secondary"><b>X-height</b> refers to the height of the lowercase x for a typeface, and it indicates how tall or short each glyph in a typeface will be.</p>
                <p class="text-secondary">Typefaces with tall x-heights have better legibility at small font sizes, as the white space within each letter is more legible.</p>

                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/typography_understanding_typography/x-height.png"></figure>
                <p class="text-secondary">The height of a typeface’s lower-case x determines its x-height.</p>

                <div class="space"></div>
                <div class="mdc-divider"></div>
                <div class="space"></div>

                <h4>Ascenders and descenders</h4>
                <p class="text-secondary"><b>Ascenders</b> are an upward vertical stroke found in certain lowercase letters that extend beyond either the cap height or baseline. <b>Descenders</b> are the downward vertical stroke in these letters. In some cases, a collision between these strokes can occur when the <b>line height</b> (the vertical distance between baselines) is too tight.</p>

                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/typography_understanding_typography/ascender-descender.png"></figure>
                <p class="text-secondary">Ascenders and descender.</p>

                <div class="space"></div>
                <div class="mdc-divider"></div>
                <div class="space"></div>

                <h4>Weight</h4>
                <p class="text-secondary"><b>Weight</b> refers to the relative thickness of a font’s stroke. A typeface can come in many weights; and four to six weights is a typical number available for a typeface.</p>

                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/typography_understanding_typography/weight.png"></figure>
                <p class="text-secondary">Common weights:</p>
                <ol class="text-secondary">
                    <li>Light</li>
                    <li>Regular</li>
                    <li>Medium</li>
                    <li>Bold</li>
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
                <h1 class="article_title">Type classification</h1>
                <div class="space"></div>

                <h4>Serif</h4>
                <p class="text-secondary">A <b>serif</b> is a small shape or projection that appears at the beginning or end of a stroke on a letter. Typeface with that have serifs are called a serif typeface. Serif fonts are classified as one of the following:</p>
                <p class="text-secondary"><b>Old-Style serifs</b> resemble writing in ink, with:</p>
                <ul class="text-secondary">
                    <li>Low contrast between thick and thin strokes</li>
                    <li>Diagonal stress in the strokes</li>
                    <li>Slanted serifs on lower-case ascenders</li>
                </ul>
                <div class="space"></div>

                <p class="text-secondary"><b>Transitional serifs</b> have:</p>
                <ul class="text-secondary">
                    <li>High contrast between thick and thin strokes</li>
                    <li>Medium-High x-height</li>
                    <li>Vertical stress in the strokes</li>
                    <li>Bracketed serifs</li>
                </ul>
                <div class="space"></div>

                <p class="text-secondary"><b>Didone or neoclassical serifs</b> have:</p>
                <ul class="text-secondary">
                    <li>Very high contrast between thick and thin strokes</li>
                    <li>Vertical stress in the strokes</li>
                    <li>“Ball” terminal strokes.</li>
                </ul>
                <div class="space"></div>

                <p class="text-secondary"><b>Slab serifs</b> have:</p>
                <ul class="text-secondary">
                    <li>Heavy serifs with imperceptible differences between the stroke weight</li>
                    <li>Minimal or no bracketing</li>
                </ul>
                <div class="space"></div>

                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/typography_understanding_typography/serif.png"></figure>
                <ol class="text-secondary">
                    <li>EB Garamond, old-style serif</li>
                    <li>Libre Baskerville, transitional serif </li>
                    <li>Libre Bodoni, didone / neoclassical serif</li>
                    <li>Bitter, slab serif</li>
                </ol>

                <div class="space"></div>
                <div class="mdc-divider"></div>
                <div class="space"></div>

                <h4>Sans Serif</h4>
                <p class="text-secondary">A typeface without serifs is called a sans serif typeface, from the French word “sans” that means "without." Sans serifs can be classified as one of the following:</p>
                <ul class="text-secondary">
                    <li><b>Grotesque:</b> Low contrast between thick and thin strokes, vertical or no observable stress</li>
                    <li><b>Humanist:</b> Medium contrast between thick and thin strokes, slanted stress</li>
                    <li><b>Geometric:</b> Low contrast between thick and thin strokes, with vertical stress, and circular round forms</li>
                </ul>

                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/typography_understanding_typography/san-serif.png"></figure>
                <ol class="text-secondary">
                    <li>Work Sans, grotesque sans serif</li>
                    <li>Alegreya Sans, humanist sans serif</li>
                    <li>Quicksand, geometric sans serif</li>
                </ol>

                <div class="space"></div>
                <div class="mdc-divider"></div>
                <div class="space"></div>

                <h4>Monospace</h4>
                <p class="text-secondary">Monospace typefaces display all characters with the same width.</p>

                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/typography_understanding_typography/mono.png"></figure>
                <ol class="text-secondary">
                    <li>Roboto Mono, monospace</li>
                    <li>Space Mono, monospace</li>
                    <li>VT323, monospace</li>
                </ol>

                <div class="space"></div>
                <div class="mdc-divider"></div>
                <div class="space"></div>

                <h4>Handwriting</h4>
                <p class="text-secondary">Handwriting typefaces are unconventional with a natural, handwritten feel. These typically are used as H1 - H6 in your type scale. They come in the following forms:</p>
                <ul class="text-secondary">
                    <li><b>Black letter:</b> High contrast, narrow, with straight lines and angular curves</li>
                    <li><b>Script:</b> Replication of calligraphic styles of writing (more formal)</li>
                    <li><b>Handwriting:</b> Replication of handwriting (less formal)</li>
                </ul>

                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/typography_understanding_typography/handwriting.png"></figure>
                <ol class="text-secondary">
                    <li>UnifrakturMaguntia, black letter</li>
                    <li>Dancing Script, script</li>
                    <li>Indie Flower, handwriting</li>
                </ol>

                <div class="space"></div>
                <div class="mdc-divider"></div>
                <div class="space"></div>

                <h4>Display</h4>
                <p class="text-secondary">A miscellaneous category for all classification types that are only suitable for use at large point sizes. Display fonts typically are used as H1 - H6 in your type scale.</p>

                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/typography_understanding_typography/display.png"></figure>
                <ol class="text-secondary">
                    <li>Shrikhand, display</li>
                    <li>Chewy, display</li>
                    <li>Faster One, display</li>
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
                <h1 class="article_title">Readability</h1>
                <div class="space"></div>

                <p class="text-secondary">While legibility is determined by the characters in a typeface, <b>readability</b> refers to how easy it is to read words or blocks of text, which is affected by the style of a typeface.</p>
                <div class="space"></div>

                <h4>Letter-spacing</h4>
                <p class="text-secondary">Letter-spacing, also called tracking, refers to the uniform adjustment of the space between letters in a piece of text.</p>
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/typography_understanding_typography/letterspacing.png"></figure>
                <div class="space"></div>

                <p class="text-secondary">Larger type sizes, such as headlines, use tighter letter-spacing to improve readability and reduce space between letters.</p>
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/typography_understanding_typography/readability-tight-tracking.png"></figure>
                <p class="text-secondary">Tighter letter-spacing.</p>
                <div class="space"></div>

                <p class="text-secondary">For smaller type sizes, looser letter spacing can improve readability as more space between letters increases contrast between each letter shape. Text in all caps, even at small type sizes, has improved readability because of its added letter spacing.</p>
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/typography_understanding_typography/readability-looser-tracking.png"></figure>
                <p class="text-secondary">Looser letter-spacing.</p>
                <div class="space"></div>

                <h6>Tabular figures</h6>
                <p class="text-secondary">Use tabular figures (also known as monospaced numbers), rather than proportional digits, in tables or places where values may change often.</p>
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/typography_understanding_typography/readability-tabular-figures.png"></figure>
                <p class="text-secondary">Tabular figures keep values optically aligned for better scanning..</p>

                <div class="space"></div>
                <div class="mdc-divider"></div>
                <div class="space"></div>

                <h4>Line length</h4>
                <p class="text-secondary">Line lengths for body text are usually between 40 to 60 characters. In areas with wider line lengths, such as desktop, longer lines that contain up to 120 characters will need an increased line height from 20sp to 24sp.</p>

                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/typography_understanding_typography/readability-ideal-linelength.png"></figure>
                <p class="text-secondary">The ideal line length is 40-60 characters per line for English body text.</p>
                <div class="space"></div>

                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/typography_understanding_typography/readability-short-linelength.png"></figure>
                <p class="text-secondary">The ideal line length for short lines of English text is 20-40 characters per line.</p>

                <div class="space"></div>
                <div class="mdc-divider"></div>
                <div class="space"></div>

                <h4>Line height</h4>
                <p class="text-secondary">Line height, also known as leading, controls the amount of space between baselines in a block of text. A text’s line height is proportional to its type size.</p>

                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/typography_understanding_typography/readability-line-height.png"></figure>
                <ol class="text-secondary">
                    <li>Type size 14, Line-height 20dp</li>
                    <li>Type size 20, Line-height 28dp</li>
                </ol>

                <div class="space"></div>
                <div class="mdc-divider"></div>
                <div class="space"></div>

                <h4>Paragraph spacing</h4>
                <p class="text-secondary">Keep paragraph spacing in the range between .75x and 1.25x of the type size.</p>

                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/typography_understanding_typography/paragraph-spacing.png"></figure>
                <p class="text-secondary">Type size 20sp, line-height 30dp, paragraph spacing 28dp.</p>

                <div class="space"></div>
                <div class="mdc-divider"></div>
                <div class="space"></div>

                <h4>Type alignment</h4>
                <p class="text-secondary">Type alignment controls how text aligns in the space it appears. There are three type alignments:</p>
                <ul class="text-secondary">
                    <li>Left-aligned: when text is aligned to the left margin</li>
                    <li>Right-aligned: when text is aligned to the right margin</li>
                    <li>Centered: when text is aligned to the center of the area it is set in</li>
                </ul>
                <div class="space"></div>

                <h6>Left-aligned</h6>
                <p class="text-secondary">Left-aligned text is the most common setting for left-to-right languages such as English.</p>

                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/typography_understanding_typography/typealign-left.png"></figure>
                <p class="text-secondary">Left-aligned text applied to body copy.</p>
                <div class="space"></div>

                <h6>Right-aligned</h6>
                <p class="text-secondary">Right-aligned text is the most common setting for right-to-left languages, such as Arabic and Hebrew.</p>
                <p class="text-secondary">Left-to-right languages can use right-aligned text, though it is best for distinguishing short typographic elements within a layout (such as side notes), and is not recommended for long copy.</p>

                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/typography_understanding_typography/typealign-right.png"></figure>
                <p class="text-secondary">Right-aligned text applied to a side note.</p>
                <div class="space"></div>

                <h6>Centered</h6>
                <p class="text-secondary">Centered text is best used to distinguishing short typographic elements within a layout (such as pull quotes), and is not recommended for long copy.</p>

                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/typography_understanding_typography/typealign-center.png"></figure>
                <p class="text-secondary">Center-aligned text applied to a pull quote.</p>
            </div>
        </div>
    </section>
</div>
<div class="mdc-divider"></div>
<div class="container">
    <section>
        <div class="row">
            <div class="col xlarge-6 large-9 medium-12">
                <h1 class="article_title">System fonts</h1>
                <div class="space"></div>

                <p class="text-secondary">System fonts come pre-installed on your computer or device. They typically have wide language support and no licensing costs for developers. Using the system default font in your app font unites the consistency of the platform with your app’s look and feel. However, because they appear in many places on devices, they may not stand out.</p>
                <div class="space"></div>

                <h4>Using system fonts</h4>
                <p class="text-secondary">Native system typefaces should be used for large blocks of text and any text below 14sp.</p>
                <p class="text-secondary">Roboto is the default system font for Android. For platforms outside of Android and web products, use a system typeface that is preferred on that platform. For example, iOS applications should use Apple’s San Francisco font.</p>
            </div>
        </div>
        <div class="row">
            <div class="col xlarge-3 large-4 medium-6 small-4">
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/typography_understanding_typography/system-fonts-android-roboto.png"></figure>
                <h6>Android</h6>
                <p class="text-secondary">Roboto system font</p>
                <div class="space"></div>
            </div>
            <div class="col xlarge-3 large-4 medium-6 small-4">
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/typography_understanding_typography/system-fonts-ios-sf.png"></figure>
                <h6>iOS</h6>
                <p class="text-secondary">San Francisco system font</p>
                <div class="space"></div>
            </div>
        </div>
    </section>
</div>

<?php include $prefix."_includes/footer.php"; ?>

</body>
</html>