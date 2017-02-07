<?php
	session_start();
	$msg ="";
	$username="";
	$password = "" ;

		if (empty($_POST["username"])) 
		{
			$msg .= "請輸入帳號<br>" ;
		}
		else
		{
			$username = $_POST["username"];
		}
		
		if (empty($_POST["password"])) 
		{
			$msg .= "請輸入密碼<br>" ;
		}
		else
		{
			$password = $_POST["password"];
		}

		if ($username !="" && $password !="") 
		{
			$db = mysqli_connect("localhost","root","A12345678");
			mysqli_select_db($db,"alentest");
			$sql = "SELECT * FROM login WHERE username = '$username' AND 
			password = '$password'";
			$rows =  mysqli_query($db , $sql);

			if (mysqli_fetch_row($rows))
			{
				$_SESSION["login_session"] = true ;
				$_SESSION["username"] = $username ;
				header("location: index.php") ;
			}
			else
			{
				$msg .= "帳號或密碼輸入錯誤<br>" ;
			}
			mysqli_close($db);
		}
		// else
		// {
		// 	$msg .= "請輸入帳號密碼";
		// }
	
	

?>

<!DOCTYPE html>
<html>
<head>
	<title>登入</title>
	<meta charset="UTF-8">
</head>
<body>
<h1>登入畫面</h1><hr>

<form action="login.php" method="post">
	
		<label for="username">請輸入帳號</label>
		<input type="text" id="username" name="username" value="<?php echo $username ?>"><br>



		<label for="password">請輸入密碼</label>
		<input type="text" id="password" name="password" value="<?php echo $password ?>"><br>


		<input type="submit" >
</form>
<hr>

<div style="color:red">
	<?php
		echo $msg;
	?>
</div>
<br><br>
<a href="register.php">註冊</a>

</body>
</html>