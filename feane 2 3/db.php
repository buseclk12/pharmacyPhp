<?php

$dsn = "mysql:host=localhost;dbname=pharmacy;charset=utf8mb4" ;
$user = "std" ;
$pass = "" ;



try {
    $db = new PDO($dsn, $user, $pass) ;
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION) ;
} catch (Exception $ex) {
   echo "DB Connection Error : " .  $ex->getMessage() ;
   exit ;
}