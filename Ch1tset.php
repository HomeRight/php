<?php
	$error = "";
	$result = "";

	$showform = true ;
	if (isset($_POST["send"])) 
	{
		$username = $_POST["username"];
		$password1 = $_POST["password1"];
		$password2 = $_POST["password2"];
		
		if (empty($_POST["username"])) {
			$error = "欄位名稱為空"	;
		}
		else
		{
			if ($password1!=$password2) 
			{
				$error = "密碼輸入不一樣" ;	
			}
			else
			{
				$showform = false ;
				$result .="帳號名稱為:".$username."<br>";
				$result .="密碼為:".$password1."<br>";
			}
		}
	}

	
?>
<!DOCTYPE html>
<html>
<head>
	<title>Test</title>
	<meta charset="UTF-8">
</head>
<body>
<?php
	if ($showform) 
	{
?>		
		<form action="" method="post">
			<p style="color: red"><?php echo $error ?></p>
			<div>
				<label for="username">請輸入使用者名稱:</label>
				<input type="text" id="username" name="username" value="<?php echo "$username" ?>"></input>
			</div>
			<div>
				<label for="password1">請輸入使用密碼:</label>
				<input type="text" id="password1" name="password1"></input>
			</div>
			<div>
				<label for="password2">再次輸入使用者名稱:</label>
				<input type="text" id="password2" name="password2"></input>
			</div>
			
			<input type="submit" name="send"></input>		
		</form>

	<?php
	}
	else
	{	
		echo "$result";
	?>
	<form action="Ch1.php" method="post">
		<p>
			<label for="name">請輸入name</label>
			<input type="text" id="name" name="name"></input>
		</p>
		<p>
			<label for="email">請輸入email</label>
			<input type="text" id="email" name="email"></input>
		</p>
		<input type="submit" value="提交"></input>
	</form>
	
	<?php
	}
	?>
</body>
</html>