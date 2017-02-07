<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
<?php
	$dsn = "mysql:dbname=alentest;host=localhost;port=3306";
	$username = "AlenTest";
	$password = "A12345" ;
	try
	{
		$db = new PDO($dsn ,$username , $password);
		$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		$sql = "SELECT * FROM books" ;
		echo "SQL查詢字串:".$sql."<br>";

		if ($result = $db->query($sql)) 
		{
			echo "<b>圖書資料:</b><br>";

			$total_records = $result->rowCount();
			echo "記錄數: $total_records 筆 <br>";
			while ($row = $result->fetch(PDO::FETCH_ASSOC)) 
			{
				echo $row["id"]."-".$row["title"]."<br>" ;
			}
		}
	}
	catch(PDOException $e)
	{
		echo "連接失敗:".$e->getMessage()."<br>";
	}
	$db = null ;
?>
</body>
</html>