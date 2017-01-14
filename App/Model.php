<?php
namespace App;


abstract class Model
{
    public $id;

    public static function countAll ()
    {
        $db = new Db();
        $sql = 'SELECT COUNT(*) AS num FROM ' . static::TABLE;
        return (int)$db->query($sql, [], static::class)[0]->num;
    }

    public static function findAll()
    {
        $db = new Db();
        $sql = 'SELECT * FROM ' . static::TABLE;
        return $db->query($sql, [], static::class);
    }

    public static function findOneById($id)
    {
        $db = new Db();
        $sql = 'SELECT * FROM ' . static::TABLE . ' WHERE id=:id';
        return $db->query($sql, [':id' => $id], static::class)[0];
    }

    public static function findCustom($custom)
    {
        $db = new Db();
        $sql = 'SELECT * FROM ' . static::TABLE . ' ORDER BY id DESC LIMIT ' . $custom;
        return $db->query($sql, [], static::class);
    }
}