<?php
	session_start();
	if (isset($_POST["send"])) {
		$myname = $_POST["myname"];
		$myname1 = $_POST["myname1"];
		$myname2 = $_POST["myname2"];

		if (!isset($_SESSION["myname"])&&!empty($myname)) {
			$_SESSION["myname"] = $myname ;

		}
		if (!isset($_SESSION["myname1"])&&!empty($myname1)) {
			$_SESSION["myname1"] = $myname1 ;

		}
		if (!isset($_SESSION["myname2"])&&!empty($myname2)) {
			$_SESSION["myname2"] = $myname2 ;

		}

		header("location: Ch7_4_2b.php");
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
		<label for="myname">Session值:</label>
		<input type="text" name="myname" id="myname" value="Joe"></input>
		<label for="myname">Session1值:</label>
		<input type="text" name="myname1" id="myname1" value="Joe"></input>
		<label for="myname">Session2值:</label>
		<input type="text" name="myname2" id="myname2" value="Joe"></input>

		<input type="submit" name="send" value="建立Session"></input>	
	</form>
</body>
</html>