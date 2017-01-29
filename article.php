<?php

use App\Models\Article;
use App\Models\Author;

require __DIR__ . '/autoload.php';

$view = new App\View();
$aut = new Author();

$article = $view->article = Article::findOneById($_GET['id']);
if (true == $article->author_id)
{
   $view->author = $aut->Author($article->author_id);
}
echo $view->render(  __DIR__ . '/App/Template/Article.php' );



