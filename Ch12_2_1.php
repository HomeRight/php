<?php
	
	$db = mysqli_connect("localhost","AlenTest","A12345");
	if (!$db) {
		die("錯誤: 無法連接mysql伺服器" .mysqli_connect_error());
	}
	mysqli_select_db($db,"alentest") or die("錯誤:無法選擇資料庫!".mysqli_error($db));

	$sql = "SELECT * FROM  books";
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
<table border="1">
<table>
	<thead>
		<tr>
			<th>書號</th>
			<th>書名</th>
			<th>作者</th>
			<th>書價</th>
		</tr>
	</thead>
	<tbody>
		<?php
			if ($num>0) {
				for ($i=0; $i < $num ; $i++) { 
					$row = mysqli_fetch_row($rows);
					echo "<tr>";
					echo "<td>".$row[0]."</td>";
					echo "<td>".$row[1]."</td>";
					echo "<td>".$row[2]."</td>";
					echo "<td>".$row[3]."</td>";
					echo "</tr>";
				}

			}
			mysqli_free_result($rows);
		?>
	</tbody>
</table>

</body>
</html>