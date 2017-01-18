<?php
namespace  App\Models;

use App\Model;

class Article extends Model
{

    public $title;
    public $text;
    public $author = false;

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
        if ($news->author_id != 0)
        {
            $aut = new Author();
            return $aut::findOneById($id);
        }
        else
        {
            return false;
        }
    }






}