<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 25.01.2017
 * Time: 13:57
 */

namespace App\Admin\Controllers;


use App\Models\Article;
use App\Models\Author;
use App\View;

class Edit
{

    protected $view;
    protected $artcle;
    protected $id;

    public function __construct($id)
    {
        $this->view = new View();
        $this->id = $id;
    }

    public function redit()
    {
        $this->article = $this->view->article = Article::findOneById($this->id);
        $this->view->author = Author::findOneById($this->article->author_id);
        return  $this->view->render(__DIR__ . '/../Template/Admin-reditor.php');
    }



}