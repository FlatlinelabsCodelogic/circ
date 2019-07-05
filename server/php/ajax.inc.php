<?php
require('Config.php');

$config = new Config();
$dbConfig = $config->get('db');
$host = $dbConfig['host'];
$dbname = $dbConfig['database'];

$db = new PDO("mysql:host=$host;dbname=$dbname", $dbConfig['user'], $dbConfig['pwd']);

$tableName = $_GET['table'];

$columns = $db->query("SHOW COLUMNS FROM `".$tableName."`");
$strResult = "";
while($result = $columns->fetch(PDO::FETCH_ASSOC)) {
    $strResult .= "<input type='checkbox' name=" . $result["Field"] . " value=" . $result["Field"] . ">&nbsp;&nbsp;" . $result["Field"] . "</input><br>";
}

echo "<pre>";
print_r($strResult);
echo "</pre>";