<?php
    spl_autoload_register(function($classname){
        include_once($classname.".php");
    });

    use app\db\MysqlDB;

    define('BRANDNAME', 'Stroll Nepal');
    $REPO = new MysqlDB();

?>