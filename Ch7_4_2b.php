<?php 
	session_start();
	$myname = $_SESSION["myname"];
	$myname1 = $_SESSION["myname1"];
	$myname2 = $_SESSION["myname2"];
	session_destroy();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
	Session值:<?php echo  "$myname<br>$myname2<br>$myname1" ?>
</body>
</html>