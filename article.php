<?php

use App\Models\Article;
use App\Models\Author;

require __DIR__ . '/autoload.php';

$view = new App\View();
$author = new Author();

$article = $view->article = Article::findOneById($_GET['id']);
$article->author_id = $author->Author($article->author_id);

echo $view->render(  __DIR__ . '/App/Template/Article.php' );



