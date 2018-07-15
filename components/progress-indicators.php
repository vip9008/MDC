<?php
$language = "en-US";
$direction = "ltr";

$css_files = [
    "css/mdc.progress.indicator.css",
];
$js_files = [
];

$head_title = "MDC v2";

$topAppBarColor = "bg-blue-grey-900";
$topAppBarTitle = "Components - Progress indicators";

$primaryColor = "indigo";
$accentColor = "blue";

$prefix = "../";
$url = $prefix."components/progress-indicators.php";
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
                <h1 class="article_title">Progress indicators</h1>
                <h5 class="text-secondary">Progress indicators express an unspecified wait time or display the length of a process.</h5>
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
                <p class="text-secondary">Progress indicators inform users about the status of ongoing processes, such as loading an app, submitting a form, or saving updates. They communicate an app’s state and indicate available actions, such as whether users can navigate away from the current screen.</p>
                <div class="space"></div>

                <h6>Progress as a group</h6>
                <p class="text-secondary">When displaying progress for a sequence of processes, indicate overall progress rather than the progress of each activity.</p>

                <div class="space"></div>
                <div class="space"></div>

                <h4>Principles</h4>
            </div>
        </div>
        <div class="row">
            <div class="col xlarge-2 large-3 medium-4 small-4">
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/component_progress_indicators/progress-indicator-illos-03.png"></figure>
                <h6>Informative</h6>
                <p class="text-secondary">Progress indicators look and animate in ways that reflect the status of a process. They are never simply decorative.</p>
            </div>
            <div class="col xlarge-2 large-3 medium-4 small-4">
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/component_progress_indicators/progress-indicator-illos-01.png"></figure>
                <h6>Animated</h6>
                <p class="text-secondary">Progress indicators use animation to capture attention and inform users of an activity’s progress.</p>
            </div>
            <div class="clearfix visible-smallext visible-small"></div>
            <div class="col xlarge-2 large-3 medium-4 small-4">
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/component_progress_indicators/progress-indicator-illos-02.png"></figure>
                <h6>Consistent</h6>
                <p class="text-secondary">Progress indicators should be applied to all instances of a process (such as loading) in a consistent format (linear or circular).</p>
            </div>
        </div>

        <div class="row">
            <div class="col xlarge-6 large-9 medium-12">
                <div class="space"></div>
                <div class="mdc-divider"></div>
                <div class="space"></div>

                <h4>Types</h4>
                <div class="space"></div>

                <h6>Linear and circular</h6>
                <p class="text-secondary">Material Design offers two visually distinct types of progress indicators: linear and circular progress indicators. Only one type should represent each kind of activity in an app. For example, if a refresh action displays a circular indicator on one screen, that same action shouldn’t use a linear indicator elsewhere in the app.</p>

                <div class="space"></div>
                <div class="space"></div>

                <h6>Determinate and indeterminate</h6>
                <p class="text-secondary">Progress indicators may be determinate or indeterminate:</p>
                <div class="space"></div>
            </div>
        </div>
        <div class="row">
            <div class="col xlarge-3 large-4 medium-6 small-4">
                <h6>Determinate indicators</h6>
                <p class="text-secondary">Determinate indicators display how long a process will take. They should be used when the process completion rate can be detected.</p>
                <div class="space"></div>
            </div>
            <div class="col xlarge-3 large-4 medium-6 small-4">
                <h6>Indeterminate indicators</h6>
                <p class="text-secondary">Indeterminate indicators express an unspecified amount of wait time. They should be used when progress isn’t detectable, or if it’s not necessary to indicate how long an activity will take.</p>
                <div class="space"></div>
            </div>
        </div>

        <div class="row">
            <div class="col xlarge-6 large-9 medium-12">
                <p class="text-secondary">As more information about a process becomes available, a progress indicator can switch from an indeterminate to a determinate state.</p>
            </div>
        </div>
    </section>
</div>
<div class="mdc-divider"></div>
<div class="container">
    <section>
        <div class="row">
            <div class="col xlarge-6 large-9 medium-12">
                <h1 class="article_title">Linear progress indicators</h1>
                <div class="space"></div>

                <h4>Anatomy</h4>
                <figure class="img_figure clearfix"><img src="<?= $prefix ?>img/component_progress_indicators/linear-anatomy.png"></figure>
                <h6>Linear progress indicators are composed of two required elements:</h6>

                <h6>1. Track</h6>
                <p class="text-secondary">The track is a fixed width rule, with set boundaries for the indicator to travel along.</p>

                <h6>2. Indicator</h6>
                <p class="text-secondary">The indicator animates along the length of the track.</p>

                <div class="space"></div>
                <div class="mdc-divider"></div>
                <div class="space"></div>

                <h4>Behavior</h4>
                <p class="text-secondary">Linear progress indicators display progress by animating an indicator along the length of a fixed, visible track. The behavior of the indicator is dependent on whether the progress of a process is known.</p>

                <div class="space"></div>
                <div class="mdc-divider"></div>
                <div class="space"></div>

                <h4>Types</h4>
                <p class="text-secondary">Linear progress indicators support both determinate and indeterminate operations.</p>
                <ul class="text-secondary">
                    <li><b>Determinate</b> operations display the indicator increasing in width from 0 to 100% of the track, in sync with the process’s progress.</li>
                    <li><b>Indeterminate</b> operations display the indicator continually growing and shrinking along the track until the process is complete.</li>
                </ul>

                <div class="space"></div>
                <div class="mdc-divider"></div>
                <div class="space"></div>

                <h4>Placement</h4>
                <p class="text-secondary">The placement of a linear progress indicator can indicate the scope of a process. For example:</p>
                <ul class="text-secondary">
                    <li>A linear indicator at the center of the screen can indicate loading all screen content</li>
                    <li>A linear indicator attached to a container, such as a card, can indicate the process applies to that particular item (and that interaction with the rest of the UI is possible)</li>
                    <li>Expanding items can place a linear indicator along their expanding edge to draw user attention to where new content will appear</li>
                </ul>
            </div>
        </div>
    </section>
</div>
<div class="mdc-divider"></div>
<div class="container">
    <section>
        <div class="row">
            <div class="col xlarge-6 large-9 medium-12">
                <h1 class="article_title">Circular progress indicators</h1>
                <div class="space"></div>

                <h4>Behavior</h4>
                <p class="text-secondary">Circular progress indicators display progress by animating an indicator along an invisible circular track in a clockwise direction. They can be applied directly to a surface, such as a button or card.</p>
                <p class="text-secondary">On Android, the “swipe to refresh” gesture displays a circular progress indicator to indicate that the UI is being refreshed.</p>

                <div class="space"></div>
                <div class="mdc-divider"></div>
                <div class="space"></div>

                <h4>Types</h4>
                <p class="text-secondary">Circular progress indicators support both determinate and indeterminate processes.</p>
                <ul class="text-secondary">
                    <li><b>Determinate</b> circular indicators fill the invisible, circular track with color, as the indicator moves from 0 to 360 degrees.</li>
                    <li><b>Indeterminate</b> circular indicators grow and shrink in size while moving along the invisible track.</li>
                </ul>

                <div class="space"></div>
                <div class="mdc-divider"></div>
                <div class="space"></div>

                <h4>Placement</h4>
                <p class="text-secondary">Circular progress indicators are positioned to indicate the process that they represent.</p>
                <ul class="text-secondary">
                    <li>When centered on the screen, they indicate the initial loading of screen content.</li>
                    <li>When placed above or below existing content, they draw attention to where new content will appear.</li>
                </ul>

                <div class="space"></div>

                <h6>Integrating with actions</h6>
                <p class="text-secondary">A circular indicator can be integrated into a button or actionable icon to express a connection between an interaction and a specific item. They are typically used to express when an interaction, such as clicking a button again, isn’t available.</p>
                <p class="text-secondary">They should be used for short, indeterminate activities (between 2-5 seconds). Longer activities may require alternate methods of communication, such as snackbars or notifications.</p>
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

                <h4>Linear progress indicators</h4>
            </div>
        </div>
        <div class="row">
            <div class="col xlarge-3 large-4 medium-6">
                <div class="space"></div>

                <h6>Determinate</h6>
                <div class="mdc-progress-track deep-purple-A700">
                    <div class="indicator determinate" style="width: 70%;"></div>
                </div>

                <div class="space"></div>
                <div class="space"></div>

                <h6>Indeterminate</h6>
                <div class="mdc-progress-track deep-purple-A700">
                    <div class="indicator indeterminate"></div>
                </div>

                <div class="space"></div>
                <div class="space"></div>

                <h6>Buffer</h6>
                <div class="mdc-progress-track buffer deep-purple-A700">
                    <div class="buffered" style="width: 70%;"></div>
                    <div class="buffer-indicator" style="width: 30%;"></div>
                    <div class="indicator" style="width: 50%;"></div>
                </div>

                <div class="space"></div>
            </div>
            <div class="col xlarge-5 large-6 medium-10">
<pre class="bg-app-bar html"><?= htmlspecialchars(
<<<TEXT
<div class="mdc-progress-track deep-purple-A700">
    <div class="indicator determinate" style="width: 70%;"></div>
</div>


<div class="mdc-progress-track deep-purple-A700">
    <div class="indicator indeterminate"></div>
</div>


<div class="mdc-progress-track buffer deep-purple-A700">
    <div class="buffered" style="width: 70%;"></div>
    <div class="buffer-indicator" style="width: 30%;"></div>
    <div class="indicator" style="width: 50%;"></div>
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