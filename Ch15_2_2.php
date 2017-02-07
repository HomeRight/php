<?php

	if (isset($_POST["send"])) 
	{

		$name = $_POST["name"];
		$email = $_POST["email"];
		$message = nl2br($_POST["message"]);

		if (empty($name)) 
		{
			$error .= "姓名欄位不可為空"	 ;	
		}
		else
		{
			if (empty($email)) 
			{
				$error .= "電子郵件欄位不可為空";	
			}
			else
			{
				if (empty($message)) 
				{
					$error .= "留言欄位不可為空";	
				}
				else
				{
					$data = "name=".$name."&email=".$email."&message=".$message ;
					header("location: guestbook.php?".$data);
				}
			}
		}
		
	}
	else
	{
		$name="";
		$email="";
		$message="";
	}
	
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
<h1>訪客留言簿</h1><hr>

<div style="color:red">
	<?php echo $error ?>
</div>

<form method="post" action="">
	<div>
		<label for="name">姓名:</label>
		<input type="text" id="name" name="name" value="<?php echo $name?>"></input>
	</div><br>

	<div>
		<label for="email">電子郵件:</label>
		<input type="text" id="email" name="email" value="<?php echo $email?>"></input>
	</div><br>

	<div>
		<label for="message">留言:</label>
		<textarea id="message" name="message" rows="4" cols="30" value="<?php echo $message?>"></textarea>
	</div><br><hr>

	<input type="submit" name="send" value="送出留言"></input>
	<input type="reset" value="重設欄位"></input>
</form><br><br>
|<a href="Ch15_2_2.php">新增留言</a>|<a href="showmessage.php">檢視留言</a>|
</body>
</html>