<?php

session_start();
include_once('submit');


if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    if (empty($username) || empty($password)) {
        echo "Please fill in all flieds";
}

}



?>