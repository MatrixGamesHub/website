<?

  header("Content-Type: text/html; charset=utf-8mb");
  setlocale(LC_ALL, 'de_DE@euro', 'de_DE', 'de', 'ge', 'de_DE.utf8', 'deu_deu', 'deu', 'german');

  ini_set('display_errors', 1);
  error_reporting(E_ALL);

  require_once('php/session.php');

  EnterLocation('download');
  require_once(INDEX_TEMPLATE);

?>
