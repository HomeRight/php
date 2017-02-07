<?php
	$db = mysqli_connect("localhost","AlenTest","A12345");
	mysqli_select_db($db,"alentest");
	$sql = "SELECT * FROM books";
	$rows = mysqli_query($db,$sql) ;
	$num = mysqli_num_rows($rows);
	mysqli_close($db) ;
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
<h1>圖書目錄-更新</h1><hr>
	<table border="1">
		<thead>
			<tr>
				<th>書號</th>
				<th>書名</th>
				<th>功能</th>
			</tr>
		</thead>
		<tbody>
			<?php
				if ($num>0) 
				{
					while ($row = mysqli_fetch_array($rows)) 
					{
						$id = $row["id"] ;
						$title = $row["title"] ;
						echo "<tr>";
						echo "<td>".$id."</td>";
						echo "<td>".$title."</td>";
						echo "<td><a href='Ch12_3_2a.php?id=".$id."'>更新</a>|<a href='Ch12_3_3.php?id=".$id."'>刪除</a></td>";
						echo "</tr>";
					}
				}
				mysqli_free_result($rows);
			?>
		</tbody>		

	</table>
<a href='Ch12_3_1.php'>新增資料</a>
</body>
</html>