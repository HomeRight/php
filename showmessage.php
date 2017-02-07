<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
<h1>顯示訪客留言</h1><hr>
<?php
	$file = "guestbook.txt" ;

	if (!file_exists($file) | @filesize($file)==0) {
		
		echo "<h2>目前沒有任何留言</h2><hr>";
	}
	else
		readfile($file);
?>
|<a href="Ch15_2_2.php">新增留言</a>|
</body>
</html>