<?php
namespace App\Models;

use App\Db;
use App\Model;

class Author extends Model
{
    public  $firstname = '';
    public $lastname = '';

    const TABLE = 'authors';


    /**
     * @param $id
     * @return mixed
     */
    public function Author($id)
    {

        return self::findOneById($id);
            }


}