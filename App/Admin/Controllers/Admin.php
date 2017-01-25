<?php


namespace App\Admin\Controllers;

use App\Models\Article;
use App\Models\Author;
use App\View;
class Admin
{
    protected $content;
    protected $view;


    public function __construct($content)
    {
        $this->view = new View();
        $this->content  = $content;
    }

    public function display()
    {
        $this->view->content = $this->content;
        echo $this->view->render( __DIR__ . '/../Template/Admin.php');
    }

}