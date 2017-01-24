<?php

use App\Models\Article;

require __DIR__ . '/autoload.php';

$view = new App\View();

$news = $view->news = Article::findAll();
$content = $view->render( __DIR__ . '/App/Admin/Template/Admin-main.php');

$view->content = $content;
echo $view->render( __DIR__ . '/App/Admin/Template/Admin.php');