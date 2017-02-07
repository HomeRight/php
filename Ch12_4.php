<?php
	$records_per_page = 2;

	if (isset($_GET["Pages"])) 
	{
		$page = $_GET["Pages"] ;
	}
	else
	{
		$page = 1 ;
	}

	$db = mysqli_connect("localhost","AlenTest","A12345");
	mysqli_select_db($db,"alentest");
	$sql = "SELECT * FROM books" ;
	$rows = mysqli_query($db , $sql);
	$total_records = mysqli_num_rows($rows);

	$total_pages = ceil($total_records/$records_per_page) ;

	$offset = ($page-1)*$records_per_page ;

	mysqli_data_seek($rows,$offset);
	mysqli_close($db);
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
<h1>圖書目錄(共<?php echo $total_records ?>筆)</h1>
<table border="1">
	<thead>
		<tr>
			<th>書號</th>
			<th>書名</th>
			<th>書價</th>
			<th>出版日</th>
		</tr>
	</thead>
	<tbody>
		<?php
			$i = 1 ;
			while ($row = mysqli_fetch_array($rows) and $i <= $records_per_page ) 
			{
				$id = $row["id"] ;
				$title = $row["title"] ;
				$price = $row["price"] ;
				$pubdate = $row["pubdate"] ;

				echo "<tr>";
				echo "<td>".$id."</td>";
				echo "<td>".$title."</td>";
				echo "<td>".$price."</td>";
				echo "<td>".$pubdate."</td>";
				echo "<tr>";
				$i++ ;
			}
			mysqli_free_result($rows);
		?>
	</tbody>
</table>
<?php
	if ($page > 1) 
	{
		echo "<a href='Ch12_4.php?Pages=".($page-1)."'>上一頁</a>|";
	}
	for ($i=1; $i <= $total_pages ; $i++) 
	{ 
		if ($i!=$page) 
		{
			echo "<a href='Ch12_4.php?Pages=".$i."'>".$i."</a> ";
		}
		else
			echo "$i ";
	}

	if ($page<$total_records) 
	{
		echo "|<a href='Ch12_4.php?Pages=".($page+1)."'>下一頁</a>";
	}
?>
</body>
</html>