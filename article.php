<?php

require __DIR__ . '/autoload.php';

$view = new App\View();

$view->article = \App\Models\Article::findOneById($_GET['id']);

echo $view->render(  __DIR__ . '/App/Template/Article.php' );

//var_dump($article);


