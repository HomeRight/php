<?php
 	$msg="";
	if (isset($_POST["send"])) {
		$to = $_POST["to"];
		$subject = $_POST["subject"];
		$body = $_POST["body"];

		if (mail($to, $subject, $body)) {
			$msg .= "郵件已經成功記出" ;
		}
		else
			$msg .= "郵件寄送失敗" ;
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
	<h1>電子郵件處理</h1><hr>
	<form action="" method="post">
		<label for="to">收件者:</label>
		<input type="text" name="to" id="to"></input><br>
		<label for="subject">郵件主旨:</label>
		<input type="text" name="subject" id="subject"></input><br>
		<label for="body">郵件內容:</label>
		<input type="text" name="body" id="body"></input><br>
		<input type="submit" name="send" value="送出"></input><br>
	</form>
	<?php
		echo "$msg";
	?>
</body>
</html>