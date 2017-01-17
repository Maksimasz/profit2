<?php

namespace App;


class Db
{
    protected  $dbh;

    public  function  __construct()
    {
        $config = require __DIR__ . '/../config.php';
        $dsn = 'mysql:host=' . $config['host'] . ';dbname=' . $config['dbname'] . '';
        $user = $config['user'];
        $password =$config['password'];
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