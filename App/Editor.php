<?php

namespace App;

use App\Models\Article;
use App\Models\Author;

class Editor extends Model
{
   protected  $data = [];
   public  $view;



    public function  __construct($data)
    {
        $this->data = $data;

    }

    public  function commutator()
    {
        if (!empty($this->data['save']))
        {
            return  $this->saveArt();
        }

        switch ($this->data['edit'])
        {
            case 'new':
                        return  $this->new();
                break;

            case 'redit':
                         return $this->redit();
                break;

            case 'del':
                         return $this->del();
                break;

        }
    }

    protected  function new()
    {
       return  $this->view->render( __DIR__ . '/../App/Template/Admin-editor.php');
    }

    protected  function redit()
    {
        $article = $this->view->article = Article::findOneById($this->data['id']);

        if (!empty($article->author_id)) {
            $article->author_id = $article->Author($article->author_id);
        }
        return  $this->view->render( __DIR__ . '/../App/Template/Admin-reditor.php');


    }

    protected  function del()
    {
        self::delete($this->data['id']);
        $this->view->news = \App\Models\Article::findAll();
        return $this->view->render( __DIR__ . '/../App/Template/Admin-main.php');
    }

    protected  function saveArt()
    {
        if (!empty($this->data['id']))
        {
            $id = Author::findOneById($this->data['id']);

        }
        else
        {

            //$article ->title = $_POST['title'];
            //$article ->text = $_POST ['text'];
           // $article ->save();
        }

       echo "<pre>";
       print_r($id);
       echo "</pre>";

    }
}