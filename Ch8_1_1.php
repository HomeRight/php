<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
<?php
$file = basename($_SERVER["PHP_SELF"],".php");
$file1 = basename($_SERVER["PHP_SELF"]);
$dir = dirname($_SERVER["PHP_SELF"]);
$path = realpath($file.".php");
$path1 = realpath($file1);
$parts = pathinfo($path1);
echo $_SERVER["PHP_SELF"]."<br>";
echo "$file<br>";
echo "$file1<br>";
echo "$dir<br>";
echo "$path<br>";
echo "$path1<br>";
echo "路徑:".$parts["dirname"]."<br>";
echo "檔名:".$parts["basename"]."<br>";
echo "副檔名:".$parts["extension"]."<br>";
?>
</body>
</html>