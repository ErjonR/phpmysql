<?php

$server = 'localhost';
$username = 'root';
$password = '';
$dbname = 'dbtest';

try {
    $connect = new PDO("mysql:host=$server;dbname=$dbname", $username, $password);
    // Enable error mode to throw exceptions
    $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
    // Display the error message
    echo "Connection failed: " . $e->getMessage();
    die();
}
?>