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
    <script type="text/javascript" src="jquery-1.7.1.min.js"></script>

</head>
<body>

<?php

require('Config.php');

$config = new Config();
$dbConfig = $config->get('db');
$host = $dbConfig['host'];
$dbname = $dbConfig['database'];
?>

<div class="container">

    <h1><i class="glyphicon glyphicon-download-alt"></i>&nbsp;Data Export</h1>
    <br><br>

    <?php

echo "<h4>Attempting Database connection...</h4>";
$db = new PDO("mysql:host=$host;dbname=$dbname", $dbConfig['user'], $dbConfig['pwd']);
echo "<h4>Database connection successful</h4>"."<br>";

$tableName = array_shift($_POST);
$columns = implode(",", $_POST);
echo "<h4>Pulling recordds with columns selected from desired database table.</h4>"."<br>";
$stmt = $db->query("SELECT ".$columns."  FROM `".$tableName."`");
$export = $stmt->fetch(PDO::FETCH_ASSOC);

echo "<h4>Creating file object for output.</h4>"."<br>";
$file = new SplFileObject("files/export.csv", "w");
echo "<h4>Building csv output file</h4>"."<br>";
while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
    $recout = implode(",", $row);
    $file->fwrite($recout."\n");
}
echo "<h4>File : &quot;files/export.csv&quot;...created...populated...saved.</h4>"."<br><br>";
echo "<h4>Export complete.</h4>";

?>
</div>
</body>
</html>
