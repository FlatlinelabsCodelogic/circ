<?php

session_start();
error_reporting(E_ALL | E_STRICT);

require('UploadHandler.php');
require('FileOps.php');
require('../../MysqliDb.php');




if(!empty($_POST)) {
    $upload_handler = new UploadHandler();

    $response = $upload_handler->get_response();                // get response object
    $response_array = (array)$response['files'];                // convert object to array

  //  error_log(print_r($_POST, true));
    error_log(print_r($_POST['video_description'], true));
    error_log(print_r($_POST['video_category'], true));
    error_log(print_r($_FILES, true));

    error_log(print_r($response_array, true));

    $fileOps = new  FileOps();
    $fileOps->setFileName($_FILES['files']['name'][0]);
    $fileOps->setPath(__DIR__);
    $fileOps->setImageDir("\\files\\");

}
error_log(count($_FILES['files']['name']),true);
$db = new MysqliDb("localhost", "circ", "circ", "circ");
$data = array(
    'name'          =>  $_FILES['files']['name'][0],
    'description'   =>  $_POST['video_description'],
    'category'      =>  $_POST['video_category'],
    'tuition'       =>  $_POST['video_price']
);

$id = $db->insert('video', $data);

if($_FILES['files']['type'][0] == "video/mp4"){
    $fileOps->setTargetDir("C:\\xampp\\htdocs\\circ\\video\\");
    rename($fileOps->getPath().$fileOps->getImageDir().$fileOps->getFileName(), $fileOps->getTargetDir().$fileOps->getFileName());

}else{
    $fileOps->setTargetDir("C:\\xampp\\htdocs\\circ\\images\\profile\\");
    rename($fileOps->getPath().$fileOps->getImageDir().$fileOps->getFileName(), $fileOps->getTargetDir().$fileOps->getFileName());
    rename($fileOps->getPath().$fileOps->getImageDir()."thumbnail\\" . $fileOps->getFileName(), $fileOps->getTargetDir()."thumbnails\\".$fileOps->getFileName());

}




