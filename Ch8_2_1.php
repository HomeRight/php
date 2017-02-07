<?php
	$file = "MyData.txt";
	if (isset($_POST["send"])) {
		$name = $_POST["name"];    
		$email = $_POST["email"];
		if (!empty($name)&&!empty($email)) {
			$fp = fopen($file, "a");
			$data = $name .",".$email."\r\n";
			fwrite($fp,$data);
			$result = "註冊資料已經寫入檔案MyData.txt";

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
	<form action="" method="post">
		<h1>寫入檔案</h1>
		<div>
			<label for="name">姓名:</label>
			<input type="text" id="name" name="name" value="Alen"></input>
		</div>
		<div>
			<label for="email">電子信箱:</label>
			<input type="text" id="email" name="email" value="adssdsd@2323d"></input>
		</div>
		<input type="submit" value="註冊" name="send"></input>
	</form>

	<?php
		if (!empty($result)) {
			echo "<h1>訊息： $result</h1>";
		}
	?>
</body>
</html>