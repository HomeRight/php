<?php
	if (isset($_GET["DB"])) 
	{
		$dbname = $_GET["DB"] ;	
	}
	else
	{
		$dbname = "alentest" ;
	}

	if (isset($_GET["SQL"])) 
	{
		$sql = $_GET["SQL"] ;
	}
	else
	{
		$sql = "SELECT * FROM  book" ;
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
<?php
	function error_handle($db)
	{
		echo "錯誤代碼:".mysqli_errno($db)."<br>";
		echo "錯誤詢息:".mysqli_error($db)."<br>";
		exit();
	}
?>
</head>
<body>

<a href="Ch12_5.php?DB=alentest">選擇alentest資料庫</a><br>
<a href="Ch12_5.php?DB=mydb">選擇mydb資料庫</a><br>

<?php
$db = mysqli_connect("localhost","AlenTest","A12345");
if (mysqli_connect_errno() == 0) 
{
	echo "開啟MySQL伺服器成功<br>";
	
	mysqli_select_db($db,$dbname);
	if (mysqli_errno($db) != 0) 
	{
		error_handle($db);
	}
	else
		echo "選擇資料庫: $dbname 成功<br>";
	
	$rows = mysqli_query($db,$sql) ;
	if (mysqli_errno($db)!=0) {
		error_handle($db);
	}
	else
		echo "SQL指令:$sql 查詢成功<br>";
	mysqli_free_result($rows);
	mysqli_close($db);
}

?>
</body>
</html>