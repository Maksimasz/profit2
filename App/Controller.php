<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 25.01.2017
 * Time: 16:16
 */

namespace App;


use App\Models\Author;

abstract class Controller
{
    protected $view;
    protected $author;
    protected $article;
    protected $id;

    public function __construct()
    {
        $this->author = new Author();
        $this->view = new View();
    }



}