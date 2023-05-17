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

<form method="post">

<input type="text" name="search" placeholder="Search for doctors...">
<input type="submit" name="submit">
</form>
</body>
</html>

<?php

$con = new PDO("mysql:host=localhost;dbname=med_sched",'root','');

if (isset($_POST["submit"])) {
    $str = $_POST["search"];
    $sth = $con->prepare("SELECT * FROM `doc` WHERE Name = :str OR City = :str OR Specialization = :str OR Hospital = :str");

    $sth->bindParam(':str', $str);
    $sth->execute();

    $rows = $sth->fetchAll(PDO::FETCH_OBJ);

    if(!empty($rows)) {
        ?>
        <br><br><br>
        <table>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Phone Number</th>
                <th>City</th>
                <th>Hospital</th>
                <th>Specialization</th>
                <th>Preferred Food</th>
            </tr>
            <?php foreach ($rows as $row) { ?>
            <tr>
                <td><?php echo $row->Name; ?></td>
                <td><?php echo $row->Email; ?></td>
                <td><?php echo $row->Number; ?></td>
                <td><?php echo $row->City; ?></td>
                <td><?php echo $row->Hospital; ?></td>
                <td><?php echo $row->Specialization; ?></td>
                <td><?php echo $row->Fav_Food; ?></td>
                <td>
                    <form method="post" action="send_message.php">
                        <input type="hidden" name="doctor_id" value="<?php echo $row->Doc_ID; ?>">
                        <textarea name="message" rows="3" cols="30" placeholder="Enter your message"></textarea>
                        <input type="submit" name="submit_message" value="Send">
                    </form>
                </td>
            </tr>
            <?php } ?>
        </table>
    <?php } else {
        echo "No doctors found...";
    }
}
?>

    