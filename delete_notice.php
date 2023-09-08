<?php
$dbServername="localhost";
$dbUserame="root";
$dbPassword="";
$dbName= "smartoffice";

$conn= mysqli_connect($dbServername,$dbUserame,$dbPassword,$dbName);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $noticeId = $_POST['notice_id'];
    
    $sql = "DELETE FROM notices WHERE id = $noticeId";
    
    if ($conn->query($sql) === TRUE) {
        header("Location: edit_notice.php");
    } else {
        echo "Error deleting notice: " . $conn->error;
    }
}

$conn->close();
?>
