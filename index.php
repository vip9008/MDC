<!DOCTYPE html>
<html lang="en-US" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>MDC v2</title>

    <!-- Material Grid -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,400i,500,500i,700,700i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="css/md.grid.css" rel="stylesheet">
    <link href="css/md.colors.css" rel="stylesheet">
    <link href="css/mdc.divider.css" rel="stylesheet">
    <link href="css/mdc.nav.drawer.css" rel="stylesheet">
    <link href="css/mdc.top.app.bar.css" rel="stylesheet">
    <link href="css/mdc.progress.css" rel="stylesheet">
    <link href="css/mdc.list.css" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
    <script src="js/mdc.list.js"></script>
    <script src="js/mdc.nav.drawer.js"></script>
    <script src="js/mdc.top.app.bar.js"></script>
</head>

<body>
    <nav id="mdc-nav-drawer" class="persistent">
        <div class="header">
            <div class="title">Branding title</div>
        </div>
        <div class="mdc-divider"></div>
        <div class="mdc-list-group blue">
            <a href="javascript: ;" class="mdc-list-item active">
                <div class="material-icon text-secondary">inbox</div>
                <div class="text">Inbox</div>
            </a>
            <a href="javascript: ;" class="mdc-list-item">
                <div class="material-icon text-secondary">star</div>
                <div class="text">Star</div>
            </a>
            <a href="javascript: ;" class="mdc-list-item">
                <div class="material-icon text-secondary">send</div>
                <div class="text">Sent Mail</div>
            </a>
            <a href="javascript: ;" class="mdc-list-item">
                <div class="material-icon text-secondary">drafts</div>
                <div class="text">Drafts</div>
            </a>
        </div>
        <div class="mdc-divider"></div>
        <div class="mdc-list-group blue">
            <a href="javascript: ;" class="mdc-list-item">
                <div class="material-icon text-secondary">email</div>
                <div class="text">All Mail</div>
            </a>
            <a href="javascript: ;" class="mdc-list-item">
                <div class="material-icon text-secondary">delete</div>
                <div class="text">Trash</div>
            </a>
            <a href="javascript: ;" class="mdc-list-item">
                <div class="material-icon text-secondary">report</div>
                <div class="text">Spam</div>
            </a>
        </div>
    </nav>
    <div class="mdc-drawer-scrim"></div>

    <header id="mdc-top-app-bar" class="fixed bg-indigo">
        <button class="material-icon nav-icon">menu</button>
        <span class="title">Some badass title here</span>
        <div class="actions">
            <button class="material-icon">share</button>
            <button class="material-icon">search</button>
            <button class="material-icon">more_vert</button>
        </div>
    </header>

    <div class="container">
        <div class="row">
            <div class="col medium-12">
                <div style="max-width: 960px">
                    <h2>Determinate</h2>
                    <div class="mdc-progress blue">
                        <div class="bar determinate" style="width: 70%;"></div>
                    </div>

                    <h2>Indeterminate</h2>
                    <div class="mdc-progress blue">
                        <div class="bar indeterminate"></div>
                    </div>

                    <h2>Buffer</h2>
                    <div class="mdc-progress buffer blue">
                        <div class="buffered" style="width: 70%;"></div>
                        <div class="buffer-bar" style="width: 30%;"></div>
                        <div class="bar" style="width: 50%;"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col medium-4">
                <h1>One line</h1>

                <div style="border: solid 1px var(--bg-border); margin-bottom: 1rem;">
                    <div class="mdc-list-item">
                        <div class="text">List item</div>
                    </div>
                    <div class="mdc-list-item">
                        <div class="text">List item</div>
                    </div>
                    <div class="mdc-list-item">
                        <div class="text">List item</div>
                    </div>
                </div>

                <div style="border: solid 1px var(--bg-border); margin-bottom: 1rem;">
                    <div class="mdc-list-item">
                        <div class="text">List item</div>
                        <div class="meta material-icon">info</div>
                    </div>
                    <div class="mdc-list-item">
                        <div class="text">List item</div>
                        <div class="meta material-icon">info</div>
                    </div>
                    <div class="mdc-list-item">
                        <div class="text">List item</div>
                        <div class="meta material-icon">info</div>
                    </div>
                </div>

                <div style="border: solid 1px var(--bg-border); margin-bottom: 1rem;">
                    <div class="mdc-list-item">
                        <div class="material-icon">wifi</div>
                        <div class="text">List item</div>
                    </div>
                    <div class="mdc-list-item">
                        <div class="material-icon">bluetooth</div>
                        <div class="text">List item</div>
                    </div>
                    <div class="mdc-list-item">
                        <div class="material-icon">power_settings_new</div>
                        <div class="text">List item</div>
                    </div>
                </div>

                <div style="border: solid 1px var(--bg-border); margin-bottom: 1rem;">
                    <div class="mdc-list-item">
                        <div class="graphic material-icon" style="background: var(--text-hint); color: white;">folder</div>
                        <div class="text">List item</div>
                        <div class="meta material-icon">info</div>
                    </div>
                    <div class="mdc-list-item">
                        <div class="graphic material-icon" style="background: var(--text-hint); color: white;">folder</div>
                        <div class="text">List item</div>
                        <div class="meta material-icon">info</div>
                    </div>
                    <div class="mdc-list-item">
                        <div class="graphic material-icon" style="background: var(--text-hint); color: white;">folder</div>
                        <div class="text">List item</div>
                        <div class="meta material-icon">info</div>
                    </div>
                </div>

                <div style="border: solid 1px var(--bg-border); margin-bottom: 1rem;">
                    <div class="mdc-list-item">
                        <div class="graphic md-56 material-icon" style="background: var(--text-hint); color: white;">person</div>
                        <div class="text">List item</div>
                        <div class="meta material-icon">star</div>
                    </div>
                    <div class="mdc-list-item">
                        <div class="graphic md-56 material-icon" style="background: var(--text-hint); color: white;">person</div>
                        <div class="text">List item</div>
                        <div class="meta material-icon">star</div>
                    </div>
                    <div class="mdc-list-item">
                        <div class="graphic md-56 material-icon" style="background: var(--text-hint); color: white;">person</div>
                        <div class="text">List item</div>
                        <div class="meta material-icon">star</div>
                    </div>
                </div>

                <div style="border: solid 1px var(--bg-border); margin-bottom: 1rem;">
                    <div class="mdc-list-item">
                        <div class="graphic md-100 material-icon" style="background: var(--text-hint); color: white;">account_balance</div>
                        <div class="text">List item</div>
                        <div class="meta material-icon">favorite</div>
                    </div>
                    <div class="mdc-list-item">
                        <div class="graphic md-100 material-icon" style="background: var(--text-hint); color: white;">account_balance</div>
                        <div class="text">List item</div>
                        <div class="meta material-icon">favorite</div>
                    </div>
                    <div class="mdc-list-item">
                        <div class="graphic md-100 material-icon" style="background: var(--text-hint); color: white;">account_balance</div>
                        <div class="text">List item</div>
                        <div class="meta material-icon">favorite</div>
                    </div>
                </div>

            </div>

            <div class="col medium-4">
                <h1>Double line</h1>

                <div style="border: solid 1px var(--bg-border); margin-bottom: 1rem;">
                    <div class="mdc-list-item">
                        <div class="text">
                            List item
                            <div class="secondary">Secondary text</div>
                        </div>
                        <div class="meta">meta</div>
                    </div>
                    <div class="mdc-list-item">
                        <div class="text">
                            List item
                            <div class="secondary">Secondary text</div>
                        </div>
                        <div class="meta">meta</div>
                    </div>
                </div>

                <div style="border: solid 1px var(--bg-border); margin-bottom: 1rem;">
                    <div class="mdc-list-item">
                        <div class="text">
                            <div class="secondary">Overline</div>
                            List item
                        </div>
                    </div>
                    <div class="mdc-list-item">
                        <div class="text">
                            <div class="secondary">Overline</div>
                            List item
                        </div>
                    </div>
                </div>

                <div style="border: solid 1px var(--bg-border); margin-bottom: 1rem;">
                    <div class="mdc-list-item">
                        <div class="material-icon">wifi</div>
                        <div class="text">
                            List item
                            <div class="secondary">Secondary text</div>
                        </div>
                    </div>
                    <div class="mdc-list-item">
                        <div class="material-icon">bluetooth</div>
                        <div class="text">
                            List item
                            <div class="secondary">Secondary text</div>
                        </div>
                    </div>
                </div>

                <div style="border: solid 1px var(--bg-border); margin-bottom: 1rem;">
                    <div class="mdc-list-item">
                        <div class="graphic material-icon" style="background: var(--text-hint); color: white;">folder</div>
                        <div class="text">
                            List item
                            <div class="secondary">Secondary text</div>
                        </div>
                        <div class="meta material-icon">info</div>
                    </div>
                    <div class="mdc-list-item">
                        <div class="graphic material-icon" style="background: var(--text-hint); color: white;">folder</div>
                        <div class="text">
                            List item
                            <div class="secondary">Secondary text</div>
                        </div>
                        <div class="meta material-icon">info</div>
                    </div>
                </div>

                <div style="border: solid 1px var(--bg-border); margin-bottom: 1rem;">
                    <div class="mdc-list-item">
                        <div class="graphic md-56 material-icon" style="background: var(--text-hint); color: white;">person</div>
                        <div class="text">
                            List item
                            <div class="secondary">Secondary text</div>
                        </div>
                        <div class="meta material-icon">star</div>
                    </div>
                    <div class="mdc-list-item">
                        <div class="graphic md-56 material-icon" style="background: var(--text-hint); color: white;">person</div>
                        <div class="text">
                            List item
                            <div class="secondary">Secondary text</div>
                        </div>
                        <div class="meta material-icon">star</div>
                    </div>
                </div>

                <div style="border: solid 1px var(--bg-border); margin-bottom: 1rem;">
                    <div class="mdc-list-item">
                        <div class="graphic md-100 material-icon" style="background: var(--text-hint); color: white;">account_balance</div>
                        <div class="text">
                            List item
                            <div class="secondary">Secondary text</div>
                        </div>
                        <div class="meta material-icon">favorite</div>
                    </div>
                    <div class="mdc-list-item">
                        <div class="graphic md-100 material-icon" style="background: var(--text-hint); color: white;">account_balance</div>
                        <div class="text">
                            List item
                            <div class="secondary">Secondary text</div>
                        </div>
                        <div class="meta material-icon">favorite</div>
                    </div>
                </div>
            </div>

            <div class="col medium-4">
                <h1>Three line</h1>

                <div class="md-3line" style="border: solid 1px var(--bg-border); margin-bottom: 1rem;">
                    <div class="mdc-list-item">
                        <div class="text">
                            List item
                            <div class="secondary">Secondary line text Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
                        </div>
                        <div class="meta">meta</div>
                    </div>
                    <div class="mdc-list-item">
                        <div class="text">
                            List item
                            <div class="secondary">Secondary line text Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
                        </div>
                        <div class="meta">meta</div>
                    </div>
                </div>

                <div class="md-3line" style="border: solid 1px var(--bg-border); margin-bottom: 1rem;">
                    <div class="mdc-list-item">
                        <div class="text">
                            <div class="secondary">Overline</div>
                            List item
                            <div class="secondary">Secondary line text</div>
                        </div>
                    </div>
                    <div class="mdc-list-item">
                        <div class="text">
                            <div class="secondary">Overline</div>
                            List item
                            <div class="secondary">Secondary line text</div>
                        </div>
                    </div>
                </div>

                <div class="md-3line" style="border: solid 1px var(--bg-border); margin-bottom: 1rem;">
                    <div class="mdc-list-item">
                        <div class="material-icon">wifi</div>
                        <div class="text">
                            List item
                            <div class="secondary">Secondary line text Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
                        </div>
                    </div>
                    <div class="mdc-list-item">
                        <div class="material-icon">bluetooth</div>
                        <div class="text">
                            List item
                            <div class="secondary">Secondary line text Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
                        </div>
                    </div>
                </div>

                <div class="md-3line" style="border: solid 1px var(--bg-border); margin-bottom: 1rem;">
                    <div class="mdc-list-item">
                        <div class="graphic material-icon" style="background: var(--text-hint); color: white;">folder</div>
                        <div class="text">
                            List item
                            <div class="secondary">Secondary line text Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
                        </div>
                        <div class="meta material-icon">info</div>
                    </div>
                    <div class="mdc-list-item">
                        <div class="graphic material-icon" style="background: var(--text-hint); color: white;">folder</div>
                        <div class="text">
                            List item
                            <div class="secondary">Secondary line text Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
                        </div>
                        <div class="meta material-icon">info</div>
                    </div>
                </div>

                <div class="md-3line" style="border: solid 1px var(--bg-border); margin-bottom: 1rem;">
                    <div class="mdc-list-item">
                        <div class="graphic md-56 material-icon" style="background: var(--text-hint); color: white;">person</div>
                        <div class="text">
                            List item
                            <div class="secondary">Secondary line text Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
                        </div>
                        <div class="meta material-icon">star</div>
                    </div>
                    <div class="mdc-list-item">
                        <div class="graphic md-56 material-icon" style="background: var(--text-hint); color: white;">person</div>
                        <div class="text">
                            List item
                            <div class="secondary">Secondary line text Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
                        </div>
                        <div class="meta material-icon">star</div>
                    </div>
                </div>

                <div class="md-3line" style="border: solid 1px var(--bg-border); margin-bottom: 1rem;">
                    <div class="mdc-list-item">
                        <div class="graphic md-100 material-icon" style="background: var(--text-hint); color: white;">account_balance</div>
                        <div class="text">
                            List item
                            <div class="secondary">Secondary line text Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
                        </div>
                        <div class="meta material-icon">favorite</div>
                    </div>
                    <div class="mdc-list-item">
                        <div class="graphic md-100 material-icon" style="background: var(--text-hint); color: white;">account_balance</div>
                        <div class="text">
                            List item
                            <div class="secondary">Secondary line text Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
                        </div>
                        <div class="meta material-icon">favorite</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col medium-4">
                <div class="mdc-list-group collapsed" style="border: solid 1px var(--bg-border); margin-bottom: 1rem;">
                    <div class="mdc-list-item blue interactive">
                        <div class="material-icon">bluetooth</div>
                        <div class="text">List item</div>
                        <div class="meta material-icon">keyboard_arrow_down</div>
                    </div>
                    <div class="mdc-dropdown">
                        <div class="mdc-list-item">
                            <div class="material-icon"></div>
                            <div class="text">List item</div>
                        </div>
                        <div class="mdc-list-item">
                            <div class="material-icon"></div>
                            <div class="text">List item</div>
                        </div>
                        <div class="mdc-list-item">
                            <div class="material-icon"></div>
                            <div class="text">List item</div>
                        </div>
                    </div>
                </div>
                <div class="mdc-list-group collapsed" style="border: solid 1px var(--bg-border); margin-bottom: 1rem;">
                    <button class="mdc-list-item blue">
                        <div class="material-icon">power_settings_new</div>
                        <div class="text">List item</div>
                        <div class="meta material-icon">keyboard_arrow_down</div>
                    </button>
                    <div class="mdc-dropdown">
                        <div class="mdc-list-item">
                            <div class="material-icon"></div>
                            <div class="text">List item</div>
                        </div>
                        <div class="mdc-list-item">
                            <div class="material-icon"></div>
                            <div class="text">List item</div>
                        </div>
                        <div class="mdc-list-item">
                            <div class="material-icon"></div>
                            <div class="text">List item</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>