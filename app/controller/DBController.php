<?php

namespace app\controller;
use app\db\DBInterface;

class DBController{
    private $db;

    public function __construct(DBInterface $db){
        $this->db = $db;
    }

    public function getData($query){
        $conn = $this->db->connect('localhost', 'root', 'database1234', 'strolling');
        $this->db->query($query);
        $this->db->execute();
        $result = $this->db->getResult();
        $this->db->close();
        return $result;
        // $conn = new \Mysqli('localhost', 'root', 'database1234', 'strolling');
        // $sql = 'show tables';
        // $stmt = $conn->prepare($sql);
        // $stmt->execute();
        // $result = $stmt->get_result();
        // return $result;
        
    }
}