<?php
$id = $_GET["id"];
$db = mysqli_connect("localhost","AlenTest","A12345");
mysqli_select_db($db,"alentest");
if (isset($_POST["send"])) 
{
	$sql = "DELETE FROM books WHERE id = '$id'" ;
	if (!mysqli_query($db,$sql)) 
	{
		$result .= "刪除記錄失敗...<br>".mysqli_error($db) ;
	}
	else 
		header("location: Ch12_3_2.php");
}
else
{
	$sql = "SELECT * FROM books WHERE id= '$id' " ;
	$rows = mysqli_query($db,$sql);
	$row = mysqli_fetch_row($rows);
	mysqli_free_result($rows);
}
mysqli_close($db);

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
<h1>刪除記錄</h1><hr>
<ul>
	<li>書號:<?php echo $id ?></li>
	<li>書名:<?php echo $row[1] ?></li>
	<li>作者:<?php echo $row[2] ?></li>
	<li>書價:<?php echo $row[3] ?></li>
</ul><hr>
<form method="post" action="">
	<input type="submit" name="send" value="刪除記錄"></input>
</form>
<?php echo $result ?>
</body>
</html>