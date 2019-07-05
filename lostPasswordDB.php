<?php
session_start();

use PHPMailer\PHPMailer\PHPMailer;

require_once("MysqliDb.php");
require_once("user.class.php");
require_once("html.php");
require "vendor\autoload.php";


parse_str(http_build_query($_POST), $post);
parse_str($post['data']);
error_log($post['data']);
$db = new MysqliDb('localhost','circ','circ','circ');
$db->where ("email", $semail);
$data = $db->getOne("user");
if($db->count > 0){
    error_log("lostPassword : ".$data['firstName']);

    $token = openssl_random_pseudo_bytes(16);
    $token = bin2hex($token);

    $data = array(
        'user_id'            =>      $data['user_id'],
        'token'              =>      $token
    );
    $id = $db->insert('password_reset_request', $data);
    $link = html::resetScript . '?uid=' . $data['user_id'] . '&id=' . $id . '&t=' . $token;
    error_log($link);

    $mail = new PHPMailer();
    try {
        $mail->SMTPDebug = 2;
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = 'True';
        $mail->Username = 'flatlinelabs@gmail.com';
        $mail->Password = '!Hikaruchan72';
        $mail->SMTPSecure = 'tls';
        $mail->Port = '587';

        $mail->setFrom("webxsys@mail.com", "Mailer");
        $mail->Subject = "testing";
        $mail->Body = "holy shit it works";
        $mail->send();
    }catch (Exception $e){
        die("could not send email");
    }

    die("success");
}




