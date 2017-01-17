<?php

namespace App;


class Db
{
    protected  $dbh;

    /**
     * Db constructor.
     */
    public  function  __construct()
    {
        $data = require __DIR__ . '/../config.php';
        $dsn = 'mysql:host=' . $data['host'] . ';dbname=' . $data['dbname'] . '';
        $user = $data['user'];
        $password =$data['password'];
        $this->dbh = new \PDO($dsn, $user, $password);

    }

    public function query($sql, $data = [], $class = null)
    {
        $sth = $this->dbh->prepare($sql);
        $res = $sth->execute($data);
        if(false === $res)
        {
            die('Db error in ' . $sql);
        }
        if(null === $class)
        {
            return $sth->fetchAll();
        } else {
            return $sth->fetchAll(\PDO::FETCH_CLASS, $class);
        }

    }

    public function execute($query, $params = []): bool
    {
        $sth = $this->dbh->prepare($query);
        return  $sth->execute($params);
    }
}