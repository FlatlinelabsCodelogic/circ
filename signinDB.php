<?php
session_start();
require_once("MysqliDb.php");
require_once("user.class.php");

parse_str(http_build_query($_POST), $post);
parse_str($post['data']);


$db = new MysqliDb('localhost','circ','circ','circ');
$db->where ("user_name", $semail);
$db->where ("user_password", md5($spass));
$data = $db->get("access");
if($db->count > 0){
    $_SESSION['authenticated'] = $semail;
    $db->where("user_id", $data['user_id']);
    $userData = $db->getOne("user");
    if($db->count > 0){
        $user = new user($db);
        $user->setEmail($userData['email']);
        $_SESSION['userObject'] = serialize($user);
    }
    die("success");
}


