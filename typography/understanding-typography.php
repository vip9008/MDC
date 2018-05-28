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
    "css/mdc.button.css",
];
$js_files = [
    "js/mdc.list.js",
    "js/mdc.nav.drawer.js",
    "js/mdc.top.app.bar.js",
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

<body>

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
            <div class="col xlarge-2 large-3 medium-4">
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/typography_understanding_typography/type-setting-baseline.png"></figure>
                <p class="text-secondary">Reference baselines for vertical alignment, instead of bounding boxes. This produces more accurate implementation across design software and platforms.</p>
                <div class="space"></div>
            </div>
            <div class="col xlarge-2 large-3 medium-4">
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
            </div>
        </div>
    </section>
</div>

</body>
</html>