<?php include_once('shared/header.php');?>

<?php

spl_autoload_register(function($classname){
    include_once($classname.".php");
});

use app\controller\DBController;

$controller = new DBController('pgsql');

echo 'hello';
die();

$result = $controller->getData();
// print_r($result);

foreach($result as $r){
    echo "<h1>hello ".$r."</h1>";
    echo "<br>";
}

        // $host           = "host = ec2-34-232-191-133.compute-1.amazonaws.com";
        // $port           = "port = 5432";
        // $dbname         = "dbname = dfjh9no7ssbsji";
        // $credentials    = "user = zytskhdptazbhi password = 617cf0da88c717176c1b4f29327de9d0ebd84d2c73c6ab7e87cb94d38a34ee28";

        // $db = pg_connect("$host $port $dbname $credentials");

        // $query = "SELECT * FROM pg_catalog.pg_tables WHERE schemaname != 'pg_catalog' AND schemaname != 'information_schema'";
        // $result = pg_query($db, $query);
        // while($row = pg_fetch_assoc($result)){
        //     print_r($row['tablename']);
        //     echo '<br>';
        // }





?>



<?php include_once('shared/footer.php');?>

