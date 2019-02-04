<!DOCTYPE html>
<html>
<head>
  <title>Register tables</title>
</head>

<body>

  <table>
    <caption><h4>Registerations</h4></caption>
    <tr>
      <th>UID</th>
      <th>Name</th>
      <th>Password</th>
      <th>Balance</th>
    </tr>

<?php
  include 'config.php';

  $sql = "SELECT * FROM register";

  $result = $db->query($sql);

  if ($result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) {
        echo "<tr> <td>" . $row["UID"] . "</td> <td> " . $row["uname"] . "</td> <td> " . $row["pass"] . "</td> <td> " . $row["balance"] . "</td> </tr>";
      }
    }
 ?>

</body>
</html>
