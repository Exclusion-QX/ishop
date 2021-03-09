<?php

class DataBaseService
{

    protected static $_instance;

    private function __construct() { }

    protected function __clone() { }

    public function __wakeup()
    {
        throw new \Exception("Cannot unserialize a singleton.");
    }


    public static function getInstance(): DataBaseService
    {
        if (self::$_instance === null) {
            self::$_instance = new self;
        }

        return self::$_instance;
    }

    public static function fetchAll(String $sql, $mode = null): Array
    {
        $db = Db::getConnection();

        $result = $db->query($sql);

        return $result->fetchAll($mode);
    }

    public static function fetch(String $sql, $mode = null): Array
    {
        $db = Db::getConnection();

        $result = $db->query($sql);

        return $result->fetch($mode);
    }
}