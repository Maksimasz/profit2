<?php
use App\Models\Article;
use App\Models\Author;
use App\View;

require __DIR__ . '/../../autoload.php';

$view = new View();
$article = new Article();
$author = new Author();

$article->title = $_POST['title'];
$article->text = $_POST['text'];

$author_test = $author::findAuthor([':firstname' => trim($_POST['firstname']), ':lastname' => trim($_POST['lastname'])]);
if (isset($author_test[0]))
{
    $article->author_id = $author_test[0]->id;
}
else
{
    $author->firstname = trim($_POST['firstname']);
    $author->lastname = trim($_POST['lastname']);
    $author->save();
    $article->author_id = $author->id;
}
$article->save();

$news = $view->news = Article::findAll();
$content = $view->render( __DIR__ . '/Template/Admin-main.php');

$view->content = $content;
echo $view->render( __DIR__ . '/Template/Admin.php');

