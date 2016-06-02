<?php

require __DIR__ . '/autoload.php';

$news = Article::findAll();

$view = new View;
$view->news = $news;

$view->display(__DIR__ . '/templates/index.php');