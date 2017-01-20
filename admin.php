<?php

require __DIR__ . '/autoload.php';

$view = new App\View();

if (!empty($_REQUEST))
{
    $article = new \App\Editor($_REQUEST);
    $article->view = $view;
    $content = $article = $article->commutator();
}
else
{
    $view->news = \App\Models\Article::findAll();
    $content = $view->render( __DIR__ . '/App/Template/Admin-main.php');
}


$view->content = $content;
echo $view->render( __DIR__ . '/App/Template/Admin.php');