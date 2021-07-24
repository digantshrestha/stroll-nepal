<?php

namespace app\db;

class MysqlDB implements DBInterface{
    private $conn;
    private $stmt;

    public function connect(){
        $this->conn = new \Mysqli('localhost', 'root', 'database1234', 'strolling');
        return $this->conn;
    }

    public function query($sql){
        return $this->stmt = $this->conn->prepare($sql);
        // return $this->stmt;
    }

    public function execute($stmt, $arr){
        $bindStatement = '';
        $len = count($arr);
        $s = str_repeat('s', $len);

        $this->stmt->bind_param($s, ...$arr);

        $this->stmt->execute();
    }

    public function getResult($result){
        return $this->stmt->get_result();
    }

    public function close(){
        $this->conn->close();
    }
}