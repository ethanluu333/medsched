<?php
session_start();
include("connection.php");
include("function.php");

  $user_data = check_login($con);
?>
<!DOCTYPE html>
<html>
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
        <a href="index.php">Home<span class="sr-only"></span></a>
        <a href="#about">About</a>
        <a href="schedule.php">Schedule an Appointment</a>
        <a href="search.php">Search for Doctors</a>
        <a class="active" href="#">View Messages</a>
        <a href="logout.php" class="split">Logout</a>
    </div>
    <h1>Inbox</h1>

    <form method="get" action="">
        <label for="doctor_id">Doctor ID:</label>
        <input type="text" name="doctor_id" id="doctor_id">
        <input type="submit" value="View Messages">
    </form>

    <?php
    // Check if doctor_id parameter is provided
    if (isset($_GET['doctor_id'])) {
        // Establish database connection
        $con = new PDO("mysql:host=localhost;dbname=med_sched", 'root', '');

        // Get the doctor's ID
        $doctorId = $_GET['doctor_id'];

        // Retrieve the messages for the doctor from the database
        $sth = $con->prepare("SELECT * FROM messages WHERE doctor_id = :doctorId");
        $sth->bindParam(':doctorId', $doctorId);
        $sth->execute();

        if ($sth->rowCount() > 0) {
            ?>
            <table>
                <tr>
                    
                    <th>Message</th>
                    <th>Received At</th>
                </tr>
                <?php while ($row = $sth->fetch(PDO::FETCH_OBJ)) { ?>
                    <tr>
                        
                        <td><?php echo $row->message; ?></td>
                        <td><?php echo $row->created_at; ?></td>
                    </tr>
                <?php } ?>
            </table>
            <?php
        } else {
            echo "<p>No messages found for the provided Doctor ID.</p>";
        }
    }
    ?>

</body>
</html>

