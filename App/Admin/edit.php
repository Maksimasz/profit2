<?php
use App\Models\Article;
use App\Models\Author;
use App\View;

require __DIR__ . '/../../autoload.php';

$view = new View();

$article = $view->article = Article::findOneById($_GET['id']);
$view->author = Author::findOneById($article->author_id);
$content = $view->render(__DIR__ . '/Template/Admin-reditor.php');

$view->content = $content;
echo $view->render( __DIR__ . '/Template/Admin.php');