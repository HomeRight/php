<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
<?php
	$db = @mysqli_connect('localhost','AlenTest','A12345');

	if (!$db) {
		echo "MySql伺服器連接錯誤!<br>";
		exit();
	}
	else
	{
		echo "MySql伺服器連接成功!<br>";
	}

	mysqli_close($db);
?>
</body>
</html>