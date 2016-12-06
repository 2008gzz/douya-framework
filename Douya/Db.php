<?php
/**
 * Created by PhpStorm.
 * User: gaz
 * Date: 12/6/2016
 * Time: 4:42 PM
 */

namespace Douya;


class Db {

    //  数据库连接实例
    private static $instance = [];

    public static function connect($info = [], $name = false)
    {
        $dsn = [
            'type'     => $info['scheme'],
            'username' => isset($info['user']) ? $info['user'] : '',
            'password' => isset($info['pass']) ? $info['pass'] : '',
            'hostname' => isset($info['host']) ? $info['host'] : '',
            'hostport' => isset($info['port']) ? $info['port'] : '',
            'database' => !empty($info['path']) ? ltrim($info['path'], '/') : '',
            'charset'  => isset($info['fragment']) ? $info['fragment'] : 'utf8',
        ];

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