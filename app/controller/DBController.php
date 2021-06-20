<?php

namespace app\controller;
use app\db\DBInterface;
use app\db\MysqlDB;
use app\db\PgsqlDB;
use app\db\Config;

class DBController{
    private $type;

    public function __construct($type){
        $this->type = $type;
        echo $this->type;
        die();
    }

    public function getData(){
        // include_once('../db/config.php');
        // $config = new Config();
        $arr = [];

        if($this->type == 'pgsql'){
            $db = new PgsqlDB();
            $query = "SELECT * FROM pg_catalog.pg_tables WHERE schemaname != 'pg_catalog' AND schemaname != 'information_schema'";
            // $query = 'select * from tbl_db_credentials';
            // $cred = $config->getPgsqlCredentials();
            // $conn = $db->connect($cred['host'], $cred['port'], $cred['user'], $cred['password'], $cred['database']);
            $conn = $db->connect();
            $result = $db->query($query);
            // $db->execute();
            while($row = $db->getResult($result)){
                // array_push($arr, $row['tablename']);
                print_r($row['databasename']);
                echo '<br>';
            }
            die();
            $db->close();
            return $arr;
        }
        else if($this->type == 'mysql'){
            $db = new MysqlDB();
            $query = 'show tables';
            // $cred = $config->getMysqlCredentials();
            $conn = $db->connect($cred['host'], $cred['port'], $cred['user'], $cred['password'], $cred['database']);
            $result = $db->query($query);
            $db->execute('', '');
            $result = $db->getResult('');
            while($row = $result->fetch_assoc()){
                array_push($arr, $row['Tables_in_strolling']);
                // print_r($row['Tables_in_strolling']);
            }
            // die();
            $db->close();
            return $arr;
        }
        
    }
}