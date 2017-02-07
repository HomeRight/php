<?php
	$username="";$password ="";$email ="";$msg="";
	if (isset($_POST["username"])) 
	{
		$username = $_POST["username"];
	}
	if (isset($_POST["password"])) 
	{
		$password = $_POST["password"];
	}
	if (isset($_POST["email"])) 
	{
		$email = $_POST["email"];
	}
	if ($username!=""&&$password!=""&&$email!="") 
	{
		$db = mysqli_connect("localhost","root","A12345678");
		mysqli_select_db($db,"alentest");
		$sql = "SELECT * FROM login WHERE username = '$username'";
		$rows = mysqli_query($db,$sql);  
		if (mysqli_fetch_row($rows)) 
		{
			$msg .= "此帳號已有人使用" ;
		}
		else
		{
			$sql = "INSERT INTO login(username,password,email) VALUES('$username','$password','$email')";
			if (mysqli_query($db,$sql)) {
				$msg .= "註冊成功" ;
			}
			else
				$msg .- "註冊失敗";
		}
	
		
	}
	else
	{
		$msg .= "資料不齊全";
	}


?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<form action="" method="post">
	輸入帳號: <input type="text" name="username"><br>
	輸入密碼: <input type="text" name="password"><br>
	輸入電子郵件: <input type="text" name="email"><br>

	<input type="submit" name="send" value="註冊">	
</form>

<div style="color:red">
	<?php
		echo $msg;
	?>
</div>

<br><br>
<a href="login.php">返回登入介面</a>
</body>
</html>