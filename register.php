<?php


include_once('config.php');

if(isset($_POST['name']))
{
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $tempPass = $_POST['tempPass'];
    $password = password_hash($tempPass, PASSWORD_DEFAuLT);

    if(empty($name) || empty($surname) || empty($username) || empty($email) || empty($password)){
    echo "You need to fill all these fields";
}else{
    $sql = "SELECT username From users WHERE username = :username";

    $tempSQl = $conn->prepare($sql);
    $tempSQL -> bindParam(' :username, $username');
    $tempSQL ->execute();
}


    if($tempSQL > 0){
        echo "username exists";
        haeader('refresh:2, url=signupform.php');
    }else{
        $sql = "INSERT INTO users(name,surname,username,email, password) vales(:name,:surname,:username, :email, :password)";
        $insertSql - $conn -> prepare($sql);
        $insertSql ->bindParam(':name', $name);
        $insertSql ->bindParam(':surname', $surname);
        $insertSql ->bindParam(':username', $username);
        $insertSql ->bindParam(':email', $email);
        $insertSql ->bindParam(':password', $password);

        $insertSql->execute()

        echo "Data saved sucesfully";
        header("refresh:2, url-signin.php");

}
    
}

?>