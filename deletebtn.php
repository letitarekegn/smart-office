<?php
if (isset($_GET["id"])) {
    $id=$_GET["id"];

    $dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "smartoffice";

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

$sql = "DELETE FROM users WHERE id=$id";
$conn->query($sql);
}
header("Location: edit.php");
exit;
?>