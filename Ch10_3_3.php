<?php
	class Person
	{
		private $id ;

		function __construct($id)
		{
			$this->id = $id ;
		}

		protected function printPerson()
		{
			echo "身份證字號:".$this->id."<br>";
		}
	}

	
	class Student extends Person
	{
		private $grade ; 
		function __construct($id,$grade=60)
		{
			parent::__construct($id);
			$this->grade = $grade ;
		}

		function printPerson()
		{
			parent::printPerson();
			echo "學生成績:".$this->grade."<br>";
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
	$joe = new Student("A12345");
	$jane =new Student("B12345",45);

	$joe->printPerson();
	$jane->printPerson();
?>
</body>
</html>