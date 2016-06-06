<?php

require __DIR__ . '/autoload.php';

$url = $_SERVER['REQUEST_URI'];
$parts = explode('/', $url);
$ctrl = $parts[1] ?: 'Index';
$action = $parts[2] ?: 'Default';

$ctrlClass = '\App\Controllers\\'. ucfirst($ctrl);
$controller = new $ctrlClass;

$actionMethodName = 'action' . ucfirst($action);
$controller->$actionMethodName();