<?php
namespace Admin;

use App\View;

abstract class Controller
{

    protected $view;


    public function __construct()
    {
        $this->view = new View();
    }


    public function admin($name)
    {
        $nameAction = 'action' . $name;
        $this->view->content = $this->$nameAction();
        return $this->view->render(__DIR__ . '/Template/Admin.php');
    }


}