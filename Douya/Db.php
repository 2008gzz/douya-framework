<?php
/**
 * Created by PhpStorm.
 * User: gaz
 * Date: 12/6/2016
 * Time: 4:42 PM
 */

namespace douya;


class Db {

    //  数据库连接实例
    private static $instance = [];

    public static function connect($config = [], $name = false)
    {
        $config = "mysql:host=localhost;dbname=test";
        $db = new PDO($config, 'root', '');
        if (true === $db) {
            return $db;
        } else {
            self::$instance[$name] = $db;
        }
        return self::$instance;
    }
}