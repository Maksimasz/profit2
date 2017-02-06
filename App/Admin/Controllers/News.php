<?php

namespace  App\Admin\Controllers;


use App\Admin\AdminController;
use App\Model;
use App\Models\Article;
use App\Models\Author;

class  news extends AdminController
{

    public  function  actionAdmin()
    {
      $this->view->news = Article::findAll();
      return  $this->view->render( __DIR__ . '/../Template/Admin-main.php');
    }

    public  function  actionNew()
    {
        return $this->view->render(__DIR__ . '/../Template/Admin-editor.php');
    }

    public  function  actionEdit()
    {
        $this->view->news = Article::findOneById($_GET['id']);
        return $this->view->render(__DIR__ . '/../Template/Admin-reditor.php');
    }

    public  function  actionDelete()
    {
        Article::delete($_GET['id']);
        return $this->actionAdmin();
    }

    public  function  actionSave()
    {
        $article = new Article();

        $article->title = trim( $_POST['title'] );
        $article->text = trim( $_POST['text'] );

        if (!empty($_POST['id']))
        {
            $article->id = $_POST['id'];
        }

        $author = Author::findAuthor(trim( $_POST['author']));
        if (!empty($author))
        {
           $article->author_id = $author->id;
        }
        else
        {
            $aut = new Author();
            $aut->author = trim( $_POST['author']);
            $aut ->save();
            $article->author_id = $aut->id;

        }

        $article->save();
        return $this->actionAdmin();


    }

}







