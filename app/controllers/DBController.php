<?php

namespace app\controllers;
use app\db\DBInterface;
use app\db\MysqlDB;
use app\db\PgsqlDB;
use app\db\Config;

class DBController{
    private $type;

    public function __construct($type){
        $this->type = $type;
    }

    public function getData(){
        $arr = [];

        if($this->type == 'pgsql'){
            $db = new PgsqlDB();
            $query = "SELECT * FROM pg_catalog.pg_tables WHERE schemaname != 'pg_catalog' AND schemaname != 'information_schema'";
            // $query = 'select * from tbl_db_credentials';
            $conn = $db->connect();
            $result = $db->query($query);
            // $db->execute();
            while($row = $db->getResult($result)){
                array_push($arr, $row['tablename']);
                // print_r($row['databasename']);
                // echo '<br>';
            }
            // die();
            $db->close();
            return $arr;
        }
        else if($this->type == 'mysql'){
            $db = new MysqlDB();
            $query = 'show tables';
            // $cred = $config->getMysqlCredentials();
            $conn = $db->connect();
            $result = $db->query($query);
            $db->execute('', '');
            $result = $db->getResult('');
            while($row = $result->fetch_row()){
                array_push($arr, $row[0]);
            }
            $db->close();
            return $arr;
        }
        
    }

    public function getFieldData($tableName){
        if($this->type == 'mysql'){
            $arr=[];
            $db = new MysqlDB();
            $sql = "desc ".$tableName;
            $conn = $db->connect();
            $result = $db->query($sql);
            $db->execute('', '');
            $result = $db->getResult('');
            while($r = $result->fetch_row()){
                array_push($arr, $r[0]);
                // print_r($r);
                // echo "<br>";
            }
            // die();
            return $arr;
        }
    }
}