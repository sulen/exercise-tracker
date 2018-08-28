<?php
use Core\Database;
require '../vendor/autoload.php';
//require_once '../app/global.php';
//require_once '../app/config.php';
require '../core/bootstrap.php';
//phpinfo();
$url = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');
$router = new Router();
$router->loadRoutes('../app/routes.php');
$router->route($url, $_SERVER['REQUEST_METHOD']);

