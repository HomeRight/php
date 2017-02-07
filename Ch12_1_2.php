<!DOCTYPE html>
<html>
<head>
	<title>	</title>
	<meta charset="utf-8">
</head>
<body>
<?php
$db= @mysqli_connect("localhost","AlenTest","A12345")or die("無法開啟mysql伺服器的連接");

$dbname = "alentest";

if (!mysqli_select_db($db,$dbname)) {
	die("無法開啟 $dbname 資料庫<br>");
}
else
	echo "資料庫 $dbname 開啟成功<br>";

$dbname="mysql";

if (!mysqli_select_db($db,$dbname)) {
	die("無法開啟 $dbname 資料庫<br>");
}
else
	echo "資料庫 $dbname 開啟成功<br>";

	mysqli_close($db);
?>
</body>
</html>