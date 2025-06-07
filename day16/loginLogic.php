<?php
session_start();
include_once('config.php');

if (isset($_POST['submit'])) {
    $username = trim($_POST['username']);
    $password = $_POST['password'];

    if (empty($username) || empty($password)) {
        echo "Please fill in all fields";
    } else {
        $sql = "SELECT id, username, email, password, is_admin FROM users WHERE username = :username";
        $selectUser = $config->prepare($sql);
        $selectUser->bindParam(":username", $username);
        $selectUser->execute();  // Execute the query

        $data = $selectUser->fetch(PDO::FETCH_ASSOC);  // Fetch as associative array

        if ($data === false) {
            echo "The user does not exist";
        } else {
            if (password_verify($password, $data['password'])) {
                $_SESSION['id'] = $data['id'];
                $_SESSION['username'] = $data['username'];
                $_SESSION['email'] = $data['email'];
                $_SESSION['is_admin'] = $data['is_admin'];

                header('Location: dashboard.php');
                exit();
            } else {
                echo "The password is not valid";
            }
        }
    }
}
?>
