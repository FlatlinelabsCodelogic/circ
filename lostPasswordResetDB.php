<?php
session_start();
require_once("MysqliDb.php");
require_once("user.class.php");

parse_str(http_build_query($_GET));

$db = new MysqliDb('localhost','circ','circ','circ');
$db->where("token", $t);
$data = $db->getOne("password_reset_request");
if($db->count > 0){
    error_log("token : ".$t);
    header('Location:lostPasswordReset.php?uid='.$uid);
    exit;
}else{
    header('Location:lostPasswordResetBadToken.php');
}




