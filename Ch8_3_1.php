<?php
	$msg = "" ;
	if (isset($_FILES["file"])) 
	{
		$msg .= "上傳檔案資訊: <hr>";
		$msg .= "檔名:".$_FILES["file"]["name"]."<br>";
		$msg .= "暫存檔:".$_FILES["file"]["tmp_name"]."<br>";
		$msg .= "尺寸:".$_FILES["file"]["size"]."<br>";
		$msg .= "種類:".$_FILES["file"]["type"]." <hr>"; 

		if (copy($_FILES["file"]["tmp_name"],$_FILES["file"]["name"] )) 
		{
			$msg .= "檔案上傳成功<br>";
			unlink($_FILES["file"]["tmp_name"]);
		}
		else
			$msg .="檔案上傳失敗<br>";
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
	<form action="" method="post" enctype="multipart/form-data">
		<div>
			<input type="file" name="file"></input>
		</div><br>
		<input type="submit" name="send" value="上傳檔案"></input>
	</form>
	<?php

		if (!empty($msg)) {
			echo "<p>".$msg."<p>";
		}
	?>
</body>
</html>