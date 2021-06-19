<?php

namespace app\db;

interface DBInterface{

    public function connect($host, $port, $user, $password, $dbname);
    public function query($sql);
    public function execute($sql, $args);
    public function getResult($result);
    public function close();
}