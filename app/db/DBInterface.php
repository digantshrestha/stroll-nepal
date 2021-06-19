<?php

namespace app\db;

interface DBInterface{

    public function connect($host, $user, $password, $dbname);
    public function query($sql);
    public function execute();
    public function getResult();
    public function close();
}