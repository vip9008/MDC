<header id="mdc-top-app-bar" class="fixed z-axis-4 <?= $topAppBarColor ?>">
    <button class="material-icon nav-icon">menu</button>
    <span class="title"><?= $topAppBarTitle ?></span>
    <div class="actions">
        <div class="action-item">
            <div class="mdc-menu-container">
                <button class="menu-button material-icon">more_vert</button>
                <div class="mdc-list-container md-theme-light" tabindex="-1">
                    <div class="mdc-list-group">
                        <div class="mdc-list-item">
                            <div class="text">RTL direction</div>
                            <div id="dir_control" class="mdc-switch <?= $primaryColor ?>" tabindex="-1">
                                <div class="rail"></div>
                                <input type="hidden" value="0">
                            </div>
                        </div>

                        <div class="mdc-list-item">
                            <div class="text">Dark theme</div>
                            <div id="theme_control" class="mdc-switch <?= $primaryColor ?>" tabindex="-1">
                                <div class="rail"></div>
                                <input type="hidden" value="0">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>