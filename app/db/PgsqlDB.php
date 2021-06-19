<?php

namespace app\db;

class PgsqlDB implements DBInterface{
    private $conn;
    private $stmt;

    public function connect($host, $user, $password, $dbname){
        // $this->conn = new \Mysqli($host, $user, $password, $dbname);
        echo 'connected to pgsql';
    }

    public function query($sql){
        $this->stmt = $this->conn->prepare($sql);
        return $this->stmt;
    }

    public function execute(){
        return $this->stmt->execute();
    }

    public function getResult(){
        return $this->stmt->get_result();
    }

    public function close(){
        $this->conn->close();
    }
}