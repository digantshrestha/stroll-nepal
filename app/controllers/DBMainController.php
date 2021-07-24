<?php

namespace app\controllers;

use app\db\DBInterface;

class DBMainController{
    private $db;

    public function __construct(DBInterface $db){
        $this->db = $db;
    }

    public function add($arr, $sql){
        $db = $this->db;
        $db->connect();
        $stmt = $db->query($sql);
        $db->execute($stmt, $arr);
        $result = $db->getResult($stmt);
        print_r($result);
    }   

    public function getData($tableName, $id){

    }

    public function getRequired($sql){
        
    }

    public function getAll($tableName){

    }

    public function update($id, $arr){

    }

    public function delete($id){

    }
}

