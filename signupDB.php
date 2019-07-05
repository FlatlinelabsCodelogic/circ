<?php
session_start();
require_once("MysqliDb.php");
require_once("user.class.php");

parse_str(http_build_query(trim($_POST)), $post);
parse_str($post['data']);

error_log($post['data']);

$db = new MysqliDb('localhost', 'circ', 'circ', 'circ');
$data = array(
    'firstName'    =>      $f5,
    'lastName'     =>      $f6,
    'email'        =>      $f2,
    'city'         =>      $f7,
    'state'        =>      $f8,
    'phone'        =>      $f13
);
$id = $db->insert('user', $data);

$user = new user($db);
    $user->setFirstName($f5);
    $user->setLastName($f6);
    $user->setEmail($f2);
    $user->setCity($f7);
    $user->setState($f8);
    $user->setUserName($f1);

unset($data);
$data = array(
    'card_number'   =>  md5($f9),
    'cvv'           =>  $f11,
    'zip'           =>  $f12,
    'user_id'       =>  $id
);
$cid = $db->insert('credit_card', $data);

unset($data);
$data = array(
    'user_name'     =>  $f1,
    'user_password' =>  md5($f3),
    'user_id'       =>  $id
);
$aid = $db->insert('access', $data);

$_SESSION['user_id'] = $id;
$_SESSION['userObject'] = serialize($user);
$_SESSION['authenticated'] = $f1;
die("success");



