<?php
	Class Account
	{
		private $balance ;
		public function deposit($amt)
		{
			if ($amt>0) {
				$this->balance = $this->balance + $amt;
			}
		}

		public function withdraw($amt)
		{
			if ($amt>0&&$this->checkBalace($amt)) {
				$this->balance = $this->balance - $amt ;
			}
		}
		public function getBalance()
		{
			return $this->balance ;
		}
		private function checkBalace($amt)
		{
			if ($amt<= $this->balance) {
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
$saving = new Account();
$checking = new Account();


$saving->deposit(1500);
$checking->deposit(2000);

echo "存款帳戶餘額:". $saving->getBalance()."<br>";
echo "支票帳戶餘額:". $checking->getBalance()."<br>";


$saving->withdraw(100);
$checking->deposit(100);

echo "存款帳戶餘額:". $saving->getBalance()."<br>";
echo "支票帳戶餘額:". $checking->getBalance()."<br>";


?>
</body>
</html>