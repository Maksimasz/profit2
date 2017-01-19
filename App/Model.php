<?php
namespace App;


abstract class Model
{
    public $id;
    public $author_id = false;

    /**
     * @return int
     */
    public static function countAll ()
    {
        $db = new Db();
        $sql = 'SELECT COUNT(*) AS num FROM ' . static::TABLE;
        return (int)$db->query($sql, [], static::class)[0]->num;
    }

    /**
     * @return array
     */
    public static function findAll()
    {
        $db = new Db();
        $sql = 'SELECT * FROM ' . static::TABLE;
        return $db->query($sql, [], static::class);
    }

    /**
     * @param $id
     * @return mixed
     */
    public static function findOneById($id)
    {
        $db = new Db();
        $sql = 'SELECT * FROM ' . static::TABLE . ' WHERE id=:id';
        return $db->query($sql, [':id' => $id], static::class)[0];
    }


    /**
     * @param $custom
     * @return array
     */
    public static function findCustom($custom)
    {
        $db = new Db();
        $sql = 'SELECT * FROM ' . static::TABLE . ' ORDER BY id DESC LIMIT ' . $custom;
        return $db->query($sql, [], static::class);
    }

    /**
     * @return bool
     */
    public function isNew()
    {
        return null === $this->id;
    }

    /**
     * @return bool
     */
    public function update()
    {
        if ($this->isNew()) {
            return false;
        }
        $sets = [];
        $data = [];
        foreach ($this as $key => $value) {
            $data[':' . $key] = $value;
            if ('id' == $key) {
                continue;
            }
            $sets[] = $key . '=:' . $key;
        }
        $db = new Db();
        $sql = 'UPDATE ' . static::TABLE . ' SET ' . implode(',', $sets) . ' WHERE id=:id';
        return $db->execute($sql, $data);
    }

    /**
     * @return bool
     */
    public function insert()
    {
        if (!$this->isNew()) {
            return false;
        }
        $keys = [];
        $vals = [];
        $data = [];
        foreach ($this as $key => $value) {
            if ('id' == $key) {
                continue;
            }
            $data[':' . $key] = $value;
            $keys[] = $key;
            $vals[] = ':' . $key;
        }
        $db = new Db();
        $sql = 'INSERT INTO ' . static::TABLE . '(' . implode(',', $keys) . ') VALUES (' . implode(',', $vals) . ')';

        $res = $db->execute($sql, $data);
        $this->id = $db->lastInsertId();
        return $res;
    }

    /**
     *
     */
    public function save()
    {
        if ($this->isNew()) {
            $this->insert();
        } else {
            $this->update();
        }
    }

    /**
     * @param $id
     * @return bool
     */
    public function delete($id)
    {
        $this->id = $id;
        if ($this->isNew()) {
            return false;
        }
        $data = [':id' => $this->id ];
        $db = new Db();
        $sql = 'DELETE FROM ' . static::TABLE . ' WHERE id=:id ' ;
        $res = $db->execute($sql, $data);

    }
}