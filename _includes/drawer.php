<nav id="mdc-nav-drawer" class="permanent clipped">
    <div class="mdc-list-container">
        <div class="mdc-list-group collapsed">
            <div class="mdc-list-item interactive <?= $primaryColor ?>">
                <div class="material-icon">image</div>
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
                <div class="material-icon">view_quilt</div>
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