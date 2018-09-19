<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Give us your idea</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  	<h2>Register</h2>
  </div>
	
  <form method="post" action="register.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Name</label>
  	  <input type="text" name="username" value="<?php echo $username; ?>" placeholder="Omair Mandhai">
  	</div>
      
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>" placeholder="name@example.com">
  	</div>
    <div class="input-group">
      <label>Phone</label>
      <input type="tel" name="phone" value="<?php echo $phone; ?>" placeholder="9876543210">
    </div>
    <div class="-group">
      <label>What's your idea?</label>
      <input type="text" name="idea" value="<?php echo $idea; ?>" placeholder="What's your idea?">
    </div>

  	<!--<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" name="password_2">
  	</div> -->
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  </form>
</body>
</html>
