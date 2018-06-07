<header id="mdc-top-app-bar" class="fixed z-axis-4 <?= $topAppBarColor ?>">
    <button class="material-icon nav-icon">menu</button>
    <span class="title"><?= $topAppBarTitle ?></span>
    <div class="actions">
        <div class="material-icon">
            <div class="mdc-menu-container">
                <button class="menu-button material-icon">more_vert</button>
                <div class="mdc-list-container">
                    <div class="mdc-list-group">
                        <button class="mdc-list-item" onclick="change_document_direction();">
                            <div class="text">Change document direction</div>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>