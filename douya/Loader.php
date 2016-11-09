<?php
/**
 * Created by PhpStorm.
 * User: gaz
 * Date: 11/9/2016
 * Time: 3:14 PM
 */
class Loader{

    // 自动加载
    public static function autoload($class)
    {
        $file = $class . '.php';
        if (is_file($file)) {
            require_once($file);
        }
    }

    // 注册自动加载机制
    public static function register($autoload = '')
    {
        // 注册系统自动加载
        spl_autoload_register($autoload ?: 'think\\Loader::autoload', true, true);
    }


}