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

    public function News()
    {
       $news = self::findAll();
       foreach ($news as $key => $val)
        {
            if (true == $val->author_id)
            {
                $news[$key]->author_id = Author::findOneById($val->author_id);
            }
         }
         return $news;
    }




}