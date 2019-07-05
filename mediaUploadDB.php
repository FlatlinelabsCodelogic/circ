<?php
/**
 * Created by PhpStorm.
 * User: goldenboy
 * Date: 7/1/2019
 * Time: 8:14 PM
 */


session_start();
require_once ("MysqliDb.php");

$db = new MysqliDb("localhost", "circ", "circ", "circ");
$data = array(
    'name'          =>  $_FILES['name'][0],
    'description'   =>
)