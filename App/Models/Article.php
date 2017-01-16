<?php
namespace  App\Models;

use App\Model;

class Article extends Model
{

       public $title;
       public $text;

       const TABLE = 'news';


       public function randText($param)
       {
           $news = self::findAll();
       }




}