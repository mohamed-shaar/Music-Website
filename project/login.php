<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
	<head>
		<title>User registration</title>
		<link rel="stylesheet" type="text/css" href="css.css">
		
	</head>
	<body class="body2">
		<div class="header">
			<h2>Login</h2>
		</div>
		<form method="post" action="login.php" style="background:none;">
			<!-- lw fe errors httl3 hna -->
			<?php include('errors.php'); ?>
			
			<div class="input-group">
				<label>Username</label>
				<input type="text" name="username"/>
			</div>
			
			<div class="input-group">
				<label>Password</label>
				<input type="password" name="password"/>
			</div>
		
			
			<div class="input-group">
				<button type="submit" name="login" class="btn">Login</button>
			</div>
			<p style="color:white;">Not yet a member> <a href="register.php">sign in</a></p>
			<br><a href="index.php">Back to home page</a>
		</form>
	</body>
</html>
