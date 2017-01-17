<?php

require __DIR__ . '/autoload.php';


$news = \App\Models\Article::findCustom(3);
//var_dump($news);

include __DIR__ . '/App/Template/News.php';