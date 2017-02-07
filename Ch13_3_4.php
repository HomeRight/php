<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
<?php
	$dsn ="mysql:dbname=alentest;host=localhost;port=3306";
	$username = "AlenTest" ;
	$password = "A12345" ;
	try
	{
		$db = new PDO($dsn,$username,$password);
		$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		$sql = "SELECT * FROM books WHERE price >= ?" ;
		$stmt = $db->prepare($sql);
		$stmt->execute(array(550));
		if ($result = $stmt->fetchAll(PDO::FETCH_ASSOC)) 
		{
			echo "<b>圖書資料(>=550元)</b><br>";
			$total_record = $stmt->rowCount();
			echo "記錄數:".$total_record. "筆<br>" ;
			foreach ($result as $row ) 
			{
				echo $row["id"]."-".$row["title"]."<br>";
			}
		}
	}
	catch(PDOException $e)
	{
		echo "連結失敗".$e->getMessage();
	}
?>
</body>
</html>