<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smart Office</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
<div class="scroll-status">
        <div class="the-scroller" id="the-scroller"></div>
</div>
<header>
<div class="container-logo">
<img src="image/logo pic naod.jpg" class="logo-img">
<h2 class="logo">Smart Office</h2>
</div>
    <nav class="navigation">
      <a href="#one" class="navl">About</a>
      <a href="#two" class="navl">Contact</a>
      <a href="maintenance_req.php" class="navl">Request</a>
      <form action="includes\logout.inc.php" method="post">
       <button type="submit" class="btnlogin-popup ">Log out</button>
      </form>
    
    </nav>
</header>    
<div class="container-whole">


 <div class="container-two">
   <h2 class="hero-topic">Welcome to<span class="hero-topic2"> Smart<br/> Office</span> </h2>
   
   <div class="bookmanage" >
   <a href="book.php"><button class="book">book meeting room</button></a>
   <a href="manage.php"><button class="book">manage meetings</button></a>
 
   </div>

  </div>

  <div class="container-one">
    <img src="image/undraw_remotely_-2-j6y (1).svg" class="hero-img">
  </div>

</div>


<div class="notice-board">
  <h1>Notice Board</h1>
        <?php
        include 'includes/display_notices.inc.php';
        ?>
</div>



<div class="about-texts" id="one">
     <div class="text">
      <h2 class="box-head">Meeting Booking</h2>
      <img src="image/meeting room.webp" class="dis-img">
       <p class="txt">Employees can utilize<br/> the website to book<br/> meetings with colleagues,<br/> teams, or clients.<br/> The intuitive booking<br/> system displays available<br/> time slots, allowing users<br/> to choose a suitable time <br/>for the meeting.<br/> By providing an overview<br/> of meeting room availability, <br/>conflicts can be minimized,<br/> and scheduling becomes<br/> more efficient. </p>
       
     </div>
     <div class="text">
     <h2 class="box-head">Notice board</h2>
     <img src="image/noticeboard on board.webp" class="dis-img">
     <p class="txt">serves as a virtual notice<br/> board where important <br/>announcements, updates, and<br/> news can be posted.<br/> Employees can easily <br/>access the notice board <br/>to stay informed about<br/> company-wide events,<br/> policy changes, and <br/>upcoming activities.<br/> This feature promotes<br/> transparency and ensures<br/> that everyone is on <br/>the same page.</p>
     
     </div>
     <div class="text">
     <h2 class="box-head">Easy UI</h2>
     <img src="image/abou.png" class="dis-img">
     <p class="txt">The website boasts <br/>a clean and user-friendly<br/> interface, making it <br/>easy for employees<br/> to navigate and access <br/>the features they need<br/> without any steep <br/>learning curve.</p>
     
     </div>
     
     
 </div>  
  

</div>
<div class="container-contact">
  <div class="contact-box" id="two">
        <h2 class="contact-main">Contact Us</h2>
        <form action="connect.php" method="post">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="message">Message:</label>
            <textarea id="message" name="message" rows="4" required></textarea>

            <button type="submit">Submit</button>
        </form>
  </div>
  <div class="contact-info">
    <div class="icons">
    <a href="gmail.com"><img src="image/icons8-email-48.png" class="icon"></a>
    <h3>Email</h3>
    </div>
    <div class="icons">
    <a href="facebook.com"><img src="image/icons8-facebook-50.png" class="icon"></a>
    <h3>Facebook</h3>
    </div>
    <div class="icons">
    <a href="telegram.com"><img src="image/icons8-telegram-50 (1).png" class="icon"></a>
    <h3>Telegram</h3>
    </div>
    <div class="icons">
    <a href="twitter.com"><img src="image/icons8-twitter-50 (1).png" class="icon"></a>
    <h3>Twitter</h3>
    </div>
  </div>
</div>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    $to = "letitarekegn77@gmail.com"; 
    $subject = "New Contact Us Submission";

    $headers = "From: $name <$email>\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";


    if (mail($to, $subject, $message, $headers)) {
        echo "Thank you! Your message has been sent.";
    } else {
        echo "Oops! Something went wrong. Please try again later.";
    }
}
?>

<script src="scripts.js"></script>

</body>
</html>