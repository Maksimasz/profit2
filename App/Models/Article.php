<?php
namespace  App\Models;

use App\Model;

class Article extends Model
{
    public $title;
    public $text;
    public $author_id = false;

    const TABLE = 'news';


    /**
     * @param $param
     */
    public function randText($param)
    {
        $news = self::findAll();
    }




}