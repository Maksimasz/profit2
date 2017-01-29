<?php

namespace Admin\Controllers;



use Admin\Controller;
use App\Models\Article;
use App\Models\Author;

class news extends Controller
{


    public function actionNew()
    {
       $news = $this->view->news = Article::findAll();
       return $this->view->render( __DIR__ . '/../Template/Admin-main.php');

    }

    public function actionEdit()
    {
        $this->article = $this->view->article = Article::findOneById($_GET['id']);
        $this->view->author = Author::findOneById($this->article->author_id);
        return  $this->view->render(__DIR__ . '/../Template/Admin-reditor.php');
    }

    public  function actionDelete()
    {
        Article::delete($_GET['id']);
        $news = $this->view->news = Article::findAll();
        return $this->view->render(__DIR__ . '/../Template/Admin-main.php');
    }
}