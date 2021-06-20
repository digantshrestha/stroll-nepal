<?php

namespace app\db;

class PgsqlDB implements DBInterface{
    private $conn;

    public function connect(){
        $host           = "host = ec2-34-232-191-133.compute-1.amazonaws.com";
        $port           = "port = 5432";
        $dbname         = "dbname = dfjh9no7ssbsji";
        $credentials    = "user = zytskhdptazbhi password = 617cf0da88c717176c1b4f29327de9d0ebd84d2c73c6ab7e87cb94d38a34ee28";

        echo $host;
        die();  
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