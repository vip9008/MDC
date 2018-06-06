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
$topAppBarTitle = "Typography - Language support";

$primaryColor = "indigo";
$accentColor = "blue";

$prefix = "../";
$url = $prefix."typography/language-support.php";
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
                <h1 class="article_title">Language support</h1>
                <h5 class="text-secondary">Language size and display style vary based on whether a character set is English-like, tall, or dense.</h5>
            </div>
        </div>
    </section>
</div>
<div class="mdc-divider"></div>
<div class="container">
    <section>
        <div class="row">
            <div class="col xlarge-6 large-9 medium-12">
                <h1 class="article_title">Language considerations</h1>
                <div class="space"></div>

                <h4>Glyphs</h4>
                <p class="text-secondary">Each written language uses its own set of characters called glyphs.</p>
                <p class="text-secondary">If your UI uses multiple languages, then your typography layout should vary depending on the language. Languages have different average word lengths and heights, affecting how it appears across UIs.</p>

                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/typography_language_support/15-b-language.png"></figure>
                <p class="text-secondary">Typographic glyphs</p>

                <div class="space"></div>
                <div class="mdc-divider"></div>
                <div class="space"></div>

                <h4>Length</h4>
                <p class="text-secondary">Word length can vary greatly across languages, even those that use similar glyphs, such as English and German.</p>

                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/typography_language_support/length.png"></figure>
                <p class="text-secondary">English is often shorter than other European languages. For instance, German has many compound words that are longer, requiring more lines or line spacing.</p>

                <div class="space"></div>
                <div class="mdc-divider"></div>
                <div class="space"></div>

                <h4>Alignment</h4>
                <p class="text-secondary">Some writing systems, like Arabic and Hebrew, are displayed with characters appearing from right to left. Those fonts may appear smaller than Latin ones at the same font-size, requiring adjustments to line spacing and alignment so that the typography works well in that UI for all languages.</p>

                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/typography_language_support/hebrew.png"></figure>
                <p class="text-secondary">Hebrew alignment appears right to left</p>

                <div class="space"></div>
                <div class="mdc-divider"></div>
                <div class="space"></div>

                <h4>Height</h4>
                <p class="text-secondary">Many writing systems require more vertical space than English, so your UI should provide sufficient vertical space for these different systems.</p>

                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/typography_language_support/language-support.png"></figure>
                <p class="text-secondary">While Vietnamese is written with Latin, it has accents that add height to some letters, such as ớ.</p>

                <div class="space"></div>
                <div class="mdc-divider"></div>
                <div class="space"></div>

                <h4>Vertical typesetting</h4>
                <p class="text-secondary">Vertical typesetting, though rarely used, can display characters vertically instead of horizontally.</p>
                <p class="text-secondary">The typography of China, Japan, and Korea is typically monospaced, which means each letter occupies the same amount of space as other letters. It is often set left-to-right, top-to-bottom. It can also be set vertically: top-to-bottom and right-to-left.</p>

                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/typography_language_support/language-2.png"></figure>
                <p class="text-secondary">Horizontal and vertical styles of typesetting</p>

                <div class="space"></div>
                <div class="mdc-divider"></div>
                <div class="space"></div>

                <h4>Language options</h4>
                <p class="text-secondary">More than one typeface may need to be used in the same UI to display multilingual content, when each language uses a different writing system.</p>
                <p class="text-secondary">Writing systems can be grouped into three categories:</p>
                <ul class="text-secondary">
                    <li>English-like</li>
                    <li>Tall</li>
                    <li>Dense</li>
                </ul>
                <div class="space"></div>

                <h6>English-like typefaces</h6>
                <p class="text-secondary">The languages of Western, Central, and Eastern Europe and much of Africa are typically written in the Latin alphabet. Vietnamese is a notable exception in that, while it uses a localized form of the Latin writing system, its accented glyphs can be much taller than those found in Western European languages. The Greek and Cyrillic writing systems are very similar to Latin.</p>
                <div class="space"></div>

                <h6>Tall typefaces</h6>
                <p class="text-secondary">Language scripts that require extra line height to accommodate larger glyphs, including South and Southeast Asian and Middle-Eastern languages, like Arabic, Hindi, Telugu, Thai, and Vietnamese.</p>
                <div class="space"></div>

                <h6>Dense typefaces</h6>
                <p class="text-secondary">Language scripts that require extra line height to accommodate larger glyphs, including Chinese, Japanese, and Korean.</p>
            </div>
        </div>
    </section>
</div>
<div class="mdc-divider"></div>
<div class="container">
    <section>
        <div class="row">
            <div class="col xlarge-6 large-9 medium-12">
                <h1 class="article_title">Noto guidance</h1>
                <div class="space"></div>

                <p class="text-secondary">Noto is the default typeface for all languages not covered by Roboto. Derived from Droid, it’s designed to be visually harmonious across languages and scripts with compatible heights and stroke thicknesses.</p>
                <p class="text-secondary">The family has 93 scripts defined in Unicode version 6.0.</p>

                <div class="space"></div>
                <div class="space"></div>

                <h4>Dense script considerations</h4>
                <p class="text-secondary">Noto Chinese, Japanese, and Korean (CJK) have seven weights that match Roboto, with the same weight settings as English.</p>
                <p class="text-secondary">Type sizes smaller than title styles should make adjustments to the Latin type scale.</p>

                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/typography_language_support/noto-dense.png"></figure>
                <p class="text-secondary">Chinese and Japanese</p>
                <div class="space"></div>

                <p class="text-secondary">Line height is slightly larger than Latin-based characters.</p>
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/typography_language_support/noto-pairing-dense.png"></figure>
                <p class="text-secondary">Line height pairing, Chinese and Japanese</p>

                <div class="space"></div>
                <div class="mdc-divider"></div>
                <div class="space"></div>

                <h4>Tall script considerations</h4>
                <p class="text-secondary">Noto supports tall scripts used in South and Southeast Asian and Middle Eastern languages, including Arabic, Hindi, and Thai. Use regular weight, as medium weight is unavailable in Noto. Avoid using the bold weight, as bold is too heavy.</p>
                <p class="text-secondary">Type sizes smaller than title styles should make adjustments to the Latin type scale.</p>
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/typography_language_support/noto-tall.png"></figure>
                <p class="text-secondary">Thai and Devanagari</p>
                <div class="space"></div>

                <p class="text-secondary">Tall script line height is slightly larger than Latin-based characters.</p>
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/typography_language_support/noto-pairing-tall.png"></figure>
                <p class="text-secondary">Line height pairing example, Thai and Devanagari</p>
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
                <h1 class="article_title">Language categories reference</h1>
                <div class="space"></div>

                <p class="text-secondary">For ease of internationalization, Google has categorized languages into three categories: English-like, tall, and dense.</p>
                <p class="text-secondary">English-like: Latin (except Vietnamese), Greek, Cyrillic, Hebrew, Armenian, and Georgian.</p>
                <p class="text-secondary">Tall: Language scripts that require extra line height to accommodate larger glyphs, including South and Southeast Asian and Middle Eastern languages, like Arabic, Hindi, Telugu, Thai, and Vietnamese.</p>
                <p class="text-secondary">Dense: Language scripts that require extra line height to accommodate larger glyphs but have different metrics from tall scripts. Includes Chinese, Japanese, and Korean.</p>
                <div class="space"></div>

                <table class="bg-cards">
                    <thead class="bg-app-bar">
                        <tr>
                            <th><b>Code</b></th>
                            <th><b>Description</b></th>
                            <th><b>Category</b></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr><td>af</td><td>Afrikaans</td><td>English-like</td></tr>
                        <tr><td>am</td><td>Amharic</td><td>English-like</td></tr>
                        <tr><td>ar</td><td>Arabic (Modern Standard)</td><td>Tall</td></tr>
                        <tr><td>az</td><td>Azerbaijani</td><td>English-like</td></tr>
                        <tr><td>bg</td><td>Bulgarian</td><td>English-like</td></tr>
                        <tr><td>bn</td><td>Bengali</td><td>Tall</td></tr>
                        <tr><td>ca</td><td>Catalan</td><td>English-like</td></tr>
                        <tr><td>cs</td><td>Czech</td><td>English-like</td></tr>
                        <tr><td>cy</td><td>Welsh</td><td>English-like</td></tr>
                        <tr><td>da</td><td>Danish</td><td>English-like</td></tr>
                        <tr><td>de</td><td>German</td><td>English-like</td></tr>
                        <tr><td>el</td><td>Greek</td><td>English-like</td></tr>
                        <tr><td>en</td><td>English (US)</td><td>English-like</td></tr>
                        <tr><td>en-GB</td><td>English (UK)</td><td>English-like</td></tr>
                        <tr><td>es</td><td>Spanish (European)</td><td>English-like</td></tr>
                        <tr><td>es-419</td><td>Spanish (Latin American)</td><td>English-like</td></tr>
                        <tr><td>et</td><td>Estonian</td><td>English-like</td></tr>
                        <tr><td>eu</td><td>Basque</td><td>English-like</td></tr>
                        <tr><td>fa</td><td>Persian</td><td>Tall</td></tr>
                        <tr><td>fi</td><td>Finnish</td><td>English-like</td></tr>
                        <tr><td>fil</td><td>Filipino</td><td>English-like</td></tr>
                        <tr><td>fr</td><td>French (European)</td><td>English-like</td></tr>
                        <tr><td>fr-CA</td><td>French (Canadian)</td><td>English-like</td></tr>
                        <tr><td>gl</td><td>Galician</td><td>English-like</td></tr>
                        <tr><td>gu</td><td>Gujarati</td><td>Tall</td></tr>
                        <tr><td>hi</td><td>Hindi</td><td>Tall</td></tr>
                        <tr><td>hr</td><td>Croatian</td><td>English-like</td></tr>
                        <tr><td>hu</td><td>Hungarian</td><td>English-like</td></tr>
                        <tr><td>hy</td><td>Armenian</td><td>English-like</td></tr>
                        <tr><td>id</td><td>Indonesian</td><td>English-like</td></tr>
                        <tr><td>is</td><td>Icelandic</td><td>English-like</td></tr>
                        <tr><td>it</td><td>Italian</td><td>English-like</td></tr>
                        <tr><td>iw</td><td>Hebrew</td><td>English-like</td></tr>
                        <tr><td>ja</td><td>Japanese</td><td>Dense</td></tr>
                        <tr><td>ka</td><td>Georgian</td><td>English-like</td></tr>
                        <tr><td>kk</td><td>Kazakh</td><td>English-like</td></tr>
                        <tr><td>km</td><td>Khmer</td><td>Tall</td></tr>
                        <tr><td>kn</td><td>Kannada</td><td>Tall</td></tr>
                        <tr><td>ko</td><td>Korean</td><td>Dense</td></tr>
                        <tr><td>ky</td><td>Kirghiz</td><td>English-like</td></tr>
                        <tr><td>lo</td><td>Lao</td><td>Tall</td></tr>
                        <tr><td>lt</td><td>Lithuanian</td><td>English-like</td></tr>
                        <tr><td>lv</td><td>Latvian</td><td>English-like</td></tr>
                        <tr><td>mk</td><td>Macedonian</td><td>English-like</td></tr>
                        <tr><td>ml</td><td>Malayalam</td><td>Tall</td></tr>
                        <tr><td>mn</td><td>Mongolian</td><td>English-like</td></tr>
                        <tr><td>mr</td><td>Marathi</td><td>Tall</td></tr>
                        <tr><td>ms</td><td>Malay</td><td>English-like</td></tr>
                        <tr><td>my</td><td>Burmese (Myanmar)</td><td>Tall</td></tr>
                        <tr><td>ne</td><td>Nepali</td><td>Tall</td></tr>
                        <tr><td>nl</td><td>Dutch</td><td>English-like</td></tr>
                        <tr><td>no</td><td>Norwegian (Bokmål)</td><td>English-like</td></tr>
                        <tr><td>pa</td><td>Punjabi</td><td>Tall</td></tr>
                        <tr><td>pl</td><td>Polish</td><td>English-like</td></tr>
                        <tr><td>pt</td><td>Portuguese (Brazilian)</td><td>English-like</td></tr>
                        <tr><td>pt-PT</td><td>Portuguese (European)</td><td>English-like</td></tr>
                        <tr><td>ro</td><td>Romanian</td><td>English-like</td></tr>
                        <tr><td>ru</td><td>Russian</td><td>English-like</td></tr>
                        <tr><td>si</td><td>Sinhala</td><td>Tall</td></tr>
                        <tr><td>sk</td><td>Slovak</td><td>English-like</td></tr>
                        <tr><td>sl</td><td>Slovenian</td><td>English-like</td></tr>
                        <tr><td>sq</td><td>Albanian</td><td>English-like</td></tr>
                        <tr><td>sr</td><td>Serbian (Cyrillic)</td><td>English-like</td></tr>
                        <tr><td>sr-Latn</td><td>Serbian (Latin)</td><td>English-like</td></tr>
                        <tr><td>sv</td><td>Swedish</td><td>English-like</td></tr>
                        <tr><td>sw</td><td>Swahili</td><td>English-like</td></tr>
                        <tr><td>ta</td><td>Tamil</td><td>Tall</td></tr>
                        <tr><td>te</td><td>Telugu</td><td>Tall</td></tr>
                        <tr><td>th</td><td>Thai</td><td>Tall</td></tr>
                        <tr><td>tr</td><td>Turkish</td><td>English-like</td></tr>
                        <tr><td>uk</td><td>Ukrainian</td><td>English-like</td></tr>
                        <tr><td>ur</td><td>Urdu</td><td>Tall</td></tr>
                        <tr><td>uz</td><td>Uzbek</td><td>English-like</td></tr>
                        <tr><td>vi</td><td>Vietnamese</td><td>Tall</td></tr>
                        <tr><td>zh-CN</td><td>Chinese (Simplified, Mandarin)</td><td>Dense</td></tr>
                        <tr><td>zh-HK</td><td>Chinese (Mandarin, Hong Kong)</td><td>Dense</td></tr>
                        <tr><td>zh-TW</td><td>Chinese (Traditional, Mandarin)</td><td>Dense</td></tr>
                        <tr><td>zu</td><td>Zulu</td><td>English-like</td></tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</div>

</body>
</html>