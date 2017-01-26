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

    public $id;

    public function __construct()
    {
        $this->author = new Author();
        $this->view = new View();
    }

    protected function assecc() :bool
    {
        return true;
    }

    public function action($name)
    {
        $nameAction = 'action' . $name;
        if ($this->assecc())
        {
           return $this->$nameAction();
        }
        else
        {
            return 'Доступ закрыт';
        }

    }



}