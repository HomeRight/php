<?php
	$db = mysqli_connect("localhost","AlenTest","A12345");
	mysqli_select_db($db,"alentest");
	$sql = "SELECT * FROM books";
	$rows = mysqli_query($db , $sql);
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
	<thead>
		<tr>
			<th>書號</th>
			<th>書名</th>
		</tr>
	</thead>
	<tbody>
		<?php
			if ($num>0) 
			{
				while ($row = mysqli_fetch_array($rows)) 
				{
					$id = $row["id"];
					echo "<tr>";
					echo "<td><a href='Ch12_2_3b.php?id=".$id."'><h3>".$id."</h3></a></td>";
					echo "<td>".$row["title"]."</td>";
					echo "</tr>";
				}
			}
		?>
	</tbody>
</table>

</body>
</html>