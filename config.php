<?php
    session_start();

    $server = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'dbtest1';

    try{
        $connect = new PDO("mysql:host=$server;dbname=$dbname", $username, $password);

    }catch(Exeption $e){
        echo "Something went wrong";
    }




?>