<?php

namespace app\db;

class MysqlDB implements DBInterface{
    private $conn;
    private $stmt;

    public function connect($host, $port, $user, $password, $dbname){
        $this->conn = new \Mysqli($host, $user, $password, $dbname);
        return $this->conn;
    }

    public function query($sql){
        return $this->stmt = $this->conn->prepare($sql);
        // return $this->stmt;
    }

    public function execute($sql, $args){
        $this->stmt->execute();
    }

    public function getResult($result){
        return $this->stmt->get_result();
    }

    public function close(){
        $this->conn->close();
    }
}