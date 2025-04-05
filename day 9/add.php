<?php
include_once("config.php");

if (isset($_POST['submit'])) {
    // Get form data
    $name = trim($_POST['name']);
    $username = trim($_POST['username']);
    $email = trim($_POST['email']);
    
    // Validate input fields
    if (empty($name) || empty($username) || empty($email)) {
        echo "All fields are required!";
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format!";
    } else {
        // Prepare SQL statement to insert data
        $sql = "INSERT INTO users (name, username, email) VALUES (:name, :username, :email)";
        $sqlQuery = $connect->prepare($sql);
        $sqlQuery->bindParam(':name', $name);
        $sqlQuery->bindParam(':username', $username);
        $sqlQuery->bindParam(':email', $email);

        // Execute the query and check if it was successful
        try {
            $sqlQuery->execute();
            echo "The user was added successfully!";
        } catch (Exception $e) {
            echo "Error: " . $e->getMessage();
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add User</title>
</head>
<body>
    <form action="add.php" method="post">
        <label for="name">Name:</label><br>
        <input type="text" name="name" id="name" placeholder="Name" required><br><br>
        
        <label for="username">Username:</label><br>
        <input type="text" name="username" id="username" placeholder="Username" required><br><br>
        
        <label for="email">Email:</label><br>
        <input type="email" name="email" id="email" placeholder="Email" required><br><br>
        
        <button type="submit" name="submit">Add User</button>
    </form>
</body>
</html>