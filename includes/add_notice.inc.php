<?php
$dbServername="localhost";
$dbUserame="root";
$dbPassword="";
$dbName= "smartoffice";

$conn= mysqli_connect($dbServername,$dbUserame,$dbPassword,$dbName);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$title = $_POST['title'];
$content = $_POST['content'];

$sql = "INSERT INTO notices (title, content) VALUES ('$title', '$content')";

if ($conn->query($sql) === TRUE) {
    header("Location: ../mainAdmin.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
