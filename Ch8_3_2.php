<?php
	$msg="" ;
	if (isset($_FILES["file"])) {
		for ($i=0; $i <3 ; $i++) { 
			$name = $_FILES["file"]["name"][$i];
			$tmp = $_FILES["file"]["tmp_name"][$i];

			if (!empty($name)) 
			{
				copy($tmp, $name);
				$msg .= "檔案".$name."上傳成功<br>" ;
				unlink($tmp);	
			}
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>

<form action="" enctype="multipart/form-data" method="post">
	<div>
		選擇檔案<input type="file" name="file[]"></input><br>
		選擇檔案<input type="file" name="file[]"></input><br>
		選擇檔案<input type="file" name="file[]"></input><br>
	</div>
	<input type="submit" name="send" value="上傳檔案"></input>
</form>
<?php
	if (!empty($msg)) {
		echo "<p>$msg</p>";
	}
?>
</body>
</html>