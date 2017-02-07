<?php
	Class Customer
	{
		const MAX_COUSTOMERS = 50 ;
		public static $bankNo = "bk100" ;
		private static $count = 0 ;
		private $name ;
		private $credit_level ;

		function __construct($name , $credit_level)
		{
			$this->name = $name ;
			$this->credit_level = $credit_level ;
			self::$count++ ;
		}

		static function numOfCustomers()
		{
			return self::$count ;
		}

		function printCoustomer()
		{
			echo "客戶姓名:".$this->name."<br>";
			echo "信用等級:".$this->credit_level."<br>";
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

	<form action="" method="post">
		<input type="text" name="name"></input>
		<input type="text" name="credit_level"></input>
		<input type="submit" name="send"></input>
	</form>
<?php
	

	$c1 = new Customer("Alen",5);
	$c2 = new Customer("ken",2);
	
	echo "最大客戶數:".Customer::MAX_COUSTOMERS."<br>";
	echo "銀行編號:".Customer::$bankNo."<hr>";

	$c1->printCoustomer();
	echo "--------------------------------------------<br>";
	$c2->printCoustomer();

	if (isset($_POST["send"])) {

			echo "---------------------------------------<br>";
			$c3 = new Customer($_POST["name"],$_POST["credit_level"]);
			$c3->printCoustomer();
	
		

	}
	echo "<hr>目前客戶數:".Customer::numOfCustomers();

?>
</body>
</html>