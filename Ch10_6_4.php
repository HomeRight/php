<?php
	function inverse($x)
	{	
		if (!$x) {
			throw new Exception("因為除以0", 123);
		}
		if ($x==8) {
			throw new Exception("因為八八節", 1789);
			
		}
		return 1/$x ;
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
<?php
try {
	echo "1/5=".inverse(5)."<br>";
	// echo "1/0=".inverse(0)."<br>";
	echo "1/8=".inverse(8);
} catch (Exception $e) {
	echo "檔案:".$e->getFile()."<br>";
	echo "行號:".$e->getLine()."<br>";
	echo "錯誤碼:".$e->getCode()."<br>";
	echo "錯誤訊息:".$e->getMessage()."<br>";
	exit();
}
?>
</body>
</html>