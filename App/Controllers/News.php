<?php

namespace App\Controllers;

use App\Controller;
use App\Models\Article;
use App\Models\Author;


class News extends Controller
{
    public $number;


     /**
     * @return string
     */
    public function actionAll()
    {
        $news = $this->view->news  = Article::findAll();
        return $this->view->render( __DIR__ .'/../Template/News.php');


    }

    /**
     * @return string
     */
    public function actionCustom()
    {
        $news = $this->view->news  = Article::findCustom($this->number);
        return $this->view->render( __DIR__ .'/../Template/News.php');
    }

    /**
     * @return string
     */
    public function actionArticle()
    {
        $this->article = $this->view->article = Article::findOneById($this->number);
        return $this->view->render(__DIR__ . '/../Template/Article.php');
    }
}