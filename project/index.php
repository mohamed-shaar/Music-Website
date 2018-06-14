<?php include ('server.php'); ?>
<html>
	<head>
			
		<link rel="stylesheet" type="text/css" href="css.css">
	</head>
<body class="">
	<div class="reg">
		<?php 
			if(!isset($_SESSION['success'])){
				echo "<a href='register.php'>Sing up</a>
					  <a href='login.php'>Login</a>";
			}
			else{
				echo "<a href='index.php?logout=1'>Logout</a>";
			}
		?>
		
	</div>
	<div>
		<h1 class="cenp">Underground Bands That You Should Listen To</h1>
	</div>
	<div>
		<?php
			if(isset($_SESSION['type'])){
				if($_SESSION['type']==1){
					echo "admin admin";
					include('editBands.php');
				}
			}
			
		
		?>
	</div>
	
</body>
</html>

