<?php
	$name = $email = $phone = $comment = $gender = "" ;

	if ($_SERVER["REQUEST_METHOD"] == "POST") 
	{
		$name = test_input($_POST["name"]);	
		$email = test_input($_POST["email"]);	
		$phone = test_input($_POST["phone"]);	
		$comment = test_input($_POST["comment"]);
		$gender = test_input($_POST["gender"]);	

	}

	function test_input($data)
	{
		$data = trim($data);
		$data = stripcslashes($data);
		$data = htmlspecialchars($data);
		return $data ;
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>test2</title>
	<meta charset="utf-8">
</head>
<style type="text/css">
	label{
		width: 500px;
	}
</style>
<body>

<h1>欄位驗證</h1>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>">
	<P>
		<label for="name" >姓名:</label>
		<input type="text" id="name" name="name" ></input>	
	</P>
	<P>
		<label for="email">電子郵件:</label>
		<input type="text" id="email" name="email" ></input>	
	</P>
	<P>
		<label for="phone">電話:</label>
		<input type="text" id="phone" name="phone" ></input>	
	</P>
	<p>
		<label for="comment">評論</label>
		<textarea id="comment" name="comment" rows="5" cols="30">	
		</textarea>
	</p>
	<p>
		性別:
		<input type="radio" id="gender1" name="gender" value="Male"><label for="gender1">Male</label></input>
		<input type="radio" id="gender2" name="gender" value="Female"><label for="gender2">Female</label></input>
	</p>
	<input type="submit" value="提交" name="send"></input>
</form>

<?php
	echo "<h1>Your Input:</h1><br><br>";
	echo "$name<br>";
	echo "$email<br>";
	echo "$phone<br>";
	echo "$comment<br>";
	echo "$gender<br>";
?>

</body>
</html>