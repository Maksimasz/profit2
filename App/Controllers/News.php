<?php

namespace App\Controllers;

use App\Models\Article;
use App\Models\Author;
use App\View;

class News
{

    protected $view;
    protected $author;
    protected $article;

    public function __construct()
    {
        $this->view = new View();
        $this->author = new Author();

    }

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
}