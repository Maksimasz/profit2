<?php

require __DIR__ . '/autoload.php';

$news = \App\Models\Article::findAll();
//var_dump($news);

include __DIR__ . '/App/Template/Admin.php';