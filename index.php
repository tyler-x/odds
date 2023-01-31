<!DOCTYPE html>
<html>
    <head>
        <title>Demo</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="<?=base_url('assets/')?>uikit-3.7.5/css/uikit.min.css" />
        <script src="<?=base_url('assets/uikit-3.7.5/js/uikit.min.js')?>"></script>
        <script src="<?=base_url('assets/uikit-3.7.5/js/uikit-icons.min.js')?>"></script>
        <script src="https://cdn.jsdelivr.net/npm/vue@2.7.14/dist/vue.js"></script>
        <style>
            .zoom2it-container   {position:relative;overflow:hidden;width:100%;padding-top:75%;}
            .zoom2it-responsive  {position:absolute;top:0;right:0;bottom:0;left:0;width:100%;height:100%;}
        </style>
    </head>
    <body>
        <nav class="uk-navbar-container">
            <div class="uk-container uk-container-small" uk-navbar>
                <div class="uk-navbar-left">
                    <a class="uk-navbar-item uk-logo" href="#" aria-label="Home">Demo</a>
                </div>
                <div class="uk-navbar-right">
                    <ul class="uk-navbar-nav">
                        <li><a href="#">Zoom2it</a></li>
                        <li>
                            <a class="uk-navbar-toggle" uk-navbar-toggle-icon href="#"></a>
                            <div class="uk-navbar-dropdown">
                                <ul class="uk-nav uk-navbar-dropdown-nav">
                                    <li><a href="#">Home</a></li>
                                    <li><a href="#">Item</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="uk-hidden uk-section uk-section-xlarge uk-section-primary">
            <div class="uk-container">
                zoom2it
            </div>
        </div>
        <div class="uk-section">
            <div class="uk-container">
                <div class="uk-child-width-1-2@m" uk-grid>
                    <div>
                        <h2>zoom2it</h2>
                        <p>
                            Zoom2it is a product of First Base Solutions Inc, a wholly owned subsidiary of JD Barnes Ltd - Canada's largest land surveying and mapping company.
                        </p>
                        <p>
                            This Zoom2it application is a third party service of First Base Solutions Inc. presented through a partnership with Teranet Corp., independent of the Toronto Real Estate Board.
                        </p>
                        <kbd>
                            api/iframe/secretkey/001101139
                        </kbd>
                    </div>
                    <div>
                        <div class="zoom2it-container">
                            <iframe class="zoom2it-responsive" src="https://dev.zoom2it.com/index.php/api/iframe/secretkey/001101139"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="uk-section uk-section-xsmall uk-section-secondary">
            <div class="uk-container uk-text-center uk-text-small">
                &copy; <?=date('Y')?> First Base Solutions
            </div>
        </div>
    </body>
</html>
