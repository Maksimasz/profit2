<?php
namespace App\Models;

use App\Db;
use App\Magic;
use App\Model;

class Author extends Model
{
    const TABLE = 'authors';

    public $author;


    /**
     * @param $id
     * @return mixed
     */
    public function Author($id)
    {

        return self::findOneById($id);
            }


}