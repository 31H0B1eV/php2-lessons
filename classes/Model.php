<?php

require __DIR__ . '/../classes/Db.php';

abstract class Model
{

    protected static $table;

    public $id;

    public static function findAll()
    {
        $db = new Db();
        $data = $db->query(
            'SELECT * FROM ' . static::$table,
            [],
            static::class
        );
        return $data;
    }

    public function save()
    {
        if (empty($this->id)) {
            $this->insert();
        } else {
            $this->update();
        }
    }

    public function insert()
    {
        $props = [];
        $binds = [];
        $params = [];
        foreach ($this as $k => $v) {
            if ('id' == $k) {
                continue;
            }
            $props[] = $k;
            $binds[] = ':'.$k;
            $params[':'.$k] = $v;
        }

        $sql = '
        INSERT INTO ' . static::$table . '
        (' . implode(', ', $props) . ')
        VALUES
        (' . implode(', ', $binds) . ')
        ';

        $db = new Db();
        $db->execute($sql, $params);
        $this->id = $db->insertId();
    }

}