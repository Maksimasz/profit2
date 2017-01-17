<?php

require __DIR__ . '/autoload.php';

if (!empty($_GET['edit']))
{
    include __DIR__ . '/App/Template/Editor.php';
}
else
    {
    $news = \App\Models\Article::findAll();
    //var_dump($news);

    include __DIR__ . '/App/Template/Admin.php';
}

