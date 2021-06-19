<?php

spl_autoload_register(function($classname){
    include_once($classname.".php");
});

use app\controller\DBController;


$controller = new DBController('pgsql');

$result = $controller->getData();
// print_r($result);

foreach($result as $r){
    
}

?>
