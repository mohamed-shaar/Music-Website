<html>
	<head>
		<link rel="stylesheet" type="text/css" href="css.css">
	</head>
	<body>
		<div>
			<form method="post" style="background:none;">
				<div class="input-group">
					<button type="submit" name="insert" class="btn">Insert</button>
					<button type="submit" name="update" class="btn">Update</button>
					<button type="submit" name="delete" class="btn">Delete</button>
					<button type="submit" name="view" class="btn">View ID</button>
				</div>
			</form>
			<?php
				if(isset($_POST['insert'])){
					echo "<div  class='input-group' style='color:#CD5C5C;'>";
					echo "<form method='post' style='background:none;'>Band Name<input type='text' name='name'>";
					echo "<br>Img path<input type='text' name='imgsrc'>";
					echo "<br>Details<input type='text' name='detail'>";
					echo "<br><input type='submit' name='insertbutton' style='color:#CD5C5C;' class='btn'></form>";
					echo "</div>";
				}
				if(isset($_POST['update'])){
					echo "<div style='color:#CD5C5C;'>";
					echo "<form method='post' style='background:none;'>Band ID<input type='text' name='id' >";
					echo "<br><input type='radio' name='attributeName' value='name'>Band Name";
					echo "<br> <input type='radio' name='attributeName' value='imgsrc'>Img path";
					echo "<br>  <input type='radio' name='attributeName' value='detail'>Details";
					echo "<br> New value<input type='text' name='update' class='input-group' >";
					echo "<br><input type='submit' name='updatebutton' style='color:#CD5C5C;' class='btn'></form>";
					echo "</div>";
				}
				if(isset($_POST['delete'])){
					echo "<div  class='input-group' style='color:#CD5C5C;'>";
					echo "<form method='post' style='background:none;'>Band ID<input type='text' name='name'>";
					echo "<br><input type='submit' name='deletebutton' style='color:#CD5C5C;' class='btn'></form>";
					echo "</div>";
				}
				
				
				
				
				if(isset($_POST['view'])){
					
					echo "<div  class='input-group' style='color:#CD5C5C;'>";
					echo "<form method='post' style='background:none;'>Band Name<input type='text' name='name1'><br>";
					echo "<br><input type='submit' name='viewbutton' style='color:#CD5C5C;' class='btn'></form>";
					echo "</div>";
					
					
				}
				if(isset($_POST['viewbutton'])){
					require_once "database.php";
					$db= new database();
					$db->connect_database();
					$nn=$_POST['name1'];
					echo $nn;
					$bandID= $db->select_by_name($nn);
					if($bandID != NULL){
					echo "Band ID: $bandID";}
					else{echo "NULL";}
					}
			?>
		</div>
	</body>
</html>