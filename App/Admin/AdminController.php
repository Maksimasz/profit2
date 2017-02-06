<?php

namespace App\Admin;


 use App\View;

 abstract  class AdminController
{
     protected $view;

     public function __construct()
     {
         $this->view = new View();
     }


     public  function  action($name)
     {
         $aname = 'action'. $name;
         $content = $this->view->content = $this->$aname();
         return $this->view->render( __DIR__ . '/Template/Admin.php');
     }

}