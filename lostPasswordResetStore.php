<?php
session_start();
require_once("MysqliDb.php");
require_once("user.class.php");

parse_str(http_build_query($_POST),$post);
parse_str($post['data']);

error_log($post['data']);
//print_r($_GET);

//error_log($_POST);

$db = new MysqliDb('localhost','circ','circ','circ');
$data = array(
        'user_password'     =>  MD5($resetPassword)
);
error_log(md5($resetPassword));

$db->where("user_id", $uid);

if($db->update('access',$data)){
    error_log("update successful : ".$uid."  count : ".$db->count);
   // header('Location:lostPasswordResetSuccess.php');
    die("success");
}else{
    die();
}
