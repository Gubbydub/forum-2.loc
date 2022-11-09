<?php

//FRONT CONTROLLER

// 1. Общие настройки

use LDAP\Result;

ini_set('display error', 1);
error_reporting(E_ALL);

// 2. Подключение файлов системы
define('ROOT', dirname(__FILE__));
require_once(ROOT . '/components/Router.php');
require_once(ROOT . '/components/Db.php');

// 3. Установка соеденения с БД

// 4. Вызов Router

$router = new Router();
$router->run();
