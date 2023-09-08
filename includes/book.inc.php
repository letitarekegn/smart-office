<?php
session_start(); // Start the PHP session

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $room = $_POST["room"];
    $date = $_POST["date"];

    try {
        require_once "../book.php";

        // Check if the selected room is already booked on the specified date
        $checkQuery = "SELECT COUNT(*) AS booking_count FROM book WHERE room = ? AND book_date = ?";
        $checkStmt = $pdo->prepare($checkQuery);
        $checkStmt->execute([$room, $date]);
        $result = $checkStmt->fetch(PDO::FETCH_ASSOC);
        
        if ($result["booking_count"] > 0) {
            // The selected room is already booked on the specified date
            $_SESSION["booking_error"] = "Sorry, the meeting room $room is already booked for $date. Please try another day.";
            header("Location: ../error.php");
            die();
        }

        // Room is available, proceed to book
        $insertQuery = "INSERT INTO book (room, book_date) VALUES (?, ?);";
        $insertStmt = $pdo->prepare($insertQuery);
        $insertStmt->execute([$room, $date]);

        header("Location: ../success.php");
        die();
    } catch (PDOException $e) {
        die("I failed: " . $e->getMessage());
    }
} else {
    header("Location: ../main.php");
}
?>
