<?php

namespace app\controllers;

use app\controllers\DBController;
use app\db\DBInterface;

class DBMainController{
    private $db;

    public function __construct(DBInterface $db){
        $this->db = $db;
    }

    public function add($tableName, $arr){
        $dbController = new DBController('mysql');

        $result = $dbController->getFieldData("tbl_".$tableName);

        echo $arr->getPlaceName();
    }   

    public function update($id, $arr){

    }

    public function delete($id){

    }
}

