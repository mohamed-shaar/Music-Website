<?php
class database{
	var $host="localhost";
	var $db="registration";
	var $username="root";
	var $password="";
	var $connect;
	
	function create_database($dbname){
		$this->connect= mysqli_connect($this->host,$this->username,$this->password);
		$sql="CREATE DATABASE " . $dbname;
		if(mysqli_query($connect,$sql)){
			echo "Database created successfully";
		}
		else{
			echo "Error creating database: " . mysqli_error($connect);
		}
		mysqli_close($connect);
	}
	
	function connect_database(){
		
		$this->connect= mysqli_connect($this->host,$this->username,$this->password,$this->db);
		if (!$this->connect) {
			die("Connection failed: " . mysqli_connect_error());
		}
    }
	
	function insertToBand($name , $imgsrc , $detail){
		$sql="INSERT INTO bands (name , imgsrc , detail) VALUE ('$name','$imgsrc','$detail')";
		mysqli_query($this->connect,$sql);
	}
	
	function updateband($attributeName , $update , $id){
		$sql= "UPDATE bands SET " . $attributeName . "='" . $update . "' WHERE id=" . $id;
		mysqli_query($this->connect , $sql );
	}
	
	function delete_band($id){
		$sql= "	DELETE FROM bands WHERE id=".$id;
		mysqli_query($this->connect,$sql);
	}
	
	function select_all (){
		echo "<table border=2>" ;
		$query =mysqli_query($this->connect,"select * from bands");
		while($row = mysql_fetch_array($query)){
			//$id=$row["id"];
			echo "<tr>";
			echo "<td>".$row["id"]."</td>";
			echo "<td>".$row["name"]."</td>";
			echo "<td>".$row["imgsrc"]."</td>";
			echo "<td>".$row["detail"]."</td>";
			echo "</tr>";
			
		}
		echo "</table>";
	}
	function select_by_name($namee)
	{
		
		$sql = "SELECT id FROM bands where name=$namee";
		$result=mysqli_query($this->connect,$sql);
		$num_of_rows=mysqli_num_rows($result);
		if($num_of_rows==1){
			$row=mysqli_fetch_array($result);
			$id=$row["id"];
			return $id;
		}
		else{echo"connection faild !";}
		
		
	}
	
	function disconnect()
	{
		if (isset($this->connect))
		{
			mysql_close($this->connect);
		}
	}
	

}
?>