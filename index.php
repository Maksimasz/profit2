<?php

require __DIR__ . '/autoload.php';


$news = \App\Models\Article::findCustom(3);


include __DIR__ . '/App/View/News.php';