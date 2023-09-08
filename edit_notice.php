<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smart Office</title>
    <link rel="stylesheet" href="edit_notice.css">

</head>
<body>
<header>
    
    <nav class="navigation">
      <a href="mainAdmin.php" class="navl">user list</a>
      <a href="edit.php" class="navl">Edit</a>
      <a href="admin_notice.php" class="navl">Add Notice</a>
      <a href="edit_notice.php" class="navl">Edit Notice</a>
      <a href="admin_request.php" class="navl">Requests</a>
      <form action="includes\logout.inc.php" method="post">
       <button type="submit" class="btnlogin-popup ">Log out</button>
      </form>
    
    </nav>
</header> 
</body>
</html>
<?php
$dbServername="localhost";
$dbUserame="root";
$dbPassword="";
$dbName= "smartoffice";

$conn= mysqli_connect($dbServername,$dbUserame,$dbPassword,$dbName);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, title, content, timestamp FROM notices ORDER BY timestamp DESC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo '<div class="notice">';
        echo '<h2>' . $row['title'] . '</h2>';
        echo '<p>' . $row['content'] . '</p>';
        echo '<p class="timestamp">' . $row['timestamp'] . '</p>';
        
        // Add a form to delete the notice
        echo '<form action="delete_notice.php" method="POST">';
        echo '<input type="hidden" name="notice_id" value="' . $row['id'] . '">';
        echo '<button type="submit" class="delete-button">Delete</button>';
        echo '</form>';
        
        echo '</div>';
    }
} else {
    echo '<p>No notices available.</p>';
}

$conn->close();
?>
