<?php

require __DIR__ . '/autoload.php';

//$config = new \App\Config;

$news = \App\Models\Article::findCustom(3);
//var_dump($news);

include __DIR__ . '/App/View/News.php';