<?php

use App\Models\Article;
use App\Models\Author;

require __DIR__ . '/autoload.php';

$view = new App\View();
$author = new Author();

$news = $view->news  = Article::findCustom(3);

foreach ($news as $key => $value)
{
    $news[$key]->author_id = $author->Author($value->author_id);
}
echo $view->render( __DIR__ .'/App/Template/News.php');

