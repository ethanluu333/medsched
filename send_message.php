<?php
session_start();
include("connection.php");
include("function.php");

  $user_data = check_login($con);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Search for Doctors</title>

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
        <a href="index.php">Home<span class="sr-only"></span></a>
        <a href="#about">About</a>
        <a href="schedule.php">Schedule an Appointment</a>
        <a class="active" href="#">Search for Doctors</a>
        <a href="view_messages.php">View Messages</a>
        <a href="logout.php" class="split">Logout</a>
    </div>
</body>
</html>


<?php

$con = new PDO("mysql:host=localhost;dbname=med_sched",'root','');

if (isset($_POST["submit_message"])) {
    $doctorId = $_POST["doctor_id"];
    $message = $_POST["message"];

    // Establish database connection
    $con = new PDO("mysql:host=localhost;dbname=med_sched", 'root', '');

    // Insert message into the database
    $sth = $con->prepare("INSERT INTO messages (doctor_id, message) VALUES (:doctorId, :message)");
    $sth->bindParam(':doctorId', $doctorId);
    $sth->bindParam(':message', $message);
    
    if ($sth->execute()) {
        echo "Message sent successfully!";
    } else {
        echo "Error sending message.";
    }
}
?>