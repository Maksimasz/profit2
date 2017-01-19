<?php

require __DIR__ . '/autoload.php';

$view = new App\View();
$article = new \App\Models\Article();


$news = $view->news  = \App\Models\Article::findCustom(3);

foreach ($news as $key => $value)
{
    if (!empty($value->author_id)) {
        $news[$key]->author_id = $article->Author($value->author_id);
    }
}

echo $view->render( __DIR__ .'/App/Template/News.php');
