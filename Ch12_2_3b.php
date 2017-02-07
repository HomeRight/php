<?php
	$id = $_GET["id"] ;
	$db = mysqli_connect("localhost","AlenTest","A12345");
	mysqli_select_db($db,"alentest");
	$sql = "SELECT * FROM books WHERE id ='".$id."'" ;
	$rows = mysqli_query($db ,$sql);
	$row = mysqli_fetch_row($rows);
	mysqli_free_result($rows);
	mysqli_close($db);
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
<h1>詳細圖書資料</h1>
<ul>	
	<li>書號:<?php echo $id ?></li>
	<li>書名:<?php echo $row[1] ?></li>
	<li>作者:<?php echo $row[2] ?></li>
	<li>書價:<?php echo $row[3] ?></li>
	<li>分類:<?php echo $row[4] ?></li>
	<li>出版日:<?php echo $row[5] ?></li>
</ul>
</body>
</html>