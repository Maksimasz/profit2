<?php

use App\Models\Article;


require __DIR__ . '/autoload.php';

$article = new Article();
$view = new App\View();

$news = $view->news = $article->News();
echo $view->render( __DIR__ .'/App/Template/News.php');

