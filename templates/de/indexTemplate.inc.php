
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="Tobias Stampfl">
    <link rel="icon" href="favicon.ico">

    <title>Matrix Games</title>

    <link rel="stylesheet" href="css/highlightjs/matrix-games.css">
    <script src="js/highlight.pack.js"></script>
    <script>hljs.initHighlightingOnLoad();</script>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/jumbotron.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>

          <a class="navbar-brand" href="index.php" style="padding-top:10px">
            <p>
                  <img src="images/logo_032x032.png"/>
                  Matrix Games
            </p>

          </a>
        </div>

        <div id="navbar1" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li <? if(MENU == 'index') echo "class=\"active\""; ?>>
              <a href="index.php">Home</a>
            </li>

            <li <? if(MENU == 'mtxPython') echo "class=\"active\""; ?>>
              <a href="mtxPython.php">mtxPython</a>
            </li>

            <li <? if(MENU == 'gameConsole') echo "class=\"active\""; ?>>
              <a href="gameConsole.php">Game Console</a>
            </li>

            <li <? if(MENU == 'clients') echo "class=\"active\""; ?>>
              <a href="clients.php">Clients</a>
            </li>

            <li <? if(MENU == 'developers') echo "class=\"active\""; ?>>
              <a href="developers.php">Developers</a>
            </li>

            <li class="dropdown <? if(in_array(MENU, array('controllerService', 'rendererService', 'license'))) echo "active"; ?>">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Docs <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="docs/mtxPython/index.html">mtxPython</a></li>
                <li <? if(MENU == 'controllerService') echo "class=\"active\""; ?>><a href="controllerService.php">Controller Service (Thrift)</a></li>
                <li <? if(MENU == 'rendererService') echo "class=\"active\""; ?>><a href="rendererService.php">Renderer Service (Thrift)</a></li>
                <li <? if(MENU == 'license') echo "class=\"active\""; ?>><a href="license.php">License (GPLv3)</a></li>
              </ul>
            </li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li>
              <a href="http://forum.matrixgames.rocks">Forum</a>
            </li>
            <li <? if(MENU == 'download') echo "class=\"active\""; ?>>
              <a href="download.php">Get Matrix Games</a>
            </li>
          </ul>
        </div><!--/.navbar-collapse -->
      </div>
    </nav>

    <?
      require_once(CONTENT);
    ?>
    <div class="container">
      <hr>

      <footer>
        <p style="text-align: center;">
          <img src="images/logo_032x032.png"/>
          &nbsp;
          Copyright &copy; 2016, <a href="https://github.com/VonAncken">VonAncken</a>
          &nbsp;&nbsp;
          <span style="display:inline-block;">Licensed under the <a href="license.php">GNU General Public License v3 (GPLv3)</a>.</span>
          &nbsp;&nbsp;
          <span style="display:inline-block;">Join us on <a href="https://github.com/MatrixGamesHub">GitHub</a>.</span>
        </p>

      </footer>
    </div> <!-- /container -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
