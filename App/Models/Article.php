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

    /**
     * @param $id
     * @return bool
     */
    public function Author($id)
    {

        $news = self::findOneById($id);
        if (0 != $news->author_id)
        {
            $author = new Author();
            return $author::findOneById($id);
        }
        else
        {
            return false;
        }
    }


}