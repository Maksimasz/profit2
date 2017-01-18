<?php

require __DIR__ . '/autoload.php';

$view = new App\View();



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
   if ($_GET['edit']== 'ed')
   {
       $view->article = App\Models\Article::findOneById($_GET['id']);

   }
   echo  $view->render(__DIR__ . '/App/Template/Editor.php');
}
elseif (!empty($_GET['del']))
{
    $article = new App\Models\Article();
    $article->delete($_GET['del']);
    $view->news = \App\Models\Article::findAll();
  echo  $view->render( __DIR__ . '/App/Template/Admin.php');
}
else
    {
    $view->news = \App\Models\Article::findAll();

    echo $view->render( __DIR__ . '/App/Template/Admin.php');
}

