<?php
$host = "localhost";
$dbname = "tododatabase";
$dbusername = "root";
$dbpassword = "";


try {
   $pdo = new PDO("mysql:host=localhost; dbname=tododatabase", $dbusername, $dbpassword);
   $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   
} catch (PDOException $e) {
    die("connection failed ".$e->getmessage());
    
}
