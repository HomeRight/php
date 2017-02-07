<?php
	class Person
	{
		private $id ;

		function setId($id)
		{
			$this->id = $id ;
		}

		protected function printPerson()
		{
			echo "身份證字號:".$this->id."<br>";
		}
	}

	class Customer extends Person
	{
		private $credit_level ;
		
		function  __construct($id,$credit_level=5)
		{
			parent::setId($id);
			$this->credit_level = $credit_level ;
		}

		function printCustomer()
		{
			parent::printPerson();
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
<?php
	
$joe = new Customer("a123456");
$jane = new Customer("b123456",6);

$joe->setId("c123456");
$joe->printCustomer();
$jane->printCustomer();
	
?>
</body>
</html>