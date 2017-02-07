<?php 
	if (isset($_COOKIE["myCookie"])) {
		
		$cookieValue = $_COOKIE["myCookie"] ;
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
	<div>myCookie的值 = "<?php echo $cookieValue?>"</div>

	<?php 
	while (list($key,$value) = each($_COOKIE["myUser"])) {
		echo "$key -> $value<br>";
	}
	?>
</body>
</html>