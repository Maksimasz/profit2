<?php
use App\Models\Article;
use App\View;

require __DIR__ . '/../../autoload.php';

$view = new View();


Article::delete($_GET['id']);
$news = $view->news = Article::findAll();
$content = $view->render( __DIR__ . '/Template/Admin-main.php');

$view->content = $content;
echo $view->render( __DIR__ . '/Template/Admin.php');