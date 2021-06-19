<?php include_once('shared/header.php');?>

<?php

spl_autoload_register(function($classname){
    include_once($classname.".php");
});

use app\controller\DBController;
use app\db\MysqlDB;
use app\db\PgsqlDB;

$controller = new DBController(new MysqlDB);

$result = $controller->getData('show tables');

while($row = $result->fetch_assoc()){
    print_r($row['Tables_in_strolling']);
    echo '<br>';
}

?>


<?php include_once('shared/footer.php');?>

