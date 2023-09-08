<?php
$dbServername="localhost";
$dbUserame="root";
$dbPassword="";
$dbName= "smartoffice";

$conn= mysqli_connect($dbServername,$dbUserame,$dbPassword,$dbName);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$userName = $_POST['user_name'];
$userEmail = $_POST['user_email'];
$requestType = $_POST['request_type'];
$requestDetails = $_POST['request_details'];

$sql = "INSERT INTO requests (user_name, user_email, request_type, request_details, status) VALUES ('$userName', '$userEmail', '$requestType', '$requestDetails', 'Pending')";

if ($conn->query($sql) === TRUE) {
    header("Location: ../main.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
