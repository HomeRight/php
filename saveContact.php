<?php
header("Expires: Mon, 26 Jul 2015 05:00:00 GMT") ;

$name = $_POST["name"];
$email = $_POST["email"];
$result = "-1" ;
if (!(empty($name) || empty($email))) 
{
	$db = mysqli_connect("localhost","AlenTest","A12345");
	mysqli_select_db($db,"alentest");
	$sql = "SELECT * FROM contact WHERE name = '$name'" ;
	$rows = mysqli_query($db,$sql);
	$num = mysqli_num_rows($rows);

	if ($num<=0) 
	{
		$sql = "INSERT INTO contact(name,email) VALUES('$name','$email')" ;

		if (mysqli_query($db,$sql)) 
		{
			$result = 1 ;
		}
	}
}
echo $result;
mysqli_close($db);
?>