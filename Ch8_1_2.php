<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
<?php
	$file = "Ch8_1_2" ;

	if (file_exists($file.".php")) {
		echo "檔案:$file.php存在<br>" ;
	}
	else
		echo "檔案:$file.php不存在<br>";

	if (!copy($file.".php",$file. ".bak" )) {
		echo "檔案:$file.php複製成bak失敗<br>";
	}
	else
		echo "檔案:$file.php複製成bak成功<br>";

	if(rename($file.".bak", "Ch8_1_2.txt"))
		echo "檔案:$file.bak更名成Ch8_1_2.txt<br>";
	else
		echo "檔案:$file.bak更名失敗" ;

	$file = "Ch8_1_2.txt";
	if(unlink($file))
		echo "刪除檔案$file成功";
	else
		echo "刪除檔案$file失敗";
?>
</body>
</html>