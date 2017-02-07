<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
<?php
	$mysqli = new mysqli("localhost","AlenTest","A12345");
	if (mysqli_connect_errno()) 
	{
		echo "連結錯誤代碼".mysqli_connect_errno()."<br>";
		echo "連結錯誤訊息".mysqli_connect_error()."<br>";
	}
	$mysqli->select_db("alentest");
	$sql="SELECT * FROM books";
	echo "SQL查詢字串:".$sql."<br>" ;
	if ($result = $mysqli->query($sql)) 
	{
		echo "<b>圖書資料:</b><br>";
		$total_fields = $result->field_count ;
		$total_rows = $result->num_rows ;
		echo "欄位數:".$total_fields."個<br>";
		echo "記錄數:".$total_rows."筆<br>";

		while ($row = $result->fetch_assoc()) 
		{
			echo $row["id"]."-".$row["title"]."<br>";
		}
		$result->close();
	}
	$mysqli->close() ;

?>
</body>
</html>