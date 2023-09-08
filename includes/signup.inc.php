<?php
session_start(); // Start the PHP session

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $pwd = $_POST["pwd"];
    $email = $_POST["email"];
   

    try {
        require_once "../signup.php";

        $query = "INSERT INTO users (username, pwd, email) VALUES (?,?,?);";

        $stmt = $pdo->prepare($query);

        $stmt->execute([$username, $pwd, $email]);

        $pdo = null;
        $stmt = null;

        header("Location: ../login.php");

        die();
    } catch (PDOException $e) {
        die("I failed: " . $e->getMessage());
    }
}
else {
    header("Location: ../signup.php");
}