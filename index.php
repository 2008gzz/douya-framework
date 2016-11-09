<?php
/**
 * Created by PhpStorm.
 * User: gaz
 * Date: 11/9/2016
 * Time: 10:59 AM
 */

$c_str = $_GET['c'];
$c_name = $c_str.'Controller';
// 定义应用目录
define('APP_PATH', 'app/');
$c_path = APP_PATH .'controller/'.$c_name.'.php';
$method = $_GET['a'];
$param = $_GET['param'];
require($c_path);
$controller = new $c_name;
$controller->$method($param);