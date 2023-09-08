<?php
if (isset($_POST['delete_request']) && isset($_POST['request_id'])) {
    $dbServername = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbName = "smartoffice";

    $conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $request_id = $_POST['request_id'];
    
    // Delete the request
    $sql = "DELETE FROM requests WHERE id = $request_id";
    if (mysqli_query($conn, $sql)) {
        header("Location: admin_request.php"); 
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>
