<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 25.01.2017
 * Time: 13:39
 */

namespace App\Admin\Controllers;


use App\Models\Article;
use App\View;

class news
{
    protected $view;

    public function __construct()
    {
        $this->view = new View();
    }

    public function new()
    {
       $news = $this->view->news = Article::findAll();
        return $this->view->render( __DIR__ . '/../Template/Admin-main.php');

    }
}