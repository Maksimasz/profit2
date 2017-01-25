<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 25.01.2017
 * Time: 11:46
 */

namespace App\Controllers;


use App\Models\Article;
use App\Models\Author;
use App\View;

class OneFull
{
    protected $author;
    protected $view;
    protected $article;
    protected $id;

    public function __construct($id)
    {
        $this->author = new Author();
        $this->view = new View();
        $this->id = (int)$id;
    }

    private static function findOneById($id)
    {
    }

    public function articleFull()
    {
        $this->article = $this->view->article = Article::findOneById($this->id);
        $this->article->author_id = $this->author->Author($this->article->author_id);
        echo $this->view->render(__DIR__ . '/../Template/Article.php');
    }

}