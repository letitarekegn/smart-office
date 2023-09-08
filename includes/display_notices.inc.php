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
        echo '</div>';
    }
} else {
    echo '<p>No notices available.</p>';
}

$conn->close();

