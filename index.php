<?php
session_start();
include("connection.php");
include("function.php");

  $user_data = check_login($con);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title class="title">Welcome to MedSched!</title>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel= "stylesheet" href="style.css">
</head>
<body>
    <div class="header">
        <h2>Welcome to MedSched!</h2>
    </div>
    <div class="navbar">
        <a class="welcome">Hello, <?php echo $user_data['First_Name']; ?> </a>
        <a class="active" href="#">Home<span class="sr-only"></span></a>
        <a href="#about">About</a>
        <a href="schedule.php">Schedule an Appointment</a>
        <a href="search.php">Search for Doctors</a>
        <a href="view_messages.php">View Messages</a>
        <a href="logout.php" class="split">Logout</a>
    </div>
    <!-- Slideshow container -->
    <div class="slideshow-container">

    <!-- Full-width images with number and caption text -->
    <div class="mySlides fade">
    <div class="numbertext">1 / 4</div>
    <img src="images/doc1.jpg" style="width:100%">
    </div>

    <div class="mySlides fade">
    <div class="numbertext">2 / 4</div>
    <img src="images/doc2.jpg" style="width:100%">
    </div>

    <div class="mySlides fade">
    <div class="numbertext">3 / 4</div>
    <img src="images/doc3.jpg" style="width:100%">
    </div>

    <div class="mySlides fade">
    <div class="numbertext">4 / 4</div>
    <img src="images/doc4.jpg" style="width:100%">
    </div>

    <!-- Next and previous buttons -->
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>
    <br>

    <!-- The dots/circles -->
    <div style="text-align:center">
    <span class="dot" onclick="currentSlide(1)"></span>
    <span class="dot" onclick="currentSlide(2)"></span>
    <span class="dot" onclick="currentSlide(3)"></span>
    <span class="dot" onclick="currentSlide(4)"></span>
    </div>

    <section>
    <div class="about">
        <h2 id="about">About Us</h2>
    </div>
    <div class="description">
        <h5>Doctors are real life superheroes who save tens and hundreds of lives everyday. But to be a successful and a renowned doctor in your locality, gaining your patient’s trust is very important. With emergencies and everyday struggle, spending your valuable time on scheduling patient appointments can become quite draining.
            Another additional responsibility is managing your staff and resources. With so many things to manage, dedicating your full time and spending quality time with your patients may not be possible. Your clinic probably see hundreds of patients everyday. Managing appointments efficiently is a big problem which every business faces. 
            With so many new people to cater to and a equal number of old patients to catch up with, you must have faced quite a few situations. This also includes double bookings and missing on patient appointments. Get rid of everyday nonsense with our online appointment scheduling software.
            Here at MedSched we make it our top priority to make it so that you can network easier.</h5>
        <br>
        
        <h5>With MedSched, medical offices can customize dates/times their providers are available for meetings, the foods they would prefer, and a way to easily approve or not approve people that sign up for those availabilities. On the other end, doctors wishing to grow their practices, medical device companies, pharmaceutical companies all could gain 
            access to this scheduling software for a fee to find practices in a desired area and rather than going through the laborious work of cold calling or emailing all these practices, can simply sign up for practices with only a few clicks of a button.</h5>
    </div>
    </section>

    
    <script src="script.js"></script>
</body>
</html>
