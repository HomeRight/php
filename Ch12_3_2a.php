<?php
	$id = $_GET["id"];
	$db = mysqli_connect("localhost","AlenTest","A12345");
	mysqli_select_db($db,"alentest");
	if (isset($_POST["send"])) 
	{
		$price = $_POST["price"];
		$pubdate = $_POST["pubdate"];
		$sql = "UPDATE books SET price = '$price', pubdate='$pubdate' WHERE id = '$id' ";
		if (!mysqli_query($db,$sql)) 
		{
			$result .= "記錄更新失敗".mysqli_error($db) ; 
		}
		else
		{
			$result .= "記錄更新成功";
			header("refresh:2;url=Ch12_3_2.php");
		}
	}
	else
	{
		$sql= "SELECT * FROM books WHERE id = '$id'";
		$rows = mysqli_query($db , $sql) ;
		$row = mysqli_fetch_array($rows) ;
		$price = $row["price"];
		$pubdate = $row["pubdate"];
		mysqli_free_result($rows);
		
	}
	mysqli_close($db);
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
<h1>更新紀錄</h1><hr>

<form action="" method="post">
<div>
	<div>
		<label for="id">書號:</label><?php echo $id ?>
	</div>

	<div>
		<label for="price">書價:</label>
		<input type="text" id="price" name="price" value="<?php echo $price ?>"></input>
	</div>

	<div>
		<label for="pubdate">出版日:</label>
		<input type="text" id="pubdate" name="pubdate"  value="<?php echo $pubdate ?>"></input>
	</div>
	
	<input type="submit" name="send" value="更新"></input>
</div>
</form>
<?php echo $result ?>
</body>
</html>