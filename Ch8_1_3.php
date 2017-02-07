<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
<?php
	$file = "Ch8_1_3.php";
	echo "檔案名稱:$file<br>";
	echo "檔案類型:".filetype($file)."<br>";
	echo "最後存取:".date("m/d/Y h:i:s",fileatime($file))."<br>";;
	echo "最後修改:".date("m/d/Y h:i:s",filemtime($file))."<br>";;
	echo "檔案大小:".filesize($file)."<br>";;
	echo "是否是目錄::".is_dir($file)."<br>";;
	echo "是否是檔案:".is_file($file)."<br>";;
	echo "是否可讀:".is_readable($file)."<br>";;
	echo "是否可寫:".is_writeable($file)."<br>";;
	echo "是否可上傳檔案:".is_uploaded_file($file)."<br>";;




?>
</body>
</html>