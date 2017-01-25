<?php

namespace App\Controllers;

use App\Controller;
use App\Models\Article;

class News extends Controller
{



    protected function authorString($news)
    {
        foreach ($news as $key => $value)
        {
            $news[$key]->author_id = $this->author->Author($value->author_id[0]);
        }
        return $news;
    }

    public function default()
    {
        $news = $this->view->news  = Article::findAll();
        $news = $this->authorString($news);
        return $this->view->render( __DIR__ .'/../Template/News.php');


    }

    public function custom($number)
    {
        $news = $this->view->news  = Article::findCustom($number);
        $news = $this->authorString($news);
        return $this->view->render( __DIR__ .'/../Template/News.php');
    }

    public function articleFull($id)
    {
        $this->id = $id;
        $this->article = $this->view->article = Article::findOneById($this->id);
        $this->article->author_id = $this->author->Author($this->article->author_id);
        return $this->view->render(__DIR__ . '/../Template/Article.php');
    }
}