<?php

require __DIR__ . '/models/Article.php';

$article = new Article;
$article->title = 'Марсианин съел бомжа';
$article->lead = 'Сенсация в Чухломе!';
$article->save();

echo $article->id;