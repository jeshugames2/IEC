<?php
  include("session.php");

  $select_proj = mysqli_real_escape_string($db, $_REQUEST(['proj']));
  $amnt_selected = $_POST['amnt'];
  $newbal = $bal - $amnt_selected;

  // code...
  $sql = "INSERT into invest(UID, project, amount)
values ('$sid', '$_POST[proj]', '$_POST[amnt]')";

  $sql1 = "UPDATE register SET balance = $newbal WHERE UID = $sid";

  if ($db->query($sql) === true) {
      echo "";
  } else {
      echo "Error: " . $sql . "<br>" . $db->error;
  }

if ($db->query($sql1) === true) {
      echo "";
  } else {
      echo "Error: " . $sql1 . "<br>" . $db->error;
  }


 ?>

<!DOCTYPE html>
 <html>
  <body>
    <h3>You have Voted Successfully</h3>
    <p>Do you wish to vote again?</p>
    <button><a href="Welcome.php">Vote Again!</a></button>
  </body>
 </html>
