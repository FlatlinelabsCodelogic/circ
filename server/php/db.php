<?php


class db{

    public static $db;

    public function __construct(){
        $host   = "localhost";
        $db     = "dbhoerster";
        $user   = "root";
        $pwd   = "";


        try{
            return new PDO("mysql:host=$host;dbname=$db", $user, $pwd);
        }catch (PDOException $e) {
            exit($e->getMessage());
        }

        /*
        $conn = @ new mysqli($host, $user, $pwd, $db);
        if ($conn->connect_error) {
            exit($conn->connect_error);
        }
        return $conn;
        */
    }

    public function getTables( $c ){
        $q = "SHOW TABLES;";
        $r = $c->query($q);
        if (!$r) {
            $ret = $c->error;
        } else {
            $ret = $r->num_rows;
        }
        return $ret;
    }

    public function __destruct(){

    }

}