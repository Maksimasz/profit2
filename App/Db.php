<?php

namespace App;


class Db
{
    protected  $dbh;

    public  function  __construct()
    {
        $config = new Config();
        $dsn = 'mysql:host=' . $config->data['db']['host'] . ';dbname=' . $config->data['db']['dbname'] . '';
        $user = $config->data['db']['user'];
        $password =$config->data['db']['password'];
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