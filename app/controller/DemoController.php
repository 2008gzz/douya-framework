<?php
/**
 * Created by PhpStorm.
 * User: gaz
 * Date: 11/9/2016
 * Time: 10:59 AM
 */
class DemoController
{
    public function index($param)
    {
        require(APP_PATH.'/model/Model.php');
        $model = new Model();
        $data = $model->getData($param);

        require(APP_PATH.'/view/Index.php');
        $view = new Index();
        $view->display($data);
    }
}