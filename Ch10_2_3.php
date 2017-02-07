<?php
	Class Account
	{
		private $balance ;

		function __construct($amt = 650)
		{
			echo "呼叫建構子...<br>";
			$this->balance = $amt ;
		}


		function __destruct()
		{
			echo "呼叫解構子...<br>";
		}

		public function deposit($amt)
		{
			if ($amt>0) {
				$this->balance = $this->balance + $amt;
			}
		}

		public function withdraw($amt)
		{
			if ($amt>0 && $this->checkBalance($amt)) {
				$this->balance = $this->balance - $amt;
			}
		}

		public function getBalance()
		{
			return $this->balance ;
		}

		private function checkBalance($amt)
		{
			if ($amt <= $this->balance) {
				return true ;
			}
			else 
				return false ;
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
$saving = new Account(1000);
$checking = new Account(2000);

echo "存款帳戶餘額:".$saving->getBalance()."<br>";
echo "支票帳戶餘額:".$checking->getBalance()."<br>";
?>
</body>
</html>