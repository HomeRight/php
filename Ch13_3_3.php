<?php
	if (isset($_POST["send"])) 
	{
		$id = $_POST["id"] ;
		$title = $_POST["title"] ;
		$author = $_POST["author"] ;
		$price = $_POST["price"] ;
		$category = $_POST["category"] ;
		$pubdate = $_POST["pubdate"] ;

		if (empty($id)) 
		{
			$error .=  "書號欄位不可為空白<br>";
		}
		else
		{
			if (empty($title)) 
			{
				$error .= "書名欄位不可為空白<br>" ;
			}
			else
			{
				$dsn = "mysql:dbname=alentest;host=localhost;port=3306";
				$sql = "INSERT INTO books(id,title,author,price,category,pubdate) VALUES('$id','$title','$author','$price','$category','$pubdate')" ;
				try
				{
					$db = new PDO($dsn,"AlenTest","A12345");
					$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION) ;
					$affected_rows =$db->exec($sql) ;
					
					if ($affected_rows==0) 
					{
						$result .="新增記錄失敗<br>"; 	
					}
					else 
					{
						$result .="新增記錄成功<br>";
					} 
				}
				catch(PDOException $e)
				{
					echo "連結失敗".$e->getMessage();
				}
				$db=null;
			}
		}
	}
	else
	{
		$id="";
		$title="";
		$author="";
		$price="";
		$category="";
		$pubdate="";
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
<h1>新增記錄</h1><hr>
<div style="color: red">
	<?php
		echo $error ;
	?>
</div>

<form method="post" action="">
	<div>
		<label for="id">書號:</label>
		<input type="text" id="id" name="id" value="<?php echo $id ?>"></input>
	</div>
	<div>
		<label for="title">書名:</label>
		<input type="text" id="title" name="title" value="<?php echo $title ?>"></input>
	</div>
	<div>
		<label for="author">作者:</label>
		<input type="text" id="author" name="author" value="<?php echo $author ?>"></input>
	</div>
	<div>
		<label for="price">書價:</label>
		<input type="text" id="price" name="price" value="<?php echo $price ?>"></input>
	</div>
	<div>
		<label for="category">分類:</label>
		<input type="text" id="category" name="category" value="<?php echo $category ?>"></input>
	</div>
	<div>
		<label for="pubdate">出版日:</label>
		<input type="text" id="pubdate" name="pubdate" value="<?php echo $pubdate ?>"></input>
	</div><hr>

	<input type="submit" value="新增記錄" name="send"></input>
</form>
<div>
	<?php
		echo $result ;
	?>
</div>
</body>
</html>