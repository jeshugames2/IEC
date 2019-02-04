<?php
// Initialize the session
include("config.php");


// Check if the user is already logged in, if yes then redirect him to welcome page
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $uid = mysqli_real_escape_string($db, $_POST["Uid"]);
    $Password = mysqli_real_escape_string($db, $_POST["password"]);

    $sql = "SELECT UID from register where UID='$uid' and pass='$Password'";
    $result = mysqli_query($db, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $active = $row['active'];

    $count = mysqli_num_rows($result);

    $error = "";

    if ($count == 1) {
        // session_register("Email");
        session_start();
        $_SESSION['login_user'] = $uid;

        header("location:Welcome.php");
    } else {
        $error = "Your UID or Password is invalid";
        echo $error;
    }
}
?>

<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>

    <link rel="stylesheet" href="css/style_login.css">
</head>

<body>
  <link href='https://fonts.googleapis.com/css?family=Work+Sans:400,300,700' rel='stylesheet' type='text/css'>
<div class="container">
    <div class="profile">
      <button class="profile__avatar" id="toggleProfile">
        <h2 class="Login">Login</h2>
  </button>

        <div class="profile__form">
          <div class="profile__fields">
            <form action="" method="post">
              <div class="field">
                <label for="fieldUser"  class="label">UID:</label>
                <input type="number" id="fieldUser" name="Uid" class="input" required>
              </div>

              <div class="field">
                <label for="fieldPassword" class="label">Password: </label>
                <input type="password" id="fieldPassword" name="password" class="input" required>
              </div>

              <div class="profile__footer">
                <input type="submit" class="btn" value="Login">
            </form>

            <!-- <span>Don't have an account? <a href="SignUpForm.html">Sign Up</a> </span> -->
          </div>
          </div>
        </div>
    </div>
  </div>

  <script src="js/login.js">
  </script>
</body>

</html>
