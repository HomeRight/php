<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
<?php
	error_reporting(E_ERROR|E_WARNING);
	$file = "CH10_6_3_2.txt";
	$fp = @fopen($file, "r") or exit("錯誤: 檔案".$file."開啟錯誤!<br>");
	$fp1 = fopen($file, "a");
	fwrite($fp1, "aaaaaaaaaascedvdfv\r\n");
	fclose($fp);
	fclose($fp1);
?>
</body>
</html>