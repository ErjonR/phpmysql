<?php
$users = 'root';
$pass = '';
$server = 'localhost';
$dbname = 'mms';

try{
    $conn = new PDo("mysql:host=$server; dbname = $dbname", $user, $pass);
}catch (PDOExpection $e) {
    echo 'error: '. $e->getMessage();
}

?>