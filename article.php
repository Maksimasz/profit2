<?php

require __DIR__ . '/autoload.php';

$view = new App\View();

$au = $view->article = \App\Models\Article::findOneById($_GET['id']);
if (!empty($au->author_id)) {
    $au->author_id = $au->Author($au->author_id);
}

echo $view->render(  __DIR__ . '/App/Template/Article.php' );



