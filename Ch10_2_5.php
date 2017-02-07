<?php
	$cal = new class(10)
	{
		private $opd1;

		function __construct($opd1)
		{
			$this->opd1 = $opd1 ;
		}

		function multiply($opd2)
		{
			return $this->opd1 * $opd2 ;
		}
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
	$result = $cal->multiply(15);
	echo "10*15=".$result;
?>
</body>
</html>