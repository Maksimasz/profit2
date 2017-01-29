<?php

namespace App\Controllers;

use App\Controller;
use App\Models\Article;

class News extends Controller
{
    public $number;


    /**
     * @param $news
     * @return mixed
     */
    protected function authorString($news)
    {
        foreach ($news as $key => $value)
        {
            $news[$key]->author_id = $this->author->Author($value->author_id);
        }
        return $news;
    }

    /**
     * @return string
     */
    public function actionAll()
    {
        $news = $this->view->news  = Article::findAll();
        $news = $this->view->author = $this->authorString($news);
        return $this->view->render( __DIR__ .'/../Template/News.php');


    }

    /**
     * @return string
     */
    public function actionCustom()
    {
        $news = $this->view->news  = Article::findCustom($this->number);
        $news = $this->view->author = $this->authorString($news);
        return $this->view->render( __DIR__ .'/../Template/News.php');
    }

    /**
     * @return string
     */
    public function actionArticle()
    {
        $this->article = $this->view->article = Article::findOneById($_GET['id']);
        $this->article->author_id = $this->author->Author($this->article->author_id);
        return $this->view->render(__DIR__ . '/../Template/Article.php');
    }
}