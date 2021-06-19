<?php

namespace app\db;

class MysqlDB implements DBInterface{
    private $conn;
    private $stmt;

    public function connect($host, $user, $password, $dbname){
        $this->conn = new \Mysqli($host, $user, $password, $dbname);
        return $this->conn;
    }

    public function query($sql){
        $this->stmt = $this->conn->prepare($sql);
        // return $this->stmt;
    }

    public function execute(){
        $this->stmt->execute();
    }

    public function getResult(){
        $result = $this->stmt->get_result();
        return $result;
    }

    public function close(){
        $this->conn->close();
    }
}