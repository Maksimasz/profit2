<?php

namespace App\Admin;


 use App\Models\Article;
 use App\Models\Author;
 use App\View;

 abstract  class AdminController
{
     protected $view;
     protected $au;
     protected $article;

     public function __construct()
     {
         $this->view = new View();
         $this->au = new Author();
         $this ->article = new Article();
     }


     public  function  action($name)
     {
         $aname = 'action'. $name;
         $content = $this->view->content = $this->$aname();
         return $this->view->render( __DIR__ . '/Template/Admin.php');
     }

}