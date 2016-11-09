<?php
/**
 * Created by PhpStorm.
 * User: gaz
 * Date: 11/9/2016
 * Time: 11:16 AM
 */
class Model {
    private $data = array(
        'title' => 'Hello furzoom',
        'welcome' => 'Welcome to furzoom.com',
    );
    public function getData($key) {
        return $this->data[$key];
    }
}