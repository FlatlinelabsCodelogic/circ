<?php

session_start();
spl_autoload_register();

$db = new MysqliDb("localhost","circ","circ","circ");
$referral = new Referral();



