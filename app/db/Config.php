<?php

namespace app\db;

class Config{

    public function getMysqlCredentials(){
        define('MYSQL_CREDENTIALS', [
            'host'=>'localhost', 
            'user'=>'root',
            'password'=>'database1234',
            'database'=>'strolling',
            'port'=>''
        ]);

        return MYSQL_CREDENTIALS; 
    }

    public function getPgsqlCredentials(){
    define('PGSQL_CREDENTIALS', [
        'host'=>'ec2-34-232-191-133.compute-1.amazonaws.com', 
        'user'=>'zytskhdptazbhi',
        'password'=>'617cf0da88c717176c1b4f29327de9d0ebd84d2c73c6ab7e87cb94d38a34ee28',
        'database'=>'dfjh9no7ssbsji',
        'port'=>'5432'
    ]);

    return PGSQL_CREDENTIALS;
}
}

     
