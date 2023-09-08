<?php
$dsn = "mysql:host=localhost; dbname=smartoffice";
$dbusername = "root";
$dbpassword = "";

try {
  $pdo = new PDO($dsn, $dbusername, $dbpassword);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles.css">
  <title>Smart Office</title>
  <link rel="stylesheet" href="book.css">

</head>
<body>
<header>
<div class="container-logo">
<img src="image/logo pic naod.jpg" class="logo-img">
<h2 class="logo">Smart Office</h2>
</div>
    <nav class="navigation">
      <a href="main.php" class="navl">Home</a>
    </nav>
</header>
<div class="container-whole">
  <div class="container">
    
    <h1 class="hero-topic">Book <span class="hero-topic2">Meeting Room</span> </h1>
  <form action="includes\book.inc.php" method="post">
      <label for="room">Select a Room:</label>
    <div class="select">
      <select name="room" id="room" name="room" required>
        <option selected disabled>select a room</option>
        <option value="room1" name="room" >Room 1</option>
        <option value="room2" name="room">Room 2</option>
        <option value="room2" name="room">Room 3</option>
        <option value="room2" name="room">Room 4</option>
        <option value="room2" name="room">Room 5</option>
       
      </select>
    </div>
    <div>
      <label for="date">Select Date:</label>
      <input type="date" name="date" id="date"  name="date" required>
    </div>
    <div class="book">
    
    <input type="submit" value="Book" name="submit">
    </div>
      
  </form>
  </div>
  <div class="container-img">
    <img src="image/undraw_wait_in_line_o2aq.svg" class="hero-img">
  </div>
</div>

</body>
</html>