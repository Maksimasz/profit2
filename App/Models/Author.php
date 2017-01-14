<?php
namespace App\Models;

use App\Model;

class Author extends Model
{
    public $firstname;
    public $lastname;

    const TABLE = 'authors';

}