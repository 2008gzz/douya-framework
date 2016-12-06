<?php
/**
 * Created by PhpStorm.
 * User: gaz
 * Date: 12/6/2016
 * Time: 4:33 PM
 */
namespace Douya\Db;

use Douya;

class Select {

    public function __construct($connection = null, $model = '')
    {
        $this->connection = $connection ?: Db::connect([], true);
    }
}