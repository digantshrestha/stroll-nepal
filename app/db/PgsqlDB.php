<?php

namespace app\db;

class PgsqlDB implements DBInterface{
    private $conn;
    private $stmt;

    public function connect($host, $port, $user, $password, $dbname){
        $host           = "host = $host";
        $port           = "port = $port";
        $dbname         = "dbname = $dbname";
        $credentials    = "user = $user password = $password";

        $this->conn = pg_connect("$host $port $dbname $credentials");
    }

    public function query($sql){
        return pg_query($this->conn, $sql);
    }

    public function execute($sql, $args){
        // return $this->stmt->execute();
    }

    public function getResult($result){
        return pg_fetch_assoc($result);
    }

    public function close(){
        pg_close($this->conn);
    }
}