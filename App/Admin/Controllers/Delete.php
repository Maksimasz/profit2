<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 25.01.2017
 * Time: 14:19
 */

namespace App\Admin\Controllers;


use App\Models\Article;
use App\View;

class Delete
{
    protected $id;
    protected $view;
    protected $artcle;

    public function __construct($id)
    {
        $this->id = $id;
        $this->view = new View();
    }

    public function del()
    {
        Article::delete($this->id);
        $news = $this->view->news = Article::findAll();
        return $this->view->render( __DIR__ . '/../Template/Admin-main.php');

    }
}