<?php
	session_start();
	if ($_SESSION["login_session"]) 
	{
		$name = $_SESSION["username"];
		$msg =  "歡迎使用者:".$name."登入";
	}
	else
	{
		header("location:login.php");
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<?php
	echo $msg;
?>

<a href="login.php">登出</a>
</body>
</html>

