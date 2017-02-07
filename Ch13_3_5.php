<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
<?php
	
	$dsn = "mysql:dbname=alentest;host=localhost;port=3306";
	$username = "AlenTest" ;
	$password = "A12345" ;

	try
	{
		$db = new PDO($dsn, $username,$password);
		$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		$sql = "SELECT * FROM books WHERE category=:type and price >:price" ;
		$stmt = $db->prepare($sql);
		$stmt->bindValue(":type","程式設計",PDO::PARAM_STR);
		$stmt->bindValue(":price",500,PDO::PARAM_INT);
		$stmt->execute();

		if ($result = $stmt->fetchAll(PDO::FETCH_ASSOC)) 
		{
			echo "<b>圖書資料(程式設計且大於550元)</b><br>";
			$total_records = $stmt->rowCount();
			echo "記錄數:".$total_records."筆<br>";

			foreach ($result as $row ) 
			{
			 	echo $row["id"]."-".$row["title"]."<br>";
			 } 
		}
	}
	catch(PDOException $e)
	{
		echo "連接失敗".$e->getMessage();
	}

?>
</body>
</html>