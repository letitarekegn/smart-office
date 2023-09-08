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
    <title>Smart office</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
<div class="container-logo">
<img src="image/logo pic naod.jpg" class="logo-img">
<h2 class="logo">Smart Office</h2>
</div>
    <nav class="navigation">
      <a href="home.php" class="navl">Home</a>
      
      
    </nav>
</header>
   <div class="wrapper">
    <div class="form-box login">
      <h2 class="signup">SignUp</h2>
      <form action="includes\signup.inc.php" method="post">

       

        <div class="input-box">
          <input type="email" name="email" placeholder="email" required>
         
        </div>

        <div class="input-box">
          <input type="text" name="username" placeholder="username" required>
          
        </div>
         
        <div class="input-box">
          <input type="password" name="pwd" placeholder="password" required>
          
        </div>

        <button type="submit" name="submit" class="btn">SignUp
        </button>

        <div class="login-register">
          <p>Already have an account?<a 
          href="login.php" class="register-link">Login</a>

          </p>
        </div>
      </form>
    </div>
   </div>
</body>
</html>