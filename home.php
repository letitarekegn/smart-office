<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smart office</title>
    <link rel="stylesheet" href="home.css">
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
      <a href="#one" class="navl">Home</a>
      <a href="#two" class="navl">About</a>
      <a href="#three" class="navl">Contact</a>
      <a href="signup.php" class="navl">Sign Up</a>
      <a href="login.php"><button class="btnlogin-popup">Login</button></a>
    </nav>
</header>

<div class="container-whole" id="one">


 <div class="container-two">
   <h2 class="hero-topic">Smart <span class="hero-topic2">Office</span> </h2>
   <p class="hero-text">Welcome to the Smart Office revolution, where <br/> innovation meets productivity. Our cutting-edge solutions <br/> transform your workplace into an efficient and connected hub. <br/> Experience seamless automation and enhanced collaboration <br/> for a smarter tomorrow.
    </p>
    <button class="contact">CONTACT US</button>

  </div>

  <div class="container-one">
    <img src="image/undraw_programming_re_kg9v.svg" class="hero-img">
  </div>

</div>

<div class="about-container">
  <div class="about_title">
     <h1 id="two">About Us</h1>
  </div>
 <div class="about1">
  <div class="about-section">
 
    <div class="about-image-slider">
      <img src="image/meeting rooms.jpg" alt="Sample Image 1">
      <img src="image/meeting room.webp" alt="Sample Image 2">
      <img src="image/meeting room 4.webp" alt="Sample Image 3">
    </div>
    <div class="about-description">
      <h2>Book meeting rooms</h2>
      <p>we've made booking a meeting room a breeze.<br/> Say goodbye to the hassle of phone calls and emails. <br/>With our user-friendly website, reserving the perfect<br/> meeting space is just a few clicks away.</p>
    </div>
  </div>
  <script src="script.js"></script>
 </div>
 <div class="about-texts">
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
  <div class="contact-box" id="three">
        <h2 class="contact-main">Contact Us</h2>
        <form action="contact.php" method="post">
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

    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

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