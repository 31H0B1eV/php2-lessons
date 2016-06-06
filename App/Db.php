<?php
namespace App;

class Db
{

    protected $dbh;

    public function __construct()
    {
        $this->dbh = new \PDO('mysql:host=127.0.0.1;dbname=php2', 'root', '');
    }

    public function query($sql, $params=[], $class='')
    {
        $sth = $this->dbh->prepare($sql);
        $sth->execute($params);
        if (empty($class)) {
            return $sth->fetchAll();
        } else {
            return $sth->fetchAll(\PDO::FETCH_CLASS, $class);
        }
    }

    public function execute($sql, $params=[])
    {
        $sth = $this->dbh->prepare($sql);
        return $sth->execute($params);
    }

    public function insertId()
    {
        return $this->dbh->lastInsertId();
    }

}