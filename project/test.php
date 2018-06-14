<!--<form method="post" action="<?php $_SERVER['PHP_SELF']?>">
	Name: <input type="text" name="name"/>
	pass: <input type="password" name="pass"/>
		  <input type="submit" value="login"/>
</form>-->
<?php
#echo "Hello world</br>";

/*$name = "ahmed";
$age = 22;
$n=2;
$age+=$n;
echo "$name". "$age";
*/
/*$arr = array(1,2,3,4,5,"a","b","c","d","e");

for($i=0;$i<count($arr);$i++){
	echo $arr[$i]." ";
	//echo"</br>";
}echo"</br>";*/

/*$age=array("peter"=> 22,"ahmed"=>15);
foreach($age as $key => $value){
	echo $key ." => " . $value;
	echo"</br>";
}echo"</br>";*/

/*echo fun();
echo fun();
echo fun();	
Function fun(){
	static $i=1;
	return $i++;
}*/

/*$file =fopen("text.txt",'r+');

echo "</br>" ;
while(!feof($file)){
	echo fgets($file , 1024) ;
	echo "<br>";
}
echo "</br>" ;
$lines = File("text.txt");
//print_r ($lines) ;
/*foreach($lines as $key => $value){
	echo $key ." => " . $value;
	echo"</br>";
}
$fileKolo = file_get_contents("text.txt");
echo $fileKolo;*/
/*if(isset($_POST['name']) && isset($_POST['pass'])){
	$name= $_POST['name'];
	$pass= $_POST['pass'];
	echo $name . "<br>" . $pass;
}
else {
	echo"alert('da5l ya 7ywan')";
}*/
$t = "This is some <b>bold</b> text.";

echo $t;//stripslashes("This is some <b>bold</b> text.");

echo"hello atktbt kda <br>";
$str = "Hello";
echo md5($str);


?>