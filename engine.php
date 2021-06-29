<?php

include_once('helpers/inflector_helper.php');

spl_autoload_register(function($classname){
    include_once($classname.".php");
});

use app\controllers\DBController;

$controller = new DBController('mysql');

$result = $controller->getData();

$path = 'app/';
$modelPath = $path."models";

$tablePrefix = ['tbl_'];

function removePrefix($tableName){
    global $tablePrefix;

    foreach($tablePrefix as $p){
        if(substr($tableName, 0, strlen($p)) === $p){
            return str_replace($p, '', $tableName);
        }
    }
}

function writeFile($file, $content){
    $fp = fopen($file, 'w+');
    fwrite($fp, $content);
    fclose($fp);
}

function generateModel($modelPath){
    @mkdir($modelPath);
    global $result;
    global $controller;

    foreach($result as $r){
        $className = ucfirst(camelize(singular(removePrefix($r))));
        echo "Generating model ".$className."<br>";
    
        $content = file_get_contents("templates/models.tpl");
        $content = str_replace('[PHP_TAG]', '<?php', $content);
        $content = str_replace('[NAMESPACE]', str_replace('/', '\\', $modelPath), $content);
        $content = str_replace('[CLASSNAME]', $className, $content);
    
        $fields = $controller->getFieldData($r);
    
        $protectedVars = "";
        $getters = "";
        $setters = "";
    
        foreach($fields as $f){
            $protectedVars .= "protected \$".$f.";\r\n\t";
    
            $field = ucfirst(camelize($f));
            
            $getters .= "public function get".$field."(){
            return \$this->".$f.";\r\n\t}\r\n\t";
    
            $setters .= "public function set".$field."(\$".$f."){
            return \$this->".$f.";\r\n\t}\r\n\t";
        }
    
        $content = str_replace('[PRIVATE_VARIABLES]', $protectedVars, $content);
        $content = str_replace('[GETTERS]', $getters, $content);
        $content = str_replace('[SETTERS]', $setters, $content);
    
        writeFile($modelPath."/".$className.".php", $content);
    }
    
}

// generateModel($modelPath);
?>