<?php

require __DIR__ . '/autoload.php';

var_dump( 1 <=> 2 ); // -1
var_dump( 2 <=> 1 ); // 1
var_dump( 2 <=> 2 ); // 0

$a = [1, 3, 7, 2, 4, 8, 0];
usort($a, function ($v1, $v2) {
    return $v1->price <=> $v2->price;
});
var_dump($a);


/*
$url = $_SERVER['REQUEST_URI'];
$parts = explode('/', $url);
$ctrl = $parts[1] ?: 'Index';
$action = $parts[2] ?? 'Default';

try {

    $ctrlClass = '\App\Controllers\\'. ucfirst($ctrl);
    $controller = new $ctrlClass;

    $actionMethodName = 'action' . ucfirst($action);
    $controller->$actionMethodName();

} catch ( Exception $e )
{
    echo 'Ошибка: ' . $e->getMessage();
}
*/