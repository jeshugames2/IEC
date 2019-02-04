<?php
include("session.php");
?>

<html>
<head>
    <!-- <link href="css/bootstrap.css" rel="stylesheet"> -->
    <!-- <link rel="stylesheet" href="css/jquery-ui.css"> -->
    <script src="js/jquery-2.1.1.min.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- <link href="css/main.css" rel="stylesheet"> -->
    <meta name=viewport content="width=device-width, initial-scale=1">
    <title>Welcome</title>

    <script>
        $(document).ready(function () {
            $('#invest_vote').ajaxForm(function () {
                //alert("Given information Successfully Saved");
                location.href = 'Welcome.php';
            });
        });
    </script>

  </head>


  <body onload="document.expense.entrydetail.focus()">
    <link href='https://fonts.googleapis.com/css?family=Work+Sans:400,300,700' rel='stylesheet' type='text/css'>
  <div style="padding:10px; margin:10px;">
      <div class="panel panel-primary">
          <div class="panel-heading"><b>Crowd Funding</b></div>
          <div class="panel-body">

              <div class="media">

                  <div class="media-body">

                      <blockquote>
                          <h1 id="media-heading" class="media-heading">Welcome <?php echo $login_session; ?></h1>

                          <h2><a href="logout.php" class="button">Sign Out</a></h2>


                          <br><strong>Total Balance :</strong>
                          <span class="label label-default">
                    <?php $rbalance = $bal;
                          echo $rbalance;
                    ?></span>

                      </blockquote>

                  </div>
              </div>

              <form action="Welcome.php" name="invest_vote" id="invest_vote" method="post">
                <label for="proj">Project</label>
                <select name="proj">
                  <option value="proj1">Project1</option>
                  <option value="proj2">Project2</option>
                  <option value="proj3">Project3</option>
                </select>
                <br><br>
                <label for="amnt">Amount:</label>
                <input type="number" name="amnt" id=amnt>
                <input type="submit" name="submit" value="Invest">
              </form>

              <?php
                if(isset($_POST['submit'])){
                  $select_proj = $_POST['proj'];
                  $amnt_selected = $_POST['amnt'];
                  // echo $sid."<br>";
                  // echo $select_proj."<br>";
                  // echo $amnt_selected."<br>";
                  // echo $bal."<br>";
                  if ($amnt_selected <=0) {
                    $error0 = "Please select amount greater than 0";
                    echo "<script type='text/javascript'>alert('$error0');</script>";
                  }
                  elseif ($amnt_selected>$bal) {
                    $error1 = "You don't have that much balance.";
                    echo "<script type='text/javascript'>alert('$error1');</script>";
                  }
                  else {
                    $newbal = $bal - $amnt_selected;
                    // code...
                    $sql = "INSERT into invest(UID, project,amount)
          values ('$sid', '$select_proj', '$amnt_selected')";
                    $sql1 = "UPDATE register SET balance = $newbal WHERE UID = $sid";

                    if ($db->query($sql) === true) {
                        $success = "Transction completed";
                        echo "<script type='text/javascript'alert('$success')";
                    } else {
                        echo "Error: " . $sql . "<br>" . $db->error;
                    }

                    if ($db->query($sql1) === true) {
                        echo "";
                    } else {
                        echo "Error: " . $sql . "<br>" . $db->error;
                    }
                  }

                }
               ?>

            </div>
          </div>
        </div>
