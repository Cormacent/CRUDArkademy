<?php
$host = "localhost"; 
$username = "root"; 
$password = ""; 
$database = "db_arkademy";

$pdo = new PDO('mysql:host='.$host.';dbname='.$database, $username, $password);
?>