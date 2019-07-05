<!DOCTYPE HTML>

<html lang="en">
<head>
    <!-- Force latest IE rendering engine or ChromeFrame if installed -->
    <!--[if IE]>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <![endif]-->
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap styles -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <!-- Generic page styles -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<?php

require('FileOps.php');
require('Config.php');
?>
<script type="text/javascript" src="jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="app.js"></script>
<?php


$config = new Config();
$dbConfig = $config->get('db');
$host = $dbConfig['host'];
$dbname = $dbConfig['database'];
$db = new PDO("mysql:host=$host;dbname=$dbname", $dbConfig['user'], $dbConfig['pwd']);

$rows = $db->query('SHOW TABLES');
?>

<div class="container">

<h1><i class="glyphicon glyphicon-download-alt"></i>&nbsp;Data Export</h1>
<br><br>

<form method="POST" action="export.inc.php">

<h4>Please select a table to export</h4><br>
<select id='exportTable' class='exportTable' name='exportTable'>
    <option>Select...</option>
    <?php
    foreach($rows as $k => $v){
        $table = array_unique($v);
        foreach($table as $tablename){
             echo "<option name='tablename' value=" . $tablename.">".$tablename."</option>";
        }
    }
    ?>
</select>
<br>
<div id="exportColumns" class="exportColumns">
    <p>
     <br><br><h4>Please select the columns to export</h4><br>
    </p>
    <div id="result" class="result"></div>
    <br>

    <input type="submit" class="btn btn-primary start" value="Start Export">
        <i class="glyphicon glyphicon-download"></i>
    </input>
</div>

</form>
</div>

</body>
</html>

