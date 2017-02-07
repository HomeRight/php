<?php
header("Expires: Mon, 26 Jul 2015 05:00:00 GMT") ;

$name = $_POST["name"];
$db = mysqli_connect("localhost","AlenTest","A12345");
mysqli_select_db($db,"alentest");
$sql = "SELECT * FROM contact WHERE name = '$name' " ;
$rows = mysqli_query($db,$sql);
$num = mysqli_num_rows($rows);
if($num<=0)
{
	$email = "沒有此聯絡人";
}
else
{
	$row = mysqli_fetch_row($rows);
	$email =$row[1] ;
}
echo $email;
mysqli_close($db);
?>