<nav id="mdc-nav-drawer" class="permanent clipped">
    <div class="mdc-list-container">
        <div class="mdc-list-group collapsed">
            <div class="mdc-list-item interactive <?= $primaryColor ?>">
                <div class="material-icon text-secondary">landscape</div>
                <div class="text">Environment</div>
                <div class="meta material-icon">keyboard_arrow_down</div>
            </div>
            <div class="mdc-dropdown">
                <a href="<?= $prefix ?>environment/elevation.php" class="mdc-list-item">
                    <div class="material-icon"></div>
                    <div class="text">Elevation</div>
                </a>
                <a href="<?= $prefix ?>environment/light-shadows.php" class="mdc-list-item">
                    <div class="material-icon"></div>
                    <div class="text">Light & shadows</div>
                </a>
            </div>
        </div>
        <div class="mdc-list-group collapsed">
            <div class="mdc-list-item interactive <?= $primaryColor ?>">
                <div class="material-icon text-secondary">brush</div>
                <div class="text">Color</div>
                <div class="meta material-icon">keyboard_arrow_down</div>
            </div>
            <div class="mdc-dropdown">
                <a href="<?= $prefix ?>color/the-color-system.php" class="mdc-list-item">
                    <div class="material-icon"></div>
                    <div class="text">The color system</div>
                </a>
                <a href="<?= $prefix ?>color/applying-color-to-ui.php" class="mdc-list-item">
                    <div class="material-icon"></div>
                    <div class="text">Applying color to UI</div>
                </a>
                <a href="<?= $prefix ?>color/color-usage.php" class="mdc-list-item">
                    <div class="material-icon"></div>
                    <div class="text">Color usage</div>
                </a>
                <a href="<?= $prefix ?>color/text-legibility.php" class="mdc-list-item">
                    <div class="material-icon"></div>
                    <div class="text">Text legibility</div>
                </a>
            </div>
        </div>
        <div class="mdc-list-group collapsed">
            <div class="mdc-list-item interactive <?= $primaryColor ?>">
                <div class="material-icon text-secondary">title</div>
                <div class="text">Typography</div>
                <div class="meta material-icon">keyboard_arrow_down</div>
            </div>
            <div class="mdc-dropdown">
                <a href="<?= $prefix ?>typography/the-type-system.php" class="mdc-list-item">
                    <div class="material-icon"></div>
                    <div class="text">The type system</div>
                </a>
            </div>
            <div class="mdc-dropdown">
                <a href="<?= $prefix ?>typography/understanding-typography.php" class="mdc-list-item">
                    <div class="material-icon"></div>
                    <div class="text">Understanding typography</div>
                </a>
            </div>
        </div>
        <div class="mdc-list-group collapsed">
            <div class="mdc-list-item interactive <?= $primaryColor ?>">
                <div class="material-icon text-secondary">extension</div>
                <div class="text">Components</div>
                <div class="meta material-icon">keyboard_arrow_down</div>
            </div>
            <div class="mdc-dropdown">
                <a href="<?= $prefix ?>components/buttons.php" class="mdc-list-item">
                    <div class="material-icon"></div>
                    <div class="text">Buttons</div>
                </a>
                <a href="<?= $prefix ?>components/dividers.php" class="mdc-list-item">
                    <div class="material-icon"></div>
                    <div class="text">Dividers</div>
                </a>
                <a href="<?= $prefix ?>components/lists.php" class="mdc-list-item">
                    <div class="material-icon"></div>
                    <div class="text">Lists</div>
                </a>
            </div>
        </div>
    </div>
</nav>
<div class="mdc-drawer-scrim"></div>