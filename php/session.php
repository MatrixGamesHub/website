<?

  require_once('constants.php');

#  session_name('matrix_games');
#  session_start();

  function EnterLocation($menu) {
    define("MENU", $menu);
    define("LOCATION", $menu . '.php');
    define("CONTENT", TEMPLATE . $menu . '.inc.php');
    define("INDEX_TEMPLATE", TEMPLATE . "indexTemplate.inc.php");

    #require_once('constants.php');
#    $_SESSION['menu'] = $menu;
#    $_SESSION['location'] = $menu . '.php';
#    $_SESSION['content'] = TEMPLATE . $menu . '.inc.php';
#    $_SESSION['indexTemplate'] = TEMPLATE . "indexTemplate.inc.php";
  }

?>