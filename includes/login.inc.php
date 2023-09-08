<?php
session_start(); // Start the PHP session

if (isset($_POST["submit"])) {
    $email = $_POST["email"];
    $pwd = $_POST["pwd"];

    try {
        require_once "../login.php";

        // Use prepared statements with parameter binding to prevent SQL injection
        $queryadmin = "SELECT * FROM users WHERE email = ? AND pwd = ? AND role = 'admin';";
        $queryuser = "SELECT * FROM users WHERE email = ? AND pwd = ? AND role = 'user';";

        $stmtadmin = $pdo->prepare($queryadmin);
        $stmtuser = $pdo->prepare($queryuser);

        $stmtadmin->execute([$email, $pwd]);
        $stmtuser->execute([$email, $pwd]);

        $admin = $stmtadmin->fetch();
        $user = $stmtuser->fetch();

        if ($admin) {
            $_SESSION['user_role'] = 'admin';
            $_SESSION['user_email'] = $email;
            header("Location: ../mainAdmin.php");
            exit();
        } elseif ($user) {
            $_SESSION['user_role'] = 'user';
            $_SESSION['user_email'] = $email;
            header("Location: ../main.php");
            exit();
        } else {
            header("Location: ../login.php");
            exit();
        }

    } catch (PDOException $e) {
        die("I failed: " . $e->getMessage());
    }
} elseif (isset($_SESSION['user_email']) && isset($_SESSION['user_role'])) {
    // If the user has an active session, redirect to the appropriate page based on their role
    if ($_SESSION['user_role'] === 'admin') {
        header("Location: ../mainAdmin.php");
        exit();
    } else {
        header("Location: ../main.php");
        exit();
    }
} else {
    // If no active session and not a POST request, redirect to the login page
    header("Location: ../login.php");
}
