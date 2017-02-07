<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
<?php
	$dsn = "mysql:dbname=alentest;host=localhost;port=3306";
	$username="AlenTest" ;
	$password = "A12345" ;

	try
	{
		$db = new PDO($dsn,$username,$password);
		$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		$sql1="UPDATE books SET price=550 WHERE id ='g001'";
		$sql2="UPDATE books SET price=550 WHERE id ='g002'";
		$db->beginTransaction() ;

		$db->exec($sql1);
		$db->exec($sql2);

		$db->commit();
		echo "成功更新兩筆圖書的書價";

	}
	catch(PDOException $e)
	{
		$db->rollBack();
		echo "連接失敗".$e->getMessage();
	}

	$db=null;

?>
</body>
</html>