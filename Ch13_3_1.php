<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
<?php
	$dsn = "mysql:dbname=alentest;host=localhost;port=3306";
	$username = "AlenTest" ;
	$password = "A12345" ;

	try
	{
		$db = new PDO($dsn,$username,$password);

		$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

		echo "成功建立";
	}
	catch(PDOException $e)
	{
		echo "連接失敗:".$e->getMessage();
	}
	$db=null ;
	
?>
</body>
</html>