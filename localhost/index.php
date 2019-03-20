<?php
define('ROOT', dirname(__FILE__));
require_once(ROOT.'/components/Router.php'); // подключение файлов системы
require_once(ROOT.'/components/Db.php');

$router = new Router();  // вызов роутера (эмоции)
$router->run();
?>






