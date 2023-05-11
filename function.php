<?php
function check_login($con)
{
  if(isset($_SESSION['User_ID']))
  {
    $id = $_SESSION['User_ID'];
    $query = "SELECT * FROM user WHERE User_ID = '$id' limit 1";
    $result = mysqli_query($con, $query);
    if($result && mysqli_num_rows($result) > 0)
    {
      $user_data = mysqli_fetch_assoc($result);
      return $user_data;
    }
  }
  //redirect to login
  header("Location: login.php");
  die;
}

?>