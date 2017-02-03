<?php

namespace App;


abstract class Controller
{
    protected $view;

    public function __construct()
    {
       $this->view = new View();
    }

    protected function access() :bool
    {
        return true;
    }

    public function action($name)
    {
        $nameAction = 'action' . $name;
        if ($this->access())
        {
           return $this->$nameAction();
        }
        else
        {
            die('Доступ закрыт');
        }

    }



}