<?
  header("Content-Type: text/html; charset=utf-8mb");
  setlocale(LC_ALL, 'de_DE@euro', 'de_DE', 'de', 'ge', 'de_DE.utf8', 'deu_deu', 'deu', 'german');

  ini_set('display_errors', 1);
  error_reporting(E_ALL);

  require_once('constants.php');

  session_name('matrix_games');
  session_start();

  function EnterLocation($menu) {
    define("MENU", $menu);
    define("LOCATION", $menu . '.php');
    define("CONTENT", TEMPLATE . $menu . '.inc.php');
    define("INDEX_TEMPLATE", TEMPLATE . "indexTemplate.inc.php");
  }

?>