<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
	<form action="Ch7_2_2b.php" method="get">
		<label for="id">URL參數id:</label>
		<input type="text" id="id" name="id" value="100"></input>

		<input type="submit" value="提交"></input>
	</form>
	<a href="Ch7_2_2b.php?id=50">送出資料</a>
	<a href="Ch7_2_2b.php">送出資料(沒有id參數)</a>
</body>
</html>