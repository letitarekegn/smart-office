<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smart Office</title>
    <link rel="stylesheet" href="admin_notice.css">
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
<div class="container_notice"></div>
    <h1>Add - Notice Board</h1>
    <form action="includes/add_notice.inc.php" method="post" class="form">
        <label for="title">Title:</label>
        <input type="text" id="title" name="title" required><br>
        <label for="content">Content:</label><br>
        <textarea id="content" name="content" rows="4" cols="50" required></textarea><br>
        <button type="submit">Add Notice</button>
               
    </form>

</div>
</body>
</html>
