<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Maintenance Requests</title>
    <link rel="stylesheet" href="admin_request.css"> 
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
    <h1 class="head">Admin - Maintenance Requests</h1>
    
    <div class="request-container">
        <?php
        $dbServername="localhost";
        $dbUserame="root";
        $dbPassword="";
        $dbName= "smartoffice";
        
        $conn= mysqli_connect($dbServername,$dbUserame,$dbPassword,$dbName);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT id, user_name, user_email, request_type, request_details, status FROM requests ORDER BY id DESC";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo '<div class="request">';
                echo '<h1 >' . $row['user_name'] . '</h1>';
                echo '<p ><strong>Email:</strong> ' . $row['user_email'] . '</p>';
                echo '<p><strong>Type:</strong> ' . $row['request_type'] . '</p>';
                echo '<p><strong>Status:</strong> ' . $row['status'] . '</p>';
                echo '<p><strong>Details:</strong> ' . $row['request_details'] . '</p>';
    
                // Add the "Done" button
                echo '<form action="delete_request.php" method="POST">';
                echo '<input type="hidden" name="request_id" value="' . $row['id'] . '">';
                echo '<button type="submit" name="delete_request">Done</button>';
                echo '</form>';
    
                echo '</div>';
            }
        } else {
            echo '<p>No maintenance requests.</p>';
        }

        $conn->close();
        ?>
    </div>
</body>
</html>
