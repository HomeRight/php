<?php
	abstract class Shape
	{
		public $x;
		public $y;

		abstract function area();
		
	}

	/**
	* 
	*/
	class Circle extends Shape
	{
		public $r ;
		function __construct($x,$y,$r)
		{
			$this->x = $x;
			$this->y = $y;
			$this->r =$r ;
		}

		function area()
		{
			return 3.1416*$this->r*$this->r ;
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
	$c = new circle(5.0,15.0,5.2);

	echo "x座標:".$c->x."<br>";
	echo "y座標:".$c->y."<br>";
	echo "圓半徑:".$c->r."<br>";

	echo "圓面積:".$c->area()."<br>";
?>
</body>
</html>