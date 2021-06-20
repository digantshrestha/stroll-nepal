<?php include_once('shared/header.php');?>

<?php

spl_autoload_register(function($classname){
    include_once($classname.".php");
});

use app\controller\DBController;


$controller = new DBController('pgsql');

$result = $controller->getData();
// print_r($result);

foreach($result as $r){
    echo "<h1>hello ".$r."</h1>";
    echo "<br>";
}

?>



<?php include_once('shared/footer.php');?>

