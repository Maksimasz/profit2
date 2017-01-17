<?php

require __DIR__ . '/autoload.php';

if (isset($_POST['save']))
{
   // var_dump($_POST);
    $article = new App\Models\Article();
    $article ->title = $_POST['title'];
    $article ->text = $_POST ['text'];
    $article ->save();
}

if (!empty($_GET['edit']))
{
   if (!empty($_GET['ed']))
   {
       $article = App\Models\Article::findOneById($_GET['id']);
       //var_dump($article);
   }
    include __DIR__ . '/App/Template/Editor.php';
}
elseif (!empty($_GET['del']))
{
    $article = new App\Models\Article();
    $article->delete($_GET['del']);
    $news = \App\Models\Article::findAll();
    include __DIR__ . '/App/Template/Admin.php';
}
else
    {
    $news = \App\Models\Article::findAll();
    //var_dump($news);

    include __DIR__ . '/App/Template/Admin.php';
}

