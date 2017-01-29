<?php

namespace  App\Admin\Controllers;


use App\Admin\AdminController;
use App\Models\Article;
use App\Models\Author;



class  news extends AdminController
{


    protected function authorString($news)
    {
        foreach ($news as $key => $value)
        {
            $news[$key]->author_id = $this->author->Author($value->author_id);
        }
        return $news;
    }


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
        $news = $this->view->news = Article::findOneById($_GET['id']);
        $this->view->author =Author::findOneById($news->author_id );
        return $this->view->render(__DIR__ . '/../Template/Admin-reditor.php');
    }

    public  function  actionDelete()
    {
        Article::delete($_GET['id']);
        return $this->actionAdmin();
    }

    public  function  actionSave()
    {
        $this->article->title = trim($_POST['title']);
        $this->article->text = trim($_POST['text']);
        if (!empty($_POST['id']))
        {
            $this->article->id = (int)$_POST['id'];
        }

        $author = Author::findAuthor([':author' => trim($_POST['author'])]);
        if (!empty($author->id))
        {
            $this->article->author_id = $author->id;
        }
        else
            {
                $this->au->author = trim($_POST['author']);
                $this->au->save();
                $this->article->author_id = $this->au->id;
            }

         $this->article->save();
         return $this->actionAdmin();


    }

}







