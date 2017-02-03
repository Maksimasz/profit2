<?php
namespace  App\Models;

use App\Magic;
use App\Model;

class Article extends Model
{
    public $title;
    public $text;
    public $author_id = false;

    const TABLE = 'news';

     use Magic;

    public function __isset($name)
    {
         return  $this->data[$name] = Author::findOneById($this->author_id);
    }

     /**
     * @param $param
     */
    public function randText($param)
    {
        $news = self::findAll();
    }







}