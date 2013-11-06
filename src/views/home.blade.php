<!DOCTYPE html>
<html>
    <head>
        <title>FontAwesome for Laravel</title>
        <meta charset="utf-8">
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.1/js/bootstrap.min.js"></script>
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.1/css/bootstrap.min.css" rel="stylesheet" />
        <link href="//netdna.bootstrapcdn.com/bootswatch/3.0.0/flatly/bootstrap.min.css" rel="stylesheet" />
        {{ FontAwesome::cdnLink() }}
        <script src="https://google-code-prettify.googlecode.com/svn/loader/run_prettify.js?lang=php&skin=sunburst"></script>
        <style type="text/css" rel="stylesheet">
            #wrap {
                padding-top: 100px;
            }
            #forkMe {
                position: fixed;
                top: 0;
                right: 0;
                border: 0;
                z-index: 1000;
            }
            em {
                color:#65B042;
            }
            strong {
                color:#E28964;
            }
            .anchor {
                position: reletive;
                top: -50px;
            }
        </style>
    </head>

    <body>
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/fontawesome">FontAwesome for PHP</a>
            </div>

            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav">
                    <li class="dropdown">
                        <a href="#install">
                            {{ FontAwesome::fixedWidth('magic') }} Install
                        </a>
                    </li>
                    <li class="dropdown">
                        <a href="#usage">
                            {{ FontAwesome::fixedWidth('fighter-jet') }} Usage
                        </a>
                    </li>
                    <li class="dropdown">
                        <a href="#api">
                            {{ FontAwesome::fixedWidth('cogs') }} Api
                        </a>
                    </li>
                    <li class="dropdown">
                        <a href="#examples">
                            {{ FontAwesome::fixedWidth('book') }} Examples
                        </a>
                    </li>
                    <li class="dropdown">
                        <a href="#">
                            {{ FontAwesome::fixedWidth('download') }} Download v1.0b
                        </a>
                    </li>
                </ul>
            </div>
        </nav>

        <a href="https://github.com/kevinkhill/LavaCharts" id="forkMe">
            <img src="/packages/khill/fontawesome/images/forkme.png" alt="Fork me on GitHub">
        </a>

        <div class="container" id="wrap">
            <div class="jumbotron">
                <h1>FontAwesome for PHP</h1>
                <p>A composer ready package designed to integrate the fantastic <a href="http://fontawesome.io/">FontAwesome</a> icon set into Laravel, or any other PHP projects!</p>
            </div>

            <br /><br />

            <a class="anchor" name="install">&nbsp;</a>
            <h1>Installation</h1>
                <ul class="nav nav-pills">
                    <li class="active"><a href="#laravel-install" data-toggle="tab">Laravel</a></li>
                    <li><a href="#manual-install" data-toggle="tab">Manual</a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade in active" id="laravel-install">
                        <h1><small>The Laravel Way</small></h1>
                        <h4>First, add the package to your main composer.json file:</h4>
                        <pre class="prettyprint">"Khill\FontAwesome" : "dev-master"</pre>

                        <h4>Next, run composer from the command line in download and install:</h4>
                        <pre class="prettyprint">composer install</pre>

                        <h4>Last, add the ServiceProvider to the app/app.php file:</h4>
                        <pre class="prettyprint">'Khill\FontAwesome\FontAwesomeServiceProvider'</pre>
                    </div>
                    <div class="tab-pane fade" id="manual-install">
                        <h1><small>Manually</small></h1>
                        <h4>First, Download the zip file from above and extract the src folder into your project. Then, include the main class and you're good to go!</h4>
                        <pre class="prettyprint">include("src/Khill/FontAwesome.php");</pre>
                        <h4>Next, Copy the assets (css & fonts) from the library's public folder to your project's assets folder to include them manually:</h4>
                        <pre class="prettyprint">assets/css/bootstrap.min.css
assets/fonts/fontawesome-webfont.eot
assets/fonts/fontawesome-webfont.svg
assets/fonts/fontawesome-webfont.ttf
assets/fonts/fontawesome-webfont.wof
assets/fonts/FontAwesome.otf
                    </pre>
                    <h4>Last, add the link to the FontAwesome CSS file:</h4>
                    <pre class="prettyprint">&lt;link href="[ASSET_DIR]/css/bootstrap.min.css" /&gt;</pre>
                    </div>
                </div><!--/install tabs-->


            <br /><br />
            <br /><br />

            <a name="usage"></a>
            <h1>Usage</h1>
                <ul class="nav nav-pills">
                    <li class="active"><a href="#laravel-usage" data-toggle="tab">Laravel</a></li>
                    <li><a href="#generic-usage" data-toggle="tab">Generic</a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade in active" id="laravel-usage">
                        <h1><small>The Laravel Way</small></h1>
                        <h4>If you are using Laravel, we took care of adding the alias to the facade, so calls are simple:</h4>
                        <pre class="prettyprint">echo FontAwesome::icon('star');</pre>
                    </div>
                    <div class="tab-pane fade in" id="generic-usage">
                        <h1><small>Generic PHP</small></h1>
                        <h4>If you are using this library in a different framework, then create a new instance of FontAwesome, and call from the object:</h4>
                <pre class="prettyprint">$fontAwesome = new FontAwesome;
echo $fontAwesome->icon('star');</pre>
                    </div>
                </div>

            <br /><br />
            <br /><br />

            <a name="api"></a>
            <h1>Api</h1>
                <h4>All of the methods of the API can be called from the FontAwesome class, either through the facade in Laravel, or from the instansiated class if not using Laravel</h4>

                <h3>Inline, Sized, Fixed Width, Rotated and Flipped Icons:</h3>
                <h4>The following methods all follow this signature:</h4>
                <h4><strong>param</strong> $iconLabel <em>string</em> The name of the icon to display (omit the prefix "fa-")</h4>
                <h4><strong>returns</strong> <em>string</em> Icon HTML</h4>
                <pre class="prettyprint">icon($iconLabel);           \\ Standard Icon
lg($iconLabel);             \\ Large Icon
x2($iconLabel);             \\ 2x Icon
x3($iconLabel);             \\ 3x Icon
x4($iconLabel);             \\ 4x Icon
x5($iconLabel);             \\ 5x Icon
fixedWidth($iconLabel);     \\ Vertically Flipped
inverted($iconLabel);       \\ Inverted Icon
rotate90($iconLabel);       \\ 90 Degree Rotated Icon
rotate180($iconLabel);      \\ 180 Degree Rotated Icon
rotate270($iconLabel);      \\ 270 Degree Rotated Icon
flipHorizontal($iconLabel); \\ Horizontally Flipped
flipVertical($iconLabel);   \\ Vertically Flipped</pre>

                <h3>Chaining</h3>
                <h4>The methods can be chained together to create dynamic icons</h4>
                <pre class="prettyprint">fixedWidth()->x2()->rotate90('fighter-jet');</pre>
                <p class="icon">{{ FontAwesome::fixedWidth()->x4()->rotate90('fighter-jet') }}</p>
        </div><!--/container-->
    </body>
</html>