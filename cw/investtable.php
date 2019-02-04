<!DOCTYPE html>
<html>
<head>
  <title>Register tables</title>
</head>

<body>

  <table>
    <caption><h4>Registerations</h4></caption>
    <tr>
      <th>Project</th>
      <th>Amount</th
    </tr>

<?php
  include 'config.php';

  $sql = "SELECT project, amount FROM invest GROUP BY project";

  $result = $db->query($sql);

  if ($result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) {
        echo "<tr> <td>" . $row["project"] . "</td> <td> " . $row["amount"] . "</td> </tr>";
      }
    }
 ?>

</body>
</html>
