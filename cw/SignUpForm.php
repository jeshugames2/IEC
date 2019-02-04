<?php
  include("config.php");

  mysqli_select_db($db, "iecnmims_cwdfund1");
  $sql = "INSERT INTO register(UID, uname, pass)
  VALUES
  ('$_POST[Uid]','$_POST[Name]','$_POST[Password]')";

  if (!mysqli_query($db, $sql)) {
    die('Error: ' . mysqli_error());
  }

  echo "1 record added";
  mysqli_close($db);
 ?>

<!DOCTYPE html>
 <html>
  <body>
    <h3>You have Successfully registered</h3>
    <p>Please go to the login Page and continue enjoying the service</p>
    <button><a href="Login.php">Login</a></button>
  </body>
 </html>
