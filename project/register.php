<?php 
include('server.php'); ?>

<!DOCTYPE html>
<html>
	<head>
		<title>User registration</title>
		<link rel="stylesheet" type="text/css" href="css.css">
		
	</head>
	<body class="body2">
		<div class="header">
			<h2>Register</h2>
		</div>
		<form method="post" action="register.php" style="background:none;">
			<!-- lw fe errors httl3 hna -->
			<?php include('errors.php'); ?>
			<div class="input-group">
				<label>Username</label>
				<input type="text" name="username" value="<?php echo $username;?>"/>
			</div>
			
			<div class="input-group">
				<label>email</label>
				<input type="text" name="email" value="<?php echo $email;?>"/>
			</div>
			
			<div class="input-group">
				<label>Password</label>
				<input type="password" name="password_1"/>
			</div>
			
			<div class="input-group">
				<label>Confirm Password</label>
				<input type="password" name="password_2"/>
			</div>
			
			<div class="input-group">
				<button type="submit" name="register" class="btn">Register</button>
			</div>
			<p style="color:white;">Already a member> <a href="login.php">sign in</a></p>
			<br><a href="index.php">Back to home page</a>
		</form>
	</body>
</html>
