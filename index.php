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
        <a class="welcome">Hello, <?php echo $user_data['UserName']; ?> </a>
        <a class="active" href="#">Home<span class="sr-only"></span></a>
        <a href="#about">About</a>
        <a href="schedule.php">Schedule an Appointment</a>
        <a href="search.php">Search for Doctors</a>
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
        <p>Here at MedSched we make it our top priority to make it so that you can find the most suitable doctor for you.
    </section>
    <script src="script.js"></script>
</body>
</html>
