<?php
	$db = mysqli_connect("localhost","AlenTest","A12345") or die("無法連接sql伺服器");
	mysqli_select_db($db,"alentest");
	$sql = "SELECT * FROM books";
	$rows = mysqli_query($db,$sql);
	$num = mysqli_num_rows($rows);
	mysqli_close($db);
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
<h1>顯示圖書目錄</h1>
<ul>
	<?php
		if ($num>0) {
			while ($row = mysqli_fetch_array($rows)) {
				echo "<li>";
				echo "<h3>".$row[0]."</h3>";
				echo "<p>".$row["title"]. "-";
				echo $row["price"]."</p>";
				echo "</li>";
			}
		}

		mysqli_free_result($rows);
	?>
</ul>
</body>
</html>