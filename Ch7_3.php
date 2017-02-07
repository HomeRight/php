<?php
	if(isset($_POST["send"]))
	{
		$value = $_POST["cvalue"];

		if (!empty($value)) {
			
			$date = strtotime("+10 days",time());
			setcookie("myCookie",$value,$date);
		}

		setcookie("myUser[user]","Alen",time()+3600);
		setcookie("myUser[password]","1234",time()+3600);
		$date = strtotime("-10 days",time());
		// setcookie("myCookie","",$date);
		// setcookie("myUser[user]","",time()-3600);
		// setcookie("myUser[password]","",time()-3600);
		header("location: CH7_3a.php");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
	<form method="post" action="">

		<label for="cvalue">Cookies值:</label>
		<input type="text" id="cvalue" name="cvalue" ></input>	
		
		<input type="submit" name="send" value="建立Cookies值"></input>
	</form>
</body>
</html>