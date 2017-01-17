<?php

require __DIR__ . '/autoload.php';

$article = \App\Models\Article::findOneById($_GET['id']);
//var_dump($article);

include __DIR__ . '/App/Template/Article.php';
