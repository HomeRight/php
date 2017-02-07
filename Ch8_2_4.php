<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
<?php
	$file = "MyData.txt";

	if (file_exists($file)) {
		echo "<pre>";
		$num = readfile($file);
		echo "</pre>";
		echo "檔案擁有: $num 個位元組<br>";
	}
	else
		echo "檔案 $file 不存在";

?>
</body>
</html>