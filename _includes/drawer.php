<nav id="mdc-nav-drawer" class="permanent clipped">
    <div class="mdc-list-container">
        <a href="<?= $prefix ?>index.php" class="mdc-list-item interactive <?= $primaryColor ?>">
            <div class="text">Introduction</div>
        </a>
        <div class="mdc-list-group collapsed">
            <div class="mdc-list-item interactive <?= $primaryColor ?>">
                <div class="text">Environment</div>
                <div class="meta material-icon">
                    <div class="material-icon">keyboard_arrow_down</div>
                </div>
            </div>
            <div class="mdc-dropdown">
                <a href="<?= $prefix ?>environment/elevation.php" class="mdc-list-item">
                    <div class="text">Elevation</div>
                </a>
                <a href="<?= $prefix ?>environment/light-shadows.php" class="mdc-list-item">
                    <div class="text">Light & shadows</div>
                </a>
            </div>
        </div>
        <div class="mdc-list-group collapsed">
            <div class="mdc-list-item interactive <?= $primaryColor ?>">
                <div class="text">Color</div>
                <div class="meta material-icon">
                    <div class="material-icon">keyboard_arrow_down</div>
                </div>
            </div>
            <div class="mdc-dropdown">
                <a href="<?= $prefix ?>color/the-color-system.php" class="mdc-list-item">
                    <div class="text">The color system</div>
                </a>
                <a href="<?= $prefix ?>color/applying-color-to-ui.php" class="mdc-list-item">
                    <div class="text">Applying color to UI</div>
                </a>
                <a href="<?= $prefix ?>color/color-usage.php" class="mdc-list-item">
                    <div class="text">Color usage</div>
                </a>
                <a href="<?= $prefix ?>color/text-legibility.php" class="mdc-list-item">
                    <div class="text">Text legibility</div>
                </a>
            </div>
        </div>
        <div class="mdc-list-group collapsed">
            <div class="mdc-list-item interactive <?= $primaryColor ?>">
                <div class="text">Typography</div>
                <div class="meta material-icon">
                    <div class="material-icon">keyboard_arrow_down</div>
                </div>
            </div>
            <div class="mdc-dropdown">
                <a href="<?= $prefix ?>typography/the-type-system.php" class="mdc-list-item">
                    <div class="text">The type system</div>
                </a>
                <a href="<?= $prefix ?>typography/understanding-typography.php" class="mdc-list-item">
                    <div class="text">Understanding typography</div>
                </a>
            </div>
        </div>
        <div class="mdc-list-group collapsed">
            <div class="mdc-list-item interactive <?= $primaryColor ?>">
                <div class="text">Components</div>
                <div class="meta material-icon">
                    <div class="material-icon">keyboard_arrow_down</div>
                </div>
            </div>
            <div class="mdc-dropdown">
                <a href="<?= $prefix ?>components/buttons.php" class="mdc-list-item">
                    <div class="text">Buttons</div>
                </a>
                <a href="<?= $prefix ?>components/dialogs.php" class="mdc-list-item">
                    <div class="text">Dialogs</div>
                </a>
                <a href="<?= $prefix ?>components/dividers.php" class="mdc-list-item">
                    <div class="text">Dividers</div>
                </a>
                <a href="<?= $prefix ?>components/selection-controls.php" class="mdc-list-item">
                    <div class="text">Selection controls</div>
                </a>
                <a href="<?= $prefix ?>components/lists.php" class="mdc-list-item">
                    <div class="text">Lists</div>
                </a>
                <a href="<?= $prefix ?>components/text-fields.php" class="mdc-list-item">
                    <div class="text">Text fields</div>
                </a>
            </div>
        </div>
        <div class="mdc-list-group collapsed">
            <div class="mdc-list-item interactive <?= $primaryColor ?>">
                <div class="text">Usability</div>
                <div class="meta material-icon">
                    <div class="material-icon">keyboard_arrow_down</div>
                </div>
            </div>
            <div class="mdc-dropdown">
                <a href="<?= $prefix ?>usability/accessibility.php" class="mdc-list-item">
                    <div class="text">Accessibility</div>
                </a>
                <a href="<?= $prefix ?>usability/bidirectionality.php" class="mdc-list-item">
                    <div class="text">Bidirectionality</div>
                </a>
            </div>
        </div>
    </div>
</nav>
<div class="mdc-drawer-scrim"></div>