<?php

require __DIR__ . '/autoload.php';

$view = new App\View();
$aut = new \App\Models\Article();


$news = $view->news  = \App\Models\Article::findCustom(3);

foreach ($news as $key => $value)
{
    $news[$key]->author = $aut->Author($value->author_id);
}










echo "<pre>";
print_r($news);



$view->render( __DIR__ .'/App/Template/News.php');
